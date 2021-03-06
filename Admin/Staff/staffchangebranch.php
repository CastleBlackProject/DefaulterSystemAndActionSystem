<?php
    require '../../connection.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Staff</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="../../Images/vcetlogoicon.png"></img>&emsp;
        <a class="navbar-brand" href="https://vcet.edu.in/">VCET</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Institute Management
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../Branch/Index.php">Branch Master</a>
                        <a class="dropdown-item" href="../AcademicSession/Index.php">Academic Session</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Assign Staff</a>
                        <a class="dropdown-item" href="#">Assign Student</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Branch Management
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <!-- <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="../Staff/Index.php">Staff Master</a>
                        <a class="dropdown-item" href="../Subject/Index.php">Subject Master</a>
                        <a class="dropdown-item" href="../Students/Index.php">Student Master</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container" id="main-container">
        <form action="" method="POST">

            <div class="my-4" style="color:#0041b3">
                <h4>Change Staff Branch</h4>
            </div>
            <hr color="grey">
            <div class="form-row mt-5">
                <div class="form-group col-md-4">
                    <label for="txt_FirstName">Full Name</label>        
                    <input type="text" id="txt_FullName" name="txt_FullName" class="form-control" readonly ></input>
                </div>
                <div class="form-group col-md-4">
                    <label for="txt_Staff_College_Id">College Id Number</label>
                    <input type="text" id="txt_Staff_College_Id" name="txt_Staff_College_Id" readonly class="form-control">
                    </input>
                </div>                
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                        <label for="select_PrevBranch">Previous Branch</label>
                        <input type="text" id="txt_PrevBranch" name="txt_PrevBranch" readonly class="form-control">
                        </input>
                </div>
                <div class="form-group col-md-4">
                        <label for="select_NewBranch">New Branch</label>
                        <select id="select_NewBranch" name="select_NewBranch" class="form-control">
                     <?php
                        // $servername="localhost";
                        // $username="root";
                        // $password="";
                        // $db="vceterp";
                        // $con = new mysqli($servername,$username,$password,$db);
                        $sql = "SELECT * FROM branch_master";
                        $result = $con->query($sql);
                        while($row = $result->fetch_array())
                        {
                            echo "<option value ='".$row['Branch_Id']."'>".$row['Branch_Name']."</option>";
                        }  
                    ?>
                        </select>
                </div>                
            </div>
            <div class="my-4">
                <center>
                    <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                </center>
            </div>
            <?php  

                $StaffId = $_GET['StaffId'];

                $sql = "SELECT * FROM staff_master WHERE Staff_Id = " . $StaffId;
                $result = $con->query($sql);
                $sql5 = "SELECT * FROM staff_branch_link WHERE Staff_Id = " . $StaffId;
                $result5 = $con->query($sql5);                
            
                while($row = mysqli_fetch_array($result))
                {
                    $FirstName =  $row['First_Name'];        
                    $MiddleName =  $row['Middle_Name'];        
                    $LastName =  $row['Last_Name']; 
                    $DateOfBirth =  $row['Date_Of_Birth'];               
                    $Gender=  $row['Gender'];
                    $Contact =  $row['Contact'];
                    $Email =  $row['Email_Id'];
                    $Address =  $row['Address'];
                    $StaffBranchStatus =  $row['Staff_Status'];
                    $StaffCollegeId = $row['Staff_College_Id'];
                    $FullName = $FirstName." ".$MiddleName." ".$LastName;
                }
                $BranchId = 0;
                while($row5 = mysqli_fetch_array($result5))
                {
                    $BranchId = $row5['Branch_Id'];
                }

                $sql6 = "SELECT * FROM branch_master WHERE Branch_Id = ".$BranchId;
                $result6 = $con->query($sql6);
                while($row6 = mysqli_fetch_array($result6)){
                    $BranchName = $row6['Branch_Name'];
                }

                if(isset($_POST['submit'])) {
                    //$FirstName =  $_POST['txt_FirstName'];        
                    //$MiddleName =  $_POST['txt_MiddleName'];       
                    //$LastName =  $_POST['txt_LastName']; 
                    //$DateOfBirth =  $_POST['txt_DateOfBirth'];          
                    //$Gender=  $_POST['select_Gender'];
                    //$Contact =  $_POST['txt_Contact'];
                    //$Email =  $_POST['txt_Email'];
                    //$Address =  $_POST['txt_Address'];
                    //$StaffBranchStatus =  $_POST['select_StaffStatus'];
                    $BranchId = $_POST['select_NewBranch'];
                    $StaffBranchStatus= "Active";
                    $changeStaffBranchStatus= "DeActive";
                    //$StaffCollegeId = $_POST['txt_Staff_College_Id'];
                    //$BranchId = $_POST['select_Branch'];
                                
                    //$sql1="UPDATE staff_master SET First_Name='$FirstName',Middle_Name='$MiddleName',Last_Name='$LastName',Date_Of_Birth='$DateOfBirth',Gender='$Gender',Contact='$Contact',Email_Id='$Email',Address='$Address',Staff_Status='$StaffBranchStatus',Staff_College_Id='$StaffCollegeId' WHERE Staff_Id='$StaffId'";
                    
                    $sql1="INSERT INTO staff_branch_link(Staff_Id,Branch_Id,Staff_Branch_Status) VALUES('$StaffId','$BranchId','$StaffBranchStatus')";
                    $sql2="UPDATE staff_branch_link SET Staff_Branch_Status='$changeStaffBranchStatus' WHERE Staff_Id='$StaffId' && Staff_Branch_Status='$StaffBranchStatus'";
                    if($con->query($sql2) === TRUE ){
                        if($con->query($sql1) === TRUE){
                            echo "<script> location.href='Index.php'; </script>";
                        }
                        else{
                            echo "<br>error: ".$sql1."<br>".$con->error;
                        }
                    }
                    else{
                        echo "<br>error: ".$sql2."<br>".$con->error;
                    }
                }
           ?>
            <input type="button" value="Back To List" onclick="window.location.href='Index.php'"
                class="btn btn-primary" />

        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

    <script>

        var StaffCollegeId = "<?php echo $StaffCollegeId ?>";        
        var FullName = "<?php echo $FullName ?>";
        var BranchName = "<?php echo $BranchName ?>";

        $("#txt_Staff_College_Id").val(StaffCollegeId);
        $("#txt_FullName").val(FullName);
        $("#txt_PrevBranch").val(BranchName);

    </script>

</body>

</html>
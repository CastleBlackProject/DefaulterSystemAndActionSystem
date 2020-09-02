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
        <a class="navbar-brand" href="#">VCET</a>
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
                <h4>Staff Master</h4>
            </div>
            <hr color="grey">
            <div class="my-4" style="color:#0041b3">
                <h5>Personal Details</h5>
            </div>
            <div class="form-row mt-5">
                <div class="form-group col-md-4">
                    <label for="txt_FirstName">First Name</label>
                    <input type="text" id="txt_FirstName" name="txt_FirstName" class="form-control"
                        required="required" />
                </div>
                <div class="form-group col-md-4">
                    <label for="txt_MiddleName">Middle Name</label>
                    <input type="text" id="txt_MiddleName" name="txt_MiddleName" class="form-control"
                        required="required" />
                </div>
                <div class="form-group col-md-4">
                    <label for="txt_LastName">Last Name</label>
                    <input type="text" id="txt_LastName" name="txt_LastName" class="form-control"
                        required="required" />
                </div>                
            </div>
            <div class="form-row">               
            <div class="form-group col-md-3">
                    <label for="txt_DateOfBirth">Date Of Birth</label>
                    <input type="date" id="txt_DateOfBirth" name="txt_DateOfBirth" class="form-control"
                        required="required" />
                </div> 
                <div class="form-group col-md-3">
                    <label for="select_Gender">Gender</label>
                    <select id="select_Gender" name="select_Gender" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="select_StaffStatus">Staff Status</label>
                    <select id="select_StaffStatus" name="select_StaffStatus" class="form-control">
                        <option value="Active">Active</option>
                        <option value="De-Active">De-Active</option>
                    </select>
                </div>                
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="txt_Contact">Contact</label>
                    <input type="text" id="txt_Contact" name="txt_Contact" class="form-control"
                        required="required" />
                </div>
                <div class="form-group col-md-4">
                    <label for="txt_Email">Email ID</label>
                    <input type="email" id="txt_Email" name="txt_Email" class="form-control"
                        required="required" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="txt_Address">Address</label>
                    <input type="text" id="txt_Address" name="txt_Address" class="form-control"
                        required="required" />
                </div>
            </div>
            <hr color="grey">
            <div class="my-4" style="color:#0041b3">
                <h5>Academic Details </h5>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                        <label for="select_Branch">Branch</label>
                        <select id="select_Branch" name="select_Branch" class="form-control">
                    <?php
                        $servername="localhost";
                        $username="root";
                        $password="";
                        $db="vceterp";
                        $con = new mysqli($servername,$username,$password,$db);                        
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
                if(isset($_POST['submit'])) {
                    $FirstName =  $_POST['txt_FirstName'];        
                    $MiddleName =  $_POST['txt_MiddleName'];       
                    $LastName =  $_POST['txt_LastName']; 
                    $DateOfBirth =  $_POST['txt_DateOfBirth'];          
                    $Gender=  $_POST['select_Gender'];
                    $Contact =  $_POST['txt_Contact'];
                    $Email =  $_POST['txt_Email'];
                    $Address =  $_POST['txt_Address'];
                    $StaffStatus =  $_POST['select_StaffStatus'];
                    $BranchId = $_POST['select_Branch'];
                    $StaffBranchStatus= "Active";
                                
                    $sql1="INSERT INTO staff_master(First_Name,Middle_Name,Last_Name,Date_Of_Birth,Gender,Contact,Email_Id,Address,Staff_Status) VALUES('$FirstName','$MiddleName','$LastName','$DateOfBirth','$Gender','$Contact','$Email','$Address','$StaffStatus')";
                    
                    if($con->query($sql1) === TRUE ){
                        $sql2="SELECT max(Staff_Id) as id from staff_master";
                        $result2 = $con->query($sql2);
                        $row = $result2->fetch_assoc();

                        $StaffId=$row['id'];

                        $sql3="INSERT INTO staff_branch_link(Staff_Id,Branch_Id,Staff_Branch_Status) VALUES('$StaffId','$BranchId','$StaffBranchStatus')";
                    
                        if($con->query($sql3) === TRUE){
                            echo "<script> location.href='Index.php'; </script>";
                        }
                        else{
                            echo "<br>error: ".$sql3."<br>".$con->error;
                        }
                    }
                    else{
                        echo "<br>error: ".$sql1."<br>".$con->error;
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
</body>

</html>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Staff</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="../../Images/vcetlogoicon.png"></img>&emsp;
        <a class="navbar-brand" href="https://vcet.edu.in/">VCET</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="../Index.php" id="nav_Dashboard" role="button">Dashboard</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="../AcademicSession/Index.php" id="nav_AcademicSession" role="button">Academic Session </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="../Branch/Index.php" id="nav_Branch" role="button">Branch </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="../Staff/Index.php" id="nav_Staff" role="button">Staff </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="../Students/Index.php" id="nav_Students" role="button">Students</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="../Subject/Index.php" id="nav_Subject" role="button">Subject </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="../SubjectStaff/Create.php" id="nav_Staff" role="button">Assign Subject</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"><img src="../../Images/vcetlogoicon.png"></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item">Login Name</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"><button class="btn btn-outline-success my-2 my-sm-0" type="button" onclick="logout()">Log Out</button></a>
                    </div>
                </li>
                <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="button" onclick="logout()">Log Out</button> -->
            </ul>
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
                    <input type="text" id="txt_FirstName" name="txt_FirstName" class="form-control" required="required" />
                </div>
                <div class="form-group col-md-4">
                    <label for="txt_MiddleName">Middle Name</label>
                    <input type="text" id="txt_MiddleName" name="txt_MiddleName" class="form-control" />
                </div>
                <div class="form-group col-md-4">
                    <label for="txt_LastName">Last Name</label>
                    <input type="text" id="txt_LastName" name="txt_LastName" class="form-control" required="required" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="txt_DateOfBirth">Date Of Birth</label>
                    <input type="date" id="txt_DateOfBirth" name="txt_DateOfBirth" class="form-control" />
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
                    <input type="text" id="txt_Contact" name="txt_Contact" class="form-control" />
                </div>
                <div class="form-group col-md-4">
                    <label for="txt_Email">Email ID</label>
                    <input type="email" id="txt_Email" name="txt_Email" class="form-control" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="txt_Address">Address</label>
                    <input type="text" id="txt_Address" name="txt_Address" class="form-control" />
                </div>
            </div>
            <hr color="grey">
            <div class="my-4" style="color:#0041b3">
                <h5>Academic Details </h5>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="select_Branch">Branch</label>
                    <select id="select_Branch" name="select_Branch" disabled class="form-control">
                        <?php
                        // $servername = "localhost";
                        // $username = "root";
                        // $password = "";
                        // $db = "vceterp";
                        // $con = new mysqli($servername, $username, $password, $db);
                        $sql = "SELECT * FROM branch_master";
                        $result = $con->query($sql);
                        while ($row = $result->fetch_array()) {
                            echo "<option value ='" . $row['Branch_Id'] . "'>" . $row['Branch_Name'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="txt_Staff_College_Id">College Id Number</label>
                    <input type="text" id="txt_Staff_College_Id" name="txt_Staff_College_Id" class="form-control">
                    </input>
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


            while ($row = mysqli_fetch_array($result)) {
                $FirstName =  $row['First_Name'];
                $MiddleName =  $row['Middle_Name'];
                $LastName =  $row['Last_Name'];
                $DateOfBirth =  $row['Date_Of_Birth'];
                $Gender =  $row['Gender'];
                $Contact =  $row['Contact'];
                $Email =  $row['Email_Id'];
                $Address =  $row['Address'];
                $StaffBranchStatus =  $row['Staff_Status'];
                $StaffCollegeId = $row['Staff_College_Id'];
            }
            while ($row5 = mysqli_fetch_array($result5)) {
                $BranchId = $row5['Branch_Id'];
            }

            if (isset($_POST['submit'])) {
                $FirstName =  $_POST['txt_FirstName'];
                $MiddleName =  $_POST['txt_MiddleName'];
                $LastName =  $_POST['txt_LastName'];
                $DateOfBirth =  $_POST['txt_DateOfBirth'];
                $Gender =  $_POST['select_Gender'];
                $Contact =  $_POST['txt_Contact'];
                $Email =  $_POST['txt_Email'];
                $Address =  $_POST['txt_Address'];
                //$StaffBranchStatus =  $_POST['select_StaffStatus'];
                $BranchId = $_POST['select_Branch'];
                $StaffBranchStatus = "Active";
                $StaffCollegeId = $_POST['txt_Staff_College_Id'];
                $BranchId = $_POST['select_Branch'];

                $sql1 = "UPDATE staff_master SET First_Name='$FirstName',Middle_Name='$MiddleName',Last_Name='$LastName',Date_Of_Birth='$DateOfBirth',Gender='$Gender',Contact='$Contact',Email_Id='$Email',Address='$Address',Staff_Status='$StaffBranchStatus',Staff_College_Id='$StaffCollegeId' WHERE Staff_Id='$StaffId'";


                //if($con->query($sql1) === TRUE ){

                //$sql2="UPDATE staff_branch_link SET Branch_Id='$BranchId' WHERE Staff_Id='$StaffId' && Staff_Branch_Status='$StaffBranchStatus'";

                if ($con->query($sql1) === TRUE) {
                    echo "<script> location.href='Index.php'; </script>";
                } else {
                    echo "<br>error: " . $sql1 . "<br>" . $con->error;
                }
                //}
                //else{
                //    echo "<br>error: ".$sql1."<br>".$con->error;
                //}
            }
            ?>
            <input type="button" value="Back To List" onclick="window.location.href='Index.php'" class="btn btn-primary" />

        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script>
        var FirstName = "<?php echo $FirstName ?>";
        var MiddleName = "<?php echo $MiddleName ?>";
        var LastName = "<?php echo $LastName ?>";
        var DateOfBirth = "<?php echo $DateOfBirth ?>";
        var Gender = "<?php echo $Gender ?>";
        var Contact = "<?php echo $Contact ?>";
        var Email = "<?php echo $Email ?>";
        var Address = "<?php echo $Address ?>";
        var StaffBranchStatus = "<?php echo $StaffBranchStatus ?>";
        var StaffCollegeId = "<?php echo $StaffCollegeId ?>";
        var BranchId = "<?php echo $BranchId ?>";
        $("#txt_FirstName").val(FirstName);
        $("#txt_MiddleName").val(MiddleName);
        $("#txt_LastName").val(LastName);
        $("#txt_DateOfBirth").val(DateOfBirth);
        $("#txt_Contact").val(Contact);
        $("#txt_Email").val(Email);
        $("#txt_Address").val(Address);
        $("#txt_Staff_College_Id").val(StaffCollegeId);

        var select_Gender = document.getElementById("select_Gender");
        var options_Gender = select_Gender.options;
        for (var j = 0, option; option = options_Gender[j]; j++) {

            if (option.value == Gender) {
                select_Gender.selectedIndex = j;
            }
        }

        var select_StaffStatus = document.getElementById("select_StaffStatus");
        var options_StaffStatus = select_StaffStatus.options;
        for (var j = 0, option; option = options_StaffStatus[j]; j++) {

            if (option.value == StaffBranchStatus) {
                select_StaffStatus.selectedIndex = j;
            }
        }

        var select_Branch = document.getElementById("select_Branch");
        var options_Branch = select_Branch.options;
        for (var j = 0, option; option = options_Branch[j]; j++) {

            if (option.value == BranchId) {
                select_Branch.selectedIndex = j;
            }
        }
    </script>

    <script>
        function logout() {
            window.location.href = '../../Login.php';
        }
    </script>


</body>

</html>
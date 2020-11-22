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
                <!-- <div class="form-group col-md-3">
                    <label for="select_StaffStatus">Staff Status</label>
                    <select id="select_StaffStatus" name="select_StaffStatus" class="form-control">
                        <option value="Active">Active</option>
                        <option value="De-Active">De-Active</option>
                    </select>
                </div>                 -->
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
                <div class="form-group col-md-4">
                    <label for="select_Branch">Branch</label>
                    <select id="select_Branch" name="select_Branch" class="form-control">
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
                <div class="form-group col-md-3">
                    <label for="txt_Staff_College_Id">Is Admin?</label>
                    <select id="select_IsAdmin" name="select_IsAdmin" class="form-control">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
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
            if (isset($_POST['submit'])) {
                $FirstName =  $_POST['txt_FirstName'];
                $MiddleName =  $_POST['txt_MiddleName'];
                $LastName =  $_POST['txt_LastName'];
                $DateOfBirth =  $_POST['txt_DateOfBirth'];
                $Gender =  $_POST['select_Gender'];
                $Contact =  $_POST['txt_Contact'];
                $Email =  $_POST['txt_Email'];
                $Address =  $_POST['txt_Address'];
                // $StaffStatus =  $_POST['select_StaffStatus'];
                $StaffStatus =  "Active";
                $BranchId = $_POST['select_Branch'];
                $StaffBranchStatus = "Active";
                $staffcollegeid = $_POST['txt_Staff_College_Id'];
                $IsAdmin = $_POST['select_IsAdmin'];
                $sql1 = "INSERT INTO staff_master(Staff_College_Id,First_Name,Middle_Name,Last_Name,Date_Of_Birth,Gender,Contact,Email_Id,Address,Staff_Status) VALUES('$staffcollegeid','$FirstName','$MiddleName','$LastName','$DateOfBirth','$Gender','$Contact','$Email','$Address','$StaffStatus')";

                if ($con->query($sql1) === TRUE) {
                    $sql2 = "SELECT max(Staff_Id) as id from staff_master";
                    $result2 = $con->query($sql2);
                    $row = $result2->fetch_assoc();

                    $StaffId = $row['id'];

                    $sql3 = "INSERT INTO staff_branch_link(Staff_Id,Branch_Id,Staff_Branch_Status) VALUES('$StaffId','$BranchId','$StaffBranchStatus')";
                    $sql4 = "INSERT INTO staff_admin_login(Staff_Id,Staff_College_Id,Staff_Password,Is_Admin) VALUES('$StaffId','$staffcollegeid','$staffcollegeid','$IsAdmin')";
                    if ($con->query($sql3) === TRUE) {
                        if ($con->query($sql4) === TRUE) {
                            echo "<script> location.href='Index.php'; </script>";
                        } else {
                            echo "<br>error: " . $sql4 . "<br>" . $con->error;
                        }
                    } else {
                        echo "<br>error: " . $sql3 . "<br>" . $con->error;
                    }
                } else {
                    echo "<br>error: " . $sql1 . "<br>" . $con->error;
                }
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
        function logout() {
            window.location.href = '../../Login.php';
        }
    </script>

</body>

</html>
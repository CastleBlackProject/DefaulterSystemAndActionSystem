<?php

$StaffId = $_COOKIE["StaffId"];
$SubjectId = $_COOKIE["SubjectId"];
$AcademicSessionId = $_COOKIE["AcademicSessionId"];

$servername = "localhost";
$username = "root";
$password = "";
$db = "vceterp";
$con = new mysqli($servername, $username, $password, $db);
if (!$con) {
    //die('could not connect'.mysql_error());
} else {
    //echo "<h1>database connected</h1>";
}

$sql = "SELECT * FROM student_master NATURAL JOIN subject_master NATURAL JOIN student_branch_year_link WHERE Subject_Id = " . $SubjectId . " AND Academic_Session_Id = " . $AcademicSessionId;
$result = $con->query($sql);

$sql1 = "SELECT * FROM lecture_master WHERE Staff_Id = " . $StaffId . " AND Subject_Id = " . $SubjectId . " AND Academic_Session_Id = " . $AcademicSessionId;
$result1 = $con->query($sql1);

$LectureNo = 0;
while ($row = mysqli_fetch_array($result1)) {
    $LectureNo++;
}

$LectureNo++;


$timezone = "Asia/Colombo";
date_default_timezone_set($timezone);
$today = date("Y-m-d");

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Attendance</title>
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
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Institute Management
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../Branch/Index.php">Branch Master</a>
                        <a class="dropdown-item" href="#">Academic Session</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Assign Staff</a>
                        <a class="dropdown-item" href="#">Assign Student</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Branch Management
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <!-- <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="../Staff/Index.php">Staff Master</a>
                        <a class="dropdown-item" href="../Subject/Index.php">Subject Master</a>
                        <a class="dropdown-item" href="../Subject/Index.php">Student Master</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container-fluid" id="main-container">
        <form method="POST" action="">
            <div>
                <div class="my-4" style="color:#0041b3">
                    <h4>Attendance</h4>
                </div>

                <hr />

                <div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Lecture No.</label>
                            <?php
                            echo '<input type="number" id="txt_LectureNo" name="txt_LectureNo" value="' . $LectureNo . '" class="form-control" />';
                            ?>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Date</label>
                            <input type="date" id="txt_LectureDate" name="txt_LectureDate" value="<?php echo $today ?>" class="form-control" />
                        </div>
                        <div class="form-group col-md-3 p-4">
                            <button type="button" class="btn btn-primary m-1" data-toggle="modal" data-target="#exampleModalCenter">
                                Enter Roll Number
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <hr />

            <div id="container_fieldset">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th hidden>Student ID</th>
                            <th>Roll No.</th>
                            <th>Student's Name</th>
                            <th><input type="checkbox" id="chkboc_checkAll" onclick="checkAllStudents()" /> <label class="ml-1">Check All</label></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                            $StudentName = "";

                            if ($row['Middle_Name'] != "") {
                                $StudentName = $row['First_Name'] . " " . $row['Middle_Name'] . " " . $row['Last_Name'];
                            } else {
                                $StudentName = $row['First_Name'] . " " . $row['Last_Name'];
                            }

                            echo '<tr>' .
                                '<td hidden><input type="text" name="StudentId[]" value="' . $row['Student_Id'] . '" /></td>' .
                                '<td style="width: 150px;">' . $row['Roll_Number'] . '</td>' .
                                '<td>' . $StudentName . '</td>' .
                                '<td><input type="checkbox" name="chkbox_Attendance[]" value="' . $row['Student_Id'] . '" class="chkbox_Attendance" /></td>' .
                                '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="my-4">
                <center>
                    <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                </center>
            </div>

            <?php

            if (isset($_POST['submit'])) {
                $StaffId = $_COOKIE["StaffId"];
                $SubjectId = $_COOKIE["SubjectId"];
                $AcademicSessionId = $_COOKIE["AcademicSessionId"];

                $LectureNo = $_POST['txt_LectureNo'];
                $LectureDate = $_POST['txt_LectureDate'];
                $Students = $_POST['StudentId'];
                $StudentsPresent = $_POST['chkbox_Attendance'];

                $sql1 = "INSERT INTO lecture_master(Academic_Session_Id,Subject_Id,Staff_Id,Lecture_Number,Lecture_Date) VALUES($AcademicSessionId,$SubjectId,$StaffId,'$LectureNo','$LectureDate')";

                if ($con->query($sql1) === TRUE) {
                    //echo "<script> alert('success') </script>";
                } else {
                    echo "<br>error: " . $sql1 . "<br>" . $con->error;
                }

                $LectureId = 0;

                $sql2 = "SELECT max(Lecture_Id) as id from lecture_master";
                $result2 = $con->query($sql2);
                $row = $result2->fetch_assoc();
                if ($row['id'] == 0) {
                    $LectureId = 1;
                } else {
                    $LectureId = $row['id'];
                }

                for ($i = 0; $i < count($Students); $i++) {
                    $isPresent = false;
                    for ($j = 0; $j < count($StudentsPresent); $j++) {
                        if ($Students[$i] == $StudentsPresent[$j]) {
                            $sql3 = "INSERT INTO attendance_master(Lecture_Id,Student_Id,Is_Present) VALUES($LectureId,$Students[$i],1)";
                            $isPresent = true;
                        }
                    }

                    if (!$isPresent) {
                        $sql3 = "INSERT INTO attendance_master(Lecture_Id,Student_Id,Is_Present) VALUES($LectureId,$Students[$i],0)";
                    }

                    if ($con->query($sql3) === TRUE) {
                        echo "<script>window.location.href='../Dashboard/Index.php'</script>";
                    } else {
                        echo "<br>error: " . $sql3 . "<br>" . $con->error;
                    }
                }
            }

            ?>

            <input type="button" onclick="backToList()" value="Back To List" class="btn btn-primary" />

        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--modal-dialog-centered-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Take Attendance</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <!-- <select id="select_AttendanceType" class="form-control">
                                    <option value="1">Manually</option>
                                    <option value="2">Google Meet</option>
                                </select> -->
                                <button type="button" id="select_AttendanceType" value="1" class="btn btn-primary">Manually</button>
                                <button type="button" id="select_AttendanceType" value="2" class="btn btn-primary">Google meet</button>
                            </div>
                        </div>
                        <div class="form-row">
                            <div id="container_takeAttendance" class="form-group col-md-12">
                                <textarea id="txt_Attendance" class="form-control"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="footer_buttons" class="modal-footer">
                    <button type="button" class="btn btn-success">Present</button>
                    <button type="button" class="btn btn-primary">Absent</button>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

        <script>
            function checkAllStudents() {
                var checkbox = document.getElementsByClassName("chkbox_Attendance");

                for (var i = 0; i < checkbox.length; i++) {
                    if ($(this).prop("checked") == true) {
                        checkbox[i].checked = false;
                    } else {
                        checkbox[i].checked = true;
                    }
                }
            }

            function backToList() {
                window.location.href = '../Dashboard/Index.php';
            }

            $("#select_AttendanceType").change(function() {
                $("#container_takeAttendance").empty();
                $("#footer_buttons").empty();
                var AttendanceType = document.getElementById("select_AttendanceType").value;
                if (AttendanceType == 1) {
                    var html1 = '<textarea id="txt_Attendance" class="form-control"></textarea>';
                    var html2 = '<button type="button" id="btn_Absent" class="btn btn-danger">Absent</button>' +
                                '<button type="button" id="btn_Present" class="btn btn-success">Present</button>';
                } else if (AttendanceType == 2) {
                    var html1 = '<textarea id="txt_Attendance" class="form-control" rows="18"></textarea>';
                    var html2 = '<button type="button" id="btn_MeetAttendance" class="btn btn-primary px-3 py-1">Go</button>';
                }
                $("#container_takeAttendance").append(html1);
                $("#footer_buttons").append(html2);
            });

        </script>

</body>

</html>
<?php
require '../../connection.php';
?>

<?php 

    $StaffId = $_COOKIE["StaffId"];
    $SubjectId = $_COOKIE["SubjectId"];
    $AcademicSessionId = $_COOKIE["AcademicSessionId"];

    // $servername="localhost";
    // $username="root";
    // $password="";
    // $db="vceterp";
    // $con = new mysqli($servername,$username,$password,$db);
    // if(!$con)
    // {
    //     die('could not connect'.mysql_error());
    // }
    // else
    // {
    //     //echo "<h1>database connected</h1>";
    // }

    $sql1 = "SELECT * FROM student_master NATURAL JOIN subject_master NATURAL JOIN student_branch_year_link WHERE Subject_Id = ".$SubjectId." AND Academic_Session_Id = ".$AcademicSessionId;
    $result1 = $con->query($sql1);

    $sql2 = "SELECT * FROM lecture_master WHERE Subject_Id = ".$SubjectId." AND Staff_Id = ".$StaffId." AND Academic_Session_Id = ".$AcademicSessionId;
    $result2 = $con->query($sql2);
    $TotalLectures = 0;
    while($row2 = mysqli_fetch_array($result2)){
        $TotalLectures++;
    }

    $result2 = $con->query($sql2);
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

    <title>Defaulter</title>
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
                        <a class="dropdown-item" href="#">Academic Session</a>
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
                    <h4>Defaulter</h4>
                </div>
            </div>
            
            <hr /> 

            <div>
                <div class="form-row">
                    <?php
                        echo '<div class="form-group col-md-2">'.
                                '<label>Total Lectures</label>'.
                                '<input type="number" id="txt_TotalLectures" name="txt_TotalLectures" class="form-control" value="'.$TotalLectures.'" readonly/>'.
                            '</div>'
                    ?>
                    <div class="form-group col-md-2">
                        <label>Attendance Criteria (in %)</label>
                        <input type="number" id="txt_AttendanceCriteria" name="txt_AttendanceCriteria" class="form-control" />
                    </div>                                                               
                </div>            
            </div>
            <hr />            

            <div id="container_fieldset">
                <table  id="table_Students" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th hidden>Student ID</th>
                            <th>Roll No.</th>
                            <th>Student's Name</th>
                            <th>No. of Lectures Attended</th>
                            <th>Percentage</th>
                        </tr>
                    </thead>
                    <tbody id="tbody_Students">
                        <?php
                            while($row1 = mysqli_fetch_array($result1))
                            {
                                $StudentId = $row1['Student_Id'];

                                $LecturesAttended = 0;

                                $result2 = $con->query($sql2);

                                while($row2 = mysqli_fetch_array($result2))
                                {
                                    $sql3 = "SELECT * FROM attendance_master WHERE Lecture_Id = ".$row2['Lecture_Id']." AND Student_Id = ".$StudentId;
                                    $result3 = $con->query($sql3);

                                    while($row3 = mysqli_fetch_array($result3))
                                    {
                                        if($row3['Is_Present'] == 1){
                                            $LecturesAttended++;
                                        }
                                    }
                                }

                                $StudentName = "";

                                if($row1['Middle_Name'] != ""){
                                    $StudentName = $row1['First_Name'] . " " . $row1['Middle_Name'] . " " . $row1['Last_Name'];
                                }
                                else{
                                    $StudentName = $row1['First_Name'] . " " . $row1['Last_Name'];
                                }
                                if($TotalLectures != 0){
                                    $AttendancePercentage = ($LecturesAttended/$TotalLectures) * 100;}
                                else{
                                    $AttendancePercentage=0;   
                                }

                                echo'<tr>'.
                                    '<td hidden><input type="text" name="StudentId[]" value="'.$row1['Student_Id'].'" /></td>'.
                                    '<td style="width: 150px;">'.$row1['Roll_Number'].'</td>'.
                                    '<td>'.$StudentName.'</td>'.
                                    '<td>'.$LecturesAttended.'</td>'.
                                    '<td>'.$AttendancePercentage.'</td>'.
                                '</tr>';
                            }                            
                        ?>
                    </tbody>
                </table>
            </div>            
            
            <!-- <div class="my-4">
                <center>
                    <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                </center>
            </div> -->

            <input type="button" onclick="backToList()" value="Back To List" class="btn btn-primary" />

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

        <script>

            $("#txt_AttendanceCriteria").change(function(){
                var AttendanceCriteria = $(this).val();
                var tbody = document.getElementById("tbody_Students");
                var countRows = $('#table_Students tbody').find('tr').length;

                for(var i=1; i <= countRows; i++){
                    var row = tbody.childNodes[i];
                    var AttendancePercentage = parseFloat(row.childNodes[4].innerHTML);

                    if(AttendancePercentage < AttendanceCriteria){
                        row.style.backgroundColor = "#cc2f2f";
                        row.style.color = "#ffffff";
                    }else{
                        row.style.backgroundColor = "white";
                        row.style.color = "#000000";
                    }
                }
            });

            var StaffId = <?php echo $StaffId;?>;

            function backToList(){
                window.location.href='../Dashboard/Index.php';
            }

        </script>

</body>

</html>
<?php 
    $StaffId = $_COOKIE["StaffId"];
    $SubjectId = $_COOKIE["SubjectId"];
    $AcademicSessionId = $_COOKIE["AcademicSessionId"];

    $servername="localhost";
    $username="root";
    $password="";
    $db="vceterp";
    $con = new mysqli($servername,$username,$password,$db);
    if(!$con)
    {
        die('could not connect'.mysql_error());
    }    
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

    <title>Lectures</title>
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

    <div class="container-fluid">
        <div>
            <div class="my-4" style="color:#0041b3">
                <h4>Lectures</h4>
            </div>

            <div class="my-5">
                <div class="p-4">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col" hidden>Lecture ID</th>
                                <th scope="col">Lecture No.</th>
                                <th scope="col">Date</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                                $sql = "SELECT * FROM lecture_master WHERE Staff_Id = ".$StaffId." AND Subject_Id = ".$SubjectId." AND Academic_Session_Id = ".$AcademicSessionId;
                                $result = $con->query($sql);
                                //if ($result->num_rows > 0)

                                while($row = mysqli_fetch_array($result))
                                {
                                    echo "<tr>";
                                    echo "<td hidden>" . $row['Lecture_Id'] . "</td>";
                                    echo "<td>" . $row['Lecture_Number'] . "</td>";
                                    echo "<td>" . $row['Lecture_Date'] . "</td>";
                                    echo "<td><button type='button' onclick='showAttendance(this)' class='btn btn-success'>View / Edit Attendance</button></td>";                                    
                                    echo "</tr>";
                                }
                        ?>
                        </tbody>
                    </table>
                </div>

                <input type="button" onclick="backToList()" value="Back To List" class="btn btn-primary" />
            </div>
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

            function backToList(){
                window.location.href='../Dashboard/Index.php';
            }

            function showAttendance(btn){
                var LectureId = btn.parentNode.parentNode.childNodes[0].innerHTML;
                window.location.href = 'ShowAttendance.php?id='+LectureId;
            }

        </script>

</body>

</html>
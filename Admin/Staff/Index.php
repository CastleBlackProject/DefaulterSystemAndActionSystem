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
                    <a class="nav-link disabled" href="../Staff/Index.php" id="nav_Staff" role="button">Staff </a>
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

    <div class="container-fluid">
        <div>
            <div class="my-4" style="color:#0041b3">
                <h4>Staff Master</h4>
            </div>

            <div class="my-5">

                <input type="button" value="Create" onclick="window.location.href='Create.php'" class="btn btn-primary" />
                <div class="p-4">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" hidden>Staff ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Branch Code</th>
                                <th scope="col">Branch Status</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            // $servername = "localhost";
                            // $username = "root";
                            // $password = "";
                            // $db = "vceterp";
                            // $con = new mysqli($servername, $username, $password, $db);
                            // if (!$con) {
                            //     //die('could not connect'.mysql_error());
                            // } else {
                            //     #echo "<h1>database connected</h1>";
                            // }

                            $sql = "SELECT * FROM staff_master";
                            $result = $con->query($sql);
                            //if ($result->num_rows > 0)

                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td hidden>" . $row['Staff_Id'] . "</td>";
                                echo "<td>" . $row['First_Name'] . " " . $row['Middle_Name'] . " " . $row['Last_Name'] . "</td>";
                                echo "<td>" . $row['Date_Of_Birth'] . "</td>";
                                echo "<td>" . $row['Staff_Status'] . "</td>";
                                echo "<td><button type='button' class='btn btn-success' onclick='edit(this)'>Edit</button></td>";
                                echo "<td><button type='button' class='btn btn-warning' onclick='staffchangebranch(this)'>Change Branch</button></td>";
                                echo "</tr>";
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <script>
            function edit(btn) {

                var StaffId = btn.parentNode.parentNode.childNodes[0].innerHTML;

                window.location.href = 'Edit.php?StaffId=' + StaffId;
            }

            function staffchangebranch(btn) {
                var StaffId = btn.parentNode.parentNode.childNodes[0].innerHTML;

                window.location.href = 'staffchangebranch.php?StaffId=' + StaffId;
            }
        </script>

        <script>
            function logout() {
                window.location.href = '../../Login.php';
            }
        </script>
</body>

</html>
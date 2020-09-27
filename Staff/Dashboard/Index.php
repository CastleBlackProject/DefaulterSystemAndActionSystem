<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Dashboard</title>
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

    <?php 

        $StaffId = 1;
        setcookie("Staff_Id",$StaffId, 86400, "/");

    ?>

    <?php

    if(!isset($_COOKIE["Staff_Id"])) 
    {
        
        //echo "Cookie named '" . $cookie_name . "' is not set!";
    } 
    else 
    {
        $StaffId = $_COOKIE["StaffId"];
        //echo "<script>console.log(".$StaffId.")</script>";
    }

    ?>

    <div class="container-fluid">
        <div>
            <div class="my-4" style="color:#0041b3">
                <h4>Dashboard</h4>
            </div>
            <div class="my-5">

                <div class="form-row">
                    <div class="form-group col-md-2 my-2">
                        <label for="select_Academic_Session_Id">Academic Session</label>
                        <select id="select_Academic_Session_Id" name="select_Academic_Session_Id" class="form-control">
                            <?php
                                $servername="localhost";
                                $username="root";
                                $password="";
                                $db="vceterp";
                                $con = new mysqli($servername,$username,$password,$db);
                                if(!$con)
                                {
                                    die('could not connect'.mysql_error());
                                }
                                else
                                {
                                    //echo "<h1>database connected</h1>";
                                }

                                $sql = "SELECT * FROM academic_session_master";
                                $result = $con->query($sql);
                                while($row = $result->fetch_array())
                                {
                                    echo "<option value ='".$row['Academic_Session_Id']."'>".$row['Academic_Session_Name']."</option>";
                                }  
                            ?>
                        </select>
                    </div>

                    <?php
                        echo '<div class="form-group col-md-3">'.
                                '<input type="text" id="Staff_Id" name="Staff_Id" value="'.$StaffId.'" class="form-control" hidden/>'.
                            '</div>';
                    ?>

                </div>

                <hr />

                <?php                    

                    $sql = "SELECT * FROM staff_branch_link NATURAL JOIN subject_staff_link NATURAL JOIN branch_master NATURAL JOIN subject_master WHERE Staff_Id = " .$StaffId;
                    $result = $con->query($sql);

                    while($row = mysqli_fetch_array($result))
                    {
                        $SemesterId = $row["Semester_Id"];
                        $Semester = "Semester " .$SemesterId;
                        $Year = "";
                        
                        if($SemesterId == 1 || SemesterId == 2)
                        {
                            $Year = "FE";
                        }
                        else if($SemesterId == 3 || $SemesterId == 4)
                        {
                            $Year = "SE";
                        }
                        else if($SemesterId == 5 || $SemesterId == 6)
                        {
                            $Year = "TE";
                        }
                        else if($SemesterId == 7 || $SemesterId == 8)
                        {
                            $Year = "BE";
                        }

                        echo '<div class="form-row p-4 m-1" style="background-color: whitesmoke;">'.
                                '<input type="text" value="'.$row['Subject_Id'].'" hidden />'.
                                '<div class="form-group col-md-3">'.
                                    '<h3 style="color: #1c158a">'.$row["Branch_Name"].'</h3>'.
                                    '<h4 style="color: #35117d" class="mt-3">'.$Year.'-' .$Semester.'</h4>'.
                                '</div>'.
                                '<div class="form-group col-md-7">'.
                                    '<h4 style="color: #35117d" class="mt-3">'.$row["Subject_Name"].'</h4>'.
                                '</div>'.
                                '<div class="form-group col-md-2">'.
                                    '<button onclick="takeAttendance(this)" class="btn btn-outline-success m-2 px-4 py-2">View</button>'.
                                '</div>'.
                            '</div>';
                    }
                ?>

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

        <script>

            function edit(btn) {

                var SubjectId = btn.parentNode.parentNode.childNodes[0].innerHTML;

                window.location.href = 'Edit.php?SubjectId=' + SubjectId;
            }

            $("#btn_Search").click(function () {
                $("#container_Table").empty();
                var SemesterId = $("#select_Semester").val();
                var BranchId = $("#select_BranchId").val();

                $.ajax({
                    type: "GET",
                    url: 'SubjectSearchFunction.php',
                    contentType: "application/json; charset=utf-8",
                    datatype: "Json",
                    data: { SemesterId: SemesterId, BranchId: BranchId },
                    success: function (data) {
                        var obj = JSON.parse(data);
                        $("#container_Table").append(obj.success);
                    },
                    error: function () {
                        console.log("error");
                    }
                });
            });

            function setCookie(cname, cvalue, exdays) {
                var d = new Date();
                d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                var expires = "expires=" + d.toUTCString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            }

            function getCookie(cname) {
                var name = cname + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }

            function takeAttendance(btn) {

                var row = btn.parentNode.parentNode;
                var StaffId = document.getElementById("Staff_Id").value;
                var SubjectId = row.childNodes[0].value;
                var AcademicSessionId = document.getElementById("select_Academic_Session_Id").value;

                setCookie("StaffId",StaffId,1);
                setCookie("SubjectId",SubjectId,1);
                setCookie("AcademicSessionId",AcademicSessionId,1);

                window.location.href="../Attendance/Index.php";
            }            

        </script>

</body>

</html>
<?php 

    $StaffId = $_COOKIE["StaffId"];
    $SubjectId = $_COOKIE["SubjectId"];
    $AcademicSessionId = $_COOKIE["AcademicSessionId"];

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

    <title>Attendance</title>
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
                    <h4>Attendance</h4>
                </div>

                <hr />

                <div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Lecture No.</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="form-group col-md-3">
                            <label>Date</label>
                            <input type="date" class="form-control" />
                        </div>                                              
                    </div>            
                </div>

            </div>            

            <hr />            

            <div id="container_fieldset">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th hidden>Student ID</th>
                            <th>Roll No.</th>
                            <th>Student's Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td hidden>Student ID</td>
                            <td style="width: 150px;">1</td>
                            <td>Yash Hitesh Jobalia</td>
                            <td><input type="checkbox" /></td>
                        </tr>
                    </tbody>
                </table>
            </div>            
            
            <input type="button" value="Back To List" onclick="window.location.href='../Dashboard/Index.html'" class="btn btn-primary" />

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
            function edit(btn){

                var SubjectId = btn.parentNode.parentNode.childNodes[0].innerHTML;

                window.location.href='Edit.php?SubjectId=' + SubjectId;
            }
                        
            $("#btn_Search").click(function(){
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
                    error: function(){
                        console.log("error");
                    }
                });
            });
        </script>

</body>

</html>
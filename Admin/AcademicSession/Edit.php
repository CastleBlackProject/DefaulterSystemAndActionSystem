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

    <title>Academic Session</title>
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
                <h4>Academic Session</h4>
            </div>


            <div class="form-row mt-5">
                <div class="form-group col-md-4">
                    <label for="txt_SessionName">Session Name</label>
                    <input type="text" id="txt_SessionName" name="txt_SessionName" class="form-control" required="required" />

                </div>
                <div class="form-group col-md-4">
                    <label for="select_SessionStatus">Session Status</label>
                    <select id="select_SessionStatus" name="select_SessionStatus" class="form-control">
                        <option>Active</option>
                        <option>De-Active</option>
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

            $AcademicSessionId = $_GET['AcademicSessionId'];

            $sql = "SELECT * FROM academic_session_master WHERE Academic_Session_Id = " . $AcademicSessionId;
            $result = $con->query($sql);

            while ($row = mysqli_fetch_array($result)) {
                $SessionName =  $row['Academic_Session_Name'];
                $SessionStatus =  $row['Academic_Session_Status'];
            }

            if (isset($_POST['submit'])) {
                $SessionName = $_POST['txt_SessionName'];
                $SessionStatus = $_POST['select_SessionStatus'];
                //$BranchId = $_POST['txt_BranchId'];
                //echo "<br>record will be updated at Subject id ";
                //echo $BranchId;

                $sql = "UPDATE academic_session_master SET Academic_Session_Name='$SessionName',Academic_Session_Status='$SessionStatus' WHERE Academic_Session_Id='$AcademicSessionId'";

                if ($con->query($sql) === TRUE) {
                    #echo "<br> record updated successfully";
                    echo "<script> location.href='Index.php'; </script>";
                } else {
                    echo "<br>error: " . $sql . "<br>" . $con->error;
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
        var SessionName = "<?php echo $SessionName ?>";
        var SessionStatus = "<?php echo $SessionStatus ?>";

        $("#txt_SessionName").val(SessionName);

        var select_SessionStatus = document.getElementById("select_SessionStatus");
        var options_SessionStatus = select_SessionStatus.options;
        for (var j = 0, option; option = options_SessionStatus[j]; j++) {

            if (option.value == SessionStatus) {
                select_SessionStatus.selectedIndex = j;
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
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Subject</title>
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
                        <a class="dropdown-item" >Login Name</a>
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
                <h4>Subject Master</h4>
            </div>

            <div class="form-row mt-5">
                <div class="form-group col-md-4">
                    <label for="select_BranchId">Branch</label>
                    <select id="select_BranchId" name="select_BranchId" class="form-control">
                    <?php
                                 $servername="localhost";
                                 $username="root";
                                 $password="";
                                 $db="vceterp";
                                 $con = new mysqli($servername,$username,$password,$db);
                                //  if(!$con)
                                //  {
                                //      die('could not connect'.mysql_error());
                                //  }
                                //  else
                                //  {
                                //     echo "<script>alert(<h1>database connected</h1>);</script>";
                                //  }  
                                $sql = "SELECT * FROM branch_master";
                                $result = $con->query($sql);
                                while($row = $result->fetch_array())
                                {
                                    echo "<option value ='".$row['Branch_Id']."'>".$row['Branch_Name']."</option>";
                                }
                            ?>
                        <!-- <option value='1'>Computer Engineering</option>
                        <option value='2'>Information Technology</option> -->
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="select_Year">Year</label>
                    <select id="select_Year" name="select_Year" class="form-control">
                        <option value='0'>--Select--</option>
                        <option value='1'>FE</option>
                        <option value='2'>SE</option>
                        <option value='3'>TE</option>
                        <option value='4'>BE</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="select_Semester">Semester</label>
                    <select id="select_Semester" name="select_Semester" class="form-control">
                        <option value='0'>--Select--</option>
                        <option value='1'>Semester 1</option>
                        <option value='2'>Semester 2</option>
                        <option value='3'>Semester 3</option>
                        <option value='4'>Semester 4</option>
                        <option value='5'>Semester 5</option>
                        <option value='6'>Semester 6</option>
                        <option value='7'>Semester 7</option>
                        <option value='8'>Semester 8</option>
                    </select>
                </div>
            </div>
            <div class="form-row mt-5">
                <div class="form-group col-md-4">
                    <label for="txt_SubjectName">Subject Name</label>
                    <input type="text" id="txt_SubjectName" name="txt_SubjectName" class="form-control" required="required" />
                </div>
                <div class="form-group col-md-4">
                    <label for="txt_SubjectCode">Subject Code</label>
                    <input type="text" id="txt_SubjectCode" name="txt_SubjectCode" class="form-control" required="required" />
                </div>
                <div class="form-group col-md-4">
                    <label for="select_SubjectStatus">Subject Status</label>
                    <select id="select_SubjectStatus" name="select_SubjectStatus" class="form-control">
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
           
            if(isset($_POST['submit'])) {
                $SubjectName = $_POST['txt_SubjectName'];
                $SubjectCode = $_POST['txt_SubjectCode'];
                $SubjectStatus = $_POST['select_SubjectStatus'];
                $BranchId = $_POST['select_BranchId'];
                $SemesterId = $_POST['select_Semester'];

                $sql1="SELECT max(Subject_Id) as id from subject_master";
                $result = $con->query($sql1);
                $row = $result->fetch_assoc();

                $sql="INSERT INTO subject_master(Subject_Name,Subject_Code,Subject_Status,Branch_Id,Semester_Id) VALUES('$SubjectName','$SubjectCode','$SubjectStatus','$BranchId','$SemesterId')";
            
                if($con->query($sql) === TRUE )
                {
                    echo "<script> location.href='Index.php'; </script>";
                }
                else
                {
                    echo "<br>error: ".$sql."<br>".$con->error;
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

    <script>

        $("#select_Year").change(function(){
            var year = parseInt($("#select_Year").val());
            $("#select_Semester").empty();

            if(year == 0){
                html = "<option value='0'>--Select--</option>" +
                "<option value='1'>Semester 1</option>" +
                "<option value='2'>Semester 2</option>" +
                "<option value='3'>Semester 3</option>" +
                "<option value='4'>Semester 4</option>" +
                " <option value='5'>Semester 5</option>" +
                "<option value='6'>Semester 6</option>" +
                "<option value='7'>Semester 7</option>" +
                "<option value='8'>Semester 8</option>";
                $("#select_Semester").append(html);
            }
            else{
                var html = "";
                switch(year){
                    case 1:
                        html = "<option value='1'>Semester 1</option><option value='2'>Semester 2</option>"
                        break;
                    case 2:
                        html = "<option value='3'>Semester 3</option><option value='4'>Semester 4</option>"
                        break;
                    case 3:
                        html = "<option value='5'>Semester 5</option><option value='6'>Semester 6</option>"
                        break;
                    case 4:
                        html = "<option value='7'>Semester 7</option><option value='8'>Semester 8</option>"
                        break;
                }

                $("#select_Semester").append(html);
            }
        });

    </script>
    <script>

function logout(){
    window.location.href = '../../Login.php';
}

</script>
</body>

</html>
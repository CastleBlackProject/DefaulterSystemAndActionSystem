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
        <img src="Images/vcetlogoicon.png"></img>&emsp;
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
        #echo "<h1>database connected</h1>";
    }
    
    $SubjectId = $_GET['SubjectId'];

    $sql = "SELECT * FROM subject_master WHERE Subject_Id = " . $_GET['SubjectId'];
    $result = $con->query($sql);

    while($row = mysqli_fetch_array($result))
    {
        $SubjectName =  $row['Subject_Name'];
        $SubjectCode =  $row['Subject_Code'];
        $SubjectStatus =  $row['Subject_Status'];
        $BranchId =  $row['Branch_Id'];
        $SemesterId =  $row['Semester_Id'];
    } 

    if(isset($_POST['submit'])) {
        $SubjectName = $_POST['txt_SubjectName'];
        $SubjectCode = $_POST['txt_SubjectCode'];
        $SubjectStatus = $_POST['select_SubjectStatus'];
        $BranchId = $_POST['select_BranchId'];
        $SemesterId = $_POST['select_Semester'];
        //echo "<br>record will be updated at Subject id ";
        //echo $BranchId;
        
        $sql="UPDATE subject_master SET Subject_Name='$SubjectName',Subject_Code='$SubjectCode',Subject_Status='$SubjectStatus',Branch_Id='$BranchId',Semester_Id='$SemesterId' WHERE Subject_Id='$SubjectId'";
        
        if($con->query($sql) === TRUE ){
          #echo "<br> record updated successfully";
          echo "<script> location.href='Index.php'; </script>";
        }else
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
                "<option value='5'>Semester 5</option>" +
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

        var SubjectName = "<?php echo $SubjectName ?>";
        var SubjectCode = "<?php echo $SubjectCode ?>";
        var SubjectStatus = "<?php echo $SubjectStatus ?>";
        var BranchId = "<?php echo $BranchId ?>";
        var SemesterId = "<?php echo $SemesterId ?>";

        $("#txt_SubjectName").val(SubjectName);
        $("#txt_SubjectCode").val(SubjectCode);

        var select_SubjectStatus = document.getElementById("select_SubjectStatus");
        var options_SubjectStatus = select_SubjectStatus.options;
        for (var j = 0, option; option = options_SubjectStatus[j]; j++) {
            if (option.value == SubjectStatus) {
                select_SubjectStatus.selectedIndex = j;
            }
        }

        var select_BranchId = document.getElementById("select_BranchId");
        var options_BranchId = select_BranchId.options;
        for (var j = 0, option; option = options_BranchId[j]; j++) {
            if (option.value == BranchId) {
                select_BranchId.selectedIndex = j;
            }
        }

        var select_Semester = document.getElementById("select_Semester");
        var options_Semester = select_Semester.options;
        for (var j = 0, option; option = options_Semester[j]; j++) {
            if (option.value == SemesterId) {
                select_Semester.selectedIndex = j;
            }
        }

        var select_Year = document.getElementById("select_Year");
        var options_Year = select_Year.options;
        for (var j = 0, option; option = options_Year[j]; j++) {
            if(SemesterId == 1 || SemesterId == 2){
                select_Year.selectedIndex = 1;
            }
            else if(SemesterId == 3 || SemesterId == 4){
                select_Year.selectedIndex = 2;
            }
            else if(SemesterId == 5 || SemesterId == 6){
                select_Year.selectedIndex = 3;
            }
            else if(SemesterId == 7 || SemesterId == 8){
                select_Year.selectedIndex = 4;
            }
        }

    </script>

</body>

</html>
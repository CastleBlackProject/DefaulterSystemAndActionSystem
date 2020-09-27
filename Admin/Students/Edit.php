<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Students</title>
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
                        <a class="dropdown-item" href="../AcademicSession/Index.php">Academic Session</a>
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
                <h4>Student Master</h4>
            </div>
            <hr color="grey">
            <div class="my-4" style="color:#0041b3">
                <h5>Personal Details</h5>
            </div>


            <div class="form-row mt-5">
                <div class="form-group col-md-4">
                    <label for="txt_FirstName">First Name</label>
                    <input type="text" id="txt_FirstName" name="txt_FirstName" class="form-control"
                        required="required" />
                </div>
                <div class="form-group col-md-4">
                    <label for="txt_MiddleName">Middle Name</label>
                    <input type="text" id="txt_MiddleName" name="txt_MiddleName" class="form-control"
                        required="required" />
                </div>
                <div class="form-group col-md-4">
                    <label for="txt_LastName">Last Name</label>
                    <input type="text" id="txt_LastName" name="txt_LastName" class="form-control"
                        required="required" />
                </div>                
            </div>
            <div class="form-row">               
            <div class="form-group col-md-3">
                    <label for="txt_DateOfBirth">Date Of Birth</label>
                    <input type="date" id="txt_DateOfBirth" name="txt_DateOfBirth" class="form-control"
                        required="required" />
                </div> 
                <div class="form-group col-md-3">
                    <label for="select_Gender">Gender</label>
                    <select id="select_Gender" name="select_Gender" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>                
                <div class="form-group col-md-3">
                    <label for="select_StudentStatus">Student Status</label>
                    <select id="select_StudentStatus" name="select_StudentStatus" class="form-control">
                        <option value="Active">Active</option>
                        <option value="De-Active">De-Active</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="txt_Contact">Contact</label>
                    <input type="text" id="txt_Contact" name="txt_Contact" class="form-control"
                        required="required" />
                </div>
                <div class="form-group col-md-3">
                    <label for="txt_Email">Email ID</label>
                    <input type="email" id="txt_Email" name="txt_Email" class="form-control"
                        required="required" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="txt_Address">Address</label>
                    <input type="text" id="txt_Address" name="txt_Address" class="form-control"
                        required="required" />
                </div>
            </div>
            <hr color="grey">
            <div class="my-4" style="color:#0041b3">
                <h5>Academic Details </h5>
            </div>
            <div class="form-row">
            <div class="form-group col-md-4">
                        <label for="select_Academic_Session_Id">Academic Session</label>
                        <select id="select_Academic_Session_Id" name="select_Academic_Session_Id" class="form-control">
                    <?php
                        $servername="localhost";
                        $username="root";
                        $password="";
                        $db="vceterp";
                        $con = new mysqli($servername,$username,$password,$db);
                        $sql = "SELECT * FROM academic_session_master";
                        $result = $con->query($sql);
                        while($row = $result->fetch_array())
                        {
                            echo "<option value ='".$row['Academic_Session_Id']."'>".$row['Academic_Session_Name']."</option>";
                        }  
                    ?>
                        </select>
                </div>
                <div class="form-group col-md-4">
                        <label for="select_Branch">Branch</label>
                        <select id="select_Branch" name="select_Branch" class="form-control">
                    <?php
                        
                        $sql = "SELECT * FROM branch_master";
                        $result = $con->query($sql);
                        while($row = $result->fetch_array())
                        {
                            echo "<option value ='".$row['Branch_Id']."'>".$row['Branch_Name']."</option>";
                        }  
                    ?>
                        </select>
                </div> 
            </div>
            <div class="form-row">
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
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="txt_Student_College_Id">College Id Number</label>
                    <input type="text" id="txt_Student_College_Id" name="txt_Student_College_Id" class="form-control">
                    </input>
                </div>
                <div class="form-group col-md-4">
                    <label for="select_Roll_Number">Roll Number</label>
                    <input type="number" min="1" max="120" id="select_Roll_Number" name="select_Roll_Number" class="form-control">
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
    //     #echo "<h1>database connected</h1>";
    // }
    // $sql2="SELECT Student_Id as id from student_master ";
    //         $result2 = $con->query($sql2);
    //         $row = $result2->fetch_assoc();
    $StudentId = $_GET['StudentId'];

    $sql = "SELECT * FROM student_master WHERE Student_Id = " . $StudentId;
    $result = $con->query($sql);
    $sql5 = "SELECT * FROM student_branch_year_link WHERE Student_Id = " . $StudentId;
    $result5 = $con->query($sql5);
    while($row = mysqli_fetch_array($result))
    {
        $StudentCollegeId = $row['Student_College_Id'];
        $FirstName =  $row['First_Name'];        
        $MiddleName =  $row['Middle_Name'];        
        $LastName =  $row['Last_Name']; 
        $DateOfBirth =  $row['Date_Of_Birth'];               
        $Gender=  $row['Gender'];
        $Contact =  $row['Contact'];
        $Email =  $row['Email_Id'];
        $Address =  $row['Address'];
        $StudentStatus =  $row['Student_Status'];
    } 
    while($row5 = mysqli_fetch_array($result5))
    {
        $AcademicSessionId = $row5['Academic_Session_Id'];
        $BranchId = $row5['Branch_Id'];
        $semesterid = $row5['Semester_Id'];
        $YearId = $row5['Year_Id'];
        $RollNo = $row5['Roll_Number'];
    }
    if(isset($_POST['submit'])) {
        $StudentCollegeId = $_POST['txt_Student_College_Id'];
        $FirstName =  $_POST['txt_FirstName'];        
        $MiddleName =  $_POST['txt_MiddleName'];       
        $LastName =  $_POST['txt_LastName']; 
        $DateOfBirth =  $_POST['txt_DateOfBirth'];          
        $Gender=  $_POST['select_Gender'];
        $Contact =  $_POST['txt_Contact'];
        $Email =  $_POST['txt_Email'];
        $Address =  $_POST['txt_Address'];
        $StudentStatus =  $_POST['select_StudentStatus'];
        $AcademicSessionId = $_POST['select_Academic_Session_Id'];
        $BranchId = $_POST['select_Branch'];
        $semesterid = $_POST['select_Semester'];
        $YearId = $_POST['select_Year'];
        $StudentBranchStatus= "Active";
        $RollNo = $_POST['select_Roll_Number'];

        $sql="UPDATE student_master SET Student_College_Id='$StudentCollegeId',First_Name='$FirstName',Middle_Name='$MiddleName',Last_Name='$LastName',Date_Of_Birth='$DateOfBirth',Gender='$Gender',Contact='$Contact',Email_Id='$Email',Address='$Address',Student_Status='$StudentStatus' WHERE Student_Id='$StudentId'";
        $sql1="UPDATE student_branch_link SET Branch_Id='$BranchId',Student_Branch_Status='$StudentBranchStatus' WHERE Student_Id='$StudentId' AND Student_Branch_Status='$StudentBranchStatus'";
                
        $sql2="UPDATE student_branch_year_link SET Academic_Session_Id='$AcademicSessionId',Branch_Id='$BranchId',Semester_Id='$semesterid',Year_Id='$YearId',Roll_Number='$RollNo' WHERE Student_Id='$StudentId' ";
        if($con->query($sql) === TRUE && $con->query($sql1) === TRUE && $con->query($sql2) === TRUE){
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
        var StudentCollegeId = "<?php echo $StudentCollegeId ?>";
        var FirstName = "<?php echo $FirstName ?>";
        var MiddleName = "<?php echo $MiddleName ?>";
        var LastName = "<?php echo $LastName ?>";
        var DateOfBirth = "<?php echo $DateOfBirth ?>";
        var Gender = "<?php echo $Gender ?>";
        var Contact = "<?php echo $Contact ?>";
        var Email = "<?php echo $Email ?>";
        var Address = "<?php echo $Address ?>";
        var StudentStatus = "<?php echo $StudentStatus ?>";
        var AcademicSessionId = "<?php echo $AcademicSessionId ?>";
        var BranchId = "<?php echo $BranchId ?>";
        var SemesterId = "<?php echo $semesterid ?>";
        var YearId = "<?php echo $YearId ?>";
        var RollNo = "<?php echo $RollNo ?>";

        $("#txt_FirstName").val(FirstName);
        $("#txt_MiddleName").val(MiddleName);
        $("#txt_LastName").val(LastName);
        $("#txt_DateOfBirth").val(DateOfBirth);            
        $("#txt_Contact").val(Contact);
        $("#txt_Email").val(Email);
        $("#txt_Address").val(Address);

        var select_Gender = document.getElementById("select_Gender");
        var options_Gender = select_Gender.options;
        for (var j = 0, option; option = options_Gender[j]; j++) {

            if (option.value == Gender) {
                select_Gender.selectedIndex = j;
            }
        }

        var select_StudentStatus = document.getElementById("select_StudentStatus");
        var options_StudentStatus = select_StudentStatus.options;
        for (var j = 0, option; option = options_StudentStatus[j]; j++) {

            if (option.value == StudentStatus) {
                select_StudentStatus.selectedIndex = j;
            }
        }

        var select_Academic_Session_Id = document.getElementById("select_Academic_Session_Id");
        var options_Academic_Session_Id = select_Academic_Session_Id.options;
        for (var j = 0, option; option = options_Academic_Session_Id[j]; j++) {

            if (option.value == AcademicSessionId) {
                select_Academic_Session_Id.selectedIndex = j;
           }
         }

        var select_Branch = document.getElementById("select_Branch");
        var options_Branch = select_Branch.options;
        for (var j = 0, option; option = options_Branch[j]; j++) {

            if (option.value == BranchId) {
                select_Branch.selectedIndex = j;
           }
         }

        var select_Year = document.getElementById("select_Year");
        var options_Year = select_Year.options;
        for (var j = 0, option; option = options_Year[j]; j++) {

            if (option.value == YearId) {
                select_Year.selectedIndex = j;
           }
         }

        var select_Semester = document.getElementById("select_Semester");
        var options_Semester = select_Semester.options;
        for (var j = 0, option; option = options_Semester[j]; j++) {

            if (option.value == SemesterId) {
                select_Semester.selectedIndex = j;
           }
         }

         $("#txt_Student_College_Id").val(StudentCollegeId);
         $("#select_Roll_Number").val(RollNo);
    </script>
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
</body>

</html>
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
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="button" onclick="logout()">Log Out</button>
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
                <div class="form-group col-md-4">
                    <label for="txt_Contact">Contact</label>
                    <input type="text" id="txt_Contact" name="txt_Contact" class="form-control"
                        required="required" />
                </div>
                <div class="form-group col-md-4">
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
            if(isset($_POST['submit'])) {
                $FirstName =  $_POST['txt_FirstName'];        
                $MiddleName =  $_POST['txt_MiddleName'];       
                $LastName =  $_POST['txt_LastName']; 
                $DateOfBirth =  $_POST['txt_DateOfBirth'];          
                $Gender=  $_POST['select_Gender'];
                $Contact =  $_POST['txt_Contact'];
                $Email =  $_POST['txt_Email'];
                $Address =  $_POST['txt_Address'];
                $StudentStatus =  $_POST['select_StudentStatus'];
                $BranchId = $_POST['select_Branch'];
                $YearId = $_POST['select_Year'];
                $StudentBranchStatus= "Active";
                $acdsesid = $_POST['select_Academic_Session_Id'];
                $studentcollegeid = $_POST['txt_Student_College_Id'];
                $rollno = $_POST['select_Roll_Number'];
                $semesterid = $_POST['select_Semester'];
            
            $sql="INSERT INTO student_master(Student_College_Id,First_Name,Middle_Name,Last_Name,Date_Of_Birth,Gender,Contact,Email_Id,Address,Student_Status) VALUES('$studentcollegeid','$FirstName','$MiddleName','$LastName','$DateOfBirth','$Gender','$Contact','$Email','$Address','$StudentStatus')";
            //$con->query($sql);
            $con->query($sql);
            $sql2="SELECT max(Student_Id) as id from student_master";
            $result2 = $con->query($sql2);
            $row = $result2->fetch_assoc();
            //echo "<br> last id is : ".$row['id'];
            if($row['id'] == 0)
            {
                $Stud_Id=1;
            }
            else{
                $Student_Id=$row['id'];
            }
            
            $sql3="INSERT INTO student_branch_year_link(Student_Id,Branch_Id,Semester_Id,Year_Id,Academic_Session_Id,Roll_Number) VALUES('$Student_Id','$BranchId','$semesterid','$YearId','$acdsesid','$rollno') ";
            //$con->query($sql3);
            $sql1="INSERT INTO student_branch_link(Student_Id,Branch_Id,Student_Branch_Status) VALUES('$Student_Id','$BranchId','$StudentBranchStatus')";
            //$con->query($sql1);
            // if($con->query($sql1) === TRUE && $con->query($sql2) === TRUE ){
            //     echo "inserted into stud branch link and stud branch year link ";
    
            //     //echo $Stud_Id;
            // }&& $con->query($sql3)===TRUE 
            
            if($con->query($sql3) === TRUE && $con->query($sql1) === TRUE){
                //echo $YearId;
                echo "<script> location.href='Index.php'; </script>";
            }else{
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
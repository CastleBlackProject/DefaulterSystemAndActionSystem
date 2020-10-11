<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Assign Subject</title>
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
                    <a class="nav-link disabled" href="../SubjectStaff/Create.php" id="nav_Staff" role="button">Assign Subject</a>
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

    <div class="container-fluid" id="main-container">
        <form method="POST" action="">
            <div>
                <div class="my-4" style="color:#0041b3">
                    <h4>Subject Staff</h4>
                </div>

                <hr />

                <div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label>Year</label>
                            <select id="select_Year" class="form-control">
                                <option value='0'>--Select--</option>
                                <option value="1">FE</option>
                                <option value="2">SE</option>
                                <option value="3">TE</option>
                                <option value="4">BE</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Semester</label>
                            <select id="select_Semester" name="select_Semester" class="form-control">
                                <option value="1">Semester 1</option>
                                <option value="2">Semester 2</option>
                                <option value="3">Semester 3</option>
                                <option value="4">Semester 4</option>
                                <option value="5">Semester 5</option>
                                <option value="6">Semester 6</option>
                                <option value="7">Semester 7</option>
                                <option value="8">Semester 8</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Branch</label>
                            <select id="select_Branch" name="select_Branch[]" class="form-control">
                            <?php
                                $servername="localhost";
                                $username="root";
                                $password="";
                                $db="vceterp";
                                $con = new mysqli($servername,$username,$password,$db);
                                $sql = "SELECT * FROM branch_master";
                                $result = $con->query($sql);
                                while($row = $result->fetch_array())
                                {
                                    echo "<option value ='".$row['Branch_Id']."'>".$row['Branch_Name']."</option>";
                                }  
                            ?>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label></label>
                            <button type="button" id="btn_Search" class="btn btn-success">Search</button>
                        </div>
                    </div>            
                </div>

            </div>            

            <hr />

            <div class="form-group col-md-2 my-2">
                <label for="select_Academic_Session_Id">Academic Session</label>
                <select id="select_Academic_Session_Id" name="select_Academic_Session_Id" class="form-control">
                <?php
                    $sql = "SELECT * FROM academic_session_master";
                    $result = $con->query($sql);
                    while($row = $result->fetch_array())
                    {
                        echo "<option value ='".$row['Academic_Session_Id']."'>".$row['Academic_Session_Name']."</option>";
                    }  
                ?>
                </select>
            </div>

            <hr />

            <div id="container_fieldset">
                
            </div>

            <div class="my-4">
                <center>`
                    <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                </center>
            </div>

            <?php
           
            if(isset($_POST['submit'])) {

                $AcademicSessionId = $_POST['select_Academic_Session_Id'];
                $SubjectStaffStatus = "Active";
                $Subject = $_POST['SubjectId'];

                $counter = 0;
                for($i=0; $i < count($Subject); $i++)
                {
                    $counter++;
                    $SubjectId = $Subject[$i];

                    $DropdownName = "select_Staff" . $counter;

                    $Staffs = $_POST[$DropdownName];
                    
                    for($j=0; $j < count($Staffs); $j++)
                    {
                        $StaffId = $Staffs[$j];
                        $sql="INSERT INTO subject_staff_link(Subject_Id,Staff_Id,Academic_Session_Id,Subject_Staff_Status) VALUES('$SubjectId','$StaffId',$AcademicSessionId,'$SubjectStaffStatus')";
                        
                        if($con->query($sql) === TRUE )
                        {
                            //echo "<script> alert('success') </script>";
                        }
                        else
                        {
                            echo "<br>error: ".$sql."<br>".$con->error;
                        }
                    }
                }
            }
           ?>
            
            <input type="button" value="Back To List" onclick="window.location.href='Index.php'" class="btn btn-primary" />

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

        function addStaff(row){
            var container = row.parentNode.parentNode.childNodes[3].childNodes[1];                 
            var html = '<div class="form-group col-md-4">' +
                            '<div class="form-row">' +
                                '<div class="form-group col-md-10">' +
                                    '<select id="current" name="select_Staff" class="form-control">' +                                                                      
                                    '</select>' +
                                '</div>' +
                                '<div class="form-group col-md-2">' +
                                    '<button type="button" class="btn btn-danger btn_RemoveStaff" onclick="removeStaff(this)">-</button>' +
                                '</div>' +                                      
                            '</div>' +                                
                        '</div>';
            $(html).appendTo(container);

            var FieldsetId = document.getElementById("current").parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.id;
            var SubjectRowId = FieldsetId.substring(15);
            document.getElementById("current").name = "select_Staff" + SubjectRowId + "[]";

            var BranchId = $("#select_Branch").val();

            $.ajax({
                type: "GET",
                url: 'DynamicStaffDropdown.php',
                contentType: "application/json; charset=utf-8",
                datatype: "Json",
                data: { BranchId: BranchId },
                success: function (data) {                    
                    var obj = JSON.parse(data);
                    $("#current").append(obj.success);                
                    document.getElementById("current").id = "btn";                    
                },
                error: function(){
                    console.log("error");
                }
            });
        }

        function removeStaff(row){
            var container = row.parentNode.parentNode.parentNode;
            console.log(container);
            $(container).remove();
        }

        $("#btn_Search").click(function(){
            
            $("#container_fieldset").empty();
            var SemesterId = $("#select_Semester").val();
            var BranchId = $("#select_Branch").val();
            
            $.ajax({
                type: "GET",
                url: 'SubjectStaffFunction.php',
                contentType: "application/json; charset=utf-8",
                datatype: "Json",
                data: { SemesterId: SemesterId, BranchId: BranchId },
                success: function (data) {
                     var obj = JSON.parse(data);
                     $("#container_fieldset").append(obj.success);
                },
                error: function(){
                    console.log("error");
                }
            });

        });

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

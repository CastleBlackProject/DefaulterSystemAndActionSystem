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
        <img src="../Images/vcetlogoicon.png"></img>&emsp;
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

    <div class="container-fluid">
        <div>
            <div class="my-4" style="color:#0041b3">
                <h4>Subject Master</h4>
            </div>

            <div class="my-5">

                <input type="button" value="Create" onclick="window.location.href='Create.php'" class="btn btn-primary" />
                <div class="form-row mt-4">
                <div class="form-group col-md-3">                    
                    <label for="select_BranchId">Branch</label>
                    <select id="select_BranchId" name="select_BranchId" class="form-control">
                        <option value="-1">--ALL--</option>
                    
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

                    </select>                    
                </div>
                <div class="form-group col-md-3">
                    <label for="select_BranchId">Semester</label>
                    <select id="select_Semester" name="select_Semester" class="form-control">
                        <option value='-1'>--ALL--</option>
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
                <div class="form-group col-md-3">
                    <label class="mt-3 mb-4"></label>
                    <button type="button" id="btn_Search" class="btn btn-success mt-4">Search</button>
                </div>
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
            
            echo '<div class="p-4" id="container_Table">
              <table class="table table-hover">
                <thead>
                  <tr>
                  <th scope="col" hidden>Subject ID</th>
                  <th scope="col">Branch</th>
                  <th scope="col">Semester</th>
                  <th scope="col">Subject Name</th>
                  <th scope="col">Subject Code</th>
                  <th scope="col">Subject Status</th>
                    <th></th>
                  </tr> 
                </thead>';
                $sql = "SELECT * FROM subject_master";
                $result = $con->query($sql);
                //if ($result->num_rows > 0)

                $counter = 1;
                while($row = mysqli_fetch_array($result))
                {
                    

                    $BranchId = $row['Branch_Id']; 
                    $sql1 = "SELECT Branch_Name FROM branch_master WHERE Branch_Id = " . $BranchId;
                    $result1 = $con->query($sql1);

                    $BranchName = "";

                    while($row1 = mysqli_fetch_array($result1)){
                        $BranchName = $row1['Branch_Name'];
                    }

                    echo "<tr>";
                    echo "<td hidden>" . $row['Subject_Id'] . "</td>";  
                    echo "<td>" . $BranchName . "</td>";
                    echo "<td>" . $row['Semester_Id'] . "</td>";
                    echo "<td>" . $row['Subject_Name'] . "</td>";
                    echo "<td>" . $row['Subject_Code'] . "</td>";
                    echo "<td>" . $row['Subject_Status'] . "</td>";
                    echo "<td><button type='button' class='btn btn-success' onclick='edit(this)'>Edit</button></td>";
                    echo "</tr>";                    

                    // if($counter === count(mysqli_fetch_array($result))){
                    //     echo "</tbody></table>";
                    // }
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
        <script>

function logout(){
    window.location.href = '../../Login.php';
}

</script>

</body>
</html>
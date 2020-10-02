<?php
    $StaffId = $_COOKIE["StaffId"];
    $SubjectId = $_COOKIE["SubjectId"];
    $AcademicSessionId = $_COOKIE["AcademicSessionId"];

    $servername="localhost";
    $username="root";
    $password="";
    $db="vceterp";
    $con = new mysqli($servername,$username,$password,$db);
    if(!$con)
    {
        die('could not connect'.mysql_error());
    }
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

    <title>Defaulter Assign</title>
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
                    <h4>Assign Defaulter</h4>
                </div>

                <hr />
                <div class="form-group col-md-3">
                    <label></label>
                    <button type="button" id="btn_Search" onclick="addRow()" class="btn btn-success">Add Row</button>
                </div>  
            </div>

            <table id="table_DefaulterAction" class="table table-hover">
                <thead>
                    <th>From</th>
                    <th>To</th>
                    <th>Defaulter Action</th>
                    <th></th>
                </thead>
                <tbody id="tbody_DefaulterAction"></tbody>
            </table>
            <div class="mt-3">
                <center>
                <button type="submit" id="btn_Submit" class="btn btn-success">Submit</button>
                <button type="reset" id="btn_Reset" class="btn btn-success">Reset</button>
                </center>
            </div>
        </form>
    </div> 
<?php 
    if(isset($_POST['submit'])) {
            $FromPercentage = $_POST['select_FromPercent'];
            $ToPercentage = $_POST['select_ToPercent'];
            $DefaulterAction = $_POST['txt_defaulteraction'];
            $counter = 0;
            echo count($FromPercentage);
            for($i=0; $i < count($FromPercentage); $i++)
            {
                    
                    // $counter++;
                    // $sql="INSERT INTO defaulter_action_master(Subject_Id,Staff_Id,Academic_Session_Id,From_Percentage,To_Percentage,Defaulter_Action) VALUES('$SubjectId','$StaffId','$AcademicSessionId','$FromPercentage[$i]','$ToPercentage[$i]','$DefaulterAction[$i]')";
                    // if($con->query($sql) === TRUE )
                    // {
                    //     echo "<script> alert('success') </script>";
                    // }
                    // else
                    // {
                    //     echo "<br>error: ".$sql."<br>".$con->error;
                    // }
            }
        }
?>           


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
        
        function addRow(){

            var html = '<tr>' + 
                            '<td><input type="number" min="1" max="100" id="select_FromPercent" name="select_FromPercent[]" class="form-control"></input></td>' +
                            '<td><input type="number" min="1" max="100" id="select_ToPercent" name="select_ToPercent[]" class="form-control"></input></td>' +
                            '<td><textarea name="txt_defaulteraction[]" class="form-control" cols="50" rows="3"></textarea></td>' +
                            '<td><button type="button" onclick="deleteRow(this)" class="btn btn-danger">Delete</button></td>'+
                        '</tr>';

            $(html).appendTo("#tbody_DefaulterAction");

        }

        

        addRow();

        function deleteRow(r) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("table_DefaulterAction").deleteRow(i);
        }

    </script>

</body>
</html>
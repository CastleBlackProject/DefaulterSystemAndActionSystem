<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Branch</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">VCET</a>
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
                        <a class="dropdown-item" href="../Students/Index.php">Student Master</a>
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
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container-fluid">
        <div>
            <div class="my-4" style="color:#0041b3">
                <h4>Student Master</h4>
            </div>

            <div class="my-5">

                <input type="button" value="Create" onclick="window.location.href='Create.php'"
                    class="btn btn-primary" />
                <!-- <div class="p-4">
                     <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col" hidden>Branch ID</th>
                                <th scope="col">Branch Name</th>
                                <th scope="col">Branch Code</th>
                                <th scope="col">Branch Status</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table> 
                </div> -->
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
            
            echo '<div class="p-4">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col" hidden>Student ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Date Of Birth</th>
                    <th scope="col">Student Status</th>
                    <th></th>
                  </tr> 
                </thead>';
                $sql = "SELECT * FROM student_master";
                $result = $con->query($sql);
                //if ($result->num_rows > 0)

                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td hidden>" . $row['Student_Id'] . "</td>";
                    echo "<td>" . $row['First_Name'] . " ". $row['Middle_Name'] . " " . $row['Last_Name'] . "</td>";
                    echo "<td>" . $row['Date_Of_Birth'] . "</td>";
                    echo "<td>" . $row['Student_Status'] . "</td>";
                    echo "<td><button type='button' class='btn btn-success' onclick='edit(this)'>Edit</button></td>";
                    echo "</tr>";
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

        <script>

            function edit(btn){

                var StudentId = btn.parentNode.parentNode.childNodes[0].innerHTML;

                window.location.href='Edit.php?StudentId=' + StudentId;
            }

        </script>

</body>



</html>
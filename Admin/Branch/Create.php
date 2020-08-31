<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Branch hello</title>
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
                        <a class="dropdown-item" href="#">Branch Master</a>
                        <a class="dropdown-item" href="#">Academic Session</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Student Master</a>
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
                        <a class="dropdown-item" href="#">Staff Master</a>
                        <a class="dropdown-item" href="#">Subject Master</a>
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
                <h4>Branch Master</h4>
            </div>


            <div class="form-row mt-5">
                <div class="form-group col-md-4">
                    <label for="txt_BranchName">Branch Name</label>
                    <input type="text" id="txt_BranchName" name="txt_BranchName" class="form-control"
                        required="required" />

                </div>
                <div class="form-group col-md-4">
                    <label for="txt_BranchCode">Branch Code</label>
                    <input type="text" id="txt_BranchCode" name="txt_BranchCode" class="form-control"
                        required="required" />
                </div>
                <div class="form-group col-md-4">
                    <label for="select_BranchStatus">Branch Status</label>
                    <select id="select_BranchStatus" name="select_BranchStatus" class="form-control">
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
                echo "<h1>database connected</h1>";
            }  
            if(isset($_POST['submit'])) {
            $BranName = $_POST['txt_BranchName'];
            $BranCode = $_POST['txt_BranchCode'];
            $BranStatus = $_POST['select_BranchStatus'];
            $sql1="SELECT max(Branch_Id) as id from branch_master";
            $result = $con->query($sql1);
            $row = $result->fetch_assoc();
            echo "<br> last id is : ".$row['id'];
            $BranId=$row['id']+1;
            echo "<br> given id is : ".$BranId;
            
            $sql="INSERT INTO branch_master(Branch_Id,Branch_Name,Branch_Code,Branch_Status) VALUES('$BranId','$BranName','$BranCode','$BranStatus')";
            
            if($con->query($sql) === TRUE ){
              echo "<br>new record added successfully";
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
</body>

</html>
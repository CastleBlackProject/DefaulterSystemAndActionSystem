<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- jquery ui link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.structure.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.theme.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>َLogin</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
          background-image: url('Images/vartak_college2.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
        }
        </style>
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
                        <a class="dropdown-item" href="Admin/Branch/Index.php">Branch Master</a>
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
                        <a class="dropdown-item" href="Admin/Staff/Index.php">Staff Master</a>
                        <a class="dropdown-item" href="Admin/Subject/Index.php">Subject Master</a>
                        <a class="dropdown-item" href="Admin/Students/Index.php">Student Master</a>
                    </div>
                </li>                
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    

<form class="box" action="" method="post">
    <h1>Login</h1>
    <div class="select">
    <select name="select_Admin" id="select_Admin"> 
        <option value="-1">Select User Type</option>
        <option value="0">Staff</option>
        <option value="1">Admin</option>
    </select>
    </div>
  <input type="text" name="txt_Username" placeholder="Username">
  <input type="password" name="txt_Password" placeholder="Password">
  <input type="submit" name="submit" value="Login">
</form>

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
     if(isset($_POST['submit'])) 
     {
        $Username = $_POST['txt_Username'];
        $Password = $_POST['txt_Password'];
        $Admin = $_POST['select_Admin'];
        $check = 0;
        $valid = 0;
        $sql="SELECT * FROM staff_admin_login";
        $result = $con->query($sql);
        while($row = mysqli_fetch_array($result))
        {
            if($Username == $row['Staff_College_Id'] && $Password == $row['Staff_Password'])
            {
                $valid = 1;
                // echo "<script> alert('verified') </script>"; 
                $StaffId = $row['Staff_Id'];                
                setcookie("StaffId",$StaffId, 86400, "/"); 
                echo $StaffId;              
                if($Admin == $row['Is_Admin'] && $row['Is_Admin'] == 0){
                    echo "<script>window.location.href = 'Staff/Dashboard/Index.php?StaffId=".$StaffId."'</script>";
                    $check = 1;
                    break;
                }
                elseif($Admin == $row['Is_Admin'] && $row['Is_Admin'] == 1){
                    echo "<script>window.location.href = 'Admin/Index.html'</script>";
                    $check = 1;
                    break;
                }
            }    
        }     
        if($valid = 1 && $check = 0)
            {
                echo "<script> alert('selected status is not given to you')</script>";
                echo "console.log(abc)";
            }     
        if($valid = 0)
            {
                echo "<script> alert('your login id or password is wrong')</script>";
                echo "console.log(abc)";
            }
        }
?>

<script>

function backToList(){
    window.location.href='../Dashboard/Index.php?StaffId='+StaffId;
}

</script>

  </body>
</html>

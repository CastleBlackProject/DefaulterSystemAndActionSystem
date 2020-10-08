<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Dashboard</title>
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
                    <a class="nav-link" href="Index.php" id="nav_Dashboard" role="button">Dashboard</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="AcademicSession/Index.php" id="nav_AcademicSession" role="button">Academic Session </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="Branch/Index.php" id="nav_Branch" role="button">Branch </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="Staff/Index.php" id="nav_Staff" role="button">Staff </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="Students/Index.php" id="nav_Students" role="button">Students</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="Subject/Index.php" id="nav_Subject" role="button">Subject </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="SubjectStaff/Create.php" id="nav_Staff" role="button">Assign Subject</a>
                </li>
            </ul>
            <div class="nav-item mx-2 viewbx">
                 <a role="button"><img src="../Images/vcetlogoicon.png" onclick="openviewbox()"></a>
            </div>
            <!-- <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="button" onclick="logout()">Log Out</button>
            </form> -->
        </div>
    </nav>
    <svg id="viewbox" width="200" height="200" viewBox="500 0 200 200"> 
        <circle cx="50" cy="50" r="45" stroke="#000"
            stroke-width="3" fill="none"/> 
    </svg> 
    <div class="flex-container">
        <div><a href="AcademicSession/Index.php">Academic Session</a></div>
        <div><a href="Branch/Index.php">Branch</a></div>
        <div><a href="Staff/Index.php">Staff</a></div>  
        <div><a href="Students/Index.php">Students</a></div>
        <div><a href="Subject/Index.php">Subject</a></div>
        <div><a href="SubjectStaff/Create.php">Assign Staff</a></div>  
    </div>
    <style>
        .flex-container {
          display: flex;
          flex-wrap: wrap;
          /* background-color: DodgerBlue; */
          
        }
        #viewbox{
            display: none;
            z-index: 100;
            background-color: #fdfdfd;  
            position: fixed;
            top: ;
            right: ;
        }
        
        .flex-container > div {
          background-color: #404346;
          width: 400px;
          margin: 23px;
          text-align: center;
          color: white;
          line-height: 250px;
          font-size: 30px;
        }
        </style>
          


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

            function logout(){
                window.location.href = '../Login.php';
            }
            function openviewbox()
            {
                let viewbox = document.getElementById('viewbox');
                if(viewbox.style.display === 'none'){
                    viewbox.style.display = 'block';
                }
                else{
                        viewbox.style.display = 'none';
                    }
            }
        </script>

    </body>

</html>
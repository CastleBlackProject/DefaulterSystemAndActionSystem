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
        <center>
        <img src="Images/vcetlogoicon.png"></img>&emsp;
        <a class="navbar-brand" href="https://vcet.edu.in/">VCET  &nbsp;&nbsp;&nbsp;&nbsp; Vidyavardhini's College Of Engineering & Technology</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <!-- <center>
                    <a class="navbar-brand" href="https://vcet.edu.in/" role="button">
        
                    </a>
                    </center> -->
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">  
            </form>
        </div>
        </center>
    </nav>
    

<form class="box" action="" method="post">
    <h1>Login</h1>
    <div class="select">
    <select id="select_Admin" name="select_Admin" id="select_Admin"> 
        <option value="-1">Select User Type</option>
        <option value="0">Staff</option>
        <option value="1">Admin</option>
        <option value="2">Student</option>
    </select>
    </div>
  <input type="text" id="txt_Username" name="txt_Username" placeholder="Username" required>
  <input type="password" id="txt_Password" name="txt_Password" placeholder="Password" required>
  <input type="button" onclick="checkLogin()" name="btn_submit" value="Login" >
  <!-- <input type="submit" id="btn_HiddenSubmit" value="Login" hidden /> -->
</form>

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

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

function checkLogin(){

    var Username = $("#txt_Username").val();
    var Password = $("#txt_Password").val();
    var UserType = $("#select_Admin").val();

    if(UserType == -1){
        alert('Please Select The User Type')
    }
    else{
        $.ajax({
            type: "GET",
            url: 'checkLogin.php',
            contentType: "application/json; charset=utf-8",
            datatype: "Json",
            data: { UserType: UserType, Username: Username, Password: Password },
            success: function (data) {
                var obj = JSON.parse(data);
                var data = obj.success;

                if(data == 1){
                    var StaffId = obj.StaffId;
                    setCookie("StaffId",StaffId,1);
                    window.location.href = "Admin/Index.php";
                }
                else if(data == 2){
                    var StaffId = obj.StaffId;
                    setCookie("StaffId",StaffId,1);
                    window.location.href = "Staff/Dashboard/Index.php";
                }
                else if(data == 3){
                    var StudentId = obj.StudentId;
                    setCookie("StudentId",StudentId,1);
                    window.location.href = "Student/Dashboard/Index.php";
                }
                else if(data == -1){
                    alert("Access Denied");
                }
                else if(data == -2){
                    alert("Incorrect Username or Password");
                }
            },
            error: function(){
                console.log("error");
            }
    });
    }    
}

</script>

  </body>
</html>
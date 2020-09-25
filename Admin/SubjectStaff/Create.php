<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Staff Subject</title>
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
                <button class="btn btn-outline-success my-2 my-sm-0" type="button">Search</button>
            </form>
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
                            <select id="select_Branch" name="select_Branch" class="form-control">
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

            <div id="container_fieldset">
                <!-- <fieldset class="my-2">
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label></label>
                        </div>
                        <div class="form-group col-md-9">
                            <div class="form-row">                                
                                <div class="form-group col-md-3">
                                    <div class="form-row">
                                        <div class="form-group col-md-10">
                                            <select name="select_Staff" class="form-control">
                                                <option value="1">Staff 1</option>
                                                <option value="2">Staff 2</option>
                                                <option value="3">Staff 3</option>
                                                <option value="4">Staff 4</option>                                
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <button type="button" class="btn btn-danger btn_RemoveStaff" >-</button>
                                        </div>                                        
                                    </div>                                    
                                </div>     
                            </div>                            
                        </div>
                        <div class="form-group col-md-1">
                            <button type="button" class="btn btn-success btn_AddStaff">+</button>                            
                        </div>
                    </div>
                    <hr />
                </fieldset>        -->
            </div>

            <div class="my-4">
                <center>
                    <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                </center>
            </div>
            
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

    </script>

</body>

</html>

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
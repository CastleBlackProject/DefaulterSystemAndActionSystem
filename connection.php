<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db="vceterp";
    $con = new mysqli($servername,$username,$password,$db);
    if(!$con)
    {
        //die('could not connect'.mysql_error());
    }
    else
    {
        #echo "<h1>database connected</h1>";
    }  
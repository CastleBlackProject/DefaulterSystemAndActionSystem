<?php

require 'connection.php';
// $servername="localhost";
// $username="root";
// $password="";
// $db="vceterp";
// $con = new mysqli($servername,$username,$password,$db);
// if(!$con)
// {
//     die('could not connect'.mysql_error());
// }
// else
// {
//     #echo "<h1>database connected</h1>";
// }

$Username = $_GET["Username"];
$Password = $_GET["Password"];
$Admin = $_GET["UserType"];

$valid = 0;
$sql = "SELECT * FROM staff_admin_login";
$result = $con->query($sql);
$sql1 = "SELECT * FROM student_login";
$result1 = $con->query($sql1);
if ($Admin == 0 || $Admin == 1) {
    while ($row = mysqli_fetch_array($result)) {
        if ($Username == $row['Staff_College_Id'] && $Password == $row['Staff_Password']) {
            $valid = 1;
            if ($row['Is_Admin'] == 1) {
                if ($Admin == 1) {
                    $StaffId = $row['Staff_Id'];
                    $returnValue = 1;
                    echo json_encode(array('success' => $returnValue, 'StaffId' => $StaffId));
                    //echo "<script>window.location.href = '0'</script>";
                } elseif ($Admin == 0) {
                    $StaffId = $row['Staff_Id'];
                    $returnValue = 2;
                    echo json_encode(array('success' => $returnValue, 'StaffId' => $StaffId));
                    //echo "<script>window.location.href = 'Staff/Dashboard/Index.php?StaffId=".$StaffId."'</script>";
                }
            } elseif ($row['Is_Admin'] == 0) {
                if ($Admin == 1) {
                    $returnValue = -1;
                    echo json_encode(array('success' => $returnValue));
                } elseif ($Admin == 0) {
                    $StaffId = $row['Staff_Id'];
                    $returnValue = 2;
                    echo json_encode(array('success' => $returnValue, 'StaffId' => $StaffId));
                    //echo "<script>window.location.href = 'Staff/Dashboard/Index.php?StaffId=".$StaffId."'</script>";
                }
            }
        }
    }
} else if ($Admin == 2) {
    while ($row1 = mysqli_fetch_array($result1)) {
        if ($Username == $row1['Student_College_Id'] && $Password == $row1['Student_Password']) {
            $valid = 1;
            $StudentId = $row1['Student_Id'];
            $returnValue = 3;
            echo json_encode(array('success' => $returnValue, 'StudentId' => $StudentId));
        }
    }
}
if ($valid == 0) {
    echo json_encode(array('success' => "-2"));
}

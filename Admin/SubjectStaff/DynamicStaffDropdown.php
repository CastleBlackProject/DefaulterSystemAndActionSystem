<?php

    if(isset($_GET['BranchId'])){

        $BranchId = $_GET['BranchId'];

        $servername="localhost";
        $username="root";
        $password="";
        $db="vceterp";
        $con = new mysqli($servername,$username,$password,$db);

        $sql1 = "SELECT * FROM staff_master NATURAL JOIN staff_branch_link where staff_branch_link.Branch_Id=".$BranchId;

        $DynamicElement = "";

        $result1 = $con->query($sql1);
        
        while($row1 = $result1->fetch_array())
        {
            $StaffName = $row1['First_Name'] ." ". $row1['Middle_Name']." ".$row1['Last_Name'];  

            $DynamicElement .= "<option value ='".$row1['Staff_Id']."'>".$StaffName."</option>";
        }

        echo json_encode(array('success' => $DynamicElement));
    }

?>
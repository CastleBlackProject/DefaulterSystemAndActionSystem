<?php

if (isset($_GET['SemesterId']) && $_GET['BranchId']) {

    $SemesterId = $_GET['SemesterId'];
    $BranchId = $_GET['BranchId'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "vceterp";
    $con = new mysqli($servername, $username, $password, $db);

    $sql = "SELECT * FROM subject_master WHERE Branch_Id=" . $BranchId . " AND Semester_Id=" . $SemesterId;
    $result = $con->query($sql);

    $DynamicElement = '<table class="table table-hover">
        <thead>
        <tr>
        <th scope="col" hidden>Student ID</th>
        <th scope="col">College ID</th>
        <th scope="col">Roll Number</th>
        <th scope="col">Name</th>
        <th scope="col">Year</th>
        <th scope="col">Branch</th>
        <th scope="col" hidden>Semester</th>
        <th scope="col"></th>
        <th></th>
        </tr> 
        </thead><tbody>';

    while ($row = mysqli_fetch_array($result)) {
        $BranchId = $row['Branch_Id'];
        $sql1 = "SELECT Branch_Name FROM branch_master WHERE Branch_Id = " . $BranchId;
        $result1 = $con->query($sql1);

        $BranchName = "";

        while ($row1 = mysqli_fetch_array($result1)) {
            $BranchName = $row1['Branch_Name'];
        }

        $DynamicElement .= "<tr>
                                <td hidden>" . $row['Subject_Id'] . "</td>
                                <td>" . $BranchName . "</td>
                                <td>" . $row['Semester_Id'] . "</td>
                                <td>" . $row['Subject_Name'] . "</td>
                                <td>" . $row['Subject_Code'] . "</td>
                                <td>" . $row['Subject_Status'] . "</td>
                                <td><button type='button' class='btn btn-success' onclick='edit(this)'>Edit</button></td>
                            </tr>";
    }

    $DynamicElement .= "</tbody></table>";

    echo json_encode(array('success' => $DynamicElement));
} else {
    echo json_encode(array('success' => "error"));
}

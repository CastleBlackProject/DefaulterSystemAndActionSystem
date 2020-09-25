<?php

        if(isset($_GET['SemesterId']) && $_GET['BranchId']){

            $SemesterId = $_GET['SemesterId'];
            $BranchId = $_GET['BranchId'];

            $servername="localhost";
            $username="root";
            $password="";
            $db="vceterp";
            $con = new mysqli($servername,$username,$password,$db);

            #$arr = array();

            # where Branch_Id=".$BranchId.", Semester_Id=".$SemesterId;
            $sql = "SELECT * FROM subject_master WHERE Branch_Id=".$BranchId." AND Semester_Id=".$SemesterId;
            $result = $con->query($sql);

            $sql1 = "SELECT * FROM subject_master where Branch_Id=".$BranchId." && Semester_Id=".$SemesterId;            
            // $sql2 = "SELECT * FROM staff_branch_link WHERE Branch_Id=".$BranchId;
            // $result2 = $con->query($sql2);

            // $counter1 = 0;
            // while($row1 = mysqli_fetch_array($result1))
            // {
            //     $counter2 = 0;
            //     while($row2 = mysqli_fetch_array($result2))
            //     {
            //         if($row1['Staff_Id'] === $row2['Staff_Id'])
            //         {

            //         }

            //         $counter2 = $counter2 + 1;
            //     }
            //     $counter1 = $counter1 + 1;
            // }


            $DynamicElement = "";
            
            $counter = 1;
            while($row = mysqli_fetch_array($result))
            {
                $DynamicElement .= "<fieldset id='SubjectSearchRow".$counter."' class='my-2'>
                <div class='form-row'>
                    <div class='form-group col-md-2'>
                        <label>".$row['Branch_Name']."</label>
                    </div>
                    <div class='form-group col-md-9'>
                        <div class='form-row'>                                
                            <div class='form-group col-md-4'>
                                <div class='form-row'>
                                    <div class='form-group col-md-10'>
                                        <select name='SubjectStaff".$counter."' class='form-control'>";
                                        
                                        $result1 = $con->query($sql1);
                                        while($row1 = $result1->fetch_array())
                                        {
                                            //$StaffName = $row1['First_Name'] ." ". $row1['Middle_Name']." ".$row1['Last_Name'];  
                                            $BranchName = $row1['Branch_Name'];
                                            //$DynamicElement .= "<option value ='".$row1['Staff_Id']."'>".$StaffName."</option>";
                                            
                

                        
                    
                                            $DynamicElement .="
                    echo "<tr>";
                    echo "<td hidden>" . $row['Subject_Id'] . "</td>";  
                    echo "<td>" . $BranchName . "</td>";
                    echo "<td>" . $row['Semester_Id'] . "</td>";
                    echo "<td>" . $row['Subject_Name'] . "</td>";
                    echo "<td>" . $row['Subject_Code'] . "</td>";
                    echo "<td>" . $row['Subject_Status'] . "</td>";
                    echo "<td><button type='button' class='btn btn-success' onclick='edit(this)'>Edit</button></td>";
                    echo "</tr>";
                }";

                                        }
                              
                $DynamicElement .= "</select>
                                    </div>
                                    <div class='form-group col-md-2'>
                                        
                                    </div>                                        
                                </div>                                    
                            </div>     
                        </div>                            
                    </div>
                    <div class='form-group col-md-1'>
                        <button type='button' class='btn btn-success' onclick='addStaff(this)'>+</button>                            
                    </div>
                </div>
                <hr />
            </fieldset>";

                $counter++;
            }


            echo json_encode(array('success' => $DynamicElement));
        }
        else{
            echo json_encode(array('success' => "error"));
        }

    ?>
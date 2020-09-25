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

            $sql1 = "SELECT * FROM staff_master JOIN staff_branch_link where staff_branch_link.Branch_Id=".$BranchId;            
            
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

            while($row = mysqli_fetch_array($result))
            {
                $DynamicElement .= "<fieldset class='my-2'>
                <div class='form-row'>
                    <div class='form-group col-md-2'>
                        <label>".$row['Subject_Name']."</label>
                    </div>
                    <div class='form-group col-md-9'>
                        <div class='form-row'>                                
                            <div class='form-group col-md-4'>
                                <div class='form-row'>
                                    <div class='form-group col-md-10'>
                                        <select name='select_Staff' class='form-control'>";

                                        $result1 = $con->query($sql1);
                                        while($row1 = $result1->fetch_array())
                                        {
                                            $StaffName = $row1['First_Name'] ." ". $row1['Middle_Name']." ".$row1['Last_Name'];  

                                            $DynamicElement .= "<option value ='".$row1['Staff_Id']."'>".$StaffName."</option>";
                                        }
                              
                $DynamicElement .= "</select>
                                    </div>
                                    <div class='form-group col-md-2'>
                                        <button type='button' class='btn btn-danger btn_RemoveStaff' >-</button>
                                    </div>                                        
                                </div>                                    
                            </div>     
                        </div>                            
                    </div>
                    <div class='form-group col-md-1'>
                        <button type='button' class='btn btn-success btn_AddStaff'>+</button>                            
                    </div>
                </div>
                <hr />
            </fieldset>";
            }


            echo json_encode(array('success' => $DynamicElement));
        }
        else{
            echo json_encode(array('success' => "error"));
        }

    ?>
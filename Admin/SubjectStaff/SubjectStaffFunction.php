<?php
    
        if(isset($_GET['SemesterId']) && $_GET['BranchId']){

            $SemesterId = $_GET['SemesterId'];
            $BranchId = $_GET['BranchId'];

            $servername="localhost";
            $username="root";
            $password="";
            $db="vceterp";
            $con = new mysqli($servername,$username,$password,$db);

            # where Branch_Id=".$BranchId.", Semester_Id=".$SemesterId;
            $sql = "SELECT * FROM subject_master WHERE Branch_Id=".$BranchId." AND Semester_Id=".$SemesterId;
            $result = $con->query($sql);

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
                            <div class='form-group col-md-3'>
                                <div class='form-row'>
                                    <div class='form-group col-md-10'>
                                        <select name='select_Staff' class='form-control'>
                                            <option value='1'>Staff 1</option>
                                            <option value='2'>Staff 2</option>
                                            <option value='3'>Staff 3</option>
                                            <option value='4'>Staff 4</option>                                
                                        </select>
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
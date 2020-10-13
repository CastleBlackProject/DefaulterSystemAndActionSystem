var unmarkedRollNo = [];

function takeRawData2() {
    var RawData = $("#txt_Attendance").val();
    processData2(RawData);
    document.getElementById("btn_closeModal").click();
}

function processData2(RawData) {

    var arr_RawData = RawData.split('\n');

    for (var i = 0; i < arr_RawData.length; i = i + 2) {

        var raw_Name_Time = arr_RawData[i]; // Name & Time
        var chat = arr_RawData[i + 1]; // TE-IT-RollNo

        //console.log(chat);

        var Name = "";

        for (var j = 0; j < raw_Name_Time.length; j++) {

            var x= parseInt(raw_Name_Time[j]);
            if (x <= 9 && x >= 0) {
                break;
            }
            else {
                Name += raw_Name_Time[j];
            }            
        }

        var rawRollNo = chat.split("-");
        
        if(rawRollNo[2] != null){
            if(rawRollNo[2] > 0){
                var RollNo = rawRollNo[2];
                outputData2(RollNo, Name);
            }            
        }
        
    }
}

function outputData2(rollNo, Name) {

    var RollNo = parseInt(rollNo);
    //console.log(Name + "-" + RollNo);    

    var tbody = document.getElementById("tbody_Students");
    var countRows = $('#table_Students tbody').find('tr').length;

    var isMarked = false;

    for (var i = 1; i <= countRows; i++) {
        var row = tbody.childNodes[i];
        var chkbox = row.childNodes[3].childNodes[0]
        var table_RollNo = parseInt(row.childNodes[3].childNodes[0].value);

        if (table_RollNo == RollNo) {

            var table_Name = row.childNodes[2].innerHTML;
            
            var table_Names = table_Name.split(" ");
            if(table_Names.length == 2){
                var name = Name.split(" ");
                if(name.length == 2){
                    var isPresent = false;
                    if(name[0].toUpperCase() === table_Names[0].toUpperCase() && name[1].toUpperCase() === table_Names[1].toUpperCase()){
                        var isPresent = true;
                    }
                    if(!isPresent){
                        if(name[0].toUpperCase() === table_Names[1].toUpperCase() && name[1].toUpperCase() === table_Names[0].toUpperCase()){
                            var isPresent = true;
                        }
                    }
                }
                else if(name.length == 3){
                    var isPresent = false;
                    if(name[0].toUpperCase() === table_Names[0].toUpperCase() && name[2].toUpperCase() === table_Names[1].toUpperCase()){
                        var isPresent = true;
                    }
                    if(!isPresent){
                        if(name[0].toUpperCase() === table_Names[1].toUpperCase() && name[2].toUpperCase() === table_Names[0].toUpperCase()){
                            var isPresent = true;
                        }
                    }
                }
            }
            else if(table_Names.length == 3){
                var name = Name.split(" ");
                if(name.length == 2){
                    var isPresent = false;
                    if(name[0].toUpperCase() === table_Names[0].toUpperCase() && name[1].toUpperCase() === table_Names[2].toUpperCase()){
                        var isPresent = true;
                    }
                    if(!isPresent){
                        if(name[0].toUpperCase() === table_Names[2].toUpperCase() && name[1].toUpperCase() === table_Names[0].toUpperCase()){
                            var isPresent = true;
                        }
                    }
                }
                else if(name.length == 3){
                    var isPresent = false;
                    if(name[0].toUpperCase() === table_Names[0].toUpperCase() && name[2].toUpperCase() === table_Names[2].toUpperCase()){
                        var isPresent = true;
                    }
                    if(!isPresent){
                        if(name[0].toUpperCase() === table_Names[2].toUpperCase() && name[2].toUpperCase() === table_Names[0].toUpperCase()){
                            var isPresent = true;
                        }
                    }
                }
            }
            
            if(isPresent){
                $(chkbox).prop('checked', true);            
                isMarked = true;
            }
        }
    }

    if (!isMarked) {
        unmarkedRollNo.push(RollNo);
    }
}
// $("#btn_MeetAttendance").click(function(){
//     var RawData = $("#txt_Attendance").val();
//     console.log(RawData);
// });

var unmarkedRollNo = [];

function takeRawData() {
    var RawData = $("#txt_Attendance").val();
    processData(RawData);
}

function processData(RawData) {

    var arr_RawData = RawData.split(' ');

    //console.log("Length : " + arr_RawData.length);

    for (var i = 0; i < arr_RawData.length; i++) {

        //console.log(arr_RawData[i]);

        if (i % 2 == 0 && i != 0) {

            var finalraw = arr_RawData[i].split("\n"); // AM/PM, TE-IT-47, First Name
            var arr_RollNo = finalraw[1].split("-");
            //console.log(arr_RollNo[2]);
            

            if (i == 2) {
                var firstname = arr_RawData[0];
                var lastnameraw = arr_RawData[i - 1];
            }
            else {
                var firstnameraw = arr_RawData[i - 2].split("\n")
                var firstname = firstnameraw[2];
                var lastnameraw = arr_RawData[i - 1];
            }

            var lastname = "";

            for (var k = 0; k < lastnameraw.length; k++) {

                var t = parseInt(lastnameraw[k]);
                if (t <= 9 && t >= 0) {
                    break;
                }
                else{
                    lastname += lastnameraw[k];
                }
            }
            
            var fullname = firstname + " " + lastname;

            outputData(arr_RollNo[2], fullname);
        }
    }

    if (unmarkedRollNo.length != 0) {
        for (var i = 0; i < unmarkedRollNo.length; i++) {
            console.log(unmarkedRollNo[i]);
        }
    }
}

function outputData(RollNo, Name) {

    console.log(Name + "-" + RollNo);

    var tbody = document.getElementById("tbody_Students");
    var countRows = $('#table_Students tbody').find('tr').length;

    var isMarked = false;

    for (var i = 1; i <= countRows; i++) {
        var row = tbody.childNodes[i];
        var chkbox = row.childNodes[3].childNodes[0]
        var table_RollNo = row.childNodes[3].childNodes[0].value;

        if (table_RollNo == RollNo) {
            $(chkbox).prop('checked', true);
            document.getElementById("btn_closeModal").click();
            isMarked = true;
        }
    }

    if (!isMarked) {
        unmarkedRollNo.push(RollNo);
    }
}
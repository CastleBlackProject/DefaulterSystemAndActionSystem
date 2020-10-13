//alert("ClassRoom");

var isPresent = false;

function takeRawData1(Attendance) {

    if (Attendance == 1) {
        isPresent = true;
    }
    else if (Attendance == 0){
        isPresent = false;
    }

    if (!isPresent) {
        var checkbox = document.getElementsByClassName("chkbox_Attendance");

        for (var i = 0; i < checkbox.length; i++) {
            var chk = checkbox[i];
            $(chk).prop('checked', true);
        }
    }

    var RawData = $("#txt_Attendance").val();
    processData1(RawData);
    document.getElementById("btn_closeModal").click();
}

function processData1(RawData) {

    var RollNos = RawData.split(',');

    for (var i = 0; i < RollNos.length; i++) {
        var RollNo = RollNos[i];
        outputData1(RollNo);
    }
}

function outputData1(rollNo) {

    var RollNo = parseInt(rollNo);

    var tbody = document.getElementById("tbody_Students");
    var countRows = $('#table_Students tbody').find('tr').length;    

    for (var i = 1; i <= countRows; i++) {
        var row = tbody.childNodes[i];
        var chkbox = row.childNodes[3].childNodes[0]
        var table_RollNo = parseInt(row.childNodes[3].childNodes[0].value);

        if (table_RollNo == RollNo) {
            if (isPresent) {
                $(chkbox).prop('checked', true);
                // var StudentsAttendedCount = parseInt(document.getElementById("StudentsAttended").innerHTML);
                // console.log(StudentsAttendedCount);
                // StudentsAttendedCount = StudentsAttendedCount + 1;
                // document.getElementById("StudentsAttended").innerHTML = StudentsAttendedCount;
            }
            else {
                $(chkbox).prop('checked', false);
                $("#chkbox_checkAll").prop('checked', false);
            }
            document.getElementById("btn_closeModal").click();
        }
    }
}

// var StudentsAttendedCount = parseInt(document.getElementById("StudentsAttended").innerHTML);
                
//                 if ($(this).prop("checked") == true) {
//                     StudentsAttendedCount = StudentsAttendedCount + 1;
//                     document.getElementById("StudentsAttended").innerHTML = StudentsAttendedCount;
//                 } else {
//                     StudentsAttendedCount = StudentsAttendedCount - 1;
//                     document.getElementById("StudentsAttended").innerHTML = StudentsAttendedCount;
//                 }
$(document).ready(function () {
    $.ajax({
        url: "tablacutter-js.txt",
        success: function (result) {
            table = result;
        }
    });
    let btn_submit = $('#btn_submit');

    btn_submit.on('click', function () {
        let name = $('input[name="sname"]').val();
        cutterFunc(name);

    });
});

function cutterFunc(name) {
    var inputtxt = name;
    tblc = table.split("\n");
    cutter = ''; 

    inputtxt = inputtxt.normalize('NFD').replace(/[\u0300-\u036f]/g, "");
    inputtxt = inputtxt.replace(" ", "");
    inputtxt = inputtxt.trim();
    inputtxt = inputtxt.toLowerCase();
    //alert(inputtxt);
    for (j = 0; j < (tblc.length - 1); j++) {
        if (inputtxt >= tblc[j].slice(4) && inputtxt < tblc[j + 1].slice(4)) {
            if (inputtxt[0] == 'a' || inputtxt[0] == 'e' || inputtxt[0] == 'i' || inputtxt[0] == 'o' || inputtxt[0] == 'u') {
                cutter = inputtxt.slice(0, 2).toUpperCase() + tblc[j].slice(0, 3);
            } else if (inputtxt[0] == 's' && inputtxt[1] != 'c') {
                cutter = inputtxt.slice(0, 2).toUpperCase() + tblc[j].slice(0, 3);
            } else if (inputtxt[0] == 's' && inputtxt[1] == 'c') {
                cutter = inputtxt.slice(0, 3).toUpperCase() + tblc[j].slice(0, 3);
            } else {
                cutter = inputtxt[0].toUpperCase() + tblc[j].slice(0, 3);
            }
            cutter = cutter.replace("0", "");
            cutter = cutter.replace("0", "");
            toString(cutter);
            console.log(cutter);
            $('#cutter').val(cutter);
        }
    }
};
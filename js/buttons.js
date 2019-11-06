// COPY HTML BUTTON///
$('#copyToClipboardBtn').click(function () {


    var data = $('#' + tab_id).html();
    var temp = $('<input>').val(data).appendTo('body').select();
    document.execCommand('copy');
    temp.remove();
    $('#copyToClipboardBtn').html('Copied').hide().fadeIn('fast');
    setTimeout(function () {
        $('#copyToClipboardBtn').html('Copy HTML').hide().fadeIn('fast');
    }, 1300);
})


// DOWNLOAD FUNCTION

function download(filename, text) {

    var element = document.createElement('a');
    element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
    element.setAttribute('download', filename);

    element.style.display = 'none';
    document.body.appendChild(element);

    element.click();

    document.body.removeChild(element);




}


// ADD IMAGE BUTTON

$('#add_img').click(function () {

    if ($('#profile_img').css('display') == 'none') {

        $('#signature_table').removeClass("animate-left").addClass("animate-right");
        $('#profile_img').css("display", "table-cell");
        $('.logo_id').removeClass("animate-left").addClass("animate-right");
        $('#add_img').html('Remove Image');
    } else if ($('#profile_img').css('display') == 'table-cell') {
        $('#profile_img').css("display", "none");
        $('#signature_table').removeClass("animate-right").addClass("animate-left");
        $('.logo_id').removeClass("animate-right").addClass("animate-left");
        $('#social_table').css("margin-top", "10px");
        $('#add_img').html('Add Image');

    }
});

//CANCEL BUTTON
$('#cancel').click(function () {

    $(".titleSelector").css('cursor', 'default');
    $("#save").css('background-color', '#C7CFD3');
    $("#save").css('color', 'black');
    $('#titleSelector').prop('disabled', true);
    $(".edit").attr("contentEditable", "false");
    $(".edit").css('background-color', 'transparent').css("border", "1px solid #ddd");
    $(".edit2").css('background-color', 'transparent').css("border", "1px solid #ddd");
    $('#cancel').hide();
    $('#save').hide();
    $('#add_img').hide();
    $('#edit').show();
    $('.chkbx').prop('disabled', true);
    $(".chkbx").css('cursor', 'no-drop');
    $("#additionalCert").css('background-color', 'transparent').css("border", "1px solid #ddd");
    $('label').removeClass('checkboxes_label');
    $('input[type=checkbox]').prop('checked',false);
})



// EDIT BUTTON   
$('#edit').click(function () {
    $('#et_row > td').remove();
    $("#et_row").append("<td style='padding: 0;'><div id='et_place' style='font-size: 11px; color: #00263D; font-family: Tahoma, Geneva, sans-serif;'></div></td>");
    $('label').addClass('checkboxes_label');
    $('.chkbx').prop('disabled', false);
    $(".edit").attr("contentEditable", "true");
    $('#cancel').show();
    $('#save').show();
    $('#add_img').show();
    $('#edit').hide();
    $('#additionalCert').css("border", "2px solid rgb(150, 211, 241)");
    $(".edit").css('background-color', '#ffffff').css("border", "2px solid #96D3F1");
    $(".edit2").css('background-color', '#ffffff').css("border", "2px solid #96D3F1");
    $("#save").css('background-color', '#039BE5');
    $("#save").css('color', 'white');
    $("#titleSelector").css('background-color', '#ffffff');
    $(".select::after").css('background', '#337ab7');
    $(".chkbx").css('cursor', 'pointer');


});

// SAVE BUTTON
$('#save').click(function () {

    $('label').removeClass('checkboxes_label');
    $('.chkbx').prop('disabled', true);
    $('#cancel').hide();
    $('#save').hide();
    $('#add_img').hide();
    $('#edit').show();
    $(".chkbx").css('cursor', 'default');
    $("#save").css('background-color', '#C7CFD3');
    $("#save").css('color', 'black');
    $(".edit").attr("contentEditable", "false");
    $(".edit").css('background-color', 'transparent').css("border", "1px solid #ddd");
    $("#additionalCert").css('background-color', 'transparent').css("border", "1px solid #ddd");

    $('#jobTitleSig').text($('#jobTitle').text());
    $('#workPhoneSig').text($('#workPhone').text());
    $('#mobilePhoneSig').text($('#mobilePhone').text());
    $('#workEmailSig').text($('#workEmail').text());

    $(".chbx").css('background-color', 'transparent');
    $(".select::after").css('background', 'transparent');
    $('.titlespan').text($('#jobTitle').text());
    $('.workPhoneSig').text($('#workPhone').text());
    $('.mobilePhoneSig').text($('#mobilePhone').text());
    $('.workEmail').text($('#workEmail').text());

    if ($("#mobilePhone").text() == "") {
        $('.m_text').hide();
    } else {
        $('.m_text').show();
    }
    check_cert();
    check_links();
});

// FUNCTION TO CHECK MOBILE NUMBER SHOW OR HIDE
function checkMobilePhone() {
    var mobilePhone = $("#mobilePhone").text();
    var mobilePhone2 = $("#mobilePhone").text(mobilePhone.replace(/\s+?/g, ''));

    if (mobilePhone2.text() == "") {
        $('.m_text').hide();
    } else {
        $('.m_text').show();
    }
}
// FUNCTION TO CHECK WORK PHONE SHOW OR HIDE
function checkWorkPhone() {
    var workphone = $("#workPhone").text();
    var workphone2 = $("#workPhone").text(workphone.replace(/\s+?/g, ''));

    if (workphone2.text() == "") {
        $('.work_text').hide();
    } else {
        $('.work_text').show();
    }
}



//Tabs code

$(document).ready(function () {
    var tab_id;
    checkWorkPhone();
    checkMobilePhone();


    $('ul.tabs li').click(function () {
        tab_id = $(this).attr('data-tab');
        if (tab_id == "tab-2") {
            $('#save').click(function () {
                checkMobilePhone();
                checkWorkPhone();
            })
        }

        if (tab_id == "tab-1") {
            $("#buttons").removeClass('compact_margin');
            $("#buttons").addClass('standard_margin');
        }

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#" + tab_id).addClass('current');
    })


})


// REMOVE  SELECT EMPLOYEE AFTER SELECTION

function removeElement(target) {
    target.animate({
        opacity: "-=1"
    }, 1000, function () {
        target.remove();
    });
}



//Certificate CHECKBOXES VALUES

function check_cert() {
    var favorite = [];
    $.each($("input[name='cert']:checked"), function () {
        favorite.push($(this).val());
    });
    if ($('#additionalCert').val() == "") {
        $('#et_place').text(favorite.join(" | "));

        $('.et_place').text(" | " + favorite.join(" | "));

    } else {
        favorite.push($('#additionalCert').val());
        $('#et_place').text(favorite.join(" | "));

        $('.et_place').text(" | " + favorite.join(" | "));
    }

    if ($('#additionalCert').val() == "" && (favorite.length < 1)) {
        $('.et_place').text("");
        $('#et_row > td').remove();
    }

}
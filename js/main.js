$(document).ready(function () {
    var target = $("#employee_dropdown");


    $('#framework').change(function () {
        removeElement(target); // removes select employee after selection
        var dropdown = $(this).val();

        loaderFunction();
        $.ajax({
            url: "app/load.php",
            method: "POST",
            data: {
                dropdown: dropdown
            },
            success: function (data) {

                $("#show_employee").html(data);


            }



        })
    })
})


////////////////////LOADER FUNCTION /////////////////////////
function loaderFunction() {
    document.getElementById("loader").style.display = "inline";
    setTimeout(function () {
        document.getElementById("loader").style.display = "none";

    }, 700);
}
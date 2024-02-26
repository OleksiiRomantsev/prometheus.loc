/*=========================================================================================
    File Name: charts-apexcharts.js
    Description: Apex charts examples.
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

// csrf token protection
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// custom colors declaration
var $primary = "#666ee8",
    $secondary = "#6B6F82",
    $success = "#1C9066",
    $info = "#1E9FF2",
    $warning = "#FF9149",
    $danger = "#FF4961"

var $themeColor = [$primary, $success, $info, $warning, $danger, $secondary]


function mymodal() {
    $('#mymodal').modal({
        backdrop: false,
        keyboard: true,
        focus: true
    });
}


function sweetAlert(title) {

    Swal.fire({
        position: 'top-end',
        type: 'success',
        title: title,
        showConfirmButton: false,
        timer: 1500,
        confirmButtonClass: 'btn btn-primary',
        buttonsStyling: false,
    });
}


function shuffle(array) {
    array.sort(() => Math.random() - 0.5);
}


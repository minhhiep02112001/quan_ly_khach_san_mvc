$(document).ready(function () {
    $('#select_room').select2();
    $('#select_customer').select2();
    $('.form-create-user-outside').fadeOut();
    fadeInOutUser($('.check-user-outside').prop('checked'));
    $('.check-user-outside').click(function () {
        fadeInOutUser($(this).prop('checked'));
    });

});

$('#form-booked-room-admin').submit(function () {
    var datetime = $('#reservation').val();
    if (datetime == "") {
        alert("Bạn chưa chọn ngày");
        return false;
    }
    var arr = datetime.split('-');
    var start = arr[0].trim();
    var date = moment().format('YYYY/MM/DD');
    if (start < date) {
        alert("Ngày bắt đầu không được nhỏ ngày hiện tại !!!");
        return false;
    }
    return true;
});

function fadeInOutUser($checkbox) {
    if ($checkbox) {
        $('.form-create-user-outside').fadeIn("slow");
        $('.select-user').fadeOut();
        $('#select_customer').attr("disabled", "disabled");
        $('.form-create-user-outside').find('input').removeAttr("disabled");
    } else {
        $('.form-create-user-outside').fadeOut();
        $('.select-user').fadeIn("slow");
        $('#select_customer').removeAttr('disabled');
        $('.form-create-user-outside').find('input').attr("disabled", "disabled");
    }
}
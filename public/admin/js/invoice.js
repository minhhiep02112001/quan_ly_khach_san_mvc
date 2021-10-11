
$(function () {
    $('.reason-cancel-order').fadeOut();
    $(document).on('change', '#select-status-order', function () {
        if ($(this).val() == 3 || $(this).val() == 4) {
            $('.reason-cancel-order').fadeIn(2000);
        } else {
            $('.reason-cancel-order').fadeOut();
        }
    });
    $('.btn-update-form-status').click(function () {
        $("#form-update-status").submit();
    })
})

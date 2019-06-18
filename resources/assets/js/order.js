// ===== ORDER ===== //
$('body').on('click', '.buttons-control__btn', function () {
    let $this = $(this);

    if (!$this.hasClass('active')) {
        $('.buttons-control__btn').removeClass('active');
        $this.addClass('active');
    }
});


// === AGREE === //
$('body').on('click', '#agree-checked', function () {

    if ($(this).prop('checked')) {
        $('#btn-continue').removeClass('btn-disabled').prop('disabled', false);
    } else {
        $('#btn-continue').addClass('btn-disabled').prop('disabled', true);
    }

});
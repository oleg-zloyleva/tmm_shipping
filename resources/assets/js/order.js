// === SELECT ADD === //
$.getJSON("./js/air_order.json", function (data) {

    console.log('%c data air order', 'color: red; font-weight: 600; font-size: 16px;', data);

    let $state = data.shipper.state;
    let $country = data.shipper.country;
    let $airWaybill = data.sendDocumentsTo.airWaybill;
    let $notifyParty = data.notifyParty.notifyParty;

    for (let i = 0; i < $state.length; i++) {
        let $option = '<option value="' + $state[i] + '">' + $state[i] + '</option>';
        $('[name="state"]').append($option);
    }

    for (let i = 0; i < $country.length; i++) {
        let $option = '<option value="' + $country[i] + '">' + $country[i] + '</option>';
        $('[name="country"]').append($option);
        $('[name="countryCon"]').append($option);
        $('[name="countryNot"]').append($option);
        $('[name="countryDoc"]').append($option);
    }

    for (let i = 0; i < $airWaybill.length; i++) {
        let $option = '<option value="' + $airWaybill[i] + '">' + $airWaybill[i] + '</option>';
        $('[name="airWaybill"]').append($option);
    }

    for (let i = 0; i < $notifyParty.length; i++) {
        let $option = '<option value="' + $notifyParty[i] + '">' + $notifyParty[i] + '</option>';
        $('[name="notifyParty"]').append($option);
    }

});


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
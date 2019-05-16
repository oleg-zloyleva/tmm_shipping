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


// === FORM SUBMIT === //
/*$('body').on('click', '#btn-continue', function () {

    let $buttonActive = $('.buttons-control__btn.active').attr('data-order');

    let $valid = true;

    if (!validFormShipper()) {
        $valid = false;
    }

    if (!validFormConsignee()) {
        $valid = false;
    }

    if (!validFormSendDocumentsTo()) {
        $valid = false;
    }

    if (!validFormNotifyParty()) {
        $valid = false;
    }

    if ($buttonActive === 'air') {
        if (!validFormDescriptionsOfGoods()) {
            $valid = false;
        }
    } else {
        if (!validFormVehicle()) {
            $valid = false;
        }
    }


    if ($valid) {
        validFormSuccess();
    } else {
        $('#required-fields').fadeIn();
        setTimeout(function () {
            $('#required-fields').fadeOut();
        }, 5000);
    }

});*/


// === FORMS VALIDATION === //
function validFormShipper() {
    let $valid = true;

    if (!validInp($('#form-shipper [name="tid"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-shipper [name="firstName"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-shipper [name="secondName"]'))) {
        $valid = false;
    }

    if (!validEmail($('#form-shipper [name="email"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-shipper [name="phone"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-shipper [name="city"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-shipper [name="country"]'))) {
        $valid = false;
    }

    if ($valid) {
        return true;
    } else {
        return false;
    }
}

function validFormConsignee() {
    let $valid = true;

    if (!validInp($('#form-consignee [name="tid"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-consignee [name="firstName"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-consignee [name="secondName"]'))) {
        $valid = false;
    }

    if (!validEmail($('#form-consignee [name="email"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-consignee [name="phone"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-consignee [name="city"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-consignee [name="country"]'))) {
        $valid = false;
    }

    if ($valid) {
        return true;
    } else {
        return false;
    }
}

function validFormSendDocumentsTo() {
    let $valid = true;

    if (!validInp($('#form-send-documents-to [name="firstName"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-send-documents-to [name="secondName"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-send-documents-to [name="city"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-send-documents-to [name="country"]'))) {
        $valid = false;
    }

    if ($valid) {
        return true;
    } else {
        return false;
    }
}

function validFormNotifyParty() {
    let $valid = true;

    if (!validInp($('#form-notify-party [name="firstName"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-notify-party [name="secondName"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-notify-party [name="city"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-notify-party [name="country"]'))) {
        $valid = false;
    }

    if ($valid) {
        return true;
    } else {
        return false;
    }
}

function validFormDescriptionsOfGoods() {
    let $valid = true;

    if (!validInp($('#form-description-of-goods [name="from"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-description-of-goods [name="to"]'))) {
        $valid = false;
    }


    if ($valid) {
        return true;
    } else {
        return false;
    }
}

function validFormVehicle() {
    let $valid = true;

    if (!validInp($('#form-vehicle [name="year"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-vehicle [name="make"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-vehicle [name="model"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-vehicle [name="body"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-vehicle [name="colour"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-vehicle [name="vin"]'))) {
        $valid = false;
    }

    if (!validInp($('#form-vehicle [name="valueOfVehicle"]'))) {
        $valid = false;
    }


    if ($valid) {
        return true;
    } else {
        return false;
    }
}


// === DATA VALIDATION=== //
function validInp(_this) {
    let $val = _this.val();

    if ($val === '' || $val === null || $val === undefined) {
        _this.addClass('required-input');
        return false;
    }

    return true;
}

function validEmail(_this) {
    let $inpVal = _this.val();
    let $regExp = /^(|(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6})$/;

    if ($inpVal === '' || !$regExp.test($inpVal)) {
        _this.addClass('required-input');
        return false;
    }

    return true;
}


// === FORM SEND === //
function validFormSuccess() {

    // sendFormShipper();

    // alert('Success!');

    // === RESET === //
    $('form').trigger('reset');
    $('#btn-continue').addClass('btn-disabled').prop('disabled', true);
    $('#agree-checked').prop('checked', false);

}


// === FORM SHIPPER === //
function sendFormShipper() {

    // let $arrFormShipper = $('#form-shipper').serializeArray(); // name value
    // let $arrFormConsignee = $('#form-consignee').serializeArray();
    // let $arrFormSendDocumentTo = $('#form-send-documents-to').serializeArray();
    // let $arrFormNotifyParty = $('#form-notify-party').serializeArray();
    // let $arrFormDescriptionOfGoods = $('#form-description-of-goods').serializeArray();
    // let $arrFormVehicle = $('#form-vehicle').serializeArray();
    // let $arrFormComment = $('#form-comment').serializeArray();

    // console.log($arrFormShipper);
    // console.log($arrFormConsignee);
    // console.log($arrFormSendDocumentTo);
    // console.log($arrFormNotifyParty);
    // console.log($arrFormDescriptionOfGoods);
    // console.log($arrFormVehicle);
    // console.log($arrFormComment);

    // let $sendForms = {
    //     shipper: {},
    //     consignee: {},
    //     sendDocumentTo: {},
    //     notifyParty: {},
    //     descriptionOfGoods: {},
    //     vehicle: {},
    //     comment: {}
    // };
    //
    // for (let i = 0; i < $arrFormShipper.length; i++) {
    //     $sendForms.shipper[$arrFormShipper[i].name] = ($arrFormShipper[i].value === 'on') ? true : $arrFormShipper[i].value;
    // }
    //
    // for (let i = 0; i < $arrFormConsignee.length; i++) {
    //     $sendForms.consignee[$arrFormConsignee[i].name] = $arrFormConsignee[i].value;
    // }
    //
    // for (let i = 0; i < $arrFormSendDocumentTo.length; i++) {
    //     $sendForms.sendDocumentTo[$arrFormSendDocumentTo[i].name] = $arrFormSendDocumentTo[i].value;
    // }
    //
    // for (let i = 0; i < $arrFormNotifyParty.length; i++) {
    //     $sendForms.notifyParty[$arrFormNotifyParty[i].name] = $arrFormNotifyParty[i].value;
    // }
    //
    // for (let i = 0; i < $arrFormDescriptionOfGoods.length; i++) {
    //     $sendForms.descriptionOfGoods[$arrFormDescriptionOfGoods[i].name] = ($arrFormDescriptionOfGoods[i].value === 'on') ? true : $arrFormDescriptionOfGoods[i].value;
    // }
    //
    // for (let i = 0; i < $arrFormVehicle.length; i++) {
    //     $sendForms.vehicle[$arrFormVehicle[i].name] = ($arrFormVehicle[i].value === 'on') ? true : $arrFormVehicle[i].value;
    // }
    //
    // for (let i = 0; i < $arrFormComment.length; i++) {
    //     $sendForms.comment[$arrFormComment[i].name] = $arrFormComment[i].value;
    // }
    //
    // console.log('%c send form', 'color: green; font-size: 16px; font-weight: 600;', $sendForms);
    //
    // sendFormHandler($sendForms);
}

function sendFormHandler(data) {

    // $.ajax({
    //     type: "POST",
    //     url: "/api/email/air_shipping_order",
    //     data: $.param(data),
    //     success: function () {
    //         $('#message-success').addClass('fadeIn');
    //         $('#form-quick-quote').trigger("reset");
    //         setTimeout(function () {
    //             $('#message-success').removeClass('fadeIn');
    //         }, 4000);
    //     },
    //     error: function (error) {
    //         console.log('Error', error);
    //         $('#message-server-error').addClass('fadeIn');
    //         setTimeout(function () {
    //             $('#message-server-error').removeClass('fadeIn');
    //         }, 4000);
    //     }
    // });

}









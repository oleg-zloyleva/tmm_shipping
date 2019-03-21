$(document).ready(function () {

    var quick_quote = "/email/quick_quote";
    var contact_us = "/email/contact_us";

    // === SEARCH === //
    $('#btn-search').on('click', function () {
        console.log($('#inp-search').val());

        $('#inp-search').val('');
    });


    // === SERVICES MORE === //
    $('.slider__more').on('click', function () {

        $(this).closest('.slider__desc').find('.add-more-info').slideToggle();

    });


    // === INPUT VALIDATION === //
    function validEmail(_this) {
        let $inpVal = _this.val();
        let $regExp = /^(|(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6})$/;

        if ($inpVal === '' || !$regExp.test($inpVal)) {
            _this.addClass('required-input');
            return false;
        }

        return true;
    }

    function validName(_this) {
        let $inpVal = _this.val();

        if ($inpVal === '') {
            _this.addClass('required-input');
            return false;
        }

        return true;
    }

    function validPhoneNumber(_this) {
        let $inpVal = _this.val();

        if ($inpVal === '') {
            _this.addClass('required-input');
            return false;
        }

        return true;
    }

    // === SEND FORM - HOME PAGE === //
    $('#btn-send-quick-quote').on('click', function () {

        let $valid = true;

        if (!validEmail($('[name="Email"]'))) {
            $valid = false;
        }


        if ($valid === true) {
            sendFormQuickQuote();
        } else {
            console.log('Error valid send form!!!');
        }

    });

    function sendFormQuickQuote() {

        $.ajax({
            type: "POST",
            url: quick_quote,
            data: $('#form-quick-quote').serialize(),
            success: function () {
                $('#message-success').addClass('fadeIn');
                $('#form-quick-quote').trigger("reset");
                setTimeout(function () {
                    $('#message-success').removeClass('fadeIn');
                }, 4000);
            },
            error: function (error) {
                console.log('Error', error);
                $('#message-server-error').addClass('fadeIn');
                setTimeout(function () {
                    $('#message-server-error').removeClass('fadeIn');
                }, 4000);
            }
        });

    }


    // === AJAX MESSAGE CLOSE === //
    $('.message-success__close').on('click', function () {
        $(this).closest('.message-success').removeClass('fadeIn');
    });


    // === SEND FORM - CONTACTS PAGE === //
    $('#btn-send-contacts').on('click', function () {

        let $valid = true;

        if (!validName($('[name="FirstName"]'))) {
            $valid = false;
        }

        if (!validName($('[name="SecondName"]'))) {
            $valid = false;
        }

        if (!validPhoneNumber($('[name="Phone"]'))) {
            $valid = false;
        }

        if (!validEmail($('[name="Email"]'))) {
            $valid = false;
        }


        if ($valid === true) {
            sendFormContacts();
        } else {
            console.log('Error valid send form!!!');
        }

    });

    function sendFormContacts() {

        $.ajax({
            type: "POST",
            url: contact_us,
            data: $('#form-contacts').serialize(),
            success: function () {
                $('#message-success').addClass('fadeIn');
                $('#form-contacts').trigger("reset");
                setTimeout(function () {
                    $('#message-success').removeClass('fadeIn');
                }, 4000);
            },
            error: function (error) {
                console.log('Error', error);
                $('#message-server-error').addClass('fadeIn');
                setTimeout(function () {
                    $('#message-server-error').removeClass('fadeIn');
                }, 4000);
            }
        });

    }


    // === REMOVE CLASS required-input === //
    $('input, select').bind('click focus', function () {
        $(this).removeClass('required-input');
    });


    // === ВВОД ТОЛЬКО ЦИФР === //
    $('.only-number').bind("change keyup input click", function () {
        if ($(this).val().match(/[^0-9]/g)) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        }
    });


});
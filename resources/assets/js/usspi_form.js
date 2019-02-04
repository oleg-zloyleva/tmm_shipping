import "jquery-validation"; //Todo On error -> add "export default" to module

const form = $( "#usspi-form" );

form.on("submit",function (e) {
    e.preventDefault();
    if(form.valid()){
        sendFormHandler(form.serialize())
    }
});

function sendFormHandler(data) {
    $.ajax({
        type: "POST",
        url: "/api/email/usspi_",
        data: data,
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

form.validate({
    rules: {
        firstExporterName: {
            required: true,
            minlength: 3,
            normalizer: function(value) {
                return $.trim(value);
            }
        },
        secondExporterName: {
            required: true,
            minlength: 3,
            normalizer: function(value) {
                return $.trim(value);
            }
        },
        signatureFirst: {
            required: true,
            minlength: 3,
            normalizer: function(value) {
                return $.trim(value);
            }
        },
        signatureSecond: {
            required: true,
            minlength: 3,
            normalizer: function(value) {
                return $.trim(value);
            }
        },
        printName: {
            required: true,
            minlength: 3,
            normalizer: function(value) {
                return $.trim(value);
            }
        },
        einTaxId: {
            required: true,
            minlength: 3,
            number: true,
            normalizer: function(value) {
                return $.trim(value);
            }
        },
        titleFirst: {
            required: true,
            minlength: 3,
            normalizer: function(value) {
                return $.trim(value);
            }
        },
        titleSecond: {
            required: true,
            minlength: 3,
            normalizer: function(value) {
                return $.trim(value);
            }
        },
        dateFirst: {
            required: true,
            minlength: 3,
            normalizer: function(value) {
                return $.trim(value);
            }
        },
        dateSecond: {
            required: true,
            minlength: 3,
            normalizer: function(value) {
                return $.trim(value);
            }
        }
    }
});
$(document).ready(function () {

    var quick_quote = "/email/quick_quote";
    var contact_us = "/email/contact_us";

    // === SEARCH === //
    $('#btn-search').on('click', function () {
        console.log($('#inp-search').val());

        $('#inp-search').val('');
    });


    // === HEADER MENU TOGGLE === //
    $('.btn-toggle').on('click', function () {
        // console.log('test');
        if ($('.nav-list').hasClass('active-menu')) {
            $(this).removeClass('btn-toggle__close');
            $('.nav-list').removeClass('active-menu');
        } else {
            $(this).addClass('btn-toggle__close');
            $('.nav-list').addClass('active-menu');
        }
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


    // === canvas === //
    /*var canvas = document.getElementById("drawCanv"),
        context = canvas.getContext("2d"),
        w = canvas.width,
        h = canvas.height;

    var mouse = {x: 0, y: 0};
    var draw = false;

    canvas.addEventListener("mousedown", function (e) {

        mouse.x = e.pageX - this.offsetLeft;
        mouse.y = e.pageY - this.offsetTop;
        draw = true;
        context.beginPath();
        context.moveTo(mouse.x, mouse.y);
    });
    canvas.addEventListener("mousemove", function (e) {

        if (draw == true) {

            mouse.x = e.pageX - this.offsetLeft;
            mouse.y = e.pageY - this.offsetTop;
            context.lineTo(mouse.x, mouse.y);
            context.stroke();
        }
    });
    canvas.addEventListener("mouseup", function (e) {

        mouse.x = e.pageX - this.offsetLeft;
        mouse.y = e.pageY - this.offsetTop;
        context.lineTo(mouse.x, mouse.y);
        context.stroke();
        context.closePath();
        draw = false;
    });*/

    // function getElemID(elemID) {
    //     return document.querySelector('.' + elemID);
    // }
    //
    // function Stroke(lineColour, lineWidth, lineCap, lineJoin, linePath, targetCanv) {
    //     this.lColour = lineColour;
    //     this.lWidth = lineWidth;
    //     this.lCap = lineCap;
    //     this.lJoin = lineJoin;
    //     this.lPath = linePath;
    //     this.tCtx = targetCanv.getContext('2d');
    //
    //     this.tCtx.lineWidth = this.lWidth;
    //     this.tCtx.lineCap = this.lCap;
    //     this.tCtx.lineJoin = this.lJoin;
    //     this.tCtx.strokeStyle = this.lColour;
    //
    //     this.tCtx.beginPath();
    //     for (var pathArr in this.lPath) {
    //         this.tCtx.lineTo(this.lPath[pathArr][0], this.lPath[pathArr][1]);
    //     }
    //     this.tCtx.stroke();
    // }
    //
    // function updateCanv(sColour, sSize, sPath, canvElem) {
    //     var thisStroke = new Stroke(
    //         sColour,
    //         sSize, 'round', 'round',
    //         sPath,
    //         canvElem
    //     );
    //     return thisStroke;
    // }
    //
    // var dCanv = getElemID('usppi-signature');
    // var dCtx = dCanv.getContext('2d');
    // var strokeArr = [];
    // var drawObj = {
    //     isDrawing: false,
    //     currColour: '#000000',
    //     currPath: []
    // };
    //
    // var cColour = getElemID('fColor');
    // var cSize = getElemID('lSize');
    // var cClear = getElemID('cClear');
    // var saveImg = getElemID('saveImg');
    //
    // var mLDown = false;
    // var mRDown = false;
    // var inCanv = false;
    //
    //
    // window.onmousedown = function (ev) {
    //     if (inCanv) {
    //         ev.preventDefault();
    //         drawObj.isdrawing = true;
    //         drawObj.cColour = cColour.value;
    //     }
    //     dCtx.fillStyle = cColour.value;
    //     dCtx.lineWidth = cSize.value;
    //     mLDown = true;
    // };
    //
    // window.onmouseup = function (ev) {
    //     if (drawObj.isDrawing) {
    //         drawObj.isDrawing = false;
    //         strokeArr.push(updateCanv(drawObj.cColour, cSize.value, drawObj.currPath, dCanv));
    //         drawObj.currPath = [];
    //
    //         dCtx.clearRect(0, 0, dCanv.width, dCanv.height);
    //         for (var stroke in strokeArr) {
    //             var cStroke = strokeArr[stroke];
    //             updateCanv(cStroke.lColour, cStroke.lWidth, cStroke.lPath, dCanv);
    //         }
    //     }
    //     mLDown = false;
    // };
    //
    // dCanv.onmouseenter = function (ev) {
    //     ev.preventDefault();
    //     inCanv = true;
    // };
    // dCanv.onmouseleave = function (ev) {
    //     ev.preventDefault();
    //     inCanv = false;
    // };
    //
    // dCanv.onmousemove = function (ev) {
    //     if (mLDown && inCanv) {
    //         drawObj.isDrawing = true;
    //         drawObj.currPath.push(
    //             [ev.offsetX, ev.offsetY]
    //         );
    //         for (var seg in drawObj.currPath) {
    //             var cSeg = drawObj.currPath[seg];
    //             dCtx.beginPath((cSeg[0], cSeg[1]));
    //             dCtx.lineTo(cSeg[0], cSeg[1]);
    //             dCtx.stroke();
    //         }
    //     }
    // };
    //
    // cClear.onclick = function (ev) {
    //     ev.preventDefault();
    //     dCanv.getContext('2d').clearRect(0, 0, dCanv.width, dCanv.height);
    //     strokeArr = [];
    // };

    // Save image functions
    // saveImg.onclick = function () {
    //     var img_url = dCanv.toDataURL("image/png").replace("image/png", "image/octet-stream");
    //     console.log(img_url);
    //     // window.location.href = img_url; // it will save locally
    // };

});
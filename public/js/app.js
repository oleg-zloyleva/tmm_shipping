/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/app.js":
/*!************************************!*\
  !*** ./resources/assets/js/app.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */
__webpack_require__(/*! ./calculate */ "./resources/assets/js/calculate.js");

__webpack_require__(/*! ./order */ "./resources/assets/js/order.js");

__webpack_require__(/*! ./main */ "./resources/assets/js/main.js");
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/*Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});*/

/***/ }),

/***/ "./resources/assets/js/calculate.js":
/*!******************************************!*\
  !*** ./resources/assets/js/calculate.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// === CALCULATOR RATES === //
// === GROUND TRANSPORTATION === //
var $dataGround;
$.getJSON("./js/ground.json", function (data) {
  console.log('%c data ground', 'color: red; font-weight: 600; font-size: 16px;', data);
  $dataGround = data;

  for (var key in data) {
    if (key !== '') {
      var $option = '<option value="' + key + '">' + key + '</option>';
      $('[name="auction"]').append($option);
    }
  }
});
$('[name="auction"]').on('change', function () {
  var $inpVal = $(this).val();

  if ($inpVal.toLowerCase() !== '0') {
    for (var key in $dataGround) {
      if ($inpVal.toLowerCase() === key.toLowerCase()) {
        $('[name="location"]').html('<option value="0" selected>Choose location</option>');
        $('[name="ground-port"]').html('<option value="0" selected>Choose exit port</option>');
        $('#ground-trans').val('0.00');

        for (var location in $dataGround[key]) {
          var $option = "<option data-price='" + JSON.stringify($dataGround[key][location]) + "' value='" + location + "'>" + location + "</option>";
          $('[name="location"]').append($option);
        }
      }
    }
  } else {
    var _$option = '<option value="0" selected>Choose location</option>';
    var $optionExitPort = '<option value="0" selected>Choose exit port</option>';
    $('[name="location"]').html(_$option);
    $('[name="ground-port"]').html($optionExitPort);
    $('#ground-trans').val('0.00');
  }

  totalBill();
});
$('[name="location"]').on('change', function () {
  var $inpVal = $(this).val();

  if ($inpVal.toLowerCase() !== '0') {
    var $exitPort = JSON.parse($('[name="location"] option:selected').attr('data-price')); // console.log($exitPort);

    $('[name="ground-port"]').html('<option value="0" selected>Choose exit port</option>');
    $('#ground-trans').val('0.00');

    for (var key in $exitPort) {
      var $option = "<option value='" + $exitPort[key] + "'>" + key + "</option>";
      $('[name="ground-port"]').append($option);
    }
  } else {
    var _$option2 = '<option value="0" selected>Choose exit port</option>';
    $('[name="ground-port"]').html(_$option2);
    $('#ground-trans').val('0.00');
  }

  totalBill();
});
$('[name="ground-port"]').on('change', function () {
  var $inpVal = $(this).val();

  if ($inpVal !== 'call') {
    $('#ground-trans').val($inpVal);
  } else {
    $('#call-message-ground').fadeIn();
    $('#ground-trans').val('0.00');
    setTimeout(function () {
      $('#call-message-ground').fadeOut();
    }, 5000);
  }

  totalBill();
}); // === OCEAN TRANSPORTATION === //

var $dataOcean;
$.getJSON("./js/ocean.json", function (data) {
  console.log('%c data ocean', 'color: green; font-weight: 600; font-size: 16px;', data);
  $dataOcean = data;

  for (var key in data) {
    var $option = "<option value='" + key + "'>" + key + "</option>";
    $('[name="ocean-port"]').append($option);
  }
});
$('[name="ocean-port"]').on('change', function () {
  var $inpVal = $(this).val();

  if ($inpVal.toLowerCase() !== '0') {
    for (var key in $dataOcean) {
      if ($inpVal.toLowerCase() === key.toLowerCase()) {
        $('[name="destination"]').html('<option value="0" selected>Choose destination</option>');
        $('#ocean-trans').val('0.00');

        for (var port in $dataOcean[key]) {
          var $option = "<option value='" + $dataOcean[key][port] + "'>" + port + "</option>";
          $('[name="destination"]').append($option);
        }
      }
    }
  } else {
    var _$option3 = '<option value="0" selected>Choose exit port</option>';
    $('[name="destination"]').html(_$option3);
    $('#ocean-trans').val('0.00');
  }

  totalBill();
});
$('[name="destination"]').on('change', function () {
  var $inpVal = $(this).val();

  if ($inpVal !== 'call') {
    $('#ocean-trans').val($inpVal);
  } else {
    $('#call-message-ocean').fadeIn();
    $('#ocean-trans').val('0.00');
    setTimeout(function () {
      $('#call-message-ocean').fadeOut();
    }, 5000);
  }

  totalBill();
});

function totalBill() {
  var $groundTrans = $('#ground-trans').val();
  var $oceanTrans = $('#ocean-trans').val();
  $groundTrans = !isNaN(parseFloat($groundTrans)) ? parseFloat($groundTrans) : 0;
  $oceanTrans = !isNaN(parseFloat($oceanTrans)) ? parseFloat($oceanTrans) : 0;
  var $result = $groundTrans + $oceanTrans;
  $('#total').val($result.toFixed(2));
}

/***/ }),

/***/ "./resources/assets/js/main.js":
/*!*************************************!*\
  !*** ./resources/assets/js/main.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  // === SEARCH === //
  $('#btn-search').on('click', function () {
    console.log($('#inp-search').val());
    $('#inp-search').val('');
  }); // === SERVICES MORE === //

  $('.slider__more').on('click', function () {
    $(this).closest('.slider__desc').find('.add-more-info').slideToggle();
  }); // === MODAL LOGIN === //

  /*$('#login').on('click', function (e) {
      e.prevent0();
      $('#modal-login').addClass('fadeIn'); //.fadeIn(300);
  });
    $('.modal-window__close').on('click', function () {
      $(this).closest('.modal-window').removeClass('fadeIn'); //.fadeOut(300);
  });*/
  // === LOGIN === //

  /*$('#btn-login').on('click', function () {
      let $valid = true;
        if (!validEmail($('[name="login-email"]'))) {
          $valid = false;
      }
        if (!validPassword($('[name="login-password"]'))) {
          $valid = false;
      }
        if ($valid === true) {
          console.log('Good log in!');
      } else {
          console.log('Error valid log in!!!');
      }
  });*/
  // === SIGN UP === //

  /*$('#btn-sign-up').on('click', function () {
        $('#modal-sign-up').addClass('fadeIn');
  });*/
  // === CONFIRM AGREE DISABLED === //

  /*$('#confirm-agree').on('change', function () {
      let $thisChecked = $(this).prop('checked');
      if ($thisChecked === true) {
          $('#btn-create-account').removeClass('btn-disabled').prop('disabled', false);
      } else {
          $('#btn-create-account').addClass('btn-disabled').prop('disabled', true);
      }
  });*/
  // === INPUT VALIDATION === //

  function validEmail(_this) {
    var $inpVal = _this.val();

    var $regExp = /^(|(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6})$/;

    if ($inpVal === '' || !$regExp.test($inpVal)) {
      _this.addClass('required-input');

      return false;
    }

    return true;
  }
  /*function validPassword(_this) {
      let $inpVal = _this.val();
        if ($inpVal.length < 6) {
          _this.addClass('required-input');
          return false;
      }
        return true;
  }*/

  /*function validConfirmPassword(_pass, _passConf) {
      let $pass = _pass.val();
      let $passConf = _passConf.val();
        if ($pass === '' || $pass !== $passConf) {
          _pass.addClass('required-input');
          _passConf.addClass('required-input');
          return false;
      }
        return true;
  }*/


  function validName(_this) {
    var $inpVal = _this.val();

    if ($inpVal === '') {
      _this.addClass('required-input');

      return false;
    }

    return true;
  }

  function validPhoneNumber(_this) {
    var $inpVal = _this.val();

    if ($inpVal === '') {
      _this.addClass('required-input');

      return false;
    }

    return true;
  } // === CREATE ACCOUNT - SIGN UP === //

  /*$('#btn-create-account').on('click', function () {
      let $valid = true;
        // valid account
      if (!validName($('[name="first-name"]'))) {
          $valid = false;
      }
        if (!validName($('[name="last-name"]'))) {
          $valid = false;
      }
        if (!validEmail($('[name="user-email"]'))) {
          $valid = false;
      }
        if (!validConfirmPassword($('[name="user-pass"]'), $('[name="user-pass-confirm"]'))) {
          $valid = false;
      }
          if ($valid === true) {
          createAccount();
      } else {
          console.log('Error valid sign up!!!');
      }
    });
    function createAccount() {
        let $createAccount = {
          firstName: $('[name="first-name"]').val(),
          lastName: $('[name="last-name"]').val(),
          phone: $('[name="user-phone"]').val(),
          company: $('[name="company"]').val(),
          country: $('[name="country"]').val(),
          street: $('[name="street"]').val(),
          code: $('[name="code"]').val(),
          email: $('[name="user-email"]').val(),
          password: $('[name="user-pass-confirm"]').val()
      };
        console.log($createAccount);
        // $.ajax({
      //     type: "POST",
      //     url: "",
      //     contentType: "application/json",
      //     data: JSON.stringify($createAccount),
      //     success: function (data) {
      //
      //         console.log(data);
      //
      //     }
      //
      // });
    }*/
  // === SEND FORM - HOME PAGE === //


  $('#btn-send-quick-quote').on('click', function () {
    var $valid = true;

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
      url: "mail.php",
      data: $('#form-quick-quote').serialize(),
      success: function success() {
        $('#message-success').addClass('fadeIn');
        $('#form-quick-quote').trigger("reset");
        setTimeout(function () {
          $('#message-success').removeClass('fadeIn');
        }, 4000);
      },
      error: function error(_error) {
        console.log('Error', _error);
        $('#message-server-error').addClass('fadeIn');
        setTimeout(function () {
          $('#message-server-error').removeClass('fadeIn');
        }, 4000);
      }
    });
  } // === AJAX MESSAGE CLOSE === //


  $('.message-success__close').on('click', function () {
    $(this).closest('.message-success').removeClass('fadeIn');
  }); // === SEND FORM - CONTACTS PAGE === //

  $('#btn-send-contacts').on('click', function () {
    var $valid = true;

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
      url: "mail.php",
      data: $('#form-contacts').serialize(),
      success: function success() {
        $('#message-success').addClass('fadeIn');
        $('#form-contacts').trigger("reset");
        setTimeout(function () {
          $('#message-success').removeClass('fadeIn');
        }, 4000);
      },
      error: function error(_error2) {
        console.log('Error', _error2);
        $('#message-server-error').addClass('fadeIn');
        setTimeout(function () {
          $('#message-server-error').removeClass('fadeIn');
        }, 4000);
      }
    });
  } // === REMOVE CLASS required-input === //


  $('input, select').bind('click focus', function () {
    $(this).removeClass('required-input');
  }); // === ВВОД ТОЛЬКО ЦИФР === //

  $('.only-number').bind("change keyup input click", function () {
    if ($(this).val().match(/[^0-9]/g)) {
      $(this).val($(this).val().replace(/[^0-9]/g, ''));
    }
  }); // === MAKE ORDER === //

  $('#make-order').on('click', function () {
    console.log('Make order!');
  }); // === SELECT 2 === //

  $('.select-freight').select2({
    dropdownCssClass: 'quote-select-dropdown'
  });
  $('.select-calculate').select2({
    dropdownCssClass: 'calculate-select-dropdown'
  });
  $('.select-order').select2({
    dropdownCssClass: 'calculate-order-dropdown'
  });
});

/***/ }),

/***/ "./resources/assets/js/order.js":
/*!**************************************!*\
  !*** ./resources/assets/js/order.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// === SELECT ADD === //
$.getJSON("./js/air_order.json", function (data) {
  console.log('%c data air order', 'color: red; font-weight: 600; font-size: 16px;', data);
  var $state = data.shipper.state;
  var $country = data.shipper.country;
  var $airWaybill = data.sendDocumentsTo.airWaybill;
  var $notifyParty = data.notifyParty.notifyParty;

  for (var i = 0; i < $state.length; i++) {
    var $option = '<option value="' + $state[i] + '">' + $state[i] + '</option>';
    $('[name="state"]').append($option);
  }

  for (var _i = 0; _i < $country.length; _i++) {
    var _$option = '<option value="' + $country[_i] + '">' + $country[_i] + '</option>';

    $('[name="country"]').append(_$option);
  }

  for (var _i2 = 0; _i2 < $airWaybill.length; _i2++) {
    var _$option2 = '<option value="' + $airWaybill[_i2] + '">' + $airWaybill[_i2] + '</option>';

    $('[name="airWaybill"]').append(_$option2);
  }

  for (var _i3 = 0; _i3 < $notifyParty.length; _i3++) {
    var _$option3 = '<option value="' + $notifyParty[_i3] + '">' + $notifyParty[_i3] + '</option>';

    $('[name="notifyParty"]').append(_$option3);
  }
}); // ===== ORDER ===== //

$('.buttons-control__btn').on('click', function () {
  var $this = $(this);

  if (!$this.hasClass('active')) {
    $('.buttons-control__btn').removeClass('active');
    $this.addClass('active');
  }

  if ($this.attr('data-order') === 'ocean') {
    $('#slider-order').css('display', 'block');
    $('#air-block').css('display', 'none');
    $('#ocean-block').css('display', 'block');
    $('#usspi-block').css('display', 'none');
  } else if ($this.attr('data-order') === 'air') {
    $('#slider-order').css('display', 'block');
    $('#air-block').css('display', 'block');
    $('#ocean-block').css('display', 'none');
    $('#usspi-block').css('display', 'none');
  } else {
    $('#usspi-block').css('display', 'block');
    $('#slider-order').css('display', 'none');
  }
}); // === AGREE === //

$('#agree-checked').on('click', function () {
  if ($(this).prop('checked')) {
    $('#btn-continue').removeClass('btn-disabled').prop('disabled', false);
  } else {
    $('#btn-continue').addClass('btn-disabled').prop('disabled', true);
  }
}); // === FORM SUBMIT === //

$('#btn-continue').on('click', function () {
  var $buttonActive = $('.buttons-control__btn.active').attr('data-order');
  var $valid = true;

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
}); // === FORMS VALIDATION === //

function validFormShipper() {
  var $valid = true;

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
  var $valid = true;

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
  var $valid = true;

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
  var $valid = true;

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
  var $valid = true;

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
  var $valid = true;

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
} // === DATA VALIDATION=== //


function validInp(_this) {
  var $val = _this.val();

  if ($val === '' || $val === null || $val === undefined) {
    _this.addClass('required-input');

    return false;
  }

  return true;
}

function validEmail(_this) {
  var $inpVal = _this.val();

  var $regExp = /^(|(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6})$/;

  if ($inpVal === '' || !$regExp.test($inpVal)) {
    _this.addClass('required-input');

    return false;
  }

  return true;
} // === FORM SEND === //


function validFormSuccess() {
  sendFormShipper();
  alert('Success!'); // === RESET === //

  $('form').trigger('reset');
  $('#btn-continue').addClass('btn-disabled').prop('disabled', true);
  $('#agree-checked').prop('checked', false);
} // === FORM SHIPPER === //


function sendFormShipper() {
  var $arrFormShipper = $('#form-shipper').serializeArray(); // name value

  var $arrFormConsignee = $('#form-consignee').serializeArray();
  var $arrFormSendDocumentTo = $('#form-send-documents-to').serializeArray();
  var $arrFormNotifyParty = $('#form-notify-party').serializeArray();
  var $arrFormDescriptionOfGoods = $('#form-description-of-goods').serializeArray();
  var $arrFormVehicle = $('#form-vehicle').serializeArray();
  var $arrFormComment = $('#form-comment').serializeArray(); // console.log($arrFormShipper);
  // console.log($arrFormConsignee);
  // console.log($arrFormSendDocumentTo);
  // console.log($arrFormNotifyParty);
  // console.log($arrFormDescriptionOfGoods);
  // console.log($arrFormVehicle);
  // console.log($arrFormComment);

  var $sendForms = {
    shipper: {},
    consignee: {},
    sendDocumentTo: {},
    notifyParty: {},
    descriptionOfGoods: {},
    vehicle: {},
    comment: {}
  };

  for (var i = 0; i < $arrFormShipper.length; i++) {
    $sendForms.shipper[$arrFormShipper[i].name] = $arrFormShipper[i].value === 'on' ? true : $arrFormShipper[i].value;
  }

  for (var _i4 = 0; _i4 < $arrFormConsignee.length; _i4++) {
    $sendForms.consignee[$arrFormConsignee[_i4].name] = $arrFormConsignee[_i4].value;
  }

  for (var _i5 = 0; _i5 < $arrFormSendDocumentTo.length; _i5++) {
    $sendForms.sendDocumentTo[$arrFormSendDocumentTo[_i5].name] = $arrFormSendDocumentTo[_i5].value;
  }

  for (var _i6 = 0; _i6 < $arrFormNotifyParty.length; _i6++) {
    $sendForms.notifyParty[$arrFormNotifyParty[_i6].name] = $arrFormNotifyParty[_i6].value;
  }

  for (var _i7 = 0; _i7 < $arrFormDescriptionOfGoods.length; _i7++) {
    $sendForms.descriptionOfGoods[$arrFormDescriptionOfGoods[_i7].name] = $arrFormDescriptionOfGoods[_i7].value === 'on' ? true : $arrFormDescriptionOfGoods[_i7].value;
  }

  for (var _i8 = 0; _i8 < $arrFormVehicle.length; _i8++) {
    $sendForms.vehicle[$arrFormVehicle[_i8].name] = $arrFormVehicle[_i8].value === 'on' ? true : $arrFormVehicle[_i8].value;
  }

  for (var _i9 = 0; _i9 < $arrFormComment.length; _i9++) {
    $sendForms.comment[$arrFormComment[_i9].name] = $arrFormComment[_i9].value;
  }

  console.log('%c send form', 'color: green; font-size: 16px; font-weight: 600;', $sendForms);
}

/***/ }),

/***/ "./resources/assets/sass/main.scss":
/*!*****************************************!*\
  !*** ./resources/assets/sass/main.scss ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!****************************************************************************!*\
  !*** multi ./resources/assets/js/app.js ./resources/assets/sass/main.scss ***!
  \****************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\OSPanel\domains\TMM\resources\assets\js\app.js */"./resources/assets/js/app.js");
module.exports = __webpack_require__(/*! C:\OSPanel\domains\TMM\resources\assets\sass\main.scss */"./resources/assets/sass/main.scss");


/***/ })

/******/ });
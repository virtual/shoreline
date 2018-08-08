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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./source/_assets/js/slick-app.js":
/***/ (function(module, exports) {

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

$(function () {
  var _ref, _carouselsliderOption;

  contentfeatureslider = $('.slick-slider.content-feature');
  contentfeatureOptions = {
    arrows: true,
    infinite: true,
    prevArrow: "<button type='button' aria-label='Previous' class='slick-prev pull-left'><span class='fas fa-chevron-left' aria-hidden='true'></span></button>",
    nextArrow: "<button type='button' aria-label='Next' class='slick-next pull-right'><span class='fas fa-chevron-right' aria-hidden='true'></span></button>"
  };
  contentfeatureslider.slick(contentfeatureOptions);

  carouselslider = $('.slick-slider.carousel-slider');
  carouselsliderOptions = (_carouselsliderOption = {
    arrows: true,
    dots: true,
    cssEase: 'linear',
    variableWidth: true,
    infinite: true,

    autoplay: true
  }, _defineProperty(_carouselsliderOption, "arrows", true), _defineProperty(_carouselsliderOption, "slick", true), _defineProperty(_carouselsliderOption, "slidesToShow", 1), _defineProperty(_carouselsliderOption, "speed", 500), _defineProperty(_carouselsliderOption, "variableWidth", true), _defineProperty(_carouselsliderOption, "autoplaySpeed", 8000), _defineProperty(_carouselsliderOption, "prevArrow", "<button type='button' aria-label='Previous' class='slick-prev pull-left'><span class='button-left' aria-hidden='true'></span></button>"), _defineProperty(_carouselsliderOption, "nextArrow", "<button type='button' aria-label='Next' class='slick-next pull-right'><span class='button-right' aria-hidden='true'></span></button>"), _defineProperty(_carouselsliderOption, "responsive", [(_ref = {
    breakpoint: 480,
    settings: {
      variableWidth: false,
      slidesToShow: 1
    }
  }, _defineProperty(_ref, "breakpoint", 992), _defineProperty(_ref, "settings", {

    variableWidth: false,
    slidesToShow: 1
  }), _ref)]), _carouselsliderOption);

  $(carouselslider.each(function (idx, item) {
    var carouselId = "carousel" + idx;
    this.id = carouselId;
    $(this).slick(carouselsliderOptions);
    // Create container for description
    $('<div class="carousel-feature-caption" style="max-width: ' + $(this).find('.slick-current').width() + 'px">' + $(this).find('.slick-current .carousel-feature-text')[0].innerHTML + '</div>').insertAfter($(this));
    // $(this).next('.carousel-feature-caption').attr('style','width: 500px')
    // When slide changed, show updated desc in container
    $(this).on('afterChange', function (event, slick, currentSlide, nextSlide) {
      var activeSlide = $(slick.$slides.get(currentSlide)).attr('id');
      var activeText = $("#" + activeSlide).find('.carousel-feature-text')[0].innerHTML;
      $(this).next('.carousel-feature-caption').html(activeText); // sibling of active slider
      $(this).next('.carousel-feature-caption').attr('style', 'max-width: ' + $(this).find('.slick-current').width() + 'px');
    });
  }));

  $('.slick-slider.flex-items').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplaySpeed: 5000,
    autoplay: false,
    dots: true,
    arrows: true,
    prevArrow: "<button type='button' aria-label='Previous' class='slick-prev pull-left'><span class='fas fa-chevron-left' aria-hidden='true'></span></button>",
    nextArrow: "<button type='button' aria-label='Next' class='slick-next pull-right'><span class='fas fa-chevron-right' aria-hidden='true'></span></button>",

    responsive: [{
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    }]
  });

  // Default settings for slick-silder class only (no other class)
  $('.slick-slider').each(function () {
    var $this = $(this);
    if ($this.attr("class").split(' ').length === 1) {
      $this.addClass('simple-slickslider');
      $this.slick({
        arrows: true,
        infinite: true,
        dots: true,
        prevArrow: "<button type='button' aria-label='Previous' class='slick-prev pull-left'><span class='button-left' aria-hidden='true'></span></button>",
        nextArrow: "<button type='button' aria-label='Next' class='slick-next pull-right'><span class='button-right' aria-hidden='true'></span></button>"
      });
    }
  });
});

/***/ }),

/***/ 1:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./source/_assets/js/slick-app.js");


/***/ })

/******/ });
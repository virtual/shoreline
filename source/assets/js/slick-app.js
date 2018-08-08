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

$(function () {

  contentfeatureslider = $('.slick-slider.content-feature');
  contentfeatureOptions = {
    arrows: true,
    infinite: true,
    prevArrow: "<button type='button' aria-label='Previous' class='slick-prev pull-left'><span class='fas fa-chevron-left' aria-hidden='true'></span></button>",
    nextArrow: "<button type='button' aria-label='Next' class='slick-next pull-right'><span class='fas fa-chevron-right' aria-hidden='true'></span></button>"
  };
  contentfeatureslider.slick(contentfeatureOptions);

  carouselslider = $('.slick-slider.carousel-slider');
  carouselsliderOptions = {
    arrows: true,
    dots: true,
    cssEase: 'linear',
    variableWidth: true,
    infinite: true,
    prevArrow: "<button type='button' aria-label='Previous' class='slick-prev pull-left'><span class='button-left' aria-hidden='true'></span></button>",
    nextArrow: "<button type='button' aria-label='Next' class='slick-next pull-right'><span class='button-right' aria-hidden='true'></span></button>",
    mew: $('<div class="carousel-feature-caption">' + $('.carousel-feature-text')[0].innerHTML + '</div>').insertAfter(".slick-slider")
  };
  carouselslider.slick(carouselsliderOptions);
  // $(carouselslider.each(function (idx, item) {
  //   var carouselId = "carousel" + idx;
  //   this.id = carouselId;
  //   $(this).slick({
  //     carouselsliderOptions
  //   }); 
  //   $(this).on('afterChange', function(event, slick, currentSlide, nextSlide){
  //     populateCaption(slick, currentSlide);
  //   });
  // }));


  function populateCaption(slick, currentSlide) {
    var activeSlide = $(slick.$slides.get(currentSlide)).attr('id');
    var activeText = $("#" + activeSlide).find('.carousel-feature-text')[0].innerHTML;
    // console.log(activeText)
    $('.carousel-feature-caption').html(activeText);
  }
  carouselslider.on('afterChange', function (event, slick, currentSlide, nextSlide) {
    populateCaption(slick, currentSlide);
  });

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
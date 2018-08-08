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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./source/_assets/js/main.js":
/***/ (function(module, exports) {

jQuery(document).ready(function () {

  // Check testimonial picture if vertical for spacing
  $('.quote-feature-img').each(function () {
    var $this = $(this);
    var img = $(this).find('img')[0];
    if (img.naturalWidth < img.naturalHeight) {
      $this.addClass('vertical');
    }
  });

  $('body').on('click', '.dropdown-toggle', function (e) {
    e.preventDefault();
    e.stopPropagation();

    var _d = $(e.target).closest('.dropdown');
    console.log(_d);

    if (_d.hasClass('show')) {
      console.log('remove');
      $(_d).removeClass('show');
    } else {
      console.log('add');

      $(_d).removeClass('show');
      _d.addClass('show');
    }
  });

  // // Smooth scroll to anchor
  // $("a.scrollable").click(function (event) {
  //   event.preventDefault();
  //   $("html, body").animate({
  //     scrollTop: $($(this).attr("href")).offset().top - 40
  //   }, 500);
  // });


  $(".header-actions .searchicon").click(function (event) {
    if (!$(this).hasClass('active')) {
      $(this).addClass('active');
      event.preventDefault();
      $('.header-actions .searchbox input').show(); //noscript 
      $('.header-actions .searchbox input').focus();
    } else {
      if ($('.header-actions .searchbox input')[0].value === '') {
        // console.log('no text!')
        event.preventDefault();
        $('.header-actions .searchbox input').hide();
        $(this).removeClass('active');
      } else {
        // submit
      }
    }
  });

  // Smooth scroll to anchor
  $("a.scrollable").click(function (event) {
    event.preventDefault();
    var goToId = $(this).attr("href");
    if ($(goToId).length) {
      // If an anchor exists with this href
      $("html, body").animate({
        scrollTop: $($(this).attr("href")).offset().top - 40
      }, 500);
      $(goToId).focus();
    }
  });

  $(document).keydown(function (e) {
    if ($(e.target).parent().hasClass('dropdown')) {
      if (e.keyCode == 39 || e.keyCode == 40) {
        $(e.target).closest('.dropdown').addClass('show');
      }
      if (e.keyCode == 37 || e.keyCode == 38) {
        $(e.target).closest('.dropdown').removeClass('show');
      }
    } else if ($(e.target).parent().hasClass('drop')) {
      if (e.keyCode == 39 || e.keyCode == 40) {
        $(e.target).closest('.drop').removeClass('drop').addClass('opendrop');
      }
    } else if ($(e.target).parent().hasClass('opendrop')) {
      if (e.keyCode == 37 || e.keyCode == 38) {
        $(e.target).closest('.opendrop').removeClass('opendrop').addClass('drop');
      }
    }
  });

  // When tabbing close the menu back up when tabbed out
  $(".dropdown>a").focus(function () {
    $('.dropdown.show').removeClass('show');
  });

  // subnav 
  /*
  var submenu = document.getElementById('submenu');
  
    $("#submenu ul").find(":has(div)").parent().addClass("nolink");
    // , window.prettyPrint && prettyPrint(), $(document).on("click", ".yamm .dropdown-menu", function(a) {
    //     a.stopPropagation()
    // }), 
    $("#submenu ul>li:has(ul)").click(function(a) {
         $newul = $(this).find("ul:first"), "none" == $newul.css("display") ? ($newul = $(this).find("ul:first"), $newul.parent().removeClass("drop"), $newul.parent().addClass("opendrop"), $newul.show("fast"), $newul.parent().removeClass("togopen")) : ($newul = $(this).find("ul:first"), $newul.parent().removeClass("opendrop"), $newul.parent().addClass("drop"), $newul.hide("fast"), $newul.parent().removeClass("togopen")), a.stopPropagation()
     });
     
     $("#submenu li").has("ul").each(function() {
         $(this).addClass("drop"), $("#submenu ul>li:has(ul)>a").css("display", "block"), $(this).show("fast")
     });
    */
  //  setOverviewOffset(calcOverviewOffset());
});

function calcOverviewOffset() {
  //var sidebarOffset = $('#sidebar-nav').offset().top; // doesn't matter
  var contentHeaderOffset = $('.content-header').offset().top;
  return contentHeaderOffset + 50;
}

function setOverviewOffset(offset) {
  document.getElementById('sidebar-nav').setAttribute('style', "top: -" + offset + "px");
  return true;
}

function mew() {
  console.log('mew');
}

/***/ }),

/***/ "./source/_assets/sass/bootstrap.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./source/_assets/sass/main.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./source/_assets/sass/slick-theme.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./source/_assets/sass/slick.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__("./source/_assets/js/main.js");
__webpack_require__("./source/_assets/sass/main.scss");
__webpack_require__("./source/_assets/sass/slick.scss");
__webpack_require__("./source/_assets/sass/slick-theme.scss");
module.exports = __webpack_require__("./source/_assets/sass/bootstrap.scss");


/***/ })

/******/ });
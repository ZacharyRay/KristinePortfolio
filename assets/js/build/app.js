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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\njQuery(document).ready(function ($) {\n  // quote slider\n  $(document).ready(function () {\n    var quoteBtn = document.querySelectorAll(\".quote-slider-btn\");\n    quoteBtn.forEach(function (button) {\n      var quotes = document.querySelectorAll(\".quote\");\n      var quoteAuthor = document.querySelectorAll(\".the-quote-author\");\n      var quoteIndexTotal = document.querySelector(\".quote-index-total\");\n      var quoteIndex = document.querySelector(\".quote-index\"); // set start quote\n\n      quotes[0].classList.add(\"quote-display\"); // set start author\n\n      quoteAuthor[0].classList.add(\"quote-display\"); // set counter\n\n      var quoteCounter = 0; // set quote index\n\n      quoteIndex.innerHTML = quoteCounter + 1; // set quote index total\n\n      quoteIndexTotal.innerHTML = quotes.length; // quote logic\n\n      button.addEventListener(\"click\", function () {\n        quotes[quoteCounter].classList.remove(\"quote-display\");\n        quoteAuthor[quoteCounter].classList.remove(\"quote-display\");\n\n        if (button.classList.contains(\"quote-btn-l-handler\")) {\n          quoteCounter--;\n\n          if (quoteCounter < 0) {\n            quoteCounter = quotes.length - 1;\n          }\n\n          quotes[quoteCounter].classList.add(\"quote-display\");\n          quoteAuthor[quoteCounter].classList.add(\"quote-display\");\n          quoteIndex.innerHTML = quoteCounter + 1;\n        }\n\n        if (button.classList.contains(\"quote-btn-r-handler\")) {\n          quoteCounter++;\n\n          if (quoteCounter > quotes.length - 1) {\n            quoteCounter = 0;\n          }\n\n          quotes[quoteCounter].classList.add(\"quote-display\");\n          quoteAuthor[quoteCounter].classList.add(\"quote-display\");\n          quoteIndex.innerHTML = quoteCounter + 1;\n        }\n      });\n    });\n  }); // scroll arrow\n\n  $(document).ready(function () {\n    $(\".arrow-icon\").click(function (event) {\n      $(\"html, body\").animate({\n        scrollTop: \"+=700px\"\n      }, 800);\n    });\n  }); // lazy load\n\n  $(\".lazy\").Lazy({\n    // your configuration goes here\n    scrollDirection: \"vertical\",\n    effect: \"fadeIn\",\n    effectTime: 1500,\n    threshold: 0,\n    visibleOnly: true,\n    onError: function onError(element) {\n      console.log(\"error loading \" + element.data(\"src\"));\n    }\n  }); //.addClass(\"animate\");\n  // Parallax lines\n\n  /* $(document).ready(function () {\n  window.addEventListener(\"scroll\", function() {\n    const distance = window.scrollY;\n    document.querySelector(\n      \".left-explainer-left-col\"\n    ).style.transform = `translateY(${distance * .3}px)`;\n  });\n  }); */\n  // add animation class\n\n  $(window).on(\"scroll\", function () {\n    // Determine if the element is in the viewport\n    if (!$(\".left-explainer-left-col\").visible(true)) {\n      $(\".left-explainer-left-col\").removeClass(\"animate\");\n    }\n\n    if ($(\".left-explainer-left-col\").visible(true)) {\n      $(\".left-explainer-left-col\").addClass(\"animate\");\n    }\n\n    if (!$(\".line-box\").visible(true)) {\n      $(\".line-box\").removeClass(\"animate\");\n    }\n\n    if ($(\".line-box\").visible(true)) {\n      $(\".line-box\").addClass(\"animate\");\n    }\n\n    if (!$(\".pc-line-left\").visible(true)) {\n      $(\".pc-line-left\").removeClass(\"animate-pe-right\");\n    }\n\n    if ($(\".pc-line-left\").visible(true)) {\n      $(\".pc-line-left\").addClass(\"animate-pe-right\");\n    }\n\n    if (!$(\".pc-line-right\").visible(true)) {\n      $(\".pc-line-right\").removeClass(\"animate-pe-left\");\n    }\n\n    if ($(\".pc-line-right\").visible(true)) {\n      $(\".pc-line-right\").addClass(\"animate-pe-left\");\n    }\n\n    if (!$(\".pe-col-left-inner-line\").visible(true)) {\n      $(\".pe-col-left-inner-line\").removeClass(\"animate-pe-left\");\n    }\n\n    if ($(\".pe-col-left-inner-line\").visible(true)) {\n      $(\".pe-col-left-inner-line\").addClass(\"animate-pe-left\");\n    }\n  }); // end\n});\n\n//# sourceURL=webpack:///./assets/js/app.js?");

/***/ }),

/***/ "./assets/scss/main.scss":
/*!*******************************!*\
  !*** ./assets/scss/main.scss ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./assets/scss/main.scss?");

/***/ }),

/***/ 0:
/*!********************************************************!*\
  !*** multi ./assets/js/app.js ./assets/scss/main.scss ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("__webpack_require__(/*! ./assets/js/app.js */\"./assets/js/app.js\");\nmodule.exports = __webpack_require__(/*! ./assets/scss/main.scss */\"./assets/scss/main.scss\");\n\n\n//# sourceURL=webpack:///multi_./assets/js/app.js_./assets/scss/main.scss?");

/***/ })

/******/ });
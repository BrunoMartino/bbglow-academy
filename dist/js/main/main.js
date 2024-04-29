/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/modules/animaScroll.js":
/*!***************************************!*\
  !*** ./src/js/modules/animaScroll.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ AnimaScroll)\n/* harmony export */ });\n/* harmony import */ var _debounce_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./debounce.js */ \"./src/js/modules/debounce.js\");\n\r\n\r\nclass AnimaScroll {\r\n  constructor(sections) {\r\n    this.sections = document.querySelectorAll(sections);\r\n\r\n    this.windowEight = window.innerHeight * 0.85;\r\n\r\n    this.checkDistance = (0,_debounce_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"])(this.checkDistance.bind(this), 50);\r\n  }\r\n\r\n  getDistance() {\r\n    this.distance = [...this.sections].map((section) => {\r\n      const rect = section.getBoundingClientRect();\r\n      const offset = rect.top + window.scrollY;\r\n      return {\r\n        element: section,\r\n        offset: Math.floor(offset - this.windowEight),\r\n      };\r\n    });\r\n  }\r\n\r\n  checkDistance() {\r\n    this.distance.forEach((item) => {\r\n      if (window.scrollY > item.offset) {\r\n        item.element.classList.add(\"onShow\");\r\n      }\r\n    });\r\n  }\r\n\r\n  init() {\r\n    if (this.sections.length) {\r\n      this.getDistance();\r\n\r\n      this.checkDistance();\r\n\r\n      window.addEventListener(\"scroll\", this.checkDistance);\r\n    }\r\n\r\n    return this;\r\n  }\r\n}\r\n\n\n//# sourceURL=webpack://bbglow-new/./src/js/modules/animaScroll.js?");

/***/ }),

/***/ "./src/js/modules/debounce.js":
/*!************************************!*\
  !*** ./src/js/modules/debounce.js ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ debounce)\n/* harmony export */ });\nfunction debounce(callback, delay) {\r\r\n  let timer;\r\r\n  return (...args) => {\r\r\n    if (timer) clearInterval(timer);\r\r\n    timer = setTimeout(() => {\r\r\n      callback(...args);\r\r\n      timer = null;\r\r\n    }, delay);\r\r\n  };\r\r\n}\r\r\n\n\n//# sourceURL=webpack://bbglow-new/./src/js/modules/debounce.js?");

/***/ }),

/***/ "./src/js/modules/filters-query.js":
/*!*****************************************!*\
  !*** ./src/js/modules/filters-query.js ***!
  \*****************************************/
/***/ (() => {

eval("document.addEventListener(\"DOMContentLoaded\", () => {\r\n  document.getElementById(\"most-sales-btn\").addEventListener(\"click\", () => {\r\n    filterProducts(\"most_sales\");\r\n  });\r\n  document.getElementById(\"newest-btn\").addEventListener(\"click\", () => {\r\n    filterProducts(\"newest\");\r\n  });\r\n\r\n  function filterProducts(filterType) {\r\n    let xhr = new XMLHttpRequest();\r\n\r\n    xhr.onreadystatechange = function () {\r\n      if (xhr.readyState === XMLHttpRequest.DONE) {\r\n        if (xhr.status === 200) {\r\n          let productsHTML = xhr.responseText;\r\n          document.getElementById(\"product-list\").innerHTML = productsHTML;\r\n        } else {\r\n          console.error(\"Error fetching products\");\r\n        }\r\n      }\r\n    };\r\n    xhr.open(\r\n      \"GET\",\r\n      \"/wp-admin/admin-ajax.php?action=filter_products&filter=\" + filterType,\r\n      true\r\n    );\r\n    xhr.send();\r\n  }\r\n});\r\n\n\n//# sourceURL=webpack://bbglow-new/./src/js/modules/filters-query.js?");

/***/ }),

/***/ "./src/js/modules/menu-mobile.js":
/*!***************************************!*\
  !*** ./src/js/modules/menu-mobile.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ MenuMobile)\n/* harmony export */ });\n/* harmony import */ var _outsideclick_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./outsideclick.js */ \"./src/js/modules/outsideclick.js\");\n\r\n\r\nclass MenuMobile {\r\n  constructor(menuButton, menuList, events) {\r\n    this.menuButton = document.querySelector(menuButton);\r\n\r\n    this.menuList = document.querySelectorAll(menuList);\r\n\r\n    this.html = document.querySelector(\"html\");\r\n\r\n    this.isOpen = false;\r\n\r\n    if (events === undefined) {\r\n      this.events = [\"touchstart\", \"click\"];\r\n    } else {\r\n      this.events = events;\r\n    }\r\n\r\n    this.openMenu = this.openMenu.bind(this);\r\n\r\n    this.linkPreventRemove = this.linkPreventRemove.bind(this);\r\n  }\r\n\r\n  linkPreventRemove(event) {\r\n    event.preventDefault();\r\n  }\r\n\r\n  openMenu(event) {\r\n    if (event.type === \"touchstart\") event.preventDefault();\r\n\r\n    if (!this.isOpen) {\r\n      this.menuList.forEach((element) => {\r\n        element.classList.remove(\"hidden\");\r\n      });\r\n\r\n      this.menuButton.classList.add(\"active\");\r\n\r\n      (0,_outsideclick_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"])(Array.from(this.menuList), this.events, () => {\r\n        this.menuList.forEach((element) => {\r\n          element.classList.add(\"hidden\");\r\n        });\r\n\r\n        this.menuButton.classList.remove(\"active\");\r\n\r\n        this.isOpen = false;\r\n      });\r\n\r\n      this.isOpen = true;\r\n    }\r\n  }\r\n\r\n  addMenuMobileEvents() {\r\n    this.events.forEach((event) => {\r\n      this.menuButton.addEventListener(event, this.openMenu);\r\n    });\r\n  }\r\n\r\n  init() {\r\n    if (this.menuButton && this.menuList) {\r\n      this.addMenuMobileEvents();\r\n    }\r\n    return this;\r\n  }\r\n}\r\n\n\n//# sourceURL=webpack://bbglow-new/./src/js/modules/menu-mobile.js?");

/***/ }),

/***/ "./src/js/modules/outsideclick.js":
/*!****************************************!*\
  !*** ./src/js/modules/outsideclick.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ outsideClick)\n/* harmony export */ });\nfunction outsideClick(elements, events, callback) {\r\r\n  const html = document.querySelector(\"html\");\r\r\n\r\r\n  function handleOutsideClick(event) {\r\r\n    const isOutside = !elements.some((element) =>\r\r\n      element.contains(event.target)\r\r\n    );\r\r\n\r\r\n    if (isOutside) {\r\r\n      callback();\r\r\n      events.forEach((event) => {\r\r\n        html.removeEventListener(event, handleOutsideClick);\r\r\n      });\r\r\n    }\r\r\n  }\r\r\n\r\r\n  events.forEach((event) => {\r\r\n    setTimeout(() => {\r\r\n      html.addEventListener(event, handleOutsideClick);\r\r\n    }, 0);\r\r\n  });\r\r\n}\r\r\n\n\n//# sourceURL=webpack://bbglow-new/./src/js/modules/outsideclick.js?");

/***/ }),

/***/ "./src/js/script.js":
/*!**************************!*\
  !*** ./src/js/script.js ***!
  \**************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _modules_menu_mobile_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/menu-mobile.js */ \"./src/js/modules/menu-mobile.js\");\n/* harmony import */ var _modules_animaScroll_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/animaScroll.js */ \"./src/js/modules/animaScroll.js\");\n/* harmony import */ var _modules_filters_query_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/filters-query.js */ \"./src/js/modules/filters-query.js\");\n/* harmony import */ var _modules_filters_query_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_modules_filters_query_js__WEBPACK_IMPORTED_MODULE_2__);\n\r\n\r\n\r\n\r\nconst menuMobile = new _modules_menu_mobile_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"](\".menu_mobile-btn\", \".header_nav\");\r\nconst filterMobile = new _modules_menu_mobile_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"](\".filter_btn\", \".filter_list\");\r\nconst catMobile = new _modules_menu_mobile_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"](\".categories_btn\", \".categories_nav\");\r\n\r\nconst animaScroll = new _modules_animaScroll_js__WEBPACK_IMPORTED_MODULE_1__[\"default\"]('[data-anima=\"scroll\"]');\r\n\r\nmenuMobile.init();\r\nfilterMobile.init();\r\ncatMobile.init();\r\nanimaScroll.init();\r\n\r\nwindow.addEventListener(\"scroll\", () => {\r\n  const navbar = document.querySelector(\"header\");\r\n  if (window.scrollY > 500) {\r\n    navbar.style.position = \"fixed\";\r\n    navbar.style.top = \"0\";\r\n    navbar.style.zIndex = 9998;\r\n  } else {\r\n    navbar.style.top = 0;\r\n    navbar.style.position = \"relative\";\r\n  }\r\n});\r\n\r\nconst cartBtn = document.getElementById(\"cart_link\");\r\nconst cartModal = document.querySelector(\".xoo-wsc-modal\");\r\n\r\ncartBtn.addEventListener(\"click\", (event) => {\r\n  event.preventDefault();\r\n  cartModal.classList.toggle(\"xoo-wsc-cart-active\");\r\n});\r\n\n\n//# sourceURL=webpack://bbglow-new/./src/js/script.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/js/script.js");
/******/ 	
/******/ })()
;
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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("throw new Error(\"Module build failed (from ./node_modules/babel-loader/lib/index.js):\\nSyntaxError: C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\resources\\\\js\\\\app.js: Unexpected token (26:24)\\n\\n  24 | \\n  25 |     djsPrice.forEach(dj => {\\n> 26 |       let counter = $dj->price\\n     |                         ^\\n  27 |       let bite = dj.children[1] = dj.children[1].innerText.replace(dj.children[1].innerText, counter)\\n  28 |       console.log(bite)\\n  29 | \\n    at Parser._raise (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:748:17)\\n    at Parser.raiseWithData (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:741:17)\\n    at Parser.raise (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:735:17)\\n    at Parser.unexpected (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9097:16)\\n    at Parser.parseExprAtom (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:10548:20)\\n    at Parser.parseExprSubscripts (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:10122:23)\\n    at Parser.parseUpdate (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:10102:21)\\n    at Parser.parseMaybeUnary (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:10091:17)\\n    at Parser.parseExprOpBaseRightExpr (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:10052:34)\\n    at Parser.parseExprOpRightExpr (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:10045:21)\\n    at Parser.parseExprOp (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:10011:27)\\n    at Parser.parseExprOps (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9967:17)\\n    at Parser.parseMaybeConditional (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9935:23)\\n    at Parser.parseMaybeAssign (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9898:21)\\n    at C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9865:39\\n    at Parser.allowInAnd (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:11521:12)\\n    at Parser.parseMaybeAssignAllowIn (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9865:17)\\n    at Parser.parseVar (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:12316:70)\\n    at Parser.parseVarStatement (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:12125:10)\\n    at Parser.parseStatementContent (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:11717:21)\\n    at Parser.parseStatement (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:11650:17)\\n    at Parser.parseBlockOrModuleBlockBody (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:12232:25)\\n    at Parser.parseBlockBody (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:12218:10)\\n    at Parser.parseBlock (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:12202:10)\\n    at Parser.parseFunctionBody (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:11194:24)\\n    at Parser.parseArrowExpression (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:11166:10)\\n    at Parser.parseExprAtom (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:10401:25)\\n    at Parser.parseExprSubscripts (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:10122:23)\\n    at Parser.parseUpdate (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:10102:21)\\n    at Parser.parseMaybeUnary (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:10091:17)\\n    at Parser.parseExprOps (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9961:23)\\n    at Parser.parseMaybeConditional (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9935:23)\\n    at Parser.parseMaybeAssign (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9898:21)\\n    at C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9865:39\\n    at Parser.allowInAnd (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:11521:12)\\n    at Parser.parseMaybeAssignAllowIn (C:\\\\Users\\\\bebos\\\\WAF\\\\MyLaravelProjects\\\\MyAgent\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9865:17)\");//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9hcHAuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/app.js\n");

/***/ }),

/***/ 1:
/*!***********************************!*\
  !*** multi ./resources/js/app.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\bebos\WAF\MyLaravelProjects\MyAgent\resources\js\app.js */"./resources/js/app.js");


/***/ })

/******/ });
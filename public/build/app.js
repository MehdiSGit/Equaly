(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_app_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/app.css */ "./assets/styles/app.css");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_dom__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! react-dom */ "./node_modules/react-dom/index.js");
/* harmony import */ var _components_SearchBar__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/SearchBar */ "./assets/components/SearchBar.jsx");
/* harmony import */ var _components_Blog__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./components/Blog */ "./assets/components/Blog.jsx");
/* harmony import */ var typed_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! typed.js */ "./node_modules/typed.js/lib/typed.js");
/* harmony import */ var typed_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(typed_js__WEBPACK_IMPORTED_MODULE_5__);
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
// any CSS you import will output into a single css file (app.css in this case)





var searchBar = document.getElementById('search-bar');
var blogSelector = document.getElementById('blog-pricipal'); // Can also be included with a regular script tag



if (searchBar) {
  react_dom__WEBPACK_IMPORTED_MODULE_2__.render( /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_1__.createElement(_components_SearchBar__WEBPACK_IMPORTED_MODULE_3__.default, null), searchBar);
}

if (blogSelector) {
  react_dom__WEBPACK_IMPORTED_MODULE_2__.render( /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_1__.createElement(_components_Blog__WEBPACK_IMPORTED_MODULE_4__.default, null), blogSelector);
} // function appear(){
//         let logos  = document.querySelectorAll('.startup_logo img');
//         for(i=0; i<logos.length; i++){
//             let logo = logos[i];
//             logo.classList.toggle('hide'); 
//         }
//     }
//     window.onload = appear();
//     setInterval(logo, 1000)
// function appear(){
//         let logos  = document.querySelector('.startup_logo');
//         logos.classList.toggle('red');
//         console.log(logos)
// }
// window.onload = appear();
// setInterval(appear, 2000);


window.addEventListener('scroll', reveal);

function reveal() {
  var element = document.querySelector('.startup_logo');
  var position = element.getBoundingClientRect();

  if (position.top >= 0 && position.bottom <= window.innerHeight) {
    element.classList.add('logo_animation');
  }
}

window.addEventListener('scroll', active);

function active() {
  var h1 = document.querySelector('.force');
  var pos = h1.getBoundingClientRect();

  if (pos.top >= 0 && pos.bottom <= window.innerHeight) {
    h1.classList.add('activee');
  }
}

window.addEventListener('scroll', appearConcept);

function appearConcept() {
  var concept = document.querySelector('.articles');
  var p = concept.getBoundingClientRect();

  if (p.top >= 0 && p.bottom <= window.innerHeight) {
    concept.classList.add('activeConcept');
  }
}

var typed = new (typed_js__WEBPACK_IMPORTED_MODULE_5___default())('#typed', {
  strings: ['UX Design', 'UI Design', 'Developpeur', 'Web', 'Dev', 'Front', 'Data'],
  typeSpeed: 0,
  backSpeed: 0,
  smartBackspace: true,
  // c'est par defaut
  loop: true
}); // Fonction qui va gérer la vidéo

function pauseVideo() {
  var video = document.getElementById('video');
  var bouton = document.getElementById('btn');

  if (video.paused) {
    bouton.textContent = 'Pause';
    video.play();
  } else {
    video.pause();
    bouton.textContent = 'Play';
  }
}

bouton.addEventListener('click', pauseVideo);

/***/ }),

/***/ "./assets/components/Blog.jsx":
/*!************************************!*\
  !*** ./assets/components/Blog.jsx ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_string_search_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.string.search.js */ "./node_modules/core-js/modules/es.string.search.js");
/* harmony import */ var core_js_modules_es_string_search_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_search_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.map.js */ "./node_modules/core-js/modules/es.array.map.js");
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.array.filter.js */ "./node_modules/core-js/modules/es.array.filter.js");
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_array_includes_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.array.includes.js */ "./node_modules/core-js/modules/es.array.includes.js");
/* harmony import */ var core_js_modules_es_array_includes_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_includes_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_string_includes_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.string.includes.js */ "./node_modules/core-js/modules/es.string.includes.js");
/* harmony import */ var core_js_modules_es_string_includes_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_includes_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }





















function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }


var url = "https://jsonplaceholder.typicode.com/posts";

var Blog = /*#__PURE__*/function (_React$Component) {
  _inherits(Blog, _React$Component);

  var _super = _createSuper(Blog);

  function Blog() {
    var _this;

    _classCallCheck(this, Blog);

    _this = _super.call(this);

    _defineProperty(_assertThisInitialized(_this), "updateSearch", function (e) {
      var keyWord = e.target.value;

      _this.setState({
        search: keyWord
      });
    });

    var info;
    _this.state = {
      events: [],
      search: ''
    };
    return _this;
  }

  _createClass(Blog, [{
    key: "componentDidUpdate",
    value: function componentDidUpdate(prevProps, prevState) {
      if (prevState.search !== this.state.search) {}
    }
  }, {
    key: "componentDidMount",
    value: function componentDidMount() {
      var _this2 = this;

      fetch(url).then(function (response) {
        return response.json();
      }).then(function (response) {
        _this2.setState({
          events: response
        });
      });
    }
  }, {
    key: "render",
    value: function render() {
      var _this3 = this;

      var searchItem = this.state.events.filter(function (data) {
        if (_this3.state.search == null) return data;else if (data.title.toLowerCase().includes(_this3.state.search.toLowerCase())) {
          return data;
        }
      }).map(function (event) {
        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_19__.createElement("div", {
          className: "blog_article"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_19__.createElement("img", {
          src: "https://image.freepik.com/vecteurs-libre/journee-internationale-personnes-handicapees-au-design-plat_23-2148723226.jpg",
          alt: ""
        }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_19__.createElement("h4", null, event.title), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_19__.createElement("p", null, event.body, " "));
      });
      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_19__.createElement(react__WEBPACK_IMPORTED_MODULE_19__.Fragment, null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_19__.createElement("div", {
        "class": "blog_bar"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_19__.createElement("h1", null, "Tous nos articles"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_19__.createElement("input", {
        type: "text",
        onChange: this.updateSearch,
        value: this.state.search,
        placeholder: "Rechercher"
      })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_19__.createElement("div", {
        className: "r"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_19__.createElement("section", {
        className: "display"
      }, searchItem)));
    }
  }]);

  return Blog;
}(react__WEBPACK_IMPORTED_MODULE_19__.Component);

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Blog);

/***/ }),

/***/ "./assets/components/SearchBar.jsx":
/*!*****************************************!*\
  !*** ./assets/components/SearchBar.jsx ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_string_search_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.string.search.js */ "./node_modules/core-js/modules/es.string.search.js");
/* harmony import */ var core_js_modules_es_string_search_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_search_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.array.map.js */ "./node_modules/core-js/modules/es.array.map.js");
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_entries_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.entries.js */ "./node_modules/core-js/modules/es.object.entries.js");
/* harmony import */ var core_js_modules_es_object_entries_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_entries_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }





















function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }



var Search = /*#__PURE__*/function (_React$Component) {
  _inherits(Search, _React$Component);

  var _super = _createSuper(Search);

  function Search() {
    var _this;

    _classCallCheck(this, Search);

    _this = _super.call(this);

    _defineProperty(_assertThisInitialized(_this), "updateSearch", function (event) {
      _this.setState({
        search: event.target.value
      });
    });

    _defineProperty(_assertThisInitialized(_this), "fetchJobs", function () {
      // url à modifier
      fetch('http://localhost:8000/api/job', {
        headers: {
          // Garder toujours les mêmes headers
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        method: "POST",
        // POST, PUT, ou DELETE en fonction des besoins
        body: JSON.stringify({
          // variable qui va etre envoyé au back ('search')
          search: _this.state.search
        })
      }).then(function (response) {
        return response.json();
      }).then(function (response) {
        //take back data as an object
        var updatedJobsList = response.data; //take back data as an array contains arrays inside [[],[],[]] with object.entries

        if (!Array.isArray(response.data)) {
          updatedJobsList = Object.entries(response.data).map(function (jobInResult) {
            // On récupère la valeur de mielInResults
            return jobInResult[1];
          });
        }

        _this.setState({
          jobs: updatedJobsList
        });
      });
    });

    _this.state = {
      jobs: [],
      search: ''
    };
    return _this;
  }

  _createClass(Search, [{
    key: "componentDidUpdate",
    value: function componentDidUpdate(prevProps, prevState) {
      if (prevState.search !== this.state.search) {
        this.fetchJobs();
      }
    }
  }, {
    key: "render",
    value: function render() {
      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_19__.createElement("div", {
        className: "container_search_bar"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_19__.createElement("label", {
        htmlFor: ""
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_19__.createElement("input", {
        type: "text",
        onChange: this.updateSearch,
        placeholder: "Recherchez...",
        value: this.state.search
      })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_19__.createElement("div", {
        className: "jobs"
      }, this.state.jobs.map(function (job) {
        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_19__.createElement("div", {
          className: "card"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_19__.createElement("div", {
          className: "card-body"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_19__.createElement("h5", {
          className: "card-title"
        }, job.name), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_19__.createElement("p", {
          className: "card-text"
        }, job.description), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_19__.createElement("a", {
          href: '/showJob/' + job.id
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_19__.createElement("img", {
          src: "https://img.icons8.com/android/24/000000/long-arrow-right.png"
        }))));
      })));
    }
    /**
     * Cette fonction met à jour le state search avec la valeur reçue en paramètres
     * @param event
     */

  }]);

  return Search;
}(react__WEBPACK_IMPORTED_MODULE_19__.Component);

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Search);

/***/ }),

/***/ "./assets/styles/app.css":
/*!*******************************!*\
  !*** ./assets/styles/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ "use strict";
/******/ 
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_array_filter_js-node_modules_core-js_modules_es_array-b2fa54"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9jb21wb25lbnRzL0Jsb2cuanN4Iiwid2VicGFjazovLy8uL2Fzc2V0cy9jb21wb25lbnRzL1NlYXJjaEJhci5qc3giLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9hcHAuY3NzIl0sIm5hbWVzIjpbInNlYXJjaEJhciIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJibG9nU2VsZWN0b3IiLCJSZWFjdERPTSIsIndpbmRvdyIsImFkZEV2ZW50TGlzdGVuZXIiLCJyZXZlYWwiLCJlbGVtZW50IiwicXVlcnlTZWxlY3RvciIsInBvc2l0aW9uIiwiZ2V0Qm91bmRpbmdDbGllbnRSZWN0IiwidG9wIiwiYm90dG9tIiwiaW5uZXJIZWlnaHQiLCJjbGFzc0xpc3QiLCJhZGQiLCJhY3RpdmUiLCJoMSIsInBvcyIsImFwcGVhckNvbmNlcHQiLCJjb25jZXB0IiwicCIsInR5cGVkIiwiVHlwZWQiLCJzdHJpbmdzIiwidHlwZVNwZWVkIiwiYmFja1NwZWVkIiwic21hcnRCYWNrc3BhY2UiLCJsb29wIiwicGF1c2VWaWRlbyIsInZpZGVvIiwiYm91dG9uIiwicGF1c2VkIiwidGV4dENvbnRlbnQiLCJwbGF5IiwicGF1c2UiLCJ1cmwiLCJCbG9nIiwiZSIsImtleVdvcmQiLCJ0YXJnZXQiLCJ2YWx1ZSIsInNldFN0YXRlIiwic2VhcmNoIiwiaW5mbyIsInN0YXRlIiwiZXZlbnRzIiwicHJldlByb3BzIiwicHJldlN0YXRlIiwiZmV0Y2giLCJ0aGVuIiwicmVzcG9uc2UiLCJqc29uIiwic2VhcmNoSXRlbSIsImZpbHRlciIsImRhdGEiLCJ0aXRsZSIsInRvTG93ZXJDYXNlIiwiaW5jbHVkZXMiLCJtYXAiLCJldmVudCIsImJvZHkiLCJ1cGRhdGVTZWFyY2giLCJSZWFjdCIsIlNlYXJjaCIsImhlYWRlcnMiLCJtZXRob2QiLCJKU09OIiwic3RyaW5naWZ5IiwidXBkYXRlZEpvYnNMaXN0IiwiQXJyYXkiLCJpc0FycmF5IiwiT2JqZWN0IiwiZW50cmllcyIsImpvYkluUmVzdWx0Iiwiam9icyIsImZldGNoSm9icyIsImpvYiIsIm5hbWUiLCJkZXNjcmlwdGlvbiIsImlkIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7OztBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLElBQU1BLFNBQVMsR0FBR0MsUUFBUSxDQUFDQyxjQUFULENBQXdCLFlBQXhCLENBQWxCO0FBQ0EsSUFBTUMsWUFBWSxHQUFHRixRQUFRLENBQUNDLGNBQVQsQ0FBd0IsZUFBeEIsQ0FBckIsQyxDQUNBOztBQUNBOztBQUVBLElBQUlGLFNBQUosRUFBZTtBQUNYSSwrQ0FBQSxlQUNJLGlEQUFDLDBEQUFELE9BREosRUFDZ0JKLFNBRGhCO0FBR0g7O0FBR0QsSUFBSUcsWUFBSixFQUFrQjtBQUNkQywrQ0FBQSxlQUNJLGlEQUFDLHFEQUFELE9BREosRUFFSUQsWUFGSjtBQUdILEMsQ0FJRDtBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUVBO0FBRUE7QUFJQTtBQUVBO0FBQ0E7QUFHQTtBQUVBO0FBRUE7QUFFQTs7O0FBRUFFLE1BQU0sQ0FBQ0MsZ0JBQVAsQ0FBd0IsUUFBeEIsRUFBa0NDLE1BQWxDOztBQUVBLFNBQVNBLE1BQVQsR0FBa0I7QUFDZCxNQUFJQyxPQUFPLEdBQUdQLFFBQVEsQ0FBQ1EsYUFBVCxDQUF1QixlQUF2QixDQUFkO0FBRUEsTUFBSUMsUUFBUSxHQUFHRixPQUFPLENBQUNHLHFCQUFSLEVBQWY7O0FBRUEsTUFBSUQsUUFBUSxDQUFDRSxHQUFULElBQWdCLENBQWhCLElBQXFCRixRQUFRLENBQUNHLE1BQVQsSUFBbUJSLE1BQU0sQ0FBQ1MsV0FBbkQsRUFBZ0U7QUFDNUROLFdBQU8sQ0FBQ08sU0FBUixDQUFrQkMsR0FBbEIsQ0FBc0IsZ0JBQXRCO0FBQ0g7QUFDSjs7QUFHRFgsTUFBTSxDQUFDQyxnQkFB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QUFULFVBREEsQ0FIRixDQURGLENBREY7QUFVRCxPQVhBLENBREQsQ0FORixDQURKO0FBeUJDO0FBRUQ7QUFDUjtBQUNBO0FBQ0E7Ozs7O0VBL0NxQmpCLDZDOztBQTBGckIsaUVBQWVDLE1BQWYsRTs7Ozs7Ozs7Ozs7O0FDNUZBIiwiZmlsZSI6ImFwcC5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qXG4gKiBXZWxjb21lIHRvIHlvdXIgYXBwJ3MgbWFpbiBKYXZhU2NyaXB0IGZpbGUhXG4gKlxuICogV2UgcmVjb21tZW5kIGluY2x1ZGluZyB0aGUgYnVpbHQgdmVyc2lvbiBvZiB0aGlzIEphdmFTY3JpcHQgZmlsZVxuICogKGFuZCBpdHMgQ1NTIGZpbGUpIGluIHlvdXIgYmFzZSBsYXlvdXQgKGJhc2UuaHRtbC50d2lnKS5cbiAqL1xuXG4vLyBhbnkgQ1NTIHlvdSBpbXBvcnQgd2lsbCBvdXRwdXQgaW50byBhIHNpbmdsZSBjc3MgZmlsZSAoYXBwLmNzcyBpbiB0aGlzIGNhc2UpXG5pbXBvcnQgJy4vc3R5bGVzL2FwcC5jc3MnO1xuaW1wb3J0IFJlYWN0IGZyb20gJ3JlYWN0JztcbmltcG9ydCBSZWFjdERPTSBmcm9tICdyZWFjdC1kb20nO1xuaW1wb3J0IFNlYXJjaCBmcm9tICcuL2NvbXBvbmVudHMvU2VhcmNoQmFyJztcbmltcG9ydCBCbG9nIGZyb20gJy4vY29tcG9uZW50cy9CbG9nJ1xuY29uc3Qgc2VhcmNoQmFyID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3NlYXJjaC1iYXInKTtcbmNvbnN0IGJsb2dTZWxlY3RvciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdibG9nLXByaWNpcGFsJyk7XG4vLyBDYW4gYWxzbyBiZSBpbmNsdWRlZCB3aXRoIGEgcmVndWxhciBzY3JpcHQgdGFnXG5pbXBvcnQgVHlwZWQgZnJvbSAndHlwZWQuanMnO1xuXG5pZiAoc2VhcmNoQmFyKSB7XG4gICAgUmVhY3RET00ucmVuZGVyKFxuICAgICAgICA8U2VhcmNoIC8+LCBzZWFyY2hCYXJcbiAgICApXG59XG5cblxuaWYgKGJsb2dTZWxlY3Rvcikge1xuICAgIFJlYWN0RE9NLnJlbmRlcihcbiAgICAgICAgPEJsb2cgLz4sXG4gICAgICAgIGJsb2dTZWxlY3Rvcilcbn1cblxuXG5cbi8vIGZ1bmN0aW9uIGFwcGVhcigpe1xuXG4vLyAgICAgICAgIGxldCBsb2dvcyAgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuc3RhcnR1cF9sb2dvIGltZycpO1xuLy8gICAgICAgICBmb3IoaT0wOyBpPGxvZ29zLmxlbmd0aDsgaSsrKXtcbi8vICAgICAgICAgICAgIGxldCBsb2dvID0gbG9nb3NbaV07XG4vLyAgICAgICAgICAgICBsb2dvLmNsYXNzTGlzdC50b2dnbGUoJ2hpZGUnKTsgXG4vLyAgICAgICAgIH1cbi8vICAgICB9XG5cbi8vICAgICB3aW5kb3cub25sb2FkID0gYXBwZWFyKCk7XG5cbi8vICAgICBzZXRJbnRlcnZhbChsb2dvLCAxMDAwKVxuXG5cblxuLy8gZnVuY3Rpb24gYXBwZWFyKCl7XG5cbi8vICAgICAgICAgbGV0IGxvZ29zICA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5zdGFydHVwX2xvZ28nKTtcbi8vICAgICAgICAgbG9nb3MuY2xhc3NMaXN0LnRvZ2dsZSgncmVkJyk7XG5cblxuLy8gICAgICAgICBjb25zb2xlLmxvZyhsb2dvcylcblxuLy8gfVxuXG4vLyB3aW5kb3cub25sb2FkID0gYXBwZWFyKCk7XG5cbi8vIHNldEludGVydmFsKGFwcGVhciwgMjAwMCk7XG5cbndpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdzY3JvbGwnLCByZXZlYWwpO1xuXG5mdW5jdGlvbiByZXZlYWwoKSB7XG4gICAgbGV0IGVsZW1lbnQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuc3RhcnR1cF9sb2dvJyk7XG5cbiAgICBsZXQgcG9zaXRpb24gPSBlbGVtZW50LmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpO1xuXG4gICAgaWYgKHBvc2l0aW9uLnRvcCA+PSAwICYmIHBvc2l0aW9uLmJvdHRvbSA8PSB3aW5kb3cuaW5uZXJIZWlnaHQpIHtcbiAgICAgICAgZWxlbWVudC5jbGFzc0xpc3QuYWRkKCdsb2dvX2FuaW1hdGlvbicpXG4gICAgfVxufVxuXG5cbndpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdzY3JvbGwnLCBhY3RpdmUpO1xuXG5mdW5jdGlvbiBhY3RpdmUoKSB7XG4gICAgbGV0IGgxID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLmZvcmNlJyk7XG5cbiAgICBsZXQgcG9zID0gaDEuZ2V0Qm91bmRpbmdDbGllbnRSZWN0KCk7XG5cbiAgICBpZiAocG9zLnRvcCA+PSAwICYmIHBvcy5ib3R0b20gPD0gd2luZG93LmlubmVySGVpZ2h0KSB7XG4gICAgICAgIGgxLmNsYXNzTGlzdC5hZGQoJ2FjdGl2ZWUnKVxuICAgIH1cbn1cblxuXG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignc2Nyb2xsJywgYXBwZWFyQ29uY2VwdCk7XG5cbmZ1bmN0aW9uIGFwcGVhckNvbmNlcHQoKSB7XG4gICAgbGV0IGNvbmNlcHQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuYXJ0aWNsZXMnKTtcblxuICAgIGxldCBwID0gY29uY2VwdC5nZXRCb3VuZGluZ0NsaWVudFJlY3QoKTtcblxuICAgIGlmIChwLnRvcCA+PSAwICYmIHAuYm90dG9tIDw9IHdpbmRvdy5pbm5lckhlaWdodCkge1xuICAgICAgICBjb25jZXB0LmNsYXNzTGlzdC5hZGQoJ2FjdGl2ZUNvbmNlcHQnKVxuICAgIH1cbn1cblxuXG5cbmxldCB0eXBlZCA9IG5ldyBUeXBlZCgnI3R5cGVkJywge1xuICAgIHN0cmluZ3M6IFsnVVggRGVzaWduJywgJ1VJIERlc2lnbicsICdEZXZlbG9wcGV1cicsICdXZWInLCAnRGV2JywgJ0Zyb250JywgJ0RhdGEnXSxcbiAgICB0eXBlU3BlZWQ6IDAsXG4gICAgYmFja1NwZWVkOiAwLFxuICAgIHNtYXJ0QmFja3NwYWNlOiB0cnVlLCAvLyBjJ2VzdCBwYXIgZGVmYXV0XG4gICAgbG9vcDogdHJ1ZVxufSk7XG5cblxuXG4vLyBGb25jdGlvbiBxdWkgdmEgZ8OpcmVyIGxhIHZpZMOpb1xuXG5mdW5jdGlvbiBwYXVzZVZpZGVvKCkge1xuXG4gICAgbGV0IHZpZGVvID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3ZpZGVvJylcbiAgICBsZXQgYm91dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2J0bicpXG5cbiAgICBpZiAodmlkZW8ucGF1c2VkKSB7XG4gICAgICAgIGJvdXRvbi50ZXh0Q29udGVudCA9ICdQYXVzZSdcbiAgICAgICAgdmlkZW8ucGxheSgpXG4gICAgfVxuICAgIGVsc2Uge1xuICAgICAgICB2aWRlby5wYXVzZSgpXG4gICAgICAgIGJvdXRvbi50ZXh0Q29udGVudCA9ICdQbGF5J1xuICAgIH1cbn1cblxuYm91dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgcGF1c2VWaWRlbyk7IiwiaW1wb3J0IFJlYWN0IGZyb20gJ3JlYWN0JztcbmNvbnN0IHVybCA9IFwiaHR0cHM6Ly9qc29ucGxhY2Vob2xkZXIudHlwaWNvZGUuY29tL3Bvc3RzXCJcblxuY2xhc3MgQmxvZyBleHRlbmRzIFJlYWN0LkNvbXBvbmVudCB7XG4gICAgY29uc3RydWN0b3IoKSB7XG4gICAgICAgIHN1cGVyKCk7XG4gICAgICAgIGxldCBpbmZvO1xuICAgICAgICB0aGlzLnN0YXRlID0ge1xuICAgICAgICAgICAgZXZlbnRzOiBbXSxcbiAgICAgICAgICAgIHNlYXJjaDonJyxcbiAgICAgICAgfTtcbiAgICB9XG5cbiAgICBjb21wb25lbnREaWRVcGRhdGUocHJldlByb3BzLCBwcmV2U3RhdGUpe1xuICAgICAgaWYocHJldlN0YXRlLnNlYXJjaCAhPT0gdGhpcy5zdGF0ZS5zZWFyY2gpIHtcbiAgICAgICAgXG4gICAgICB9XG5cbiAgICB9XG4gICAgY29tcG9uZW50RGlkTW91bnQoKSB7XG5cbiAgICAgICAgZmV0Y2godXJsKVxuICAgICAgICAudGhlbihyZXNwb25zZSA9PiByZXNwb25zZS5qc29uKCkpXG4gICAgICAgIC50aGVuKHJlc3BvbnNlID0+IHtcbiAgICAgICAgICAgIHRoaXMuc2V0U3RhdGUoe1xuICAgICAgICAgICAgICAgIGV2ZW50czogcmVzcG9uc2UsXG4gICAgICAgICAgICB9KVxuICAgICAgICAgICBcbiAgICAgICAgICAgIFxuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICByZW5kZXIoKSB7XG5cbiAgICAgICAgbGV0IHNlYXJjaEl0ZW0gPSB0aGlzLnN0YXRlLmV2ZW50cy5maWx0ZXIoKGRhdGEpPT57XG4gICAgICAgICAgICBpZih0aGlzLnN0YXRlLnNlYXJjaCA9PSBudWxsKVxuICAgICAgICAgICAgICAgIHJldHVybiBkYXRhXG4gICAgICAgICAgICBlbHNlIGlmKGRhdGEudGl0bGUudG9Mb3dlckNhc2UoKS5pbmNsdWRlcyh0aGlzLnN0YXRlLnNlYXJjaC50b0xvd2VyQ2FzZSgpKSl7XG4gICAgICAgICAgICAgICAgcmV0dXJuIGRhdGFcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgIH0pLm1hcChldmVudCA9PiAoXG5cbiAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiYmxvZ19hcnRpY2xlXCI+XG4gICAgICAgICAgICAgICAgIDxpbWcgc3JjPVwiaHR0cHM6Ly9pbWFnZS5mcmVlcGlrLmNvbS92ZWN0ZXVycy1saWJyZS9qb3VybmVlLWludGVybmF0aW9uYWxlLXBlcnNvbm5lcy1oYW5kaWNhcGVlcy1hdS1kZXNpZ24tcGxhdF8yMy0yMTQ4NzIzMjI2LmpwZ1wiIGFsdD1cIlwiIC8+XG4gICAgICAgICAgICAgICAgPGg0PntldmVudC50aXRsZX08L2g0PlxuICAgICAgICAgICAgICAgIDxwPntldmVudC5ib2R5fSA8L3A+XG4gICAgICAgICAgICA8L2Rpdj5cblxuICAgICAgICApKVxuXG4gICAgICAgIHJldHVybiAoXG4gICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJibG9nX2JhclwiPlxuICAgICAgICAgICAgICAgIDxoMT5Ub3VzIG5vcyBhcnRpY2xlczwvaDE+XG4gICAgICAgICAgICAgICAgICA8aW5wdXQgdHlwZT0ndGV4dCdvbkNoYW5nZT17dGhpcy51cGRhdGVTZWFyY2h9IHZhbHVlPXt0aGlzLnN0YXRlLnNlYXJjaH0gcGxhY2Vob2xkZXI9XCJSZWNoZXJjaGVyXCIvPlxuICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiclwiPlxuICAgICAgICAgICAgICAgIDxzZWN0aW9uIGNsYXNzTmFtZT1cImRpc3BsYXlcIj5cbiAgICAgICAgICAgICAgICB7c2VhcmNoSXRlbX1cbiAgICAgICAgICAgICAgICA8L3NlY3Rpb24+XG4gICAgICAgICAgICAgICAgPC9kaXY+ICBcbiAgICAgICAgICAgIDwvPlxuICAgICAgICApO1xuICAgIH1cblxuICAgIHVwZGF0ZVNlYXJjaCA9IChlKSA9PiB7XG4gICAgICBjb25zdCBrZXlXb3JkID0gZS50YXJnZXQudmFsdWVcbiAgICAgIHRoaXMuc2V0U3RhdGUoe1xuICAgICAgICBzZWFyY2g6IGtleVdvcmQsXG4gICAgICB9KVxuICAgIH1cbiAgIFxufVxuXG5leHBvcnQgZGVmYXVsdCBCbG9nO1xuXG4iLCJpbXBvcnQgUmVhY3QgZnJvbSAncmVhY3QnO1xuXG5jbGFzcyBTZWFyY2ggZXh0ZW5kcyBSZWFjdC5Db21wb25lbnQge1xuICAgIGNvbnN0cnVjdG9yKCkge1xuICAgICAgICBzdXBlcigpO1xuICAgICAgICB0aGlzLnN0YXRlID0ge1xuICAgICAgICAgIGpvYnM6IFtdLFxuICAgICAgICAgIHNlYXJjaDogJycsXG4gICAgICAgIH1cbiAgICAgIH1cblxuICAgIGNvbXBvbmVudERpZFVwZGF0ZShwcmV2UHJvcHMsIHByZXZTdGF0ZSkge1xuICAgICAgICBpZiAocHJldlN0YXRlLnNlYXJjaCAhPT0gdGhpcy5zdGF0ZS5zZWFyY2gpIHtcbiAgICAgICAgICB0aGlzLmZldGNoSm9icygpO1xuICAgICAgICB9XG4gICAgICB9XG5cbiAgICByZW5kZXIoKSB7XG4gICAgICBcbiAgICAgICAgcmV0dXJuIChcbiAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lID1cImNvbnRhaW5lcl9zZWFyY2hfYmFyXCI+XG4gICAgICAgICAgICAgIDxsYWJlbCBodG1sRm9yPVwiXCI+XG4gICAgICAgICAgICAgICAgPGlucHV0IHR5cGU9XCJ0ZXh0XCIgb25DaGFuZ2U9e3RoaXMudXBkYXRlU2VhcmNofSBwbGFjZWhvbGRlcj1cIlJlY2hlcmNoZXouLi5cIiB2YWx1ZT17dGhpcy5zdGF0ZS5zZWFyY2h9Lz5cbiAgICAgICAgICAgICAgICA8L2xhYmVsPlxuXG5cbiAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJqb2JzXCI+IFxuICAgICAgICAgICAgICB7dGhpcy5zdGF0ZS5qb2JzLm1hcChmdW5jdGlvbihqb2IpIHtcbiAgICAgICAgICAgICAgICByZXR1cm4gKFxuICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjYXJkXCI+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY2FyZC1ib2R5XCI+XG4gICAgICAgICAgICAgICAgICAgICAgPGg1ICBjbGFzc05hbWU9XCJjYXJkLXRpdGxlXCI+e2pvYi5uYW1lfTwvaDU+XG4gICAgICAgICAgICAgICAgICAgICAgPHAgY2xhc3NOYW1lPVwiY2FyZC10ZXh0XCI+e2pvYi5kZXNjcmlwdGlvbn08L3A+XG4gICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj17Jy9zaG93Sm9iLycgKyBqb2IuaWR9PlxuICAgICAgICAgICAgICAgICAgICAgIDxpbWcgc3JjPVwiaHR0cHM6Ly9pbWcuaWNvbnM4LmNvbS9hbmRyb2lkLzI0LzAwMDAwMC9sb25nLWFycm93LXJpZ2h0LnBuZ1wiLz48L2E+XG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgPC9kaXY+ICAgICAgICAgICAgICAgICAgXG4gICAgICAgICAgICAgICAgKVxuICAgICAgICAgICAgICB9KX1cbiAgICAgICAgICAgICAgXG4gICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICB7LyogPGJ1dHRvbiBvbkNsaWNrPXt0aGlzLmZldGNoSm9ic30+U2VhcmNoIDwvYnV0dG9uPiAqL31cbiAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgIClcbiAgICAgICAgfVxuXG4gICAgICAgIC8qKlxuICAgICAgICAgKiBDZXR0ZSBmb25jdGlvbiBtZXQgw6Agam91ciBsZSBzdGF0ZSBzZWFyY2ggYXZlYyBsYSB2YWxldXIgcmXDp3VlIGVuIHBhcmFtw6h0cmVzXG4gICAgICAgICAqIEBwYXJhbSBldmVudFxuICAgICAgICAgKi9cbiAgICAgICAgdXBkYXRlU2VhcmNoID0gKGV2ZW50KSA9PiB7XG4gICAgICAgICAgICB0aGlzLnNldFN0YXRlKHtcbiAgICAgICAgICAgIHNlYXJjaDogZXZlbnQudGFyZ2V0LnZhbHVlLFxuICAgICAgICAgICAgfSlcbiAgICAgICAgfVxuXG4gICAgICAgIGZldGNoSm9icyA9ICgpID0+IHtcbiAgICAgICAgICAgIC8vIHVybCDDoCBtb2RpZmllclxuICAgICAgICAgICAgZmV0Y2goJ2h0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hcGkvam9iJyxcbiAgICAgICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgaGVhZGVyczogeyAvLyBHYXJkZXIgdG91am91cnMgbGVzIG3Dqm1lcyBoZWFkZXJzXG4gICAgICAgICAgICAgICAgICAgICdBY2NlcHQnOiAnYXBwbGljYXRpb24vanNvbicsXG4gICAgICAgICAgICAgICAgICAgICdDb250ZW50LVR5cGUnOiAnYXBwbGljYXRpb24vanNvbidcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIG1ldGhvZDogXCJQT1NUXCIsIC8vIFBPU1QsIFBVVCwgb3UgREVMRVRFIGVuIGZvbmN0aW9uIGRlcyBiZXNvaW5zXG4gICAgICAgICAgICAgICAgYm9keTogSlNPTi5zdHJpbmdpZnkoe1xuICAgICAgICAgICAgICAgICAgICAvLyB2YXJpYWJsZSBxdWkgdmEgZXRyZSBlbnZvecOpIGF1IGJhY2sgKCdzZWFyY2gnKVxuICAgICAgICAgICAgICAgICAgICBzZWFyY2g6IHRoaXMuc3RhdGUuc2VhcmNoLFxuICAgICAgICAgICAgICAgIH0pXG4gICAgICAgICAgICAgICAgfSkudGhlbihyZXNwb25zZSA9PiByZXNwb25zZS5qc29uKCkpLnRoZW4ocmVzcG9uc2UgPT4ge1xuICAgICAgICAgICAgICAgIC8vdGFrZSBiYWNrIGRhdGEgYXMgYW4gb2JqZWN0XG4gICAgICAgICAgICAgICAgbGV0IHVwZGF0ZWRKb2JzTGlzdCA9IHJlc3BvbnNlLmRhdGE7XG4gICAgICAgICAgICAgICAgXG4gICAgICAgICAgICAgICAgLy90YWtlIGJhY2sgZGF0YSBhcyBhbiBhcnJheSBjb250YWlucyBhcnJheXMgaW5zaWRlIFtbXSxbXSxbXV0gd2l0aCBvYmplY3QuZW50cmllc1xuICAgICAgICAgICAgICAgIGlmICghQXJyYXkuaXNBcnJheShyZXNwb25zZS5kYXRhKSkge1xuICAgICAgICAgICAgICAgICAgICB1cGRhdGVkSm9ic0xpc3QgPSBPYmplY3QuZW50cmllcyhyZXNwb25zZS5kYXRhKS5tYXAoKGpvYkluUmVzdWx0KSA9PiB7XG4gICAgICAgICAgICAgICAgICAgIC8vIE9uIHLDqWN1cMOocmUgbGEgdmFsZXVyIGRlIG1pZWxJblJlc3VsdHNcbiAgICAgICAgICAgICAgICAgICAgXG4gICAgICAgICAgICAgICAgICAgIHJldHVybiBqb2JJblJlc3VsdFsxXTtcbiAgICAgICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgdGhpcy5zZXRTdGF0ZSh7XG4gICAgICAgICAgICAgICAgICAgIGpvYnM6IHVwZGF0ZWRKb2JzTGlzdCxcbiAgICAgICAgICAgICAgICB9KVxuICAgICAgICAgICAgfSlcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuXG5cblxuXG5cbmV4cG9ydCBkZWZhdWx0IFNlYXJjaDsiLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiXSwic291cmNlUm9vdCI6IiJ9
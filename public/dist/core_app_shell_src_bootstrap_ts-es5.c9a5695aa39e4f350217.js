(function () {
  "use strict";

  function _get(target, property, receiver) { if (typeof Reflect !== "undefined" && Reflect.get) { _get = Reflect.get; } else { _get = function _get(target, property, receiver) { var base = _superPropBase(target, property); if (!base) return; var desc = Object.getOwnPropertyDescriptor(base, property); if (desc.get) { return desc.get.call(receiver); } return desc.value; }; } return _get(target, property, receiver || target); }

  function _superPropBase(object, property) { while (!Object.prototype.hasOwnProperty.call(object, property)) { object = _getPrototypeOf(object); if (object === null) break; } return object; }

  function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray2(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e2) { throw _e2; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e3) { didErr = true; err = _e3; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

  function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

  function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

  function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

  function _possibleConstructorReturn(self, call) { if (call && (typeof call === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }

  function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

  function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

  function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

  function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray2(arr) || _nonIterableSpread(); }

  function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

  function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

  function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray2(arr); }

  function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray2(arr, i) || _nonIterableRest(); }

  function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

  function _unsupportedIterableToArray2(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray2(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray2(o, minLen); }

  function _arrayLikeToArray2(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

  function _iterableToArrayLimit(arr, i) { var _i = arr == null ? null : typeof Symbol !== "undefined" && arr[Symbol.iterator] || arr["@@iterator"]; if (_i == null) return; var _arr = []; var _n = true; var _d = false; var _s, _e; try { for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"] != null) _i["return"](); } finally { if (_d) throw _e; } } return _arr; }

  function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass2(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

  (self["webpackChunkshell"] = self["webpackChunkshell"] || []).push([["core_app_shell_src_bootstrap_ts"], {
    /***/
    75545: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "__extends": function __extends() {
          return (
            /* binding */
            _extends
          );
        },

        /* harmony export */
        "__assign": function __assign() {
          return (
            /* binding */
            _assign2
          );
        },

        /* harmony export */
        "__rest": function __rest() {
          return (
            /* binding */
            _rest
          );
        },

        /* harmony export */
        "__decorate": function __decorate() {
          return (
            /* binding */
            _decorate
          );
        },

        /* harmony export */
        "__param": function __param() {
          return (
            /* binding */
            _param
          );
        },

        /* harmony export */
        "__metadata": function __metadata() {
          return (
            /* binding */
            _metadata
          );
        },

        /* harmony export */
        "__awaiter": function __awaiter() {
          return (
            /* binding */
            _awaiter
          );
        },

        /* harmony export */
        "__generator": function __generator() {
          return (
            /* binding */
            _generator
          );
        },

        /* harmony export */
        "__createBinding": function __createBinding() {
          return (
            /* binding */
            _createBinding
          );
        },

        /* harmony export */
        "__exportStar": function __exportStar() {
          return (
            /* binding */
            _exportStar
          );
        },

        /* harmony export */
        "__values": function __values() {
          return (
            /* binding */
            _values
          );
        },

        /* harmony export */
        "__read": function __read() {
          return (
            /* binding */
            _read
          );
        },

        /* harmony export */
        "__spread": function __spread() {
          return (
            /* binding */
            _spread
          );
        },

        /* harmony export */
        "__spreadArrays": function __spreadArrays() {
          return (
            /* binding */
            _spreadArrays
          );
        },

        /* harmony export */
        "__spreadArray": function __spreadArray() {
          return (
            /* binding */
            _spreadArray
          );
        },

        /* harmony export */
        "__await": function __await() {
          return (
            /* binding */
            _await
          );
        },

        /* harmony export */
        "__asyncGenerator": function __asyncGenerator() {
          return (
            /* binding */
            _asyncGenerator
          );
        },

        /* harmony export */
        "__asyncDelegator": function __asyncDelegator() {
          return (
            /* binding */
            _asyncDelegator
          );
        },

        /* harmony export */
        "__asyncValues": function __asyncValues() {
          return (
            /* binding */
            _asyncValues
          );
        },

        /* harmony export */
        "__makeTemplateObject": function __makeTemplateObject() {
          return (
            /* binding */
            _makeTemplateObject
          );
        },

        /* harmony export */
        "__importStar": function __importStar() {
          return (
            /* binding */
            _importStar
          );
        },

        /* harmony export */
        "__importDefault": function __importDefault() {
          return (
            /* binding */
            _importDefault
          );
        },

        /* harmony export */
        "__classPrivateFieldGet": function __classPrivateFieldGet() {
          return (
            /* binding */
            _classPrivateFieldGet
          );
        },

        /* harmony export */
        "__classPrivateFieldSet": function __classPrivateFieldSet() {
          return (
            /* binding */
            _classPrivateFieldSet
          );
        }
        /* harmony export */

      });
      /*! *****************************************************************************
      Copyright (c) Microsoft Corporation.
      
      Permission to use, copy, modify, and/or distribute this software for any
      purpose with or without fee is hereby granted.
      
      THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES WITH
      REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY
      AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY SPECIAL, DIRECT,
      INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM
      LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR
      OTHER TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR
      PERFORMANCE OF THIS SOFTWARE.
      ***************************************************************************** */

      /* global Reflect, Promise */


      var _extendStatics = function extendStatics(d, b) {
        _extendStatics = Object.setPrototypeOf || {
          __proto__: []
        } instanceof Array && function (d, b) {
          d.__proto__ = b;
        } || function (d, b) {
          for (var p in b) {
            if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p];
          }
        };

        return _extendStatics(d, b);
      };

      function _extends(d, b) {
        if (typeof b !== "function" && b !== null) throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");

        _extendStatics(d, b);

        function __() {
          this.constructor = d;
        }

        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
      }

      var _assign2 = function _assign() {
        _assign2 = Object.assign || function __assign(t) {
          for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];

            for (var p in s) {
              if (Object.prototype.hasOwnProperty.call(s, p)) t[p] = s[p];
            }
          }

          return t;
        };

        return _assign2.apply(this, arguments);
      };

      function _rest(s, e) {
        var t = {};

        for (var p in s) {
          if (Object.prototype.hasOwnProperty.call(s, p) && e.indexOf(p) < 0) t[p] = s[p];
        }

        if (s != null && typeof Object.getOwnPropertySymbols === "function") for (var i = 0, p = Object.getOwnPropertySymbols(s); i < p.length; i++) {
          if (e.indexOf(p[i]) < 0 && Object.prototype.propertyIsEnumerable.call(s, p[i])) t[p[i]] = s[p[i]];
        }
        return t;
      }

      function _decorate(decorators, target, key, desc) {
        var c = arguments.length,
            r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc,
            d;
        if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);else for (var i = decorators.length - 1; i >= 0; i--) {
          if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
        }
        return c > 3 && r && Object.defineProperty(target, key, r), r;
      }

      function _param(paramIndex, decorator) {
        return function (target, key) {
          decorator(target, key, paramIndex);
        };
      }

      function _metadata(metadataKey, metadataValue) {
        if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(metadataKey, metadataValue);
      }

      function _awaiter(thisArg, _arguments, P, generator) {
        function adopt(value) {
          return value instanceof P ? value : new P(function (resolve) {
            resolve(value);
          });
        }

        return new (P || (P = Promise))(function (resolve, reject) {
          function fulfilled(value) {
            try {
              step(generator.next(value));
            } catch (e) {
              reject(e);
            }
          }

          function rejected(value) {
            try {
              step(generator["throw"](value));
            } catch (e) {
              reject(e);
            }
          }

          function step(result) {
            result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected);
          }

          step((generator = generator.apply(thisArg, _arguments || [])).next());
        });
      }

      function _generator(thisArg, body) {
        var _ = {
          label: 0,
          sent: function sent() {
            if (t[0] & 1) throw t[1];
            return t[1];
          },
          trys: [],
          ops: []
        },
            f,
            y,
            t,
            g;
        return g = {
          next: verb(0),
          "throw": verb(1),
          "return": verb(2)
        }, typeof Symbol === "function" && (g[Symbol.iterator] = function () {
          return this;
        }), g;

        function verb(n) {
          return function (v) {
            return step([n, v]);
          };
        }

        function step(op) {
          if (f) throw new TypeError("Generator is already executing.");

          while (_) {
            try {
              if (f = 1, y && (t = op[0] & 2 ? y["return"] : op[0] ? y["throw"] || ((t = y["return"]) && t.call(y), 0) : y.next) && !(t = t.call(y, op[1])).done) return t;
              if (y = 0, t) op = [op[0] & 2, t.value];

              switch (op[0]) {
                case 0:
                case 1:
                  t = op;
                  break;

                case 4:
                  _.label++;
                  return {
                    value: op[1],
                    done: false
                  };

                case 5:
                  _.label++;
                  y = op[1];
                  op = [0];
                  continue;

                case 7:
                  op = _.ops.pop();

                  _.trys.pop();

                  continue;

                default:
                  if (!(t = _.trys, t = t.length > 0 && t[t.length - 1]) && (op[0] === 6 || op[0] === 2)) {
                    _ = 0;
                    continue;
                  }

                  if (op[0] === 3 && (!t || op[1] > t[0] && op[1] < t[3])) {
                    _.label = op[1];
                    break;
                  }

                  if (op[0] === 6 && _.label < t[1]) {
                    _.label = t[1];
                    t = op;
                    break;
                  }

                  if (t && _.label < t[2]) {
                    _.label = t[2];

                    _.ops.push(op);

                    break;
                  }

                  if (t[2]) _.ops.pop();

                  _.trys.pop();

                  continue;
              }

              op = body.call(thisArg, _);
            } catch (e) {
              op = [6, e];
              y = 0;
            } finally {
              f = t = 0;
            }
          }

          if (op[0] & 5) throw op[1];
          return {
            value: op[0] ? op[1] : void 0,
            done: true
          };
        }
      }

      var _createBinding = Object.create ? function (o, m, k, k2) {
        if (k2 === undefined) k2 = k;
        Object.defineProperty(o, k2, {
          enumerable: true,
          get: function get() {
            return m[k];
          }
        });
      } : function (o, m, k, k2) {
        if (k2 === undefined) k2 = k;
        o[k2] = m[k];
      };

      function _exportStar(m, o) {
        for (var p in m) {
          if (p !== "default" && !Object.prototype.hasOwnProperty.call(o, p)) _createBinding(o, m, p);
        }
      }

      function _values(o) {
        var s = typeof Symbol === "function" && Symbol.iterator,
            m = s && o[s],
            i = 0;
        if (m) return m.call(o);
        if (o && typeof o.length === "number") return {
          next: function next() {
            if (o && i >= o.length) o = void 0;
            return {
              value: o && o[i++],
              done: !o
            };
          }
        };
        throw new TypeError(s ? "Object is not iterable." : "Symbol.iterator is not defined.");
      }

      function _read(o, n) {
        var m = typeof Symbol === "function" && o[Symbol.iterator];
        if (!m) return o;
        var i = m.call(o),
            r,
            ar = [],
            e;

        try {
          while ((n === void 0 || n-- > 0) && !(r = i.next()).done) {
            ar.push(r.value);
          }
        } catch (error) {
          e = {
            error: error
          };
        } finally {
          try {
            if (r && !r.done && (m = i["return"])) m.call(i);
          } finally {
            if (e) throw e.error;
          }
        }

        return ar;
      }
      /** @deprecated */


      function _spread() {
        for (var ar = [], i = 0; i < arguments.length; i++) {
          ar = ar.concat(_read(arguments[i]));
        }

        return ar;
      }
      /** @deprecated */


      function _spreadArrays() {
        for (var s = 0, i = 0, il = arguments.length; i < il; i++) {
          s += arguments[i].length;
        }

        for (var r = Array(s), k = 0, i = 0; i < il; i++) {
          for (var a = arguments[i], j = 0, jl = a.length; j < jl; j++, k++) {
            r[k] = a[j];
          }
        }

        return r;
      }

      function _spreadArray(to, from, pack) {
        if (pack || arguments.length === 2) for (var i = 0, l = from.length, ar; i < l; i++) {
          if (ar || !(i in from)) {
            if (!ar) ar = Array.prototype.slice.call(from, 0, i);
            ar[i] = from[i];
          }
        }
        return to.concat(ar || Array.prototype.slice.call(from));
      }

      function _await(v) {
        return this instanceof _await ? (this.v = v, this) : new _await(v);
      }

      function _asyncGenerator(thisArg, _arguments, generator) {
        if (!Symbol.asyncIterator) throw new TypeError("Symbol.asyncIterator is not defined.");
        var g = generator.apply(thisArg, _arguments || []),
            i,
            q = [];
        return i = {}, verb("next"), verb("throw"), verb("return"), i[Symbol.asyncIterator] = function () {
          return this;
        }, i;

        function verb(n) {
          if (g[n]) i[n] = function (v) {
            return new Promise(function (a, b) {
              q.push([n, v, a, b]) > 1 || resume(n, v);
            });
          };
        }

        function resume(n, v) {
          try {
            step(g[n](v));
          } catch (e) {
            settle(q[0][3], e);
          }
        }

        function step(r) {
          r.value instanceof _await ? Promise.resolve(r.value.v).then(fulfill, reject) : settle(q[0][2], r);
        }

        function fulfill(value) {
          resume("next", value);
        }

        function reject(value) {
          resume("throw", value);
        }

        function settle(f, v) {
          if (f(v), q.shift(), q.length) resume(q[0][0], q[0][1]);
        }
      }

      function _asyncDelegator(o) {
        var i, p;
        return i = {}, verb("next"), verb("throw", function (e) {
          throw e;
        }), verb("return"), i[Symbol.iterator] = function () {
          return this;
        }, i;

        function verb(n, f) {
          i[n] = o[n] ? function (v) {
            return (p = !p) ? {
              value: _await(o[n](v)),
              done: n === "return"
            } : f ? f(v) : v;
          } : f;
        }
      }

      function _asyncValues(o) {
        if (!Symbol.asyncIterator) throw new TypeError("Symbol.asyncIterator is not defined.");
        var m = o[Symbol.asyncIterator],
            i;
        return m ? m.call(o) : (o = typeof _values === "function" ? _values(o) : o[Symbol.iterator](), i = {}, verb("next"), verb("throw"), verb("return"), i[Symbol.asyncIterator] = function () {
          return this;
        }, i);

        function verb(n) {
          i[n] = o[n] && function (v) {
            return new Promise(function (resolve, reject) {
              v = o[n](v), settle(resolve, reject, v.done, v.value);
            });
          };
        }

        function settle(resolve, reject, d, v) {
          Promise.resolve(v).then(function (v) {
            resolve({
              value: v,
              done: d
            });
          }, reject);
        }
      }

      function _makeTemplateObject(cooked, raw) {
        if (Object.defineProperty) {
          Object.defineProperty(cooked, "raw", {
            value: raw
          });
        } else {
          cooked.raw = raw;
        }

        return cooked;
      }

      ;

      var __setModuleDefault = Object.create ? function (o, v) {
        Object.defineProperty(o, "default", {
          enumerable: true,
          value: v
        });
      } : function (o, v) {
        o["default"] = v;
      };

      function _importStar(mod) {
        if (mod && mod.__esModule) return mod;
        var result = {};
        if (mod != null) for (var k in mod) {
          if (k !== "default" && Object.prototype.hasOwnProperty.call(mod, k)) _createBinding(result, mod, k);
        }

        __setModuleDefault(result, mod);

        return result;
      }

      function _importDefault(mod) {
        return mod && mod.__esModule ? mod : {
          "default": mod
        };
      }

      function _classPrivateFieldGet(receiver, state, kind, f) {
        if (kind === "a" && !f) throw new TypeError("Private accessor was defined without a getter");
        if (typeof state === "function" ? receiver !== state || !f : !state.has(receiver)) throw new TypeError("Cannot read private member from an object whose class did not declare it");
        return kind === "m" ? f : kind === "a" ? f.call(receiver) : f ? f.value : state.get(receiver);
      }

      function _classPrivateFieldSet(receiver, state, value, kind, f) {
        if (kind === "m") throw new TypeError("Private method is not writable");
        if (kind === "a" && !f) throw new TypeError("Private accessor was defined without a setter");
        if (typeof state === "function" ? receiver !== state || !f : !state.has(receiver)) throw new TypeError("Cannot write private member to an object whose class did not declare it");
        return kind === "a" ? f.call(receiver, value) : f ? f.value = value : state.set(receiver, value), value;
      }
      /***/

    },

    /***/
    8533: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "AppInit": function AppInit() {
          return (
            /* binding */
            _AppInit
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! @angular/core */
      14468);
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_angular_core__WEBPACK_IMPORTED_MODULE_0__);
      /* harmony import */


      var _angular_router__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! @angular/router */
      78510);
      /* harmony import */


      var _angular_router__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_angular_router__WEBPACK_IMPORTED_MODULE_1__);
      /* harmony import */


      var core__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! core */
      9764);
      /* harmony import */


      var core__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core__WEBPACK_IMPORTED_MODULE_2__);
      /* harmony import */


      var rxjs_operators__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! rxjs/operators */
      92343);
      /* harmony import */


      var rxjs_operators__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(rxjs_operators__WEBPACK_IMPORTED_MODULE_3__);
      /* harmony import */


      var common__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
      /*! common */
      80273);
      /* harmony import */


      var common__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(common__WEBPACK_IMPORTED_MODULE_4__);
      /**
       * SuiteCRM is a customer relationship management program developed by SalesAgility Ltd.
       * Copyright (C) 2021 SalesAgility Ltd.
       *
       * This program is free software; you can redistribute it and/or modify it under
       * the terms of the GNU Affero General Public License version 3 as published by the
       * Free Software Foundation with the addition of the following permission added
       * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
       * IN WHICH THE COPYRIGHT IS OWNED BY SALESAGILITY, SALESAGILITY DISCLAIMS THE
       * WARRANTY OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
       *
       * This program is distributed in the hope that it will be useful, but WITHOUT
       * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
       * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
       * details.
       *
       * You should have received a copy of the GNU Affero General Public License
       * along with this program.  If not, see <http://www.gnu.org/licenses/>.
       *
       * In accordance with Section 7(b) of the GNU Affero General Public License
       * version 3, these Appropriate Legal Notices must retain the display of the
       * "Supercharged by SuiteCRM" logo. If the display of the logos is not reasonably
       * feasible for technical reasons, the Appropriate Legal Notices must display
       * the words "Supercharged by SuiteCRM".
       */


      var _AppInit = /*#__PURE__*/function () {
        var AppInit = /*#__PURE__*/function () {
          function AppInit(router, systemConfigStore, appStore, injector, extensionLoader) {
            _classCallCheck(this, AppInit);

            this.router = router;
            this.systemConfigStore = systemConfigStore;
            this.appStore = appStore;
            this.injector = injector;
            this.extensionLoader = extensionLoader;
          }

          _createClass2(AppInit, [{
            key: "init",
            value: function init() {
              var _this7 = this;

              // eslint-disable-next-line compat/compat
              return new Promise(function (resolve) {
                _this7.systemConfigStore.load().subscribe(function () {
                  _this7.appStore.init();

                  _this7.extensionLoader.load(_this7.injector).pipe((0, rxjs_operators__WEBPACK_IMPORTED_MODULE_3__.take)(1)).subscribe(function () {
                    var routes = _this7.router.config;

                    var configRoutes = _this7.systemConfigStore.getConfigValue('module_routing');

                    routes.push({
                      path: 'Login',
                      component: core__WEBPACK_IMPORTED_MODULE_2__.LoginUiComponent,
                      canActivate: [core__WEBPACK_IMPORTED_MODULE_2__.LoginAuthGuard],
                      runGuardsAndResolvers: 'always',
                      resolve: {
                        metadata: core__WEBPACK_IMPORTED_MODULE_2__.BaseMetadataResolver
                      },
                      data: {
                        reuseRoute: false,
                        load: {
                          navigation: false,
                          preferences: false,
                          languageStrings: ['appStrings']
                        }
                      }
                    });
                    routes.push({
                      path: 'install',
                      component: core__WEBPACK_IMPORTED_MODULE_2__.InstallViewComponent,
                      canActivate: [core__WEBPACK_IMPORTED_MODULE_2__.InstallAuthGuard],
                      runGuardsAndResolvers: 'always',
                      resolve: {
                        metadata: core__WEBPACK_IMPORTED_MODULE_2__.BaseMetadataResolver
                      },
                      data: {
                        reuseRoute: false,
                        checkSession: false,
                        load: {
                          navigation: false,
                          preferences: false,
                          languageStrings: ['appStrings']
                        }
                      }
                    });
                    Object.keys(configRoutes).forEach(function (routeName) {
                      if (configRoutes[routeName].index) {
                        routes.push({
                          path: routeName,
                          component: core__WEBPACK_IMPORTED_MODULE_2__.ListComponent,
                          canActivate: [core__WEBPACK_IMPORTED_MODULE_2__.AuthGuard],
                          runGuardsAndResolvers: 'always',
                          resolve: {
                            metadata: core__WEBPACK_IMPORTED_MODULE_2__.BaseModuleResolver
                          },
                          data: {
                            reuseRoute: false,
                            checkSession: true,
                            module: routeName
                          }
                        });
                        routes.push({
                          path: routeName + '/index',
                          component: core__WEBPACK_IMPORTED_MODULE_2__.ListComponent,
                          canActivate: [core__WEBPACK_IMPORTED_MODULE_2__.AuthGuard],
                          runGuardsAndResolvers: 'always',
                          resolve: {
                            metadata: core__WEBPACK_IMPORTED_MODULE_2__.BaseModuleResolver
                          },
                          data: {
                            reuseRoute: false,
                            checkSession: true,
                            module: routeName
                          }
                        });
                      }

                      if (configRoutes[routeName].list) {
                        routes.push({
                          path: routeName + '/list',
                          component: core__WEBPACK_IMPORTED_MODULE_2__.ListComponent,
                          canActivate: [core__WEBPACK_IMPORTED_MODULE_2__.AuthGuard],
                          runGuardsAndResolvers: 'always',
                          resolve: {
                            metadata: core__WEBPACK_IMPORTED_MODULE_2__.BaseModuleResolver
                          },
                          data: {
                            reuseRoute: false,
                            checkSession: true,
                            module: routeName
                          }
                        });
                      }

                      if (!(0, common__WEBPACK_IMPORTED_MODULE_4__.isFalse)(configRoutes[routeName].create) && !(0, common__WEBPACK_IMPORTED_MODULE_4__.isFalse)(configRoutes[routeName].record)) {
                        routes.push({
                          path: routeName + '/create',
                          component: core__WEBPACK_IMPORTED_MODULE_2__.CreateRecordComponent,
                          canActivate: [core__WEBPACK_IMPORTED_MODULE_2__.AuthGuard],
                          runGuardsAndResolvers: 'always',
                          resolve: {
                            view: core__WEBPACK_IMPORTED_MODULE_2__.BaseModuleResolver,
                            metadata: core__WEBPACK_IMPORTED_MODULE_2__.BaseRecordResolver
                          },
                          data: {
                            reuseRoute: false,
                            checkSession: true,
                            module: routeName,
                            mode: 'create'
                          }
                        });
                        routes.push({
                          path: routeName + '/edit',
                          component: core__WEBPACK_IMPORTED_MODULE_2__.CreateRecordComponent,
                          canActivate: [core__WEBPACK_IMPORTED_MODULE_2__.AuthGuard],
                          runGuardsAndResolvers: 'always',
                          resolve: {
                            view: core__WEBPACK_IMPORTED_MODULE_2__.BaseModuleResolver,
                            metadata: core__WEBPACK_IMPORTED_MODULE_2__.BaseRecordResolver
                          },
                          data: {
                            reuseRoute: false,
                            checkSession: true,
                            module: routeName,
                            mode: 'create'
                          }
                        });
                      }

                      if (configRoutes[routeName].record) {
                        routes.push({
                          path: routeName + '/record/:record',
                          component: core__WEBPACK_IMPORTED_MODULE_2__.RecordComponent,
                          canActivate: [core__WEBPACK_IMPORTED_MODULE_2__.AuthGuard],
                          runGuardsAndResolvers: 'always',
                          resolve: {
                            view: core__WEBPACK_IMPORTED_MODULE_2__.BaseModuleResolver,
                            metadata: core__WEBPACK_IMPORTED_MODULE_2__.BaseRecordResolver
                          },
                          data: {
                            reuseRoute: false,
                            checkSession: true,
                            module: routeName
                          }
                        });
                        routes.push({
                          path: routeName + '/edit/:record',
                          component: core__WEBPACK_IMPORTED_MODULE_2__.RecordComponent,
                          canActivate: [core__WEBPACK_IMPORTED_MODULE_2__.AuthGuard],
                          runGuardsAndResolvers: 'always',
                          resolve: {
                            view: core__WEBPACK_IMPORTED_MODULE_2__.BaseModuleResolver,
                            metadata: core__WEBPACK_IMPORTED_MODULE_2__.BaseRecordResolver
                          },
                          data: {
                            reuseRoute: false,
                            checkSession: true,
                            module: routeName,
                            mode: 'edit'
                          }
                        });
                        routes.push({
                          path: routeName + '/detail/:record',
                          component: core__WEBPACK_IMPORTED_MODULE_2__.RecordComponent,
                          canActivate: [core__WEBPACK_IMPORTED_MODULE_2__.AuthGuard],
                          runGuardsAndResolvers: 'always',
                          resolve: {
                            view: core__WEBPACK_IMPORTED_MODULE_2__.BaseModuleResolver,
                            metadata: core__WEBPACK_IMPORTED_MODULE_2__.BaseRecordResolver
                          },
                          data: {
                            reuseRoute: false,
                            checkSession: true,
                            module: routeName
                          }
                        });
                      }
                    });
                    routes.push({
                      path: ':module',
                      component: core__WEBPACK_IMPORTED_MODULE_2__.ClassicViewUiComponent,
                      canActivate: [core__WEBPACK_IMPORTED_MODULE_2__.AuthGuard],
                      runGuardsAndResolvers: 'always',
                      resolve: {
                        legacyUrl: core__WEBPACK_IMPORTED_MODULE_2__.ClassicViewResolver
                      },
                      data: {
                        reuseRoute: false,
                        checkSession: true
                      }
                    });
                    routes.push({
                      path: ':module/:action',
                      component: core__WEBPACK_IMPORTED_MODULE_2__.ClassicViewUiComponent,
                      canActivate: [core__WEBPACK_IMPORTED_MODULE_2__.AuthGuard],
                      runGuardsAndResolvers: 'always',
                      resolve: {
                        legacyUrl: core__WEBPACK_IMPORTED_MODULE_2__.ClassicViewResolver
                      },
                      data: {
                        reuseRoute: false,
                        checkSession: true
                      }
                    });
                    routes.push({
                      path: ':module/:action/:record',
                      component: core__WEBPACK_IMPORTED_MODULE_2__.ClassicViewUiComponent,
                      canActivate: [core__WEBPACK_IMPORTED_MODULE_2__.AuthGuard],
                      runGuardsAndResolvers: 'always',
                      resolve: {
                        legacyUrl: core__WEBPACK_IMPORTED_MODULE_2__.ClassicViewResolver
                      },
                      data: {
                        reuseRoute: false,
                        checkSession: true
                      }
                    });
                    routes.push({
                      path: '**',
                      redirectTo: 'Login'
                    });
                    routes.push({
                      path: '',
                      component: core__WEBPACK_IMPORTED_MODULE_2__.ClassicViewUiComponent
                    });

                    _this7.router.resetConfig(routes);

                    resolve();
                  });
                });
              });
            }
          }]);

          return AppInit;
        }();

        AppInit.ɵfac = function AppInit_Factory(t) {
          return new (t || AppInit)(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](_angular_router__WEBPACK_IMPORTED_MODULE_1__.Router), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](core__WEBPACK_IMPORTED_MODULE_2__.SystemConfigStore), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](core__WEBPACK_IMPORTED_MODULE_2__.AppStateStore), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](_angular_core__WEBPACK_IMPORTED_MODULE_0__.Injector), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](core__WEBPACK_IMPORTED_MODULE_2__.ExtensionLoader));
        };

        AppInit.ɵprov = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineInjectable"]({
          token: AppInit,
          factory: AppInit.ɵfac
        });
        return AppInit;
      }();
      /***/

    },

    /***/
    27236: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "AppRouteReuseStrategy": function AppRouteReuseStrategy() {
          return (
            /* binding */
            _AppRouteReuseStrategy
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var _angular_router__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! @angular/router */
      78510);
      /* harmony import */


      var _angular_router__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_angular_router__WEBPACK_IMPORTED_MODULE_0__);
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! @angular/core */
      14468);
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_angular_core__WEBPACK_IMPORTED_MODULE_1__);
      /**
       * SuiteCRM is a customer relationship management program developed by SalesAgility Ltd.
       * Copyright (C) 2021 SalesAgility Ltd.
       *
       * This program is free software; you can redistribute it and/or modify it under
       * the terms of the GNU Affero General Public License version 3 as published by the
       * Free Software Foundation with the addition of the following permission added
       * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
       * IN WHICH THE COPYRIGHT IS OWNED BY SALESAGILITY, SALESAGILITY DISCLAIMS THE
       * WARRANTY OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
       *
       * This program is distributed in the hope that it will be useful, but WITHOUT
       * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
       * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
       * details.
       *
       * You should have received a copy of the GNU Affero General Public License
       * along with this program.  If not, see <http://www.gnu.org/licenses/>.
       *
       * In accordance with Section 7(b) of the GNU Affero General Public License
       * version 3, these Appropriate Legal Notices must retain the display of the
       * "Supercharged by SuiteCRM" logo. If the display of the logos is not reasonably
       * feasible for technical reasons, the Appropriate Legal Notices must display
       * the words "Supercharged by SuiteCRM".
       */


      var _AppRouteReuseStrategy = /*#__PURE__*/function () {
        var AppRouteReuseStrategy = /*#__PURE__*/function () {
          function AppRouteReuseStrategy() {
            _classCallCheck(this, AppRouteReuseStrategy);
          }

          _createClass2(AppRouteReuseStrategy, [{
            key: "shouldDetach",
            value: function shouldDetach(route) {
              return false;
            }
          }, {
            key: "store",
            value: function store(route, detachedTree) {}
          }, {
            key: "shouldAttach",
            value: function shouldAttach(route) {
              return false;
            }
          }, {
            key: "retrieve",
            value: function retrieve(route) {
              return null;
            }
          }, {
            key: "shouldReuseRoute",
            value: function shouldReuseRoute(future, curr) {
              if (future.data && future.data.reuseRoute === false) {
                return false;
              }

              return future.routeConfig === curr.routeConfig;
            }
          }]);

          return AppRouteReuseStrategy;
        }();

        AppRouteReuseStrategy.ɵfac = function AppRouteReuseStrategy_Factory(t) {
          return new (t || AppRouteReuseStrategy)();
        };

        AppRouteReuseStrategy.ɵprov = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjectable"]({
          token: AppRouteReuseStrategy,
          factory: AppRouteReuseStrategy.ɵfac
        });
        return AppRouteReuseStrategy;
      }();
      /***/

    },

    /***/
    22307: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "AppRoutingModule": function AppRoutingModule() {
          return (
            /* binding */
            _AppRoutingModule
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var _angular_router__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! @angular/router */
      78510);
      /* harmony import */


      var _angular_router__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_angular_router__WEBPACK_IMPORTED_MODULE_0__);
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! @angular/core */
      14468);
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_angular_core__WEBPACK_IMPORTED_MODULE_1__);

      var routes = [];

      var _AppRoutingModule = /*#__PURE__*/function () {
        var AppRoutingModule = function AppRoutingModule() {
          _classCallCheck(this, AppRoutingModule);
        };

        AppRoutingModule.ɵfac = function AppRoutingModule_Factory(t) {
          return new (t || AppRoutingModule)();
        };

        AppRoutingModule.ɵmod = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineNgModule"]({
          type: AppRoutingModule
        });
        AppRoutingModule.ɵinj = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjector"]({
          imports: [[_angular_router__WEBPACK_IMPORTED_MODULE_0__.RouterModule.forRoot(routes, {
            useHash: true,
            onSameUrlNavigation: 'reload',
            relativeLinkResolution: 'legacy'
          })], _angular_router__WEBPACK_IMPORTED_MODULE_0__.RouterModule]
        });
        return AppRoutingModule;
      }();

      (function () {
        (typeof ngJitMode === "undefined" || ngJitMode) && _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵsetNgModuleScope"](_AppRoutingModule, {
          imports: [_angular_router__WEBPACK_IMPORTED_MODULE_0__.RouterModule],
          exports: [_angular_router__WEBPACK_IMPORTED_MODULE_0__.RouterModule]
        });
      })();
      /***/

    },

    /***/
    87082: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "AppComponent": function AppComponent() {
          return (
            /* binding */
            _AppComponent
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! @angular/core */
      14468);
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_angular_core__WEBPACK_IMPORTED_MODULE_0__);
      /* harmony import */


      var _angular_router__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! @angular/router */
      78510);
      /* harmony import */


      var _angular_router__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_angular_router__WEBPACK_IMPORTED_MODULE_1__);
      /* harmony import */


      var core__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! core */
      9764);
      /* harmony import */


      var core__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core__WEBPACK_IMPORTED_MODULE_2__);
      /* harmony import */


      var rxjs_operators__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! rxjs/operators */
      92343);
      /* harmony import */


      var rxjs_operators__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(rxjs_operators__WEBPACK_IMPORTED_MODULE_3__);
      /* harmony import */


      var _angular_common__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
      /*! @angular/common */
      1090);
      /* harmony import */


      var _angular_common__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_angular_common__WEBPACK_IMPORTED_MODULE_4__);
      /**
       * SuiteCRM is a customer relationship management program developed by SalesAgility Ltd.
       * Copyright (C) 2021 SalesAgility Ltd.
       *
       * This program is free software; you can redistribute it and/or modify it under
       * the terms of the GNU Affero General Public License version 3 as published by the
       * Free Software Foundation with the addition of the following permission added
       * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
       * IN WHICH THE COPYRIGHT IS OWNED BY SALESAGILITY, SALESAGILITY DISCLAIMS THE
       * WARRANTY OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
       *
       * This program is distributed in the hope that it will be useful, but WITHOUT
       * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
       * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
       * details.
       *
       * You should have received a copy of the GNU Affero General Public License
       * along with this program.  If not, see <http://www.gnu.org/licenses/>.
       *
       * In accordance with Section 7(b) of the GNU Affero General Public License
       * version 3, these Appropriate Legal Notices must retain the display of the
       * "Supercharged by SuiteCRM" logo. If the display of the logos is not reasonably
       * feasible for technical reasons, the Appropriate Legal Notices must display
       * the words "Supercharged by SuiteCRM".
       */


      var _c0 = ["mainOutlet"];

      function AppComponent_ng_container_1_app_full_page_spinner_1_Template(rf, ctx) {
        if (rf & 1) {
          _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](0, "app-full-page-spinner");
        }
      }

      function AppComponent_ng_container_1_Template(rf, ctx) {
        if (rf & 1) {
          _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementContainerStart"](0);

          _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](1, AppComponent_ng_container_1_app_full_page_spinner_1_Template, 1, 0, "app-full-page-spinner", 1);

          _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementContainerEnd"]();
        }

        if (rf & 2) {
          var appState_r2 = ctx.ngIf;

          _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);

          _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngIf", appState_r2.loading || appState_r2.initialAppLoading);
        }
      }

      var _AppComponent = /*#__PURE__*/function () {
        var AppComponent = /*#__PURE__*/function () {
          function AppComponent(router, appStateStore, stateManager, systemConfigs) {
            var _this8 = this;

            _classCallCheck(this, AppComponent);

            this.router = router;
            this.appStateStore = appStateStore;
            this.stateManager = stateManager;
            this.systemConfigs = systemConfigs;
            this.appState$ = this.appStateStore.vm$.pipe((0, rxjs_operators__WEBPACK_IMPORTED_MODULE_3__.debounceTime)(0));
            router.events.subscribe(function (routerEvent) {
              return _this8.checkRouterEvent(routerEvent);
            });
          }

          _createClass2(AppComponent, [{
            key: "checkRouterEvent",
            value: function checkRouterEvent(routerEvent) {
              if (routerEvent instanceof _angular_router__WEBPACK_IMPORTED_MODULE_1__.NavigationStart) {
                this.appStateStore.updateLoading('router-navigation', true);
                this.conditionalCacheReset();
              }

              if (routerEvent instanceof _angular_router__WEBPACK_IMPORTED_MODULE_1__.NavigationEnd) {
                // reset scroll on navigation
                window.scrollTo(0, 0);
                this.appStateStore.setRouteUrl(routerEvent.url);
              }

              if (routerEvent instanceof _angular_router__WEBPACK_IMPORTED_MODULE_1__.NavigationEnd || routerEvent instanceof _angular_router__WEBPACK_IMPORTED_MODULE_1__.NavigationCancel || routerEvent instanceof _angular_router__WEBPACK_IMPORTED_MODULE_1__.NavigationError) {
                this.appStateStore.updateLoading('router-navigation', false);
                this.appStateStore.updateInitialAppLoading(false);
              }
            }
          }, {
            key: "conditionalCacheReset",
            value: function conditionalCacheReset() {
              var _this9 = this;

              var cacheClearActions = this.systemConfigs.getConfigValue('cache_reset_actions');
              var previousModule = this.appStateStore.getModule();
              var view = this.appStateStore.getView();

              if (!cacheClearActions || !previousModule) {
                return;
              }

              var resetCacheActions = cacheClearActions[previousModule];

              if (!resetCacheActions || !resetCacheActions.length) {
                return;
              }

              resetCacheActions.some(function (action) {
                if (action === 'any' || action === view) {
                  _this9.stateManager.clearAuthBased();

                  return true;
                }
              });
            }
          }]);

          return AppComponent;
        }();

        AppComponent.ɵfac = function AppComponent_Factory(t) {
          return new (t || AppComponent)(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdirectiveInject"](_angular_router__WEBPACK_IMPORTED_MODULE_1__.Router), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdirectiveInject"](core__WEBPACK_IMPORTED_MODULE_2__.AppStateStore), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdirectiveInject"](core__WEBPACK_IMPORTED_MODULE_2__.StateManager), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdirectiveInject"](core__WEBPACK_IMPORTED_MODULE_2__.SystemConfigStore));
        };

        AppComponent.ɵcmp = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineComponent"]({
          type: AppComponent,
          selectors: [["app-root"]],
          viewQuery: function AppComponent_Query(rf, ctx) {
            if (rf & 1) {
              _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵviewQuery"](_c0, 7, _angular_core__WEBPACK_IMPORTED_MODULE_0__.ViewContainerRef);
            }

            if (rf & 2) {
              var _t;

              _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵqueryRefresh"](_t = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵloadQuery"]()) && (ctx.mainOutlet = _t.first);
            }
          },
          decls: 9,
          vars: 3,
          consts: [[1, "app-shell"], [4, "ngIf"], ["mainOutlet", ""]],
          template: function AppComponent_Template(rf, ctx) {
            if (rf & 1) {
              _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementStart"](0, "div", 0);

              _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵtemplate"](1, AppComponent_ng_container_1_Template, 2, 1, "ng-container", 1);

              _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpipe"](2, "async");

              _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](3, "scrm-navbar-ui");

              _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](4, "scrm-message-ui");

              _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](5, "div", null, 2);

              _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](7, "router-outlet");

              _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelementEnd"]();

              _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵelement"](8, "scrm-footer-ui");
            }

            if (rf & 2) {
              _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵadvance"](1);

              _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵproperty"]("ngIf", _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵpipeBind1"](2, 1, ctx.appState$));
            }
          },
          directives: [_angular_common__WEBPACK_IMPORTED_MODULE_4__.NgIf, core__WEBPACK_IMPORTED_MODULE_2__.NavbarUiComponent, core__WEBPACK_IMPORTED_MODULE_2__.MessageUiComponent, _angular_router__WEBPACK_IMPORTED_MODULE_1__.RouterOutlet, core__WEBPACK_IMPORTED_MODULE_2__.FooterUiComponent, core__WEBPACK_IMPORTED_MODULE_2__.FullPageSpinnerComponent],
          pipes: [_angular_common__WEBPACK_IMPORTED_MODULE_4__.AsyncPipe],
          encapsulation: 2
        });
        return AppComponent;
      }();
      /***/

    },

    /***/
    63237: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "initializeApp": function initializeApp() {
          return (
            /* binding */
            _initializeApp
          );
        },

        /* harmony export */
        "AppModule": function AppModule() {
          return (
            /* binding */
            _AppModule
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! @angular/core */
      14468);
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_angular_core__WEBPACK_IMPORTED_MODULE_0__);
      /* harmony import */


      var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(
      /*! @angular/platform-browser */
      3191);
      /* harmony import */


      var _angular_common_http__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! @angular/common/http */
      12445);
      /* harmony import */


      var _angular_common_http__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_angular_common_http__WEBPACK_IMPORTED_MODULE_1__);
      /* harmony import */


      var apollo_angular__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! apollo-angular */
      78193);
      /* harmony import */


      var apollo_angular__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(apollo_angular__WEBPACK_IMPORTED_MODULE_2__);
      /* harmony import */


      var _apollo_client_core__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(
      /*! @apollo/client/core */
      14530);
      /* harmony import */


      var _apollo_client_core__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(
      /*! @apollo/client/core */
      9740);
      /* harmony import */


      var _apollo_link_error__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! @apollo/link-error */
      92189);
      /* harmony import */


      var _apollo_link_error__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_apollo_link_error__WEBPACK_IMPORTED_MODULE_3__);
      /* harmony import */


      var _app_routing_module__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
      /*! ./app-routing.module */
      22307);
      /* harmony import */


      var _app_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
      /*! ./app.component */
      87082);
      /* harmony import */


      var core__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
      /*! core */
      9764);
      /* harmony import */


      var core__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core__WEBPACK_IMPORTED_MODULE_6__);
      /* harmony import */


      var _angular_platform_browser_animations__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(
      /*! @angular/platform-browser/animations */
      81649);
      /* harmony import */


      var _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(
      /*! @ng-bootstrap/ng-bootstrap */
      87255);
      /* harmony import */


      var _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(_ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_7__);
      /* harmony import */


      var _environments_environment__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(
      /*! ../environments/environment */
      41766);
      /* harmony import */


      var _angular_router__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(
      /*! @angular/router */
      78510);
      /* harmony import */


      var _angular_router__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(_angular_router__WEBPACK_IMPORTED_MODULE_9__);
      /* harmony import */


      var _app_router_reuse_strategy__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(
      /*! ./app-router-reuse-strategy */
      27236);
      /* harmony import */


      var bn_ng_idle__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(
      /*! bn-ng-idle */
      92064);
      /* harmony import */


      var bn_ng_idle__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(bn_ng_idle__WEBPACK_IMPORTED_MODULE_11__);
      /* harmony import */


      var _app_app_initializer__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(
      /*! @app/app-initializer */
      8533);
      /* harmony import */


      var angular_svg_icon__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(
      /*! angular-svg-icon */
      92594);
      /* harmony import */


      var angular_svg_icon__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(angular_svg_icon__WEBPACK_IMPORTED_MODULE_13__);
      /* harmony import */


      var apollo_angular_http__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(
      /*! apollo-angular/http */
      47592);
      /**
       * SuiteCRM is a customer relationship management program developed by SalesAgility Ltd.
       * Copyright (C) 2021 SalesAgility Ltd.
       *
       * This program is free software; you can redistribute it and/or modify it under
       * the terms of the GNU Affero General Public License version 3 as published by the
       * Free Software Foundation with the addition of the following permission added
       * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
       * IN WHICH THE COPYRIGHT IS OWNED BY SALESAGILITY, SALESAGILITY DISCLAIMS THE
       * WARRANTY OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
       *
       * This program is distributed in the hope that it will be useful, but WITHOUT
       * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
       * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
       * details.
       *
       * You should have received a copy of the GNU Affero General Public License
       * along with this program.  If not, see <http://www.gnu.org/licenses/>.
       *
       * In accordance with Section 7(b) of the GNU Affero General Public License
       * version 3, these Appropriate Legal Notices must retain the display of the
       * "Supercharged by SuiteCRM" logo. If the display of the logos is not reasonably
       * feasible for technical reasons, the Appropriate Legal Notices must display
       * the words "Supercharged by SuiteCRM".
       */


      var _initializeApp = function _initializeApp(appInitService) {
        return function () {
          return appInitService.init();
        };
      };

      var _AppModule = /*#__PURE__*/function () {
        var AppModule = function AppModule(apollo, httpLink, auth, appStore) {
          var _this10 = this;

          _classCallCheck(this, AppModule);

          this.auth = auth;
          this.appStore = appStore;
          var defaultOptions = {
            watchQuery: {
              fetchPolicy: 'no-cache'
            },
            query: {
              fetchPolicy: 'no-cache'
            }
          };
          var http = httpLink.create({
            uri: _environments_environment__WEBPACK_IMPORTED_MODULE_8__.environment.graphqlApiUrl,
            withCredentials: true
          });
          var logoutLink = (0, _apollo_link_error__WEBPACK_IMPORTED_MODULE_3__.onError)(function (err) {
            if (err.graphQLErrors && err.graphQLErrors.length > 0) {
              err.graphQLErrors.forEach(function (value) {
                if (_this10.auth.isUserLoggedIn.value === true && value.message.includes('Access Denied')) {
                  auth.logout('LBL_SESSION_EXPIRED');
                }
              });
            }
          });
          var middleware = new _apollo_client_core__WEBPACK_IMPORTED_MODULE_14__.ApolloLink(function (operation, forward) {
            appStore.addActiveRequest();
            return forward(operation);
          });
          var afterware = new _apollo_client_core__WEBPACK_IMPORTED_MODULE_14__.ApolloLink(function (operation, forward) {
            return forward(operation).map(function (response) {
              appStore.removeActiveRequest();
              return response;
            });
          });
          apollo.create({
            defaultOptions: defaultOptions,
            link: _apollo_client_core__WEBPACK_IMPORTED_MODULE_14__.ApolloLink.from([middleware, afterware, logoutLink.concat(http)]),
            cache: new _apollo_client_core__WEBPACK_IMPORTED_MODULE_15__.InMemoryCache()
          });
        };

        AppModule.ɵfac = function AppModule_Factory(t) {
          return new (t || AppModule)(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](apollo_angular__WEBPACK_IMPORTED_MODULE_2__.Apollo), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](apollo_angular_http__WEBPACK_IMPORTED_MODULE_16__.HttpLink), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](core__WEBPACK_IMPORTED_MODULE_6__.AuthService), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](core__WEBPACK_IMPORTED_MODULE_6__.AppStateStore));
        };

        AppModule.ɵmod = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineNgModule"]({
          type: AppModule,
          bootstrap: [_app_component__WEBPACK_IMPORTED_MODULE_5__.AppComponent]
        });
        AppModule.ɵinj = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineInjector"]({
          providers: [{
            provide: _angular_common_http__WEBPACK_IMPORTED_MODULE_1__.HTTP_INTERCEPTORS,
            useClass: core__WEBPACK_IMPORTED_MODULE_6__.ErrorInterceptor,
            multi: true
          }, {
            provide: _angular_router__WEBPACK_IMPORTED_MODULE_9__.RouteReuseStrategy,
            useClass: _app_router_reuse_strategy__WEBPACK_IMPORTED_MODULE_10__.AppRouteReuseStrategy
          }, bn_ng_idle__WEBPACK_IMPORTED_MODULE_11__.BnNgIdleService, _app_app_initializer__WEBPACK_IMPORTED_MODULE_12__.AppInit, {
            provide: _angular_core__WEBPACK_IMPORTED_MODULE_0__.APP_INITIALIZER,
            useFactory: _initializeApp,
            multi: true,
            deps: [_app_app_initializer__WEBPACK_IMPORTED_MODULE_12__.AppInit]
          }],
          imports: [[_angular_platform_browser__WEBPACK_IMPORTED_MODULE_17__.BrowserModule, _angular_common_http__WEBPACK_IMPORTED_MODULE_1__.HttpClientModule, _app_routing_module__WEBPACK_IMPORTED_MODULE_4__.AppRoutingModule, core__WEBPACK_IMPORTED_MODULE_6__.FooterUiModule, core__WEBPACK_IMPORTED_MODULE_6__.NavbarUiModule, core__WEBPACK_IMPORTED_MODULE_6__.MessageUiModule, core__WEBPACK_IMPORTED_MODULE_6__.ClassicViewUiModule, core__WEBPACK_IMPORTED_MODULE_6__.FilterUiModule, core__WEBPACK_IMPORTED_MODULE_6__.ListModule, core__WEBPACK_IMPORTED_MODULE_6__.RecordModule, core__WEBPACK_IMPORTED_MODULE_6__.CreateRecordModule, core__WEBPACK_IMPORTED_MODULE_6__.InstallViewModule, core__WEBPACK_IMPORTED_MODULE_6__.TableModule, core__WEBPACK_IMPORTED_MODULE_6__.ModuleTitleModule, core__WEBPACK_IMPORTED_MODULE_6__.ListHeaderModule, core__WEBPACK_IMPORTED_MODULE_6__.ListContainerModule, core__WEBPACK_IMPORTED_MODULE_6__.ColumnChooserModule, angular_svg_icon__WEBPACK_IMPORTED_MODULE_13__.AngularSvgIconModule.forRoot(), core__WEBPACK_IMPORTED_MODULE_6__.ImageModule, _angular_platform_browser_animations__WEBPACK_IMPORTED_MODULE_18__.BrowserAnimationsModule, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_7__.NgbModule, core__WEBPACK_IMPORTED_MODULE_6__.FullPageSpinnerModule, core__WEBPACK_IMPORTED_MODULE_6__.MessageModalModule, core__WEBPACK_IMPORTED_MODULE_6__.RecordListModalModule]]
        });
        return AppModule;
      }();

      (function () {
        (typeof ngJitMode === "undefined" || ngJitMode) && _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵsetNgModuleScope"](_AppModule, {
          declarations: [_app_component__WEBPACK_IMPORTED_MODULE_5__.AppComponent],
          imports: [_angular_platform_browser__WEBPACK_IMPORTED_MODULE_17__.BrowserModule, _angular_common_http__WEBPACK_IMPORTED_MODULE_1__.HttpClientModule, _app_routing_module__WEBPACK_IMPORTED_MODULE_4__.AppRoutingModule, core__WEBPACK_IMPORTED_MODULE_6__.FooterUiModule, core__WEBPACK_IMPORTED_MODULE_6__.NavbarUiModule, core__WEBPACK_IMPORTED_MODULE_6__.MessageUiModule, core__WEBPACK_IMPORTED_MODULE_6__.ClassicViewUiModule, core__WEBPACK_IMPORTED_MODULE_6__.FilterUiModule, core__WEBPACK_IMPORTED_MODULE_6__.ListModule, core__WEBPACK_IMPORTED_MODULE_6__.RecordModule, core__WEBPACK_IMPORTED_MODULE_6__.CreateRecordModule, core__WEBPACK_IMPORTED_MODULE_6__.InstallViewModule, core__WEBPACK_IMPORTED_MODULE_6__.TableModule, core__WEBPACK_IMPORTED_MODULE_6__.ModuleTitleModule, core__WEBPACK_IMPORTED_MODULE_6__.ListHeaderModule, core__WEBPACK_IMPORTED_MODULE_6__.ListContainerModule, core__WEBPACK_IMPORTED_MODULE_6__.ColumnChooserModule, angular_svg_icon__WEBPACK_IMPORTED_MODULE_13__.AngularSvgIconModule, core__WEBPACK_IMPORTED_MODULE_6__.ImageModule, _angular_platform_browser_animations__WEBPACK_IMPORTED_MODULE_18__.BrowserAnimationsModule, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_7__.NgbModule, core__WEBPACK_IMPORTED_MODULE_6__.FullPageSpinnerModule, core__WEBPACK_IMPORTED_MODULE_6__.MessageModalModule, core__WEBPACK_IMPORTED_MODULE_6__.RecordListModalModule]
        });
      })();
      /***/

    },

    /***/
    60790: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony import */


      var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! @angular/platform-browser */
      3191);
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! @angular/core */
      14468);
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_angular_core__WEBPACK_IMPORTED_MODULE_0__);
      /* harmony import */


      var _app_app_module__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! @app/app.module */
      63237);
      /* harmony import */


      var _environments_environment__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! ./environments/environment */
      41766);

      if (_environments_environment__WEBPACK_IMPORTED_MODULE_2__.environment.production) {
        (0, _angular_core__WEBPACK_IMPORTED_MODULE_0__.enableProdMode)();
      }

      _angular_platform_browser__WEBPACK_IMPORTED_MODULE_3__.platformBrowser().bootstrapModule(_app_app_module__WEBPACK_IMPORTED_MODULE_1__.AppModule)["catch"](function (err) {
        return console.error(err);
      });
      /***/

    },

    /***/
    41766: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "environment": function environment() {
          return (
            /* binding */
            _environment
          );
        }
        /* harmony export */

      });
      /**
       * SuiteCRM is a customer relationship management program developed by SalesAgility Ltd.
       * Copyright (C) 2021 SalesAgility Ltd.
       *
       * This program is free software; you can redistribute it and/or modify it under
       * the terms of the GNU Affero General Public License version 3 as published by the
       * Free Software Foundation with the addition of the following permission added
       * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
       * IN WHICH THE COPYRIGHT IS OWNED BY SALESAGILITY, SALESAGILITY DISCLAIMS THE
       * WARRANTY OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
       *
       * This program is distributed in the hope that it will be useful, but WITHOUT
       * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
       * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
       * details.
       *
       * You should have received a copy of the GNU Affero General Public License
       * along with this program.  If not, see <http://www.gnu.org/licenses/>.
       *
       * In accordance with Section 7(b) of the GNU Affero General Public License
       * version 3, these Appropriate Legal Notices must retain the display of the
       * "Supercharged by SuiteCRM" logo. If the display of the logos is not reasonably
       * feasible for technical reasons, the Appropriate Legal Notices must display
       * the words "Supercharged by SuiteCRM".
       */


      var _environment = {
        production: true,
        apiUrl: './api',
        graphqlApiUrl: './api/graphql'
      };
      /***/
    },

    /***/
    26485: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "AnimationDriver": function AnimationDriver() {
          return (
            /* binding */
            _AnimationDriver
          );
        },

        /* harmony export */
        "ɵAnimation": function ɵAnimation() {
          return (
            /* binding */
            Animation
          );
        },

        /* harmony export */
        "ɵAnimationEngine": function ɵAnimationEngine() {
          return (
            /* binding */
            AnimationEngine
          );
        },

        /* harmony export */
        "ɵAnimationStyleNormalizer": function ɵAnimationStyleNormalizer() {
          return (
            /* binding */
            AnimationStyleNormalizer
          );
        },

        /* harmony export */
        "ɵCssKeyframesDriver": function ɵCssKeyframesDriver() {
          return (
            /* binding */
            CssKeyframesDriver
          );
        },

        /* harmony export */
        "ɵCssKeyframesPlayer": function ɵCssKeyframesPlayer() {
          return (
            /* binding */
            CssKeyframesPlayer
          );
        },

        /* harmony export */
        "ɵNoopAnimationDriver": function ɵNoopAnimationDriver() {
          return (
            /* binding */
            NoopAnimationDriver
          );
        },

        /* harmony export */
        "ɵNoopAnimationStyleNormalizer": function ɵNoopAnimationStyleNormalizer() {
          return (
            /* binding */
            NoopAnimationStyleNormalizer
          );
        },

        /* harmony export */
        "ɵWebAnimationsDriver": function ɵWebAnimationsDriver() {
          return (
            /* binding */
            WebAnimationsDriver
          );
        },

        /* harmony export */
        "ɵWebAnimationsPlayer": function ɵWebAnimationsPlayer() {
          return (
            /* binding */
            WebAnimationsPlayer
          );
        },

        /* harmony export */
        "ɵWebAnimationsStyleNormalizer": function ɵWebAnimationsStyleNormalizer() {
          return (
            /* binding */
            WebAnimationsStyleNormalizer
          );
        },

        /* harmony export */
        "ɵallowPreviousPlayerStylesMerge": function ɵallowPreviousPlayerStylesMerge() {
          return (
            /* binding */
            allowPreviousPlayerStylesMerge
          );
        },

        /* harmony export */
        "ɵangular_packages_animations_browser_browser_a": function ɵangular_packages_animations_browser_browser_a() {
          return (
            /* binding */
            SpecialCasedStyles
          );
        },

        /* harmony export */
        "ɵcontainsElement": function ɵcontainsElement() {
          return (
            /* binding */
            _containsElement
          );
        },

        /* harmony export */
        "ɵinvokeQuery": function ɵinvokeQuery() {
          return (
            /* binding */
            invokeQuery
          );
        },

        /* harmony export */
        "ɵmatchesElement": function ɵmatchesElement() {
          return (
            /* binding */
            _matchesElement
          );
        },

        /* harmony export */
        "ɵsupportsWebAnimations": function ɵsupportsWebAnimations() {
          return (
            /* binding */
            supportsWebAnimations
          );
        },

        /* harmony export */
        "ɵvalidateStyleProperty": function ɵvalidateStyleProperty() {
          return (
            /* binding */
            _validateStyleProperty
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var _angular_animations__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! @angular/animations */
      84562);
      /* harmony import */


      var _angular_animations__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_angular_animations__WEBPACK_IMPORTED_MODULE_0__);
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! @angular/core */
      14468);
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_angular_core__WEBPACK_IMPORTED_MODULE_1__);
      /**
       * @license Angular v12.1.0
       * (c) 2010-2021 Google LLC. https://angular.io/
       * License: MIT
       */

      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */


      function isBrowser() {
        return typeof window !== 'undefined' && typeof window.document !== 'undefined';
      }

      function isNode() {
        // Checking only for `process` isn't enough to identify whether or not we're in a Node
        // environment, because Webpack by default will polyfill the `process`. While we can discern
        // that Webpack polyfilled it by looking at `process.browser`, it's very Webpack-specific and
        // might not be future-proof. Instead we look at the stringified version of `process` which
        // is `[object process]` in Node and `[object Object]` when polyfilled.
        return typeof process !== 'undefined' && {}.toString.call(process) === '[object process]';
      }

      function optimizeGroupPlayer(players) {
        switch (players.length) {
          case 0:
            return new _angular_animations__WEBPACK_IMPORTED_MODULE_0__.NoopAnimationPlayer();

          case 1:
            return players[0];

          default:
            return new _angular_animations__WEBPACK_IMPORTED_MODULE_0__["ɵAnimationGroupPlayer"](players);
        }
      }

      function normalizeKeyframes(driver, normalizer, element, keyframes) {
        var preStyles = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : {};
        var postStyles = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : {};
        var errors = [];
        var normalizedKeyframes = [];
        var previousOffset = -1;
        var previousKeyframe = null;
        keyframes.forEach(function (kf) {
          var offset = kf['offset'];
          var isSameOffset = offset == previousOffset;
          var normalizedKeyframe = isSameOffset && previousKeyframe || {};
          Object.keys(kf).forEach(function (prop) {
            var normalizedProp = prop;
            var normalizedValue = kf[prop];

            if (prop !== 'offset') {
              normalizedProp = normalizer.normalizePropertyName(normalizedProp, errors);

              switch (normalizedValue) {
                case _angular_animations__WEBPACK_IMPORTED_MODULE_0__["ɵPRE_STYLE"]:
                  normalizedValue = preStyles[prop];
                  break;

                case _angular_animations__WEBPACK_IMPORTED_MODULE_0__.AUTO_STYLE:
                  normalizedValue = postStyles[prop];
                  break;

                default:
                  normalizedValue = normalizer.normalizeStyleValue(prop, normalizedProp, normalizedValue, errors);
                  break;
              }
            }

            normalizedKeyframe[normalizedProp] = normalizedValue;
          });

          if (!isSameOffset) {
            normalizedKeyframes.push(normalizedKeyframe);
          }

          previousKeyframe = normalizedKeyframe;
          previousOffset = offset;
        });

        if (errors.length) {
          var LINE_START = '\n - ';
          throw new Error("Unable to animate due to the following errors:".concat(LINE_START).concat(errors.join(LINE_START)));
        }

        return normalizedKeyframes;
      }

      function listenOnPlayer(player, eventName, event, callback) {
        switch (eventName) {
          case 'start':
            player.onStart(function () {
              return callback(event && copyAnimationEvent(event, 'start', player));
            });
            break;

          case 'done':
            player.onDone(function () {
              return callback(event && copyAnimationEvent(event, 'done', player));
            });
            break;

          case 'destroy':
            player.onDestroy(function () {
              return callback(event && copyAnimationEvent(event, 'destroy', player));
            });
            break;
        }
      }

      function copyAnimationEvent(e, phaseName, player) {
        var totalTime = player.totalTime;
        var disabled = player.disabled ? true : false;
        var event = makeAnimationEvent(e.element, e.triggerName, e.fromState, e.toState, phaseName || e.phaseName, totalTime == undefined ? e.totalTime : totalTime, disabled);
        var data = e['_data'];

        if (data != null) {
          event['_data'] = data;
        }

        return event;
      }

      function makeAnimationEvent(element, triggerName, fromState, toState) {
        var phaseName = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : '';
        var totalTime = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : 0;
        var disabled = arguments.length > 6 ? arguments[6] : undefined;
        return {
          element: element,
          triggerName: triggerName,
          fromState: fromState,
          toState: toState,
          phaseName: phaseName,
          totalTime: totalTime,
          disabled: !!disabled
        };
      }

      function getOrSetAsInMap(map, key, defaultValue) {
        var value;

        if (map instanceof Map) {
          value = map.get(key);

          if (!value) {
            map.set(key, value = defaultValue);
          }
        } else {
          value = map[key];

          if (!value) {
            value = map[key] = defaultValue;
          }
        }

        return value;
      }

      function parseTimelineCommand(command) {
        var separatorPos = command.indexOf(':');
        var id = command.substring(1, separatorPos);
        var action = command.substr(separatorPos + 1);
        return [id, action];
      }

      var _contains = function _contains(elm1, elm2) {
        return false;
      };

      var ɵ0 = _contains;

      var _matches = function _matches(element, selector) {
        return false;
      };

      var ɵ1 = _matches;

      var _query = function _query(element, selector, multi) {
        return [];
      };

      var ɵ2 = _query; // Define utility methods for browsers and platform-server(domino) where Element
      // and utility methods exist.

      var _isNode = /*#__PURE__*/isNode();

      if (_isNode || typeof Element !== 'undefined') {
        if (! /*#__PURE__*/isBrowser()) {
          _contains = function _contains(elm1, elm2) {
            return elm1.contains(elm2);
          };
        } else {
          _contains = function _contains(elm1, elm2) {
            while (elm2 && elm2 !== document.documentElement) {
              if (elm2 === elm1) {
                return true;
              }

              elm2 = elm2.parentNode || elm2.host; // consider host to support shadow DOM
            }

            return false;
          };
        }

        _matches = /*#__PURE__*/function () {
          if (_isNode || Element.prototype.matches) {
            return function (element, selector) {
              return element.matches(selector);
            };
          } else {
            var proto = Element.prototype;
            var fn = proto.matchesSelector || proto.mozMatchesSelector || proto.msMatchesSelector || proto.oMatchesSelector || proto.webkitMatchesSelector;

            if (fn) {
              return function (element, selector) {
                return fn.apply(element, [selector]);
              };
            } else {
              return _matches;
            }
          }
        }();

        _query = function _query(element, selector, multi) {
          var results = [];

          if (multi) {
            // DO NOT REFACTOR TO USE SPREAD SYNTAX.
            // For element queries that return sufficiently large NodeList objects,
            // using spread syntax to populate the results array causes a RangeError
            // due to the call stack limit being reached. `Array.from` can not be used
            // as well, since NodeList is not iterable in IE 11, see
            // https://developer.mozilla.org/en-US/docs/Web/API/NodeList
            // More info is available in #38551.
            var elems = element.querySelectorAll(selector);

            for (var i = 0; i < elems.length; i++) {
              results.push(elems[i]);
            }
          } else {
            var elm = element.querySelector(selector);

            if (elm) {
              results.push(elm);
            }
          }

          return results;
        };
      }

      function containsVendorPrefix(prop) {
        // Webkit is the only real popular vendor prefix nowadays
        // cc: http://shouldiprefix.com/
        return prop.substring(1, 6) == 'ebkit'; // webkit or Webkit
      }

      var _CACHED_BODY = null;
      var _IS_WEBKIT = false;

      function _validateStyleProperty(prop) {
        if (!_CACHED_BODY) {
          _CACHED_BODY = getBodyNode() || {};
          _IS_WEBKIT = _CACHED_BODY.style ? 'WebkitAppearance' in _CACHED_BODY.style : false;
        }

        var result = true;

        if (_CACHED_BODY.style && !containsVendorPrefix(prop)) {
          result = prop in _CACHED_BODY.style;

          if (!result && _IS_WEBKIT) {
            var camelProp = 'Webkit' + prop.charAt(0).toUpperCase() + prop.substr(1);
            result = camelProp in _CACHED_BODY.style;
          }
        }

        return result;
      }

      function getBodyNode() {
        if (typeof document != 'undefined') {
          return document.body;
        }

        return null;
      }

      var _matchesElement = _matches;
      var _containsElement = _contains;
      var invokeQuery = _query;

      function hypenatePropsObject(object) {
        var newObj = {};
        Object.keys(object).forEach(function (prop) {
          var newProp = prop.replace(/([a-z])([A-Z])/g, '$1-$2');
          newObj[newProp] = object[prop];
        });
        return newObj;
      }
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * @publicApi
       */


      var NoopAnimationDriver = /*#__PURE__*/function () {
        var NoopAnimationDriver = /*#__PURE__*/function () {
          function NoopAnimationDriver() {
            _classCallCheck(this, NoopAnimationDriver);
          }

          _createClass2(NoopAnimationDriver, [{
            key: "validateStyleProperty",
            value: function validateStyleProperty(prop) {
              return _validateStyleProperty(prop);
            }
          }, {
            key: "matchesElement",
            value: function matchesElement(element, selector) {
              return _matchesElement(element, selector);
            }
          }, {
            key: "containsElement",
            value: function containsElement(elm1, elm2) {
              return _containsElement(elm1, elm2);
            }
          }, {
            key: "query",
            value: function query(element, selector, multi) {
              return invokeQuery(element, selector, multi);
            }
          }, {
            key: "computeStyle",
            value: function computeStyle(element, prop, defaultValue) {
              return defaultValue || '';
            }
          }, {
            key: "animate",
            value: function animate(element, keyframes, duration, delay, easing) {
              var previousPlayers = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : [];
              var scrubberAccessRequested = arguments.length > 6 ? arguments[6] : undefined;
              return new _angular_animations__WEBPACK_IMPORTED_MODULE_0__.NoopAnimationPlayer(duration, delay);
            }
          }]);

          return NoopAnimationDriver;
        }();

        NoopAnimationDriver.ɵfac = function NoopAnimationDriver_Factory(t) {
          return new (t || NoopAnimationDriver)();
        };

        NoopAnimationDriver.ɵprov = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjectable"]({
          token: NoopAnimationDriver,
          factory: NoopAnimationDriver.ɵfac
        });
        return NoopAnimationDriver;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();
      /**
       * @publicApi
       */


      var _AnimationDriver = function _AnimationDriver() {
        _classCallCheck(this, _AnimationDriver);
      };

      _AnimationDriver.NOOP = /*#__PURE__*/new NoopAnimationDriver();
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      var ONE_SECOND = 1000;
      var SUBSTITUTION_EXPR_START = '{{';
      var SUBSTITUTION_EXPR_END = '}}';
      var ENTER_CLASSNAME = 'ng-enter';
      var LEAVE_CLASSNAME = 'ng-leave';
      var ENTER_SELECTOR = '.ng-enter';
      var LEAVE_SELECTOR = '.ng-leave';
      var NG_TRIGGER_CLASSNAME = 'ng-trigger';
      var NG_TRIGGER_SELECTOR = '.ng-trigger';
      var NG_ANIMATING_CLASSNAME = 'ng-animating';
      var NG_ANIMATING_SELECTOR = '.ng-animating';

      function resolveTimingValue(value) {
        if (typeof value == 'number') return value;
        var matches = value.match(/^(-?[\.\d]+)(m?s)/);
        if (!matches || matches.length < 2) return 0;
        return _convertTimeValueToMS(parseFloat(matches[1]), matches[2]);
      }

      function _convertTimeValueToMS(value, unit) {
        switch (unit) {
          case 's':
            return value * ONE_SECOND;

          default:
            // ms or something else
            return value;
        }
      }

      function resolveTiming(timings, errors, allowNegativeValues) {
        return timings.hasOwnProperty('duration') ? timings : parseTimeExpression(timings, errors, allowNegativeValues);
      }

      function parseTimeExpression(exp, errors, allowNegativeValues) {
        var regex = /^(-?[\.\d]+)(m?s)(?:\s+(-?[\.\d]+)(m?s))?(?:\s+([-a-z]+(?:\(.+?\))?))?$/i;
        var duration;
        var delay = 0;
        var easing = '';

        if (typeof exp === 'string') {
          var matches = exp.match(regex);

          if (matches === null) {
            errors.push("The provided timing value \"".concat(exp, "\" is invalid."));
            return {
              duration: 0,
              delay: 0,
              easing: ''
            };
          }

          duration = _convertTimeValueToMS(parseFloat(matches[1]), matches[2]);
          var delayMatch = matches[3];

          if (delayMatch != null) {
            delay = _convertTimeValueToMS(parseFloat(delayMatch), matches[4]);
          }

          var easingVal = matches[5];

          if (easingVal) {
            easing = easingVal;
          }
        } else {
          duration = exp;
        }

        if (!allowNegativeValues) {
          var containsErrors = false;
          var startIndex = errors.length;

          if (duration < 0) {
            errors.push("Duration values below 0 are not allowed for this animation step.");
            containsErrors = true;
          }

          if (delay < 0) {
            errors.push("Delay values below 0 are not allowed for this animation step.");
            containsErrors = true;
          }

          if (containsErrors) {
            errors.splice(startIndex, 0, "The provided timing value \"".concat(exp, "\" is invalid."));
          }
        }

        return {
          duration: duration,
          delay: delay,
          easing: easing
        };
      }

      function copyObj(obj) {
        var destination = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
        Object.keys(obj).forEach(function (prop) {
          destination[prop] = obj[prop];
        });
        return destination;
      }

      function normalizeStyles(styles) {
        var normalizedStyles = {};

        if (Array.isArray(styles)) {
          styles.forEach(function (data) {
            return copyStyles(data, false, normalizedStyles);
          });
        } else {
          copyStyles(styles, false, normalizedStyles);
        }

        return normalizedStyles;
      }

      function copyStyles(styles, readPrototype) {
        var destination = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};

        if (readPrototype) {
          // we make use of a for-in loop so that the
          // prototypically inherited properties are
          // revealed from the backFill map
          for (var prop in styles) {
            destination[prop] = styles[prop];
          }
        } else {
          copyObj(styles, destination);
        }

        return destination;
      }

      function getStyleAttributeString(element, key, value) {
        // Return the key-value pair string to be added to the style attribute for the
        // given CSS style key.
        if (value) {
          return key + ':' + value + ';';
        } else {
          return '';
        }
      }

      function writeStyleAttribute(element) {
        // Read the style property of the element and manually reflect it to the
        // style attribute. This is needed because Domino on platform-server doesn't
        // understand the full set of allowed CSS properties and doesn't reflect some
        // of them automatically.
        var styleAttrValue = '';

        for (var i = 0; i < element.style.length; i++) {
          var key = element.style.item(i);
          styleAttrValue += getStyleAttributeString(element, key, element.style.getPropertyValue(key));
        }

        for (var _key3 in element.style) {
          // Skip internal Domino properties that don't need to be reflected.
          if (!element.style.hasOwnProperty(_key3) || _key3.startsWith('_')) {
            continue;
          }

          var dashKey = camelCaseToDashCase(_key3);
          styleAttrValue += getStyleAttributeString(element, dashKey, element.style[_key3]);
        }

        element.setAttribute('style', styleAttrValue);
      }

      function setStyles(element, styles, formerStyles) {
        if (element['style']) {
          Object.keys(styles).forEach(function (prop) {
            var camelProp = dashCaseToCamelCase(prop);

            if (formerStyles && !formerStyles.hasOwnProperty(prop)) {
              formerStyles[prop] = element.style[camelProp];
            }

            element.style[camelProp] = styles[prop];
          }); // On the server set the 'style' attribute since it's not automatically reflected.

          if (isNode()) {
            writeStyleAttribute(element);
          }
        }
      }

      function eraseStyles(element, styles) {
        if (element['style']) {
          Object.keys(styles).forEach(function (prop) {
            var camelProp = dashCaseToCamelCase(prop);
            element.style[camelProp] = '';
          }); // On the server set the 'style' attribute since it's not automatically reflected.

          if (isNode()) {
            writeStyleAttribute(element);
          }
        }
      }

      function normalizeAnimationEntry(steps) {
        if (Array.isArray(steps)) {
          if (steps.length == 1) return steps[0];
          return (0, _angular_animations__WEBPACK_IMPORTED_MODULE_0__.sequence)(steps);
        }

        return steps;
      }

      function validateStyleParams(value, options, errors) {
        var params = options.params || {};
        var matches = extractStyleParams(value);

        if (matches.length) {
          matches.forEach(function (varName) {
            if (!params.hasOwnProperty(varName)) {
              errors.push("Unable to resolve the local animation param ".concat(varName, " in the given list of values"));
            }
          });
        }
      }

      var PARAM_REGEX = /*#__PURE__*/new RegExp("".concat(SUBSTITUTION_EXPR_START, "\\s*(.+?)\\s*").concat(SUBSTITUTION_EXPR_END), 'g');

      function extractStyleParams(value) {
        var params = [];

        if (typeof value === 'string') {
          var match;

          while (match = PARAM_REGEX.exec(value)) {
            params.push(match[1]);
          }

          PARAM_REGEX.lastIndex = 0;
        }

        return params;
      }

      function interpolateParams(value, params, errors) {
        var original = value.toString();
        var str = original.replace(PARAM_REGEX, function (_, varName) {
          var localVal = params[varName]; // this means that the value was never overridden by the data passed in by the user

          if (!params.hasOwnProperty(varName)) {
            errors.push("Please provide a value for the animation param ".concat(varName));
            localVal = '';
          }

          return localVal.toString();
        }); // we do this to assert that numeric values stay as they are

        return str == original ? value : str;
      }

      function iteratorToArray(iterator) {
        var arr = [];
        var item = iterator.next();

        while (!item.done) {
          arr.push(item.value);
          item = iterator.next();
        }

        return arr;
      }

      var DASH_CASE_REGEXP = /-+([a-z0-9])/g;

      function dashCaseToCamelCase(input) {
        return input.replace(DASH_CASE_REGEXP, function () {
          for (var _len3 = arguments.length, m = new Array(_len3), _key4 = 0; _key4 < _len3; _key4++) {
            m[_key4] = arguments[_key4];
          }

          return m[1].toUpperCase();
        });
      }

      function camelCaseToDashCase(input) {
        return input.replace(/([a-z])([A-Z])/g, '$1-$2').toLowerCase();
      }

      function allowPreviousPlayerStylesMerge(duration, delay) {
        return duration === 0 || delay === 0;
      }

      function balancePreviousStylesIntoKeyframes(element, keyframes, previousStyles) {
        var previousStyleProps = Object.keys(previousStyles);

        if (previousStyleProps.length && keyframes.length) {
          var startingKeyframe = keyframes[0];
          var missingStyleProps = [];
          previousStyleProps.forEach(function (prop) {
            if (!startingKeyframe.hasOwnProperty(prop)) {
              missingStyleProps.push(prop);
            }

            startingKeyframe[prop] = previousStyles[prop];
          });

          if (missingStyleProps.length) {
            var _loop = function _loop() {
              var kf = keyframes[i];
              missingStyleProps.forEach(function (prop) {
                kf[prop] = computeStyle(element, prop);
              });
            };

            // tslint:disable-next-line
            for (var i = 1; i < keyframes.length; i++) {
              _loop();
            }
          }
        }

        return keyframes;
      }

      function visitDslNode(visitor, node, context) {
        switch (node.type) {
          case 7
          /* Trigger */
          :
            return visitor.visitTrigger(node, context);

          case 0
          /* State */
          :
            return visitor.visitState(node, context);

          case 1
          /* Transition */
          :
            return visitor.visitTransition(node, context);

          case 2
          /* Sequence */
          :
            return visitor.visitSequence(node, context);

          case 3
          /* Group */
          :
            return visitor.visitGroup(node, context);

          case 4
          /* Animate */
          :
            return visitor.visitAnimate(node, context);

          case 5
          /* Keyframes */
          :
            return visitor.visitKeyframes(node, context);

          case 6
          /* Style */
          :
            return visitor.visitStyle(node, context);

          case 8
          /* Reference */
          :
            return visitor.visitReference(node, context);

          case 9
          /* AnimateChild */
          :
            return visitor.visitAnimateChild(node, context);

          case 10
          /* AnimateRef */
          :
            return visitor.visitAnimateRef(node, context);

          case 11
          /* Query */
          :
            return visitor.visitQuery(node, context);

          case 12
          /* Stagger */
          :
            return visitor.visitStagger(node, context);

          default:
            throw new Error("Unable to resolve animation metadata node #".concat(node.type));
        }
      }

      function computeStyle(element, prop) {
        return window.getComputedStyle(element)[prop];
      }
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */


      var ANY_STATE = '*';

      function parseTransitionExpr(transitionValue, errors) {
        var expressions = [];

        if (typeof transitionValue == 'string') {
          transitionValue.split(/\s*,\s*/).forEach(function (str) {
            return parseInnerTransitionStr(str, expressions, errors);
          });
        } else {
          expressions.push(transitionValue);
        }

        return expressions;
      }

      function parseInnerTransitionStr(eventStr, expressions, errors) {
        if (eventStr[0] == ':') {
          var result = parseAnimationAlias(eventStr, errors);

          if (typeof result == 'function') {
            expressions.push(result);
            return;
          }

          eventStr = result;
        }

        var match = eventStr.match(/^(\*|[-\w]+)\s*(<?[=-]>)\s*(\*|[-\w]+)$/);

        if (match == null || match.length < 4) {
          errors.push("The provided transition expression \"".concat(eventStr, "\" is not supported"));
          return expressions;
        }

        var fromState = match[1];
        var separator = match[2];
        var toState = match[3];
        expressions.push(makeLambdaFromStates(fromState, toState));
        var isFullAnyStateExpr = fromState == ANY_STATE && toState == ANY_STATE;

        if (separator[0] == '<' && !isFullAnyStateExpr) {
          expressions.push(makeLambdaFromStates(toState, fromState));
        }
      }

      function parseAnimationAlias(alias, errors) {
        switch (alias) {
          case ':enter':
            return 'void => *';

          case ':leave':
            return '* => void';

          case ':increment':
            return function (fromState, toState) {
              return parseFloat(toState) > parseFloat(fromState);
            };

          case ':decrement':
            return function (fromState, toState) {
              return parseFloat(toState) < parseFloat(fromState);
            };

          default:
            errors.push("The transition alias value \"".concat(alias, "\" is not supported"));
            return '* => *';
        }
      } // DO NOT REFACTOR ... keep the follow set instantiations
      // with the values intact (closure compiler for some reason
      // removes follow-up lines that add the values outside of
      // the constructor...


      var TRUE_BOOLEAN_VALUES = /*#__PURE__*/new Set(['true', '1']);
      var FALSE_BOOLEAN_VALUES = /*#__PURE__*/new Set(['false', '0']);

      function makeLambdaFromStates(lhs, rhs) {
        var LHS_MATCH_BOOLEAN = TRUE_BOOLEAN_VALUES.has(lhs) || FALSE_BOOLEAN_VALUES.has(lhs);
        var RHS_MATCH_BOOLEAN = TRUE_BOOLEAN_VALUES.has(rhs) || FALSE_BOOLEAN_VALUES.has(rhs);
        return function (fromState, toState) {
          var lhsMatch = lhs == ANY_STATE || lhs == fromState;
          var rhsMatch = rhs == ANY_STATE || rhs == toState;

          if (!lhsMatch && LHS_MATCH_BOOLEAN && typeof fromState === 'boolean') {
            lhsMatch = fromState ? TRUE_BOOLEAN_VALUES.has(lhs) : FALSE_BOOLEAN_VALUES.has(lhs);
          }

          if (!rhsMatch && RHS_MATCH_BOOLEAN && typeof toState === 'boolean') {
            rhsMatch = toState ? TRUE_BOOLEAN_VALUES.has(rhs) : FALSE_BOOLEAN_VALUES.has(rhs);
          }

          return lhsMatch && rhsMatch;
        };
      }
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */


      var SELF_TOKEN = ':self';
      var SELF_TOKEN_REGEX = /*#__PURE__*/new RegExp("s*".concat(SELF_TOKEN, "s*,?"), 'g');
      /*
       * [Validation]
       * The visitor code below will traverse the animation AST generated by the animation verb functions
       * (the output is a tree of objects) and attempt to perform a series of validations on the data. The
       * following corner-cases will be validated:
       *
       * 1. Overlap of animations
       * Given that a CSS property cannot be animated in more than one place at the same time, it's
       * important that this behavior is detected and validated. The way in which this occurs is that
       * each time a style property is examined, a string-map containing the property will be updated with
       * the start and end times for when the property is used within an animation step.
       *
       * If there are two or more parallel animations that are currently running (these are invoked by the
       * group()) on the same element then the validator will throw an error. Since the start/end timing
       * values are collected for each property then if the current animation step is animating the same
       * property and its timing values fall anywhere into the window of time that the property is
       * currently being animated within then this is what causes an error.
       *
       * 2. Timing values
       * The validator will validate to see if a timing value of `duration delay easing` or
       * `durationNumber` is valid or not.
       *
       * (note that upon validation the code below will replace the timing data with an object containing
       * {duration,delay,easing}.
       *
       * 3. Offset Validation
       * Each of the style() calls are allowed to have an offset value when placed inside of keyframes().
       * Offsets within keyframes() are considered valid when:
       *
       *   - No offsets are used at all
       *   - Each style() entry contains an offset value
       *   - Each offset is between 0 and 1
       *   - Each offset is greater to or equal than the previous one
       *
       * Otherwise an error will be thrown.
       */

      function buildAnimationAst(driver, metadata, errors) {
        return new AnimationAstBuilderVisitor(driver).build(metadata, errors);
      }

      var ROOT_SELECTOR = '';

      var AnimationAstBuilderVisitor = /*#__PURE__*/function () {
        function AnimationAstBuilderVisitor(_driver) {
          _classCallCheck(this, AnimationAstBuilderVisitor);

          this._driver = _driver;
        }

        _createClass2(AnimationAstBuilderVisitor, [{
          key: "build",
          value: function build(metadata, errors) {
            var context = new AnimationAstBuilderContext(errors);

            this._resetContextStyleTimingState(context);

            return visitDslNode(this, normalizeAnimationEntry(metadata), context);
          }
        }, {
          key: "_resetContextStyleTimingState",
          value: function _resetContextStyleTimingState(context) {
            context.currentQuerySelector = ROOT_SELECTOR;
            context.collectedStyles = {};
            context.collectedStyles[ROOT_SELECTOR] = {};
            context.currentTime = 0;
          }
        }, {
          key: "visitTrigger",
          value: function visitTrigger(metadata, context) {
            var _this11 = this;

            var queryCount = context.queryCount = 0;
            var depCount = context.depCount = 0;
            var states = [];
            var transitions = [];

            if (metadata.name.charAt(0) == '@') {
              context.errors.push('animation triggers cannot be prefixed with an `@` sign (e.g. trigger(\'@foo\', [...]))');
            }

            metadata.definitions.forEach(function (def) {
              _this11._resetContextStyleTimingState(context);

              if (def.type == 0
              /* State */
              ) {
                var stateDef = def;
                var name = stateDef.name;
                name.toString().split(/\s*,\s*/).forEach(function (n) {
                  stateDef.name = n;
                  states.push(_this11.visitState(stateDef, context));
                });
                stateDef.name = name;
              } else if (def.type == 1
              /* Transition */
              ) {
                var transition = _this11.visitTransition(def, context);

                queryCount += transition.queryCount;
                depCount += transition.depCount;
                transitions.push(transition);
              } else {
                context.errors.push('only state() and transition() definitions can sit inside of a trigger()');
              }
            });
            return {
              type: 7
              /* Trigger */
              ,
              name: metadata.name,
              states: states,
              transitions: transitions,
              queryCount: queryCount,
              depCount: depCount,
              options: null
            };
          }
        }, {
          key: "visitState",
          value: function visitState(metadata, context) {
            var styleAst = this.visitStyle(metadata.styles, context);
            var astParams = metadata.options && metadata.options.params || null;

            if (styleAst.containsDynamicStyles) {
              var missingSubs = new Set();
              var params = astParams || {};
              styleAst.styles.forEach(function (value) {
                if (isObject(value)) {
                  var stylesObj = value;
                  Object.keys(stylesObj).forEach(function (prop) {
                    extractStyleParams(stylesObj[prop]).forEach(function (sub) {
                      if (!params.hasOwnProperty(sub)) {
                        missingSubs.add(sub);
                      }
                    });
                  });
                }
              });

              if (missingSubs.size) {
                var missingSubsArr = iteratorToArray(missingSubs.values());
                context.errors.push("state(\"".concat(metadata.name, "\", ...) must define default values for all the following style substitutions: ").concat(missingSubsArr.join(', ')));
              }
            }

            return {
              type: 0
              /* State */
              ,
              name: metadata.name,
              style: styleAst,
              options: astParams ? {
                params: astParams
              } : null
            };
          }
        }, {
          key: "visitTransition",
          value: function visitTransition(metadata, context) {
            context.queryCount = 0;
            context.depCount = 0;
            var animation = visitDslNode(this, normalizeAnimationEntry(metadata.animation), context);
            var matchers = parseTransitionExpr(metadata.expr, context.errors);
            return {
              type: 1
              /* Transition */
              ,
              matchers: matchers,
              animation: animation,
              queryCount: context.queryCount,
              depCount: context.depCount,
              options: normalizeAnimationOptions(metadata.options)
            };
          }
        }, {
          key: "visitSequence",
          value: function visitSequence(metadata, context) {
            var _this12 = this;

            return {
              type: 2
              /* Sequence */
              ,
              steps: metadata.steps.map(function (s) {
                return visitDslNode(_this12, s, context);
              }),
              options: normalizeAnimationOptions(metadata.options)
            };
          }
        }, {
          key: "visitGroup",
          value: function visitGroup(metadata, context) {
            var _this13 = this;

            var currentTime = context.currentTime;
            var furthestTime = 0;
            var steps = metadata.steps.map(function (step) {
              context.currentTime = currentTime;
              var innerAst = visitDslNode(_this13, step, context);
              furthestTime = Math.max(furthestTime, context.currentTime);
              return innerAst;
            });
            context.currentTime = furthestTime;
            return {
              type: 3
              /* Group */
              ,
              steps: steps,
              options: normalizeAnimationOptions(metadata.options)
            };
          }
        }, {
          key: "visitAnimate",
          value: function visitAnimate(metadata, context) {
            var timingAst = constructTimingAst(metadata.timings, context.errors);
            context.currentAnimateTimings = timingAst;
            var styleAst;
            var styleMetadata = metadata.styles ? metadata.styles : (0, _angular_animations__WEBPACK_IMPORTED_MODULE_0__.style)({});

            if (styleMetadata.type == 5
            /* Keyframes */
            ) {
              styleAst = this.visitKeyframes(styleMetadata, context);
            } else {
              var _styleMetadata = metadata.styles;
              var isEmpty = false;

              if (!_styleMetadata) {
                isEmpty = true;
                var newStyleData = {};

                if (timingAst.easing) {
                  newStyleData['easing'] = timingAst.easing;
                }

                _styleMetadata = (0, _angular_animations__WEBPACK_IMPORTED_MODULE_0__.style)(newStyleData);
              }

              context.currentTime += timingAst.duration + timingAst.delay;

              var _styleAst = this.visitStyle(_styleMetadata, context);

              _styleAst.isEmptyStep = isEmpty;
              styleAst = _styleAst;
            }

            context.currentAnimateTimings = null;
            return {
              type: 4
              /* Animate */
              ,
              timings: timingAst,
              style: styleAst,
              options: null
            };
          }
        }, {
          key: "visitStyle",
          value: function visitStyle(metadata, context) {
            var ast = this._makeStyleAst(metadata, context);

            this._validateStyleAst(ast, context);

            return ast;
          }
        }, {
          key: "_makeStyleAst",
          value: function _makeStyleAst(metadata, context) {
            var styles = [];

            if (Array.isArray(metadata.styles)) {
              metadata.styles.forEach(function (styleTuple) {
                if (typeof styleTuple == 'string') {
                  if (styleTuple == _angular_animations__WEBPACK_IMPORTED_MODULE_0__.AUTO_STYLE) {
                    styles.push(styleTuple);
                  } else {
                    context.errors.push("The provided style string value ".concat(styleTuple, " is not allowed."));
                  }
                } else {
                  styles.push(styleTuple);
                }
              });
            } else {
              styles.push(metadata.styles);
            }

            var containsDynamicStyles = false;
            var collectedEasing = null;
            styles.forEach(function (styleData) {
              if (isObject(styleData)) {
                var styleMap = styleData;
                var easing = styleMap['easing'];

                if (easing) {
                  collectedEasing = easing;
                  delete styleMap['easing'];
                }

                if (!containsDynamicStyles) {
                  for (var prop in styleMap) {
                    var value = styleMap[prop];

                    if (value.toString().indexOf(SUBSTITUTION_EXPR_START) >= 0) {
                      containsDynamicStyles = true;
                      break;
                    }
                  }
                }
              }
            });
            return {
              type: 6
              /* Style */
              ,
              styles: styles,
              easing: collectedEasing,
              offset: metadata.offset,
              containsDynamicStyles: containsDynamicStyles,
              options: null
            };
          }
        }, {
          key: "_validateStyleAst",
          value: function _validateStyleAst(ast, context) {
            var _this14 = this;

            var timings = context.currentAnimateTimings;
            var endTime = context.currentTime;
            var startTime = context.currentTime;

            if (timings && startTime > 0) {
              startTime -= timings.duration + timings.delay;
            }

            ast.styles.forEach(function (tuple) {
              if (typeof tuple == 'string') return;
              Object.keys(tuple).forEach(function (prop) {
                if (!_this14._driver.validateStyleProperty(prop)) {
                  context.errors.push("The provided animation property \"".concat(prop, "\" is not a supported CSS property for animations"));
                  return;
                }

                var collectedStyles = context.collectedStyles[context.currentQuerySelector];
                var collectedEntry = collectedStyles[prop];
                var updateCollectedStyle = true;

                if (collectedEntry) {
                  if (startTime != endTime && startTime >= collectedEntry.startTime && endTime <= collectedEntry.endTime) {
                    context.errors.push("The CSS property \"".concat(prop, "\" that exists between the times of \"").concat(collectedEntry.startTime, "ms\" and \"").concat(collectedEntry.endTime, "ms\" is also being animated in a parallel animation between the times of \"").concat(startTime, "ms\" and \"").concat(endTime, "ms\""));
                    updateCollectedStyle = false;
                  } // we always choose the smaller start time value since we
                  // want to have a record of the entire animation window where
                  // the style property is being animated in between


                  startTime = collectedEntry.startTime;
                }

                if (updateCollectedStyle) {
                  collectedStyles[prop] = {
                    startTime: startTime,
                    endTime: endTime
                  };
                }

                if (context.options) {
                  validateStyleParams(tuple[prop], context.options, context.errors);
                }
              });
            });
          }
        }, {
          key: "visitKeyframes",
          value: function visitKeyframes(metadata, context) {
            var _this15 = this;

            var ast = {
              type: 5
              /* Keyframes */
              ,
              styles: [],
              options: null
            };

            if (!context.currentAnimateTimings) {
              context.errors.push("keyframes() must be placed inside of a call to animate()");
              return ast;
            }

            var MAX_KEYFRAME_OFFSET = 1;
            var totalKeyframesWithOffsets = 0;
            var offsets = [];
            var offsetsOutOfOrder = false;
            var keyframesOutOfRange = false;
            var previousOffset = 0;
            var keyframes = metadata.steps.map(function (styles) {
              var style = _this15._makeStyleAst(styles, context);

              var offsetVal = style.offset != null ? style.offset : consumeOffset(style.styles);
              var offset = 0;

              if (offsetVal != null) {
                totalKeyframesWithOffsets++;
                offset = style.offset = offsetVal;
              }

              keyframesOutOfRange = keyframesOutOfRange || offset < 0 || offset > 1;
              offsetsOutOfOrder = offsetsOutOfOrder || offset < previousOffset;
              previousOffset = offset;
              offsets.push(offset);
              return style;
            });

            if (keyframesOutOfRange) {
              context.errors.push("Please ensure that all keyframe offsets are between 0 and 1");
            }

            if (offsetsOutOfOrder) {
              context.errors.push("Please ensure that all keyframe offsets are in order");
            }

            var length = metadata.steps.length;
            var generatedOffset = 0;

            if (totalKeyframesWithOffsets > 0 && totalKeyframesWithOffsets < length) {
              context.errors.push("Not all style() steps within the declared keyframes() contain offsets");
            } else if (totalKeyframesWithOffsets == 0) {
              generatedOffset = MAX_KEYFRAME_OFFSET / (length - 1);
            }

            var limit = length - 1;
            var currentTime = context.currentTime;
            var currentAnimateTimings = context.currentAnimateTimings;
            var animateDuration = currentAnimateTimings.duration;
            keyframes.forEach(function (kf, i) {
              var offset = generatedOffset > 0 ? i == limit ? 1 : generatedOffset * i : offsets[i];
              var durationUpToThisFrame = offset * animateDuration;
              context.currentTime = currentTime + currentAnimateTimings.delay + durationUpToThisFrame;
              currentAnimateTimings.duration = durationUpToThisFrame;

              _this15._validateStyleAst(kf, context);

              kf.offset = offset;
              ast.styles.push(kf);
            });
            return ast;
          }
        }, {
          key: "visitReference",
          value: function visitReference(metadata, context) {
            return {
              type: 8
              /* Reference */
              ,
              animation: visitDslNode(this, normalizeAnimationEntry(metadata.animation), context),
              options: normalizeAnimationOptions(metadata.options)
            };
          }
        }, {
          key: "visitAnimateChild",
          value: function visitAnimateChild(metadata, context) {
            context.depCount++;
            return {
              type: 9
              /* AnimateChild */
              ,
              options: normalizeAnimationOptions(metadata.options)
            };
          }
        }, {
          key: "visitAnimateRef",
          value: function visitAnimateRef(metadata, context) {
            return {
              type: 10
              /* AnimateRef */
              ,
              animation: this.visitReference(metadata.animation, context),
              options: normalizeAnimationOptions(metadata.options)
            };
          }
        }, {
          key: "visitQuery",
          value: function visitQuery(metadata, context) {
            var parentSelector = context.currentQuerySelector;
            var options = metadata.options || {};
            context.queryCount++;
            context.currentQuery = metadata;

            var _normalizeSelector = normalizeSelector(metadata.selector),
                _normalizeSelector2 = _slicedToArray(_normalizeSelector, 2),
                selector = _normalizeSelector2[0],
                includeSelf = _normalizeSelector2[1];

            context.currentQuerySelector = parentSelector.length ? parentSelector + ' ' + selector : selector;
            getOrSetAsInMap(context.collectedStyles, context.currentQuerySelector, {});
            var animation = visitDslNode(this, normalizeAnimationEntry(metadata.animation), context);
            context.currentQuery = null;
            context.currentQuerySelector = parentSelector;
            return {
              type: 11
              /* Query */
              ,
              selector: selector,
              limit: options.limit || 0,
              optional: !!options.optional,
              includeSelf: includeSelf,
              animation: animation,
              originalSelector: metadata.selector,
              options: normalizeAnimationOptions(metadata.options)
            };
          }
        }, {
          key: "visitStagger",
          value: function visitStagger(metadata, context) {
            if (!context.currentQuery) {
              context.errors.push("stagger() can only be used inside of query()");
            }

            var timings = metadata.timings === 'full' ? {
              duration: 0,
              delay: 0,
              easing: 'full'
            } : resolveTiming(metadata.timings, context.errors, true);
            return {
              type: 12
              /* Stagger */
              ,
              animation: visitDslNode(this, normalizeAnimationEntry(metadata.animation), context),
              timings: timings,
              options: null
            };
          }
        }]);

        return AnimationAstBuilderVisitor;
      }();

      function normalizeSelector(selector) {
        var hasAmpersand = selector.split(/\s*,\s*/).find(function (token) {
          return token == SELF_TOKEN;
        }) ? true : false;

        if (hasAmpersand) {
          selector = selector.replace(SELF_TOKEN_REGEX, '');
        } // the :enter and :leave selectors are filled in at runtime during timeline building


        selector = selector.replace(/@\*/g, NG_TRIGGER_SELECTOR).replace(/@\w+/g, function (match) {
          return NG_TRIGGER_SELECTOR + '-' + match.substr(1);
        }).replace(/:animating/g, NG_ANIMATING_SELECTOR);
        return [selector, hasAmpersand];
      }

      function normalizeParams(obj) {
        return obj ? copyObj(obj) : null;
      }

      var AnimationAstBuilderContext = function AnimationAstBuilderContext(errors) {
        _classCallCheck(this, AnimationAstBuilderContext);

        this.errors = errors;
        this.queryCount = 0;
        this.depCount = 0;
        this.currentTransition = null;
        this.currentQuery = null;
        this.currentQuerySelector = null;
        this.currentAnimateTimings = null;
        this.currentTime = 0;
        this.collectedStyles = {};
        this.options = null;
      };

      function consumeOffset(styles) {
        if (typeof styles == 'string') return null;
        var offset = null;

        if (Array.isArray(styles)) {
          styles.forEach(function (styleTuple) {
            if (isObject(styleTuple) && styleTuple.hasOwnProperty('offset')) {
              var obj = styleTuple;
              offset = parseFloat(obj['offset']);
              delete obj['offset'];
            }
          });
        } else if (isObject(styles) && styles.hasOwnProperty('offset')) {
          var obj = styles;
          offset = parseFloat(obj['offset']);
          delete obj['offset'];
        }

        return offset;
      }

      function isObject(value) {
        return !Array.isArray(value) && typeof value == 'object';
      }

      function constructTimingAst(value, errors) {
        var timings = null;

        if (value.hasOwnProperty('duration')) {
          timings = value;
        } else if (typeof value == 'number') {
          var duration = resolveTiming(value, errors).duration;
          return makeTimingAst(duration, 0, '');
        }

        var strValue = value;
        var isDynamic = strValue.split(/\s+/).some(function (v) {
          return v.charAt(0) == '{' && v.charAt(1) == '{';
        });

        if (isDynamic) {
          var ast = makeTimingAst(0, 0, '');
          ast.dynamic = true;
          ast.strValue = strValue;
          return ast;
        }

        timings = timings || resolveTiming(strValue, errors);
        return makeTimingAst(timings.duration, timings.delay, timings.easing);
      }

      function normalizeAnimationOptions(options) {
        if (options) {
          options = copyObj(options);

          if (options['params']) {
            options['params'] = normalizeParams(options['params']);
          }
        } else {
          options = {};
        }

        return options;
      }

      function makeTimingAst(duration, delay, easing) {
        return {
          duration: duration,
          delay: delay,
          easing: easing
        };
      }

      function createTimelineInstruction(element, keyframes, preStyleProps, postStyleProps, duration, delay) {
        var easing = arguments.length > 6 && arguments[6] !== undefined ? arguments[6] : null;
        var subTimeline = arguments.length > 7 && arguments[7] !== undefined ? arguments[7] : false;
        return {
          type: 1
          /* TimelineAnimation */
          ,
          element: element,
          keyframes: keyframes,
          preStyleProps: preStyleProps,
          postStyleProps: postStyleProps,
          duration: duration,
          delay: delay,
          totalTime: duration + delay,
          easing: easing,
          subTimeline: subTimeline
        };
      }

      var ElementInstructionMap = /*#__PURE__*/function () {
        function ElementInstructionMap() {
          _classCallCheck(this, ElementInstructionMap);

          this._map = new Map();
        }

        _createClass2(ElementInstructionMap, [{
          key: "consume",
          value: function consume(element) {
            var instructions = this._map.get(element);

            if (instructions) {
              this._map["delete"](element);
            } else {
              instructions = [];
            }

            return instructions;
          }
        }, {
          key: "append",
          value: function append(element, instructions) {
            var _existingInstructions;

            var existingInstructions = this._map.get(element);

            if (!existingInstructions) {
              this._map.set(element, existingInstructions = []);
            }

            (_existingInstructions = existingInstructions).push.apply(_existingInstructions, _toConsumableArray(instructions));
          }
        }, {
          key: "has",
          value: function has(element) {
            return this._map.has(element);
          }
        }, {
          key: "clear",
          value: function clear() {
            this._map.clear();
          }
        }]);

        return ElementInstructionMap;
      }();
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */


      var ONE_FRAME_IN_MILLISECONDS = 1;
      var ENTER_TOKEN = ':enter';
      var ENTER_TOKEN_REGEX = /*#__PURE__*/new RegExp(ENTER_TOKEN, 'g');
      var LEAVE_TOKEN = ':leave';
      var LEAVE_TOKEN_REGEX = /*#__PURE__*/new RegExp(LEAVE_TOKEN, 'g');
      /*
       * The code within this file aims to generate web-animations-compatible keyframes from Angular's
       * animation DSL code.
       *
       * The code below will be converted from:
       *
       * ```
       * sequence([
       *   style({ opacity: 0 }),
       *   animate(1000, style({ opacity: 0 }))
       * ])
       * ```
       *
       * To:
       * ```
       * keyframes = [{ opacity: 0, offset: 0 }, { opacity: 1, offset: 1 }]
       * duration = 1000
       * delay = 0
       * easing = ''
       * ```
       *
       * For this operation to cover the combination of animation verbs (style, animate, group, etc...) a
       * combination of prototypical inheritance, AST traversal and merge-sort-like algorithms are used.
       *
       * [AST Traversal]
       * Each of the animation verbs, when executed, will return an string-map object representing what
       * type of action it is (style, animate, group, etc...) and the data associated with it. This means
       * that when functional composition mix of these functions is evaluated (like in the example above)
       * then it will end up producing a tree of objects representing the animation itself.
       *
       * When this animation object tree is processed by the visitor code below it will visit each of the
       * verb statements within the visitor. And during each visit it will build the context of the
       * animation keyframes by interacting with the `TimelineBuilder`.
       *
       * [TimelineBuilder]
       * This class is responsible for tracking the styles and building a series of keyframe objects for a
       * timeline between a start and end time. The builder starts off with an initial timeline and each
       * time the AST comes across a `group()`, `keyframes()` or a combination of the two wihtin a
       * `sequence()` then it will generate a sub timeline for each step as well as a new one after
       * they are complete.
       *
       * As the AST is traversed, the timing state on each of the timelines will be incremented. If a sub
       * timeline was created (based on one of the cases above) then the parent timeline will attempt to
       * merge the styles used within the sub timelines into itself (only with group() this will happen).
       * This happens with a merge operation (much like how the merge works in mergesort) and it will only
       * copy the most recently used styles from the sub timelines into the parent timeline. This ensures
       * that if the styles are used later on in another phase of the animation then they will be the most
       * up-to-date values.
       *
       * [How Missing Styles Are Updated]
       * Each timeline has a `backFill` property which is responsible for filling in new styles into
       * already processed keyframes if a new style shows up later within the animation sequence.
       *
       * ```
       * sequence([
       *   style({ width: 0 }),
       *   animate(1000, style({ width: 100 })),
       *   animate(1000, style({ width: 200 })),
       *   animate(1000, style({ width: 300 }))
       *   animate(1000, style({ width: 400, height: 400 })) // notice how `height` doesn't exist anywhere
       * else
       * ])
       * ```
       *
       * What is happening here is that the `height` value is added later in the sequence, but is missing
       * from all previous animation steps. Therefore when a keyframe is created it would also be missing
       * from all previous keyframes up until where it is first used. For the timeline keyframe generation
       * to properly fill in the style it will place the previous value (the value from the parent
       * timeline) or a default value of `*` into the backFill object. Given that each of the keyframe
       * styles are objects that prototypically inhert from the backFill object, this means that if a
       * value is added into the backFill then it will automatically propagate any missing values to all
       * keyframes. Therefore the missing `height` value will be properly filled into the already
       * processed keyframes.
       *
       * When a sub-timeline is created it will have its own backFill property. This is done so that
       * styles present within the sub-timeline do not accidentally seep into the previous/future timeline
       * keyframes
       *
       * (For prototypically-inherited contents to be detected a `for(i in obj)` loop must be used.)
       *
       * [Validation]
       * The code in this file is not responsible for validation. That functionality happens with within
       * the `AnimationValidatorVisitor` code.
       */

      function buildAnimationTimelines(driver, rootElement, ast, enterClassName, leaveClassName) {
        var startingStyles = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : {};
        var finalStyles = arguments.length > 6 && arguments[6] !== undefined ? arguments[6] : {};
        var options = arguments.length > 7 ? arguments[7] : undefined;
        var subInstructions = arguments.length > 8 ? arguments[8] : undefined;
        var errors = arguments.length > 9 && arguments[9] !== undefined ? arguments[9] : [];
        return new AnimationTimelineBuilderVisitor().buildKeyframes(driver, rootElement, ast, enterClassName, leaveClassName, startingStyles, finalStyles, options, subInstructions, errors);
      }

      var AnimationTimelineBuilderVisitor = /*#__PURE__*/function () {
        function AnimationTimelineBuilderVisitor() {
          _classCallCheck(this, AnimationTimelineBuilderVisitor);
        }

        _createClass2(AnimationTimelineBuilderVisitor, [{
          key: "buildKeyframes",
          value: function buildKeyframes(driver, rootElement, ast, enterClassName, leaveClassName, startingStyles, finalStyles, options, subInstructions) {
            var errors = arguments.length > 9 && arguments[9] !== undefined ? arguments[9] : [];
            subInstructions = subInstructions || new ElementInstructionMap();
            var context = new AnimationTimelineContext(driver, rootElement, subInstructions, enterClassName, leaveClassName, errors, []);
            context.options = options;
            context.currentTimeline.setStyles([startingStyles], null, context.errors, options);
            visitDslNode(this, ast, context); // this checks to see if an actual animation happened

            var timelines = context.timelines.filter(function (timeline) {
              return timeline.containsAnimation();
            });

            if (timelines.length && Object.keys(finalStyles).length) {
              var tl = timelines[timelines.length - 1];

              if (!tl.allowOnlyTimelineStyles()) {
                tl.setStyles([finalStyles], null, context.errors, options);
              }
            }

            return timelines.length ? timelines.map(function (timeline) {
              return timeline.buildKeyframes();
            }) : [createTimelineInstruction(rootElement, [], [], [], 0, 0, '', false)];
          }
        }, {
          key: "visitTrigger",
          value: function visitTrigger(ast, context) {// these values are not visited in this AST
          }
        }, {
          key: "visitState",
          value: function visitState(ast, context) {// these values are not visited in this AST
          }
        }, {
          key: "visitTransition",
          value: function visitTransition(ast, context) {// these values are not visited in this AST
          }
        }, {
          key: "visitAnimateChild",
          value: function visitAnimateChild(ast, context) {
            var elementInstructions = context.subInstructions.consume(context.element);

            if (elementInstructions) {
              var innerContext = context.createSubContext(ast.options);
              var startTime = context.currentTimeline.currentTime;

              var endTime = this._visitSubInstructions(elementInstructions, innerContext, innerContext.options);

              if (startTime != endTime) {
                // we do this on the upper context because we created a sub context for
                // the sub child animations
                context.transformIntoNewTimeline(endTime);
              }
            }

            context.previousNode = ast;
          }
        }, {
          key: "visitAnimateRef",
          value: function visitAnimateRef(ast, context) {
            var innerContext = context.createSubContext(ast.options);
            innerContext.transformIntoNewTimeline();
            this.visitReference(ast.animation, innerContext);
            context.transformIntoNewTimeline(innerContext.currentTimeline.currentTime);
            context.previousNode = ast;
          }
        }, {
          key: "_visitSubInstructions",
          value: function _visitSubInstructions(instructions, context, options) {
            var startTime = context.currentTimeline.currentTime;
            var furthestTime = startTime; // this is a special-case for when a user wants to skip a sub
            // animation from being fired entirely.

            var duration = options.duration != null ? resolveTimingValue(options.duration) : null;
            var delay = options.delay != null ? resolveTimingValue(options.delay) : null;

            if (duration !== 0) {
              instructions.forEach(function (instruction) {
                var instructionTimings = context.appendInstructionToTimeline(instruction, duration, delay);
                furthestTime = Math.max(furthestTime, instructionTimings.duration + instructionTimings.delay);
              });
            }

            return furthestTime;
          }
        }, {
          key: "visitReference",
          value: function visitReference(ast, context) {
            context.updateOptions(ast.options, true);
            visitDslNode(this, ast.animation, context);
            context.previousNode = ast;
          }
        }, {
          key: "visitSequence",
          value: function visitSequence(ast, context) {
            var _this16 = this;

            var subContextCount = context.subContextCount;
            var ctx = context;
            var options = ast.options;

            if (options && (options.params || options.delay)) {
              ctx = context.createSubContext(options);
              ctx.transformIntoNewTimeline();

              if (options.delay != null) {
                if (ctx.previousNode.type == 6
                /* Style */
                ) {
                  ctx.currentTimeline.snapshotCurrentStyles();
                  ctx.previousNode = DEFAULT_NOOP_PREVIOUS_NODE;
                }

                var delay = resolveTimingValue(options.delay);
                ctx.delayNextStep(delay);
              }
            }

            if (ast.steps.length) {
              ast.steps.forEach(function (s) {
                return visitDslNode(_this16, s, ctx);
              }); // this is here just incase the inner steps only contain or end with a style() call

              ctx.currentTimeline.applyStylesToKeyframe(); // this means that some animation function within the sequence
              // ended up creating a sub timeline (which means the current
              // timeline cannot overlap with the contents of the sequence)

              if (ctx.subContextCount > subContextCount) {
                ctx.transformIntoNewTimeline();
              }
            }

            context.previousNode = ast;
          }
        }, {
          key: "visitGroup",
          value: function visitGroup(ast, context) {
            var _this17 = this;

            var innerTimelines = [];
            var furthestTime = context.currentTimeline.currentTime;
            var delay = ast.options && ast.options.delay ? resolveTimingValue(ast.options.delay) : 0;
            ast.steps.forEach(function (s) {
              var innerContext = context.createSubContext(ast.options);

              if (delay) {
                innerContext.delayNextStep(delay);
              }

              visitDslNode(_this17, s, innerContext);
              furthestTime = Math.max(furthestTime, innerContext.currentTimeline.currentTime);
              innerTimelines.push(innerContext.currentTimeline);
            }); // this operation is run after the AST loop because otherwise
            // if the parent timeline's collected styles were updated then
            // it would pass in invalid data into the new-to-be forked items

            innerTimelines.forEach(function (timeline) {
              return context.currentTimeline.mergeTimelineCollectedStyles(timeline);
            });
            context.transformIntoNewTimeline(furthestTime);
            context.previousNode = ast;
          }
        }, {
          key: "_visitTiming",
          value: function _visitTiming(ast, context) {
            if (ast.dynamic) {
              var strValue = ast.strValue;
              var timingValue = context.params ? interpolateParams(strValue, context.params, context.errors) : strValue;
              return resolveTiming(timingValue, context.errors);
            } else {
              return {
                duration: ast.duration,
                delay: ast.delay,
                easing: ast.easing
              };
            }
          }
        }, {
          key: "visitAnimate",
          value: function visitAnimate(ast, context) {
            var timings = context.currentAnimateTimings = this._visitTiming(ast.timings, context);

            var timeline = context.currentTimeline;

            if (timings.delay) {
              context.incrementTime(timings.delay);
              timeline.snapshotCurrentStyles();
            }

            var style = ast.style;

            if (style.type == 5
            /* Keyframes */
            ) {
              this.visitKeyframes(style, context);
            } else {
              context.incrementTime(timings.duration);
              this.visitStyle(style, context);
              timeline.applyStylesToKeyframe();
            }

            context.currentAnimateTimings = null;
            context.previousNode = ast;
          }
        }, {
          key: "visitStyle",
          value: function visitStyle(ast, context) {
            var timeline = context.currentTimeline;
            var timings = context.currentAnimateTimings; // this is a special case for when a style() call
            // directly follows  an animate() call (but not inside of an animate() call)

            if (!timings && timeline.getCurrentStyleProperties().length) {
              timeline.forwardFrame();
            }

            var easing = timings && timings.easing || ast.easing;

            if (ast.isEmptyStep) {
              timeline.applyEmptyStep(easing);
            } else {
              timeline.setStyles(ast.styles, easing, context.errors, context.options);
            }

            context.previousNode = ast;
          }
        }, {
          key: "visitKeyframes",
          value: function visitKeyframes(ast, context) {
            var currentAnimateTimings = context.currentAnimateTimings;
            var startTime = context.currentTimeline.duration;
            var duration = currentAnimateTimings.duration;
            var innerContext = context.createSubContext();
            var innerTimeline = innerContext.currentTimeline;
            innerTimeline.easing = currentAnimateTimings.easing;
            ast.styles.forEach(function (step) {
              var offset = step.offset || 0;
              innerTimeline.forwardTime(offset * duration);
              innerTimeline.setStyles(step.styles, step.easing, context.errors, context.options);
              innerTimeline.applyStylesToKeyframe();
            }); // this will ensure that the parent timeline gets all the styles from
            // the child even if the new timeline below is not used

            context.currentTimeline.mergeTimelineCollectedStyles(innerTimeline); // we do this because the window between this timeline and the sub timeline
            // should ensure that the styles within are exactly the same as they were before

            context.transformIntoNewTimeline(startTime + duration);
            context.previousNode = ast;
          }
        }, {
          key: "visitQuery",
          value: function visitQuery(ast, context) {
            var _this18 = this;

            // in the event that the first step before this is a style step we need
            // to ensure the styles are applied before the children are animated
            var startTime = context.currentTimeline.currentTime;
            var options = ast.options || {};
            var delay = options.delay ? resolveTimingValue(options.delay) : 0;

            if (delay && (context.previousNode.type === 6
            /* Style */
            || startTime == 0 && context.currentTimeline.getCurrentStyleProperties().length)) {
              context.currentTimeline.snapshotCurrentStyles();
              context.previousNode = DEFAULT_NOOP_PREVIOUS_NODE;
            }

            var furthestTime = startTime;
            var elms = context.invokeQuery(ast.selector, ast.originalSelector, ast.limit, ast.includeSelf, options.optional ? true : false, context.errors);
            context.currentQueryTotal = elms.length;
            var sameElementTimeline = null;
            elms.forEach(function (element, i) {
              context.currentQueryIndex = i;
              var innerContext = context.createSubContext(ast.options, element);

              if (delay) {
                innerContext.delayNextStep(delay);
              }

              if (element === context.element) {
                sameElementTimeline = innerContext.currentTimeline;
              }

              visitDslNode(_this18, ast.animation, innerContext); // this is here just incase the inner steps only contain or end
              // with a style() call (which is here to signal that this is a preparatory
              // call to style an element before it is animated again)

              innerContext.currentTimeline.applyStylesToKeyframe();
              var endTime = innerContext.currentTimeline.currentTime;
              furthestTime = Math.max(furthestTime, endTime);
            });
            context.currentQueryIndex = 0;
            context.currentQueryTotal = 0;
            context.transformIntoNewTimeline(furthestTime);

            if (sameElementTimeline) {
              context.currentTimeline.mergeTimelineCollectedStyles(sameElementTimeline);
              context.currentTimeline.snapshotCurrentStyles();
            }

            context.previousNode = ast;
          }
        }, {
          key: "visitStagger",
          value: function visitStagger(ast, context) {
            var parentContext = context.parentContext;
            var tl = context.currentTimeline;
            var timings = ast.timings;
            var duration = Math.abs(timings.duration);
            var maxTime = duration * (context.currentQueryTotal - 1);
            var delay = duration * context.currentQueryIndex;
            var staggerTransformer = timings.duration < 0 ? 'reverse' : timings.easing;

            switch (staggerTransformer) {
              case 'reverse':
                delay = maxTime - delay;
                break;

              case 'full':
                delay = parentContext.currentStaggerTime;
                break;
            }

            var timeline = context.currentTimeline;

            if (delay) {
              timeline.delayNextStep(delay);
            }

            var startingTime = timeline.currentTime;
            visitDslNode(this, ast.animation, context);
            context.previousNode = ast; // time = duration + delay
            // the reason why this computation is so complex is because
            // the inner timeline may either have a delay value or a stretched
            // keyframe depending on if a subtimeline is not used or is used.

            parentContext.currentStaggerTime = tl.currentTime - startingTime + (tl.startTime - parentContext.currentTimeline.startTime);
          }
        }]);

        return AnimationTimelineBuilderVisitor;
      }();

      var DEFAULT_NOOP_PREVIOUS_NODE = {};

      var AnimationTimelineContext = /*#__PURE__*/function () {
        function AnimationTimelineContext(_driver, element, subInstructions, _enterClassName, _leaveClassName, errors, timelines, initialTimeline) {
          _classCallCheck(this, AnimationTimelineContext);

          this._driver = _driver;
          this.element = element;
          this.subInstructions = subInstructions;
          this._enterClassName = _enterClassName;
          this._leaveClassName = _leaveClassName;
          this.errors = errors;
          this.timelines = timelines;
          this.parentContext = null;
          this.currentAnimateTimings = null;
          this.previousNode = DEFAULT_NOOP_PREVIOUS_NODE;
          this.subContextCount = 0;
          this.options = {};
          this.currentQueryIndex = 0;
          this.currentQueryTotal = 0;
          this.currentStaggerTime = 0;
          this.currentTimeline = initialTimeline || new TimelineBuilder(this._driver, element, 0);
          timelines.push(this.currentTimeline);
        }

        _createClass2(AnimationTimelineContext, [{
          key: "params",
          get: function get() {
            return this.options.params;
          }
        }, {
          key: "updateOptions",
          value: function updateOptions(options, skipIfExists) {
            var _this19 = this;

            if (!options) return;
            var newOptions = options;
            var optionsToUpdate = this.options; // NOTE: this will get patched up when other animation methods support duration overrides

            if (newOptions.duration != null) {
              optionsToUpdate.duration = resolveTimingValue(newOptions.duration);
            }

            if (newOptions.delay != null) {
              optionsToUpdate.delay = resolveTimingValue(newOptions.delay);
            }

            var newParams = newOptions.params;

            if (newParams) {
              var paramsToUpdate = optionsToUpdate.params;

              if (!paramsToUpdate) {
                paramsToUpdate = this.options.params = {};
              }

              Object.keys(newParams).forEach(function (name) {
                if (!skipIfExists || !paramsToUpdate.hasOwnProperty(name)) {
                  paramsToUpdate[name] = interpolateParams(newParams[name], paramsToUpdate, _this19.errors);
                }
              });
            }
          }
        }, {
          key: "_copyOptions",
          value: function _copyOptions() {
            var options = {};

            if (this.options) {
              var oldParams = this.options.params;

              if (oldParams) {
                var params = options['params'] = {};
                Object.keys(oldParams).forEach(function (name) {
                  params[name] = oldParams[name];
                });
              }
            }

            return options;
          }
        }, {
          key: "createSubContext",
          value: function createSubContext() {
            var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
            var element = arguments.length > 1 ? arguments[1] : undefined;
            var newTime = arguments.length > 2 ? arguments[2] : undefined;
            var target = element || this.element;
            var context = new AnimationTimelineContext(this._driver, target, this.subInstructions, this._enterClassName, this._leaveClassName, this.errors, this.timelines, this.currentTimeline.fork(target, newTime || 0));
            context.previousNode = this.previousNode;
            context.currentAnimateTimings = this.currentAnimateTimings;
            context.options = this._copyOptions();
            context.updateOptions(options);
            context.currentQueryIndex = this.currentQueryIndex;
            context.currentQueryTotal = this.currentQueryTotal;
            context.parentContext = this;
            this.subContextCount++;
            return context;
          }
        }, {
          key: "transformIntoNewTimeline",
          value: function transformIntoNewTimeline(newTime) {
            this.previousNode = DEFAULT_NOOP_PREVIOUS_NODE;
            this.currentTimeline = this.currentTimeline.fork(this.element, newTime);
            this.timelines.push(this.currentTimeline);
            return this.currentTimeline;
          }
        }, {
          key: "appendInstructionToTimeline",
          value: function appendInstructionToTimeline(instruction, duration, delay) {
            var updatedTimings = {
              duration: duration != null ? duration : instruction.duration,
              delay: this.currentTimeline.currentTime + (delay != null ? delay : 0) + instruction.delay,
              easing: ''
            };
            var builder = new SubTimelineBuilder(this._driver, instruction.element, instruction.keyframes, instruction.preStyleProps, instruction.postStyleProps, updatedTimings, instruction.stretchStartingKeyframe);
            this.timelines.push(builder);
            return updatedTimings;
          }
        }, {
          key: "incrementTime",
          value: function incrementTime(time) {
            this.currentTimeline.forwardTime(this.currentTimeline.duration + time);
          }
        }, {
          key: "delayNextStep",
          value: function delayNextStep(delay) {
            // negative delays are not yet supported
            if (delay > 0) {
              this.currentTimeline.delayNextStep(delay);
            }
          }
        }, {
          key: "invokeQuery",
          value: function invokeQuery(selector, originalSelector, limit, includeSelf, optional, errors) {
            var results = [];

            if (includeSelf) {
              results.push(this.element);
            }

            if (selector.length > 0) {
              // if :self is only used then the selector is empty
              selector = selector.replace(ENTER_TOKEN_REGEX, '.' + this._enterClassName);
              selector = selector.replace(LEAVE_TOKEN_REGEX, '.' + this._leaveClassName);
              var multi = limit != 1;

              var elements = this._driver.query(this.element, selector, multi);

              if (limit !== 0) {
                elements = limit < 0 ? elements.slice(elements.length + limit, elements.length) : elements.slice(0, limit);
              }

              results.push.apply(results, _toConsumableArray(elements));
            }

            if (!optional && results.length == 0) {
              errors.push("`query(\"".concat(originalSelector, "\")` returned zero elements. (Use `query(\"").concat(originalSelector, "\", { optional: true })` if you wish to allow this.)"));
            }

            return results;
          }
        }]);

        return AnimationTimelineContext;
      }();

      var TimelineBuilder = /*#__PURE__*/function () {
        function TimelineBuilder(_driver, element, startTime, _elementTimelineStylesLookup) {
          _classCallCheck(this, TimelineBuilder);

          this._driver = _driver;
          this.element = element;
          this.startTime = startTime;
          this._elementTimelineStylesLookup = _elementTimelineStylesLookup;
          this.duration = 0;
          this._previousKeyframe = {};
          this._currentKeyframe = {};
          this._keyframes = new Map();
          this._styleSummary = {};
          this._pendingStyles = {};
          this._backFill = {};
          this._currentEmptyStepKeyframe = null;

          if (!this._elementTimelineStylesLookup) {
            this._elementTimelineStylesLookup = new Map();
          }

          this._localTimelineStyles = Object.create(this._backFill, {});
          this._globalTimelineStyles = this._elementTimelineStylesLookup.get(element);

          if (!this._globalTimelineStyles) {
            this._globalTimelineStyles = this._localTimelineStyles;

            this._elementTimelineStylesLookup.set(element, this._localTimelineStyles);
          }

          this._loadKeyframe();
        }

        _createClass2(TimelineBuilder, [{
          key: "containsAnimation",
          value: function containsAnimation() {
            switch (this._keyframes.size) {
              case 0:
                return false;

              case 1:
                return this.getCurrentStyleProperties().length > 0;

              default:
                return true;
            }
          }
        }, {
          key: "getCurrentStyleProperties",
          value: function getCurrentStyleProperties() {
            return Object.keys(this._currentKeyframe);
          }
        }, {
          key: "currentTime",
          get: function get() {
            return this.startTime + this.duration;
          }
        }, {
          key: "delayNextStep",
          value: function delayNextStep(delay) {
            // in the event that a style() step is placed right before a stagger()
            // and that style() step is the very first style() value in the animation
            // then we need to make a copy of the keyframe [0, copy, 1] so that the delay
            // properly applies the style() values to work with the stagger...
            var hasPreStyleStep = this._keyframes.size == 1 && Object.keys(this._pendingStyles).length;

            if (this.duration || hasPreStyleStep) {
              this.forwardTime(this.currentTime + delay);

              if (hasPreStyleStep) {
                this.snapshotCurrentStyles();
              }
            } else {
              this.startTime += delay;
            }
          }
        }, {
          key: "fork",
          value: function fork(element, currentTime) {
            this.applyStylesToKeyframe();
            return new TimelineBuilder(this._driver, element, currentTime || this.currentTime, this._elementTimelineStylesLookup);
          }
        }, {
          key: "_loadKeyframe",
          value: function _loadKeyframe() {
            if (this._currentKeyframe) {
              this._previousKeyframe = this._currentKeyframe;
            }

            this._currentKeyframe = this._keyframes.get(this.duration);

            if (!this._currentKeyframe) {
              this._currentKeyframe = Object.create(this._backFill, {});

              this._keyframes.set(this.duration, this._currentKeyframe);
            }
          }
        }, {
          key: "forwardFrame",
          value: function forwardFrame() {
            this.duration += ONE_FRAME_IN_MILLISECONDS;

            this._loadKeyframe();
          }
        }, {
          key: "forwardTime",
          value: function forwardTime(time) {
            this.applyStylesToKeyframe();
            this.duration = time;

            this._loadKeyframe();
          }
        }, {
          key: "_updateStyle",
          value: function _updateStyle(prop, value) {
            this._localTimelineStyles[prop] = value;
            this._globalTimelineStyles[prop] = value;
            this._styleSummary[prop] = {
              time: this.currentTime,
              value: value
            };
          }
        }, {
          key: "allowOnlyTimelineStyles",
          value: function allowOnlyTimelineStyles() {
            return this._currentEmptyStepKeyframe !== this._currentKeyframe;
          }
        }, {
          key: "applyEmptyStep",
          value: function applyEmptyStep(easing) {
            var _this20 = this;

            if (easing) {
              this._previousKeyframe['easing'] = easing;
            } // special case for animate(duration):
            // all missing styles are filled with a `*` value then
            // if any destination styles are filled in later on the same
            // keyframe then they will override the overridden styles
            // We use `_globalTimelineStyles` here because there may be
            // styles in previous keyframes that are not present in this timeline


            Object.keys(this._globalTimelineStyles).forEach(function (prop) {
              _this20._backFill[prop] = _this20._globalTimelineStyles[prop] || _angular_animations__WEBPACK_IMPORTED_MODULE_0__.AUTO_STYLE;
              _this20._currentKeyframe[prop] = _angular_animations__WEBPACK_IMPORTED_MODULE_0__.AUTO_STYLE;
            });
            this._currentEmptyStepKeyframe = this._currentKeyframe;
          }
        }, {
          key: "setStyles",
          value: function setStyles(input, easing, errors, options) {
            var _this21 = this;

            if (easing) {
              this._previousKeyframe['easing'] = easing;
            }

            var params = options && options.params || {};
            var styles = flattenStyles(input, this._globalTimelineStyles);
            Object.keys(styles).forEach(function (prop) {
              var val = interpolateParams(styles[prop], params, errors);
              _this21._pendingStyles[prop] = val;

              if (!_this21._localTimelineStyles.hasOwnProperty(prop)) {
                _this21._backFill[prop] = _this21._globalTimelineStyles.hasOwnProperty(prop) ? _this21._globalTimelineStyles[prop] : _angular_animations__WEBPACK_IMPORTED_MODULE_0__.AUTO_STYLE;
              }

              _this21._updateStyle(prop, val);
            });
          }
        }, {
          key: "applyStylesToKeyframe",
          value: function applyStylesToKeyframe() {
            var _this22 = this;

            var styles = this._pendingStyles;
            var props = Object.keys(styles);
            if (props.length == 0) return;
            this._pendingStyles = {};
            props.forEach(function (prop) {
              var val = styles[prop];
              _this22._currentKeyframe[prop] = val;
            });
            Object.keys(this._localTimelineStyles).forEach(function (prop) {
              if (!_this22._currentKeyframe.hasOwnProperty(prop)) {
                _this22._currentKeyframe[prop] = _this22._localTimelineStyles[prop];
              }
            });
          }
        }, {
          key: "snapshotCurrentStyles",
          value: function snapshotCurrentStyles() {
            var _this23 = this;

            Object.keys(this._localTimelineStyles).forEach(function (prop) {
              var val = _this23._localTimelineStyles[prop];
              _this23._pendingStyles[prop] = val;

              _this23._updateStyle(prop, val);
            });
          }
        }, {
          key: "getFinalKeyframe",
          value: function getFinalKeyframe() {
            return this._keyframes.get(this.duration);
          }
        }, {
          key: "properties",
          get: function get() {
            var properties = [];

            for (var prop in this._currentKeyframe) {
              properties.push(prop);
            }

            return properties;
          }
        }, {
          key: "mergeTimelineCollectedStyles",
          value: function mergeTimelineCollectedStyles(timeline) {
            var _this24 = this;

            Object.keys(timeline._styleSummary).forEach(function (prop) {
              var details0 = _this24._styleSummary[prop];
              var details1 = timeline._styleSummary[prop];

              if (!details0 || details1.time > details0.time) {
                _this24._updateStyle(prop, details1.value);
              }
            });
          }
        }, {
          key: "buildKeyframes",
          value: function buildKeyframes() {
            var _this25 = this;

            this.applyStylesToKeyframe();
            var preStyleProps = new Set();
            var postStyleProps = new Set();
            var isEmpty = this._keyframes.size === 1 && this.duration === 0;
            var finalKeyframes = [];

            this._keyframes.forEach(function (keyframe, time) {
              var finalKeyframe = copyStyles(keyframe, true);
              Object.keys(finalKeyframe).forEach(function (prop) {
                var value = finalKeyframe[prop];

                if (value == _angular_animations__WEBPACK_IMPORTED_MODULE_0__["ɵPRE_STYLE"]) {
                  preStyleProps.add(prop);
                } else if (value == _angular_animations__WEBPACK_IMPORTED_MODULE_0__.AUTO_STYLE) {
                  postStyleProps.add(prop);
                }
              });

              if (!isEmpty) {
                finalKeyframe['offset'] = time / _this25.duration;
              }

              finalKeyframes.push(finalKeyframe);
            });

            var preProps = preStyleProps.size ? iteratorToArray(preStyleProps.values()) : [];
            var postProps = postStyleProps.size ? iteratorToArray(postStyleProps.values()) : []; // special case for a 0-second animation (which is designed just to place styles onscreen)

            if (isEmpty) {
              var kf0 = finalKeyframes[0];
              var kf1 = copyObj(kf0);
              kf0['offset'] = 0;
              kf1['offset'] = 1;
              finalKeyframes = [kf0, kf1];
            }

            return createTimelineInstruction(this.element, finalKeyframes, preProps, postProps, this.duration, this.startTime, this.easing, false);
          }
        }]);

        return TimelineBuilder;
      }();

      var SubTimelineBuilder = /*#__PURE__*/function (_TimelineBuilder) {
        _inherits(SubTimelineBuilder, _TimelineBuilder);

        var _super2 = _createSuper(SubTimelineBuilder);

        function SubTimelineBuilder(driver, element, keyframes, preStyleProps, postStyleProps, timings) {
          var _this26;

          var _stretchStartingKeyframe = arguments.length > 6 && arguments[6] !== undefined ? arguments[6] : false;

          _classCallCheck(this, SubTimelineBuilder);

          _this26 = _super2.call(this, driver, element, timings.delay);
          _this26.element = element;
          _this26.keyframes = keyframes;
          _this26.preStyleProps = preStyleProps;
          _this26.postStyleProps = postStyleProps;
          _this26._stretchStartingKeyframe = _stretchStartingKeyframe;
          _this26.timings = {
            duration: timings.duration,
            delay: timings.delay,
            easing: timings.easing
          };
          return _this26;
        }

        _createClass2(SubTimelineBuilder, [{
          key: "containsAnimation",
          value: function containsAnimation() {
            return this.keyframes.length > 1;
          }
        }, {
          key: "buildKeyframes",
          value: function buildKeyframes() {
            var keyframes = this.keyframes;
            var _this$timings = this.timings,
                delay = _this$timings.delay,
                duration = _this$timings.duration,
                easing = _this$timings.easing;

            if (this._stretchStartingKeyframe && delay) {
              var newKeyframes = [];
              var totalTime = duration + delay;
              var startingGap = delay / totalTime; // the original starting keyframe now starts once the delay is done

              var newFirstKeyframe = copyStyles(keyframes[0], false);
              newFirstKeyframe['offset'] = 0;
              newKeyframes.push(newFirstKeyframe);
              var oldFirstKeyframe = copyStyles(keyframes[0], false);
              oldFirstKeyframe['offset'] = roundOffset(startingGap);
              newKeyframes.push(oldFirstKeyframe);
              /*
                When the keyframe is stretched then it means that the delay before the animation
                starts is gone. Instead the first keyframe is placed at the start of the animation
                and it is then copied to where it starts when the original delay is over. This basically
                means nothing animates during that delay, but the styles are still renderered. For this
                to work the original offset values that exist in the original keyframes must be "warped"
                so that they can take the new keyframe + delay into account.
                        delay=1000, duration=1000, keyframes = 0 .5 1
                        turns into
                        delay=0, duration=2000, keyframes = 0 .33 .66 1
               */
              // offsets between 1 ... n -1 are all warped by the keyframe stretch

              var limit = keyframes.length - 1;

              for (var i = 1; i <= limit; i++) {
                var kf = copyStyles(keyframes[i], false);
                var oldOffset = kf['offset'];
                var timeAtKeyframe = delay + oldOffset * duration;
                kf['offset'] = roundOffset(timeAtKeyframe / totalTime);
                newKeyframes.push(kf);
              } // the new starting keyframe should be added at the start


              duration = totalTime;
              delay = 0;
              easing = '';
              keyframes = newKeyframes;
            }

            return createTimelineInstruction(this.element, keyframes, this.preStyleProps, this.postStyleProps, duration, delay, easing, true);
          }
        }]);

        return SubTimelineBuilder;
      }(TimelineBuilder);

      function roundOffset(offset) {
        var decimalPoints = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 3;
        var mult = Math.pow(10, decimalPoints - 1);
        return Math.round(offset * mult) / mult;
      }

      function flattenStyles(input, allStyles) {
        var styles = {};
        var allProperties;
        input.forEach(function (token) {
          if (token === '*') {
            allProperties = allProperties || Object.keys(allStyles);
            allProperties.forEach(function (prop) {
              styles[prop] = _angular_animations__WEBPACK_IMPORTED_MODULE_0__.AUTO_STYLE;
            });
          } else {
            copyStyles(token, false, styles);
          }
        });
        return styles;
      }

      var Animation = /*#__PURE__*/function () {
        function Animation(_driver, input) {
          _classCallCheck(this, Animation);

          this._driver = _driver;
          var errors = [];
          var ast = buildAnimationAst(_driver, input, errors);

          if (errors.length) {
            var errorMessage = "animation validation failed:\n".concat(errors.join('\n'));
            throw new Error(errorMessage);
          }

          this._animationAst = ast;
        }

        _createClass2(Animation, [{
          key: "buildTimelines",
          value: function buildTimelines(element, startingStyles, destinationStyles, options, subInstructions) {
            var start = Array.isArray(startingStyles) ? normalizeStyles(startingStyles) : startingStyles;
            var dest = Array.isArray(destinationStyles) ? normalizeStyles(destinationStyles) : destinationStyles;
            var errors = [];
            subInstructions = subInstructions || new ElementInstructionMap();
            var result = buildAnimationTimelines(this._driver, element, this._animationAst, ENTER_CLASSNAME, LEAVE_CLASSNAME, start, dest, options, subInstructions, errors);

            if (errors.length) {
              var errorMessage = "animation building failed:\n".concat(errors.join('\n'));
              throw new Error(errorMessage);
            }

            return result;
          }
        }]);

        return Animation;
      }();
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * @publicApi
       */


      var AnimationStyleNormalizer = function AnimationStyleNormalizer() {
        _classCallCheck(this, AnimationStyleNormalizer);
      };
      /**
       * @publicApi
       */


      var NoopAnimationStyleNormalizer = /*#__PURE__*/function () {
        function NoopAnimationStyleNormalizer() {
          _classCallCheck(this, NoopAnimationStyleNormalizer);
        }

        _createClass2(NoopAnimationStyleNormalizer, [{
          key: "normalizePropertyName",
          value: function normalizePropertyName(propertyName, errors) {
            return propertyName;
          }
        }, {
          key: "normalizeStyleValue",
          value: function normalizeStyleValue(userProvidedProperty, normalizedProperty, value, errors) {
            return value;
          }
        }]);

        return NoopAnimationStyleNormalizer;
      }();
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */


      var WebAnimationsStyleNormalizer = /*#__PURE__*/function (_AnimationStyleNormal) {
        _inherits(WebAnimationsStyleNormalizer, _AnimationStyleNormal);

        var _super3 = _createSuper(WebAnimationsStyleNormalizer);

        function WebAnimationsStyleNormalizer() {
          _classCallCheck(this, WebAnimationsStyleNormalizer);

          return _super3.apply(this, arguments);
        }

        _createClass2(WebAnimationsStyleNormalizer, [{
          key: "normalizePropertyName",
          value: function normalizePropertyName(propertyName, errors) {
            return dashCaseToCamelCase(propertyName);
          }
        }, {
          key: "normalizeStyleValue",
          value: function normalizeStyleValue(userProvidedProperty, normalizedProperty, value, errors) {
            var unit = '';
            var strVal = value.toString().trim();

            if (DIMENSIONAL_PROP_MAP[normalizedProperty] && value !== 0 && value !== '0') {
              if (typeof value === 'number') {
                unit = 'px';
              } else {
                var valAndSuffixMatch = value.match(/^[+-]?[\d\.]+([a-z]*)$/);

                if (valAndSuffixMatch && valAndSuffixMatch[1].length == 0) {
                  errors.push("Please provide a CSS unit value for ".concat(userProvidedProperty, ":").concat(value));
                }
              }
            }

            return strVal + unit;
          }
        }]);

        return WebAnimationsStyleNormalizer;
      }(AnimationStyleNormalizer);

      var ɵ0$1 = function ɵ0$1() {
        return makeBooleanMap('width,height,minWidth,minHeight,maxWidth,maxHeight,left,top,bottom,right,fontSize,outlineWidth,outlineOffset,paddingTop,paddingLeft,paddingBottom,paddingRight,marginTop,marginLeft,marginBottom,marginRight,borderRadius,borderWidth,borderTopWidth,borderLeftWidth,borderRightWidth,borderBottomWidth,textIndent,perspective'.split(','));
      };

      var DIMENSIONAL_PROP_MAP = /*#__PURE__*/ɵ0$1();

      function makeBooleanMap(keys) {
        var map = {};
        keys.forEach(function (key) {
          return map[key] = true;
        });
        return map;
      }

      function createTransitionInstruction(element, triggerName, fromState, toState, isRemovalTransition, fromStyles, toStyles, timelines, queriedElements, preStyleProps, postStyleProps, totalTime, errors) {
        return {
          type: 0
          /* TransitionAnimation */
          ,
          element: element,
          triggerName: triggerName,
          isRemovalTransition: isRemovalTransition,
          fromState: fromState,
          fromStyles: fromStyles,
          toState: toState,
          toStyles: toStyles,
          timelines: timelines,
          queriedElements: queriedElements,
          preStyleProps: preStyleProps,
          postStyleProps: postStyleProps,
          totalTime: totalTime,
          errors: errors
        };
      }

      var EMPTY_OBJECT = {};

      var AnimationTransitionFactory = /*#__PURE__*/function () {
        function AnimationTransitionFactory(_triggerName, ast, _stateStyles) {
          _classCallCheck(this, AnimationTransitionFactory);

          this._triggerName = _triggerName;
          this.ast = ast;
          this._stateStyles = _stateStyles;
        }

        _createClass2(AnimationTransitionFactory, [{
          key: "match",
          value: function match(currentState, nextState, element, params) {
            return oneOrMoreTransitionsMatch(this.ast.matchers, currentState, nextState, element, params);
          }
        }, {
          key: "buildStyles",
          value: function buildStyles(stateName, params, errors) {
            var backupStateStyler = this._stateStyles['*'];
            var stateStyler = this._stateStyles[stateName];
            var backupStyles = backupStateStyler ? backupStateStyler.buildStyles(params, errors) : {};
            return stateStyler ? stateStyler.buildStyles(params, errors) : backupStyles;
          }
        }, {
          key: "build",
          value: function build(driver, element, currentState, nextState, enterClassName, leaveClassName, currentOptions, nextOptions, subInstructions, skipAstBuild) {
            var errors = [];
            var transitionAnimationParams = this.ast.options && this.ast.options.params || EMPTY_OBJECT;
            var currentAnimationParams = currentOptions && currentOptions.params || EMPTY_OBJECT;
            var currentStateStyles = this.buildStyles(currentState, currentAnimationParams, errors);
            var nextAnimationParams = nextOptions && nextOptions.params || EMPTY_OBJECT;
            var nextStateStyles = this.buildStyles(nextState, nextAnimationParams, errors);
            var queriedElements = new Set();
            var preStyleMap = new Map();
            var postStyleMap = new Map();
            var isRemoval = nextState === 'void';
            var animationOptions = {
              params: Object.assign(Object.assign({}, transitionAnimationParams), nextAnimationParams)
            };
            var timelines = skipAstBuild ? [] : buildAnimationTimelines(driver, element, this.ast.animation, enterClassName, leaveClassName, currentStateStyles, nextStateStyles, animationOptions, subInstructions, errors);
            var totalTime = 0;
            timelines.forEach(function (tl) {
              totalTime = Math.max(tl.duration + tl.delay, totalTime);
            });

            if (errors.length) {
              return createTransitionInstruction(element, this._triggerName, currentState, nextState, isRemoval, currentStateStyles, nextStateStyles, [], [], preStyleMap, postStyleMap, totalTime, errors);
            }

            timelines.forEach(function (tl) {
              var elm = tl.element;
              var preProps = getOrSetAsInMap(preStyleMap, elm, {});
              tl.preStyleProps.forEach(function (prop) {
                return preProps[prop] = true;
              });
              var postProps = getOrSetAsInMap(postStyleMap, elm, {});
              tl.postStyleProps.forEach(function (prop) {
                return postProps[prop] = true;
              });

              if (elm !== element) {
                queriedElements.add(elm);
              }
            });
            var queriedElementsList = iteratorToArray(queriedElements.values());
            return createTransitionInstruction(element, this._triggerName, currentState, nextState, isRemoval, currentStateStyles, nextStateStyles, timelines, queriedElementsList, preStyleMap, postStyleMap, totalTime);
          }
        }]);

        return AnimationTransitionFactory;
      }();

      function oneOrMoreTransitionsMatch(matchFns, currentState, nextState, element, params) {
        return matchFns.some(function (fn) {
          return fn(currentState, nextState, element, params);
        });
      }

      var AnimationStateStyles = /*#__PURE__*/function () {
        function AnimationStateStyles(styles, defaultParams) {
          _classCallCheck(this, AnimationStateStyles);

          this.styles = styles;
          this.defaultParams = defaultParams;
        }

        _createClass2(AnimationStateStyles, [{
          key: "buildStyles",
          value: function buildStyles(params, errors) {
            var finalStyles = {};
            var combinedParams = copyObj(this.defaultParams);
            Object.keys(params).forEach(function (key) {
              var value = params[key];

              if (value != null) {
                combinedParams[key] = value;
              }
            });
            this.styles.styles.forEach(function (value) {
              if (typeof value !== 'string') {
                var styleObj = value;
                Object.keys(styleObj).forEach(function (prop) {
                  var val = styleObj[prop];

                  if (val.length > 1) {
                    val = interpolateParams(val, combinedParams, errors);
                  }

                  finalStyles[prop] = val;
                });
              }
            });
            return finalStyles;
          }
        }]);

        return AnimationStateStyles;
      }();
      /**
       * @publicApi
       */


      function buildTrigger(name, ast) {
        return new AnimationTrigger(name, ast);
      }
      /**
       * @publicApi
       */


      var AnimationTrigger = /*#__PURE__*/function () {
        function AnimationTrigger(name, ast) {
          var _this27 = this;

          _classCallCheck(this, AnimationTrigger);

          this.name = name;
          this.ast = ast;
          this.transitionFactories = [];
          this.states = {};
          ast.states.forEach(function (ast) {
            var defaultParams = ast.options && ast.options.params || {};
            _this27.states[ast.name] = new AnimationStateStyles(ast.style, defaultParams);
          });
          balanceProperties(this.states, 'true', '1');
          balanceProperties(this.states, 'false', '0');
          ast.transitions.forEach(function (ast) {
            _this27.transitionFactories.push(new AnimationTransitionFactory(name, ast, _this27.states));
          });
          this.fallbackTransition = createFallbackTransition(name, this.states);
        }

        _createClass2(AnimationTrigger, [{
          key: "containsQueries",
          get: function get() {
            return this.ast.queryCount > 0;
          }
        }, {
          key: "matchTransition",
          value: function matchTransition(currentState, nextState, element, params) {
            var entry = this.transitionFactories.find(function (f) {
              return f.match(currentState, nextState, element, params);
            });
            return entry || null;
          }
        }, {
          key: "matchStyles",
          value: function matchStyles(currentState, params, errors) {
            return this.fallbackTransition.buildStyles(currentState, params, errors);
          }
        }]);

        return AnimationTrigger;
      }();

      function createFallbackTransition(triggerName, states) {
        var matchers = [function (fromState, toState) {
          return true;
        }];
        var animation = {
          type: 2
          /* Sequence */
          ,
          steps: [],
          options: null
        };
        var transition = {
          type: 1
          /* Transition */
          ,
          animation: animation,
          matchers: matchers,
          options: null,
          queryCount: 0,
          depCount: 0
        };
        return new AnimationTransitionFactory(triggerName, transition, states);
      }

      function balanceProperties(obj, key1, key2) {
        if (obj.hasOwnProperty(key1)) {
          if (!obj.hasOwnProperty(key2)) {
            obj[key2] = obj[key1];
          }
        } else if (obj.hasOwnProperty(key2)) {
          obj[key1] = obj[key2];
        }
      }
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */


      var EMPTY_INSTRUCTION_MAP = /*#__PURE__*/new ElementInstructionMap();

      var TimelineAnimationEngine = /*#__PURE__*/function () {
        function TimelineAnimationEngine(bodyNode, _driver, _normalizer) {
          _classCallCheck(this, TimelineAnimationEngine);

          this.bodyNode = bodyNode;
          this._driver = _driver;
          this._normalizer = _normalizer;
          this._animations = {};
          this._playersById = {};
          this.players = [];
        }

        _createClass2(TimelineAnimationEngine, [{
          key: "register",
          value: function register(id, metadata) {
            var errors = [];
            var ast = buildAnimationAst(this._driver, metadata, errors);

            if (errors.length) {
              throw new Error("Unable to build the animation due to the following errors: ".concat(errors.join('\n')));
            } else {
              this._animations[id] = ast;
            }
          }
        }, {
          key: "_buildPlayer",
          value: function _buildPlayer(i, preStyles, postStyles) {
            var element = i.element;
            var keyframes = normalizeKeyframes(this._driver, this._normalizer, element, i.keyframes, preStyles, postStyles);
            return this._driver.animate(element, keyframes, i.duration, i.delay, i.easing, [], true);
          }
        }, {
          key: "create",
          value: function create(id, element) {
            var _this28 = this;

            var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
            var errors = [];
            var ast = this._animations[id];
            var instructions;
            var autoStylesMap = new Map();

            if (ast) {
              instructions = buildAnimationTimelines(this._driver, element, ast, ENTER_CLASSNAME, LEAVE_CLASSNAME, {}, {}, options, EMPTY_INSTRUCTION_MAP, errors);
              instructions.forEach(function (inst) {
                var styles = getOrSetAsInMap(autoStylesMap, inst.element, {});
                inst.postStyleProps.forEach(function (prop) {
                  return styles[prop] = null;
                });
              });
            } else {
              errors.push('The requested animation doesn\'t exist or has already been destroyed');
              instructions = [];
            }

            if (errors.length) {
              throw new Error("Unable to create the animation due to the following errors: ".concat(errors.join('\n')));
            }

            autoStylesMap.forEach(function (styles, element) {
              Object.keys(styles).forEach(function (prop) {
                styles[prop] = _this28._driver.computeStyle(element, prop, _angular_animations__WEBPACK_IMPORTED_MODULE_0__.AUTO_STYLE);
              });
            });
            var players = instructions.map(function (i) {
              var styles = autoStylesMap.get(i.element);
              return _this28._buildPlayer(i, {}, styles);
            });
            var player = optimizeGroupPlayer(players);
            this._playersById[id] = player;
            player.onDestroy(function () {
              return _this28.destroy(id);
            });
            this.players.push(player);
            return player;
          }
        }, {
          key: "destroy",
          value: function destroy(id) {
            var player = this._getPlayer(id);

            player.destroy();
            delete this._playersById[id];
            var index = this.players.indexOf(player);

            if (index >= 0) {
              this.players.splice(index, 1);
            }
          }
        }, {
          key: "_getPlayer",
          value: function _getPlayer(id) {
            var player = this._playersById[id];

            if (!player) {
              throw new Error("Unable to find the timeline player referenced by ".concat(id));
            }

            return player;
          }
        }, {
          key: "listen",
          value: function listen(id, element, eventName, callback) {
            // triggerName, fromState, toState are all ignored for timeline animations
            var baseEvent = makeAnimationEvent(element, '', '', '');
            listenOnPlayer(this._getPlayer(id), eventName, baseEvent, callback);
            return function () {};
          }
        }, {
          key: "command",
          value: function command(id, element, _command, args) {
            if (_command == 'register') {
              this.register(id, args[0]);
              return;
            }

            if (_command == 'create') {
              var options = args[0] || {};
              this.create(id, element, options);
              return;
            }

            var player = this._getPlayer(id);

            switch (_command) {
              case 'play':
                player.play();
                break;

              case 'pause':
                player.pause();
                break;

              case 'reset':
                player.reset();
                break;

              case 'restart':
                player.restart();
                break;

              case 'finish':
                player.finish();
                break;

              case 'init':
                player.init();
                break;

              case 'setPosition':
                player.setPosition(parseFloat(args[0]));
                break;

              case 'destroy':
                this.destroy(id);
                break;
            }
          }
        }]);

        return TimelineAnimationEngine;
      }();
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */


      var QUEUED_CLASSNAME = 'ng-animate-queued';
      var QUEUED_SELECTOR = '.ng-animate-queued';
      var DISABLED_CLASSNAME = 'ng-animate-disabled';
      var DISABLED_SELECTOR = '.ng-animate-disabled';
      var STAR_CLASSNAME = 'ng-star-inserted';
      var STAR_SELECTOR = '.ng-star-inserted';
      var EMPTY_PLAYER_ARRAY = [];
      var NULL_REMOVAL_STATE = {
        namespaceId: '',
        setForRemoval: false,
        setForMove: false,
        hasAnimation: false,
        removedBeforeQueried: false
      };
      var NULL_REMOVED_QUERIED_STATE = {
        namespaceId: '',
        setForMove: false,
        setForRemoval: false,
        hasAnimation: false,
        removedBeforeQueried: true
      };
      var REMOVAL_FLAG = '__ng_removed';

      var StateValue = /*#__PURE__*/function () {
        function StateValue(input) {
          var namespaceId = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : '';

          _classCallCheck(this, StateValue);

          this.namespaceId = namespaceId;
          var isObj = input && input.hasOwnProperty('value');
          var value = isObj ? input['value'] : input;
          this.value = normalizeTriggerValue(value);

          if (isObj) {
            var options = copyObj(input);
            delete options['value'];
            this.options = options;
          } else {
            this.options = {};
          }

          if (!this.options.params) {
            this.options.params = {};
          }
        }

        _createClass2(StateValue, [{
          key: "params",
          get: function get() {
            return this.options.params;
          }
        }, {
          key: "absorbOptions",
          value: function absorbOptions(options) {
            var newParams = options.params;

            if (newParams) {
              var oldParams = this.options.params;
              Object.keys(newParams).forEach(function (prop) {
                if (oldParams[prop] == null) {
                  oldParams[prop] = newParams[prop];
                }
              });
            }
          }
        }]);

        return StateValue;
      }();

      var VOID_VALUE = 'void';
      var DEFAULT_STATE_VALUE = /*#__PURE__*/new StateValue(VOID_VALUE);

      var AnimationTransitionNamespace = /*#__PURE__*/function () {
        function AnimationTransitionNamespace(id, hostElement, _engine) {
          _classCallCheck(this, AnimationTransitionNamespace);

          this.id = id;
          this.hostElement = hostElement;
          this._engine = _engine;
          this.players = [];
          this._triggers = {};
          this._queue = [];
          this._elementListeners = new Map();
          this._hostClassName = 'ng-tns-' + id;
          addClass(hostElement, this._hostClassName);
        }

        _createClass2(AnimationTransitionNamespace, [{
          key: "listen",
          value: function listen(element, name, phase, callback) {
            var _this29 = this;

            if (!this._triggers.hasOwnProperty(name)) {
              throw new Error("Unable to listen on the animation trigger event \"".concat(phase, "\" because the animation trigger \"").concat(name, "\" doesn't exist!"));
            }

            if (phase == null || phase.length == 0) {
              throw new Error("Unable to listen on the animation trigger \"".concat(name, "\" because the provided event is undefined!"));
            }

            if (!isTriggerEventValid(phase)) {
              throw new Error("The provided animation trigger event \"".concat(phase, "\" for the animation trigger \"").concat(name, "\" is not supported!"));
            }

            var listeners = getOrSetAsInMap(this._elementListeners, element, []);
            var data = {
              name: name,
              phase: phase,
              callback: callback
            };
            listeners.push(data);
            var triggersWithStates = getOrSetAsInMap(this._engine.statesByElement, element, {});

            if (!triggersWithStates.hasOwnProperty(name)) {
              addClass(element, NG_TRIGGER_CLASSNAME);
              addClass(element, NG_TRIGGER_CLASSNAME + '-' + name);
              triggersWithStates[name] = DEFAULT_STATE_VALUE;
            }

            return function () {
              // the event listener is removed AFTER the flush has occurred such
              // that leave animations callbacks can fire (otherwise if the node
              // is removed in between then the listeners would be deregistered)
              _this29._engine.afterFlush(function () {
                var index = listeners.indexOf(data);

                if (index >= 0) {
                  listeners.splice(index, 1);
                }

                if (!_this29._triggers[name]) {
                  delete triggersWithStates[name];
                }
              });
            };
          }
        }, {
          key: "register",
          value: function register(name, ast) {
            if (this._triggers[name]) {
              // throw
              return false;
            } else {
              this._triggers[name] = ast;
              return true;
            }
          }
        }, {
          key: "_getTrigger",
          value: function _getTrigger(name) {
            var trigger = this._triggers[name];

            if (!trigger) {
              throw new Error("The provided animation trigger \"".concat(name, "\" has not been registered!"));
            }

            return trigger;
          }
        }, {
          key: "trigger",
          value: function trigger(element, triggerName, value) {
            var _this30 = this;

            var defaultToFallback = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : true;

            var trigger = this._getTrigger(triggerName);

            var player = new TransitionAnimationPlayer(this.id, triggerName, element);

            var triggersWithStates = this._engine.statesByElement.get(element);

            if (!triggersWithStates) {
              addClass(element, NG_TRIGGER_CLASSNAME);
              addClass(element, NG_TRIGGER_CLASSNAME + '-' + triggerName);

              this._engine.statesByElement.set(element, triggersWithStates = {});
            }

            var fromState = triggersWithStates[triggerName];
            var toState = new StateValue(value, this.id);
            var isObj = value && value.hasOwnProperty('value');

            if (!isObj && fromState) {
              toState.absorbOptions(fromState.options);
            }

            triggersWithStates[triggerName] = toState;

            if (!fromState) {
              fromState = DEFAULT_STATE_VALUE;
            }

            var isRemoval = toState.value === VOID_VALUE; // normally this isn't reached by here, however, if an object expression
            // is passed in then it may be a new object each time. Comparing the value
            // is important since that will stay the same despite there being a new object.
            // The removal arc here is special cased because the same element is triggered
            // twice in the event that it contains animations on the outer/inner portions
            // of the host container

            if (!isRemoval && fromState.value === toState.value) {
              // this means that despite the value not changing, some inner params
              // have changed which means that the animation final styles need to be applied
              if (!objEquals(fromState.params, toState.params)) {
                var errors = [];
                var fromStyles = trigger.matchStyles(fromState.value, fromState.params, errors);
                var toStyles = trigger.matchStyles(toState.value, toState.params, errors);

                if (errors.length) {
                  this._engine.reportError(errors);
                } else {
                  this._engine.afterFlush(function () {
                    eraseStyles(element, fromStyles);
                    setStyles(element, toStyles);
                  });
                }
              }

              return;
            }

            var playersOnElement = getOrSetAsInMap(this._engine.playersByElement, element, []);
            playersOnElement.forEach(function (player) {
              // only remove the player if it is queued on the EXACT same trigger/namespace
              // we only also deal with queued players here because if the animation has
              // started then we want to keep the player alive until the flush happens
              // (which is where the previousPlayers are passed into the new palyer)
              if (player.namespaceId == _this30.id && player.triggerName == triggerName && player.queued) {
                player.destroy();
              }
            });
            var transition = trigger.matchTransition(fromState.value, toState.value, element, toState.params);
            var isFallbackTransition = false;

            if (!transition) {
              if (!defaultToFallback) return;
              transition = trigger.fallbackTransition;
              isFallbackTransition = true;
            }

            this._engine.totalQueuedPlayers++;

            this._queue.push({
              element: element,
              triggerName: triggerName,
              transition: transition,
              fromState: fromState,
              toState: toState,
              player: player,
              isFallbackTransition: isFallbackTransition
            });

            if (!isFallbackTransition) {
              addClass(element, QUEUED_CLASSNAME);
              player.onStart(function () {
                removeClass(element, QUEUED_CLASSNAME);
              });
            }

            player.onDone(function () {
              var index = _this30.players.indexOf(player);

              if (index >= 0) {
                _this30.players.splice(index, 1);
              }

              var players = _this30._engine.playersByElement.get(element);

              if (players) {
                var _index = players.indexOf(player);

                if (_index >= 0) {
                  players.splice(_index, 1);
                }
              }
            });
            this.players.push(player);
            playersOnElement.push(player);
            return player;
          }
        }, {
          key: "deregister",
          value: function deregister(name) {
            var _this31 = this;

            delete this._triggers[name];

            this._engine.statesByElement.forEach(function (stateMap, element) {
              delete stateMap[name];
            });

            this._elementListeners.forEach(function (listeners, element) {
              _this31._elementListeners.set(element, listeners.filter(function (entry) {
                return entry.name != name;
              }));
            });
          }
        }, {
          key: "clearElementCache",
          value: function clearElementCache(element) {
            this._engine.statesByElement["delete"](element);

            this._elementListeners["delete"](element);

            var elementPlayers = this._engine.playersByElement.get(element);

            if (elementPlayers) {
              elementPlayers.forEach(function (player) {
                return player.destroy();
              });

              this._engine.playersByElement["delete"](element);
            }
          }
        }, {
          key: "_signalRemovalForInnerTriggers",
          value: function _signalRemovalForInnerTriggers(rootElement, context) {
            var _this32 = this;

            var elements = this._engine.driver.query(rootElement, NG_TRIGGER_SELECTOR, true); // emulate a leave animation for all inner nodes within this node.
            // If there are no animations found for any of the nodes then clear the cache
            // for the element.


            elements.forEach(function (elm) {
              // this means that an inner remove() operation has already kicked off
              // the animation on this element...
              if (elm[REMOVAL_FLAG]) return;

              var namespaces = _this32._engine.fetchNamespacesByElement(elm);

              if (namespaces.size) {
                namespaces.forEach(function (ns) {
                  return ns.triggerLeaveAnimation(elm, context, false, true);
                });
              } else {
                _this32.clearElementCache(elm);
              }
            }); // If the child elements were removed along with the parent, their animations might not
            // have completed. Clear all the elements from the cache so we don't end up with a memory leak.

            this._engine.afterFlushAnimationsDone(function () {
              return elements.forEach(function (elm) {
                return _this32.clearElementCache(elm);
              });
            });
          }
        }, {
          key: "triggerLeaveAnimation",
          value: function triggerLeaveAnimation(element, context, destroyAfterComplete, defaultToFallback) {
            var _this33 = this;

            var triggerStates = this._engine.statesByElement.get(element);

            if (triggerStates) {
              var players = [];
              Object.keys(triggerStates).forEach(function (triggerName) {
                // this check is here in the event that an element is removed
                // twice (both on the host level and the component level)
                if (_this33._triggers[triggerName]) {
                  var player = _this33.trigger(element, triggerName, VOID_VALUE, defaultToFallback);

                  if (player) {
                    players.push(player);
                  }
                }
              });

              if (players.length) {
                this._engine.markElementAsRemoved(this.id, element, true, context);

                if (destroyAfterComplete) {
                  optimizeGroupPlayer(players).onDone(function () {
                    return _this33._engine.processLeaveNode(element);
                  });
                }

                return true;
              }
            }

            return false;
          }
        }, {
          key: "prepareLeaveAnimationListeners",
          value: function prepareLeaveAnimationListeners(element) {
            var _this34 = this;

            var listeners = this._elementListeners.get(element);

            var elementStates = this._engine.statesByElement.get(element); // if this statement fails then it means that the element was picked up
            // by an earlier flush (or there are no listeners at all to track the leave).


            if (listeners && elementStates) {
              var visitedTriggers = new Set();
              listeners.forEach(function (listener) {
                var triggerName = listener.name;
                if (visitedTriggers.has(triggerName)) return;
                visitedTriggers.add(triggerName);
                var trigger = _this34._triggers[triggerName];
                var transition = trigger.fallbackTransition;
                var fromState = elementStates[triggerName] || DEFAULT_STATE_VALUE;
                var toState = new StateValue(VOID_VALUE);
                var player = new TransitionAnimationPlayer(_this34.id, triggerName, element);
                _this34._engine.totalQueuedPlayers++;

                _this34._queue.push({
                  element: element,
                  triggerName: triggerName,
                  transition: transition,
                  fromState: fromState,
                  toState: toState,
                  player: player,
                  isFallbackTransition: true
                });
              });
            }
          }
        }, {
          key: "removeNode",
          value: function removeNode(element, context) {
            var _this35 = this;

            var engine = this._engine;

            if (element.childElementCount) {
              this._signalRemovalForInnerTriggers(element, context);
            } // this means that a * => VOID animation was detected and kicked off


            if (this.triggerLeaveAnimation(element, context, true)) return; // find the player that is animating and make sure that the
            // removal is delayed until that player has completed

            var containsPotentialParentTransition = false;

            if (engine.totalAnimations) {
              var currentPlayers = engine.players.length ? engine.playersByQueriedElement.get(element) : []; // when this `if statement` does not continue forward it means that
              // a previous animation query has selected the current element and
              // is animating it. In this situation want to continue forwards and
              // allow the element to be queued up for animation later.

              if (currentPlayers && currentPlayers.length) {
                containsPotentialParentTransition = true;
              } else {
                var parent = element;

                while (parent = parent.parentNode) {
                  var triggers = engine.statesByElement.get(parent);

                  if (triggers) {
                    containsPotentialParentTransition = true;
                    break;
                  }
                }
              }
            } // at this stage we know that the element will either get removed
            // during flush or will be picked up by a parent query. Either way
            // we need to fire the listeners for this element when it DOES get
            // removed (once the query parent animation is done or after flush)


            this.prepareLeaveAnimationListeners(element); // whether or not a parent has an animation we need to delay the deferral of the leave
            // operation until we have more information (which we do after flush() has been called)

            if (containsPotentialParentTransition) {
              engine.markElementAsRemoved(this.id, element, false, context);
            } else {
              var removalFlag = element[REMOVAL_FLAG];

              if (!removalFlag || removalFlag === NULL_REMOVAL_STATE) {
                // we do this after the flush has occurred such
                // that the callbacks can be fired
                engine.afterFlush(function () {
                  return _this35.clearElementCache(element);
                });
                engine.destroyInnerAnimations(element);

                engine._onRemovalComplete(element, context);
              }
            }
          }
        }, {
          key: "insertNode",
          value: function insertNode(element, parent) {
            addClass(element, this._hostClassName);
          }
        }, {
          key: "drainQueuedTransitions",
          value: function drainQueuedTransitions(microtaskId) {
            var _this36 = this;

            var instructions = [];

            this._queue.forEach(function (entry) {
              var player = entry.player;
              if (player.destroyed) return;
              var element = entry.element;

              var listeners = _this36._elementListeners.get(element);

              if (listeners) {
                listeners.forEach(function (listener) {
                  if (listener.name == entry.triggerName) {
                    var baseEvent = makeAnimationEvent(element, entry.triggerName, entry.fromState.value, entry.toState.value);
                    baseEvent['_data'] = microtaskId;
                    listenOnPlayer(entry.player, listener.phase, baseEvent, listener.callback);
                  }
                });
              }

              if (player.markedForDestroy) {
                _this36._engine.afterFlush(function () {
                  // now we can destroy the element properly since the event listeners have
                  // been bound to the player
                  player.destroy();
                });
              } else {
                instructions.push(entry);
              }
            });

            this._queue = [];
            return instructions.sort(function (a, b) {
              // if depCount == 0 them move to front
              // otherwise if a contains b then move back
              var d0 = a.transition.ast.depCount;
              var d1 = b.transition.ast.depCount;

              if (d0 == 0 || d1 == 0) {
                return d0 - d1;
              }

              return _this36._engine.driver.containsElement(a.element, b.element) ? 1 : -1;
            });
          }
        }, {
          key: "destroy",
          value: function destroy(context) {
            this.players.forEach(function (p) {
              return p.destroy();
            });

            this._signalRemovalForInnerTriggers(this.hostElement, context);
          }
        }, {
          key: "elementContainsData",
          value: function elementContainsData(element) {
            var containsData = false;
            if (this._elementListeners.has(element)) containsData = true;
            containsData = (this._queue.find(function (entry) {
              return entry.element === element;
            }) ? true : false) || containsData;
            return containsData;
          }
        }]);

        return AnimationTransitionNamespace;
      }();

      var TransitionAnimationEngine = /*#__PURE__*/function () {
        function TransitionAnimationEngine(bodyNode, driver, _normalizer) {
          _classCallCheck(this, TransitionAnimationEngine);

          this.bodyNode = bodyNode;
          this.driver = driver;
          this._normalizer = _normalizer;
          this.players = [];
          this.newHostElements = new Map();
          this.playersByElement = new Map();
          this.playersByQueriedElement = new Map();
          this.statesByElement = new Map();
          this.disabledNodes = new Set();
          this.totalAnimations = 0;
          this.totalQueuedPlayers = 0;
          this._namespaceLookup = {};
          this._namespaceList = [];
          this._flushFns = [];
          this._whenQuietFns = [];
          this.namespacesByHostElement = new Map();
          this.collectedEnterElements = [];
          this.collectedLeaveElements = []; // this method is designed to be overridden by the code that uses this engine

          this.onRemovalComplete = function (element, context) {};
        }
        /** @internal */


        _createClass2(TransitionAnimationEngine, [{
          key: "_onRemovalComplete",
          value: function _onRemovalComplete(element, context) {
            this.onRemovalComplete(element, context);
          }
        }, {
          key: "queuedPlayers",
          get: function get() {
            var players = [];

            this._namespaceList.forEach(function (ns) {
              ns.players.forEach(function (player) {
                if (player.queued) {
                  players.push(player);
                }
              });
            });

            return players;
          }
        }, {
          key: "createNamespace",
          value: function createNamespace(namespaceId, hostElement) {
            var ns = new AnimationTransitionNamespace(namespaceId, hostElement, this);

            if (this.bodyNode && this.driver.containsElement(this.bodyNode, hostElement)) {
              this._balanceNamespaceList(ns, hostElement);
            } else {
              // defer this later until flush during when the host element has
              // been inserted so that we know exactly where to place it in
              // the namespace list
              this.newHostElements.set(hostElement, ns); // given that this host element is apart of the animation code, it
              // may or may not be inserted by a parent node that is of an
              // animation renderer type. If this happens then we can still have
              // access to this item when we query for :enter nodes. If the parent
              // is a renderer then the set data-structure will normalize the entry

              this.collectEnterElement(hostElement);
            }

            return this._namespaceLookup[namespaceId] = ns;
          }
        }, {
          key: "_balanceNamespaceList",
          value: function _balanceNamespaceList(ns, hostElement) {
            var limit = this._namespaceList.length - 1;

            if (limit >= 0) {
              var found = false;

              for (var i = limit; i >= 0; i--) {
                var nextNamespace = this._namespaceList[i];

                if (this.driver.containsElement(nextNamespace.hostElement, hostElement)) {
                  this._namespaceList.splice(i + 1, 0, ns);

                  found = true;
                  break;
                }
              }

              if (!found) {
                this._namespaceList.splice(0, 0, ns);
              }
            } else {
              this._namespaceList.push(ns);
            }

            this.namespacesByHostElement.set(hostElement, ns);
            return ns;
          }
        }, {
          key: "register",
          value: function register(namespaceId, hostElement) {
            var ns = this._namespaceLookup[namespaceId];

            if (!ns) {
              ns = this.createNamespace(namespaceId, hostElement);
            }

            return ns;
          }
        }, {
          key: "registerTrigger",
          value: function registerTrigger(namespaceId, name, trigger) {
            var ns = this._namespaceLookup[namespaceId];

            if (ns && ns.register(name, trigger)) {
              this.totalAnimations++;
            }
          }
        }, {
          key: "destroy",
          value: function destroy(namespaceId, context) {
            var _this37 = this;

            if (!namespaceId) return;

            var ns = this._fetchNamespace(namespaceId);

            this.afterFlush(function () {
              _this37.namespacesByHostElement["delete"](ns.hostElement);

              delete _this37._namespaceLookup[namespaceId];

              var index = _this37._namespaceList.indexOf(ns);

              if (index >= 0) {
                _this37._namespaceList.splice(index, 1);
              }
            });
            this.afterFlushAnimationsDone(function () {
              return ns.destroy(context);
            });
          }
        }, {
          key: "_fetchNamespace",
          value: function _fetchNamespace(id) {
            return this._namespaceLookup[id];
          }
        }, {
          key: "fetchNamespacesByElement",
          value: function fetchNamespacesByElement(element) {
            // normally there should only be one namespace per element, however
            // if @triggers are placed on both the component element and then
            // its host element (within the component code) then there will be
            // two namespaces returned. We use a set here to simply the dedupe
            // of namespaces incase there are multiple triggers both the elm and host
            var namespaces = new Set();
            var elementStates = this.statesByElement.get(element);

            if (elementStates) {
              var keys = Object.keys(elementStates);

              for (var i = 0; i < keys.length; i++) {
                var nsId = elementStates[keys[i]].namespaceId;

                if (nsId) {
                  var ns = this._fetchNamespace(nsId);

                  if (ns) {
                    namespaces.add(ns);
                  }
                }
              }
            }

            return namespaces;
          }
        }, {
          key: "trigger",
          value: function trigger(namespaceId, element, name, value) {
            if (isElementNode(element)) {
              var ns = this._fetchNamespace(namespaceId);

              if (ns) {
                ns.trigger(element, name, value);
                return true;
              }
            }

            return false;
          }
        }, {
          key: "insertNode",
          value: function insertNode(namespaceId, element, parent, insertBefore) {
            if (!isElementNode(element)) return; // special case for when an element is removed and reinserted (move operation)
            // when this occurs we do not want to use the element for deletion later

            var details = element[REMOVAL_FLAG];

            if (details && details.setForRemoval) {
              details.setForRemoval = false;
              details.setForMove = true;
              var index = this.collectedLeaveElements.indexOf(element);

              if (index >= 0) {
                this.collectedLeaveElements.splice(index, 1);
              }
            } // in the event that the namespaceId is blank then the caller
            // code does not contain any animation code in it, but it is
            // just being called so that the node is marked as being inserted


            if (namespaceId) {
              var ns = this._fetchNamespace(namespaceId); // This if-statement is a workaround for router issue #21947.
              // The router sometimes hits a race condition where while a route
              // is being instantiated a new navigation arrives, triggering leave
              // animation of DOM that has not been fully initialized, until this
              // is resolved, we need to handle the scenario when DOM is not in a
              // consistent state during the animation.


              if (ns) {
                ns.insertNode(element, parent);
              }
            } // only *directives and host elements are inserted before


            if (insertBefore) {
              this.collectEnterElement(element);
            }
          }
        }, {
          key: "collectEnterElement",
          value: function collectEnterElement(element) {
            this.collectedEnterElements.push(element);
          }
        }, {
          key: "markElementAsDisabled",
          value: function markElementAsDisabled(element, value) {
            if (value) {
              if (!this.disabledNodes.has(element)) {
                this.disabledNodes.add(element);
                addClass(element, DISABLED_CLASSNAME);
              }
            } else if (this.disabledNodes.has(element)) {
              this.disabledNodes["delete"](element);
              removeClass(element, DISABLED_CLASSNAME);
            }
          }
        }, {
          key: "removeNode",
          value: function removeNode(namespaceId, element, isHostElement, context) {
            if (isElementNode(element)) {
              var ns = namespaceId ? this._fetchNamespace(namespaceId) : null;

              if (ns) {
                ns.removeNode(element, context);
              } else {
                this.markElementAsRemoved(namespaceId, element, false, context);
              }

              if (isHostElement) {
                var hostNS = this.namespacesByHostElement.get(element);

                if (hostNS && hostNS.id !== namespaceId) {
                  hostNS.removeNode(element, context);
                }
              }
            } else {
              this._onRemovalComplete(element, context);
            }
          }
        }, {
          key: "markElementAsRemoved",
          value: function markElementAsRemoved(namespaceId, element, hasAnimation, context) {
            this.collectedLeaveElements.push(element);
            element[REMOVAL_FLAG] = {
              namespaceId: namespaceId,
              setForRemoval: context,
              hasAnimation: hasAnimation,
              removedBeforeQueried: false
            };
          }
        }, {
          key: "listen",
          value: function listen(namespaceId, element, name, phase, callback) {
            if (isElementNode(element)) {
              return this._fetchNamespace(namespaceId).listen(element, name, phase, callback);
            }

            return function () {};
          }
        }, {
          key: "_buildInstruction",
          value: function _buildInstruction(entry, subTimelines, enterClassName, leaveClassName, skipBuildAst) {
            return entry.transition.build(this.driver, entry.element, entry.fromState.value, entry.toState.value, enterClassName, leaveClassName, entry.fromState.options, entry.toState.options, subTimelines, skipBuildAst);
          }
        }, {
          key: "destroyInnerAnimations",
          value: function destroyInnerAnimations(containerElement) {
            var _this38 = this;

            var elements = this.driver.query(containerElement, NG_TRIGGER_SELECTOR, true);
            elements.forEach(function (element) {
              return _this38.destroyActiveAnimationsForElement(element);
            });
            if (this.playersByQueriedElement.size == 0) return;
            elements = this.driver.query(containerElement, NG_ANIMATING_SELECTOR, true);
            elements.forEach(function (element) {
              return _this38.finishActiveQueriedAnimationOnElement(element);
            });
          }
        }, {
          key: "destroyActiveAnimationsForElement",
          value: function destroyActiveAnimationsForElement(element) {
            var players = this.playersByElement.get(element);

            if (players) {
              players.forEach(function (player) {
                // special case for when an element is set for destruction, but hasn't started.
                // in this situation we want to delay the destruction until the flush occurs
                // so that any event listeners attached to the player are triggered.
                if (player.queued) {
                  player.markedForDestroy = true;
                } else {
                  player.destroy();
                }
              });
            }
          }
        }, {
          key: "finishActiveQueriedAnimationOnElement",
          value: function finishActiveQueriedAnimationOnElement(element) {
            var players = this.playersByQueriedElement.get(element);

            if (players) {
              players.forEach(function (player) {
                return player.finish();
              });
            }
          }
        }, {
          key: "whenRenderingDone",
          value: function whenRenderingDone() {
            var _this39 = this;

            return new Promise(function (resolve) {
              if (_this39.players.length) {
                return optimizeGroupPlayer(_this39.players).onDone(function () {
                  return resolve();
                });
              } else {
                resolve();
              }
            });
          }
        }, {
          key: "processLeaveNode",
          value: function processLeaveNode(element) {
            var _this40 = this;

            var details = element[REMOVAL_FLAG];

            if (details && details.setForRemoval) {
              // this will prevent it from removing it twice
              element[REMOVAL_FLAG] = NULL_REMOVAL_STATE;

              if (details.namespaceId) {
                this.destroyInnerAnimations(element);

                var ns = this._fetchNamespace(details.namespaceId);

                if (ns) {
                  ns.clearElementCache(element);
                }
              }

              this._onRemovalComplete(element, details.setForRemoval);
            }

            if (this.driver.matchesElement(element, DISABLED_SELECTOR)) {
              this.markElementAsDisabled(element, false);
            }

            this.driver.query(element, DISABLED_SELECTOR, true).forEach(function (node) {
              _this40.markElementAsDisabled(node, false);
            });
          }
        }, {
          key: "flush",
          value: function flush() {
            var _this41 = this;

            var microtaskId = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : -1;
            var players = [];

            if (this.newHostElements.size) {
              this.newHostElements.forEach(function (ns, element) {
                return _this41._balanceNamespaceList(ns, element);
              });
              this.newHostElements.clear();
            }

            if (this.totalAnimations && this.collectedEnterElements.length) {
              for (var i = 0; i < this.collectedEnterElements.length; i++) {
                var elm = this.collectedEnterElements[i];
                addClass(elm, STAR_CLASSNAME);
              }
            }

            if (this._namespaceList.length && (this.totalQueuedPlayers || this.collectedLeaveElements.length)) {
              var cleanupFns = [];

              try {
                players = this._flushAnimations(cleanupFns, microtaskId);
              } finally {
                for (var _i2 = 0; _i2 < cleanupFns.length; _i2++) {
                  cleanupFns[_i2]();
                }
              }
            } else {
              for (var _i3 = 0; _i3 < this.collectedLeaveElements.length; _i3++) {
                var element = this.collectedLeaveElements[_i3];
                this.processLeaveNode(element);
              }
            }

            this.totalQueuedPlayers = 0;
            this.collectedEnterElements.length = 0;
            this.collectedLeaveElements.length = 0;

            this._flushFns.forEach(function (fn) {
              return fn();
            });

            this._flushFns = [];

            if (this._whenQuietFns.length) {
              // we move these over to a variable so that
              // if any new callbacks are registered in another
              // flush they do not populate the existing set
              var quietFns = this._whenQuietFns;
              this._whenQuietFns = [];

              if (players.length) {
                optimizeGroupPlayer(players).onDone(function () {
                  quietFns.forEach(function (fn) {
                    return fn();
                  });
                });
              } else {
                quietFns.forEach(function (fn) {
                  return fn();
                });
              }
            }
          }
        }, {
          key: "reportError",
          value: function reportError(errors) {
            throw new Error("Unable to process animations due to the following failed trigger transitions\n ".concat(errors.join('\n')));
          }
        }, {
          key: "_flushAnimations",
          value: function _flushAnimations(cleanupFns, microtaskId) {
            var _this42 = this;

            var subTimelines = new ElementInstructionMap();
            var skippedPlayers = [];
            var skippedPlayersMap = new Map();
            var queuedInstructions = [];
            var queriedElements = new Map();
            var allPreStyleElements = new Map();
            var allPostStyleElements = new Map();
            var disabledElementsSet = new Set();
            this.disabledNodes.forEach(function (node) {
              disabledElementsSet.add(node);

              var nodesThatAreDisabled = _this42.driver.query(node, QUEUED_SELECTOR, true);

              for (var _i4 = 0; _i4 < nodesThatAreDisabled.length; _i4++) {
                disabledElementsSet.add(nodesThatAreDisabled[_i4]);
              }
            });
            var bodyNode = this.bodyNode;
            var allTriggerElements = Array.from(this.statesByElement.keys());
            var enterNodeMap = buildRootMap(allTriggerElements, this.collectedEnterElements); // this must occur before the instructions are built below such that
            // the :enter queries match the elements (since the timeline queries
            // are fired during instruction building).

            var enterNodeMapIds = new Map();
            var i = 0;
            enterNodeMap.forEach(function (nodes, root) {
              var className = ENTER_CLASSNAME + i++;
              enterNodeMapIds.set(root, className);
              nodes.forEach(function (node) {
                return addClass(node, className);
              });
            });
            var allLeaveNodes = [];
            var mergedLeaveNodes = new Set();
            var leaveNodesWithoutAnimations = new Set();

            for (var _i5 = 0; _i5 < this.collectedLeaveElements.length; _i5++) {
              var element = this.collectedLeaveElements[_i5];
              var details = element[REMOVAL_FLAG];

              if (details && details.setForRemoval) {
                allLeaveNodes.push(element);
                mergedLeaveNodes.add(element);

                if (details.hasAnimation) {
                  this.driver.query(element, STAR_SELECTOR, true).forEach(function (elm) {
                    return mergedLeaveNodes.add(elm);
                  });
                } else {
                  leaveNodesWithoutAnimations.add(element);
                }
              }
            }

            var leaveNodeMapIds = new Map();
            var leaveNodeMap = buildRootMap(allTriggerElements, Array.from(mergedLeaveNodes));
            leaveNodeMap.forEach(function (nodes, root) {
              var className = LEAVE_CLASSNAME + i++;
              leaveNodeMapIds.set(root, className);
              nodes.forEach(function (node) {
                return addClass(node, className);
              });
            });
            cleanupFns.push(function () {
              enterNodeMap.forEach(function (nodes, root) {
                var className = enterNodeMapIds.get(root);
                nodes.forEach(function (node) {
                  return removeClass(node, className);
                });
              });
              leaveNodeMap.forEach(function (nodes, root) {
                var className = leaveNodeMapIds.get(root);
                nodes.forEach(function (node) {
                  return removeClass(node, className);
                });
              });
              allLeaveNodes.forEach(function (element) {
                _this42.processLeaveNode(element);
              });
            });
            var allPlayers = [];
            var erroneousTransitions = [];

            for (var _i6 = this._namespaceList.length - 1; _i6 >= 0; _i6--) {
              var ns = this._namespaceList[_i6];
              ns.drainQueuedTransitions(microtaskId).forEach(function (entry) {
                var player = entry.player;
                var element = entry.element;
                allPlayers.push(player);

                if (_this42.collectedEnterElements.length) {
                  var _details = element[REMOVAL_FLAG]; // move animations are currently not supported...

                  if (_details && _details.setForMove) {
                    player.destroy();
                    return;
                  }
                }

                var nodeIsOrphaned = !bodyNode || !_this42.driver.containsElement(bodyNode, element);
                var leaveClassName = leaveNodeMapIds.get(element);
                var enterClassName = enterNodeMapIds.get(element);

                var instruction = _this42._buildInstruction(entry, subTimelines, enterClassName, leaveClassName, nodeIsOrphaned);

                if (instruction.errors && instruction.errors.length) {
                  erroneousTransitions.push(instruction);
                  return;
                } // even though the element may not be apart of the DOM, it may
                // still be added at a later point (due to the mechanics of content
                // projection and/or dynamic component insertion) therefore it's
                // important we still style the element.


                if (nodeIsOrphaned) {
                  player.onStart(function () {
                    return eraseStyles(element, instruction.fromStyles);
                  });
                  player.onDestroy(function () {
                    return setStyles(element, instruction.toStyles);
                  });
                  skippedPlayers.push(player);
                  return;
                } // if a unmatched transition is queued to go then it SHOULD NOT render
                // an animation and cancel the previously running animations.


                if (entry.isFallbackTransition) {
                  player.onStart(function () {
                    return eraseStyles(element, instruction.fromStyles);
                  });
                  player.onDestroy(function () {
                    return setStyles(element, instruction.toStyles);
                  });
                  skippedPlayers.push(player);
                  return;
                } // this means that if a parent animation uses this animation as a sub trigger
                // then it will instruct the timeline builder to not add a player delay, but
                // instead stretch the first keyframe gap up until the animation starts. The
                // reason this is important is to prevent extra initialization styles from being
                // required by the user in the animation.


                instruction.timelines.forEach(function (tl) {
                  return tl.stretchStartingKeyframe = true;
                });
                subTimelines.append(element, instruction.timelines);
                var tuple = {
                  instruction: instruction,
                  player: player,
                  element: element
                };
                queuedInstructions.push(tuple);
                instruction.queriedElements.forEach(function (element) {
                  return getOrSetAsInMap(queriedElements, element, []).push(player);
                });
                instruction.preStyleProps.forEach(function (stringMap, element) {
                  var props = Object.keys(stringMap);

                  if (props.length) {
                    var setVal = allPreStyleElements.get(element);

                    if (!setVal) {
                      allPreStyleElements.set(element, setVal = new Set());
                    }

                    props.forEach(function (prop) {
                      return setVal.add(prop);
                    });
                  }
                });
                instruction.postStyleProps.forEach(function (stringMap, element) {
                  var props = Object.keys(stringMap);
                  var setVal = allPostStyleElements.get(element);

                  if (!setVal) {
                    allPostStyleElements.set(element, setVal = new Set());
                  }

                  props.forEach(function (prop) {
                    return setVal.add(prop);
                  });
                });
              });
            }

            if (erroneousTransitions.length) {
              var errors = [];
              erroneousTransitions.forEach(function (instruction) {
                errors.push("@".concat(instruction.triggerName, " has failed due to:\n"));
                instruction.errors.forEach(function (error) {
                  return errors.push("- ".concat(error, "\n"));
                });
              });
              allPlayers.forEach(function (player) {
                return player.destroy();
              });
              this.reportError(errors);
            }

            var allPreviousPlayersMap = new Map(); // this map works to tell which element in the DOM tree is contained by
            // which animation. Further down below this map will get populated once
            // the players are built and in doing so it can efficiently figure out
            // if a sub player is skipped due to a parent player having priority.

            var animationElementMap = new Map();
            queuedInstructions.forEach(function (entry) {
              var element = entry.element;

              if (subTimelines.has(element)) {
                animationElementMap.set(element, element);

                _this42._beforeAnimationBuild(entry.player.namespaceId, entry.instruction, allPreviousPlayersMap);
              }
            });
            skippedPlayers.forEach(function (player) {
              var element = player.element;

              var previousPlayers = _this42._getPreviousPlayers(element, false, player.namespaceId, player.triggerName, null);

              previousPlayers.forEach(function (prevPlayer) {
                getOrSetAsInMap(allPreviousPlayersMap, element, []).push(prevPlayer);
                prevPlayer.destroy();
              });
            }); // this is a special case for nodes that will be removed (either by)
            // having their own leave animations or by being queried in a container
            // that will be removed once a parent animation is complete. The idea
            // here is that * styles must be identical to ! styles because of
            // backwards compatibility (* is also filled in by default in many places).
            // Otherwise * styles will return an empty value or auto since the element
            // that is being getComputedStyle'd will not be visible (since * = destination)

            var replaceNodes = allLeaveNodes.filter(function (node) {
              return replacePostStylesAsPre(node, allPreStyleElements, allPostStyleElements);
            }); // POST STAGE: fill the * styles

            var postStylesMap = new Map();
            var allLeaveQueriedNodes = cloakAndComputeStyles(postStylesMap, this.driver, leaveNodesWithoutAnimations, allPostStyleElements, _angular_animations__WEBPACK_IMPORTED_MODULE_0__.AUTO_STYLE);
            allLeaveQueriedNodes.forEach(function (node) {
              if (replacePostStylesAsPre(node, allPreStyleElements, allPostStyleElements)) {
                replaceNodes.push(node);
              }
            }); // PRE STAGE: fill the ! styles

            var preStylesMap = new Map();
            enterNodeMap.forEach(function (nodes, root) {
              cloakAndComputeStyles(preStylesMap, _this42.driver, new Set(nodes), allPreStyleElements, _angular_animations__WEBPACK_IMPORTED_MODULE_0__["ɵPRE_STYLE"]);
            });
            replaceNodes.forEach(function (node) {
              var post = postStylesMap.get(node);
              var pre = preStylesMap.get(node);
              postStylesMap.set(node, Object.assign(Object.assign({}, post), pre));
            });
            var rootPlayers = [];
            var subPlayers = [];
            var NO_PARENT_ANIMATION_ELEMENT_DETECTED = {};
            queuedInstructions.forEach(function (entry) {
              var element = entry.element,
                  player = entry.player,
                  instruction = entry.instruction; // this means that it was never consumed by a parent animation which
              // means that it is independent and therefore should be set for animation

              if (subTimelines.has(element)) {
                if (disabledElementsSet.has(element)) {
                  player.onDestroy(function () {
                    return setStyles(element, instruction.toStyles);
                  });
                  player.disabled = true;
                  player.overrideTotalTime(instruction.totalTime);
                  skippedPlayers.push(player);
                  return;
                } // this will flow up the DOM and query the map to figure out
                // if a parent animation has priority over it. In the situation
                // that a parent is detected then it will cancel the loop. If
                // nothing is detected, or it takes a few hops to find a parent,
                // then it will fill in the missing nodes and signal them as having
                // a detected parent (or a NO_PARENT value via a special constant).


                var parentWithAnimation = NO_PARENT_ANIMATION_ELEMENT_DETECTED;

                if (animationElementMap.size > 1) {
                  var elm = element;
                  var parentsToAdd = [];

                  while (elm = elm.parentNode) {
                    var detectedParent = animationElementMap.get(elm);

                    if (detectedParent) {
                      parentWithAnimation = detectedParent;
                      break;
                    }

                    parentsToAdd.push(elm);
                  }

                  parentsToAdd.forEach(function (parent) {
                    return animationElementMap.set(parent, parentWithAnimation);
                  });
                }

                var innerPlayer = _this42._buildAnimation(player.namespaceId, instruction, allPreviousPlayersMap, skippedPlayersMap, preStylesMap, postStylesMap);

                player.setRealPlayer(innerPlayer);

                if (parentWithAnimation === NO_PARENT_ANIMATION_ELEMENT_DETECTED) {
                  rootPlayers.push(player);
                } else {
                  var parentPlayers = _this42.playersByElement.get(parentWithAnimation);

                  if (parentPlayers && parentPlayers.length) {
                    player.parentPlayer = optimizeGroupPlayer(parentPlayers);
                  }

                  skippedPlayers.push(player);
                }
              } else {
                eraseStyles(element, instruction.fromStyles);
                player.onDestroy(function () {
                  return setStyles(element, instruction.toStyles);
                }); // there still might be a ancestor player animating this
                // element therefore we will still add it as a sub player
                // even if its animation may be disabled

                subPlayers.push(player);

                if (disabledElementsSet.has(element)) {
                  skippedPlayers.push(player);
                }
              }
            }); // find all of the sub players' corresponding inner animation player

            subPlayers.forEach(function (player) {
              // even if any players are not found for a sub animation then it
              // will still complete itself after the next tick since it's Noop
              var playersForElement = skippedPlayersMap.get(player.element);

              if (playersForElement && playersForElement.length) {
                var innerPlayer = optimizeGroupPlayer(playersForElement);
                player.setRealPlayer(innerPlayer);
              }
            }); // the reason why we don't actually play the animation is
            // because all that a skipped player is designed to do is to
            // fire the start/done transition callback events

            skippedPlayers.forEach(function (player) {
              if (player.parentPlayer) {
                player.syncPlayerEvents(player.parentPlayer);
              } else {
                player.destroy();
              }
            }); // run through all of the queued removals and see if they
            // were picked up by a query. If not then perform the removal
            // operation right away unless a parent animation is ongoing.

            for (var _i7 = 0; _i7 < allLeaveNodes.length; _i7++) {
              var _element2 = allLeaveNodes[_i7];
              var _details2 = _element2[REMOVAL_FLAG];
              removeClass(_element2, LEAVE_CLASSNAME); // this means the element has a removal animation that is being
              // taken care of and therefore the inner elements will hang around
              // until that animation is over (or the parent queried animation)

              if (_details2 && _details2.hasAnimation) continue;
              var players = []; // if this element is queried or if it contains queried children
              // then we want for the element not to be removed from the page
              // until the queried animations have finished

              if (queriedElements.size) {
                var queriedPlayerResults = queriedElements.get(_element2);

                if (queriedPlayerResults && queriedPlayerResults.length) {
                  players.push.apply(players, _toConsumableArray(queriedPlayerResults));
                }

                var queriedInnerElements = this.driver.query(_element2, NG_ANIMATING_SELECTOR, true);

                for (var j = 0; j < queriedInnerElements.length; j++) {
                  var queriedPlayers = queriedElements.get(queriedInnerElements[j]);

                  if (queriedPlayers && queriedPlayers.length) {
                    players.push.apply(players, _toConsumableArray(queriedPlayers));
                  }
                }
              }

              var activePlayers = players.filter(function (p) {
                return !p.destroyed;
              });

              if (activePlayers.length) {
                removeNodesAfterAnimationDone(this, _element2, activePlayers);
              } else {
                this.processLeaveNode(_element2);
              }
            } // this is required so the cleanup method doesn't remove them


            allLeaveNodes.length = 0;
            rootPlayers.forEach(function (player) {
              _this42.players.push(player);

              player.onDone(function () {
                player.destroy();

                var index = _this42.players.indexOf(player);

                _this42.players.splice(index, 1);
              });
              player.play();
            });
            return rootPlayers;
          }
        }, {
          key: "elementContainsData",
          value: function elementContainsData(namespaceId, element) {
            var containsData = false;
            var details = element[REMOVAL_FLAG];
            if (details && details.setForRemoval) containsData = true;
            if (this.playersByElement.has(element)) containsData = true;
            if (this.playersByQueriedElement.has(element)) containsData = true;
            if (this.statesByElement.has(element)) containsData = true;
            return this._fetchNamespace(namespaceId).elementContainsData(element) || containsData;
          }
        }, {
          key: "afterFlush",
          value: function afterFlush(callback) {
            this._flushFns.push(callback);
          }
        }, {
          key: "afterFlushAnimationsDone",
          value: function afterFlushAnimationsDone(callback) {
            this._whenQuietFns.push(callback);
          }
        }, {
          key: "_getPreviousPlayers",
          value: function _getPreviousPlayers(element, isQueriedElement, namespaceId, triggerName, toStateValue) {
            var players = [];

            if (isQueriedElement) {
              var queriedElementPlayers = this.playersByQueriedElement.get(element);

              if (queriedElementPlayers) {
                players = queriedElementPlayers;
              }
            } else {
              var elementPlayers = this.playersByElement.get(element);

              if (elementPlayers) {
                var isRemovalAnimation = !toStateValue || toStateValue == VOID_VALUE;
                elementPlayers.forEach(function (player) {
                  if (player.queued) return;
                  if (!isRemovalAnimation && player.triggerName != triggerName) return;
                  players.push(player);
                });
              }
            }

            if (namespaceId || triggerName) {
              players = players.filter(function (player) {
                if (namespaceId && namespaceId != player.namespaceId) return false;
                if (triggerName && triggerName != player.triggerName) return false;
                return true;
              });
            }

            return players;
          }
        }, {
          key: "_beforeAnimationBuild",
          value: function _beforeAnimationBuild(namespaceId, instruction, allPreviousPlayersMap) {
            var _this43 = this;

            var triggerName = instruction.triggerName;
            var rootElement = instruction.element; // when a removal animation occurs, ALL previous players are collected
            // and destroyed (even if they are outside of the current namespace)

            var targetNameSpaceId = instruction.isRemovalTransition ? undefined : namespaceId;
            var targetTriggerName = instruction.isRemovalTransition ? undefined : triggerName;

            var _iterator2 = _createForOfIteratorHelper(instruction.timelines),
                _step2;

            try {
              var _loop2 = function _loop2() {
                var timelineInstruction = _step2.value;
                var element = timelineInstruction.element;
                var isQueriedElement = element !== rootElement;
                var players = getOrSetAsInMap(allPreviousPlayersMap, element, []);

                var previousPlayers = _this43._getPreviousPlayers(element, isQueriedElement, targetNameSpaceId, targetTriggerName, instruction.toState);

                previousPlayers.forEach(function (player) {
                  var realPlayer = player.getRealPlayer();

                  if (realPlayer.beforeDestroy) {
                    realPlayer.beforeDestroy();
                  }

                  player.destroy();
                  players.push(player);
                });
              };

              for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
                _loop2();
              } // this needs to be done so that the PRE/POST styles can be
              // computed properly without interfering with the previous animation

            } catch (err) {
              _iterator2.e(err);
            } finally {
              _iterator2.f();
            }

            eraseStyles(rootElement, instruction.fromStyles);
          }
        }, {
          key: "_buildAnimation",
          value: function _buildAnimation(namespaceId, instruction, allPreviousPlayersMap, skippedPlayersMap, preStylesMap, postStylesMap) {
            var _this44 = this;

            var triggerName = instruction.triggerName;
            var rootElement = instruction.element; // we first run this so that the previous animation player
            // data can be passed into the successive animation players

            var allQueriedPlayers = [];
            var allConsumedElements = new Set();
            var allSubElements = new Set();
            var allNewPlayers = instruction.timelines.map(function (timelineInstruction) {
              var element = timelineInstruction.element;
              allConsumedElements.add(element); // FIXME (matsko): make sure to-be-removed animations are removed properly

              var details = element[REMOVAL_FLAG];
              if (details && details.removedBeforeQueried) return new _angular_animations__WEBPACK_IMPORTED_MODULE_0__.NoopAnimationPlayer(timelineInstruction.duration, timelineInstruction.delay);
              var isQueriedElement = element !== rootElement;
              var previousPlayers = flattenGroupPlayers((allPreviousPlayersMap.get(element) || EMPTY_PLAYER_ARRAY).map(function (p) {
                return p.getRealPlayer();
              })).filter(function (p) {
                // the `element` is not apart of the AnimationPlayer definition, but
                // Mock/WebAnimations
                // use the element within their implementation. This will be added in Angular5 to
                // AnimationPlayer
                var pp = p;
                return pp.element ? pp.element === element : false;
              });
              var preStyles = preStylesMap.get(element);
              var postStyles = postStylesMap.get(element);
              var keyframes = normalizeKeyframes(_this44.driver, _this44._normalizer, element, timelineInstruction.keyframes, preStyles, postStyles);

              var player = _this44._buildPlayer(timelineInstruction, keyframes, previousPlayers); // this means that this particular player belongs to a sub trigger. It is
              // important that we match this player up with the corresponding (@trigger.listener)


              if (timelineInstruction.subTimeline && skippedPlayersMap) {
                allSubElements.add(element);
              }

              if (isQueriedElement) {
                var wrappedPlayer = new TransitionAnimationPlayer(namespaceId, triggerName, element);
                wrappedPlayer.setRealPlayer(player);
                allQueriedPlayers.push(wrappedPlayer);
              }

              return player;
            });
            allQueriedPlayers.forEach(function (player) {
              getOrSetAsInMap(_this44.playersByQueriedElement, player.element, []).push(player);
              player.onDone(function () {
                return deleteOrUnsetInMap(_this44.playersByQueriedElement, player.element, player);
              });
            });
            allConsumedElements.forEach(function (element) {
              return addClass(element, NG_ANIMATING_CLASSNAME);
            });
            var player = optimizeGroupPlayer(allNewPlayers);
            player.onDestroy(function () {
              allConsumedElements.forEach(function (element) {
                return removeClass(element, NG_ANIMATING_CLASSNAME);
              });
              setStyles(rootElement, instruction.toStyles);
            }); // this basically makes all of the callbacks for sub element animations
            // be dependent on the upper players for when they finish

            allSubElements.forEach(function (element) {
              getOrSetAsInMap(skippedPlayersMap, element, []).push(player);
            });
            return player;
          }
        }, {
          key: "_buildPlayer",
          value: function _buildPlayer(instruction, keyframes, previousPlayers) {
            if (keyframes.length > 0) {
              return this.driver.animate(instruction.element, keyframes, instruction.duration, instruction.delay, instruction.easing, previousPlayers);
            } // special case for when an empty transition|definition is provided
            // ... there is no point in rendering an empty animation


            return new _angular_animations__WEBPACK_IMPORTED_MODULE_0__.NoopAnimationPlayer(instruction.duration, instruction.delay);
          }
        }]);

        return TransitionAnimationEngine;
      }();

      var TransitionAnimationPlayer = /*#__PURE__*/function () {
        function TransitionAnimationPlayer(namespaceId, triggerName, element) {
          _classCallCheck(this, TransitionAnimationPlayer);

          this.namespaceId = namespaceId;
          this.triggerName = triggerName;
          this.element = element;
          this._player = new _angular_animations__WEBPACK_IMPORTED_MODULE_0__.NoopAnimationPlayer();
          this._containsRealPlayer = false;
          this._queuedCallbacks = {};
          this.destroyed = false;
          this.markedForDestroy = false;
          this.disabled = false;
          this.queued = true;
          this.totalTime = 0;
        }

        _createClass2(TransitionAnimationPlayer, [{
          key: "setRealPlayer",
          value: function setRealPlayer(player) {
            var _this45 = this;

            if (this._containsRealPlayer) return;
            this._player = player;
            Object.keys(this._queuedCallbacks).forEach(function (phase) {
              _this45._queuedCallbacks[phase].forEach(function (callback) {
                return listenOnPlayer(player, phase, undefined, callback);
              });
            });
            this._queuedCallbacks = {};
            this._containsRealPlayer = true;
            this.overrideTotalTime(player.totalTime);
            this.queued = false;
          }
        }, {
          key: "getRealPlayer",
          value: function getRealPlayer() {
            return this._player;
          }
        }, {
          key: "overrideTotalTime",
          value: function overrideTotalTime(totalTime) {
            this.totalTime = totalTime;
          }
        }, {
          key: "syncPlayerEvents",
          value: function syncPlayerEvents(player) {
            var _this46 = this;

            var p = this._player;

            if (p.triggerCallback) {
              player.onStart(function () {
                return p.triggerCallback('start');
              });
            }

            player.onDone(function () {
              return _this46.finish();
            });
            player.onDestroy(function () {
              return _this46.destroy();
            });
          }
        }, {
          key: "_queueEvent",
          value: function _queueEvent(name, callback) {
            getOrSetAsInMap(this._queuedCallbacks, name, []).push(callback);
          }
        }, {
          key: "onDone",
          value: function onDone(fn) {
            if (this.queued) {
              this._queueEvent('done', fn);
            }

            this._player.onDone(fn);
          }
        }, {
          key: "onStart",
          value: function onStart(fn) {
            if (this.queued) {
              this._queueEvent('start', fn);
            }

            this._player.onStart(fn);
          }
        }, {
          key: "onDestroy",
          value: function onDestroy(fn) {
            if (this.queued) {
              this._queueEvent('destroy', fn);
            }

            this._player.onDestroy(fn);
          }
        }, {
          key: "init",
          value: function init() {
            this._player.init();
          }
        }, {
          key: "hasStarted",
          value: function hasStarted() {
            return this.queued ? false : this._player.hasStarted();
          }
        }, {
          key: "play",
          value: function play() {
            !this.queued && this._player.play();
          }
        }, {
          key: "pause",
          value: function pause() {
            !this.queued && this._player.pause();
          }
        }, {
          key: "restart",
          value: function restart() {
            !this.queued && this._player.restart();
          }
        }, {
          key: "finish",
          value: function finish() {
            this._player.finish();
          }
        }, {
          key: "destroy",
          value: function destroy() {
            this.destroyed = true;

            this._player.destroy();
          }
        }, {
          key: "reset",
          value: function reset() {
            !this.queued && this._player.reset();
          }
        }, {
          key: "setPosition",
          value: function setPosition(p) {
            if (!this.queued) {
              this._player.setPosition(p);
            }
          }
        }, {
          key: "getPosition",
          value: function getPosition() {
            return this.queued ? 0 : this._player.getPosition();
          }
          /** @internal */

        }, {
          key: "triggerCallback",
          value: function triggerCallback(phaseName) {
            var p = this._player;

            if (p.triggerCallback) {
              p.triggerCallback(phaseName);
            }
          }
        }]);

        return TransitionAnimationPlayer;
      }();

      function deleteOrUnsetInMap(map, key, value) {
        var currentValues;

        if (map instanceof Map) {
          currentValues = map.get(key);

          if (currentValues) {
            if (currentValues.length) {
              var index = currentValues.indexOf(value);
              currentValues.splice(index, 1);
            }

            if (currentValues.length == 0) {
              map["delete"](key);
            }
          }
        } else {
          currentValues = map[key];

          if (currentValues) {
            if (currentValues.length) {
              var _index2 = currentValues.indexOf(value);

              currentValues.splice(_index2, 1);
            }

            if (currentValues.length == 0) {
              delete map[key];
            }
          }
        }

        return currentValues;
      }

      function normalizeTriggerValue(value) {
        // we use `!= null` here because it's the most simple
        // way to test against a "falsy" value without mixing
        // in empty strings or a zero value. DO NOT OPTIMIZE.
        return value != null ? value : null;
      }

      function isElementNode(node) {
        return node && node['nodeType'] === 1;
      }

      function isTriggerEventValid(eventName) {
        return eventName == 'start' || eventName == 'done';
      }

      function cloakElement(element, value) {
        var oldValue = element.style.display;
        element.style.display = value != null ? value : 'none';
        return oldValue;
      }

      function cloakAndComputeStyles(valuesMap, driver, elements, elementPropsMap, defaultStyle) {
        var cloakVals = [];
        elements.forEach(function (element) {
          return cloakVals.push(cloakElement(element));
        });
        var failedElements = [];
        elementPropsMap.forEach(function (props, element) {
          var styles = {};
          props.forEach(function (prop) {
            var value = styles[prop] = driver.computeStyle(element, prop, defaultStyle); // there is no easy way to detect this because a sub element could be removed
            // by a parent animation element being detached.

            if (!value || value.length == 0) {
              element[REMOVAL_FLAG] = NULL_REMOVED_QUERIED_STATE;
              failedElements.push(element);
            }
          });
          valuesMap.set(element, styles);
        }); // we use a index variable here since Set.forEach(a, i) does not return
        // an index value for the closure (but instead just the value)

        var i = 0;
        elements.forEach(function (element) {
          return cloakElement(element, cloakVals[i++]);
        });
        return failedElements;
      }
      /*
      Since the Angular renderer code will return a collection of inserted
      nodes in all areas of a DOM tree, it's up to this algorithm to figure
      out which nodes are roots for each animation @trigger.
      
      By placing each inserted node into a Set and traversing upwards, it
      is possible to find the @trigger elements and well any direct *star
      insertion nodes, if a @trigger root is found then the enter element
      is placed into the Map[@trigger] spot.
       */


      function buildRootMap(roots, nodes) {
        var rootMap = new Map();
        roots.forEach(function (root) {
          return rootMap.set(root, []);
        });
        if (nodes.length == 0) return rootMap;
        var NULL_NODE = 1;
        var nodeSet = new Set(nodes);
        var localRootMap = new Map();

        function getRoot(node) {
          if (!node) return NULL_NODE;
          var root = localRootMap.get(node);
          if (root) return root;
          var parent = node.parentNode;

          if (rootMap.has(parent)) {
            // ngIf inside @trigger
            root = parent;
          } else if (nodeSet.has(parent)) {
            // ngIf inside ngIf
            root = NULL_NODE;
          } else {
            // recurse upwards
            root = getRoot(parent);
          }

          localRootMap.set(node, root);
          return root;
        }

        nodes.forEach(function (node) {
          var root = getRoot(node);

          if (root !== NULL_NODE) {
            rootMap.get(root).push(node);
          }
        });
        return rootMap;
      }

      var CLASSES_CACHE_KEY = '$$classes';

      function containsClass(element, className) {
        if (element.classList) {
          return element.classList.contains(className);
        } else {
          var classes = element[CLASSES_CACHE_KEY];
          return classes && classes[className];
        }
      }

      function addClass(element, className) {
        if (element.classList) {
          element.classList.add(className);
        } else {
          var classes = element[CLASSES_CACHE_KEY];

          if (!classes) {
            classes = element[CLASSES_CACHE_KEY] = {};
          }

          classes[className] = true;
        }
      }

      function removeClass(element, className) {
        if (element.classList) {
          element.classList.remove(className);
        } else {
          var classes = element[CLASSES_CACHE_KEY];

          if (classes) {
            delete classes[className];
          }
        }
      }

      function removeNodesAfterAnimationDone(engine, element, players) {
        optimizeGroupPlayer(players).onDone(function () {
          return engine.processLeaveNode(element);
        });
      }

      function flattenGroupPlayers(players) {
        var finalPlayers = [];

        _flattenGroupPlayersRecur(players, finalPlayers);

        return finalPlayers;
      }

      function _flattenGroupPlayersRecur(players, finalPlayers) {
        for (var i = 0; i < players.length; i++) {
          var player = players[i];

          if (player instanceof _angular_animations__WEBPACK_IMPORTED_MODULE_0__["ɵAnimationGroupPlayer"]) {
            _flattenGroupPlayersRecur(player.players, finalPlayers);
          } else {
            finalPlayers.push(player);
          }
        }
      }

      function objEquals(a, b) {
        var k1 = Object.keys(a);
        var k2 = Object.keys(b);
        if (k1.length != k2.length) return false;

        for (var i = 0; i < k1.length; i++) {
          var prop = k1[i];
          if (!b.hasOwnProperty(prop) || a[prop] !== b[prop]) return false;
        }

        return true;
      }

      function replacePostStylesAsPre(element, allPreStyleElements, allPostStyleElements) {
        var postEntry = allPostStyleElements.get(element);
        if (!postEntry) return false;
        var preEntry = allPreStyleElements.get(element);

        if (preEntry) {
          postEntry.forEach(function (data) {
            return preEntry.add(data);
          });
        } else {
          allPreStyleElements.set(element, postEntry);
        }

        allPostStyleElements["delete"](element);
        return true;
      }

      var AnimationEngine = /*#__PURE__*/function () {
        function AnimationEngine(bodyNode, _driver, normalizer) {
          var _this47 = this;

          _classCallCheck(this, AnimationEngine);

          this.bodyNode = bodyNode;
          this._driver = _driver;
          this._triggerCache = {}; // this method is designed to be overridden by the code that uses this engine

          this.onRemovalComplete = function (element, context) {};

          this._transitionEngine = new TransitionAnimationEngine(bodyNode, _driver, normalizer);
          this._timelineEngine = new TimelineAnimationEngine(bodyNode, _driver, normalizer);

          this._transitionEngine.onRemovalComplete = function (element, context) {
            return _this47.onRemovalComplete(element, context);
          };
        }

        _createClass2(AnimationEngine, [{
          key: "registerTrigger",
          value: function registerTrigger(componentId, namespaceId, hostElement, name, metadata) {
            var cacheKey = componentId + '-' + name;
            var trigger = this._triggerCache[cacheKey];

            if (!trigger) {
              var errors = [];
              var ast = buildAnimationAst(this._driver, metadata, errors);

              if (errors.length) {
                throw new Error("The animation trigger \"".concat(name, "\" has failed to build due to the following errors:\n - ").concat(errors.join('\n - ')));
              }

              trigger = buildTrigger(name, ast);
              this._triggerCache[cacheKey] = trigger;
            }

            this._transitionEngine.registerTrigger(namespaceId, name, trigger);
          }
        }, {
          key: "register",
          value: function register(namespaceId, hostElement) {
            this._transitionEngine.register(namespaceId, hostElement);
          }
        }, {
          key: "destroy",
          value: function destroy(namespaceId, context) {
            this._transitionEngine.destroy(namespaceId, context);
          }
        }, {
          key: "onInsert",
          value: function onInsert(namespaceId, element, parent, insertBefore) {
            this._transitionEngine.insertNode(namespaceId, element, parent, insertBefore);
          }
        }, {
          key: "onRemove",
          value: function onRemove(namespaceId, element, context, isHostElement) {
            this._transitionEngine.removeNode(namespaceId, element, isHostElement || false, context);
          }
        }, {
          key: "disableAnimations",
          value: function disableAnimations(element, disable) {
            this._transitionEngine.markElementAsDisabled(element, disable);
          }
        }, {
          key: "process",
          value: function process(namespaceId, element, property, value) {
            if (property.charAt(0) == '@') {
              var _parseTimelineCommand = parseTimelineCommand(property),
                  _parseTimelineCommand2 = _slicedToArray(_parseTimelineCommand, 2),
                  id = _parseTimelineCommand2[0],
                  action = _parseTimelineCommand2[1];

              var args = value;

              this._timelineEngine.command(id, element, action, args);
            } else {
              this._transitionEngine.trigger(namespaceId, element, property, value);
            }
          }
        }, {
          key: "listen",
          value: function listen(namespaceId, element, eventName, eventPhase, callback) {
            // @@listen
            if (eventName.charAt(0) == '@') {
              var _parseTimelineCommand3 = parseTimelineCommand(eventName),
                  _parseTimelineCommand4 = _slicedToArray(_parseTimelineCommand3, 2),
                  id = _parseTimelineCommand4[0],
                  action = _parseTimelineCommand4[1];

              return this._timelineEngine.listen(id, element, action, callback);
            }

            return this._transitionEngine.listen(namespaceId, element, eventName, eventPhase, callback);
          }
        }, {
          key: "flush",
          value: function flush() {
            var microtaskId = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : -1;

            this._transitionEngine.flush(microtaskId);
          }
        }, {
          key: "players",
          get: function get() {
            return this._transitionEngine.players.concat(this._timelineEngine.players);
          }
        }, {
          key: "whenRenderingDone",
          value: function whenRenderingDone() {
            return this._transitionEngine.whenRenderingDone();
          }
        }]);

        return AnimationEngine;
      }();
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * Returns an instance of `SpecialCasedStyles` if and when any special (non animateable) styles are
       * detected.
       *
       * In CSS there exist properties that cannot be animated within a keyframe animation
       * (whether it be via CSS keyframes or web-animations) and the animation implementation
       * will ignore them. This function is designed to detect those special cased styles and
       * return a container that will be executed at the start and end of the animation.
       *
       * @returns an instance of `SpecialCasedStyles` if any special styles are detected otherwise `null`
       */


      function packageNonAnimatableStyles(element, styles) {
        var startStyles = null;
        var endStyles = null;

        if (Array.isArray(styles) && styles.length) {
          startStyles = filterNonAnimatableStyles(styles[0]);

          if (styles.length > 1) {
            endStyles = filterNonAnimatableStyles(styles[styles.length - 1]);
          }
        } else if (styles) {
          startStyles = filterNonAnimatableStyles(styles);
        }

        return startStyles || endStyles ? new SpecialCasedStyles(element, startStyles, endStyles) : null;
      }
      /**
       * Designed to be executed during a keyframe-based animation to apply any special-cased styles.
       *
       * When started (when the `start()` method is run) then the provided `startStyles`
       * will be applied. When finished (when the `finish()` method is called) the
       * `endStyles` will be applied as well any any starting styles. Finally when
       * `destroy()` is called then all styles will be removed.
       */


      var SpecialCasedStyles = /*#__PURE__*/function () {
        function SpecialCasedStyles(_element, _startStyles, _endStyles) {
          _classCallCheck(this, SpecialCasedStyles);

          this._element = _element;
          this._startStyles = _startStyles;
          this._endStyles = _endStyles;
          this._state = 0
          /* Pending */
          ;
          var initialStyles = SpecialCasedStyles.initialStylesByElement.get(_element);

          if (!initialStyles) {
            SpecialCasedStyles.initialStylesByElement.set(_element, initialStyles = {});
          }

          this._initialStyles = initialStyles;
        }

        _createClass2(SpecialCasedStyles, [{
          key: "start",
          value: function start() {
            if (this._state < 1
            /* Started */
            ) {
              if (this._startStyles) {
                setStyles(this._element, this._startStyles, this._initialStyles);
              }

              this._state = 1
              /* Started */
              ;
            }
          }
        }, {
          key: "finish",
          value: function finish() {
            this.start();

            if (this._state < 2
            /* Finished */
            ) {
              setStyles(this._element, this._initialStyles);

              if (this._endStyles) {
                setStyles(this._element, this._endStyles);
                this._endStyles = null;
              }

              this._state = 1
              /* Started */
              ;
            }
          }
        }, {
          key: "destroy",
          value: function destroy() {
            this.finish();

            if (this._state < 3
            /* Destroyed */
            ) {
              SpecialCasedStyles.initialStylesByElement["delete"](this._element);

              if (this._startStyles) {
                eraseStyles(this._element, this._startStyles);
                this._endStyles = null;
              }

              if (this._endStyles) {
                eraseStyles(this._element, this._endStyles);
                this._endStyles = null;
              }

              setStyles(this._element, this._initialStyles);
              this._state = 3
              /* Destroyed */
              ;
            }
          }
        }]);

        return SpecialCasedStyles;
      }();

      SpecialCasedStyles.initialStylesByElement = /*#__PURE__*/new WeakMap();

      function filterNonAnimatableStyles(styles) {
        var result = null;
        var props = Object.keys(styles);

        for (var i = 0; i < props.length; i++) {
          var prop = props[i];

          if (isNonAnimatableStyle(prop)) {
            result = result || {};
            result[prop] = styles[prop];
          }
        }

        return result;
      }

      function isNonAnimatableStyle(prop) {
        return prop === 'display' || prop === 'position';
      }
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */


      var ELAPSED_TIME_MAX_DECIMAL_PLACES = 3;
      var ANIMATION_PROP = 'animation';
      var ANIMATIONEND_EVENT = 'animationend';
      var ONE_SECOND$1 = 1000;

      var ElementAnimationStyleHandler = /*#__PURE__*/function () {
        function ElementAnimationStyleHandler(_element, _name, _duration, _delay, _easing, _fillMode, _onDoneFn) {
          var _this48 = this;

          _classCallCheck(this, ElementAnimationStyleHandler);

          this._element = _element;
          this._name = _name;
          this._duration = _duration;
          this._delay = _delay;
          this._easing = _easing;
          this._fillMode = _fillMode;
          this._onDoneFn = _onDoneFn;
          this._finished = false;
          this._destroyed = false;
          this._startTime = 0;
          this._position = 0;

          this._eventFn = function (e) {
            return _this48._handleCallback(e);
          };
        }

        _createClass2(ElementAnimationStyleHandler, [{
          key: "apply",
          value: function apply() {
            applyKeyframeAnimation(this._element, "".concat(this._duration, "ms ").concat(this._easing, " ").concat(this._delay, "ms 1 normal ").concat(this._fillMode, " ").concat(this._name));
            addRemoveAnimationEvent(this._element, this._eventFn, false);
            this._startTime = Date.now();
          }
        }, {
          key: "pause",
          value: function pause() {
            playPauseAnimation(this._element, this._name, 'paused');
          }
        }, {
          key: "resume",
          value: function resume() {
            playPauseAnimation(this._element, this._name, 'running');
          }
        }, {
          key: "setPosition",
          value: function setPosition(position) {
            var index = findIndexForAnimation(this._element, this._name);
            this._position = position * this._duration;
            setAnimationStyle(this._element, 'Delay', "-".concat(this._position, "ms"), index);
          }
        }, {
          key: "getPosition",
          value: function getPosition() {
            return this._position;
          }
        }, {
          key: "_handleCallback",
          value: function _handleCallback(event) {
            var timestamp = event._ngTestManualTimestamp || Date.now();
            var elapsedTime = parseFloat(event.elapsedTime.toFixed(ELAPSED_TIME_MAX_DECIMAL_PLACES)) * ONE_SECOND$1;

            if (event.animationName == this._name && Math.max(timestamp - this._startTime, 0) >= this._delay && elapsedTime >= this._duration) {
              this.finish();
            }
          }
        }, {
          key: "finish",
          value: function finish() {
            if (this._finished) return;
            this._finished = true;

            this._onDoneFn();

            addRemoveAnimationEvent(this._element, this._eventFn, true);
          }
        }, {
          key: "destroy",
          value: function destroy() {
            if (this._destroyed) return;
            this._destroyed = true;
            this.finish();
            removeKeyframeAnimation(this._element, this._name);
          }
        }]);

        return ElementAnimationStyleHandler;
      }();

      function playPauseAnimation(element, name, status) {
        var index = findIndexForAnimation(element, name);
        setAnimationStyle(element, 'PlayState', status, index);
      }

      function applyKeyframeAnimation(element, value) {
        var anim = getAnimationStyle(element, '').trim();
        var index = 0;

        if (anim.length) {
          index = countChars(anim, ',') + 1;
          value = "".concat(anim, ", ").concat(value);
        }

        setAnimationStyle(element, '', value);
        return index;
      }

      function removeKeyframeAnimation(element, name) {
        var anim = getAnimationStyle(element, '');
        var tokens = anim.split(',');
        var index = findMatchingTokenIndex(tokens, name);

        if (index >= 0) {
          tokens.splice(index, 1);
          var newValue = tokens.join(',');
          setAnimationStyle(element, '', newValue);
        }
      }

      function findIndexForAnimation(element, value) {
        var anim = getAnimationStyle(element, '');

        if (anim.indexOf(',') > 0) {
          var tokens = anim.split(',');
          return findMatchingTokenIndex(tokens, value);
        }

        return findMatchingTokenIndex([anim], value);
      }

      function findMatchingTokenIndex(tokens, searchToken) {
        for (var i = 0; i < tokens.length; i++) {
          if (tokens[i].indexOf(searchToken) >= 0) {
            return i;
          }
        }

        return -1;
      }

      function addRemoveAnimationEvent(element, fn, doRemove) {
        doRemove ? element.removeEventListener(ANIMATIONEND_EVENT, fn) : element.addEventListener(ANIMATIONEND_EVENT, fn);
      }

      function setAnimationStyle(element, name, value, index) {
        var prop = ANIMATION_PROP + name;

        if (index != null) {
          var oldValue = element.style[prop];

          if (oldValue.length) {
            var tokens = oldValue.split(',');
            tokens[index] = value;
            value = tokens.join(',');
          }
        }

        element.style[prop] = value;
      }

      function getAnimationStyle(element, name) {
        return element.style[ANIMATION_PROP + name] || '';
      }

      function countChars(value, _char) {
        var count = 0;

        for (var i = 0; i < value.length; i++) {
          var c = value.charAt(i);
          if (c === _char) count++;
        }

        return count;
      }

      var DEFAULT_FILL_MODE = 'forwards';
      var DEFAULT_EASING = 'linear';

      var CssKeyframesPlayer = /*#__PURE__*/function () {
        function CssKeyframesPlayer(element, keyframes, animationName, _duration, _delay, easing, _finalStyles, _specialStyles) {
          _classCallCheck(this, CssKeyframesPlayer);

          this.element = element;
          this.keyframes = keyframes;
          this.animationName = animationName;
          this._duration = _duration;
          this._delay = _delay;
          this._finalStyles = _finalStyles;
          this._specialStyles = _specialStyles;
          this._onDoneFns = [];
          this._onStartFns = [];
          this._onDestroyFns = [];
          this.currentSnapshot = {};
          this._state = 0;
          this.easing = easing || DEFAULT_EASING;
          this.totalTime = _duration + _delay;

          this._buildStyler();
        }

        _createClass2(CssKeyframesPlayer, [{
          key: "onStart",
          value: function onStart(fn) {
            this._onStartFns.push(fn);
          }
        }, {
          key: "onDone",
          value: function onDone(fn) {
            this._onDoneFns.push(fn);
          }
        }, {
          key: "onDestroy",
          value: function onDestroy(fn) {
            this._onDestroyFns.push(fn);
          }
        }, {
          key: "destroy",
          value: function destroy() {
            this.init();
            if (this._state >= 4
            /* DESTROYED */
            ) return;
            this._state = 4
            /* DESTROYED */
            ;

            this._styler.destroy();

            this._flushStartFns();

            this._flushDoneFns();

            if (this._specialStyles) {
              this._specialStyles.destroy();
            }

            this._onDestroyFns.forEach(function (fn) {
              return fn();
            });

            this._onDestroyFns = [];
          }
        }, {
          key: "_flushDoneFns",
          value: function _flushDoneFns() {
            this._onDoneFns.forEach(function (fn) {
              return fn();
            });

            this._onDoneFns = [];
          }
        }, {
          key: "_flushStartFns",
          value: function _flushStartFns() {
            this._onStartFns.forEach(function (fn) {
              return fn();
            });

            this._onStartFns = [];
          }
        }, {
          key: "finish",
          value: function finish() {
            this.init();
            if (this._state >= 3
            /* FINISHED */
            ) return;
            this._state = 3
            /* FINISHED */
            ;

            this._styler.finish();

            this._flushStartFns();

            if (this._specialStyles) {
              this._specialStyles.finish();
            }

            this._flushDoneFns();
          }
        }, {
          key: "setPosition",
          value: function setPosition(value) {
            this._styler.setPosition(value);
          }
        }, {
          key: "getPosition",
          value: function getPosition() {
            return this._styler.getPosition();
          }
        }, {
          key: "hasStarted",
          value: function hasStarted() {
            return this._state >= 2
            /* STARTED */
            ;
          }
        }, {
          key: "init",
          value: function init() {
            if (this._state >= 1
            /* INITIALIZED */
            ) return;
            this._state = 1
            /* INITIALIZED */
            ;
            var elm = this.element;

            this._styler.apply();

            if (this._delay) {
              this._styler.pause();
            }
          }
        }, {
          key: "play",
          value: function play() {
            this.init();

            if (!this.hasStarted()) {
              this._flushStartFns();

              this._state = 2
              /* STARTED */
              ;

              if (this._specialStyles) {
                this._specialStyles.start();
              }
            }

            this._styler.resume();
          }
        }, {
          key: "pause",
          value: function pause() {
            this.init();

            this._styler.pause();
          }
        }, {
          key: "restart",
          value: function restart() {
            this.reset();
            this.play();
          }
        }, {
          key: "reset",
          value: function reset() {
            this._state = 0
            /* RESET */
            ;

            this._styler.destroy();

            this._buildStyler();

            this._styler.apply();
          }
        }, {
          key: "_buildStyler",
          value: function _buildStyler() {
            var _this49 = this;

            this._styler = new ElementAnimationStyleHandler(this.element, this.animationName, this._duration, this._delay, this.easing, DEFAULT_FILL_MODE, function () {
              return _this49.finish();
            });
          }
          /** @internal */

        }, {
          key: "triggerCallback",
          value: function triggerCallback(phaseName) {
            var methods = phaseName == 'start' ? this._onStartFns : this._onDoneFns;
            methods.forEach(function (fn) {
              return fn();
            });
            methods.length = 0;
          }
        }, {
          key: "beforeDestroy",
          value: function beforeDestroy() {
            var _this50 = this;

            this.init();
            var styles = {};

            if (this.hasStarted()) {
              var finished = this._state >= 3
              /* FINISHED */
              ;
              Object.keys(this._finalStyles).forEach(function (prop) {
                if (prop != 'offset') {
                  styles[prop] = finished ? _this50._finalStyles[prop] : computeStyle(_this50.element, prop);
                }
              });
            }

            this.currentSnapshot = styles;
          }
        }]);

        return CssKeyframesPlayer;
      }();
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */


      var DirectStylePlayer = /*#__PURE__*/function (_angular_animations__) {
        _inherits(DirectStylePlayer, _angular_animations__);

        var _super4 = _createSuper(DirectStylePlayer);

        function DirectStylePlayer(element, styles) {
          var _this51;

          _classCallCheck(this, DirectStylePlayer);

          _this51 = _super4.call(this);
          _this51.element = element;
          _this51._startingStyles = {};
          _this51.__initialized = false;
          _this51._styles = hypenatePropsObject(styles);
          return _this51;
        }

        _createClass2(DirectStylePlayer, [{
          key: "init",
          value: function init() {
            var _this52 = this;

            if (this.__initialized || !this._startingStyles) return;
            this.__initialized = true;
            Object.keys(this._styles).forEach(function (prop) {
              _this52._startingStyles[prop] = _this52.element.style[prop];
            });

            _get(_getPrototypeOf(DirectStylePlayer.prototype), "init", this).call(this);
          }
        }, {
          key: "play",
          value: function play() {
            var _this53 = this;

            if (!this._startingStyles) return;
            this.init();
            Object.keys(this._styles).forEach(function (prop) {
              return _this53.element.style.setProperty(prop, _this53._styles[prop]);
            });

            _get(_getPrototypeOf(DirectStylePlayer.prototype), "play", this).call(this);
          }
        }, {
          key: "destroy",
          value: function destroy() {
            var _this54 = this;

            if (!this._startingStyles) return;
            Object.keys(this._startingStyles).forEach(function (prop) {
              var value = _this54._startingStyles[prop];

              if (value) {
                _this54.element.style.setProperty(prop, value);
              } else {
                _this54.element.style.removeProperty(prop);
              }
            });
            this._startingStyles = null;

            _get(_getPrototypeOf(DirectStylePlayer.prototype), "destroy", this).call(this);
          }
        }]);

        return DirectStylePlayer;
      }(_angular_animations__WEBPACK_IMPORTED_MODULE_0__.NoopAnimationPlayer);

      var KEYFRAMES_NAME_PREFIX = 'gen_css_kf_';
      var TAB_SPACE = ' ';

      var CssKeyframesDriver = /*#__PURE__*/function () {
        function CssKeyframesDriver() {
          _classCallCheck(this, CssKeyframesDriver);

          this._count = 0;
        }

        _createClass2(CssKeyframesDriver, [{
          key: "validateStyleProperty",
          value: function validateStyleProperty(prop) {
            return _validateStyleProperty(prop);
          }
        }, {
          key: "matchesElement",
          value: function matchesElement(element, selector) {
            return _matchesElement(element, selector);
          }
        }, {
          key: "containsElement",
          value: function containsElement(elm1, elm2) {
            return _containsElement(elm1, elm2);
          }
        }, {
          key: "query",
          value: function query(element, selector, multi) {
            return invokeQuery(element, selector, multi);
          }
        }, {
          key: "computeStyle",
          value: function computeStyle(element, prop, defaultValue) {
            return window.getComputedStyle(element)[prop];
          }
        }, {
          key: "buildKeyframeElement",
          value: function buildKeyframeElement(element, name, keyframes) {
            keyframes = keyframes.map(function (kf) {
              return hypenatePropsObject(kf);
            });
            var keyframeStr = "@keyframes ".concat(name, " {\n");
            var tab = '';
            keyframes.forEach(function (kf) {
              tab = TAB_SPACE;
              var offset = parseFloat(kf['offset']);
              keyframeStr += "".concat(tab).concat(offset * 100, "% {\n");
              tab += TAB_SPACE;
              Object.keys(kf).forEach(function (prop) {
                var value = kf[prop];

                switch (prop) {
                  case 'offset':
                    return;

                  case 'easing':
                    if (value) {
                      keyframeStr += "".concat(tab, "animation-timing-function: ").concat(value, ";\n");
                    }

                    return;

                  default:
                    keyframeStr += "".concat(tab).concat(prop, ": ").concat(value, ";\n");
                    return;
                }
              });
              keyframeStr += "".concat(tab, "}\n");
            });
            keyframeStr += "}\n";
            var kfElm = document.createElement('style');
            kfElm.textContent = keyframeStr;
            return kfElm;
          }
        }, {
          key: "animate",
          value: function animate(element, keyframes, duration, delay, easing) {
            var previousPlayers = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : [];
            var scrubberAccessRequested = arguments.length > 6 ? arguments[6] : undefined;

            if ((typeof ngDevMode === 'undefined' || ngDevMode) && scrubberAccessRequested) {
              notifyFaultyScrubber();
            }

            var previousCssKeyframePlayers = previousPlayers.filter(function (player) {
              return player instanceof CssKeyframesPlayer;
            });
            var previousStyles = {};

            if (allowPreviousPlayerStylesMerge(duration, delay)) {
              previousCssKeyframePlayers.forEach(function (player) {
                var styles = player.currentSnapshot;
                Object.keys(styles).forEach(function (prop) {
                  return previousStyles[prop] = styles[prop];
                });
              });
            }

            keyframes = balancePreviousStylesIntoKeyframes(element, keyframes, previousStyles);
            var finalStyles = flattenKeyframesIntoStyles(keyframes); // if there is no animation then there is no point in applying
            // styles and waiting for an event to get fired. This causes lag.
            // It's better to just directly apply the styles to the element
            // via the direct styling animation player.

            if (duration == 0) {
              return new DirectStylePlayer(element, finalStyles);
            }

            var animationName = "".concat(KEYFRAMES_NAME_PREFIX).concat(this._count++);
            var kfElm = this.buildKeyframeElement(element, animationName, keyframes);
            var nodeToAppendKfElm = findNodeToAppendKeyframeElement(element);
            nodeToAppendKfElm.appendChild(kfElm);
            var specialStyles = packageNonAnimatableStyles(element, keyframes);
            var player = new CssKeyframesPlayer(element, keyframes, animationName, duration, delay, easing, finalStyles, specialStyles);
            player.onDestroy(function () {
              return removeElement(kfElm);
            });
            return player;
          }
        }]);

        return CssKeyframesDriver;
      }();

      function findNodeToAppendKeyframeElement(element) {
        var _a;

        var rootNode = (_a = element.getRootNode) === null || _a === void 0 ? void 0 : _a.call(element);

        if (typeof ShadowRoot !== 'undefined' && rootNode instanceof ShadowRoot) {
          return rootNode;
        }

        return document.head;
      }

      function flattenKeyframesIntoStyles(keyframes) {
        var flatKeyframes = {};

        if (keyframes) {
          var kfs = Array.isArray(keyframes) ? keyframes : [keyframes];
          kfs.forEach(function (kf) {
            Object.keys(kf).forEach(function (prop) {
              if (prop == 'offset' || prop == 'easing') return;
              flatKeyframes[prop] = kf[prop];
            });
          });
        }

        return flatKeyframes;
      }

      function removeElement(node) {
        node.parentNode.removeChild(node);
      }

      var warningIssued = false;

      function notifyFaultyScrubber() {
        if (warningIssued) return;
        console.warn('@angular/animations: please load the web-animations.js polyfill to allow programmatic access...\n', '  visit https://bit.ly/IWukam to learn more about using the web-animation-js polyfill.');
        warningIssued = true;
      }

      var WebAnimationsPlayer = /*#__PURE__*/function () {
        function WebAnimationsPlayer(element, keyframes, options, _specialStyles) {
          _classCallCheck(this, WebAnimationsPlayer);

          this.element = element;
          this.keyframes = keyframes;
          this.options = options;
          this._specialStyles = _specialStyles;
          this._onDoneFns = [];
          this._onStartFns = [];
          this._onDestroyFns = [];
          this._initialized = false;
          this._finished = false;
          this._started = false;
          this._destroyed = false;
          this.time = 0;
          this.parentPlayer = null;
          this.currentSnapshot = {};
          this._duration = options['duration'];
          this._delay = options['delay'] || 0;
          this.time = this._duration + this._delay;
        }

        _createClass2(WebAnimationsPlayer, [{
          key: "_onFinish",
          value: function _onFinish() {
            if (!this._finished) {
              this._finished = true;

              this._onDoneFns.forEach(function (fn) {
                return fn();
              });

              this._onDoneFns = [];
            }
          }
        }, {
          key: "init",
          value: function init() {
            this._buildPlayer();

            this._preparePlayerBeforeStart();
          }
        }, {
          key: "_buildPlayer",
          value: function _buildPlayer() {
            var _this55 = this;

            if (this._initialized) return;
            this._initialized = true;
            var keyframes = this.keyframes;
            this.domPlayer = this._triggerWebAnimation(this.element, keyframes, this.options);
            this._finalKeyframe = keyframes.length ? keyframes[keyframes.length - 1] : {};
            this.domPlayer.addEventListener('finish', function () {
              return _this55._onFinish();
            });
          }
        }, {
          key: "_preparePlayerBeforeStart",
          value: function _preparePlayerBeforeStart() {
            // this is required so that the player doesn't start to animate right away
            if (this._delay) {
              this._resetDomPlayerState();
            } else {
              this.domPlayer.pause();
            }
          }
          /** @internal */

        }, {
          key: "_triggerWebAnimation",
          value: function _triggerWebAnimation(element, keyframes, options) {
            // jscompiler doesn't seem to know animate is a native property because it's not fully
            // supported yet across common browsers (we polyfill it for Edge/Safari) [CL #143630929]
            return element['animate'](keyframes, options);
          }
        }, {
          key: "onStart",
          value: function onStart(fn) {
            this._onStartFns.push(fn);
          }
        }, {
          key: "onDone",
          value: function onDone(fn) {
            this._onDoneFns.push(fn);
          }
        }, {
          key: "onDestroy",
          value: function onDestroy(fn) {
            this._onDestroyFns.push(fn);
          }
        }, {
          key: "play",
          value: function play() {
            this._buildPlayer();

            if (!this.hasStarted()) {
              this._onStartFns.forEach(function (fn) {
                return fn();
              });

              this._onStartFns = [];
              this._started = true;

              if (this._specialStyles) {
                this._specialStyles.start();
              }
            }

            this.domPlayer.play();
          }
        }, {
          key: "pause",
          value: function pause() {
            this.init();
            this.domPlayer.pause();
          }
        }, {
          key: "finish",
          value: function finish() {
            this.init();

            if (this._specialStyles) {
              this._specialStyles.finish();
            }

            this._onFinish();

            this.domPlayer.finish();
          }
        }, {
          key: "reset",
          value: function reset() {
            this._resetDomPlayerState();

            this._destroyed = false;
            this._finished = false;
            this._started = false;
          }
        }, {
          key: "_resetDomPlayerState",
          value: function _resetDomPlayerState() {
            if (this.domPlayer) {
              this.domPlayer.cancel();
            }
          }
        }, {
          key: "restart",
          value: function restart() {
            this.reset();
            this.play();
          }
        }, {
          key: "hasStarted",
          value: function hasStarted() {
            return this._started;
          }
        }, {
          key: "destroy",
          value: function destroy() {
            if (!this._destroyed) {
              this._destroyed = true;

              this._resetDomPlayerState();

              this._onFinish();

              if (this._specialStyles) {
                this._specialStyles.destroy();
              }

              this._onDestroyFns.forEach(function (fn) {
                return fn();
              });

              this._onDestroyFns = [];
            }
          }
        }, {
          key: "setPosition",
          value: function setPosition(p) {
            if (this.domPlayer === undefined) {
              this.init();
            }

            this.domPlayer.currentTime = p * this.time;
          }
        }, {
          key: "getPosition",
          value: function getPosition() {
            return this.domPlayer.currentTime / this.time;
          }
        }, {
          key: "totalTime",
          get: function get() {
            return this._delay + this._duration;
          }
        }, {
          key: "beforeDestroy",
          value: function beforeDestroy() {
            var _this56 = this;

            var styles = {};

            if (this.hasStarted()) {
              Object.keys(this._finalKeyframe).forEach(function (prop) {
                if (prop != 'offset') {
                  styles[prop] = _this56._finished ? _this56._finalKeyframe[prop] : computeStyle(_this56.element, prop);
                }
              });
            }

            this.currentSnapshot = styles;
          }
          /** @internal */

        }, {
          key: "triggerCallback",
          value: function triggerCallback(phaseName) {
            var methods = phaseName == 'start' ? this._onStartFns : this._onDoneFns;
            methods.forEach(function (fn) {
              return fn();
            });
            methods.length = 0;
          }
        }]);

        return WebAnimationsPlayer;
      }();

      var WebAnimationsDriver = /*#__PURE__*/function () {
        function WebAnimationsDriver() {
          _classCallCheck(this, WebAnimationsDriver);

          this._isNativeImpl = /\{\s*\[native\s+code\]\s*\}/.test(getElementAnimateFn().toString());
          this._cssKeyframesDriver = new CssKeyframesDriver();
        }

        _createClass2(WebAnimationsDriver, [{
          key: "validateStyleProperty",
          value: function validateStyleProperty(prop) {
            return _validateStyleProperty(prop);
          }
        }, {
          key: "matchesElement",
          value: function matchesElement(element, selector) {
            return _matchesElement(element, selector);
          }
        }, {
          key: "containsElement",
          value: function containsElement(elm1, elm2) {
            return _containsElement(elm1, elm2);
          }
        }, {
          key: "query",
          value: function query(element, selector, multi) {
            return invokeQuery(element, selector, multi);
          }
        }, {
          key: "computeStyle",
          value: function computeStyle(element, prop, defaultValue) {
            return window.getComputedStyle(element)[prop];
          }
        }, {
          key: "overrideWebAnimationsSupport",
          value: function overrideWebAnimationsSupport(supported) {
            this._isNativeImpl = supported;
          }
        }, {
          key: "animate",
          value: function animate(element, keyframes, duration, delay, easing) {
            var previousPlayers = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : [];
            var scrubberAccessRequested = arguments.length > 6 ? arguments[6] : undefined;
            var useKeyframes = !scrubberAccessRequested && !this._isNativeImpl;

            if (useKeyframes) {
              return this._cssKeyframesDriver.animate(element, keyframes, duration, delay, easing, previousPlayers);
            }

            var fill = delay == 0 ? 'both' : 'forwards';
            var playerOptions = {
              duration: duration,
              delay: delay,
              fill: fill
            }; // we check for this to avoid having a null|undefined value be present
            // for the easing (which results in an error for certain browsers #9752)

            if (easing) {
              playerOptions['easing'] = easing;
            }

            var previousStyles = {};
            var previousWebAnimationPlayers = previousPlayers.filter(function (player) {
              return player instanceof WebAnimationsPlayer;
            });

            if (allowPreviousPlayerStylesMerge(duration, delay)) {
              previousWebAnimationPlayers.forEach(function (player) {
                var styles = player.currentSnapshot;
                Object.keys(styles).forEach(function (prop) {
                  return previousStyles[prop] = styles[prop];
                });
              });
            }

            keyframes = keyframes.map(function (styles) {
              return copyStyles(styles, false);
            });
            keyframes = balancePreviousStylesIntoKeyframes(element, keyframes, previousStyles);
            var specialStyles = packageNonAnimatableStyles(element, keyframes);
            return new WebAnimationsPlayer(element, keyframes, playerOptions, specialStyles);
          }
        }]);

        return WebAnimationsDriver;
      }();

      function supportsWebAnimations() {
        return typeof getElementAnimateFn() === 'function';
      }

      function getElementAnimateFn() {
        return isBrowser() && Element.prototype['animate'] || {};
      }
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * Generated bundle index. Do not edit.
       */

      /***/

    },

    /***/
    81649: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "ANIMATION_MODULE_TYPE": function ANIMATION_MODULE_TYPE() {
          return (
            /* binding */
            _ANIMATION_MODULE_TYPE
          );
        },

        /* harmony export */
        "BrowserAnimationsModule": function BrowserAnimationsModule() {
          return (
            /* binding */
            _BrowserAnimationsModule
          );
        },

        /* harmony export */
        "NoopAnimationsModule": function NoopAnimationsModule() {
          return (
            /* binding */
            _NoopAnimationsModule
          );
        },

        /* harmony export */
        "ɵAnimationRenderer": function ɵAnimationRenderer() {
          return (
            /* binding */
            AnimationRenderer
          );
        },

        /* harmony export */
        "ɵAnimationRendererFactory": function ɵAnimationRendererFactory() {
          return (
            /* binding */
            AnimationRendererFactory
          );
        },

        /* harmony export */
        "ɵBrowserAnimationBuilder": function ɵBrowserAnimationBuilder() {
          return (
            /* binding */
            BrowserAnimationBuilder
          );
        },

        /* harmony export */
        "ɵBrowserAnimationFactory": function ɵBrowserAnimationFactory() {
          return (
            /* binding */
            BrowserAnimationFactory
          );
        },

        /* harmony export */
        "ɵInjectableAnimationEngine": function ɵInjectableAnimationEngine() {
          return (
            /* binding */
            InjectableAnimationEngine
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_animations_animations_a": function ɵangular_packages_platform_browser_animations_animations_a() {
          return (
            /* binding */
            instantiateSupportedAnimationDriver
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_animations_animations_b": function ɵangular_packages_platform_browser_animations_animations_b() {
          return (
            /* binding */
            instantiateDefaultStyleNormalizer
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_animations_animations_c": function ɵangular_packages_platform_browser_animations_animations_c() {
          return (
            /* binding */
            instantiateRendererFactory
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_animations_animations_d": function ɵangular_packages_platform_browser_animations_animations_d() {
          return (
            /* binding */
            BROWSER_ANIMATIONS_PROVIDERS
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_animations_animations_e": function ɵangular_packages_platform_browser_animations_animations_e() {
          return (
            /* binding */
            BROWSER_NOOP_ANIMATIONS_PROVIDERS
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_animations_animations_f": function ɵangular_packages_platform_browser_animations_animations_f() {
          return (
            /* binding */
            BaseAnimationRenderer
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! @angular/core */
      14468);
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_angular_core__WEBPACK_IMPORTED_MODULE_0__);
      /* harmony import */


      var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
      /*! @angular/platform-browser */
      3191);
      /* harmony import */


      var _angular_animations__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! @angular/animations */
      84562);
      /* harmony import */


      var _angular_animations__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_angular_animations__WEBPACK_IMPORTED_MODULE_1__);
      /* harmony import */


      var _angular_animations_browser__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! @angular/animations/browser */
      26485);
      /* harmony import */


      var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! @angular/common */
      1090);
      /* harmony import */


      var _angular_common__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_angular_common__WEBPACK_IMPORTED_MODULE_2__);
      /**
       * @license Angular v12.1.0
       * (c) 2010-2021 Google LLC. https://angular.io/
       * License: MIT
       */

      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */


      var BrowserAnimationBuilder = /*#__PURE__*/function () {
        var BrowserAnimationBuilder = /*#__PURE__*/function (_angular_animations__2) {
          _inherits(BrowserAnimationBuilder, _angular_animations__2);

          var _super5 = _createSuper(BrowserAnimationBuilder);

          function BrowserAnimationBuilder(rootRenderer, doc) {
            var _this57;

            _classCallCheck(this, BrowserAnimationBuilder);

            _this57 = _super5.call(this);
            _this57._nextAnimationId = 0;
            var typeData = {
              id: '0',
              encapsulation: _angular_core__WEBPACK_IMPORTED_MODULE_0__.ViewEncapsulation.None,
              styles: [],
              data: {
                animation: []
              }
            };
            _this57._renderer = rootRenderer.createRenderer(doc.body, typeData);
            return _this57;
          }

          _createClass2(BrowserAnimationBuilder, [{
            key: "build",
            value: function build(animation) {
              var id = this._nextAnimationId.toString();

              this._nextAnimationId++;
              var entry = Array.isArray(animation) ? (0, _angular_animations__WEBPACK_IMPORTED_MODULE_1__.sequence)(animation) : animation;
              issueAnimationCommand(this._renderer, null, id, 'register', [entry]);
              return new BrowserAnimationFactory(id, this._renderer);
            }
          }]);

          return BrowserAnimationBuilder;
        }(_angular_animations__WEBPACK_IMPORTED_MODULE_1__.AnimationBuilder);

        BrowserAnimationBuilder.ɵfac = function BrowserAnimationBuilder_Factory(t) {
          return new (t || BrowserAnimationBuilder)(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](_angular_core__WEBPACK_IMPORTED_MODULE_0__.RendererFactory2), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](_angular_common__WEBPACK_IMPORTED_MODULE_2__.DOCUMENT));
        };

        BrowserAnimationBuilder.ɵprov = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineInjectable"]({
          token: BrowserAnimationBuilder,
          factory: BrowserAnimationBuilder.ɵfac
        });
        return BrowserAnimationBuilder;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();

      var BrowserAnimationFactory = /*#__PURE__*/function (_angular_animations__3) {
        _inherits(BrowserAnimationFactory, _angular_animations__3);

        var _super6 = _createSuper(BrowserAnimationFactory);

        function BrowserAnimationFactory(_id, _renderer) {
          var _this58;

          _classCallCheck(this, BrowserAnimationFactory);

          _this58 = _super6.call(this);
          _this58._id = _id;
          _this58._renderer = _renderer;
          return _this58;
        }

        _createClass2(BrowserAnimationFactory, [{
          key: "create",
          value: function create(element, options) {
            return new RendererAnimationPlayer(this._id, element, options || {}, this._renderer);
          }
        }]);

        return BrowserAnimationFactory;
      }(_angular_animations__WEBPACK_IMPORTED_MODULE_1__.AnimationFactory);

      var RendererAnimationPlayer = /*#__PURE__*/function () {
        function RendererAnimationPlayer(id, element, options, _renderer) {
          _classCallCheck(this, RendererAnimationPlayer);

          this.id = id;
          this.element = element;
          this._renderer = _renderer;
          this.parentPlayer = null;
          this._started = false;
          this.totalTime = 0;

          this._command('create', options);
        }

        _createClass2(RendererAnimationPlayer, [{
          key: "_listen",
          value: function _listen(eventName, callback) {
            return this._renderer.listen(this.element, "@@".concat(this.id, ":").concat(eventName), callback);
          }
        }, {
          key: "_command",
          value: function _command(command) {
            for (var _len4 = arguments.length, args = new Array(_len4 > 1 ? _len4 - 1 : 0), _key5 = 1; _key5 < _len4; _key5++) {
              args[_key5 - 1] = arguments[_key5];
            }

            return issueAnimationCommand(this._renderer, this.element, this.id, command, args);
          }
        }, {
          key: "onDone",
          value: function onDone(fn) {
            this._listen('done', fn);
          }
        }, {
          key: "onStart",
          value: function onStart(fn) {
            this._listen('start', fn);
          }
        }, {
          key: "onDestroy",
          value: function onDestroy(fn) {
            this._listen('destroy', fn);
          }
        }, {
          key: "init",
          value: function init() {
            this._command('init');
          }
        }, {
          key: "hasStarted",
          value: function hasStarted() {
            return this._started;
          }
        }, {
          key: "play",
          value: function play() {
            this._command('play');

            this._started = true;
          }
        }, {
          key: "pause",
          value: function pause() {
            this._command('pause');
          }
        }, {
          key: "restart",
          value: function restart() {
            this._command('restart');
          }
        }, {
          key: "finish",
          value: function finish() {
            this._command('finish');
          }
        }, {
          key: "destroy",
          value: function destroy() {
            this._command('destroy');
          }
        }, {
          key: "reset",
          value: function reset() {
            this._command('reset');

            this._started = false;
          }
        }, {
          key: "setPosition",
          value: function setPosition(p) {
            this._command('setPosition', p);
          }
        }, {
          key: "getPosition",
          value: function getPosition() {
            var _a, _b;

            return (_b = (_a = this._renderer.engine.players[+this.id]) === null || _a === void 0 ? void 0 : _a.getPosition()) !== null && _b !== void 0 ? _b : 0;
          }
        }]);

        return RendererAnimationPlayer;
      }();

      function issueAnimationCommand(renderer, element, id, command, args) {
        return renderer.setProperty(element, "@@".concat(id, ":").concat(command), args);
      }

      var ANIMATION_PREFIX = '@';
      var DISABLE_ANIMATIONS_FLAG = '@.disabled';

      var AnimationRendererFactory = /*#__PURE__*/function () {
        var AnimationRendererFactory = /*#__PURE__*/function () {
          function AnimationRendererFactory(delegate, engine, _zone) {
            _classCallCheck(this, AnimationRendererFactory);

            this.delegate = delegate;
            this.engine = engine;
            this._zone = _zone;
            this._currentId = 0;
            this._microtaskId = 1;
            this._animationCallbacksBuffer = [];
            this._rendererCache = new Map();
            this._cdRecurDepth = 0;
            this.promise = Promise.resolve(0);

            engine.onRemovalComplete = function (element, delegate) {
              // Note: if an component element has a leave animation, and the component
              // a host leave animation, the view engine will call `removeChild` for the parent
              // component renderer as well as for the child component renderer.
              // Therefore, we need to check if we already removed the element.
              if (delegate && delegate.parentNode(element)) {
                delegate.removeChild(element.parentNode, element);
              }
            };
          }

          _createClass2(AnimationRendererFactory, [{
            key: "createRenderer",
            value: function createRenderer(hostElement, type) {
              var _this59 = this;

              var EMPTY_NAMESPACE_ID = ''; // cache the delegates to find out which cached delegate can
              // be used by which cached renderer

              var delegate = this.delegate.createRenderer(hostElement, type);

              if (!hostElement || !type || !type.data || !type.data['animation']) {
                var renderer = this._rendererCache.get(delegate);

                if (!renderer) {
                  renderer = new BaseAnimationRenderer(EMPTY_NAMESPACE_ID, delegate, this.engine); // only cache this result when the base renderer is used

                  this._rendererCache.set(delegate, renderer);
                }

                return renderer;
              }

              var componentId = type.id;
              var namespaceId = type.id + '-' + this._currentId;
              this._currentId++;
              this.engine.register(namespaceId, hostElement);

              var registerTrigger = function registerTrigger(trigger) {
                if (Array.isArray(trigger)) {
                  trigger.forEach(registerTrigger);
                } else {
                  _this59.engine.registerTrigger(componentId, namespaceId, hostElement, trigger.name, trigger);
                }
              };

              var animationTriggers = type.data['animation'];
              animationTriggers.forEach(registerTrigger);
              return new AnimationRenderer(this, namespaceId, delegate, this.engine);
            }
          }, {
            key: "begin",
            value: function begin() {
              this._cdRecurDepth++;

              if (this.delegate.begin) {
                this.delegate.begin();
              }
            }
          }, {
            key: "_scheduleCountTask",
            value: function _scheduleCountTask() {
              var _this60 = this;

              // always use promise to schedule microtask instead of use Zone
              this.promise.then(function () {
                _this60._microtaskId++;
              });
            }
            /** @internal */

          }, {
            key: "scheduleListenerCallback",
            value: function scheduleListenerCallback(count, fn, data) {
              var _this61 = this;

              if (count >= 0 && count < this._microtaskId) {
                this._zone.run(function () {
                  return fn(data);
                });

                return;
              }

              if (this._animationCallbacksBuffer.length == 0) {
                Promise.resolve(null).then(function () {
                  _this61._zone.run(function () {
                    _this61._animationCallbacksBuffer.forEach(function (tuple) {
                      var _tuple = _slicedToArray(tuple, 2),
                          fn = _tuple[0],
                          data = _tuple[1];

                      fn(data);
                    });

                    _this61._animationCallbacksBuffer = [];
                  });
                });
              }

              this._animationCallbacksBuffer.push([fn, data]);
            }
          }, {
            key: "end",
            value: function end() {
              var _this62 = this;

              this._cdRecurDepth--; // this is to prevent animations from running twice when an inner
              // component does CD when a parent component instead has inserted it

              if (this._cdRecurDepth == 0) {
                this._zone.runOutsideAngular(function () {
                  _this62._scheduleCountTask();

                  _this62.engine.flush(_this62._microtaskId);
                });
              }

              if (this.delegate.end) {
                this.delegate.end();
              }
            }
          }, {
            key: "whenRenderingDone",
            value: function whenRenderingDone() {
              return this.engine.whenRenderingDone();
            }
          }]);

          return AnimationRendererFactory;
        }();

        AnimationRendererFactory.ɵfac = function AnimationRendererFactory_Factory(t) {
          return new (t || AnimationRendererFactory)(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](_angular_core__WEBPACK_IMPORTED_MODULE_0__.RendererFactory2), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](_angular_animations_browser__WEBPACK_IMPORTED_MODULE_3__["ɵAnimationEngine"]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](_angular_core__WEBPACK_IMPORTED_MODULE_0__.NgZone));
        };

        AnimationRendererFactory.ɵprov = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineInjectable"]({
          token: AnimationRendererFactory,
          factory: AnimationRendererFactory.ɵfac
        });
        return AnimationRendererFactory;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();

      var BaseAnimationRenderer = /*#__PURE__*/function () {
        function BaseAnimationRenderer(namespaceId, delegate, engine) {
          _classCallCheck(this, BaseAnimationRenderer);

          this.namespaceId = namespaceId;
          this.delegate = delegate;
          this.engine = engine;
          this.destroyNode = this.delegate.destroyNode ? function (n) {
            return delegate.destroyNode(n);
          } : null;
        }

        _createClass2(BaseAnimationRenderer, [{
          key: "data",
          get: function get() {
            return this.delegate.data;
          }
        }, {
          key: "destroy",
          value: function destroy() {
            this.engine.destroy(this.namespaceId, this.delegate);
            this.delegate.destroy();
          }
        }, {
          key: "createElement",
          value: function createElement(name, namespace) {
            return this.delegate.createElement(name, namespace);
          }
        }, {
          key: "createComment",
          value: function createComment(value) {
            return this.delegate.createComment(value);
          }
        }, {
          key: "createText",
          value: function createText(value) {
            return this.delegate.createText(value);
          }
        }, {
          key: "appendChild",
          value: function appendChild(parent, newChild) {
            this.delegate.appendChild(parent, newChild);
            this.engine.onInsert(this.namespaceId, newChild, parent, false);
          }
        }, {
          key: "insertBefore",
          value: function insertBefore(parent, newChild, refChild) {
            var isMove = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : true;
            this.delegate.insertBefore(parent, newChild, refChild); // If `isMove` true than we should animate this insert.

            this.engine.onInsert(this.namespaceId, newChild, parent, isMove);
          }
        }, {
          key: "removeChild",
          value: function removeChild(parent, oldChild, isHostElement) {
            this.engine.onRemove(this.namespaceId, oldChild, this.delegate, isHostElement);
          }
        }, {
          key: "selectRootElement",
          value: function selectRootElement(selectorOrNode, preserveContent) {
            return this.delegate.selectRootElement(selectorOrNode, preserveContent);
          }
        }, {
          key: "parentNode",
          value: function parentNode(node) {
            return this.delegate.parentNode(node);
          }
        }, {
          key: "nextSibling",
          value: function nextSibling(node) {
            return this.delegate.nextSibling(node);
          }
        }, {
          key: "setAttribute",
          value: function setAttribute(el, name, value, namespace) {
            this.delegate.setAttribute(el, name, value, namespace);
          }
        }, {
          key: "removeAttribute",
          value: function removeAttribute(el, name, namespace) {
            this.delegate.removeAttribute(el, name, namespace);
          }
        }, {
          key: "addClass",
          value: function addClass(el, name) {
            this.delegate.addClass(el, name);
          }
        }, {
          key: "removeClass",
          value: function removeClass(el, name) {
            this.delegate.removeClass(el, name);
          }
        }, {
          key: "setStyle",
          value: function setStyle(el, style, value, flags) {
            this.delegate.setStyle(el, style, value, flags);
          }
        }, {
          key: "removeStyle",
          value: function removeStyle(el, style, flags) {
            this.delegate.removeStyle(el, style, flags);
          }
        }, {
          key: "setProperty",
          value: function setProperty(el, name, value) {
            if (name.charAt(0) == ANIMATION_PREFIX && name == DISABLE_ANIMATIONS_FLAG) {
              this.disableAnimations(el, !!value);
            } else {
              this.delegate.setProperty(el, name, value);
            }
          }
        }, {
          key: "setValue",
          value: function setValue(node, value) {
            this.delegate.setValue(node, value);
          }
        }, {
          key: "listen",
          value: function listen(target, eventName, callback) {
            return this.delegate.listen(target, eventName, callback);
          }
        }, {
          key: "disableAnimations",
          value: function disableAnimations(element, value) {
            this.engine.disableAnimations(element, value);
          }
        }]);

        return BaseAnimationRenderer;
      }();

      var AnimationRenderer = /*#__PURE__*/function (_BaseAnimationRendere) {
        _inherits(AnimationRenderer, _BaseAnimationRendere);

        var _super7 = _createSuper(AnimationRenderer);

        function AnimationRenderer(factory, namespaceId, delegate, engine) {
          var _this63;

          _classCallCheck(this, AnimationRenderer);

          _this63 = _super7.call(this, namespaceId, delegate, engine);
          _this63.factory = factory;
          _this63.namespaceId = namespaceId;
          return _this63;
        }

        _createClass2(AnimationRenderer, [{
          key: "setProperty",
          value: function setProperty(el, name, value) {
            if (name.charAt(0) == ANIMATION_PREFIX) {
              if (name.charAt(1) == '.' && name == DISABLE_ANIMATIONS_FLAG) {
                value = value === undefined ? true : !!value;
                this.disableAnimations(el, value);
              } else {
                this.engine.process(this.namespaceId, el, name.substr(1), value);
              }
            } else {
              this.delegate.setProperty(el, name, value);
            }
          }
        }, {
          key: "listen",
          value: function listen(target, eventName, callback) {
            var _this64 = this;

            if (eventName.charAt(0) == ANIMATION_PREFIX) {
              var element = resolveElementFromTarget(target);
              var name = eventName.substr(1);
              var phase = ''; // @listener.phase is for trigger animation callbacks
              // @@listener is for animation builder callbacks

              if (name.charAt(0) != ANIMATION_PREFIX) {
                var _parseTriggerCallback = parseTriggerCallbackName(name);

                var _parseTriggerCallback2 = _slicedToArray(_parseTriggerCallback, 2);

                name = _parseTriggerCallback2[0];
                phase = _parseTriggerCallback2[1];
              }

              return this.engine.listen(this.namespaceId, element, name, phase, function (event) {
                var countId = event['_data'] || -1;

                _this64.factory.scheduleListenerCallback(countId, callback, event);
              });
            }

            return this.delegate.listen(target, eventName, callback);
          }
        }]);

        return AnimationRenderer;
      }(BaseAnimationRenderer);

      function resolveElementFromTarget(target) {
        switch (target) {
          case 'body':
            return document.body;

          case 'document':
            return document;

          case 'window':
            return window;

          default:
            return target;
        }
      }

      function parseTriggerCallbackName(triggerName) {
        var dotIndex = triggerName.indexOf('.');
        var trigger = triggerName.substring(0, dotIndex);
        var phase = triggerName.substr(dotIndex + 1);
        return [trigger, phase];
      }
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */


      var InjectableAnimationEngine = /*#__PURE__*/function () {
        var InjectableAnimationEngine = /*#__PURE__*/function (_angular_animations_b) {
          _inherits(InjectableAnimationEngine, _angular_animations_b);

          var _super8 = _createSuper(InjectableAnimationEngine);

          function InjectableAnimationEngine(doc, driver, normalizer) {
            _classCallCheck(this, InjectableAnimationEngine);

            return _super8.call(this, doc.body, driver, normalizer);
          }

          _createClass2(InjectableAnimationEngine, [{
            key: "ngOnDestroy",
            value: function ngOnDestroy() {
              this.flush();
            }
          }]);

          return InjectableAnimationEngine;
        }(_angular_animations_browser__WEBPACK_IMPORTED_MODULE_3__["ɵAnimationEngine"]);

        InjectableAnimationEngine.ɵfac = function InjectableAnimationEngine_Factory(t) {
          return new (t || InjectableAnimationEngine)(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](_angular_common__WEBPACK_IMPORTED_MODULE_2__.DOCUMENT), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](_angular_animations_browser__WEBPACK_IMPORTED_MODULE_3__.AnimationDriver), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](_angular_animations_browser__WEBPACK_IMPORTED_MODULE_3__["ɵAnimationStyleNormalizer"]));
        };

        InjectableAnimationEngine.ɵprov = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineInjectable"]({
          token: InjectableAnimationEngine,
          factory: InjectableAnimationEngine.ɵfac
        });
        return InjectableAnimationEngine;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();

      function instantiateSupportedAnimationDriver() {
        return (0, _angular_animations_browser__WEBPACK_IMPORTED_MODULE_3__["ɵsupportsWebAnimations"])() ? new _angular_animations_browser__WEBPACK_IMPORTED_MODULE_3__["ɵWebAnimationsDriver"]() : new _angular_animations_browser__WEBPACK_IMPORTED_MODULE_3__["ɵCssKeyframesDriver"]();
      }

      function instantiateDefaultStyleNormalizer() {
        return new _angular_animations_browser__WEBPACK_IMPORTED_MODULE_3__["ɵWebAnimationsStyleNormalizer"]();
      }

      function instantiateRendererFactory(renderer, engine, zone) {
        return new AnimationRendererFactory(renderer, engine, zone);
      }
      /**
       * @publicApi
       */


      var _ANIMATION_MODULE_TYPE = /*#__PURE__*/new _angular_core__WEBPACK_IMPORTED_MODULE_0__.InjectionToken('AnimationModuleType');

      var SHARED_ANIMATION_PROVIDERS = [{
        provide: _angular_animations__WEBPACK_IMPORTED_MODULE_1__.AnimationBuilder,
        useClass: BrowserAnimationBuilder
      }, {
        provide: _angular_animations_browser__WEBPACK_IMPORTED_MODULE_3__["ɵAnimationStyleNormalizer"],
        useFactory: instantiateDefaultStyleNormalizer
      }, {
        provide: _angular_animations_browser__WEBPACK_IMPORTED_MODULE_3__["ɵAnimationEngine"],
        useClass: InjectableAnimationEngine
      }, {
        provide: _angular_core__WEBPACK_IMPORTED_MODULE_0__.RendererFactory2,
        useFactory: instantiateRendererFactory,
        deps: [_angular_platform_browser__WEBPACK_IMPORTED_MODULE_4__["ɵDomRendererFactory2"], _angular_animations_browser__WEBPACK_IMPORTED_MODULE_3__["ɵAnimationEngine"], _angular_core__WEBPACK_IMPORTED_MODULE_0__.NgZone]
      }];
      /**
       * Separate providers from the actual module so that we can do a local modification in Google3 to
       * include them in the BrowserModule.
       */

      var BROWSER_ANIMATIONS_PROVIDERS = [{
        provide: _angular_animations_browser__WEBPACK_IMPORTED_MODULE_3__.AnimationDriver,
        useFactory: instantiateSupportedAnimationDriver
      }, {
        provide: _ANIMATION_MODULE_TYPE,
        useValue: 'BrowserAnimations'
      }].concat(SHARED_ANIMATION_PROVIDERS);
      /**
       * Separate providers from the actual module so that we can do a local modification in Google3 to
       * include them in the BrowserTestingModule.
       */

      var BROWSER_NOOP_ANIMATIONS_PROVIDERS = [{
        provide: _angular_animations_browser__WEBPACK_IMPORTED_MODULE_3__.AnimationDriver,
        useClass: _angular_animations_browser__WEBPACK_IMPORTED_MODULE_3__["ɵNoopAnimationDriver"]
      }, {
        provide: _ANIMATION_MODULE_TYPE,
        useValue: 'NoopAnimations'
      }].concat(SHARED_ANIMATION_PROVIDERS);
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * Exports `BrowserModule` with additional [dependency-injection providers](guide/glossary#provider)
       * for use with animations. See [Animations](guide/animations).
       * @publicApi
       */

      var _BrowserAnimationsModule = /*#__PURE__*/function () {
        var BrowserAnimationsModule = /*#__PURE__*/function () {
          function BrowserAnimationsModule() {
            _classCallCheck(this, BrowserAnimationsModule);
          }

          _createClass2(BrowserAnimationsModule, null, [{
            key: "withConfig",
            value:
            /**
             * Configures the module based on the specified object.
             *
             * @param config Object used to configure the behavior of the `BrowserAnimationsModule`.
             * @see `BrowserAnimationsModuleConfig`
             *
             * @usageNotes
             * When registering the `BrowserAnimationsModule`, you can use the `withConfig`
             * function as follows:
             * ```
             * @NgModule({
             *   imports: [BrowserAnimationsModule.withConfig(config)]
             * })
             * class MyNgModule {}
             * ```
             */
            function withConfig(config) {
              return {
                ngModule: BrowserAnimationsModule,
                providers: config.disableAnimations ? BROWSER_NOOP_ANIMATIONS_PROVIDERS : BROWSER_ANIMATIONS_PROVIDERS
              };
            }
          }]);

          return BrowserAnimationsModule;
        }();

        BrowserAnimationsModule.ɵfac = function BrowserAnimationsModule_Factory(t) {
          return new (t || BrowserAnimationsModule)();
        };

        BrowserAnimationsModule.ɵmod = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineNgModule"]({
          type: BrowserAnimationsModule
        });
        BrowserAnimationsModule.ɵinj = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineInjector"]({
          providers: BROWSER_ANIMATIONS_PROVIDERS,
          imports: [_angular_platform_browser__WEBPACK_IMPORTED_MODULE_4__.BrowserModule]
        });
        return BrowserAnimationsModule;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();
      /*#__PURE__*/


      (function () {
        (typeof ngJitMode === "undefined" || ngJitMode) && _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵsetNgModuleScope"](_BrowserAnimationsModule, {
          exports: function exports() {
            return [_angular_platform_browser__WEBPACK_IMPORTED_MODULE_4__.BrowserModule];
          }
        });
      })();
      /**
       * A null player that must be imported to allow disabling of animations.
       * @publicApi
       */


      var _NoopAnimationsModule = /*#__PURE__*/function () {
        var NoopAnimationsModule = function NoopAnimationsModule() {
          _classCallCheck(this, NoopAnimationsModule);
        };

        NoopAnimationsModule.ɵfac = function NoopAnimationsModule_Factory(t) {
          return new (t || NoopAnimationsModule)();
        };

        NoopAnimationsModule.ɵmod = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineNgModule"]({
          type: NoopAnimationsModule
        });
        NoopAnimationsModule.ɵinj = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineInjector"]({
          providers: BROWSER_NOOP_ANIMATIONS_PROVIDERS,
          imports: [_angular_platform_browser__WEBPACK_IMPORTED_MODULE_4__.BrowserModule]
        });
        return NoopAnimationsModule;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();
      /*#__PURE__*/


      (function () {
        (typeof ngJitMode === "undefined" || ngJitMode) && _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵsetNgModuleScope"](_NoopAnimationsModule, {
          exports: function exports() {
            return [_angular_platform_browser__WEBPACK_IMPORTED_MODULE_4__.BrowserModule];
          }
        });
      })();
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * Generated bundle index. Do not edit.
       */

      /***/

    },

    /***/
    3191: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "ɵgetDOM": function ɵgetDOM() {
          return (
            /* reexport safe */
            _angular_common__WEBPACK_IMPORTED_MODULE_0__["ɵgetDOM"]
          );
        },

        /* harmony export */
        "BrowserModule": function BrowserModule() {
          return (
            /* binding */
            _BrowserModule
          );
        },

        /* harmony export */
        "BrowserTransferStateModule": function BrowserTransferStateModule() {
          return (
            /* binding */
            _BrowserTransferStateModule
          );
        },

        /* harmony export */
        "By": function By() {
          return (
            /* binding */
            _By
          );
        },

        /* harmony export */
        "DomSanitizer": function DomSanitizer() {
          return (
            /* binding */
            _DomSanitizer
          );
        },

        /* harmony export */
        "EVENT_MANAGER_PLUGINS": function EVENT_MANAGER_PLUGINS() {
          return (
            /* binding */
            _EVENT_MANAGER_PLUGINS
          );
        },

        /* harmony export */
        "EventManager": function EventManager() {
          return (
            /* binding */
            _EventManager
          );
        },

        /* harmony export */
        "HAMMER_GESTURE_CONFIG": function HAMMER_GESTURE_CONFIG() {
          return (
            /* binding */
            _HAMMER_GESTURE_CONFIG
          );
        },

        /* harmony export */
        "HAMMER_LOADER": function HAMMER_LOADER() {
          return (
            /* binding */
            _HAMMER_LOADER
          );
        },

        /* harmony export */
        "HammerGestureConfig": function HammerGestureConfig() {
          return (
            /* binding */
            _HammerGestureConfig
          );
        },

        /* harmony export */
        "HammerModule": function HammerModule() {
          return (
            /* binding */
            _HammerModule
          );
        },

        /* harmony export */
        "Meta": function Meta() {
          return (
            /* binding */
            _Meta
          );
        },

        /* harmony export */
        "Title": function Title() {
          return (
            /* binding */
            _Title
          );
        },

        /* harmony export */
        "TransferState": function TransferState() {
          return (
            /* binding */
            _TransferState
          );
        },

        /* harmony export */
        "VERSION": function VERSION() {
          return (
            /* binding */
            _VERSION
          );
        },

        /* harmony export */
        "disableDebugTools": function disableDebugTools() {
          return (
            /* binding */
            _disableDebugTools
          );
        },

        /* harmony export */
        "enableDebugTools": function enableDebugTools() {
          return (
            /* binding */
            _enableDebugTools
          );
        },

        /* harmony export */
        "makeStateKey": function makeStateKey() {
          return (
            /* binding */
            _makeStateKey
          );
        },

        /* harmony export */
        "platformBrowser": function platformBrowser() {
          return (
            /* binding */
            _platformBrowser
          );
        },

        /* harmony export */
        "ɵBROWSER_SANITIZATION_PROVIDERS": function ɵBROWSER_SANITIZATION_PROVIDERS() {
          return (
            /* binding */
            BROWSER_SANITIZATION_PROVIDERS
          );
        },

        /* harmony export */
        "ɵBROWSER_SANITIZATION_PROVIDERS__POST_R3__": function ɵBROWSER_SANITIZATION_PROVIDERS__POST_R3__() {
          return (
            /* binding */
            BROWSER_SANITIZATION_PROVIDERS__POST_R3__
          );
        },

        /* harmony export */
        "ɵBrowserDomAdapter": function ɵBrowserDomAdapter() {
          return (
            /* binding */
            BrowserDomAdapter
          );
        },

        /* harmony export */
        "ɵBrowserGetTestability": function ɵBrowserGetTestability() {
          return (
            /* binding */
            BrowserGetTestability
          );
        },

        /* harmony export */
        "ɵDomEventsPlugin": function ɵDomEventsPlugin() {
          return (
            /* binding */
            DomEventsPlugin
          );
        },

        /* harmony export */
        "ɵDomRendererFactory2": function ɵDomRendererFactory2() {
          return (
            /* binding */
            DomRendererFactory2
          );
        },

        /* harmony export */
        "ɵDomSanitizerImpl": function ɵDomSanitizerImpl() {
          return (
            /* binding */
            DomSanitizerImpl
          );
        },

        /* harmony export */
        "ɵDomSharedStylesHost": function ɵDomSharedStylesHost() {
          return (
            /* binding */
            DomSharedStylesHost
          );
        },

        /* harmony export */
        "ɵELEMENT_PROBE_PROVIDERS": function ɵELEMENT_PROBE_PROVIDERS() {
          return (
            /* binding */
            ELEMENT_PROBE_PROVIDERS
          );
        },

        /* harmony export */
        "ɵELEMENT_PROBE_PROVIDERS__POST_R3__": function ɵELEMENT_PROBE_PROVIDERS__POST_R3__() {
          return (
            /* binding */
            ELEMENT_PROBE_PROVIDERS__POST_R3__
          );
        },

        /* harmony export */
        "ɵHAMMER_PROVIDERS__POST_R3__": function ɵHAMMER_PROVIDERS__POST_R3__() {
          return (
            /* binding */
            HAMMER_PROVIDERS__POST_R3__
          );
        },

        /* harmony export */
        "ɵHammerGesturesPlugin": function ɵHammerGesturesPlugin() {
          return (
            /* binding */
            HammerGesturesPlugin
          );
        },

        /* harmony export */
        "ɵINTERNAL_BROWSER_PLATFORM_PROVIDERS": function ɵINTERNAL_BROWSER_PLATFORM_PROVIDERS() {
          return (
            /* binding */
            INTERNAL_BROWSER_PLATFORM_PROVIDERS
          );
        },

        /* harmony export */
        "ɵKeyEventsPlugin": function ɵKeyEventsPlugin() {
          return (
            /* binding */
            KeyEventsPlugin
          );
        },

        /* harmony export */
        "ɵNAMESPACE_URIS": function ɵNAMESPACE_URIS() {
          return (
            /* binding */
            NAMESPACE_URIS
          );
        },

        /* harmony export */
        "ɵSharedStylesHost": function ɵSharedStylesHost() {
          return (
            /* binding */
            SharedStylesHost
          );
        },

        /* harmony export */
        "ɵTRANSITION_ID": function ɵTRANSITION_ID() {
          return (
            /* binding */
            TRANSITION_ID
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_platform_browser_a": function ɵangular_packages_platform_browser_platform_browser_a() {
          return (
            /* binding */
            errorHandler
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_platform_browser_b": function ɵangular_packages_platform_browser_platform_browser_b() {
          return (
            /* binding */
            _document
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_platform_browser_c": function ɵangular_packages_platform_browser_platform_browser_c() {
          return (
            /* binding */
            BROWSER_MODULE_PROVIDERS
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_platform_browser_d": function ɵangular_packages_platform_browser_platform_browser_d() {
          return (
            /* binding */
            createMeta
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_platform_browser_e": function ɵangular_packages_platform_browser_platform_browser_e() {
          return (
            /* binding */
            createTitle
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_platform_browser_f": function ɵangular_packages_platform_browser_platform_browser_f() {
          return (
            /* binding */
            initTransferState
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_platform_browser_g": function ɵangular_packages_platform_browser_platform_browser_g() {
          return (
            /* binding */
            EventManagerPlugin
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_platform_browser_h": function ɵangular_packages_platform_browser_platform_browser_h() {
          return (
            /* binding */
            HAMMER_PROVIDERS__PRE_R3__
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_platform_browser_i": function ɵangular_packages_platform_browser_platform_browser_i() {
          return (
            /* binding */
            HAMMER_PROVIDERS
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_platform_browser_j": function ɵangular_packages_platform_browser_platform_browser_j() {
          return (
            /* binding */
            domSanitizerImplFactory
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_platform_browser_k": function ɵangular_packages_platform_browser_platform_browser_k() {
          return (
            /* binding */
            appInitializerFactory
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_platform_browser_l": function ɵangular_packages_platform_browser_platform_browser_l() {
          return (
            /* binding */
            SERVER_TRANSITION_PROVIDERS
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_platform_browser_m": function ɵangular_packages_platform_browser_platform_browser_m() {
          return (
            /* binding */
            _createNgProbeR2
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_platform_browser_n": function ɵangular_packages_platform_browser_platform_browser_n() {
          return (
            /* binding */
            ELEMENT_PROBE_PROVIDERS__PRE_R3__
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_platform_browser_o": function ɵangular_packages_platform_browser_platform_browser_o() {
          return (
            /* binding */
            BrowserXhr
          );
        },

        /* harmony export */
        "ɵangular_packages_platform_browser_platform_browser_p": function ɵangular_packages_platform_browser_platform_browser_p() {
          return (
            /* binding */
            GenericBrowserDomAdapter
          );
        },

        /* harmony export */
        "ɵescapeHtml": function ɵescapeHtml() {
          return (
            /* binding */
            escapeHtml
          );
        },

        /* harmony export */
        "ɵflattenStyles": function ɵflattenStyles() {
          return (
            /* binding */
            flattenStyles
          );
        },

        /* harmony export */
        "ɵinitDomAdapter": function ɵinitDomAdapter() {
          return (
            /* binding */
            initDomAdapter
          );
        },

        /* harmony export */
        "ɵshimContentAttribute": function ɵshimContentAttribute() {
          return (
            /* binding */
            shimContentAttribute
          );
        },

        /* harmony export */
        "ɵshimHostAttribute": function ɵshimHostAttribute() {
          return (
            /* binding */
            shimHostAttribute
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var _angular_common__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! @angular/common */
      1090);
      /* harmony import */


      var _angular_common__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_angular_common__WEBPACK_IMPORTED_MODULE_0__);
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! @angular/core */
      14468);
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_angular_core__WEBPACK_IMPORTED_MODULE_1__);
      /**
       * @license Angular v12.1.0
       * (c) 2010-2021 Google LLC. https://angular.io/
       * License: MIT
       */

      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * Provides DOM operations in any browser environment.
       *
       * @security Tread carefully! Interacting with the DOM directly is dangerous and
       * can introduce XSS risks.
       */


      var GenericBrowserDomAdapter = /*#__PURE__*/function (_angular_common__WEBP) {
        _inherits(GenericBrowserDomAdapter, _angular_common__WEBP);

        var _super9 = _createSuper(GenericBrowserDomAdapter);

        function GenericBrowserDomAdapter() {
          var _this65;

          _classCallCheck(this, GenericBrowserDomAdapter);

          _this65 = _super9.apply(this, arguments);
          _this65.supportsDOMEvents = true;
          return _this65;
        }

        return GenericBrowserDomAdapter;
      }(_angular_common__WEBPACK_IMPORTED_MODULE_0__["ɵDomAdapter"]);
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * A `DomAdapter` powered by full browser DOM APIs.
       *
       * @security Tread carefully! Interacting with the DOM directly is dangerous and
       * can introduce XSS risks.
       */

      /* tslint:disable:requireParameterType no-console */


      var BrowserDomAdapter = /*#__PURE__*/function (_GenericBrowserDomAda) {
        _inherits(BrowserDomAdapter, _GenericBrowserDomAda);

        var _super10 = _createSuper(BrowserDomAdapter);

        function BrowserDomAdapter() {
          _classCallCheck(this, BrowserDomAdapter);

          return _super10.apply(this, arguments);
        }

        _createClass2(BrowserDomAdapter, [{
          key: "onAndCancel",
          value: function onAndCancel(el, evt, listener) {
            el.addEventListener(evt, listener, false); // Needed to follow Dart's subscription semantic, until fix of
            // https://code.google.com/p/dart/issues/detail?id=17406

            return function () {
              el.removeEventListener(evt, listener, false);
            };
          }
        }, {
          key: "dispatchEvent",
          value: function dispatchEvent(el, evt) {
            el.dispatchEvent(evt);
          }
        }, {
          key: "remove",
          value: function remove(node) {
            if (node.parentNode) {
              node.parentNode.removeChild(node);
            }
          }
        }, {
          key: "createElement",
          value: function createElement(tagName, doc) {
            doc = doc || this.getDefaultDocument();
            return doc.createElement(tagName);
          }
        }, {
          key: "createHtmlDocument",
          value: function createHtmlDocument() {
            return document.implementation.createHTMLDocument('fakeTitle');
          }
        }, {
          key: "getDefaultDocument",
          value: function getDefaultDocument() {
            return document;
          }
        }, {
          key: "isElementNode",
          value: function isElementNode(node) {
            return node.nodeType === Node.ELEMENT_NODE;
          }
        }, {
          key: "isShadowRoot",
          value: function isShadowRoot(node) {
            return node instanceof DocumentFragment;
          }
          /** @deprecated No longer being used in Ivy code. To be removed in version 14. */

        }, {
          key: "getGlobalEventTarget",
          value: function getGlobalEventTarget(doc, target) {
            if (target === 'window') {
              return window;
            }

            if (target === 'document') {
              return doc;
            }

            if (target === 'body') {
              return doc.body;
            }

            return null;
          }
        }, {
          key: "getBaseHref",
          value: function getBaseHref(doc) {
            var href = getBaseElementHref();
            return href == null ? null : relativePath(href);
          }
        }, {
          key: "resetBaseElement",
          value: function resetBaseElement() {
            baseElement = null;
          }
        }, {
          key: "getUserAgent",
          value: function getUserAgent() {
            return window.navigator.userAgent;
          }
        }, {
          key: "getCookie",
          value: function getCookie(name) {
            return (0, _angular_common__WEBPACK_IMPORTED_MODULE_0__["ɵparseCookieValue"])(document.cookie, name);
          }
        }], [{
          key: "makeCurrent",
          value: function makeCurrent() {
            (0, _angular_common__WEBPACK_IMPORTED_MODULE_0__["ɵsetRootDomAdapter"])(new BrowserDomAdapter());
          }
        }]);

        return BrowserDomAdapter;
      }(GenericBrowserDomAdapter);

      var baseElement = null;

      function getBaseElementHref() {
        baseElement = baseElement || document.querySelector('base');
        return baseElement ? baseElement.getAttribute('href') : null;
      } // based on urlUtils.js in AngularJS 1


      var urlParsingNode;

      function relativePath(url) {
        urlParsingNode = urlParsingNode || document.createElement('a');
        urlParsingNode.setAttribute('href', url);
        var pathName = urlParsingNode.pathname;
        return pathName.charAt(0) === '/' ? pathName : "/".concat(pathName);
      }
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * An id that identifies a particular application being bootstrapped, that should
       * match across the client/server boundary.
       */


      var TRANSITION_ID = /*#__PURE__*/new _angular_core__WEBPACK_IMPORTED_MODULE_1__.InjectionToken('TRANSITION_ID');

      function appInitializerFactory(transitionId, document, injector) {
        return function () {
          // Wait for all application initializers to be completed before removing the styles set by
          // the server.
          injector.get(_angular_core__WEBPACK_IMPORTED_MODULE_1__.ApplicationInitStatus).donePromise.then(function () {
            var dom = (0, _angular_common__WEBPACK_IMPORTED_MODULE_0__["ɵgetDOM"])();
            var styles = Array.prototype.slice.apply(document.querySelectorAll("style[ng-transition]"));
            styles.filter(function (el) {
              return el.getAttribute('ng-transition') === transitionId;
            }).forEach(function (el) {
              return dom.remove(el);
            });
          });
        };
      }

      var SERVER_TRANSITION_PROVIDERS = [{
        provide: _angular_core__WEBPACK_IMPORTED_MODULE_1__.APP_INITIALIZER,
        useFactory: appInitializerFactory,
        deps: [TRANSITION_ID, _angular_common__WEBPACK_IMPORTED_MODULE_0__.DOCUMENT, _angular_core__WEBPACK_IMPORTED_MODULE_1__.Injector],
        multi: true
      }];
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      var BrowserGetTestability = /*#__PURE__*/function () {
        function BrowserGetTestability() {
          _classCallCheck(this, BrowserGetTestability);
        }

        _createClass2(BrowserGetTestability, [{
          key: "addToWindow",
          value: function addToWindow(registry) {
            _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵglobal"].getAngularTestability = function (elem) {
              var findInAncestors = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
              var testability = registry.findTestabilityInTree(elem, findInAncestors);

              if (testability == null) {
                throw new Error('Could not find testability for element.');
              }

              return testability;
            };

            _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵglobal"].getAllAngularTestabilities = function () {
              return registry.getAllTestabilities();
            };

            _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵglobal"].getAllAngularRootElements = function () {
              return registry.getAllRootElements();
            };

            var whenAllStable = function whenAllStable(callback
            /** TODO #9100 */
            ) {
              var testabilities = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵglobal"].getAllAngularTestabilities();

              var count = testabilities.length;
              var didWork = false;

              var decrement = function decrement(didWork_
              /** TODO #9100 */
              ) {
                didWork = didWork || didWork_;
                count--;

                if (count == 0) {
                  callback(didWork);
                }
              };

              testabilities.forEach(function (testability
              /** TODO #9100 */
              ) {
                testability.whenStable(decrement);
              });
            };

            if (!_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵglobal"].frameworkStabilizers) {
              _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵglobal"].frameworkStabilizers = [];
            }

            _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵglobal"].frameworkStabilizers.push(whenAllStable);
          }
        }, {
          key: "findTestabilityInTree",
          value: function findTestabilityInTree(registry, elem, findInAncestors) {
            if (elem == null) {
              return null;
            }

            var t = registry.getTestability(elem);

            if (t != null) {
              return t;
            } else if (!findInAncestors) {
              return null;
            }

            if ((0, _angular_common__WEBPACK_IMPORTED_MODULE_0__["ɵgetDOM"])().isShadowRoot(elem)) {
              return this.findTestabilityInTree(registry, elem.host, true);
            }

            return this.findTestabilityInTree(registry, elem.parentElement, true);
          }
        }], [{
          key: "init",
          value: function init() {
            (0, _angular_core__WEBPACK_IMPORTED_MODULE_1__.setTestabilityGetter)(new BrowserGetTestability());
          }
        }]);

        return BrowserGetTestability;
      }();
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * A factory for `HttpXhrBackend` that uses the `XMLHttpRequest` browser API.
       */


      var BrowserXhr = /*#__PURE__*/function () {
        var BrowserXhr = /*#__PURE__*/function () {
          function BrowserXhr() {
            _classCallCheck(this, BrowserXhr);
          }

          _createClass2(BrowserXhr, [{
            key: "build",
            value: function build() {
              return new XMLHttpRequest();
            }
          }]);

          return BrowserXhr;
        }();

        BrowserXhr.ɵfac = function BrowserXhr_Factory(t) {
          return new (t || BrowserXhr)();
        };

        BrowserXhr.ɵprov = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjectable"]({
          token: BrowserXhr,
          factory: BrowserXhr.ɵfac
        });
        return BrowserXhr;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */


      var CAMEL_CASE_REGEXP = /([A-Z])/g;
      var DASH_CASE_REGEXP = /-([a-z])/g;

      function camelCaseToDashCase(input) {
        return input.replace(CAMEL_CASE_REGEXP, function () {
          for (var _len5 = arguments.length, m = new Array(_len5), _key6 = 0; _key6 < _len5; _key6++) {
            m[_key6] = arguments[_key6];
          }

          return '-' + m[1].toLowerCase();
        });
      }

      function dashCaseToCamelCase(input) {
        return input.replace(DASH_CASE_REGEXP, function () {
          for (var _len6 = arguments.length, m = new Array(_len6), _key7 = 0; _key7 < _len6; _key7++) {
            m[_key7] = arguments[_key7];
          }

          return m[1].toUpperCase();
        });
      }
      /**
       * Exports the value under a given `name` in the global property `ng`. For example `ng.probe` if
       * `name` is `'probe'`.
       * @param name Name under which it will be exported. Keep in mind this will be a property of the
       * global `ng` object.
       * @param value The value to export.
       */


      function exportNgVar(name, value) {
        if (typeof COMPILED === 'undefined' || !COMPILED) {
          // Note: we can't export `ng` when using closure enhanced optimization as:
          // - closure declares globals itself for minified names, which sometimes clobber our `ng` global
          // - we can't declare a closure extern as the namespace `ng` is already used within Google
          //   for typings for angularJS (via `goog.provide('ng....')`).
          var ng = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵglobal"].ng = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵglobal"].ng || {};
          ng[name] = value;
        }
      }
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */


      var ɵ0 = function ɵ0() {
        return {
          'ApplicationRef': _angular_core__WEBPACK_IMPORTED_MODULE_1__.ApplicationRef,
          'NgZone': _angular_core__WEBPACK_IMPORTED_MODULE_1__.NgZone
        };
      };

      var CORE_TOKENS = /*#__PURE__*/ɵ0();
      var INSPECT_GLOBAL_NAME = 'probe';
      var CORE_TOKENS_GLOBAL_NAME = 'coreTokens';
      /**
       * Returns a {@link DebugElement} for the given native DOM element, or
       * null if the given native element does not have an Angular view associated
       * with it.
       */

      function inspectNativeElementR2(element) {
        return (0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵgetDebugNodeR2"])(element);
      }

      function _createNgProbeR2(coreTokens) {
        exportNgVar(INSPECT_GLOBAL_NAME, inspectNativeElementR2);
        exportNgVar(CORE_TOKENS_GLOBAL_NAME, Object.assign(Object.assign({}, CORE_TOKENS), _ngProbeTokensToMap(coreTokens || [])));
        return function () {
          return inspectNativeElementR2;
        };
      }

      function _ngProbeTokensToMap(tokens) {
        return tokens.reduce(function (prev, t) {
          return prev[t.name] = t.token, prev;
        }, {});
      }
      /**
       * In Ivy, we don't support NgProbe because we have our own set of testing utilities
       * with more robust functionality.
       *
       * We shouldn't bring in NgProbe because it prevents DebugNode and friends from
       * tree-shaking properly.
       */


      var ELEMENT_PROBE_PROVIDERS__POST_R3__ = [];
      /**
       * Providers which support debugging Angular applications (e.g. via `ng.probe`).
       */

      var ELEMENT_PROBE_PROVIDERS__PRE_R3__ = [{
        provide: _angular_core__WEBPACK_IMPORTED_MODULE_1__.APP_INITIALIZER,
        useFactory: _createNgProbeR2,
        deps: [[_angular_core__WEBPACK_IMPORTED_MODULE_1__.NgProbeToken, /*#__PURE__*/new _angular_core__WEBPACK_IMPORTED_MODULE_1__.Optional()]],
        multi: true
      }];
      var ELEMENT_PROBE_PROVIDERS = ELEMENT_PROBE_PROVIDERS__POST_R3__;
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * The injection token for the event-manager plug-in service.
       *
       * @publicApi
       */

      var _EVENT_MANAGER_PLUGINS = /*#__PURE__*/new _angular_core__WEBPACK_IMPORTED_MODULE_1__.InjectionToken('EventManagerPlugins');
      /**
       * An injectable service that provides event management for Angular
       * through a browser plug-in.
       *
       * @publicApi
       */


      var _EventManager = /*#__PURE__*/function () {
        var EventManager = /*#__PURE__*/function () {
          /**
           * Initializes an instance of the event-manager service.
           */
          function EventManager(plugins, _zone) {
            var _this66 = this;

            _classCallCheck(this, EventManager);

            this._zone = _zone;
            this._eventNameToPlugin = new Map();
            plugins.forEach(function (p) {
              return p.manager = _this66;
            });
            this._plugins = plugins.slice().reverse();
          }
          /**
           * Registers a handler for a specific element and event.
           *
           * @param element The HTML element to receive event notifications.
           * @param eventName The name of the event to listen for.
           * @param handler A function to call when the notification occurs. Receives the
           * event object as an argument.
           * @returns  A callback function that can be used to remove the handler.
           */


          _createClass2(EventManager, [{
            key: "addEventListener",
            value: function addEventListener(element, eventName, handler) {
              var plugin = this._findPluginFor(eventName);

              return plugin.addEventListener(element, eventName, handler);
            }
            /**
             * Registers a global handler for an event in a target view.
             *
             * @param target A target for global event notifications. One of "window", "document", or "body".
             * @param eventName The name of the event to listen for.
             * @param handler A function to call when the notification occurs. Receives the
             * event object as an argument.
             * @returns A callback function that can be used to remove the handler.
             * @deprecated No longer being used in Ivy code. To be removed in version 14.
             */

          }, {
            key: "addGlobalEventListener",
            value: function addGlobalEventListener(target, eventName, handler) {
              var plugin = this._findPluginFor(eventName);

              return plugin.addGlobalEventListener(target, eventName, handler);
            }
            /**
             * Retrieves the compilation zone in which event listeners are registered.
             */

          }, {
            key: "getZone",
            value: function getZone() {
              return this._zone;
            }
            /** @internal */

          }, {
            key: "_findPluginFor",
            value: function _findPluginFor(eventName) {
              var plugin = this._eventNameToPlugin.get(eventName);

              if (plugin) {
                return plugin;
              }

              var plugins = this._plugins;

              for (var i = 0; i < plugins.length; i++) {
                var _plugin = plugins[i];

                if (_plugin.supports(eventName)) {
                  this._eventNameToPlugin.set(eventName, _plugin);

                  return _plugin;
                }
              }

              throw new Error("No event manager plugin found for event ".concat(eventName));
            }
          }]);

          return EventManager;
        }();

        EventManager.ɵfac = function EventManager_Factory(t) {
          return new (t || EventManager)(_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵinject"](_EVENT_MANAGER_PLUGINS), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵinject"](_angular_core__WEBPACK_IMPORTED_MODULE_1__.NgZone));
        };

        EventManager.ɵprov = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjectable"]({
          token: EventManager,
          factory: EventManager.ɵfac
        });
        return EventManager;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();

      var EventManagerPlugin = /*#__PURE__*/function () {
        function EventManagerPlugin(_doc) {
          _classCallCheck(this, EventManagerPlugin);

          this._doc = _doc;
        }

        _createClass2(EventManagerPlugin, [{
          key: "addGlobalEventListener",
          value: function addGlobalEventListener(element, eventName, handler) {
            var target = (0, _angular_common__WEBPACK_IMPORTED_MODULE_0__["ɵgetDOM"])().getGlobalEventTarget(this._doc, element);

            if (!target) {
              throw new Error("Unsupported event target ".concat(target, " for event ").concat(eventName));
            }

            return this.addEventListener(target, eventName, handler);
          }
        }]);

        return EventManagerPlugin;
      }();
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */


      var SharedStylesHost = /*#__PURE__*/function () {
        var SharedStylesHost = /*#__PURE__*/function () {
          function SharedStylesHost() {
            _classCallCheck(this, SharedStylesHost);

            /** @internal */
            this._stylesSet = new Set();
          }

          _createClass2(SharedStylesHost, [{
            key: "addStyles",
            value: function addStyles(styles) {
              var _this67 = this;

              var additions = new Set();
              styles.forEach(function (style) {
                if (!_this67._stylesSet.has(style)) {
                  _this67._stylesSet.add(style);

                  additions.add(style);
                }
              });
              this.onStylesAdded(additions);
            }
          }, {
            key: "onStylesAdded",
            value: function onStylesAdded(additions) {}
          }, {
            key: "getAllStyles",
            value: function getAllStyles() {
              return Array.from(this._stylesSet);
            }
          }]);

          return SharedStylesHost;
        }();

        SharedStylesHost.ɵfac = function SharedStylesHost_Factory(t) {
          return new (t || SharedStylesHost)();
        };

        SharedStylesHost.ɵprov = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjectable"]({
          token: SharedStylesHost,
          factory: SharedStylesHost.ɵfac
        });
        return SharedStylesHost;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();

      var DomSharedStylesHost = /*#__PURE__*/function () {
        var DomSharedStylesHost = /*#__PURE__*/function (_SharedStylesHost) {
          _inherits(DomSharedStylesHost, _SharedStylesHost);

          var _super11 = _createSuper(DomSharedStylesHost);

          function DomSharedStylesHost(_doc) {
            var _this68;

            _classCallCheck(this, DomSharedStylesHost);

            _this68 = _super11.call(this);
            _this68._doc = _doc; // Maps all registered host nodes to a list of style nodes that have been added to the host node.

            _this68._hostNodes = new Map();

            _this68._hostNodes.set(_doc.head, []);

            return _this68;
          }

          _createClass2(DomSharedStylesHost, [{
            key: "_addStylesToHost",
            value: function _addStylesToHost(styles, host, styleNodes) {
              var _this69 = this;

              styles.forEach(function (style) {
                var styleEl = _this69._doc.createElement('style');

                styleEl.textContent = style;
                styleNodes.push(host.appendChild(styleEl));
              });
            }
          }, {
            key: "addHost",
            value: function addHost(hostNode) {
              var styleNodes = [];

              this._addStylesToHost(this._stylesSet, hostNode, styleNodes);

              this._hostNodes.set(hostNode, styleNodes);
            }
          }, {
            key: "removeHost",
            value: function removeHost(hostNode) {
              var styleNodes = this._hostNodes.get(hostNode);

              if (styleNodes) {
                styleNodes.forEach(removeStyle);
              }

              this._hostNodes["delete"](hostNode);
            }
          }, {
            key: "onStylesAdded",
            value: function onStylesAdded(additions) {
              var _this70 = this;

              this._hostNodes.forEach(function (styleNodes, hostNode) {
                _this70._addStylesToHost(additions, hostNode, styleNodes);
              });
            }
          }, {
            key: "ngOnDestroy",
            value: function ngOnDestroy() {
              this._hostNodes.forEach(function (styleNodes) {
                return styleNodes.forEach(removeStyle);
              });
            }
          }]);

          return DomSharedStylesHost;
        }(SharedStylesHost);

        DomSharedStylesHost.ɵfac = function DomSharedStylesHost_Factory(t) {
          return new (t || DomSharedStylesHost)(_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵinject"](_angular_common__WEBPACK_IMPORTED_MODULE_0__.DOCUMENT));
        };

        DomSharedStylesHost.ɵprov = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjectable"]({
          token: DomSharedStylesHost,
          factory: DomSharedStylesHost.ɵfac
        });
        return DomSharedStylesHost;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();

      function removeStyle(styleNode) {
        (0, _angular_common__WEBPACK_IMPORTED_MODULE_0__["ɵgetDOM"])().remove(styleNode);
      }
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */


      var NAMESPACE_URIS = {
        'svg': 'http://www.w3.org/2000/svg',
        'xhtml': 'http://www.w3.org/1999/xhtml',
        'xlink': 'http://www.w3.org/1999/xlink',
        'xml': 'http://www.w3.org/XML/1998/namespace',
        'xmlns': 'http://www.w3.org/2000/xmlns/'
      };
      var COMPONENT_REGEX = /%COMP%/g;
      var NG_DEV_MODE = typeof ngDevMode === 'undefined' || !!ngDevMode;
      var COMPONENT_VARIABLE = '%COMP%';
      var HOST_ATTR = "_nghost-".concat(COMPONENT_VARIABLE);
      var CONTENT_ATTR = "_ngcontent-".concat(COMPONENT_VARIABLE);

      function shimContentAttribute(componentShortId) {
        return CONTENT_ATTR.replace(COMPONENT_REGEX, componentShortId);
      }

      function shimHostAttribute(componentShortId) {
        return HOST_ATTR.replace(COMPONENT_REGEX, componentShortId);
      }

      function flattenStyles(compId, styles, target) {
        for (var i = 0; i < styles.length; i++) {
          var style = styles[i];

          if (Array.isArray(style)) {
            flattenStyles(compId, style, target);
          } else {
            style = style.replace(COMPONENT_REGEX, compId);
            target.push(style);
          }
        }

        return target;
      }

      function decoratePreventDefault(eventHandler) {
        // `DebugNode.triggerEventHandler` needs to know if the listener was created with
        // decoratePreventDefault or is a listener added outside the Angular context so it can handle the
        // two differently. In the first case, the special '__ngUnwrap__' token is passed to the unwrap
        // the listener (see below).
        return function (event) {
          // Ivy uses '__ngUnwrap__' as a special token that allows us to unwrap the function
          // so that it can be invoked programmatically by `DebugNode.triggerEventHandler`. The debug_node
          // can inspect the listener toString contents for the existence of this special token. Because
          // the token is a string literal, it is ensured to not be modified by compiled code.
          if (event === '__ngUnwrap__') {
            return eventHandler;
          }

          var allowDefaultBehavior = eventHandler(event);

          if (allowDefaultBehavior === false) {
            // TODO(tbosch): move preventDefault into event plugins...
            event.preventDefault();
            event.returnValue = false;
          }

          return undefined;
        };
      }

      var hasLoggedNativeEncapsulationWarning = false;

      var DomRendererFactory2 = /*#__PURE__*/function () {
        var DomRendererFactory2 = /*#__PURE__*/function () {
          function DomRendererFactory2(eventManager, sharedStylesHost, appId) {
            _classCallCheck(this, DomRendererFactory2);

            this.eventManager = eventManager;
            this.sharedStylesHost = sharedStylesHost;
            this.appId = appId;
            this.rendererByCompId = new Map();
            this.defaultRenderer = new DefaultDomRenderer2(eventManager);
          }

          _createClass2(DomRendererFactory2, [{
            key: "createRenderer",
            value: function createRenderer(element, type) {
              if (!element || !type) {
                return this.defaultRenderer;
              }

              switch (type.encapsulation) {
                case _angular_core__WEBPACK_IMPORTED_MODULE_1__.ViewEncapsulation.Emulated:
                  {
                    var renderer = this.rendererByCompId.get(type.id);

                    if (!renderer) {
                      renderer = new EmulatedEncapsulationDomRenderer2(this.eventManager, this.sharedStylesHost, type, this.appId);
                      this.rendererByCompId.set(type.id, renderer);
                    }

                    renderer.applyToHost(element);
                    return renderer;
                  }
                // @ts-ignore TODO: Remove as part of FW-2290. TS complains about us dealing with an enum
                // value that is not known (but previously was the value for ViewEncapsulation.Native)

                case 1:
                case _angular_core__WEBPACK_IMPORTED_MODULE_1__.ViewEncapsulation.ShadowDom:
                  // TODO(FW-2290): remove the `case 1:` fallback logic and the warning in v12.
                  if ((typeof ngDevMode === 'undefined' || ngDevMode) && // @ts-ignore TODO: Remove as part of FW-2290. TS complains about us dealing with an
                  // enum value that is not known (but previously was the value for
                  // ViewEncapsulation.Native)
                  !hasLoggedNativeEncapsulationWarning && type.encapsulation === 1) {
                    hasLoggedNativeEncapsulationWarning = true;
                    console.warn('ViewEncapsulation.Native is no longer supported. Falling back to ViewEncapsulation.ShadowDom. The fallback will be removed in v12.');
                  }

                  return new ShadowDomRenderer(this.eventManager, this.sharedStylesHost, element, type);

                default:
                  {
                    if (!this.rendererByCompId.has(type.id)) {
                      var styles = flattenStyles(type.id, type.styles, []);
                      this.sharedStylesHost.addStyles(styles);
                      this.rendererByCompId.set(type.id, this.defaultRenderer);
                    }

                    return this.defaultRenderer;
                  }
              }
            }
          }, {
            key: "begin",
            value: function begin() {}
          }, {
            key: "end",
            value: function end() {}
          }]);

          return DomRendererFactory2;
        }();

        DomRendererFactory2.ɵfac = function DomRendererFactory2_Factory(t) {
          return new (t || DomRendererFactory2)(_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵinject"](_EventManager), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵinject"](DomSharedStylesHost), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵinject"](_angular_core__WEBPACK_IMPORTED_MODULE_1__.APP_ID));
        };

        DomRendererFactory2.ɵprov = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjectable"]({
          token: DomRendererFactory2,
          factory: DomRendererFactory2.ɵfac
        });
        return DomRendererFactory2;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();

      var DefaultDomRenderer2 = /*#__PURE__*/function () {
        function DefaultDomRenderer2(eventManager) {
          _classCallCheck(this, DefaultDomRenderer2);

          this.eventManager = eventManager;
          this.data = Object.create(null);
        }

        _createClass2(DefaultDomRenderer2, [{
          key: "destroy",
          value: function destroy() {}
        }, {
          key: "createElement",
          value: function createElement(name, namespace) {
            if (namespace) {
              // In cases where Ivy (not ViewEngine) is giving us the actual namespace, the look up by key
              // will result in undefined, so we just return the namespace here.
              return document.createElementNS(NAMESPACE_URIS[namespace] || namespace, name);
            }

            return document.createElement(name);
          }
        }, {
          key: "createComment",
          value: function createComment(value) {
            return document.createComment(value);
          }
        }, {
          key: "createText",
          value: function createText(value) {
            return document.createTextNode(value);
          }
        }, {
          key: "appendChild",
          value: function appendChild(parent, newChild) {
            parent.appendChild(newChild);
          }
        }, {
          key: "insertBefore",
          value: function insertBefore(parent, newChild, refChild) {
            if (parent) {
              parent.insertBefore(newChild, refChild);
            }
          }
        }, {
          key: "removeChild",
          value: function removeChild(parent, oldChild) {
            if (parent) {
              parent.removeChild(oldChild);
            }
          }
        }, {
          key: "selectRootElement",
          value: function selectRootElement(selectorOrNode, preserveContent) {
            var el = typeof selectorOrNode === 'string' ? document.querySelector(selectorOrNode) : selectorOrNode;

            if (!el) {
              throw new Error("The selector \"".concat(selectorOrNode, "\" did not match any elements"));
            }

            if (!preserveContent) {
              el.textContent = '';
            }

            return el;
          }
        }, {
          key: "parentNode",
          value: function parentNode(node) {
            return node.parentNode;
          }
        }, {
          key: "nextSibling",
          value: function nextSibling(node) {
            return node.nextSibling;
          }
        }, {
          key: "setAttribute",
          value: function setAttribute(el, name, value, namespace) {
            if (namespace) {
              name = namespace + ':' + name; // TODO(FW-811): Ivy may cause issues here because it's passing around
              // full URIs for namespaces, therefore this lookup will fail.

              var namespaceUri = NAMESPACE_URIS[namespace];

              if (namespaceUri) {
                el.setAttributeNS(namespaceUri, name, value);
              } else {
                el.setAttribute(name, value);
              }
            } else {
              el.setAttribute(name, value);
            }
          }
        }, {
          key: "removeAttribute",
          value: function removeAttribute(el, name, namespace) {
            if (namespace) {
              // TODO(FW-811): Ivy may cause issues here because it's passing around
              // full URIs for namespaces, therefore this lookup will fail.
              var namespaceUri = NAMESPACE_URIS[namespace];

              if (namespaceUri) {
                el.removeAttributeNS(namespaceUri, name);
              } else {
                // TODO(FW-811): Since ivy is passing around full URIs for namespaces
                // this could result in properties like `http://www.w3.org/2000/svg:cx="123"`,
                // which is wrong.
                el.removeAttribute("".concat(namespace, ":").concat(name));
              }
            } else {
              el.removeAttribute(name);
            }
          }
        }, {
          key: "addClass",
          value: function addClass(el, name) {
            el.classList.add(name);
          }
        }, {
          key: "removeClass",
          value: function removeClass(el, name) {
            el.classList.remove(name);
          }
        }, {
          key: "setStyle",
          value: function setStyle(el, style, value, flags) {
            if (flags & (_angular_core__WEBPACK_IMPORTED_MODULE_1__.RendererStyleFlags2.DashCase | _angular_core__WEBPACK_IMPORTED_MODULE_1__.RendererStyleFlags2.Important)) {
              el.style.setProperty(style, value, flags & _angular_core__WEBPACK_IMPORTED_MODULE_1__.RendererStyleFlags2.Important ? 'important' : '');
            } else {
              el.style[style] = value;
            }
          }
        }, {
          key: "removeStyle",
          value: function removeStyle(el, style, flags) {
            if (flags & _angular_core__WEBPACK_IMPORTED_MODULE_1__.RendererStyleFlags2.DashCase) {
              el.style.removeProperty(style);
            } else {
              // IE requires '' instead of null
              // see https://github.com/angular/angular/issues/7916
              el.style[style] = '';
            }
          }
        }, {
          key: "setProperty",
          value: function setProperty(el, name, value) {
            NG_DEV_MODE && checkNoSyntheticProp(name, 'property');
            el[name] = value;
          }
        }, {
          key: "setValue",
          value: function setValue(node, value) {
            node.nodeValue = value;
          }
        }, {
          key: "listen",
          value: function listen(target, event, callback) {
            NG_DEV_MODE && checkNoSyntheticProp(event, 'listener');

            if (typeof target === 'string') {
              return this.eventManager.addGlobalEventListener(target, event, decoratePreventDefault(callback));
            }

            return this.eventManager.addEventListener(target, event, decoratePreventDefault(callback));
          }
        }]);

        return DefaultDomRenderer2;
      }();

      var ɵ0$1 = function ɵ0$1() {
        return '@'.charCodeAt(0);
      };

      var AT_CHARCODE = /*#__PURE__*/ɵ0$1();

      function checkNoSyntheticProp(name, nameKind) {
        if (name.charCodeAt(0) === AT_CHARCODE) {
          throw new Error("Found the synthetic ".concat(nameKind, " ").concat(name, ". Please include either \"BrowserAnimationsModule\" or \"NoopAnimationsModule\" in your application."));
        }
      }

      var EmulatedEncapsulationDomRenderer2 = /*#__PURE__*/function (_DefaultDomRenderer) {
        _inherits(EmulatedEncapsulationDomRenderer2, _DefaultDomRenderer);

        var _super12 = _createSuper(EmulatedEncapsulationDomRenderer2);

        function EmulatedEncapsulationDomRenderer2(eventManager, sharedStylesHost, component, appId) {
          var _this71;

          _classCallCheck(this, EmulatedEncapsulationDomRenderer2);

          _this71 = _super12.call(this, eventManager);
          _this71.component = component;
          var styles = flattenStyles(appId + '-' + component.id, component.styles, []);
          sharedStylesHost.addStyles(styles);
          _this71.contentAttr = shimContentAttribute(appId + '-' + component.id);
          _this71.hostAttr = shimHostAttribute(appId + '-' + component.id);
          return _this71;
        }

        _createClass2(EmulatedEncapsulationDomRenderer2, [{
          key: "applyToHost",
          value: function applyToHost(element) {
            _get(_getPrototypeOf(EmulatedEncapsulationDomRenderer2.prototype), "setAttribute", this).call(this, element, this.hostAttr, '');
          }
        }, {
          key: "createElement",
          value: function createElement(parent, name) {
            var el = _get(_getPrototypeOf(EmulatedEncapsulationDomRenderer2.prototype), "createElement", this).call(this, parent, name);

            _get(_getPrototypeOf(EmulatedEncapsulationDomRenderer2.prototype), "setAttribute", this).call(this, el, this.contentAttr, '');

            return el;
          }
        }]);

        return EmulatedEncapsulationDomRenderer2;
      }(DefaultDomRenderer2);

      var ShadowDomRenderer = /*#__PURE__*/function (_DefaultDomRenderer2) {
        _inherits(ShadowDomRenderer, _DefaultDomRenderer2);

        var _super13 = _createSuper(ShadowDomRenderer);

        function ShadowDomRenderer(eventManager, sharedStylesHost, hostEl, component) {
          var _this72;

          _classCallCheck(this, ShadowDomRenderer);

          _this72 = _super13.call(this, eventManager);
          _this72.sharedStylesHost = sharedStylesHost;
          _this72.hostEl = hostEl;
          _this72.shadowRoot = hostEl.attachShadow({
            mode: 'open'
          });

          _this72.sharedStylesHost.addHost(_this72.shadowRoot);

          var styles = flattenStyles(component.id, component.styles, []);

          for (var i = 0; i < styles.length; i++) {
            var styleEl = document.createElement('style');
            styleEl.textContent = styles[i];

            _this72.shadowRoot.appendChild(styleEl);
          }

          return _this72;
        }

        _createClass2(ShadowDomRenderer, [{
          key: "nodeOrShadowRoot",
          value: function nodeOrShadowRoot(node) {
            return node === this.hostEl ? this.shadowRoot : node;
          }
        }, {
          key: "destroy",
          value: function destroy() {
            this.sharedStylesHost.removeHost(this.shadowRoot);
          }
        }, {
          key: "appendChild",
          value: function appendChild(parent, newChild) {
            return _get(_getPrototypeOf(ShadowDomRenderer.prototype), "appendChild", this).call(this, this.nodeOrShadowRoot(parent), newChild);
          }
        }, {
          key: "insertBefore",
          value: function insertBefore(parent, newChild, refChild) {
            return _get(_getPrototypeOf(ShadowDomRenderer.prototype), "insertBefore", this).call(this, this.nodeOrShadowRoot(parent), newChild, refChild);
          }
        }, {
          key: "removeChild",
          value: function removeChild(parent, oldChild) {
            return _get(_getPrototypeOf(ShadowDomRenderer.prototype), "removeChild", this).call(this, this.nodeOrShadowRoot(parent), oldChild);
          }
        }, {
          key: "parentNode",
          value: function parentNode(node) {
            return this.nodeOrShadowRoot(_get(_getPrototypeOf(ShadowDomRenderer.prototype), "parentNode", this).call(this, this.nodeOrShadowRoot(node)));
          }
        }]);

        return ShadowDomRenderer;
      }(DefaultDomRenderer2);
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */


      var DomEventsPlugin = /*#__PURE__*/function () {
        var DomEventsPlugin = /*#__PURE__*/function (_EventManagerPlugin) {
          _inherits(DomEventsPlugin, _EventManagerPlugin);

          var _super14 = _createSuper(DomEventsPlugin);

          function DomEventsPlugin(doc) {
            _classCallCheck(this, DomEventsPlugin);

            return _super14.call(this, doc);
          } // This plugin should come last in the list of plugins, because it accepts all
          // events.


          _createClass2(DomEventsPlugin, [{
            key: "supports",
            value: function supports(eventName) {
              return true;
            }
          }, {
            key: "addEventListener",
            value: function addEventListener(element, eventName, handler) {
              var _this73 = this;

              element.addEventListener(eventName, handler, false);
              return function () {
                return _this73.removeEventListener(element, eventName, handler);
              };
            }
          }, {
            key: "removeEventListener",
            value: function removeEventListener(target, eventName, callback) {
              return target.removeEventListener(eventName, callback);
            }
          }]);

          return DomEventsPlugin;
        }(EventManagerPlugin);

        DomEventsPlugin.ɵfac = function DomEventsPlugin_Factory(t) {
          return new (t || DomEventsPlugin)(_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵinject"](_angular_common__WEBPACK_IMPORTED_MODULE_0__.DOCUMENT));
        };

        DomEventsPlugin.ɵprov = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjectable"]({
          token: DomEventsPlugin,
          factory: DomEventsPlugin.ɵfac
        });
        return DomEventsPlugin;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * Supported HammerJS recognizer event names.
       */


      var EVENT_NAMES = {
        // pan
        'pan': true,
        'panstart': true,
        'panmove': true,
        'panend': true,
        'pancancel': true,
        'panleft': true,
        'panright': true,
        'panup': true,
        'pandown': true,
        // pinch
        'pinch': true,
        'pinchstart': true,
        'pinchmove': true,
        'pinchend': true,
        'pinchcancel': true,
        'pinchin': true,
        'pinchout': true,
        // press
        'press': true,
        'pressup': true,
        // rotate
        'rotate': true,
        'rotatestart': true,
        'rotatemove': true,
        'rotateend': true,
        'rotatecancel': true,
        // swipe
        'swipe': true,
        'swipeleft': true,
        'swiperight': true,
        'swipeup': true,
        'swipedown': true,
        // tap
        'tap': true,
        'doubletap': true
      };
      /**
       * DI token for providing [HammerJS](https://hammerjs.github.io/) support to Angular.
       * @see `HammerGestureConfig`
       *
       * @ngModule HammerModule
       * @publicApi
       */

      var _HAMMER_GESTURE_CONFIG = /*#__PURE__*/new _angular_core__WEBPACK_IMPORTED_MODULE_1__.InjectionToken('HammerGestureConfig');
      /**
       * Injection token used to provide a {@link HammerLoader} to Angular.
       *
       * @publicApi
       */


      var _HAMMER_LOADER = /*#__PURE__*/new _angular_core__WEBPACK_IMPORTED_MODULE_1__.InjectionToken('HammerLoader');
      /**
       * An injectable [HammerJS Manager](https://hammerjs.github.io/api/#hammermanager)
       * for gesture recognition. Configures specific event recognition.
       * @publicApi
       */


      var _HammerGestureConfig = /*#__PURE__*/function () {
        var HammerGestureConfig = /*#__PURE__*/function () {
          function HammerGestureConfig() {
            _classCallCheck(this, HammerGestureConfig);

            /**
             * A set of supported event names for gestures to be used in Angular.
             * Angular supports all built-in recognizers, as listed in
             * [HammerJS documentation](https://hammerjs.github.io/).
             */
            this.events = [];
            /**
             * Maps gesture event names to a set of configuration options
             * that specify overrides to the default values for specific properties.
             *
             * The key is a supported event name to be configured,
             * and the options object contains a set of properties, with override values
             * to be applied to the named recognizer event.
             * For example, to disable recognition of the rotate event, specify
             *  `{"rotate": {"enable": false}}`.
             *
             * Properties that are not present take the HammerJS default values.
             * For information about which properties are supported for which events,
             * and their allowed and default values, see
             * [HammerJS documentation](https://hammerjs.github.io/).
             *
             */

            this.overrides = {};
          }
          /**
           * Creates a [HammerJS Manager](https://hammerjs.github.io/api/#hammermanager)
           * and attaches it to a given HTML element.
           * @param element The element that will recognize gestures.
           * @returns A HammerJS event-manager object.
           */


          _createClass2(HammerGestureConfig, [{
            key: "buildHammer",
            value: function buildHammer(element) {
              var mc = new Hammer(element, this.options);
              mc.get('pinch').set({
                enable: true
              });
              mc.get('rotate').set({
                enable: true
              });

              for (var eventName in this.overrides) {
                mc.get(eventName).set(this.overrides[eventName]);
              }

              return mc;
            }
          }]);

          return HammerGestureConfig;
        }();

        HammerGestureConfig.ɵfac = function HammerGestureConfig_Factory(t) {
          return new (t || HammerGestureConfig)();
        };

        HammerGestureConfig.ɵprov = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjectable"]({
          token: HammerGestureConfig,
          factory: HammerGestureConfig.ɵfac
        });
        return HammerGestureConfig;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();
      /**
       * Event plugin that adds Hammer support to an application.
       *
       * @ngModule HammerModule
       */


      var HammerGesturesPlugin = /*#__PURE__*/function () {
        var HammerGesturesPlugin = /*#__PURE__*/function (_EventManagerPlugin2) {
          _inherits(HammerGesturesPlugin, _EventManagerPlugin2);

          var _super15 = _createSuper(HammerGesturesPlugin);

          function HammerGesturesPlugin(doc, _config, console, loader) {
            var _this74;

            _classCallCheck(this, HammerGesturesPlugin);

            _this74 = _super15.call(this, doc);
            _this74._config = _config;
            _this74.console = console;
            _this74.loader = loader;
            _this74._loaderPromise = null;
            return _this74;
          }

          _createClass2(HammerGesturesPlugin, [{
            key: "supports",
            value: function supports(eventName) {
              if (!EVENT_NAMES.hasOwnProperty(eventName.toLowerCase()) && !this.isCustomEvent(eventName)) {
                return false;
              }

              if (!window.Hammer && !this.loader) {
                if (typeof ngDevMode === 'undefined' || ngDevMode) {
                  this.console.warn("The \"".concat(eventName, "\" event cannot be bound because Hammer.JS is not ") + "loaded and no custom loader has been specified.");
                }

                return false;
              }

              return true;
            }
          }, {
            key: "addEventListener",
            value: function addEventListener(element, eventName, handler) {
              var _this75 = this;

              var zone = this.manager.getZone();
              eventName = eventName.toLowerCase(); // If Hammer is not present but a loader is specified, we defer adding the event listener
              // until Hammer is loaded.

              if (!window.Hammer && this.loader) {
                this._loaderPromise = this._loaderPromise || this.loader(); // This `addEventListener` method returns a function to remove the added listener.
                // Until Hammer is loaded, the returned function needs to *cancel* the registration rather
                // than remove anything.

                var cancelRegistration = false;

                var deregister = function deregister() {
                  cancelRegistration = true;
                };

                this._loaderPromise.then(function () {
                  // If Hammer isn't actually loaded when the custom loader resolves, give up.
                  if (!window.Hammer) {
                    if (typeof ngDevMode === 'undefined' || ngDevMode) {
                      _this75.console.warn("The custom HAMMER_LOADER completed, but Hammer.JS is not present.");
                    }

                    deregister = function deregister() {};

                    return;
                  }

                  if (!cancelRegistration) {
                    // Now that Hammer is loaded and the listener is being loaded for real,
                    // the deregistration function changes from canceling registration to removal.
                    deregister = _this75.addEventListener(element, eventName, handler);
                  }
                })["catch"](function () {
                  if (typeof ngDevMode === 'undefined' || ngDevMode) {
                    _this75.console.warn("The \"".concat(eventName, "\" event cannot be bound because the custom ") + "Hammer.JS loader failed.");
                  }

                  deregister = function deregister() {};
                }); // Return a function that *executes* `deregister` (and not `deregister` itself) so that we
                // can change the behavior of `deregister` once the listener is added. Using a closure in
                // this way allows us to avoid any additional data structures to track listener removal.


                return function () {
                  deregister();
                };
              }

              return zone.runOutsideAngular(function () {
                // Creating the manager bind events, must be done outside of angular
                var mc = _this75._config.buildHammer(element);

                var callback = function callback(eventObj) {
                  zone.runGuarded(function () {
                    handler(eventObj);
                  });
                };

                mc.on(eventName, callback);
                return function () {
                  mc.off(eventName, callback); // destroy mc to prevent memory leak

                  if (typeof mc.destroy === 'function') {
                    mc.destroy();
                  }
                };
              });
            }
          }, {
            key: "isCustomEvent",
            value: function isCustomEvent(eventName) {
              return this._config.events.indexOf(eventName) > -1;
            }
          }]);

          return HammerGesturesPlugin;
        }(EventManagerPlugin);

        HammerGesturesPlugin.ɵfac = function HammerGesturesPlugin_Factory(t) {
          return new (t || HammerGesturesPlugin)(_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵinject"](_angular_common__WEBPACK_IMPORTED_MODULE_0__.DOCUMENT), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵinject"](_HAMMER_GESTURE_CONFIG), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵinject"](_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵConsole"]), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵinject"](_HAMMER_LOADER, 8));
        };

        HammerGesturesPlugin.ɵprov = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjectable"]({
          token: HammerGesturesPlugin,
          factory: HammerGesturesPlugin.ɵfac
        });
        return HammerGesturesPlugin;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();
      /**
       * In Ivy, support for Hammer gestures is optional, so applications must
       * import the `HammerModule` at root to turn on support. This means that
       * Hammer-specific code can be tree-shaken away if not needed.
       */


      var HAMMER_PROVIDERS__POST_R3__ = [];
      /**
       * In View Engine, support for Hammer gestures is built-in by default.
       */

      var HAMMER_PROVIDERS__PRE_R3__ = [{
        provide: _EVENT_MANAGER_PLUGINS,
        useClass: HammerGesturesPlugin,
        multi: true,
        deps: [_angular_common__WEBPACK_IMPORTED_MODULE_0__.DOCUMENT, _HAMMER_GESTURE_CONFIG, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵConsole"], [/*#__PURE__*/new _angular_core__WEBPACK_IMPORTED_MODULE_1__.Optional(), _HAMMER_LOADER]]
      }, {
        provide: _HAMMER_GESTURE_CONFIG,
        useClass: _HammerGestureConfig,
        deps: []
      }];
      var HAMMER_PROVIDERS = HAMMER_PROVIDERS__POST_R3__;
      /**
       * Adds support for HammerJS.
       *
       * Import this module at the root of your application so that Angular can work with
       * HammerJS to detect gesture events.
       *
       * Note that applications still need to include the HammerJS script itself. This module
       * simply sets up the coordination layer between HammerJS and Angular's EventManager.
       *
       * @publicApi
       */

      var _HammerModule = /*#__PURE__*/function () {
        var HammerModule = function HammerModule() {
          _classCallCheck(this, HammerModule);
        };

        HammerModule.ɵfac = function HammerModule_Factory(t) {
          return new (t || HammerModule)();
        };

        HammerModule.ɵmod = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineNgModule"]({
          type: HammerModule
        });
        HammerModule.ɵinj = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjector"]({
          providers: HAMMER_PROVIDERS__PRE_R3__
        });
        return HammerModule;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * Defines supported modifiers for key events.
       */


      var MODIFIER_KEYS = ['alt', 'control', 'meta', 'shift'];
      var DOM_KEY_LOCATION_NUMPAD = 3; // Map to convert some key or keyIdentifier values to what will be returned by getEventKey

      var _keyMap = {
        // The following values are here for cross-browser compatibility and to match the W3C standard
        // cf https://www.w3.org/TR/DOM-Level-3-Events-key/
        '\b': 'Backspace',
        '\t': 'Tab',
        '\x7F': 'Delete',
        '\x1B': 'Escape',
        'Del': 'Delete',
        'Esc': 'Escape',
        'Left': 'ArrowLeft',
        'Right': 'ArrowRight',
        'Up': 'ArrowUp',
        'Down': 'ArrowDown',
        'Menu': 'ContextMenu',
        'Scroll': 'ScrollLock',
        'Win': 'OS'
      }; // There is a bug in Chrome for numeric keypad keys:
      // https://code.google.com/p/chromium/issues/detail?id=155654
      // 1, 2, 3 ... are reported as A, B, C ...

      var _chromeNumKeyPadMap = {
        'A': '1',
        'B': '2',
        'C': '3',
        'D': '4',
        'E': '5',
        'F': '6',
        'G': '7',
        'H': '8',
        'I': '9',
        'J': '*',
        'K': '+',
        'M': '-',
        'N': '.',
        'O': '/',
        '\x60': '0',
        '\x90': 'NumLock'
      };

      var ɵ0$2 = function ɵ0$2(event) {
        return event.altKey;
      },
          ɵ1 = function ɵ1(event) {
        return event.ctrlKey;
      },
          ɵ2 = function ɵ2(event) {
        return event.metaKey;
      },
          ɵ3 = function ɵ3(event) {
        return event.shiftKey;
      };
      /**
       * Retrieves modifiers from key-event objects.
       */


      var MODIFIER_KEY_GETTERS = {
        'alt': ɵ0$2,
        'control': ɵ1,
        'meta': ɵ2,
        'shift': ɵ3
      };
      /**
       * @publicApi
       * A browser plug-in that provides support for handling of key events in Angular.
       */

      var KeyEventsPlugin = /*#__PURE__*/function () {
        var KeyEventsPlugin = /*#__PURE__*/function (_EventManagerPlugin3) {
          _inherits(KeyEventsPlugin, _EventManagerPlugin3);

          var _super16 = _createSuper(KeyEventsPlugin);

          /**
           * Initializes an instance of the browser plug-in.
           * @param doc The document in which key events will be detected.
           */
          function KeyEventsPlugin(doc) {
            _classCallCheck(this, KeyEventsPlugin);

            return _super16.call(this, doc);
          }
          /**
           * Reports whether a named key event is supported.
           * @param eventName The event name to query.
           * @return True if the named key event is supported.
           */


          _createClass2(KeyEventsPlugin, [{
            key: "supports",
            value: function supports(eventName) {
              return KeyEventsPlugin.parseEventName(eventName) != null;
            }
            /**
             * Registers a handler for a specific element and key event.
             * @param element The HTML element to receive event notifications.
             * @param eventName The name of the key event to listen for.
             * @param handler A function to call when the notification occurs. Receives the
             * event object as an argument.
             * @returns The key event that was registered.
             */

          }, {
            key: "addEventListener",
            value: function addEventListener(element, eventName, handler) {
              var parsedEvent = KeyEventsPlugin.parseEventName(eventName);
              var outsideHandler = KeyEventsPlugin.eventCallback(parsedEvent['fullKey'], handler, this.manager.getZone());
              return this.manager.getZone().runOutsideAngular(function () {
                return (0, _angular_common__WEBPACK_IMPORTED_MODULE_0__["ɵgetDOM"])().onAndCancel(element, parsedEvent['domEventName'], outsideHandler);
              });
            }
          }], [{
            key: "parseEventName",
            value: function parseEventName(eventName) {
              var parts = eventName.toLowerCase().split('.');
              var domEventName = parts.shift();

              if (parts.length === 0 || !(domEventName === 'keydown' || domEventName === 'keyup')) {
                return null;
              }

              var key = KeyEventsPlugin._normalizeKey(parts.pop());

              var fullKey = '';
              MODIFIER_KEYS.forEach(function (modifierName) {
                var index = parts.indexOf(modifierName);

                if (index > -1) {
                  parts.splice(index, 1);
                  fullKey += modifierName + '.';
                }
              });
              fullKey += key;

              if (parts.length != 0 || key.length === 0) {
                // returning null instead of throwing to let another plugin process the event
                return null;
              } // NOTE: Please don't rewrite this as so, as it will break JSCompiler property renaming.
              //       The code must remain in the `result['domEventName']` form.
              // return {domEventName, fullKey};


              var result = {};
              result['domEventName'] = domEventName;
              result['fullKey'] = fullKey;
              return result;
            }
          }, {
            key: "getEventFullKey",
            value: function getEventFullKey(event) {
              var fullKey = '';
              var key = getEventKey(event);
              key = key.toLowerCase();

              if (key === ' ') {
                key = 'space'; // for readability
              } else if (key === '.') {
                key = 'dot'; // because '.' is used as a separator in event names
              }

              MODIFIER_KEYS.forEach(function (modifierName) {
                if (modifierName != key) {
                  var modifierGetter = MODIFIER_KEY_GETTERS[modifierName];

                  if (modifierGetter(event)) {
                    fullKey += modifierName + '.';
                  }
                }
              });
              fullKey += key;
              return fullKey;
            }
            /**
             * Configures a handler callback for a key event.
             * @param fullKey The event name that combines all simultaneous keystrokes.
             * @param handler The function that responds to the key event.
             * @param zone The zone in which the event occurred.
             * @returns A callback function.
             */

          }, {
            key: "eventCallback",
            value: function eventCallback(fullKey, handler, zone) {
              return function (event
              /** TODO #9100 */
              ) {
                if (KeyEventsPlugin.getEventFullKey(event) === fullKey) {
                  zone.runGuarded(function () {
                    return handler(event);
                  });
                }
              };
            }
            /** @internal */

          }, {
            key: "_normalizeKey",
            value: function _normalizeKey(keyName) {
              // TODO: switch to a Map if the mapping grows too much
              switch (keyName) {
                case 'esc':
                  return 'escape';

                default:
                  return keyName;
              }
            }
          }]);

          return KeyEventsPlugin;
        }(EventManagerPlugin);

        KeyEventsPlugin.ɵfac = function KeyEventsPlugin_Factory(t) {
          return new (t || KeyEventsPlugin)(_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵinject"](_angular_common__WEBPACK_IMPORTED_MODULE_0__.DOCUMENT));
        };

        KeyEventsPlugin.ɵprov = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjectable"]({
          token: KeyEventsPlugin,
          factory: KeyEventsPlugin.ɵfac
        });
        return KeyEventsPlugin;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();

      function getEventKey(event) {
        var key = event.key;

        if (key == null) {
          key = event.keyIdentifier; // keyIdentifier is defined in the old draft of DOM Level 3 Events implemented by Chrome and
          // Safari cf
          // https://www.w3.org/TR/2007/WD-DOM-Level-3-Events-20071221/events.html#Events-KeyboardEvents-Interfaces

          if (key == null) {
            return 'Unidentified';
          }

          if (key.startsWith('U+')) {
            key = String.fromCharCode(parseInt(key.substring(2), 16));

            if (event.location === DOM_KEY_LOCATION_NUMPAD && _chromeNumKeyPadMap.hasOwnProperty(key)) {
              // There is a bug in Chrome for numeric keypad keys:
              // https://code.google.com/p/chromium/issues/detail?id=155654
              // 1, 2, 3 ... are reported as A, B, C ...
              key = _chromeNumKeyPadMap[key];
            }
          }
        }

        return _keyMap[key] || key;
      }
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * DomSanitizer helps preventing Cross Site Scripting Security bugs (XSS) by sanitizing
       * values to be safe to use in the different DOM contexts.
       *
       * For example, when binding a URL in an `<a [href]="someValue">` hyperlink, `someValue` will be
       * sanitized so that an attacker cannot inject e.g. a `javascript:` URL that would execute code on
       * the website.
       *
       * In specific situations, it might be necessary to disable sanitization, for example if the
       * application genuinely needs to produce a `javascript:` style link with a dynamic value in it.
       * Users can bypass security by constructing a value with one of the `bypassSecurityTrust...`
       * methods, and then binding to that value from the template.
       *
       * These situations should be very rare, and extraordinary care must be taken to avoid creating a
       * Cross Site Scripting (XSS) security bug!
       *
       * When using `bypassSecurityTrust...`, make sure to call the method as early as possible and as
       * close as possible to the source of the value, to make it easy to verify no security bug is
       * created by its use.
       *
       * It is not required (and not recommended) to bypass security if the value is safe, e.g. a URL that
       * does not start with a suspicious protocol, or an HTML snippet that does not contain dangerous
       * code. The sanitizer leaves safe values intact.
       *
       * @security Calling any of the `bypassSecurityTrust...` APIs disables Angular's built-in
       * sanitization for the value passed in. Carefully check and audit all values and code paths going
       * into this call. Make sure any user data is appropriately escaped for this security context.
       * For more detail, see the [Security Guide](https://g.co/ng/security).
       *
       * @publicApi
       */


      var _DomSanitizer = /*#__PURE__*/function () {
        var DomSanitizer = function DomSanitizer() {
          _classCallCheck(this, DomSanitizer);
        };

        DomSanitizer.ɵfac = function DomSanitizer_Factory(t) {
          return new (t || DomSanitizer)();
        };

        DomSanitizer.ɵprov = (0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjectable"])({
          factory: function DomSanitizer_Factory() {
            return (0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵinject"])(DomSanitizerImpl);
          },
          token: DomSanitizer,
          providedIn: "root"
        });
        return DomSanitizer;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();

      function domSanitizerImplFactory(injector) {
        return new DomSanitizerImpl(injector.get(_angular_common__WEBPACK_IMPORTED_MODULE_0__.DOCUMENT));
      }

      var DomSanitizerImpl = /*#__PURE__*/function () {
        var DomSanitizerImpl = /*#__PURE__*/function (_DomSanitizer2) {
          _inherits(DomSanitizerImpl, _DomSanitizer2);

          var _super17 = _createSuper(DomSanitizerImpl);

          function DomSanitizerImpl(_doc) {
            var _this76;

            _classCallCheck(this, DomSanitizerImpl);

            _this76 = _super17.call(this);
            _this76._doc = _doc;
            return _this76;
          }

          _createClass2(DomSanitizerImpl, [{
            key: "sanitize",
            value: function sanitize(ctx, value) {
              if (value == null) return null;

              switch (ctx) {
                case _angular_core__WEBPACK_IMPORTED_MODULE_1__.SecurityContext.NONE:
                  return value;

                case _angular_core__WEBPACK_IMPORTED_MODULE_1__.SecurityContext.HTML:
                  if ((0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵallowSanitizationBypassAndThrow"])(value, "HTML"
                  /* Html */
                  )) {
                    return (0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵunwrapSafeValue"])(value);
                  }

                  return (0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵ_sanitizeHtml"])(this._doc, String(value)).toString();

                case _angular_core__WEBPACK_IMPORTED_MODULE_1__.SecurityContext.STYLE:
                  if ((0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵallowSanitizationBypassAndThrow"])(value, "Style"
                  /* Style */
                  )) {
                    return (0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵunwrapSafeValue"])(value);
                  }

                  return value;

                case _angular_core__WEBPACK_IMPORTED_MODULE_1__.SecurityContext.SCRIPT:
                  if ((0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵallowSanitizationBypassAndThrow"])(value, "Script"
                  /* Script */
                  )) {
                    return (0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵunwrapSafeValue"])(value);
                  }

                  throw new Error('unsafe value used in a script context');

                case _angular_core__WEBPACK_IMPORTED_MODULE_1__.SecurityContext.URL:
                  var type = (0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵgetSanitizationBypassType"])(value);

                  if ((0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵallowSanitizationBypassAndThrow"])(value, "URL"
                  /* Url */
                  )) {
                    return (0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵunwrapSafeValue"])(value);
                  }

                  return (0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵ_sanitizeUrl"])(String(value));

                case _angular_core__WEBPACK_IMPORTED_MODULE_1__.SecurityContext.RESOURCE_URL:
                  if ((0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵallowSanitizationBypassAndThrow"])(value, "ResourceURL"
                  /* ResourceUrl */
                  )) {
                    return (0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵunwrapSafeValue"])(value);
                  }

                  throw new Error('unsafe value used in a resource URL context (see https://g.co/ng/security#xss)');

                default:
                  throw new Error("Unexpected SecurityContext ".concat(ctx, " (see https://g.co/ng/security#xss)"));
              }
            }
          }, {
            key: "bypassSecurityTrustHtml",
            value: function bypassSecurityTrustHtml(value) {
              return (0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵbypassSanitizationTrustHtml"])(value);
            }
          }, {
            key: "bypassSecurityTrustStyle",
            value: function bypassSecurityTrustStyle(value) {
              return (0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵbypassSanitizationTrustStyle"])(value);
            }
          }, {
            key: "bypassSecurityTrustScript",
            value: function bypassSecurityTrustScript(value) {
              return (0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵbypassSanitizationTrustScript"])(value);
            }
          }, {
            key: "bypassSecurityTrustUrl",
            value: function bypassSecurityTrustUrl(value) {
              return (0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵbypassSanitizationTrustUrl"])(value);
            }
          }, {
            key: "bypassSecurityTrustResourceUrl",
            value: function bypassSecurityTrustResourceUrl(value) {
              return (0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵbypassSanitizationTrustResourceUrl"])(value);
            }
          }]);

          return DomSanitizerImpl;
        }(_DomSanitizer);

        DomSanitizerImpl.ɵfac = function DomSanitizerImpl_Factory(t) {
          return new (t || DomSanitizerImpl)(_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵinject"](_angular_common__WEBPACK_IMPORTED_MODULE_0__.DOCUMENT));
        };

        DomSanitizerImpl.ɵprov = (0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjectable"])({
          factory: function DomSanitizerImpl_Factory() {
            return domSanitizerImplFactory((0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵinject"])(_angular_core__WEBPACK_IMPORTED_MODULE_1__.INJECTOR));
          },
          token: DomSanitizerImpl,
          providedIn: "root"
        });
        return DomSanitizerImpl;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */


      function initDomAdapter() {
        BrowserDomAdapter.makeCurrent();
        BrowserGetTestability.init();
      }

      function errorHandler() {
        return new _angular_core__WEBPACK_IMPORTED_MODULE_1__.ErrorHandler();
      }

      function _document() {
        // Tell ivy about the global document
        (0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵsetDocument"])(document);
        return document;
      }

      var ɵ0$3 = _angular_common__WEBPACK_IMPORTED_MODULE_0__["ɵPLATFORM_BROWSER_ID"];
      var INTERNAL_BROWSER_PLATFORM_PROVIDERS = [{
        provide: _angular_core__WEBPACK_IMPORTED_MODULE_1__.PLATFORM_ID,
        useValue: ɵ0$3
      }, {
        provide: _angular_core__WEBPACK_IMPORTED_MODULE_1__.PLATFORM_INITIALIZER,
        useValue: initDomAdapter,
        multi: true
      }, {
        provide: _angular_common__WEBPACK_IMPORTED_MODULE_0__.DOCUMENT,
        useFactory: _document,
        deps: []
      }];
      var BROWSER_SANITIZATION_PROVIDERS__PRE_R3__ = [{
        provide: _angular_core__WEBPACK_IMPORTED_MODULE_1__.Sanitizer,
        useExisting: _DomSanitizer
      }, {
        provide: _DomSanitizer,
        useClass: DomSanitizerImpl,
        deps: [_angular_common__WEBPACK_IMPORTED_MODULE_0__.DOCUMENT]
      }];
      var BROWSER_SANITIZATION_PROVIDERS__POST_R3__ = [];
      /**
       * @security Replacing built-in sanitization providers exposes the application to XSS risks.
       * Attacker-controlled data introduced by an unsanitized provider could expose your
       * application to XSS risks. For more detail, see the [Security Guide](https://g.co/ng/security).
       * @publicApi
       */

      var BROWSER_SANITIZATION_PROVIDERS = BROWSER_SANITIZATION_PROVIDERS__POST_R3__;
      /**
       * A factory function that returns a `PlatformRef` instance associated with browser service
       * providers.
       *
       * @publicApi
       */

      var _platformBrowser = /*#__PURE__*/(0, _angular_core__WEBPACK_IMPORTED_MODULE_1__.createPlatformFactory)(_angular_core__WEBPACK_IMPORTED_MODULE_1__.platformCore, 'browser', INTERNAL_BROWSER_PLATFORM_PROVIDERS);

      var BROWSER_MODULE_PROVIDERS = [BROWSER_SANITIZATION_PROVIDERS, {
        provide: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵINJECTOR_SCOPE"],
        useValue: 'root'
      }, {
        provide: _angular_core__WEBPACK_IMPORTED_MODULE_1__.ErrorHandler,
        useFactory: errorHandler,
        deps: []
      }, {
        provide: _EVENT_MANAGER_PLUGINS,
        useClass: DomEventsPlugin,
        multi: true,
        deps: [_angular_common__WEBPACK_IMPORTED_MODULE_0__.DOCUMENT, _angular_core__WEBPACK_IMPORTED_MODULE_1__.NgZone, _angular_core__WEBPACK_IMPORTED_MODULE_1__.PLATFORM_ID]
      }, {
        provide: _EVENT_MANAGER_PLUGINS,
        useClass: KeyEventsPlugin,
        multi: true,
        deps: [_angular_common__WEBPACK_IMPORTED_MODULE_0__.DOCUMENT]
      }, HAMMER_PROVIDERS, {
        provide: DomRendererFactory2,
        useClass: DomRendererFactory2,
        deps: [_EventManager, DomSharedStylesHost, _angular_core__WEBPACK_IMPORTED_MODULE_1__.APP_ID]
      }, {
        provide: _angular_core__WEBPACK_IMPORTED_MODULE_1__.RendererFactory2,
        useExisting: DomRendererFactory2
      }, {
        provide: SharedStylesHost,
        useExisting: DomSharedStylesHost
      }, {
        provide: DomSharedStylesHost,
        useClass: DomSharedStylesHost,
        deps: [_angular_common__WEBPACK_IMPORTED_MODULE_0__.DOCUMENT]
      }, {
        provide: _angular_core__WEBPACK_IMPORTED_MODULE_1__.Testability,
        useClass: _angular_core__WEBPACK_IMPORTED_MODULE_1__.Testability,
        deps: [_angular_core__WEBPACK_IMPORTED_MODULE_1__.NgZone]
      }, {
        provide: _EventManager,
        useClass: _EventManager,
        deps: [_EVENT_MANAGER_PLUGINS, _angular_core__WEBPACK_IMPORTED_MODULE_1__.NgZone]
      }, {
        provide: _angular_common__WEBPACK_IMPORTED_MODULE_0__.XhrFactory,
        useClass: BrowserXhr,
        deps: []
      }, ELEMENT_PROBE_PROVIDERS];
      /**
       * Exports required infrastructure for all Angular apps.
       * Included by default in all Angular apps created with the CLI
       * `new` command.
       * Re-exports `CommonModule` and `ApplicationModule`, making their
       * exports and providers available to all apps.
       *
       * @publicApi
       */

      var _BrowserModule = /*#__PURE__*/function () {
        var BrowserModule = /*#__PURE__*/function () {
          function BrowserModule(parentModule) {
            _classCallCheck(this, BrowserModule);

            if (parentModule) {
              throw new Error("BrowserModule has already been loaded. If you need access to common directives such as NgIf and NgFor from a lazy loaded module, import CommonModule instead.");
            }
          }
          /**
           * Configures a browser-based app to transition from a server-rendered app, if
           * one is present on the page.
           *
           * @param params An object containing an identifier for the app to transition.
           * The ID must match between the client and server versions of the app.
           * @returns The reconfigured `BrowserModule` to import into the app's root `AppModule`.
           */


          _createClass2(BrowserModule, null, [{
            key: "withServerTransition",
            value: function withServerTransition(params) {
              return {
                ngModule: BrowserModule,
                providers: [{
                  provide: _angular_core__WEBPACK_IMPORTED_MODULE_1__.APP_ID,
                  useValue: params.appId
                }, {
                  provide: TRANSITION_ID,
                  useExisting: _angular_core__WEBPACK_IMPORTED_MODULE_1__.APP_ID
                }, SERVER_TRANSITION_PROVIDERS]
              };
            }
          }]);

          return BrowserModule;
        }();

        BrowserModule.ɵfac = function BrowserModule_Factory(t) {
          return new (t || BrowserModule)(_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵinject"](BrowserModule, 12));
        };

        BrowserModule.ɵmod = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineNgModule"]({
          type: BrowserModule
        });
        BrowserModule.ɵinj = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjector"]({
          providers: BROWSER_MODULE_PROVIDERS,
          imports: [_angular_common__WEBPACK_IMPORTED_MODULE_0__.CommonModule, _angular_core__WEBPACK_IMPORTED_MODULE_1__.ApplicationModule]
        });
        return BrowserModule;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();
      /*#__PURE__*/


      (function () {
        (typeof ngJitMode === "undefined" || ngJitMode) && _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵsetNgModuleScope"](_BrowserModule, {
          exports: function exports() {
            return [_angular_common__WEBPACK_IMPORTED_MODULE_0__.CommonModule, _angular_core__WEBPACK_IMPORTED_MODULE_1__.ApplicationModule];
          }
        });
      })();
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * Factory to create a `Meta` service instance for the current DOM document.
       */


      function createMeta() {
        return new _Meta((0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵinject"])(_angular_common__WEBPACK_IMPORTED_MODULE_0__.DOCUMENT));
      }
      /**
       * A service for managing HTML `<meta>` tags.
       *
       * Properties of the `MetaDefinition` object match the attributes of the
       * HTML `<meta>` tag. These tags define document metadata that is important for
       * things like configuring a Content Security Policy, defining browser compatibility
       * and security settings, setting HTTP Headers, defining rich content for social sharing,
       * and Search Engine Optimization (SEO).
       *
       * To identify specific `<meta>` tags in a document, use an attribute selection
       * string in the format `"tag_attribute='value string'"`.
       * For example, an `attrSelector` value of `"name='description'"` matches a tag
       * whose `name` attribute has the value `"description"`.
       * Selectors are used with the `querySelector()` Document method,
       * in the format `meta[{attrSelector}]`.
       *
       * @see [HTML meta tag](https://developer.mozilla.org/docs/Web/HTML/Element/meta)
       * @see [Document.querySelector()](https://developer.mozilla.org/docs/Web/API/Document/querySelector)
       *
       *
       * @publicApi
       */


      var _Meta = /*#__PURE__*/function () {
        var Meta = /*#__PURE__*/function () {
          function Meta(_doc) {
            _classCallCheck(this, Meta);

            this._doc = _doc;
            this._dom = (0, _angular_common__WEBPACK_IMPORTED_MODULE_0__["ɵgetDOM"])();
          }
          /**
           * Retrieves or creates a specific `<meta>` tag element in the current HTML document.
           * In searching for an existing tag, Angular attempts to match the `name` or `property` attribute
           * values in the provided tag definition, and verifies that all other attribute values are equal.
           * If an existing element is found, it is returned and is not modified in any way.
           * @param tag The definition of a `<meta>` element to match or create.
           * @param forceCreation True to create a new element without checking whether one already exists.
           * @returns The existing element with the same attributes and values if found,
           * the new element if no match is found, or `null` if the tag parameter is not defined.
           */


          _createClass2(Meta, [{
            key: "addTag",
            value: function addTag(tag) {
              var forceCreation = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
              if (!tag) return null;
              return this._getOrCreateElement(tag, forceCreation);
            }
            /**
             * Retrieves or creates a set of `<meta>` tag elements in the current HTML document.
             * In searching for an existing tag, Angular attempts to match the `name` or `property` attribute
             * values in the provided tag definition, and verifies that all other attribute values are equal.
             * @param tags An array of tag definitions to match or create.
             * @param forceCreation True to create new elements without checking whether they already exist.
             * @returns The matching elements if found, or the new elements.
             */

          }, {
            key: "addTags",
            value: function addTags(tags) {
              var _this77 = this;

              var forceCreation = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
              if (!tags) return [];
              return tags.reduce(function (result, tag) {
                if (tag) {
                  result.push(_this77._getOrCreateElement(tag, forceCreation));
                }

                return result;
              }, []);
            }
            /**
             * Retrieves a `<meta>` tag element in the current HTML document.
             * @param attrSelector The tag attribute and value to match against, in the format
             * `"tag_attribute='value string'"`.
             * @returns The matching element, if any.
             */

          }, {
            key: "getTag",
            value: function getTag(attrSelector) {
              if (!attrSelector) return null;
              return this._doc.querySelector("meta[".concat(attrSelector, "]")) || null;
            }
            /**
             * Retrieves a set of `<meta>` tag elements in the current HTML document.
             * @param attrSelector The tag attribute and value to match against, in the format
             * `"tag_attribute='value string'"`.
             * @returns The matching elements, if any.
             */

          }, {
            key: "getTags",
            value: function getTags(attrSelector) {
              if (!attrSelector) return [];

              var list
              /*NodeList*/
              = this._doc.querySelectorAll("meta[".concat(attrSelector, "]"));

              return list ? [].slice.call(list) : [];
            }
            /**
             * Modifies an existing `<meta>` tag element in the current HTML document.
             * @param tag The tag description with which to replace the existing tag content.
             * @param selector A tag attribute and value to match against, to identify
             * an existing tag. A string in the format `"tag_attribute=`value string`"`.
             * If not supplied, matches a tag with the same `name` or `property` attribute value as the
             * replacement tag.
             * @return The modified element.
             */

          }, {
            key: "updateTag",
            value: function updateTag(tag, selector) {
              if (!tag) return null;
              selector = selector || this._parseSelector(tag);
              var meta = this.getTag(selector);

              if (meta) {
                return this._setMetaElementAttributes(tag, meta);
              }

              return this._getOrCreateElement(tag, true);
            }
            /**
             * Removes an existing `<meta>` tag element from the current HTML document.
             * @param attrSelector A tag attribute and value to match against, to identify
             * an existing tag. A string in the format `"tag_attribute=`value string`"`.
             */

          }, {
            key: "removeTag",
            value: function removeTag(attrSelector) {
              this.removeTagElement(this.getTag(attrSelector));
            }
            /**
             * Removes an existing `<meta>` tag element from the current HTML document.
             * @param meta The tag definition to match against to identify an existing tag.
             */

          }, {
            key: "removeTagElement",
            value: function removeTagElement(meta) {
              if (meta) {
                this._dom.remove(meta);
              }
            }
          }, {
            key: "_getOrCreateElement",
            value: function _getOrCreateElement(meta) {
              var forceCreation = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;

              if (!forceCreation) {
                var selector = this._parseSelector(meta);

                var elem = this.getTag(selector); // It's allowed to have multiple elements with the same name so it's not enough to
                // just check that element with the same name already present on the page. We also need to
                // check if element has tag attributes

                if (elem && this._containsAttributes(meta, elem)) return elem;
              }

              var element = this._dom.createElement('meta');

              this._setMetaElementAttributes(meta, element);

              var head = this._doc.getElementsByTagName('head')[0];

              head.appendChild(element);
              return element;
            }
          }, {
            key: "_setMetaElementAttributes",
            value: function _setMetaElementAttributes(tag, el) {
              var _this78 = this;

              Object.keys(tag).forEach(function (prop) {
                return el.setAttribute(_this78._getMetaKeyMap(prop), tag[prop]);
              });
              return el;
            }
          }, {
            key: "_parseSelector",
            value: function _parseSelector(tag) {
              var attr = tag.name ? 'name' : 'property';
              return "".concat(attr, "=\"").concat(tag[attr], "\"");
            }
          }, {
            key: "_containsAttributes",
            value: function _containsAttributes(tag, elem) {
              var _this79 = this;

              return Object.keys(tag).every(function (key) {
                return elem.getAttribute(_this79._getMetaKeyMap(key)) === tag[key];
              });
            }
          }, {
            key: "_getMetaKeyMap",
            value: function _getMetaKeyMap(prop) {
              return META_KEYS_MAP[prop] || prop;
            }
          }]);

          return Meta;
        }();

        Meta.ɵfac = function Meta_Factory(t) {
          return new (t || Meta)(_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵinject"](_angular_common__WEBPACK_IMPORTED_MODULE_0__.DOCUMENT));
        };

        Meta.ɵprov = (0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjectable"])({
          factory: createMeta,
          token: Meta,
          providedIn: "root"
        });
        return Meta;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();
      /**
       * Mapping for MetaDefinition properties with their correct meta attribute names
       */


      var META_KEYS_MAP = {
        httpEquiv: 'http-equiv'
      };
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * Factory to create Title service.
       */

      function createTitle() {
        return new _Title((0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵinject"])(_angular_common__WEBPACK_IMPORTED_MODULE_0__.DOCUMENT));
      }
      /**
       * A service that can be used to get and set the title of a current HTML document.
       *
       * Since an Angular application can't be bootstrapped on the entire HTML document (`<html>` tag)
       * it is not possible to bind to the `text` property of the `HTMLTitleElement` elements
       * (representing the `<title>` tag). Instead, this service can be used to set and get the current
       * title value.
       *
       * @publicApi
       */


      var _Title = /*#__PURE__*/function () {
        var Title = /*#__PURE__*/function () {
          function Title(_doc) {
            _classCallCheck(this, Title);

            this._doc = _doc;
          }
          /**
           * Get the title of the current HTML document.
           */


          _createClass2(Title, [{
            key: "getTitle",
            value: function getTitle() {
              return this._doc.title;
            }
            /**
             * Set the title of the current HTML document.
             * @param newTitle
             */

          }, {
            key: "setTitle",
            value: function setTitle(newTitle) {
              this._doc.title = newTitle || '';
            }
          }]);

          return Title;
        }();

        Title.ɵfac = function Title_Factory(t) {
          return new (t || Title)(_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵinject"](_angular_common__WEBPACK_IMPORTED_MODULE_0__.DOCUMENT));
        };

        Title.ɵprov = (0, _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjectable"])({
          factory: createTitle,
          token: Title,
          providedIn: "root"
        });
        return Title;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */


      var win = typeof window !== 'undefined' && window || {};
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      var ChangeDetectionPerfRecord = function ChangeDetectionPerfRecord(msPerTick, numTicks) {
        _classCallCheck(this, ChangeDetectionPerfRecord);

        this.msPerTick = msPerTick;
        this.numTicks = numTicks;
      };
      /**
       * Entry point for all Angular profiling-related debug tools. This object
       * corresponds to the `ng.profiler` in the dev console.
       */


      var AngularProfiler = /*#__PURE__*/function () {
        function AngularProfiler(ref) {
          _classCallCheck(this, AngularProfiler);

          this.appRef = ref.injector.get(_angular_core__WEBPACK_IMPORTED_MODULE_1__.ApplicationRef);
        } // tslint:disable:no-console

        /**
         * Exercises change detection in a loop and then prints the average amount of
         * time in milliseconds how long a single round of change detection takes for
         * the current state of the UI. It runs a minimum of 5 rounds for a minimum
         * of 500 milliseconds.
         *
         * Optionally, a user may pass a `config` parameter containing a map of
         * options. Supported options are:
         *
         * `record` (boolean) - causes the profiler to record a CPU profile while
         * it exercises the change detector. Example:
         *
         * ```
         * ng.profiler.timeChangeDetection({record: true})
         * ```
         */


        _createClass2(AngularProfiler, [{
          key: "timeChangeDetection",
          value: function timeChangeDetection(config) {
            var record = config && config['record'];
            var profileName = 'Change Detection'; // Profiler is not available in Android browsers without dev tools opened

            var isProfilerAvailable = win.console.profile != null;

            if (record && isProfilerAvailable) {
              win.console.profile(profileName);
            }

            var start = performanceNow();
            var numTicks = 0;

            while (numTicks < 5 || performanceNow() - start < 500) {
              this.appRef.tick();
              numTicks++;
            }

            var end = performanceNow();

            if (record && isProfilerAvailable) {
              win.console.profileEnd(profileName);
            }

            var msPerTick = (end - start) / numTicks;
            win.console.log("ran ".concat(numTicks, " change detection cycles"));
            win.console.log("".concat(msPerTick.toFixed(2), " ms per check"));
            return new ChangeDetectionPerfRecord(msPerTick, numTicks);
          }
        }]);

        return AngularProfiler;
      }();

      function performanceNow() {
        return win.performance && win.performance.now ? win.performance.now() : new Date().getTime();
      }
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */


      var PROFILER_GLOBAL_NAME = 'profiler';
      /**
       * Enabled Angular debug tools that are accessible via your browser's
       * developer console.
       *
       * Usage:
       *
       * 1. Open developer console (e.g. in Chrome Ctrl + Shift + j)
       * 1. Type `ng.` (usually the console will show auto-complete suggestion)
       * 1. Try the change detection profiler `ng.profiler.timeChangeDetection()`
       *    then hit Enter.
       *
       * @publicApi
       */

      function _enableDebugTools(ref) {
        exportNgVar(PROFILER_GLOBAL_NAME, new AngularProfiler(ref));
        return ref;
      }
      /**
       * Disables Angular tools.
       *
       * @publicApi
       */


      function _disableDebugTools() {
        exportNgVar(PROFILER_GLOBAL_NAME, null);
      }
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */


      function escapeHtml(text) {
        var escapedText = {
          '&': '&a;',
          '"': '&q;',
          '\'': '&s;',
          '<': '&l;',
          '>': '&g;'
        };
        return text.replace(/[&"'<>]/g, function (s) {
          return escapedText[s];
        });
      }

      function unescapeHtml(text) {
        var unescapedText = {
          '&a;': '&',
          '&q;': '"',
          '&s;': '\'',
          '&l;': '<',
          '&g;': '>'
        };
        return text.replace(/&[^;]+;/g, function (s) {
          return unescapedText[s];
        });
      }
      /**
       * Create a `StateKey<T>` that can be used to store value of type T with `TransferState`.
       *
       * Example:
       *
       * ```
       * const COUNTER_KEY = makeStateKey<number>('counter');
       * let value = 10;
       *
       * transferState.set(COUNTER_KEY, value);
       * ```
       *
       * @publicApi
       */


      function _makeStateKey(key) {
        return key;
      }
      /**
       * A key value store that is transferred from the application on the server side to the application
       * on the client side.
       *
       * `TransferState` will be available as an injectable token. To use it import
       * `ServerTransferStateModule` on the server and `BrowserTransferStateModule` on the client.
       *
       * The values in the store are serialized/deserialized using JSON.stringify/JSON.parse. So only
       * boolean, number, string, null and non-class objects will be serialized and deserialized in a
       * non-lossy manner.
       *
       * @publicApi
       */


      var _TransferState = /*#__PURE__*/function () {
        var TransferState = /*#__PURE__*/function () {
          function TransferState() {
            _classCallCheck(this, TransferState);

            this.store = {};
            this.onSerializeCallbacks = {};
          }
          /** @internal */


          _createClass2(TransferState, [{
            key: "get",
            value:
            /**
             * Get the value corresponding to a key. Return `defaultValue` if key is not found.
             */
            function get(key, defaultValue) {
              return this.store[key] !== undefined ? this.store[key] : defaultValue;
            }
            /**
             * Set the value corresponding to a key.
             */

          }, {
            key: "set",
            value: function set(key, value) {
              this.store[key] = value;
            }
            /**
             * Remove a key from the store.
             */

          }, {
            key: "remove",
            value: function remove(key) {
              delete this.store[key];
            }
            /**
             * Test whether a key exists in the store.
             */

          }, {
            key: "hasKey",
            value: function hasKey(key) {
              return this.store.hasOwnProperty(key);
            }
            /**
             * Register a callback to provide the value for a key when `toJson` is called.
             */

          }, {
            key: "onSerialize",
            value: function onSerialize(key, callback) {
              this.onSerializeCallbacks[key] = callback;
            }
            /**
             * Serialize the current state of the store to JSON.
             */

          }, {
            key: "toJson",
            value: function toJson() {
              // Call the onSerialize callbacks and put those values into the store.
              for (var key in this.onSerializeCallbacks) {
                if (this.onSerializeCallbacks.hasOwnProperty(key)) {
                  try {
                    this.store[key] = this.onSerializeCallbacks[key]();
                  } catch (e) {
                    console.warn('Exception in onSerialize callback: ', e);
                  }
                }
              }

              return JSON.stringify(this.store);
            }
          }], [{
            key: "init",
            value: function init(initState) {
              var transferState = new TransferState();
              transferState.store = initState;
              return transferState;
            }
          }]);

          return TransferState;
        }();

        TransferState.ɵfac = function TransferState_Factory(t) {
          return new (t || TransferState)();
        };

        TransferState.ɵprov = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjectable"]({
          token: TransferState,
          factory: TransferState.ɵfac
        });
        return TransferState;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();

      function initTransferState(doc, appId) {
        // Locate the script tag with the JSON data transferred from the server.
        // The id of the script tag is set to the Angular appId + 'state'.
        var script = doc.getElementById(appId + '-state');
        var initialState = {};

        if (script && script.textContent) {
          try {
            // Avoid using any here as it triggers lint errors in google3 (any is not allowed).
            initialState = JSON.parse(unescapeHtml(script.textContent));
          } catch (e) {
            console.warn('Exception while restoring TransferState for app ' + appId, e);
          }
        }

        return _TransferState.init(initialState);
      }
      /**
       * NgModule to install on the client side while using the `TransferState` to transfer state from
       * server to client.
       *
       * @publicApi
       */


      var _BrowserTransferStateModule = /*#__PURE__*/function () {
        var BrowserTransferStateModule = function BrowserTransferStateModule() {
          _classCallCheck(this, BrowserTransferStateModule);
        };

        BrowserTransferStateModule.ɵfac = function BrowserTransferStateModule_Factory(t) {
          return new (t || BrowserTransferStateModule)();
        };

        BrowserTransferStateModule.ɵmod = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineNgModule"]({
          type: BrowserTransferStateModule
        });
        BrowserTransferStateModule.ɵinj = /*@__PURE__*/_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjector"]({
          providers: [{
            provide: _TransferState,
            useFactory: initTransferState,
            deps: [_angular_common__WEBPACK_IMPORTED_MODULE_0__.DOCUMENT, _angular_core__WEBPACK_IMPORTED_MODULE_1__.APP_ID]
          }]
        });
        return BrowserTransferStateModule;
      }();
      /*#__PURE__*/


      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * Predicates for use with {@link DebugElement}'s query functions.
       *
       * @publicApi
       */


      var _By = /*#__PURE__*/function () {
        function _By() {
          _classCallCheck(this, _By);
        }

        _createClass2(_By, null, [{
          key: "all",
          value:
          /**
           * Match all nodes.
           *
           * @usageNotes
           * ### Example
           *
           * {@example platform-browser/dom/debug/ts/by/by.ts region='by_all'}
           */
          function all() {
            return function () {
              return true;
            };
          }
          /**
           * Match elements by the given CSS selector.
           *
           * @usageNotes
           * ### Example
           *
           * {@example platform-browser/dom/debug/ts/by/by.ts region='by_css'}
           */

        }, {
          key: "css",
          value: function css(selector) {
            return function (debugElement) {
              return debugElement.nativeElement != null ? elementMatches(debugElement.nativeElement, selector) : false;
            };
          }
          /**
           * Match nodes that have the given directive present.
           *
           * @usageNotes
           * ### Example
           *
           * {@example platform-browser/dom/debug/ts/by/by.ts region='by_directive'}
           */

        }, {
          key: "directive",
          value: function directive(type) {
            return function (debugNode) {
              return debugNode.providerTokens.indexOf(type) !== -1;
            };
          }
        }]);

        return _By;
      }();

      function elementMatches(n, selector) {
        if ((0, _angular_common__WEBPACK_IMPORTED_MODULE_0__["ɵgetDOM"])().isElementNode(n)) {
          return n.matches && n.matches(selector) || n.msMatchesSelector && n.msMatchesSelector(selector) || n.webkitMatchesSelector && n.webkitMatchesSelector(selector);
        }

        return false;
      }
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * @publicApi
       */


      var _VERSION = /*#__PURE__*/new _angular_core__WEBPACK_IMPORTED_MODULE_1__.Version('12.1.0');
      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */
      // This file only reexports content of the `src` folder. Keep it that way.

      /**
       * @license
       * Copyright Google LLC All Rights Reserved.
       *
       * Use of this source code is governed by an MIT-style license that can be
       * found in the LICENSE file at https://angular.io/license
       */

      /**
       * Generated bundle index. Do not edit.
       */

      /***/

    },

    /***/
    17098: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "ApolloCache": function ApolloCache() {
          return (
            /* binding */
            _ApolloCache
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var tslib__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! tslib */
      75545);
      /* harmony import */


      var optimism__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! optimism */
      65016);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! ../../utilities/index.js */
      89000);

      var _ApolloCache = function () {
        function ApolloCache() {
          this.getFragmentDoc = (0, optimism__WEBPACK_IMPORTED_MODULE_0__.wrap)(_utilities_index_js__WEBPACK_IMPORTED_MODULE_1__.getFragmentQueryDocument);
        }

        ApolloCache.prototype.batch = function (options) {
          var optimisticId = typeof options.optimistic === "string" ? options.optimistic : options.optimistic === false ? null : void 0;
          this.performTransaction(options.update, optimisticId);
        };

        ApolloCache.prototype.recordOptimisticTransaction = function (transaction, optimisticId) {
          this.performTransaction(transaction, optimisticId);
        };

        ApolloCache.prototype.transformDocument = function (document) {
          return document;
        };

        ApolloCache.prototype.identify = function (object) {
          return;
        };

        ApolloCache.prototype.gc = function () {
          return [];
        };

        ApolloCache.prototype.modify = function (options) {
          return false;
        };

        ApolloCache.prototype.transformForLink = function (document) {
          return document;
        };

        ApolloCache.prototype.readQuery = function (options, optimistic) {
          if (optimistic === void 0) {
            optimistic = !!options.optimistic;
          }

          return this.read((0, tslib__WEBPACK_IMPORTED_MODULE_2__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_2__.__assign)({}, options), {
            rootId: options.id || 'ROOT_QUERY',
            optimistic: optimistic
          }));
        };

        ApolloCache.prototype.readFragment = function (options, optimistic) {
          if (optimistic === void 0) {
            optimistic = !!options.optimistic;
          }

          return this.read((0, tslib__WEBPACK_IMPORTED_MODULE_2__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_2__.__assign)({}, options), {
            query: this.getFragmentDoc(options.fragment, options.fragmentName),
            rootId: options.id,
            optimistic: optimistic
          }));
        };

        ApolloCache.prototype.writeQuery = function (_a) {
          var id = _a.id,
              data = _a.data,
              options = (0, tslib__WEBPACK_IMPORTED_MODULE_2__.__rest)(_a, ["id", "data"]);
          return this.write(Object.assign(options, {
            dataId: id || 'ROOT_QUERY',
            result: data
          }));
        };

        ApolloCache.prototype.writeFragment = function (_a) {
          var id = _a.id,
              data = _a.data,
              fragment = _a.fragment,
              fragmentName = _a.fragmentName,
              options = (0, tslib__WEBPACK_IMPORTED_MODULE_2__.__rest)(_a, ["id", "data", "fragment", "fragmentName"]);
          return this.write(Object.assign(options, {
            query: this.getFragmentDoc(fragment, fragmentName),
            dataId: id,
            result: data
          }));
        };

        return ApolloCache;
      }();
      /***/

    },

    /***/
    83961: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "MissingFieldError": function MissingFieldError() {
          return (
            /* binding */
            _MissingFieldError
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! tslib */
      75545);

      var _MissingFieldError = function (_super) {
        (0, tslib__WEBPACK_IMPORTED_MODULE_0__.__extends)(MissingFieldError, _super);

        function MissingFieldError(message, path, query, variables) {
          var _this = _super.call(this, message) || this;

          _this.message = message;
          _this.path = path;
          _this.query = query;
          _this.variables = variables;
          _this.__proto__ = MissingFieldError.prototype;
          return _this;
        }

        return MissingFieldError;
      }(Error);
      /***/

    },

    /***/
    52105: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "EntityStore": function EntityStore() {
          return (
            /* binding */
            _EntityStore
          );
        },

        /* harmony export */
        "maybeDependOnExistenceOfEntity": function maybeDependOnExistenceOfEntity() {
          return (
            /* binding */
            _maybeDependOnExistenceOfEntity
          );
        },

        /* harmony export */
        "supportsResultCaching": function supportsResultCaching() {
          return (
            /* binding */
            _supportsResultCaching
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var tslib__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
      /*! tslib */
      75545);
      /* harmony import */


      var _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ../../utilities/globals/index.js */
      75637);
      /* harmony import */


      var optimism__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! optimism */
      65016);
      /* harmony import */


      var _wry_equality__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! @wry/equality */
      54803);
      /* harmony import */


      var _wry_trie__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! @wry/trie */
      35217);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
      /*! ../../utilities/index.js */
      15166);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
      /*! ../../utilities/index.js */
      75845);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(
      /*! ../../utilities/index.js */
      91190);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(
      /*! ../../utilities/index.js */
      32247);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(
      /*! ../../utilities/index.js */
      32517);
      /* harmony import */


      var _helpers_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(
      /*! ./helpers.js */
      44680);

      var DELETE = Object.create(null);

      var delModifier = function delModifier() {
        return DELETE;
      };

      var INVALIDATE = Object.create(null);

      var _EntityStore = function () {
        function EntityStore(policies, group) {
          var _this = this;

          this.policies = policies;
          this.group = group;
          this.data = Object.create(null);
          this.rootIds = Object.create(null);
          this.refs = Object.create(null);

          this.getFieldValue = function (objectOrReference, storeFieldName) {
            return (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_4__.maybeDeepFreeze)((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_5__.isReference)(objectOrReference) ? _this.get(objectOrReference.__ref, storeFieldName) : objectOrReference && objectOrReference[storeFieldName]);
          };

          this.canRead = function (objOrRef) {
            return (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_5__.isReference)(objOrRef) ? _this.has(objOrRef.__ref) : typeof objOrRef === "object";
          };

          this.toReference = function (objOrIdOrRef, mergeIntoStore) {
            if (typeof objOrIdOrRef === "string") {
              return (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_5__.makeReference)(objOrIdOrRef);
            }

            if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_5__.isReference)(objOrIdOrRef)) {
              return objOrIdOrRef;
            }

            var id = _this.policies.identify(objOrIdOrRef)[0];

            if (id) {
              var ref = (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_5__.makeReference)(id);

              if (mergeIntoStore) {
                _this.merge(id, objOrIdOrRef);
              }

              return ref;
            }
          };
        }

        EntityStore.prototype.toObject = function () {
          return (0, tslib__WEBPACK_IMPORTED_MODULE_6__.__assign)({}, this.data);
        };

        EntityStore.prototype.has = function (dataId) {
          return this.lookup(dataId, true) !== void 0;
        };

        EntityStore.prototype.get = function (dataId, fieldName) {
          this.group.depend(dataId, fieldName);

          if (_helpers_js__WEBPACK_IMPORTED_MODULE_7__.hasOwn.call(this.data, dataId)) {
            var storeObject = this.data[dataId];

            if (storeObject && _helpers_js__WEBPACK_IMPORTED_MODULE_7__.hasOwn.call(storeObject, fieldName)) {
              return storeObject[fieldName];
            }
          }

          if (fieldName === "__typename" && _helpers_js__WEBPACK_IMPORTED_MODULE_7__.hasOwn.call(this.policies.rootTypenamesById, dataId)) {
            return this.policies.rootTypenamesById[dataId];
          }

          if (this instanceof Layer) {
            return this.parent.get(dataId, fieldName);
          }
        };

        EntityStore.prototype.lookup = function (dataId, dependOnExistence) {
          if (dependOnExistence) this.group.depend(dataId, "__exists");

          if (_helpers_js__WEBPACK_IMPORTED_MODULE_7__.hasOwn.call(this.data, dataId)) {
            return this.data[dataId];
          }

          if (this instanceof Layer) {
            return this.parent.lookup(dataId, dependOnExistence);
          }

          if (this.policies.rootTypenamesById[dataId]) {
            return Object.create(null);
          }
        };

        EntityStore.prototype.merge = function (older, newer) {
          var _this = this;

          var dataId;
          if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_5__.isReference)(older)) older = older.__ref;
          if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_5__.isReference)(newer)) newer = newer.__ref;
          var existing = typeof older === "string" ? this.lookup(dataId = older) : older;
          var incoming = typeof newer === "string" ? this.lookup(dataId = newer) : newer;
          if (!incoming) return;
          __DEV__ ? (0, _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(typeof dataId === "string", "store.merge expects a string ID") : (0, _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(typeof dataId === "string", 1);
          var merged = new _utilities_index_js__WEBPACK_IMPORTED_MODULE_8__.DeepMerger(storeObjectReconciler).merge(existing, incoming);
          this.data[dataId] = merged;

          if (merged !== existing) {
            delete this.refs[dataId];

            if (this.group.caching) {
              var fieldsToDirty_1 = Object.create(null);
              if (!existing) fieldsToDirty_1.__exists = 1;
              Object.keys(incoming).forEach(function (storeFieldName) {
                if (!existing || existing[storeFieldName] !== merged[storeFieldName]) {
                  fieldsToDirty_1[storeFieldName] = 1;
                  var fieldName = (0, _helpers_js__WEBPACK_IMPORTED_MODULE_7__.fieldNameFromStoreName)(storeFieldName);

                  if (fieldName !== storeFieldName && !_this.policies.hasKeyArgs(merged.__typename, fieldName)) {
                    fieldsToDirty_1[fieldName] = 1;
                  }

                  if (merged[storeFieldName] === void 0 && !(_this instanceof Layer)) {
                    delete merged[storeFieldName];
                  }
                }
              });

              if (fieldsToDirty_1.__typename && !(existing && existing.__typename) && this.policies.rootTypenamesById[dataId] === merged.__typename) {
                delete fieldsToDirty_1.__typename;
              }

              Object.keys(fieldsToDirty_1).forEach(function (fieldName) {
                return _this.group.dirty(dataId, fieldName);
              });
            }
          }
        };

        EntityStore.prototype.modify = function (dataId, fields) {
          var _this = this;

          var storeObject = this.lookup(dataId);

          if (storeObject) {
            var changedFields_1 = Object.create(null);
            var needToMerge_1 = false;
            var allDeleted_1 = true;
            var sharedDetails_1 = {
              DELETE: DELETE,
              INVALIDATE: INVALIDATE,
              isReference: _utilities_index_js__WEBPACK_IMPORTED_MODULE_5__.isReference,
              toReference: this.toReference,
              canRead: this.canRead,
              readField: function readField(fieldNameOrOptions, from) {
                return _this.policies.readField(typeof fieldNameOrOptions === "string" ? {
                  fieldName: fieldNameOrOptions,
                  from: from || (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_5__.makeReference)(dataId)
                } : fieldNameOrOptions, {
                  store: _this
                });
              }
            };
            Object.keys(storeObject).forEach(function (storeFieldName) {
              var fieldName = (0, _helpers_js__WEBPACK_IMPORTED_MODULE_7__.fieldNameFromStoreName)(storeFieldName);
              var fieldValue = storeObject[storeFieldName];
              if (fieldValue === void 0) return;
              var modify = typeof fields === "function" ? fields : fields[storeFieldName] || fields[fieldName];

              if (modify) {
                var newValue = modify === delModifier ? DELETE : modify((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_4__.maybeDeepFreeze)(fieldValue), (0, tslib__WEBPACK_IMPORTED_MODULE_6__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_6__.__assign)({}, sharedDetails_1), {
                  fieldName: fieldName,
                  storeFieldName: storeFieldName,
                  storage: _this.getStorage(dataId, storeFieldName)
                }));

                if (newValue === INVALIDATE) {
                  _this.group.dirty(dataId, storeFieldName);
                } else {
                  if (newValue === DELETE) newValue = void 0;

                  if (newValue !== fieldValue) {
                    changedFields_1[storeFieldName] = newValue;
                    needToMerge_1 = true;
                    fieldValue = newValue;
                  }
                }
              }

              if (fieldValue !== void 0) {
                allDeleted_1 = false;
              }
            });

            if (needToMerge_1) {
              this.merge(dataId, changedFields_1);

              if (allDeleted_1) {
                if (this instanceof Layer) {
                  this.data[dataId] = void 0;
                } else {
                  delete this.data[dataId];
                }

                this.group.dirty(dataId, "__exists");
              }

              return true;
            }
          }

          return false;
        };

        EntityStore.prototype["delete"] = function (dataId, fieldName, args) {
          var _a;

          var storeObject = this.lookup(dataId);

          if (storeObject) {
            var typename = this.getFieldValue(storeObject, "__typename");
            var storeFieldName = fieldName && args ? this.policies.getStoreFieldName({
              typename: typename,
              fieldName: fieldName,
              args: args
            }) : fieldName;
            return this.modify(dataId, storeFieldName ? (_a = {}, _a[storeFieldName] = delModifier, _a) : delModifier);
          }

          return false;
        };

        EntityStore.prototype.evict = function (options) {
          var evicted = false;

          if (options.id) {
            if (_helpers_js__WEBPACK_IMPORTED_MODULE_7__.hasOwn.call(this.data, options.id)) {
              evicted = this["delete"](options.id, options.fieldName, options.args);
            }

            if (this instanceof Layer) {
              evicted = this.parent.evict(options) || evicted;
            }

            if (options.fieldName || evicted) {
              this.group.dirty(options.id, options.fieldName || "__exists");
            }
          }

          return evicted;
        };

        EntityStore.prototype.clear = function () {
          this.replace(null);
        };

        EntityStore.prototype.extract = function () {
          var _this = this;

          var obj = this.toObject();
          var extraRootIds = [];
          this.getRootIdSet().forEach(function (id) {
            if (!_helpers_js__WEBPACK_IMPORTED_MODULE_7__.hasOwn.call(_this.policies.rootTypenamesById, id)) {
              extraRootIds.push(id);
            }
          });

          if (extraRootIds.length) {
            obj.__META = {
              extraRootIds: extraRootIds.sort()
            };
          }

          return obj;
        };

        EntityStore.prototype.replace = function (newData) {
          var _this = this;

          Object.keys(this.data).forEach(function (dataId) {
            if (!(newData && _helpers_js__WEBPACK_IMPORTED_MODULE_7__.hasOwn.call(newData, dataId))) {
              _this["delete"](dataId);
            }
          });

          if (newData) {
            var __META = newData.__META,
                rest_1 = (0, tslib__WEBPACK_IMPORTED_MODULE_6__.__rest)(newData, ["__META"]);
            Object.keys(rest_1).forEach(function (dataId) {
              _this.merge(dataId, rest_1[dataId]);
            });

            if (__META) {
              __META.extraRootIds.forEach(this.retain, this);
            }
          }
        };

        EntityStore.prototype.retain = function (rootId) {
          return this.rootIds[rootId] = (this.rootIds[rootId] || 0) + 1;
        };

        EntityStore.prototype.release = function (rootId) {
          if (this.rootIds[rootId] > 0) {
            var count = --this.rootIds[rootId];
            if (!count) delete this.rootIds[rootId];
            return count;
          }

          return 0;
        };

        EntityStore.prototype.getRootIdSet = function (ids) {
          if (ids === void 0) {
            ids = new Set();
          }

          Object.keys(this.rootIds).forEach(ids.add, ids);

          if (this instanceof Layer) {
            this.parent.getRootIdSet(ids);
          } else {
            Object.keys(this.policies.rootTypenamesById).forEach(ids.add, ids);
          }

          return ids;
        };

        EntityStore.prototype.gc = function () {
          var _this = this;

          var ids = this.getRootIdSet();
          var snapshot = this.toObject();
          ids.forEach(function (id) {
            if (_helpers_js__WEBPACK_IMPORTED_MODULE_7__.hasOwn.call(snapshot, id)) {
              Object.keys(_this.findChildRefIds(id)).forEach(ids.add, ids);
              delete snapshot[id];
            }
          });
          var idsToRemove = Object.keys(snapshot);

          if (idsToRemove.length) {
            var root_1 = this;

            while (root_1 instanceof Layer) {
              root_1 = root_1.parent;
            }

            idsToRemove.forEach(function (id) {
              return root_1["delete"](id);
            });
          }

          return idsToRemove;
        };

        EntityStore.prototype.findChildRefIds = function (dataId) {
          if (!_helpers_js__WEBPACK_IMPORTED_MODULE_7__.hasOwn.call(this.refs, dataId)) {
            var found_1 = this.refs[dataId] = Object.create(null);
            var root = this.data[dataId];
            if (!root) return found_1;
            var workSet_1 = new Set([root]);
            workSet_1.forEach(function (obj) {
              if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_5__.isReference)(obj)) {
                found_1[obj.__ref] = true;
              }

              if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_9__.isNonNullObject)(obj)) {
                Object.keys(obj).forEach(function (key) {
                  var child = obj[key];

                  if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_9__.isNonNullObject)(child)) {
                    workSet_1.add(child);
                  }
                });
              }
            });
          }

          return this.refs[dataId];
        };

        EntityStore.prototype.makeCacheKey = function () {
          return this.group.keyMaker.lookupArray(arguments);
        };

        return EntityStore;
      }();

      var CacheGroup = function () {
        function CacheGroup(caching, parent) {
          if (parent === void 0) {
            parent = null;
          }

          this.caching = caching;
          this.parent = parent;
          this.d = null;
          this.resetCaching();
        }

        CacheGroup.prototype.resetCaching = function () {
          this.d = this.caching ? (0, optimism__WEBPACK_IMPORTED_MODULE_1__.dep)() : null;
          this.keyMaker = new _wry_trie__WEBPACK_IMPORTED_MODULE_3__.Trie(_utilities_index_js__WEBPACK_IMPORTED_MODULE_10__.canUseWeakMap);
        };

        CacheGroup.prototype.depend = function (dataId, storeFieldName) {
          if (this.d) {
            this.d(makeDepKey(dataId, storeFieldName));
            var fieldName = (0, _helpers_js__WEBPACK_IMPORTED_MODULE_7__.fieldNameFromStoreName)(storeFieldName);

            if (fieldName !== storeFieldName) {
              this.d(makeDepKey(dataId, fieldName));
            }

            if (this.parent) {
              this.parent.depend(dataId, storeFieldName);
            }
          }
        };

        CacheGroup.prototype.dirty = function (dataId, storeFieldName) {
          if (this.d) {
            this.d.dirty(makeDepKey(dataId, storeFieldName), storeFieldName === "__exists" ? "forget" : "setDirty");
          }
        };

        return CacheGroup;
      }();

      function makeDepKey(dataId, storeFieldName) {
        return storeFieldName + '#' + dataId;
      }

      function _maybeDependOnExistenceOfEntity(store, entityId) {
        if (_supportsResultCaching(store)) {
          store.group.depend(entityId, "__exists");
        }
      }

      (function (EntityStore) {
        var Root = function (_super) {
          (0, tslib__WEBPACK_IMPORTED_MODULE_6__.__extends)(Root, _super);

          function Root(_a) {
            var policies = _a.policies,
                _b = _a.resultCaching,
                resultCaching = _b === void 0 ? true : _b,
                seed = _a.seed;

            var _this = _super.call(this, policies, new CacheGroup(resultCaching)) || this;

            _this.stump = new Stump(_this);
            _this.storageTrie = new _wry_trie__WEBPACK_IMPORTED_MODULE_3__.Trie(_utilities_index_js__WEBPACK_IMPORTED_MODULE_10__.canUseWeakMap);
            if (seed) _this.replace(seed);
            return _this;
          }

          Root.prototype.addLayer = function (layerId, replay) {
            return this.stump.addLayer(layerId, replay);
          };

          Root.prototype.removeLayer = function () {
            return this;
          };

          Root.prototype.getStorage = function () {
            return this.storageTrie.lookupArray(arguments);
          };

          return Root;
        }(EntityStore);

        EntityStore.Root = Root;
      })(_EntityStore || (_EntityStore = {}));

      var Layer = function (_super) {
        (0, tslib__WEBPACK_IMPORTED_MODULE_6__.__extends)(Layer, _super);

        function Layer(id, parent, replay, group) {
          var _this = _super.call(this, parent.policies, group) || this;

          _this.id = id;
          _this.parent = parent;
          _this.replay = replay;
          _this.group = group;
          replay(_this);
          return _this;
        }

        Layer.prototype.addLayer = function (layerId, replay) {
          return new Layer(layerId, this, replay, this.group);
        };

        Layer.prototype.removeLayer = function (layerId) {
          var _this = this;

          var parent = this.parent.removeLayer(layerId);

          if (layerId === this.id) {
            if (this.group.caching) {
              Object.keys(this.data).forEach(function (dataId) {
                var ownStoreObject = _this.data[dataId];
                var parentStoreObject = parent["lookup"](dataId);

                if (!parentStoreObject) {
                  _this["delete"](dataId);
                } else if (!ownStoreObject) {
                  _this.group.dirty(dataId, "__exists");

                  Object.keys(parentStoreObject).forEach(function (storeFieldName) {
                    _this.group.dirty(dataId, storeFieldName);
                  });
                } else if (ownStoreObject !== parentStoreObject) {
                  Object.keys(ownStoreObject).forEach(function (storeFieldName) {
                    if (!(0, _wry_equality__WEBPACK_IMPORTED_MODULE_2__.equal)(ownStoreObject[storeFieldName], parentStoreObject[storeFieldName])) {
                      _this.group.dirty(dataId, storeFieldName);
                    }
                  });
                }
              });
            }

            return parent;
          }

          if (parent === this.parent) return this;
          return parent.addLayer(this.id, this.replay);
        };

        Layer.prototype.toObject = function () {
          return (0, tslib__WEBPACK_IMPORTED_MODULE_6__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_6__.__assign)({}, this.parent.toObject()), this.data);
        };

        Layer.prototype.findChildRefIds = function (dataId) {
          var fromParent = this.parent.findChildRefIds(dataId);
          return _helpers_js__WEBPACK_IMPORTED_MODULE_7__.hasOwn.call(this.data, dataId) ? (0, tslib__WEBPACK_IMPORTED_MODULE_6__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_6__.__assign)({}, fromParent), _super.prototype.findChildRefIds.call(this, dataId)) : fromParent;
        };

        Layer.prototype.getStorage = function () {
          var p = this.parent;

          while (p.parent) {
            p = p.parent;
          }

          return p.getStorage.apply(p, arguments);
        };

        return Layer;
      }(_EntityStore);

      var Stump = function (_super) {
        (0, tslib__WEBPACK_IMPORTED_MODULE_6__.__extends)(Stump, _super);

        function Stump(root) {
          return _super.call(this, "EntityStore.Stump", root, function () {}, new CacheGroup(root.group.caching, root.group)) || this;
        }

        Stump.prototype.removeLayer = function () {
          return this;
        };

        Stump.prototype.merge = function () {
          return this.parent.merge.apply(this.parent, arguments);
        };

        return Stump;
      }(Layer);

      function storeObjectReconciler(existingObject, incomingObject, property) {
        var existingValue = existingObject[property];
        var incomingValue = incomingObject[property];
        return (0, _wry_equality__WEBPACK_IMPORTED_MODULE_2__.equal)(existingValue, incomingValue) ? existingValue : incomingValue;
      }

      function _supportsResultCaching(store) {
        return !!(store instanceof _EntityStore && store.group.caching);
      }
      /***/

    },

    /***/
    44680: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "hasOwn": function hasOwn() {
          return (
            /* binding */
            _hasOwn
          );
        },

        /* harmony export */
        "getTypenameFromStoreObject": function getTypenameFromStoreObject() {
          return (
            /* binding */
            _getTypenameFromStoreObject
          );
        },

        /* harmony export */
        "TypeOrFieldNameRegExp": function TypeOrFieldNameRegExp() {
          return (
            /* binding */
            _TypeOrFieldNameRegExp
          );
        },

        /* harmony export */
        "fieldNameFromStoreName": function fieldNameFromStoreName() {
          return (
            /* binding */
            _fieldNameFromStoreName
          );
        },

        /* harmony export */
        "selectionSetMatchesResult": function selectionSetMatchesResult() {
          return (
            /* binding */
            _selectionSetMatchesResult
          );
        },

        /* harmony export */
        "storeValueIsStoreObject": function storeValueIsStoreObject() {
          return (
            /* binding */
            _storeValueIsStoreObject
          );
        },

        /* harmony export */
        "makeProcessedFieldsMerger": function makeProcessedFieldsMerger() {
          return (
            /* binding */
            _makeProcessedFieldsMerger
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ../../utilities/index.js */
      75845);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! ../../utilities/index.js */
      32247);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! ../../utilities/index.js */
      67849);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! ../../utilities/index.js */
      91190);

      var _hasOwn = Object.prototype.hasOwnProperty;

      function _getTypenameFromStoreObject(store, objectOrReference) {
        return (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_0__.isReference)(objectOrReference) ? store.get(objectOrReference.__ref, "__typename") : objectOrReference && objectOrReference.__typename;
      }

      var _TypeOrFieldNameRegExp = /^[_a-z][_0-9a-z]*/i;

      function _fieldNameFromStoreName(storeFieldName) {
        var match = storeFieldName.match(_TypeOrFieldNameRegExp);
        return match ? match[0] : storeFieldName;
      }

      function _selectionSetMatchesResult(selectionSet, result, variables) {
        if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_1__.isNonNullObject)(result)) {
          return Array.isArray(result) ? result.every(function (item) {
            return _selectionSetMatchesResult(selectionSet, item, variables);
          }) : selectionSet.selections.every(function (field) {
            if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_0__.isField)(field) && (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__.shouldInclude)(field, variables)) {
              var key = (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_0__.resultKeyNameFromField)(field);
              return _hasOwn.call(result, key) && (!field.selectionSet || _selectionSetMatchesResult(field.selectionSet, result[key], variables));
            }

            return true;
          });
        }

        return false;
      }

      function _storeValueIsStoreObject(value) {
        return (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_1__.isNonNullObject)(value) && !(0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_0__.isReference)(value) && !Array.isArray(value);
      }

      function _makeProcessedFieldsMerger() {
        return new _utilities_index_js__WEBPACK_IMPORTED_MODULE_3__.DeepMerger();
      }
      /***/

    },

    /***/
    9740: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "InMemoryCache": function InMemoryCache() {
          return (
            /* binding */
            _InMemoryCache
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var tslib__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! tslib */
      75545);
      /* harmony import */


      var optimism__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! optimism */
      65016);
      /* harmony import */


      var _wry_equality__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! @wry/equality */
      54803);
      /* harmony import */


      var _core_cache_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(
      /*! ../core/cache.js */
      17098);
      /* harmony import */


      var _core_types_common_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(
      /*! ../core/types/common.js */
      83961);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(
      /*! ../../utilities/index.js */
      75845);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(
      /*! ../../utilities/index.js */
      46836);
      /* harmony import */


      var _readFromStore_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(
      /*! ./readFromStore.js */
      30853);
      /* harmony import */


      var _writeToStore_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
      /*! ./writeToStore.js */
      27416);
      /* harmony import */


      var _entityStore_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
      /*! ./entityStore.js */
      52105);
      /* harmony import */


      var _reactiveVars_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
      /*! ./reactiveVars.js */
      91648);
      /* harmony import */


      var _policies_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! ./policies.js */
      95050);
      /* harmony import */


      var _helpers_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(
      /*! ./helpers.js */
      44680);
      /* harmony import */


      var _object_canon_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(
      /*! ./object-canon.js */
      40854);

      var defaultConfig = {
        dataIdFromObject: _policies_js__WEBPACK_IMPORTED_MODULE_2__.defaultDataIdFromObject,
        addTypename: true,
        resultCaching: true,
        typePolicies: {}
      };

      var _InMemoryCache = function (_super) {
        (0, tslib__WEBPACK_IMPORTED_MODULE_3__.__extends)(InMemoryCache, _super);

        function InMemoryCache(config) {
          if (config === void 0) {
            config = {};
          }

          var _this = _super.call(this) || this;

          _this.watches = new Set();
          _this.typenameDocumentCache = new Map();
          _this.makeVar = _reactiveVars_js__WEBPACK_IMPORTED_MODULE_4__.makeVar;
          _this.txCount = 0;
          _this.config = (0, tslib__WEBPACK_IMPORTED_MODULE_3__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_3__.__assign)({}, defaultConfig), config);
          _this.addTypename = !!_this.config.addTypename;
          _this.policies = new _policies_js__WEBPACK_IMPORTED_MODULE_2__.Policies({
            cache: _this,
            dataIdFromObject: _this.config.dataIdFromObject,
            possibleTypes: _this.config.possibleTypes,
            typePolicies: _this.config.typePolicies
          });

          _this.init();

          return _this;
        }

        InMemoryCache.prototype.init = function () {
          var rootStore = this.data = new _entityStore_js__WEBPACK_IMPORTED_MODULE_5__.EntityStore.Root({
            policies: this.policies,
            resultCaching: this.config.resultCaching
          });
          this.optimisticData = rootStore.stump;
          this.resetResultCache();
        };

        InMemoryCache.prototype.resetResultCache = function (resetResultIdentities) {
          var _this = this;

          var previousReader = this.storeReader;
          this.storeWriter = new _writeToStore_js__WEBPACK_IMPORTED_MODULE_6__.StoreWriter(this, this.storeReader = new _readFromStore_js__WEBPACK_IMPORTED_MODULE_7__.StoreReader({
            cache: this,
            addTypename: this.addTypename,
            resultCacheMaxSize: this.config.resultCacheMaxSize,
            canon: resetResultIdentities ? void 0 : previousReader && previousReader.canon
          }));
          this.maybeBroadcastWatch = (0, optimism__WEBPACK_IMPORTED_MODULE_0__.wrap)(function (c, options) {
            return _this.broadcastWatch(c, options);
          }, {
            max: this.config.resultCacheMaxSize,
            makeCacheKey: function makeCacheKey(c) {
              var store = c.optimistic ? _this.optimisticData : _this.data;

              if ((0, _entityStore_js__WEBPACK_IMPORTED_MODULE_5__.supportsResultCaching)(store)) {
                var optimistic = c.optimistic,
                    rootId = c.rootId,
                    variables = c.variables;
                return store.makeCacheKey(c.query, c.callback, (0, _object_canon_js__WEBPACK_IMPORTED_MODULE_8__.canonicalStringify)({
                  optimistic: optimistic,
                  rootId: rootId,
                  variables: variables
                }));
              }
            }
          });
          new Set([this.data.group, this.optimisticData.group]).forEach(function (group) {
            return group.resetCaching();
          });
        };

        InMemoryCache.prototype.restore = function (data) {
          this.init();
          if (data) this.data.replace(data);
          return this;
        };

        InMemoryCache.prototype.extract = function (optimistic) {
          if (optimistic === void 0) {
            optimistic = false;
          }

          return (optimistic ? this.optimisticData : this.data).extract();
        };

        InMemoryCache.prototype.read = function (options) {
          var _a = options.returnPartialData,
              returnPartialData = _a === void 0 ? false : _a;

          try {
            return this.storeReader.diffQueryAgainstStore((0, tslib__WEBPACK_IMPORTED_MODULE_3__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_3__.__assign)({}, options), {
              store: options.optimistic ? this.optimisticData : this.data,
              config: this.config,
              returnPartialData: returnPartialData
            })).result || null;
          } catch (e) {
            if (e instanceof _core_types_common_js__WEBPACK_IMPORTED_MODULE_9__.MissingFieldError) {
              return null;
            }

            throw e;
          }
        };

        InMemoryCache.prototype.write = function (options) {
          try {
            ++this.txCount;
            return this.storeWriter.writeToStore(this.data, options);
          } finally {
            if (! --this.txCount && options.broadcast !== false) {
              this.broadcastWatches();
            }
          }
        };

        InMemoryCache.prototype.modify = function (options) {
          if (_helpers_js__WEBPACK_IMPORTED_MODULE_10__.hasOwn.call(options, "id") && !options.id) {
            return false;
          }

          var store = options.optimistic ? this.optimisticData : this.data;

          try {
            ++this.txCount;
            return store.modify(options.id || "ROOT_QUERY", options.fields);
          } finally {
            if (! --this.txCount && options.broadcast !== false) {
              this.broadcastWatches();
            }
          }
        };

        InMemoryCache.prototype.diff = function (options) {
          return this.storeReader.diffQueryAgainstStore((0, tslib__WEBPACK_IMPORTED_MODULE_3__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_3__.__assign)({}, options), {
            store: options.optimistic ? this.optimisticData : this.data,
            rootId: options.id || "ROOT_QUERY",
            config: this.config
          }));
        };

        InMemoryCache.prototype.watch = function (watch) {
          var _this = this;

          if (!this.watches.size) {
            (0, _reactiveVars_js__WEBPACK_IMPORTED_MODULE_4__.recallCache)(this);
          }

          this.watches.add(watch);

          if (watch.immediate) {
            this.maybeBroadcastWatch(watch);
          }

          return function () {
            if (_this.watches["delete"](watch) && !_this.watches.size) {
              (0, _reactiveVars_js__WEBPACK_IMPORTED_MODULE_4__.forgetCache)(_this);
            }

            _this.maybeBroadcastWatch.forget(watch);
          };
        };

        InMemoryCache.prototype.gc = function (options) {
          _object_canon_js__WEBPACK_IMPORTED_MODULE_8__.canonicalStringify.reset();

          var ids = this.optimisticData.gc();

          if (options && !this.txCount) {
            if (options.resetResultCache) {
              this.resetResultCache(options.resetResultIdentities);
            } else if (options.resetResultIdentities) {
              this.storeReader.resetCanon();
            }
          }

          return ids;
        };

        InMemoryCache.prototype.retain = function (rootId, optimistic) {
          return (optimistic ? this.optimisticData : this.data).retain(rootId);
        };

        InMemoryCache.prototype.release = function (rootId, optimistic) {
          return (optimistic ? this.optimisticData : this.data).release(rootId);
        };

        InMemoryCache.prototype.identify = function (object) {
          return (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_11__.isReference)(object) ? object.__ref : this.policies.identify(object)[0];
        };

        InMemoryCache.prototype.evict = function (options) {
          if (!options.id) {
            if (_helpers_js__WEBPACK_IMPORTED_MODULE_10__.hasOwn.call(options, "id")) {
              return false;
            }

            options = (0, tslib__WEBPACK_IMPORTED_MODULE_3__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_3__.__assign)({}, options), {
              id: "ROOT_QUERY"
            });
          }

          try {
            ++this.txCount;
            return this.optimisticData.evict(options);
          } finally {
            if (! --this.txCount && options.broadcast !== false) {
              this.broadcastWatches();
            }
          }
        };

        InMemoryCache.prototype.reset = function () {
          this.init();
          this.broadcastWatches();

          _object_canon_js__WEBPACK_IMPORTED_MODULE_8__.canonicalStringify.reset();

          return Promise.resolve();
        };

        InMemoryCache.prototype.removeOptimistic = function (idToRemove) {
          var newOptimisticData = this.optimisticData.removeLayer(idToRemove);

          if (newOptimisticData !== this.optimisticData) {
            this.optimisticData = newOptimisticData;
            this.broadcastWatches();
          }
        };

        InMemoryCache.prototype.batch = function (options) {
          var _this = this;

          var update = options.update,
              _a = options.optimistic,
              optimistic = _a === void 0 ? true : _a,
              removeOptimistic = options.removeOptimistic,
              _onWatchUpdated = options.onWatchUpdated;

          var perform = function perform(layer) {
            var _a = _this,
                data = _a.data,
                optimisticData = _a.optimisticData;
            ++_this.txCount;

            if (layer) {
              _this.data = _this.optimisticData = layer;
            }

            try {
              update(_this);
            } finally {
              --_this.txCount;
              _this.data = data;
              _this.optimisticData = optimisticData;
            }
          };

          var alreadyDirty = new Set();

          if (_onWatchUpdated && !this.txCount) {
            this.broadcastWatches((0, tslib__WEBPACK_IMPORTED_MODULE_3__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_3__.__assign)({}, options), {
              onWatchUpdated: function onWatchUpdated(watch) {
                alreadyDirty.add(watch);
                return false;
              }
            }));
          }

          if (typeof optimistic === 'string') {
            this.optimisticData = this.optimisticData.addLayer(optimistic, perform);
          } else if (optimistic === false) {
            perform(this.data);
          } else {
            perform();
          }

          if (typeof removeOptimistic === "string") {
            this.optimisticData = this.optimisticData.removeLayer(removeOptimistic);
          }

          if (_onWatchUpdated && alreadyDirty.size) {
            this.broadcastWatches((0, tslib__WEBPACK_IMPORTED_MODULE_3__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_3__.__assign)({}, options), {
              onWatchUpdated: function onWatchUpdated(watch, diff) {
                var result = _onWatchUpdated.call(this, watch, diff);

                if (result !== false) {
                  alreadyDirty["delete"](watch);
                }

                return result;
              }
            }));

            if (alreadyDirty.size) {
              alreadyDirty.forEach(function (watch) {
                return _this.maybeBroadcastWatch.dirty(watch);
              });
            }
          } else {
            this.broadcastWatches(options);
          }
        };

        InMemoryCache.prototype.performTransaction = function (update, optimisticId) {
          return this.batch({
            update: update,
            optimistic: optimisticId || optimisticId !== null
          });
        };

        InMemoryCache.prototype.transformDocument = function (document) {
          if (this.addTypename) {
            var result = this.typenameDocumentCache.get(document);

            if (!result) {
              result = (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_12__.addTypenameToDocument)(document);
              this.typenameDocumentCache.set(document, result);
              this.typenameDocumentCache.set(result, result);
            }

            return result;
          }

          return document;
        };

        InMemoryCache.prototype.broadcastWatches = function (options) {
          var _this = this;

          if (!this.txCount) {
            this.watches.forEach(function (c) {
              return _this.maybeBroadcastWatch(c, options);
            });
          }
        };

        InMemoryCache.prototype.broadcastWatch = function (c, options) {
          var lastDiff = c.lastDiff;
          var diff = this.diff({
            query: c.query,
            variables: c.variables,
            optimistic: c.optimistic
          });

          if (options) {
            if (c.optimistic && typeof options.optimistic === "string") {
              diff.fromOptimisticTransaction = true;
            }

            if (options.onWatchUpdated && options.onWatchUpdated.call(this, c, diff, lastDiff) === false) {
              return;
            }
          }

          if (!lastDiff || !(0, _wry_equality__WEBPACK_IMPORTED_MODULE_1__.equal)(lastDiff.result, diff.result)) {
            c.callback(c.lastDiff = diff, lastDiff);
          }
        };

        return InMemoryCache;
      }(_core_cache_js__WEBPACK_IMPORTED_MODULE_13__.ApolloCache);
      /***/

    },

    /***/
    40854: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "ObjectCanon": function ObjectCanon() {
          return (
            /* binding */
            _ObjectCanon
          );
        },

        /* harmony export */
        "canonicalStringify": function canonicalStringify() {
          return (
            /* binding */
            _canonicalStringify
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var tslib__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! tslib */
      75545);
      /* harmony import */


      var _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ../../utilities/globals/index.js */
      75637);
      /* harmony import */


      var _wry_trie__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! @wry/trie */
      35217);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! ../../utilities/index.js */
      32247);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
      /*! ../../utilities/index.js */
      32517);

      function shallowCopy(value) {
        if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__.isNonNullObject)(value)) {
          return Array.isArray(value) ? value.slice(0) : (0, tslib__WEBPACK_IMPORTED_MODULE_3__.__assign)({
            __proto__: Object.getPrototypeOf(value)
          }, value);
        }

        return value;
      }

      var _ObjectCanon = function () {
        function ObjectCanon() {
          this.known = new (_utilities_index_js__WEBPACK_IMPORTED_MODULE_4__.canUseWeakSet ? WeakSet : Set)();
          this.pool = new _wry_trie__WEBPACK_IMPORTED_MODULE_1__.Trie(_utilities_index_js__WEBPACK_IMPORTED_MODULE_4__.canUseWeakMap);
          this.passes = new WeakMap();
          this.keysByJSON = new Map();
          this.empty = this.admit({});
        }

        ObjectCanon.prototype.isKnown = function (value) {
          return (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__.isNonNullObject)(value) && this.known.has(value);
        };

        ObjectCanon.prototype.pass = function (value) {
          if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__.isNonNullObject)(value)) {
            var copy = shallowCopy(value);
            this.passes.set(copy, value);
            return copy;
          }

          return value;
        };

        ObjectCanon.prototype.admit = function (value) {
          var _this = this;

          if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__.isNonNullObject)(value)) {
            var original = this.passes.get(value);
            if (original) return original;
            var proto = Object.getPrototypeOf(value);

            switch (proto) {
              case Array.prototype:
                {
                  if (this.known.has(value)) return value;
                  var array = value.map(this.admit, this);
                  var node = this.pool.lookupArray(array);

                  if (!node.array) {
                    this.known.add(node.array = array);

                    if (__DEV__) {
                      Object.freeze(array);
                    }
                  }

                  return node.array;
                }

              case null:
              case Object.prototype:
                {
                  if (this.known.has(value)) return value;
                  var proto_1 = Object.getPrototypeOf(value);
                  var array_1 = [proto_1];
                  var keys = this.sortedKeys(value);
                  array_1.push(keys.json);
                  var firstValueIndex_1 = array_1.length;
                  keys.sorted.forEach(function (key) {
                    array_1.push(_this.admit(value[key]));
                  });
                  var node = this.pool.lookupArray(array_1);

                  if (!node.object) {
                    var obj_1 = node.object = Object.create(proto_1);
                    this.known.add(obj_1);
                    keys.sorted.forEach(function (key, i) {
                      obj_1[key] = array_1[firstValueIndex_1 + i];
                    });

                    if (__DEV__) {
                      Object.freeze(obj_1);
                    }
                  }

                  return node.object;
                }
            }
          }

          return value;
        };

        ObjectCanon.prototype.sortedKeys = function (obj) {
          var keys = Object.keys(obj);
          var node = this.pool.lookupArray(keys);

          if (!node.keys) {
            keys.sort();
            var json = JSON.stringify(keys);

            if (!(node.keys = this.keysByJSON.get(json))) {
              this.keysByJSON.set(json, node.keys = {
                sorted: keys,
                json: json
              });
            }
          }

          return node.keys;
        };

        return ObjectCanon;
      }();

      var _canonicalStringify = Object.assign(function (value) {
        if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__.isNonNullObject)(value)) {
          if (stringifyCanon === void 0) {
            resetCanonicalStringify();
          }

          var canonical = stringifyCanon.admit(value);
          var json = stringifyCache.get(canonical);

          if (json === void 0) {
            stringifyCache.set(canonical, json = JSON.stringify(canonical));
          }

          return json;
        }

        return JSON.stringify(value);
      }, {
        reset: resetCanonicalStringify
      });

      var stringifyCanon;
      var stringifyCache;

      function resetCanonicalStringify() {
        stringifyCanon = new _ObjectCanon();
        stringifyCache = new (_utilities_index_js__WEBPACK_IMPORTED_MODULE_4__.canUseWeakMap ? WeakMap : Map)();
      }
      /***/

    },

    /***/
    95050: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "defaultDataIdFromObject": function defaultDataIdFromObject() {
          return (
            /* binding */
            _defaultDataIdFromObject
          );
        },

        /* harmony export */
        "Policies": function Policies() {
          return (
            /* binding */
            _Policies
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var tslib__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
      /*! tslib */
      75545);
      /* harmony import */


      var _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ../../utilities/globals/index.js */
      75637);
      /* harmony import */


      var _wry_trie__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! @wry/trie */
      35217);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! ../../utilities/index.js */
      75845);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(
      /*! ../../utilities/index.js */
      32247);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(
      /*! ../../utilities/index.js */
      47009);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(
      /*! ../../utilities/index.js */
      32517);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(
      /*! ../../utilities/index.js */
      89000);
      /* harmony import */


      var _helpers_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
      /*! ./helpers.js */
      44680);
      /* harmony import */


      var _reactiveVars_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
      /*! ./reactiveVars.js */
      91648);
      /* harmony import */


      var _object_canon_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! ./object-canon.js */
      40854);

      _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__.getStoreKeyName.setStringify(_object_canon_js__WEBPACK_IMPORTED_MODULE_3__.canonicalStringify);

      function argsFromFieldSpecifier(spec) {
        return spec.args !== void 0 ? spec.args : spec.field ? (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__.argumentsObjectFromField)(spec.field, spec.variables) : null;
      }

      var _defaultDataIdFromObject = function _defaultDataIdFromObject(_a, context) {
        var __typename = _a.__typename,
            id = _a.id,
            _id = _a._id;

        if (typeof __typename === "string") {
          if (context) {
            context.keyObject = id !== void 0 ? {
              id: id
            } : _id !== void 0 ? {
              _id: _id
            } : void 0;
          }

          if (id === void 0) id = _id;

          if (id !== void 0) {
            return __typename + ":" + (typeof id === "number" || typeof id === "string" ? id : JSON.stringify(id));
          }
        }
      };

      var nullKeyFieldsFn = function nullKeyFieldsFn() {
        return void 0;
      };

      var simpleKeyArgsFn = function simpleKeyArgsFn(_args, context) {
        return context.fieldName;
      };

      var mergeTrueFn = function mergeTrueFn(existing, incoming, _a) {
        var mergeObjects = _a.mergeObjects;
        return mergeObjects(existing, incoming);
      };

      var mergeFalseFn = function mergeFalseFn(_, incoming) {
        return incoming;
      };

      var _Policies = function () {
        function Policies(config) {
          this.config = config;
          this.typePolicies = Object.create(null);
          this.toBeAdded = Object.create(null);
          this.supertypeMap = new Map();
          this.fuzzySubtypes = new Map();
          this.rootIdsByTypename = Object.create(null);
          this.rootTypenamesById = Object.create(null);
          this.usingPossibleTypes = false;
          this.config = (0, tslib__WEBPACK_IMPORTED_MODULE_4__.__assign)({
            dataIdFromObject: _defaultDataIdFromObject
          }, config);
          this.cache = this.config.cache;
          this.setRootTypename("Query");
          this.setRootTypename("Mutation");
          this.setRootTypename("Subscription");

          if (config.possibleTypes) {
            this.addPossibleTypes(config.possibleTypes);
          }

          if (config.typePolicies) {
            this.addTypePolicies(config.typePolicies);
          }
        }

        Policies.prototype.identify = function (object, selectionSet, fragmentMap) {
          var typename = selectionSet && fragmentMap ? (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__.getTypenameFromResult)(object, selectionSet, fragmentMap) : object.__typename;

          if (typename === this.rootTypenamesById.ROOT_QUERY) {
            return ["ROOT_QUERY"];
          }

          var context = {
            typename: typename,
            selectionSet: selectionSet,
            fragmentMap: fragmentMap
          };
          var id;
          var policy = typename && this.getTypePolicy(typename);
          var keyFn = policy && policy.keyFn || this.config.dataIdFromObject;

          while (keyFn) {
            var specifierOrId = keyFn(object, context);

            if (Array.isArray(specifierOrId)) {
              keyFn = keyFieldsFnFromSpecifier(specifierOrId);
            } else {
              id = specifierOrId;
              break;
            }
          }

          id = id ? String(id) : void 0;
          return context.keyObject ? [id, context.keyObject] : [id];
        };

        Policies.prototype.addTypePolicies = function (typePolicies) {
          var _this = this;

          Object.keys(typePolicies).forEach(function (typename) {
            var _a = typePolicies[typename],
                queryType = _a.queryType,
                mutationType = _a.mutationType,
                subscriptionType = _a.subscriptionType,
                incoming = (0, tslib__WEBPACK_IMPORTED_MODULE_4__.__rest)(_a, ["queryType", "mutationType", "subscriptionType"]);
            if (queryType) _this.setRootTypename("Query", typename);
            if (mutationType) _this.setRootTypename("Mutation", typename);
            if (subscriptionType) _this.setRootTypename("Subscription", typename);

            if (_helpers_js__WEBPACK_IMPORTED_MODULE_5__.hasOwn.call(_this.toBeAdded, typename)) {
              _this.toBeAdded[typename].push(incoming);
            } else {
              _this.toBeAdded[typename] = [incoming];
            }
          });
        };

        Policies.prototype.updateTypePolicy = function (typename, incoming) {
          var _this = this;

          var existing = this.getTypePolicy(typename);
          var keyFields = incoming.keyFields,
              fields = incoming.fields;

          function setMerge(existing, merge) {
            existing.merge = typeof merge === "function" ? merge : merge === true ? mergeTrueFn : merge === false ? mergeFalseFn : existing.merge;
          }

          setMerge(existing, incoming.merge);
          existing.keyFn = keyFields === false ? nullKeyFieldsFn : Array.isArray(keyFields) ? keyFieldsFnFromSpecifier(keyFields) : typeof keyFields === "function" ? keyFields : existing.keyFn;

          if (fields) {
            Object.keys(fields).forEach(function (fieldName) {
              var existing = _this.getFieldPolicy(typename, fieldName, true);

              var incoming = fields[fieldName];

              if (typeof incoming === "function") {
                existing.read = incoming;
              } else {
                var keyArgs = incoming.keyArgs,
                    read = incoming.read,
                    merge = incoming.merge;
                existing.keyFn = keyArgs === false ? simpleKeyArgsFn : Array.isArray(keyArgs) ? keyArgsFnFromSpecifier(keyArgs) : typeof keyArgs === "function" ? keyArgs : existing.keyFn;

                if (typeof read === "function") {
                  existing.read = read;
                }

                setMerge(existing, merge);
              }

              if (existing.read && existing.merge) {
                existing.keyFn = existing.keyFn || simpleKeyArgsFn;
              }
            });
          }
        };

        Policies.prototype.setRootTypename = function (which, typename) {
          if (typename === void 0) {
            typename = which;
          }

          var rootId = "ROOT_" + which.toUpperCase();
          var old = this.rootTypenamesById[rootId];

          if (typename !== old) {
            __DEV__ ? (0, _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(!old || old === which, "Cannot change root " + which + " __typename more than once") : (0, _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(!old || old === which, 2);
            if (old) delete this.rootIdsByTypename[old];
            this.rootIdsByTypename[typename] = rootId;
            this.rootTypenamesById[rootId] = typename;
          }
        };

        Policies.prototype.addPossibleTypes = function (possibleTypes) {
          var _this = this;

          this.usingPossibleTypes = true;
          Object.keys(possibleTypes).forEach(function (supertype) {
            _this.getSupertypeSet(supertype, true);

            possibleTypes[supertype].forEach(function (subtype) {
              _this.getSupertypeSet(subtype, true).add(supertype);

              var match = subtype.match(_helpers_js__WEBPACK_IMPORTED_MODULE_5__.TypeOrFieldNameRegExp);

              if (!match || match[0] !== subtype) {
                _this.fuzzySubtypes.set(subtype, new RegExp(subtype));
              }
            });
          });
        };

        Policies.prototype.getTypePolicy = function (typename) {
          var _this = this;

          if (!_helpers_js__WEBPACK_IMPORTED_MODULE_5__.hasOwn.call(this.typePolicies, typename)) {
            var policy_1 = this.typePolicies[typename] = Object.create(null);
            policy_1.fields = Object.create(null);
            var supertypes = this.supertypeMap.get(typename);

            if (supertypes && supertypes.size) {
              supertypes.forEach(function (supertype) {
                var _a = _this.getTypePolicy(supertype),
                    fields = _a.fields,
                    rest = (0, tslib__WEBPACK_IMPORTED_MODULE_4__.__rest)(_a, ["fields"]);

                Object.assign(policy_1, rest);
                Object.assign(policy_1.fields, fields);
              });
            }
          }

          var inbox = this.toBeAdded[typename];

          if (inbox && inbox.length) {
            inbox.splice(0).forEach(function (policy) {
              _this.updateTypePolicy(typename, policy);
            });
          }

          return this.typePolicies[typename];
        };

        Policies.prototype.getFieldPolicy = function (typename, fieldName, createIfMissing) {
          if (typename) {
            var fieldPolicies = this.getTypePolicy(typename).fields;
            return fieldPolicies[fieldName] || createIfMissing && (fieldPolicies[fieldName] = Object.create(null));
          }
        };

        Policies.prototype.getSupertypeSet = function (subtype, createIfMissing) {
          var supertypeSet = this.supertypeMap.get(subtype);

          if (!supertypeSet && createIfMissing) {
            this.supertypeMap.set(subtype, supertypeSet = new Set());
          }

          return supertypeSet;
        };

        Policies.prototype.fragmentMatches = function (fragment, typename, result, variables) {
          var _this = this;

          if (!fragment.typeCondition) return true;
          if (!typename) return false;
          var supertype = fragment.typeCondition.name.value;
          if (typename === supertype) return true;

          if (this.usingPossibleTypes && this.supertypeMap.has(supertype)) {
            var typenameSupertypeSet = this.getSupertypeSet(typename, true);
            var workQueue_1 = [typenameSupertypeSet];

            var maybeEnqueue_1 = function maybeEnqueue_1(subtype) {
              var supertypeSet = _this.getSupertypeSet(subtype, false);

              if (supertypeSet && supertypeSet.size && workQueue_1.indexOf(supertypeSet) < 0) {
                workQueue_1.push(supertypeSet);
              }
            };

            var needToCheckFuzzySubtypes = !!(result && this.fuzzySubtypes.size);
            var checkingFuzzySubtypes = false;

            for (var i = 0; i < workQueue_1.length; ++i) {
              var supertypeSet = workQueue_1[i];

              if (supertypeSet.has(supertype)) {
                if (!typenameSupertypeSet.has(supertype)) {
                  if (checkingFuzzySubtypes) {
                    __DEV__ && _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant.warn("Inferring subtype " + typename + " of supertype " + supertype);
                  }

                  typenameSupertypeSet.add(supertype);
                }

                return true;
              }

              supertypeSet.forEach(maybeEnqueue_1);

              if (needToCheckFuzzySubtypes && i === workQueue_1.length - 1 && (0, _helpers_js__WEBPACK_IMPORTED_MODULE_5__.selectionSetMatchesResult)(fragment.selectionSet, result, variables)) {
                needToCheckFuzzySubtypes = false;
                checkingFuzzySubtypes = true;
                this.fuzzySubtypes.forEach(function (regExp, fuzzyString) {
                  var match = typename.match(regExp);

                  if (match && match[0] === typename) {
                    maybeEnqueue_1(fuzzyString);
                  }
                });
              }
            }
          }

          return false;
        };

        Policies.prototype.hasKeyArgs = function (typename, fieldName) {
          var policy = this.getFieldPolicy(typename, fieldName, false);
          return !!(policy && policy.keyFn);
        };

        Policies.prototype.getStoreFieldName = function (fieldSpec) {
          var typename = fieldSpec.typename,
              fieldName = fieldSpec.fieldName;
          var policy = this.getFieldPolicy(typename, fieldName, false);
          var storeFieldName;
          var keyFn = policy && policy.keyFn;

          if (keyFn && typename) {
            var context = {
              typename: typename,
              fieldName: fieldName,
              field: fieldSpec.field || null,
              variables: fieldSpec.variables
            };
            var args = argsFromFieldSpecifier(fieldSpec);

            while (keyFn) {
              var specifierOrString = keyFn(args, context);

              if (Array.isArray(specifierOrString)) {
                keyFn = keyArgsFnFromSpecifier(specifierOrString);
              } else {
                storeFieldName = specifierOrString || fieldName;
                break;
              }
            }
          }

          if (storeFieldName === void 0) {
            storeFieldName = fieldSpec.field ? (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__.storeKeyNameFromField)(fieldSpec.field, fieldSpec.variables) : (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__.getStoreKeyName)(fieldName, argsFromFieldSpecifier(fieldSpec));
          }

          if (storeFieldName === false) {
            return fieldName;
          }

          return fieldName === (0, _helpers_js__WEBPACK_IMPORTED_MODULE_5__.fieldNameFromStoreName)(storeFieldName) ? storeFieldName : fieldName + ":" + storeFieldName;
        };

        Policies.prototype.readField = function (options, context) {
          var objectOrReference = options.from;
          if (!objectOrReference) return;
          var nameOrField = options.field || options.fieldName;
          if (!nameOrField) return;

          if (options.typename === void 0) {
            var typename = context.store.getFieldValue(objectOrReference, "__typename");
            if (typename) options.typename = typename;
          }

          var storeFieldName = this.getStoreFieldName(options);
          var fieldName = (0, _helpers_js__WEBPACK_IMPORTED_MODULE_5__.fieldNameFromStoreName)(storeFieldName);
          var existing = context.store.getFieldValue(objectOrReference, storeFieldName);
          var policy = this.getFieldPolicy(options.typename, fieldName, false);
          var read = policy && policy.read;

          if (read) {
            var readOptions = makeFieldFunctionOptions(this, objectOrReference, options, context, context.store.getStorage((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__.isReference)(objectOrReference) ? objectOrReference.__ref : objectOrReference, storeFieldName));
            return _reactiveVars_js__WEBPACK_IMPORTED_MODULE_6__.cacheSlot.withValue(this.cache, read, [existing, readOptions]);
          }

          return existing;
        };

        Policies.prototype.getMergeFunction = function (parentTypename, fieldName, childTypename) {
          var policy = this.getFieldPolicy(parentTypename, fieldName, false);
          var merge = policy && policy.merge;

          if (!merge && childTypename) {
            policy = this.getTypePolicy(childTypename);
            merge = policy && policy.merge;
          }

          return merge;
        };

        Policies.prototype.runMergeFunction = function (existing, incoming, _a, context, storage) {
          var field = _a.field,
              typename = _a.typename,
              merge = _a.merge;

          if (merge === mergeTrueFn) {
            return makeMergeObjectsFunction(context.store)(existing, incoming);
          }

          if (merge === mergeFalseFn) {
            return incoming;
          }

          if (context.overwrite) {
            existing = void 0;
          }

          return merge(existing, incoming, makeFieldFunctionOptions(this, void 0, {
            typename: typename,
            fieldName: field.name.value,
            field: field,
            variables: context.variables
          }, context, storage || Object.create(null)));
        };

        return Policies;
      }();

      function makeFieldFunctionOptions(policies, objectOrReference, fieldSpec, context, storage) {
        var storeFieldName = policies.getStoreFieldName(fieldSpec);
        var fieldName = (0, _helpers_js__WEBPACK_IMPORTED_MODULE_5__.fieldNameFromStoreName)(storeFieldName);
        var variables = fieldSpec.variables || context.variables;
        var _a = context.store,
            toReference = _a.toReference,
            canRead = _a.canRead;
        return {
          args: argsFromFieldSpecifier(fieldSpec),
          field: fieldSpec.field || null,
          fieldName: fieldName,
          storeFieldName: storeFieldName,
          variables: variables,
          isReference: _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__.isReference,
          toReference: toReference,
          storage: storage,
          cache: policies.cache,
          canRead: canRead,
          readField: function readField(fieldNameOrOptions, from) {
            var options;

            if (typeof fieldNameOrOptions === "string") {
              options = {
                fieldName: fieldNameOrOptions,
                from: arguments.length > 1 ? from : objectOrReference
              };
            } else if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.isNonNullObject)(fieldNameOrOptions)) {
              options = (0, tslib__WEBPACK_IMPORTED_MODULE_4__.__assign)({}, fieldNameOrOptions);

              if (!_helpers_js__WEBPACK_IMPORTED_MODULE_5__.hasOwn.call(fieldNameOrOptions, "from")) {
                options.from = objectOrReference;
              }
            } else {
              __DEV__ && _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant.warn("Unexpected readField arguments: " + (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_8__.stringifyForDisplay)(Array.from(arguments)));
              return;
            }

            if (__DEV__ && options.from === void 0) {
              __DEV__ && _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant.warn("Undefined 'from' passed to readField with arguments " + (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_8__.stringifyForDisplay)(Array.from(arguments)));
            }

            if (void 0 === options.variables) {
              options.variables = variables;
            }

            return policies.readField(options, context);
          },
          mergeObjects: makeMergeObjectsFunction(context.store)
        };
      }

      function makeMergeObjectsFunction(store) {
        return function mergeObjects(existing, incoming) {
          if (Array.isArray(existing) || Array.isArray(incoming)) {
            throw __DEV__ ? new _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.InvariantError("Cannot automatically merge arrays") : new _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.InvariantError(3);
          }

          if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.isNonNullObject)(existing) && (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.isNonNullObject)(incoming)) {
            var eType = store.getFieldValue(existing, "__typename");
            var iType = store.getFieldValue(incoming, "__typename");
            var typesDiffer = eType && iType && eType !== iType;

            if (typesDiffer) {
              return incoming;
            }

            if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__.isReference)(existing) && (0, _helpers_js__WEBPACK_IMPORTED_MODULE_5__.storeValueIsStoreObject)(incoming)) {
              store.merge(existing.__ref, incoming);
              return existing;
            }

            if ((0, _helpers_js__WEBPACK_IMPORTED_MODULE_5__.storeValueIsStoreObject)(existing) && (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__.isReference)(incoming)) {
              store.merge(existing, incoming.__ref);
              return incoming;
            }

            if ((0, _helpers_js__WEBPACK_IMPORTED_MODULE_5__.storeValueIsStoreObject)(existing) && (0, _helpers_js__WEBPACK_IMPORTED_MODULE_5__.storeValueIsStoreObject)(incoming)) {
              return (0, tslib__WEBPACK_IMPORTED_MODULE_4__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_4__.__assign)({}, existing), incoming);
            }
          }

          return incoming;
        };
      }

      function keyArgsFnFromSpecifier(specifier) {
        return function (args, context) {
          return args ? context.fieldName + ":" + JSON.stringify(computeKeyObject(args, specifier, false)) : context.fieldName;
        };
      }

      function keyFieldsFnFromSpecifier(specifier) {
        var trie = new _wry_trie__WEBPACK_IMPORTED_MODULE_1__.Trie(_utilities_index_js__WEBPACK_IMPORTED_MODULE_9__.canUseWeakMap);
        return function (object, context) {
          var aliasMap;

          if (context.selectionSet && context.fragmentMap) {
            var info = trie.lookupArray([context.selectionSet, context.fragmentMap]);
            aliasMap = info.aliasMap || (info.aliasMap = makeAliasMap(context.selectionSet, context.fragmentMap));
          }

          var keyObject = context.keyObject = computeKeyObject(object, specifier, true, aliasMap);
          return context.typename + ":" + JSON.stringify(keyObject);
        };
      }

      function makeAliasMap(selectionSet, fragmentMap) {
        var map = Object.create(null);
        var workQueue = new Set([selectionSet]);
        workQueue.forEach(function (selectionSet) {
          selectionSet.selections.forEach(function (selection) {
            if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__.isField)(selection)) {
              if (selection.alias) {
                var responseKey = selection.alias.value;
                var storeKey = selection.name.value;

                if (storeKey !== responseKey) {
                  var aliases = map.aliases || (map.aliases = Object.create(null));
                  aliases[storeKey] = responseKey;
                }
              }

              if (selection.selectionSet) {
                var subsets = map.subsets || (map.subsets = Object.create(null));
                subsets[selection.name.value] = makeAliasMap(selection.selectionSet, fragmentMap);
              }
            } else {
              var fragment = (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_10__.getFragmentFromSelection)(selection, fragmentMap);

              if (fragment) {
                workQueue.add(fragment.selectionSet);
              }
            }
          });
        });
        return map;
      }

      function computeKeyObject(response, specifier, strict, aliasMap) {
        var keyObj = Object.create(null);
        var lastResponseKey;
        var lastActualKey;
        specifier.forEach(function (s) {
          if (Array.isArray(s)) {
            if (typeof lastActualKey === "string" && typeof lastResponseKey === "string") {
              var subsets = aliasMap && aliasMap.subsets;
              var subset = subsets && subsets[lastActualKey];
              keyObj[lastActualKey] = computeKeyObject(response[lastResponseKey], s, strict, subset);
            }
          } else {
            var aliases = aliasMap && aliasMap.aliases;
            var responseName = aliases && aliases[s] || s;

            if (_helpers_js__WEBPACK_IMPORTED_MODULE_5__.hasOwn.call(response, responseName)) {
              keyObj[lastActualKey = s] = response[lastResponseKey = responseName];
            } else {
              __DEV__ ? (0, _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(!strict, "Missing field '" + responseName + "' while computing key fields") : (0, _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(!strict, 4);
              lastResponseKey = lastActualKey = void 0;
            }
          }
        });
        return keyObj;
      }
      /***/

    },

    /***/
    91648: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "cacheSlot": function cacheSlot() {
          return (
            /* binding */
            _cacheSlot
          );
        },

        /* harmony export */
        "forgetCache": function forgetCache() {
          return (
            /* binding */
            _forgetCache
          );
        },

        /* harmony export */
        "recallCache": function recallCache() {
          return (
            /* binding */
            _recallCache
          );
        },

        /* harmony export */
        "makeVar": function makeVar() {
          return (
            /* binding */
            _makeVar
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var optimism__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! optimism */
      65016);
      /* harmony import */


      var _wry_context__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! @wry/context */
      85033);

      var _cacheSlot = new _wry_context__WEBPACK_IMPORTED_MODULE_1__.Slot();

      var cacheInfoMap = new WeakMap();

      function getCacheInfo(cache) {
        var info = cacheInfoMap.get(cache);

        if (!info) {
          cacheInfoMap.set(cache, info = {
            vars: new Set(),
            dep: (0, optimism__WEBPACK_IMPORTED_MODULE_0__.dep)()
          });
        }

        return info;
      }

      function _forgetCache(cache) {
        getCacheInfo(cache).vars.forEach(function (rv) {
          return rv.forgetCache(cache);
        });
      }

      function _recallCache(cache) {
        getCacheInfo(cache).vars.forEach(function (rv) {
          return rv.attachCache(cache);
        });
      }

      function _makeVar(value) {
        var caches = new Set();
        var listeners = new Set();

        var rv = function rv(newValue) {
          if (arguments.length > 0) {
            if (value !== newValue) {
              value = newValue;
              caches.forEach(function (cache) {
                getCacheInfo(cache).dep.dirty(rv);
                broadcast(cache);
              });
              var oldListeners = Array.from(listeners);
              listeners.clear();
              oldListeners.forEach(function (listener) {
                return listener(value);
              });
            }
          } else {
            var cache = _cacheSlot.getValue();

            if (cache) {
              attach(cache);
              getCacheInfo(cache).dep(rv);
            }
          }

          return value;
        };

        rv.onNextChange = function (listener) {
          listeners.add(listener);
          return function () {
            listeners["delete"](listener);
          };
        };

        var attach = rv.attachCache = function (cache) {
          caches.add(cache);
          getCacheInfo(cache).vars.add(rv);
          return rv;
        };

        rv.forgetCache = function (cache) {
          return caches["delete"](cache);
        };

        return rv;
      }

      function broadcast(cache) {
        if (cache.broadcastWatches) {
          cache.broadcastWatches();
        }
      }
      /***/

    },

    /***/
    30853: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "StoreReader": function StoreReader() {
          return (
            /* binding */
            _StoreReader
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var tslib__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
      /*! tslib */
      75545);
      /* harmony import */


      var _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ../../utilities/globals/index.js */
      75637);
      /* harmony import */


      var optimism__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! optimism */
      65016);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! ../../utilities/index.js */
      32517);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(
      /*! ../../utilities/index.js */
      75845);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(
      /*! ../../utilities/index.js */
      25543);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(
      /*! ../../utilities/index.js */
      89000);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(
      /*! ../../utilities/index.js */
      67849);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(
      /*! ../../utilities/index.js */
      46836);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(
      /*! ../../utilities/index.js */
      91190);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(
      /*! ../../utilities/index.js */
      15166);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(
      /*! ../../utilities/index.js */
      32247);
      /* harmony import */


      var _entityStore_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
      /*! ./entityStore.js */
      52105);
      /* harmony import */


      var _helpers_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(
      /*! ./helpers.js */
      44680);
      /* harmony import */


      var _core_types_common_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! ../core/types/common.js */
      83961);
      /* harmony import */


      var _object_canon_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
      /*! ./object-canon.js */
      40854);

      ;

      function missingFromInvariant(err, context) {
        return new _core_types_common_js__WEBPACK_IMPORTED_MODULE_2__.MissingFieldError(err.message, context.path.slice(), context.query, context.variables);
      }

      function execSelectionSetKeyArgs(options) {
        return [options.selectionSet, options.objectOrReference, options.context, options.context.canonizeResults];
      }

      var _StoreReader = function () {
        function StoreReader(config) {
          var _this = this;

          this.knownResults = new (_utilities_index_js__WEBPACK_IMPORTED_MODULE_3__.canUseWeakMap ? WeakMap : Map)();
          this.config = (0, tslib__WEBPACK_IMPORTED_MODULE_4__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_4__.__assign)({}, config), {
            addTypename: config.addTypename !== false
          });
          this.canon = config.canon || new _object_canon_js__WEBPACK_IMPORTED_MODULE_5__.ObjectCanon();
          this.executeSelectionSet = (0, optimism__WEBPACK_IMPORTED_MODULE_1__.wrap)(function (options) {
            var _a;

            var canonizeResults = options.context.canonizeResults;
            var peekArgs = execSelectionSetKeyArgs(options);
            peekArgs[3] = !canonizeResults;

            var other = (_a = _this.executeSelectionSet).peek.apply(_a, peekArgs);

            if (other) {
              if (canonizeResults) {
                return (0, tslib__WEBPACK_IMPORTED_MODULE_4__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_4__.__assign)({}, other), {
                  result: _this.canon.admit(other.result)
                });
              }

              return other;
            }

            (0, _entityStore_js__WEBPACK_IMPORTED_MODULE_6__.maybeDependOnExistenceOfEntity)(options.context.store, options.enclosingRef.__ref);
            return _this.execSelectionSetImpl(options);
          }, {
            max: this.config.resultCacheMaxSize,
            keyArgs: execSelectionSetKeyArgs,
            makeCacheKey: function makeCacheKey(selectionSet, parent, context, canonizeResults) {
              if ((0, _entityStore_js__WEBPACK_IMPORTED_MODULE_6__.supportsResultCaching)(context.store)) {
                return context.store.makeCacheKey(selectionSet, (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.isReference)(parent) ? parent.__ref : parent, context.varString, canonizeResults);
              }
            }
          });
          this.executeSubSelectedArray = (0, optimism__WEBPACK_IMPORTED_MODULE_1__.wrap)(function (options) {
            (0, _entityStore_js__WEBPACK_IMPORTED_MODULE_6__.maybeDependOnExistenceOfEntity)(options.context.store, options.enclosingRef.__ref);
            return _this.execSubSelectedArrayImpl(options);
          }, {
            max: this.config.resultCacheMaxSize,
            makeCacheKey: function makeCacheKey(_a) {
              var field = _a.field,
                  array = _a.array,
                  context = _a.context;

              if ((0, _entityStore_js__WEBPACK_IMPORTED_MODULE_6__.supportsResultCaching)(context.store)) {
                return context.store.makeCacheKey(field, array, context.varString);
              }
            }
          });
        }

        StoreReader.prototype.resetCanon = function () {
          this.canon = new _object_canon_js__WEBPACK_IMPORTED_MODULE_5__.ObjectCanon();
        };

        StoreReader.prototype.diffQueryAgainstStore = function (_a) {
          var store = _a.store,
              query = _a.query,
              _b = _a.rootId,
              rootId = _b === void 0 ? 'ROOT_QUERY' : _b,
              variables = _a.variables,
              _c = _a.returnPartialData,
              returnPartialData = _c === void 0 ? true : _c,
              _d = _a.canonizeResults,
              canonizeResults = _d === void 0 ? true : _d;
          var policies = this.config.cache.policies;
          variables = (0, tslib__WEBPACK_IMPORTED_MODULE_4__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_4__.__assign)({}, (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_8__.getDefaultValues)((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_8__.getQueryDefinition)(query))), variables);
          var rootRef = (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.makeReference)(rootId);
          var execResult = this.executeSelectionSet({
            selectionSet: (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_8__.getMainDefinition)(query).selectionSet,
            objectOrReference: rootRef,
            enclosingRef: rootRef,
            context: {
              store: store,
              query: query,
              policies: policies,
              variables: variables,
              varString: (0, _object_canon_js__WEBPACK_IMPORTED_MODULE_5__.canonicalStringify)(variables),
              canonizeResults: canonizeResults,
              fragmentMap: (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_9__.createFragmentMap)((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_8__.getFragmentDefinitions)(query)),
              path: []
            }
          });
          var hasMissingFields = execResult.missing && execResult.missing.length > 0;

          if (hasMissingFields && !returnPartialData) {
            throw execResult.missing[0];
          }

          return {
            result: execResult.result,
            missing: execResult.missing,
            complete: !hasMissingFields
          };
        };

        StoreReader.prototype.isFresh = function (result, parent, selectionSet, context) {
          if ((0, _entityStore_js__WEBPACK_IMPORTED_MODULE_6__.supportsResultCaching)(context.store) && this.knownResults.get(result) === selectionSet) {
            var latest = this.executeSelectionSet.peek(selectionSet, parent, context, this.canon.isKnown(result));

            if (latest && result === latest.result) {
              return true;
            }
          }

          return false;
        };

        StoreReader.prototype.execSelectionSetImpl = function (_a) {
          var _this = this;

          var selectionSet = _a.selectionSet,
              objectOrReference = _a.objectOrReference,
              enclosingRef = _a.enclosingRef,
              context = _a.context;

          if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.isReference)(objectOrReference) && !context.policies.rootTypenamesById[objectOrReference.__ref] && !context.store.has(objectOrReference.__ref)) {
            return {
              result: this.canon.empty,
              missing: [missingFromInvariant(__DEV__ ? new _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.InvariantError("Dangling reference to missing " + objectOrReference.__ref + " object") : new _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.InvariantError(5), context)]
            };
          }

          var variables = context.variables,
              policies = context.policies,
              store = context.store;
          var objectsToMerge = [];
          var finalResult = {
            result: null
          };
          var typename = store.getFieldValue(objectOrReference, "__typename");

          if (this.config.addTypename && typeof typename === "string" && !policies.rootIdsByTypename[typename]) {
            objectsToMerge.push({
              __typename: typename
            });
          }

          function getMissing() {
            return finalResult.missing || (finalResult.missing = []);
          }

          function handleMissing(result) {
            var _a;

            if (result.missing) (_a = getMissing()).push.apply(_a, result.missing);
            return result.result;
          }

          var workSet = new Set(selectionSet.selections);
          workSet.forEach(function (selection) {
            var _a;

            if (!(0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_10__.shouldInclude)(selection, variables)) return;

            if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.isField)(selection)) {
              var fieldValue = policies.readField({
                fieldName: selection.name.value,
                field: selection,
                variables: context.variables,
                from: objectOrReference
              }, context);
              var resultName = (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.resultKeyNameFromField)(selection);
              context.path.push(resultName);

              if (fieldValue === void 0) {
                if (!_utilities_index_js__WEBPACK_IMPORTED_MODULE_11__.addTypenameToDocument.added(selection)) {
                  getMissing().push(missingFromInvariant(__DEV__ ? new _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.InvariantError("Can't find field '" + selection.name.value + "' on " + ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.isReference)(objectOrReference) ? objectOrReference.__ref + " object" : "object " + JSON.stringify(objectOrReference, null, 2))) : new _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.InvariantError(6), context));
                }
              } else if (Array.isArray(fieldValue)) {
                fieldValue = handleMissing(_this.executeSubSelectedArray({
                  field: selection,
                  array: fieldValue,
                  enclosingRef: enclosingRef,
                  context: context
                }));
              } else if (!selection.selectionSet) {
                if (context.canonizeResults) {
                  fieldValue = _this.canon.pass(fieldValue);
                }
              } else if (fieldValue != null) {
                fieldValue = handleMissing(_this.executeSelectionSet({
                  selectionSet: selection.selectionSet,
                  objectOrReference: fieldValue,
                  enclosingRef: (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.isReference)(fieldValue) ? fieldValue : enclosingRef,
                  context: context
                }));
              }

              if (fieldValue !== void 0) {
                objectsToMerge.push((_a = {}, _a[resultName] = fieldValue, _a));
              }

              (0, _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(context.path.pop() === resultName);
            } else {
              var fragment = (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_9__.getFragmentFromSelection)(selection, context.fragmentMap);

              if (fragment && policies.fragmentMatches(fragment, typename)) {
                fragment.selectionSet.selections.forEach(workSet.add, workSet);
              }
            }
          });
          var merged = (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_12__.mergeDeepArray)(objectsToMerge);
          finalResult.result = context.canonizeResults ? this.canon.admit(merged) : (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_13__.maybeDeepFreeze)(merged);
          this.knownResults.set(finalResult.result, selectionSet);
          return finalResult;
        };

        StoreReader.prototype.execSubSelectedArrayImpl = function (_a) {
          var _this = this;

          var field = _a.field,
              array = _a.array,
              enclosingRef = _a.enclosingRef,
              context = _a.context;
          var missing;

          function handleMissing(childResult, i) {
            if (childResult.missing) {
              missing = missing || [];
              missing.push.apply(missing, childResult.missing);
            }

            (0, _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(context.path.pop() === i);
            return childResult.result;
          }

          if (field.selectionSet) {
            array = array.filter(context.store.canRead);
          }

          array = array.map(function (item, i) {
            if (item === null) {
              return null;
            }

            context.path.push(i);

            if (Array.isArray(item)) {
              return handleMissing(_this.executeSubSelectedArray({
                field: field,
                array: item,
                enclosingRef: enclosingRef,
                context: context
              }), i);
            }

            if (field.selectionSet) {
              return handleMissing(_this.executeSelectionSet({
                selectionSet: field.selectionSet,
                objectOrReference: item,
                enclosingRef: (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.isReference)(item) ? item : enclosingRef,
                context: context
              }), i);
            }

            if (__DEV__) {
              assertSelectionSetForIdValue(context.store, field, item);
            }

            (0, _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(context.path.pop() === i);
            return item;
          });
          return {
            result: context.canonizeResults ? this.canon.admit(array) : array,
            missing: missing
          };
        };

        return StoreReader;
      }();

      function assertSelectionSetForIdValue(store, field, fieldValue) {
        if (!field.selectionSet) {
          var workSet_1 = new Set([fieldValue]);
          workSet_1.forEach(function (value) {
            if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_14__.isNonNullObject)(value)) {
              __DEV__ ? (0, _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(!(0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.isReference)(value), "Missing selection set for object of type " + (0, _helpers_js__WEBPACK_IMPORTED_MODULE_15__.getTypenameFromStoreObject)(store, value) + " returned for query field " + field.name.value) : (0, _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(!(0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.isReference)(value), 7);
              Object.values(value).forEach(workSet_1.add, workSet_1);
            }
          });
        }
      }
      /***/

    },

    /***/
    27416: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "StoreWriter": function StoreWriter() {
          return (
            /* binding */
            _StoreWriter
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var tslib__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
      /*! tslib */
      75545);
      /* harmony import */


      var _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ../../utilities/globals/index.js */
      75637);
      /* harmony import */


      var _wry_equality__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! @wry/equality */
      54803);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! ../../utilities/index.js */
      25543);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
      /*! ../../utilities/index.js */
      89000);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(
      /*! ../../utilities/index.js */
      75845);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(
      /*! ../../utilities/index.js */
      67849);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(
      /*! ../../utilities/index.js */
      46836);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(
      /*! ../../utilities/index.js */
      77348);
      /* harmony import */


      var _helpers_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! ./helpers.js */
      44680);
      /* harmony import */


      var _object_canon_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
      /*! ./object-canon.js */
      40854);

      ;

      var _StoreWriter = function () {
        function StoreWriter(cache, reader) {
          this.cache = cache;
          this.reader = reader;
        }

        StoreWriter.prototype.writeToStore = function (store, _a) {
          var _this = this;

          var query = _a.query,
              result = _a.result,
              dataId = _a.dataId,
              variables = _a.variables,
              overwrite = _a.overwrite;
          var operationDefinition = (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__.getOperationDefinition)(query);
          var merger = (0, _helpers_js__WEBPACK_IMPORTED_MODULE_3__.makeProcessedFieldsMerger)();
          variables = (0, tslib__WEBPACK_IMPORTED_MODULE_4__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_4__.__assign)({}, (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__.getDefaultValues)(operationDefinition)), variables);
          var context = {
            store: store,
            written: Object.create(null),
            merge: function merge(existing, incoming) {
              return merger.merge(existing, incoming);
            },
            variables: variables,
            varString: (0, _object_canon_js__WEBPACK_IMPORTED_MODULE_5__.canonicalStringify)(variables),
            fragmentMap: (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_6__.createFragmentMap)((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_2__.getFragmentDefinitions)(query)),
            overwrite: !!overwrite,
            incomingById: new Map(),
            clientOnly: false
          };
          var ref = this.processSelectionSet({
            result: result || Object.create(null),
            dataId: dataId,
            selectionSet: operationDefinition.selectionSet,
            mergeTree: {
              map: new Map()
            },
            context: context
          });

          if (!(0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.isReference)(ref)) {
            throw __DEV__ ? new _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.InvariantError("Could not identify object " + JSON.stringify(result)) : new _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.InvariantError(8);
          }

          context.incomingById.forEach(function (_a, dataId) {
            var fields = _a.fields,
                mergeTree = _a.mergeTree,
                selections = _a.selections;
            var entityRef = (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.makeReference)(dataId);

            if (mergeTree && mergeTree.map.size) {
              var applied = _this.applyMerges(mergeTree, entityRef, fields, context);

              if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.isReference)(applied)) {
                return;
              }

              fields = applied;
            }

            if (__DEV__ && !context.overwrite) {
              var hasSelectionSet_1 = function hasSelectionSet_1(storeFieldName) {
                return fieldsWithSelectionSets_1.has((0, _helpers_js__WEBPACK_IMPORTED_MODULE_3__.fieldNameFromStoreName)(storeFieldName));
              };

              var fieldsWithSelectionSets_1 = new Set();
              selections.forEach(function (selection) {
                if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.isField)(selection) && selection.selectionSet) {
                  fieldsWithSelectionSets_1.add(selection.name.value);
                }
              });

              var hasMergeFunction_1 = function hasMergeFunction_1(storeFieldName) {
                var childTree = mergeTree && mergeTree.map.get(storeFieldName);
                return Boolean(childTree && childTree.info && childTree.info.merge);
              };

              Object.keys(fields).forEach(function (storeFieldName) {
                if (hasSelectionSet_1(storeFieldName) && !hasMergeFunction_1(storeFieldName)) {
                  warnAboutDataLoss(entityRef, fields, storeFieldName, context.store);
                }
              });
            }

            store.merge(dataId, fields);
          });
          store.retain(ref.__ref);
          return ref;
        };

        StoreWriter.prototype.processSelectionSet = function (_a) {
          var _this = this;

          var dataId = _a.dataId,
              result = _a.result,
              selectionSet = _a.selectionSet,
              context = _a.context,
              mergeTree = _a.mergeTree;
          var policies = this.cache.policies;

          var _b = policies.identify(result, selectionSet, context.fragmentMap),
              id = _b[0],
              keyObject = _b[1];

          dataId = dataId || id;

          if ("string" === typeof dataId) {
            var sets = context.written[dataId] || (context.written[dataId] = []);
            var ref = (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.makeReference)(dataId);
            if (sets.indexOf(selectionSet) >= 0) return ref;
            sets.push(selectionSet);

            if (this.reader && this.reader.isFresh(result, ref, selectionSet, context)) {
              return ref;
            }
          }

          var incomingFields = Object.create(null);

          if (keyObject) {
            incomingFields = context.merge(incomingFields, keyObject);
          }

          var typename = dataId && policies.rootTypenamesById[dataId] || (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.getTypenameFromResult)(result, selectionSet, context.fragmentMap) || dataId && context.store.get(dataId, "__typename");

          if ("string" === typeof typename) {
            incomingFields.__typename = typename;
          }

          var selections = new Set(selectionSet.selections);
          selections.forEach(function (selection) {
            var _a;

            if (!(0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_8__.shouldInclude)(selection, context.variables)) return;

            if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.isField)(selection)) {
              var resultFieldKey = (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.resultKeyNameFromField)(selection);
              var value = result[resultFieldKey];
              var wasClientOnly = context.clientOnly;
              context.clientOnly = wasClientOnly || !!(selection.directives && selection.directives.some(function (d) {
                return d.name.value === "client";
              }));

              if (value !== void 0) {
                var storeFieldName = policies.getStoreFieldName({
                  typename: typename,
                  fieldName: selection.name.value,
                  field: selection,
                  variables: context.variables
                });
                var childTree = getChildMergeTree(mergeTree, storeFieldName);

                var incomingValue = _this.processFieldValue(value, selection, context, childTree);

                var childTypename = void 0;

                if (selection.selectionSet) {
                  childTypename = context.store.getFieldValue(incomingValue, "__typename");

                  if (!childTypename && (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.isReference)(incomingValue)) {
                    var info = context.incomingById.get(incomingValue.__ref);
                    childTypename = info && info.fields.__typename;
                  }
                }

                var merge = policies.getMergeFunction(typename, selection.name.value, childTypename);

                if (merge) {
                  childTree.info = {
                    field: selection,
                    typename: typename,
                    merge: merge
                  };
                } else {
                  maybeRecycleChildMergeTree(mergeTree, storeFieldName);
                }

                incomingFields = context.merge(incomingFields, (_a = {}, _a[storeFieldName] = incomingValue, _a));
              } else if (!context.clientOnly && !_utilities_index_js__WEBPACK_IMPORTED_MODULE_9__.addTypenameToDocument.added(selection)) {
                __DEV__ && _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant.error(("Missing field '" + (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.resultKeyNameFromField)(selection) + "' while writing result " + JSON.stringify(result, null, 2)).substring(0, 1000));
              }

              context.clientOnly = wasClientOnly;
            } else {
              var fragment = (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_6__.getFragmentFromSelection)(selection, context.fragmentMap);

              if (fragment && policies.fragmentMatches(fragment, typename, result, context.variables)) {
                fragment.selectionSet.selections.forEach(selections.add, selections);
              }
            }
          });

          if ("string" === typeof dataId) {
            var previous = context.incomingById.get(dataId);

            if (previous) {
              previous.fields = context.merge(previous.fields, incomingFields);
              previous.mergeTree = mergeMergeTrees(previous.mergeTree, mergeTree);
              previous.selections.forEach(selections.add, selections);
              previous.selections = selections;
            } else {
              context.incomingById.set(dataId, {
                fields: incomingFields,
                mergeTree: mergeTreeIsEmpty(mergeTree) ? void 0 : mergeTree,
                selections: selections
              });
            }

            return (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.makeReference)(dataId);
          }

          return incomingFields;
        };

        StoreWriter.prototype.processFieldValue = function (value, field, context, mergeTree) {
          var _this = this;

          if (!field.selectionSet || value === null) {
            return __DEV__ ? (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_10__.cloneDeep)(value) : value;
          }

          if (Array.isArray(value)) {
            return value.map(function (item, i) {
              var value = _this.processFieldValue(item, field, context, getChildMergeTree(mergeTree, i));

              maybeRecycleChildMergeTree(mergeTree, i);
              return value;
            });
          }

          return this.processSelectionSet({
            result: value,
            selectionSet: field.selectionSet,
            context: context,
            mergeTree: mergeTree
          });
        };

        StoreWriter.prototype.applyMerges = function (mergeTree, existing, incoming, context, getStorageArgs) {
          var _a;

          var _this = this;

          if (mergeTree.map.size && !(0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.isReference)(incoming)) {
            var e_1 = !Array.isArray(incoming) && ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.isReference)(existing) || (0, _helpers_js__WEBPACK_IMPORTED_MODULE_3__.storeValueIsStoreObject)(existing)) ? existing : void 0;
            var i_1 = incoming;

            if (e_1 && !getStorageArgs) {
              getStorageArgs = [(0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.isReference)(e_1) ? e_1.__ref : e_1];
            }

            var changedFields_1;

            var getValue_1 = function getValue_1(from, name) {
              return Array.isArray(from) ? typeof name === "number" ? from[name] : void 0 : context.store.getFieldValue(from, String(name));
            };

            mergeTree.map.forEach(function (childTree, storeFieldName) {
              var eVal = getValue_1(e_1, storeFieldName);
              var iVal = getValue_1(i_1, storeFieldName);
              if (void 0 === iVal) return;

              if (getStorageArgs) {
                getStorageArgs.push(storeFieldName);
              }

              var aVal = _this.applyMerges(childTree, eVal, iVal, context, getStorageArgs);

              if (aVal !== iVal) {
                changedFields_1 = changedFields_1 || new Map();
                changedFields_1.set(storeFieldName, aVal);
              }

              if (getStorageArgs) {
                (0, _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(getStorageArgs.pop() === storeFieldName);
              }
            });

            if (changedFields_1) {
              incoming = Array.isArray(i_1) ? i_1.slice(0) : (0, tslib__WEBPACK_IMPORTED_MODULE_4__.__assign)({}, i_1);
              changedFields_1.forEach(function (value, name) {
                incoming[name] = value;
              });
            }
          }

          if (mergeTree.info) {
            return this.cache.policies.runMergeFunction(existing, incoming, mergeTree.info, context, getStorageArgs && (_a = context.store).getStorage.apply(_a, getStorageArgs));
          }

          return incoming;
        };

        return StoreWriter;
      }();

      var emptyMergeTreePool = [];

      function getChildMergeTree(_a, name) {
        var map = _a.map;

        if (!map.has(name)) {
          map.set(name, emptyMergeTreePool.pop() || {
            map: new Map()
          });
        }

        return map.get(name);
      }

      function mergeMergeTrees(left, right) {
        if (left === right || !right || mergeTreeIsEmpty(right)) return left;
        if (!left || mergeTreeIsEmpty(left)) return right;
        var info = left.info && right.info ? (0, tslib__WEBPACK_IMPORTED_MODULE_4__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_4__.__assign)({}, left.info), right.info) : left.info || right.info;
        var needToMergeMaps = left.map.size && right.map.size;
        var map = needToMergeMaps ? new Map() : left.map.size ? left.map : right.map;
        var merged = {
          info: info,
          map: map
        };

        if (needToMergeMaps) {
          var remainingRightKeys_1 = new Set(right.map.keys());
          left.map.forEach(function (leftTree, key) {
            merged.map.set(key, mergeMergeTrees(leftTree, right.map.get(key)));
            remainingRightKeys_1["delete"](key);
          });
          remainingRightKeys_1.forEach(function (key) {
            merged.map.set(key, mergeMergeTrees(right.map.get(key), left.map.get(key)));
          });
        }

        return merged;
      }

      function mergeTreeIsEmpty(tree) {
        return !tree || !(tree.info || tree.map.size);
      }

      function maybeRecycleChildMergeTree(_a, name) {
        var map = _a.map;
        var childTree = map.get(name);

        if (childTree && mergeTreeIsEmpty(childTree)) {
          emptyMergeTreePool.push(childTree);
          map["delete"](name);
        }
      }

      var warnings = new Set();

      function warnAboutDataLoss(existingRef, incomingObj, storeFieldName, store) {
        var getChild = function getChild(objOrRef) {
          var child = store.getFieldValue(objOrRef, storeFieldName);
          return typeof child === "object" && child;
        };

        var existing = getChild(existingRef);
        if (!existing) return;
        var incoming = getChild(incomingObj);
        if (!incoming) return;
        if ((0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_7__.isReference)(existing)) return;
        if ((0, _wry_equality__WEBPACK_IMPORTED_MODULE_1__.equal)(existing, incoming)) return;

        if (Object.keys(existing).every(function (key) {
          return store.getFieldValue(incoming, key) !== void 0;
        })) {
          return;
        }

        var parentType = store.getFieldValue(existingRef, "__typename") || store.getFieldValue(incomingObj, "__typename");
        var fieldName = (0, _helpers_js__WEBPACK_IMPORTED_MODULE_3__.fieldNameFromStoreName)(storeFieldName);
        var typeDotName = parentType + "." + fieldName;
        if (warnings.has(typeDotName)) return;
        warnings.add(typeDotName);
        var childTypenames = [];

        if (!Array.isArray(existing) && !Array.isArray(incoming)) {
          [existing, incoming].forEach(function (child) {
            var typename = store.getFieldValue(child, "__typename");

            if (typeof typename === "string" && !childTypenames.includes(typename)) {
              childTypenames.push(typename);
            }
          });
        }

        __DEV__ && _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant.warn("Cache data may be lost when replacing the " + fieldName + " field of a " + parentType + " object.\n\nTo address this problem (which is not a bug in Apollo Client), " + (childTypenames.length ? "either ensure all objects of type " + childTypenames.join(" and ") + " have an ID or a custom merge function, or " : "") + "define a custom merge function for the " + typeDotName + " field, so InMemoryCache can safely merge these objects:\n\n  existing: " + JSON.stringify(existing).slice(0, 1000) + "\n  incoming: " + JSON.stringify(incoming).slice(0, 1000) + "\n\nFor more information about these options, please refer to the documentation:\n\n  * Ensuring entity objects have IDs: https://go.apollo.dev/c/generating-unique-identifiers\n  * Defining custom merge functions: https://go.apollo.dev/c/merging-non-normalized-objects\n");
      }
      /***/

    },

    /***/
    21137: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "OperationBatcher": function OperationBatcher() {
          return (
            /* reexport safe */
            _batching_js__WEBPACK_IMPORTED_MODULE_0__.OperationBatcher
          );
        },

        /* harmony export */
        "BatchLink": function BatchLink() {
          return (
            /* binding */
            _BatchLink
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var tslib__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! tslib */
      75545);
      /* harmony import */


      var _core_index_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! ../core/index.js */
      14530);
      /* harmony import */


      var _batching_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ./batching.js */
      54595);

      var _BatchLink = function (_super) {
        (0, tslib__WEBPACK_IMPORTED_MODULE_1__.__extends)(BatchLink, _super);

        function BatchLink(fetchParams) {
          var _this = _super.call(this) || this;

          var _a = fetchParams || {},
              batchDebounce = _a.batchDebounce,
              _b = _a.batchInterval,
              batchInterval = _b === void 0 ? 10 : _b,
              _c = _a.batchMax,
              batchMax = _c === void 0 ? 0 : _c,
              _d = _a.batchHandler,
              batchHandler = _d === void 0 ? function () {
            return null;
          } : _d,
              _e = _a.batchKey,
              batchKey = _e === void 0 ? function () {
            return '';
          } : _e;

          _this.batcher = new _batching_js__WEBPACK_IMPORTED_MODULE_0__.OperationBatcher({
            batchDebounce: batchDebounce,
            batchInterval: batchInterval,
            batchMax: batchMax,
            batchHandler: batchHandler,
            batchKey: batchKey
          });

          if (fetchParams.batchHandler.length <= 1) {
            _this.request = function (operation) {
              return _this.batcher.enqueueRequest({
                operation: operation
              });
            };
          }

          return _this;
        }

        BatchLink.prototype.request = function (operation, forward) {
          return this.batcher.enqueueRequest({
            operation: operation,
            forward: forward
          });
        };

        return BatchLink;
      }(_core_index_js__WEBPACK_IMPORTED_MODULE_2__.ApolloLink);
      /***/

    },

    /***/
    54595: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "OperationBatcher": function OperationBatcher() {
          return (
            /* binding */
            _OperationBatcher
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! tslib */
      75545);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! ../../utilities/index.js */
      77669);

      var _OperationBatcher = function () {
        function OperationBatcher(_a) {
          var batchDebounce = _a.batchDebounce,
              batchInterval = _a.batchInterval,
              batchMax = _a.batchMax,
              batchHandler = _a.batchHandler,
              batchKey = _a.batchKey;
          this.queuedRequests = new Map();
          this.batchDebounce = batchDebounce;
          this.batchInterval = batchInterval;
          this.batchMax = batchMax || 0;
          this.batchHandler = batchHandler;

          this.batchKey = batchKey || function () {
            return '';
          };
        }

        OperationBatcher.prototype.enqueueRequest = function (request) {
          var _this = this;

          var requestCopy = (0, tslib__WEBPACK_IMPORTED_MODULE_0__.__assign)({}, request);
          var queued = false;
          var key = this.batchKey(request.operation);

          if (!requestCopy.observable) {
            requestCopy.observable = new _utilities_index_js__WEBPACK_IMPORTED_MODULE_1__.Observable(function (observer) {
              if (!_this.queuedRequests.has(key)) {
                _this.queuedRequests.set(key, []);
              }

              if (!queued) {
                _this.queuedRequests.get(key).push(requestCopy);

                queued = true;
              }

              requestCopy.next = requestCopy.next || [];
              if (observer.next) requestCopy.next.push(observer.next.bind(observer));
              requestCopy.error = requestCopy.error || [];
              if (observer.error) requestCopy.error.push(observer.error.bind(observer));
              requestCopy.complete = requestCopy.complete || [];
              if (observer.complete) requestCopy.complete.push(observer.complete.bind(observer));

              if (_this.queuedRequests.get(key).length === 1) {
                _this.scheduleQueueConsumption(key);
              } else if (_this.batchDebounce) {
                clearTimeout(_this.scheduledBatchTimer);

                _this.scheduleQueueConsumption(key);
              }

              if (_this.queuedRequests.get(key).length === _this.batchMax) {
                _this.consumeQueue(key);
              }
            });
          }

          return requestCopy.observable;
        };

        OperationBatcher.prototype.consumeQueue = function (key) {
          var requestKey = key || '';
          var queuedRequests = this.queuedRequests.get(requestKey);

          if (!queuedRequests) {
            return;
          }

          this.queuedRequests["delete"](requestKey);
          var requests = queuedRequests.map(function (queuedRequest) {
            return queuedRequest.operation;
          });
          var forwards = queuedRequests.map(function (queuedRequest) {
            return queuedRequest.forward;
          });
          var observables = [];
          var nexts = [];
          var errors = [];
          var completes = [];
          queuedRequests.forEach(function (batchableRequest, index) {
            observables.push(batchableRequest.observable);
            nexts.push(batchableRequest.next);
            errors.push(batchableRequest.error);
            completes.push(batchableRequest.complete);
          });

          var batchedObservable = this.batchHandler(requests, forwards) || _utilities_index_js__WEBPACK_IMPORTED_MODULE_1__.Observable.of();

          var onError = function onError(error) {
            errors.forEach(function (rejecters) {
              if (rejecters) {
                rejecters.forEach(function (e) {
                  return e(error);
                });
              }
            });
          };

          batchedObservable.subscribe({
            next: function next(results) {
              if (!Array.isArray(results)) {
                results = [results];
              }

              if (nexts.length !== results.length) {
                var error = new Error("server returned results with length " + results.length + ", expected length of " + nexts.length);
                error.result = results;
                return onError(error);
              }

              results.forEach(function (result, index) {
                if (nexts[index]) {
                  nexts[index].forEach(function (next) {
                    return next(result);
                  });
                }
              });
            },
            error: onError,
            complete: function complete() {
              completes.forEach(function (complete) {
                if (complete) {
                  complete.forEach(function (c) {
                    return c();
                  });
                }
              });
            }
          });
          return observables;
        };

        OperationBatcher.prototype.scheduleQueueConsumption = function (key) {
          var _this = this;

          var requestKey = key || '';
          this.scheduledBatchTimer = setTimeout(function () {
            if (_this.queuedRequests.get(requestKey) && _this.queuedRequests.get(requestKey).length) {
              _this.consumeQueue(requestKey);
            }
          }, this.batchInterval);
        };

        return OperationBatcher;
      }();
      /***/

    },

    /***/
    14530: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "ApolloLink": function ApolloLink() {
          return (
            /* binding */
            _ApolloLink
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var tslib__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! tslib */
      75545);
      /* harmony import */


      var _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ../../utilities/globals/index.js */
      75637);
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! ../../utilities/index.js */
      77669);
      /* harmony import */


      var _utils_index_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! ../utils/index.js */
      29564);
      /* harmony import */


      var _utils_index_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
      /*! ../utils/index.js */
      49008);
      /* harmony import */


      var _utils_index_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
      /*! ../utils/index.js */
      80951);

      function passthrough(op, forward) {
        return forward ? forward(op) : _utilities_index_js__WEBPACK_IMPORTED_MODULE_1__.Observable.of();
      }

      function toLink(handler) {
        return typeof handler === 'function' ? new _ApolloLink(handler) : handler;
      }

      function isTerminating(link) {
        return link.request.length <= 1;
      }

      var LinkError = function (_super) {
        (0, tslib__WEBPACK_IMPORTED_MODULE_2__.__extends)(LinkError, _super);

        function LinkError(message, link) {
          var _this = _super.call(this, message) || this;

          _this.link = link;
          return _this;
        }

        return LinkError;
      }(Error);

      var _ApolloLink = function () {
        function ApolloLink(request) {
          if (request) this.request = request;
        }

        ApolloLink.empty = function () {
          return new ApolloLink(function () {
            return _utilities_index_js__WEBPACK_IMPORTED_MODULE_1__.Observable.of();
          });
        };

        ApolloLink.from = function (links) {
          if (links.length === 0) return ApolloLink.empty();
          return links.map(toLink).reduce(function (x, y) {
            return x.concat(y);
          });
        };

        ApolloLink.split = function (test, left, right) {
          var leftLink = toLink(left);
          var rightLink = toLink(right || new ApolloLink(passthrough));

          if (isTerminating(leftLink) && isTerminating(rightLink)) {
            return new ApolloLink(function (operation) {
              return test(operation) ? leftLink.request(operation) || _utilities_index_js__WEBPACK_IMPORTED_MODULE_1__.Observable.of() : rightLink.request(operation) || _utilities_index_js__WEBPACK_IMPORTED_MODULE_1__.Observable.of();
            });
          } else {
            return new ApolloLink(function (operation, forward) {
              return test(operation) ? leftLink.request(operation, forward) || _utilities_index_js__WEBPACK_IMPORTED_MODULE_1__.Observable.of() : rightLink.request(operation, forward) || _utilities_index_js__WEBPACK_IMPORTED_MODULE_1__.Observable.of();
            });
          }
        };

        ApolloLink.execute = function (link, operation) {
          return link.request((0, _utils_index_js__WEBPACK_IMPORTED_MODULE_3__.createOperation)(operation.context, (0, _utils_index_js__WEBPACK_IMPORTED_MODULE_4__.transformOperation)((0, _utils_index_js__WEBPACK_IMPORTED_MODULE_5__.validateOperation)(operation)))) || _utilities_index_js__WEBPACK_IMPORTED_MODULE_1__.Observable.of();
        };

        ApolloLink.concat = function (first, second) {
          var firstLink = toLink(first);

          if (isTerminating(firstLink)) {
            __DEV__ && _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant.warn(new LinkError("You are calling concat on a terminating link, which will have no effect", firstLink));
            return firstLink;
          }

          var nextLink = toLink(second);

          if (isTerminating(nextLink)) {
            return new ApolloLink(function (operation) {
              return firstLink.request(operation, function (op) {
                return nextLink.request(op) || _utilities_index_js__WEBPACK_IMPORTED_MODULE_1__.Observable.of();
              }) || _utilities_index_js__WEBPACK_IMPORTED_MODULE_1__.Observable.of();
            });
          } else {
            return new ApolloLink(function (operation, forward) {
              return firstLink.request(operation, function (op) {
                return nextLink.request(op, forward) || _utilities_index_js__WEBPACK_IMPORTED_MODULE_1__.Observable.of();
              }) || _utilities_index_js__WEBPACK_IMPORTED_MODULE_1__.Observable.of();
            });
          }
        };

        ApolloLink.prototype.split = function (test, left, right) {
          return this.concat(ApolloLink.split(test, left, right || new ApolloLink(passthrough)));
        };

        ApolloLink.prototype.concat = function (next) {
          return ApolloLink.concat(this, next);
        };

        ApolloLink.prototype.request = function (operation, forward) {
          throw __DEV__ ? new _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.InvariantError('request is not implemented') : new _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.InvariantError(21);
        };

        ApolloLink.prototype.onError = function (error, observer) {
          if (observer && observer.error) {
            observer.error(error);
            return false;
          }

          throw error;
        };

        ApolloLink.prototype.setOnError = function (fn) {
          this.onError = fn;
          return this;
        };

        return ApolloLink;
      }();
      /***/

    },

    /***/
    29564: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "createOperation": function createOperation() {
          return (
            /* binding */
            _createOperation
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! tslib */
      75545);

      function _createOperation(starting, operation) {
        var context = (0, tslib__WEBPACK_IMPORTED_MODULE_0__.__assign)({}, starting);

        var setContext = function setContext(next) {
          if (typeof next === 'function') {
            context = (0, tslib__WEBPACK_IMPORTED_MODULE_0__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_0__.__assign)({}, context), next(context));
          } else {
            context = (0, tslib__WEBPACK_IMPORTED_MODULE_0__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_0__.__assign)({}, context), next);
          }
        };

        var getContext = function getContext() {
          return (0, tslib__WEBPACK_IMPORTED_MODULE_0__.__assign)({}, context);
        };

        Object.defineProperty(operation, 'setContext', {
          enumerable: false,
          value: setContext
        });
        Object.defineProperty(operation, 'getContext', {
          enumerable: false,
          value: getContext
        });
        return operation;
      }
      /***/

    },

    /***/
    49008: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "transformOperation": function transformOperation() {
          return (
            /* binding */
            _transformOperation
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var _utilities_index_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ../../utilities/index.js */
      25543);

      function _transformOperation(operation) {
        var transformedOperation = {
          variables: operation.variables || {},
          extensions: operation.extensions || {},
          operationName: operation.operationName,
          query: operation.query
        };

        if (!transformedOperation.operationName) {
          transformedOperation.operationName = typeof transformedOperation.query !== 'string' ? (0, _utilities_index_js__WEBPACK_IMPORTED_MODULE_0__.getOperationName)(transformedOperation.query) || undefined : '';
        }

        return transformedOperation;
      }
      /***/

    },

    /***/
    80951: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "validateOperation": function validateOperation() {
          return (
            /* binding */
            _validateOperation
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ../../utilities/globals/index.js */
      75637);

      function _validateOperation(operation) {
        var OPERATION_FIELDS = ['query', 'operationName', 'variables', 'extensions', 'context'];

        for (var _i = 0, _a = Object.keys(operation); _i < _a.length; _i++) {
          var key = _a[_i];

          if (OPERATION_FIELDS.indexOf(key) < 0) {
            throw __DEV__ ? new _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.InvariantError("illegal argument: " + key) : new _utilities_globals_index_js__WEBPACK_IMPORTED_MODULE_0__.InvariantError(26);
          }
        }

        return operation;
      }
      /***/

    },

    /***/
    32517: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "canUseWeakMap": function canUseWeakMap() {
          return (
            /* binding */
            _canUseWeakMap
          );
        },

        /* harmony export */
        "canUseWeakSet": function canUseWeakSet() {
          return (
            /* binding */
            _canUseWeakSet
          );
        }
        /* harmony export */

      });

      var _canUseWeakMap = typeof WeakMap === 'function' && !(typeof navigator === 'object' && navigator.product === 'ReactNative');

      var _canUseWeakSet = typeof WeakSet === 'function';
      /***/

    },

    /***/
    77348: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "cloneDeep": function cloneDeep() {
          return (
            /* binding */
            _cloneDeep
          );
        }
        /* harmony export */

      });

      var toString = Object.prototype.toString;

      function _cloneDeep(value) {
        return cloneDeepHelper(value);
      }

      function cloneDeepHelper(val, seen) {
        switch (toString.call(val)) {
          case "[object Array]":
            {
              seen = seen || new Map();
              if (seen.has(val)) return seen.get(val);
              var copy_1 = val.slice(0);
              seen.set(val, copy_1);
              copy_1.forEach(function (child, i) {
                copy_1[i] = cloneDeepHelper(child, seen);
              });
              return copy_1;
            }

          case "[object Object]":
            {
              seen = seen || new Map();
              if (seen.has(val)) return seen.get(val);
              var copy_2 = Object.create(Object.getPrototypeOf(val));
              seen.set(val, copy_2);
              Object.keys(val).forEach(function (key) {
                copy_2[key] = cloneDeepHelper(val[key], seen);
              });
              return copy_2;
            }

          default:
            return val;
        }
      }
      /***/

    },

    /***/
    46400: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "filterInPlace": function filterInPlace() {
          return (
            /* binding */
            _filterInPlace
          );
        }
        /* harmony export */

      });

      function _filterInPlace(array, test, context) {
        var target = 0;
        array.forEach(function (elem, i) {
          if (test.call(this, elem, i, array)) {
            array[target++] = elem;
          }
        }, context);
        array.length = target;
        return array;
      }
      /***/

    },

    /***/
    61597: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "makeUniqueId": function makeUniqueId() {
          return (
            /* binding */
            _makeUniqueId
          );
        }
        /* harmony export */

      });

      var prefixCounts = new Map();

      function _makeUniqueId(prefix) {
        var count = prefixCounts.get(prefix) || 1;
        prefixCounts.set(prefix, count + 1);
        return prefix + ":" + count + ":" + Math.random().toString(36).slice(2);
      }
      /***/

    },

    /***/
    15166: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "maybeDeepFreeze": function maybeDeepFreeze() {
          return (
            /* binding */
            _maybeDeepFreeze
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var _globals_index_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ../globals/index.js */
      75637);
      /* harmony import */


      var _objects_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! ./objects.js */
      32247);

      function deepFreeze(value) {
        var workSet = new Set([value]);
        workSet.forEach(function (obj) {
          if ((0, _objects_js__WEBPACK_IMPORTED_MODULE_1__.isNonNullObject)(obj)) {
            if (!Object.isFrozen(obj)) Object.freeze(obj);
            Object.getOwnPropertyNames(obj).forEach(function (name) {
              if ((0, _objects_js__WEBPACK_IMPORTED_MODULE_1__.isNonNullObject)(obj[name])) workSet.add(obj[name]);
            });
          }
        });
        return value;
      }

      function _maybeDeepFreeze(obj) {
        if (__DEV__) {
          deepFreeze(obj);
        }

        return obj;
      }
      /***/

    },

    /***/
    91190: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "mergeDeep": function mergeDeep() {
          return (
            /* binding */
            _mergeDeep
          );
        },

        /* harmony export */
        "mergeDeepArray": function mergeDeepArray() {
          return (
            /* binding */
            _mergeDeepArray
          );
        },

        /* harmony export */
        "DeepMerger": function DeepMerger() {
          return (
            /* binding */
            _DeepMerger
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var tslib__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! tslib */
      75545);
      /* harmony import */


      var _objects_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ./objects.js */
      32247);

      var hasOwnProperty = Object.prototype.hasOwnProperty;

      function _mergeDeep() {
        var sources = [];

        for (var _i = 0; _i < arguments.length; _i++) {
          sources[_i] = arguments[_i];
        }

        return _mergeDeepArray(sources);
      }

      function _mergeDeepArray(sources) {
        var target = sources[0] || {};
        var count = sources.length;

        if (count > 1) {
          var merger = new _DeepMerger();

          for (var i = 1; i < count; ++i) {
            target = merger.merge(target, sources[i]);
          }
        }

        return target;
      }

      var defaultReconciler = function defaultReconciler(target, source, property) {
        return this.merge(target[property], source[property]);
      };

      var _DeepMerger = function () {
        function DeepMerger(reconciler) {
          if (reconciler === void 0) {
            reconciler = defaultReconciler;
          }

          this.reconciler = reconciler;
          this.isObject = _objects_js__WEBPACK_IMPORTED_MODULE_0__.isNonNullObject;
          this.pastCopies = new Set();
        }

        DeepMerger.prototype.merge = function (target, source) {
          var _this = this;

          var context = [];

          for (var _i = 2; _i < arguments.length; _i++) {
            context[_i - 2] = arguments[_i];
          }

          if ((0, _objects_js__WEBPACK_IMPORTED_MODULE_0__.isNonNullObject)(source) && (0, _objects_js__WEBPACK_IMPORTED_MODULE_0__.isNonNullObject)(target)) {
            Object.keys(source).forEach(function (sourceKey) {
              if (hasOwnProperty.call(target, sourceKey)) {
                var targetValue = target[sourceKey];

                if (source[sourceKey] !== targetValue) {
                  var result = _this.reconciler.apply(_this, (0, tslib__WEBPACK_IMPORTED_MODULE_1__.__spreadArray)([target, source, sourceKey], context, false));

                  if (result !== targetValue) {
                    target = _this.shallowCopyForMerge(target);
                    target[sourceKey] = result;
                  }
                }
              } else {
                target = _this.shallowCopyForMerge(target);
                target[sourceKey] = source[sourceKey];
              }
            });
            return target;
          }

          return source;
        };

        DeepMerger.prototype.shallowCopyForMerge = function (value) {
          if ((0, _objects_js__WEBPACK_IMPORTED_MODULE_0__.isNonNullObject)(value) && !this.pastCopies.has(value)) {
            if (Array.isArray(value)) {
              value = value.slice(0);
            } else {
              value = (0, tslib__WEBPACK_IMPORTED_MODULE_1__.__assign)({
                __proto__: Object.getPrototypeOf(value)
              }, value);
            }

            this.pastCopies.add(value);
          }

          return value;
        };

        return DeepMerger;
      }();
      /***/

    },

    /***/
    32247: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "isNonNullObject": function isNonNullObject() {
          return (
            /* binding */
            _isNonNullObject
          );
        }
        /* harmony export */

      });

      function _isNonNullObject(obj) {
        return obj !== null && typeof obj === 'object';
      }
      /***/

    },

    /***/
    47009: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "stringifyForDisplay": function stringifyForDisplay() {
          return (
            /* binding */
            _stringifyForDisplay
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var _makeUniqueId_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ./makeUniqueId.js */
      61597);

      function _stringifyForDisplay(value) {
        var undefId = (0, _makeUniqueId_js__WEBPACK_IMPORTED_MODULE_0__.makeUniqueId)("stringifyForDisplay");
        return JSON.stringify(value, function (key, value) {
          return value === void 0 ? undefId : value;
        }).split(JSON.stringify(undefId)).join("<undefined>");
      }
      /***/

    },

    /***/
    71739: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony import */


      var _global_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ./global.js */
      24009);
      /* harmony import */


      var _maybe_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! ./maybe.js */
      62841);

      var __ = "__";
      var GLOBAL_KEY = [__, __].join("DEV");

      function getDEV() {
        try {
          return Boolean(__DEV__);
        } catch (_a) {
          Object.defineProperty(_global_js__WEBPACK_IMPORTED_MODULE_0__["default"], GLOBAL_KEY, {
            value: (0, _maybe_js__WEBPACK_IMPORTED_MODULE_1__.maybe)(function () {
              return "development";
            }) !== "production",
            enumerable: false,
            configurable: true,
            writable: true
          });
          return _global_js__WEBPACK_IMPORTED_MODULE_0__["default"][GLOBAL_KEY];
        }
      }
      /* harmony default export */


      __webpack_exports__["default"] = getDEV();
      /***/
    },

    /***/
    24009: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony import */


      var _maybe_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ./maybe.js */
      62841);
      /* harmony default export */


      __webpack_exports__["default"] = (0, _maybe_js__WEBPACK_IMPORTED_MODULE_0__.maybe)(function () {
        return globalThis;
      }) || (0, _maybe_js__WEBPACK_IMPORTED_MODULE_0__.maybe)(function () {
        return window;
      }) || (0, _maybe_js__WEBPACK_IMPORTED_MODULE_0__.maybe)(function () {
        return self;
      }) || (0, _maybe_js__WEBPACK_IMPORTED_MODULE_0__.maybe)(function () {
        return global;
      }) || (0, _maybe_js__WEBPACK_IMPORTED_MODULE_0__.maybe)(function () {
        return Function("return this")();
      });
      /***/
    },

    /***/
    30363: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "removeTemporaryGlobals": function removeTemporaryGlobals() {
          return (
            /* binding */
            _removeTemporaryGlobals
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var ts_invariant_process__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ts-invariant/process */
      26045);
      /* harmony import */


      var graphql__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! graphql */
      94005);
      /* harmony import */


      var graphql__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(graphql__WEBPACK_IMPORTED_MODULE_1__);

      function _removeTemporaryGlobals() {
        (0, graphql__WEBPACK_IMPORTED_MODULE_1__.isType)(null);
        return (0, ts_invariant_process__WEBPACK_IMPORTED_MODULE_0__.remove)();
      }
      /***/

    },

    /***/
    75637: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "DEV": function DEV() {
          return (
            /* reexport safe */
            _DEV_js__WEBPACK_IMPORTED_MODULE_1__["default"]
          );
        },

        /* harmony export */
        "checkDEV": function checkDEV() {
          return (
            /* binding */
            _checkDEV
          );
        },

        /* harmony export */
        "maybe": function maybe() {
          return (
            /* reexport safe */
            _maybe_js__WEBPACK_IMPORTED_MODULE_3__.maybe
          );
        },

        /* harmony export */
        "global": function global() {
          return (
            /* reexport safe */
            _global_js__WEBPACK_IMPORTED_MODULE_4__["default"]
          );
        },

        /* harmony export */
        "invariant": function invariant() {
          return (
            /* reexport safe */
            ts_invariant__WEBPACK_IMPORTED_MODULE_0__.invariant
          );
        },

        /* harmony export */
        "InvariantError": function InvariantError() {
          return (
            /* reexport safe */
            ts_invariant__WEBPACK_IMPORTED_MODULE_0__.InvariantError
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var ts_invariant__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ts-invariant */
      68247);
      /* harmony import */


      var _DEV_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! ./DEV.js */
      71739);
      /* harmony import */


      var _graphql_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! ./graphql.js */
      30363);
      /* harmony import */


      var _maybe_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! ./maybe.js */
      62841);
      /* harmony import */


      var _global_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
      /*! ./global.js */
      24009);

      function _checkDEV() {
        __DEV__ ? (0, ts_invariant__WEBPACK_IMPORTED_MODULE_0__.invariant)("boolean" === typeof _DEV_js__WEBPACK_IMPORTED_MODULE_1__["default"], _DEV_js__WEBPACK_IMPORTED_MODULE_1__["default"]) : (0, ts_invariant__WEBPACK_IMPORTED_MODULE_0__.invariant)("boolean" === typeof _DEV_js__WEBPACK_IMPORTED_MODULE_1__["default"], 38);
      }

      (0, _graphql_js__WEBPACK_IMPORTED_MODULE_2__.removeTemporaryGlobals)();

      _checkDEV();
      /***/

    },

    /***/
    62841: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "maybe": function maybe() {
          return (
            /* binding */
            _maybe
          );
        }
        /* harmony export */

      });

      function _maybe(thunk) {
        try {
          return thunk();
        } catch (_a) {}
      }
      /***/

    },

    /***/
    67849: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "shouldInclude": function shouldInclude() {
          return (
            /* binding */
            _shouldInclude
          );
        },

        /* harmony export */
        "getDirectiveNames": function getDirectiveNames() {
          return (
            /* binding */
            _getDirectiveNames
          );
        },

        /* harmony export */
        "hasDirectives": function hasDirectives() {
          return (
            /* binding */
            _hasDirectives
          );
        },

        /* harmony export */
        "hasClientExports": function hasClientExports() {
          return (
            /* binding */
            _hasClientExports
          );
        },

        /* harmony export */
        "getInclusionDirectives": function getInclusionDirectives() {
          return (
            /* binding */
            _getInclusionDirectives
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var _globals_index_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ../globals/index.js */
      75637);
      /* harmony import */


      var graphql__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! graphql */
      94005);
      /* harmony import */


      var graphql__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(graphql__WEBPACK_IMPORTED_MODULE_1__);

      function _shouldInclude(_a, variables) {
        var directives = _a.directives;

        if (!directives || !directives.length) {
          return true;
        }

        return _getInclusionDirectives(directives).every(function (_a) {
          var directive = _a.directive,
              ifArgument = _a.ifArgument;
          var evaledValue = false;

          if (ifArgument.value.kind === 'Variable') {
            evaledValue = variables && variables[ifArgument.value.name.value];
            __DEV__ ? (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(evaledValue !== void 0, "Invalid variable referenced in @" + directive.name.value + " directive.") : (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(evaledValue !== void 0, 39);
          } else {
            evaledValue = ifArgument.value.value;
          }

          return directive.name.value === 'skip' ? !evaledValue : evaledValue;
        });
      }

      function _getDirectiveNames(root) {
        var names = [];
        (0, graphql__WEBPACK_IMPORTED_MODULE_1__.visit)(root, {
          Directive: function Directive(node) {
            names.push(node.name.value);
          }
        });
        return names;
      }

      function _hasDirectives(names, root) {
        return _getDirectiveNames(root).some(function (name) {
          return names.indexOf(name) > -1;
        });
      }

      function _hasClientExports(document) {
        return document && _hasDirectives(['client'], document) && _hasDirectives(['export'], document);
      }

      function isInclusionDirective(_a) {
        var value = _a.name.value;
        return value === 'skip' || value === 'include';
      }

      function _getInclusionDirectives(directives) {
        var result = [];

        if (directives && directives.length) {
          directives.forEach(function (directive) {
            if (!isInclusionDirective(directive)) return;
            var directiveArguments = directive.arguments;
            var directiveName = directive.name.value;
            __DEV__ ? (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(directiveArguments && directiveArguments.length === 1, "Incorrect number of arguments for the @" + directiveName + " directive.") : (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(directiveArguments && directiveArguments.length === 1, 40);
            var ifArgument = directiveArguments[0];
            __DEV__ ? (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(ifArgument.name && ifArgument.name.value === 'if', "Invalid argument for the @" + directiveName + " directive.") : (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(ifArgument.name && ifArgument.name.value === 'if', 41);
            var ifValue = ifArgument.value;
            __DEV__ ? (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(ifValue && (ifValue.kind === 'Variable' || ifValue.kind === 'BooleanValue'), "Argument for the @" + directiveName + " directive must be a variable or a boolean value.") : (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(ifValue && (ifValue.kind === 'Variable' || ifValue.kind === 'BooleanValue'), 42);
            result.push({
              directive: directive,
              ifArgument: ifArgument
            });
          });
        }

        return result;
      }
      /***/

    },

    /***/
    89000: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "getFragmentQueryDocument": function getFragmentQueryDocument() {
          return (
            /* binding */
            _getFragmentQueryDocument
          );
        },

        /* harmony export */
        "createFragmentMap": function createFragmentMap() {
          return (
            /* binding */
            _createFragmentMap
          );
        },

        /* harmony export */
        "getFragmentFromSelection": function getFragmentFromSelection() {
          return (
            /* binding */
            _getFragmentFromSelection
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var tslib__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! tslib */
      75545);
      /* harmony import */


      var _globals_index_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ../globals/index.js */
      75637);

      function _getFragmentQueryDocument(document, fragmentName) {
        var actualFragmentName = fragmentName;
        var fragments = [];
        document.definitions.forEach(function (definition) {
          if (definition.kind === 'OperationDefinition') {
            throw __DEV__ ? new _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.InvariantError("Found a " + definition.operation + " operation" + (definition.name ? " named '" + definition.name.value + "'" : '') + ". " + 'No operations are allowed when using a fragment as a query. Only fragments are allowed.') : new _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.InvariantError(43);
          }

          if (definition.kind === 'FragmentDefinition') {
            fragments.push(definition);
          }
        });

        if (typeof actualFragmentName === 'undefined') {
          __DEV__ ? (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(fragments.length === 1, "Found " + fragments.length + " fragments. `fragmentName` must be provided when there is not exactly 1 fragment.") : (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(fragments.length === 1, 44);
          actualFragmentName = fragments[0].name.value;
        }

        var query = (0, tslib__WEBPACK_IMPORTED_MODULE_1__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_1__.__assign)({}, document), {
          definitions: (0, tslib__WEBPACK_IMPORTED_MODULE_1__.__spreadArray)([{
            kind: 'OperationDefinition',
            operation: 'query',
            selectionSet: {
              kind: 'SelectionSet',
              selections: [{
                kind: 'FragmentSpread',
                name: {
                  kind: 'Name',
                  value: actualFragmentName
                }
              }]
            }
          }], document.definitions, true)
        });
        return query;
      }

      function _createFragmentMap(fragments) {
        if (fragments === void 0) {
          fragments = [];
        }

        var symTable = {};
        fragments.forEach(function (fragment) {
          symTable[fragment.name.value] = fragment;
        });
        return symTable;
      }

      function _getFragmentFromSelection(selection, fragmentMap) {
        switch (selection.kind) {
          case 'InlineFragment':
            return selection;

          case 'FragmentSpread':
            {
              var fragment = fragmentMap && fragmentMap[selection.name.value];
              __DEV__ ? (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(fragment, "No fragment named " + selection.name.value + ".") : (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(fragment, 45);
              return fragment;
            }

          default:
            return null;
        }
      }
      /***/

    },

    /***/
    25543: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "checkDocument": function checkDocument() {
          return (
            /* binding */
            _checkDocument
          );
        },

        /* harmony export */
        "getOperationDefinition": function getOperationDefinition() {
          return (
            /* binding */
            _getOperationDefinition
          );
        },

        /* harmony export */
        "getOperationName": function getOperationName() {
          return (
            /* binding */
            _getOperationName
          );
        },

        /* harmony export */
        "getFragmentDefinitions": function getFragmentDefinitions() {
          return (
            /* binding */
            _getFragmentDefinitions
          );
        },

        /* harmony export */
        "getQueryDefinition": function getQueryDefinition() {
          return (
            /* binding */
            _getQueryDefinition
          );
        },

        /* harmony export */
        "getFragmentDefinition": function getFragmentDefinition() {
          return (
            /* binding */
            _getFragmentDefinition
          );
        },

        /* harmony export */
        "getMainDefinition": function getMainDefinition() {
          return (
            /* binding */
            _getMainDefinition
          );
        },

        /* harmony export */
        "getDefaultValues": function getDefaultValues() {
          return (
            /* binding */
            _getDefaultValues
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var _globals_index_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ../globals/index.js */
      75637);
      /* harmony import */


      var _storeUtils_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! ./storeUtils.js */
      75845);

      function _checkDocument(doc) {
        __DEV__ ? (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(doc && doc.kind === 'Document', "Expecting a parsed GraphQL document. Perhaps you need to wrap the query string in a \"gql\" tag? http://docs.apollostack.com/apollo-client/core.html#gql") : (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(doc && doc.kind === 'Document', 46);
        var operations = doc.definitions.filter(function (d) {
          return d.kind !== 'FragmentDefinition';
        }).map(function (definition) {
          if (definition.kind !== 'OperationDefinition') {
            throw __DEV__ ? new _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.InvariantError("Schema type definitions not allowed in queries. Found: \"" + definition.kind + "\"") : new _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.InvariantError(47);
          }

          return definition;
        });
        __DEV__ ? (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(operations.length <= 1, "Ambiguous GraphQL document: contains " + operations.length + " operations") : (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(operations.length <= 1, 48);
        return doc;
      }

      function _getOperationDefinition(doc) {
        _checkDocument(doc);

        return doc.definitions.filter(function (definition) {
          return definition.kind === 'OperationDefinition';
        })[0];
      }

      function _getOperationName(doc) {
        return doc.definitions.filter(function (definition) {
          return definition.kind === 'OperationDefinition' && definition.name;
        }).map(function (x) {
          return x.name.value;
        })[0] || null;
      }

      function _getFragmentDefinitions(doc) {
        return doc.definitions.filter(function (definition) {
          return definition.kind === 'FragmentDefinition';
        });
      }

      function _getQueryDefinition(doc) {
        var queryDef = _getOperationDefinition(doc);

        __DEV__ ? (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(queryDef && queryDef.operation === 'query', 'Must contain a query definition.') : (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(queryDef && queryDef.operation === 'query', 49);
        return queryDef;
      }

      function _getFragmentDefinition(doc) {
        __DEV__ ? (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(doc.kind === 'Document', "Expecting a parsed GraphQL document. Perhaps you need to wrap the query string in a \"gql\" tag? http://docs.apollostack.com/apollo-client/core.html#gql") : (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(doc.kind === 'Document', 50);
        __DEV__ ? (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(doc.definitions.length <= 1, 'Fragment must have exactly one definition.') : (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(doc.definitions.length <= 1, 51);
        var fragmentDef = doc.definitions[0];
        __DEV__ ? (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(fragmentDef.kind === 'FragmentDefinition', 'Must be a fragment definition.') : (0, _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant)(fragmentDef.kind === 'FragmentDefinition', 52);
        return fragmentDef;
      }

      function _getMainDefinition(queryDoc) {
        _checkDocument(queryDoc);

        var fragmentDefinition;

        for (var _i = 0, _a = queryDoc.definitions; _i < _a.length; _i++) {
          var definition = _a[_i];

          if (definition.kind === 'OperationDefinition') {
            var operation = definition.operation;

            if (operation === 'query' || operation === 'mutation' || operation === 'subscription') {
              return definition;
            }
          }

          if (definition.kind === 'FragmentDefinition' && !fragmentDefinition) {
            fragmentDefinition = definition;
          }
        }

        if (fragmentDefinition) {
          return fragmentDefinition;
        }

        throw __DEV__ ? new _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.InvariantError('Expected a parsed GraphQL query with a query, mutation, subscription, or a fragment.') : new _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.InvariantError(53);
      }

      function _getDefaultValues(definition) {
        var defaultValues = Object.create(null);
        var defs = definition && definition.variableDefinitions;

        if (defs && defs.length) {
          defs.forEach(function (def) {
            if (def.defaultValue) {
              (0, _storeUtils_js__WEBPACK_IMPORTED_MODULE_1__.valueToObjectRepresentation)(defaultValues, def.variable.name, def.defaultValue);
            }
          });
        }

        return defaultValues;
      }
      /***/

    },

    /***/
    75845: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "makeReference": function makeReference() {
          return (
            /* binding */
            _makeReference
          );
        },

        /* harmony export */
        "isReference": function isReference() {
          return (
            /* binding */
            _isReference
          );
        },

        /* harmony export */
        "isDocumentNode": function isDocumentNode() {
          return (
            /* binding */
            _isDocumentNode
          );
        },

        /* harmony export */
        "valueToObjectRepresentation": function valueToObjectRepresentation() {
          return (
            /* binding */
            _valueToObjectRepresentation
          );
        },

        /* harmony export */
        "storeKeyNameFromField": function storeKeyNameFromField() {
          return (
            /* binding */
            _storeKeyNameFromField
          );
        },

        /* harmony export */
        "getStoreKeyName": function getStoreKeyName() {
          return (
            /* binding */
            _getStoreKeyName
          );
        },

        /* harmony export */
        "argumentsObjectFromField": function argumentsObjectFromField() {
          return (
            /* binding */
            _argumentsObjectFromField
          );
        },

        /* harmony export */
        "resultKeyNameFromField": function resultKeyNameFromField() {
          return (
            /* binding */
            _resultKeyNameFromField
          );
        },

        /* harmony export */
        "getTypenameFromResult": function getTypenameFromResult() {
          return (
            /* binding */
            _getTypenameFromResult
          );
        },

        /* harmony export */
        "isField": function isField() {
          return (
            /* binding */
            _isField
          );
        },

        /* harmony export */
        "isInlineFragment": function isInlineFragment() {
          return (
            /* binding */
            _isInlineFragment
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var _globals_index_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ../globals/index.js */
      75637);
      /* harmony import */


      var _common_objects_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! ../common/objects.js */
      32247);
      /* harmony import */


      var _fragments_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! ./fragments.js */
      89000);

      function _makeReference(id) {
        return {
          __ref: String(id)
        };
      }

      function _isReference(obj) {
        return Boolean(obj && typeof obj === 'object' && typeof obj.__ref === 'string');
      }

      function _isDocumentNode(value) {
        return (0, _common_objects_js__WEBPACK_IMPORTED_MODULE_1__.isNonNullObject)(value) && value.kind === "Document" && Array.isArray(value.definitions);
      }

      function isStringValue(value) {
        return value.kind === 'StringValue';
      }

      function isBooleanValue(value) {
        return value.kind === 'BooleanValue';
      }

      function isIntValue(value) {
        return value.kind === 'IntValue';
      }

      function isFloatValue(value) {
        return value.kind === 'FloatValue';
      }

      function isVariable(value) {
        return value.kind === 'Variable';
      }

      function isObjectValue(value) {
        return value.kind === 'ObjectValue';
      }

      function isListValue(value) {
        return value.kind === 'ListValue';
      }

      function isEnumValue(value) {
        return value.kind === 'EnumValue';
      }

      function isNullValue(value) {
        return value.kind === 'NullValue';
      }

      function _valueToObjectRepresentation(argObj, name, value, variables) {
        if (isIntValue(value) || isFloatValue(value)) {
          argObj[name.value] = Number(value.value);
        } else if (isBooleanValue(value) || isStringValue(value)) {
          argObj[name.value] = value.value;
        } else if (isObjectValue(value)) {
          var nestedArgObj_1 = {};
          value.fields.map(function (obj) {
            return _valueToObjectRepresentation(nestedArgObj_1, obj.name, obj.value, variables);
          });
          argObj[name.value] = nestedArgObj_1;
        } else if (isVariable(value)) {
          var variableValue = (variables || {})[value.name.value];
          argObj[name.value] = variableValue;
        } else if (isListValue(value)) {
          argObj[name.value] = value.values.map(function (listValue) {
            var nestedArgArrayObj = {};

            _valueToObjectRepresentation(nestedArgArrayObj, name, listValue, variables);

            return nestedArgArrayObj[name.value];
          });
        } else if (isEnumValue(value)) {
          argObj[name.value] = value.value;
        } else if (isNullValue(value)) {
          argObj[name.value] = null;
        } else {
          throw __DEV__ ? new _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.InvariantError("The inline argument \"" + name.value + "\" of kind \"" + value.kind + "\"" + 'is not supported. Use variables instead of inline arguments to ' + 'overcome this limitation.') : new _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.InvariantError(54);
        }
      }

      function _storeKeyNameFromField(field, variables) {
        var directivesObj = null;

        if (field.directives) {
          directivesObj = {};
          field.directives.forEach(function (directive) {
            directivesObj[directive.name.value] = {};

            if (directive.arguments) {
              directive.arguments.forEach(function (_a) {
                var name = _a.name,
                    value = _a.value;
                return _valueToObjectRepresentation(directivesObj[directive.name.value], name, value, variables);
              });
            }
          });
        }

        var argObj = null;

        if (field.arguments && field.arguments.length) {
          argObj = {};
          field.arguments.forEach(function (_a) {
            var name = _a.name,
                value = _a.value;
            return _valueToObjectRepresentation(argObj, name, value, variables);
          });
        }

        return _getStoreKeyName(field.name.value, argObj, directivesObj);
      }

      var KNOWN_DIRECTIVES = ['connection', 'include', 'skip', 'client', 'rest', 'export'];

      var _getStoreKeyName = Object.assign(function (fieldName, args, directives) {
        if (args && directives && directives['connection'] && directives['connection']['key']) {
          if (directives['connection']['filter'] && directives['connection']['filter'].length > 0) {
            var filterKeys = directives['connection']['filter'] ? directives['connection']['filter'] : [];
            filterKeys.sort();
            var filteredArgs_1 = {};
            filterKeys.forEach(function (key) {
              filteredArgs_1[key] = args[key];
            });
            return directives['connection']['key'] + "(" + stringify(filteredArgs_1) + ")";
          } else {
            return directives['connection']['key'];
          }
        }

        var completeFieldName = fieldName;

        if (args) {
          var stringifiedArgs = stringify(args);
          completeFieldName += "(" + stringifiedArgs + ")";
        }

        if (directives) {
          Object.keys(directives).forEach(function (key) {
            if (KNOWN_DIRECTIVES.indexOf(key) !== -1) return;

            if (directives[key] && Object.keys(directives[key]).length) {
              completeFieldName += "@" + key + "(" + stringify(directives[key]) + ")";
            } else {
              completeFieldName += "@" + key;
            }
          });
        }

        return completeFieldName;
      }, {
        setStringify: function setStringify(s) {
          var previous = stringify;
          stringify = s;
          return previous;
        }
      });

      var stringify = function defaultStringify(value) {
        return JSON.stringify(value, stringifyReplacer);
      };

      function stringifyReplacer(_key, value) {
        if ((0, _common_objects_js__WEBPACK_IMPORTED_MODULE_1__.isNonNullObject)(value) && !Array.isArray(value)) {
          value = Object.keys(value).sort().reduce(function (copy, key) {
            copy[key] = value[key];
            return copy;
          }, {});
        }

        return value;
      }

      function _argumentsObjectFromField(field, variables) {
        if (field.arguments && field.arguments.length) {
          var argObj_1 = {};
          field.arguments.forEach(function (_a) {
            var name = _a.name,
                value = _a.value;
            return _valueToObjectRepresentation(argObj_1, name, value, variables);
          });
          return argObj_1;
        }

        return null;
      }

      function _resultKeyNameFromField(field) {
        return field.alias ? field.alias.value : field.name.value;
      }

      function _getTypenameFromResult(result, selectionSet, fragmentMap) {
        if (typeof result.__typename === 'string') {
          return result.__typename;
        }

        for (var _i = 0, _a = selectionSet.selections; _i < _a.length; _i++) {
          var selection = _a[_i];

          if (_isField(selection)) {
            if (selection.name.value === '__typename') {
              return result[_resultKeyNameFromField(selection)];
            }
          } else {
            var typename = _getTypenameFromResult(result, (0, _fragments_js__WEBPACK_IMPORTED_MODULE_2__.getFragmentFromSelection)(selection, fragmentMap).selectionSet, fragmentMap);

            if (typeof typename === 'string') {
              return typename;
            }
          }
        }
      }

      function _isField(selection) {
        return selection.kind === 'Field';
      }

      function _isInlineFragment(selection) {
        return selection.kind === 'InlineFragment';
      }
      /***/

    },

    /***/
    46836: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "removeDirectivesFromDocument": function removeDirectivesFromDocument() {
          return (
            /* binding */
            _removeDirectivesFromDocument
          );
        },

        /* harmony export */
        "addTypenameToDocument": function addTypenameToDocument() {
          return (
            /* binding */
            _addTypenameToDocument
          );
        },

        /* harmony export */
        "removeConnectionDirectiveFromDocument": function removeConnectionDirectiveFromDocument() {
          return (
            /* binding */
            _removeConnectionDirectiveFromDocument
          );
        },

        /* harmony export */
        "removeArgumentsFromDocument": function removeArgumentsFromDocument() {
          return (
            /* binding */
            _removeArgumentsFromDocument
          );
        },

        /* harmony export */
        "removeFragmentSpreadFromDocument": function removeFragmentSpreadFromDocument() {
          return (
            /* binding */
            _removeFragmentSpreadFromDocument
          );
        },

        /* harmony export */
        "buildQueryFromSelectionSet": function buildQueryFromSelectionSet() {
          return (
            /* binding */
            _buildQueryFromSelectionSet
          );
        },

        /* harmony export */
        "removeClientSetsFromDocument": function removeClientSetsFromDocument() {
          return (
            /* binding */
            _removeClientSetsFromDocument
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var tslib__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
      /*! tslib */
      75545);
      /* harmony import */


      var _globals_index_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! ../globals/index.js */
      75637);
      /* harmony import */


      var graphql__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! graphql */
      94005);
      /* harmony import */


      var graphql__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(graphql__WEBPACK_IMPORTED_MODULE_1__);
      /* harmony import */


      var _getFromAST_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! ./getFromAST.js */
      25543);
      /* harmony import */


      var _common_filterInPlace_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
      /*! ../common/filterInPlace.js */
      46400);
      /* harmony import */


      var _storeUtils_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
      /*! ./storeUtils.js */
      75845);
      /* harmony import */


      var _fragments_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! ./fragments.js */
      89000);

      var TYPENAME_FIELD = {
        kind: 'Field',
        name: {
          kind: 'Name',
          value: '__typename'
        }
      };

      function isEmpty(op, fragments) {
        return op.selectionSet.selections.every(function (selection) {
          return selection.kind === 'FragmentSpread' && isEmpty(fragments[selection.name.value], fragments);
        });
      }

      function nullIfDocIsEmpty(doc) {
        return isEmpty((0, _getFromAST_js__WEBPACK_IMPORTED_MODULE_2__.getOperationDefinition)(doc) || (0, _getFromAST_js__WEBPACK_IMPORTED_MODULE_2__.getFragmentDefinition)(doc), (0, _fragments_js__WEBPACK_IMPORTED_MODULE_3__.createFragmentMap)((0, _getFromAST_js__WEBPACK_IMPORTED_MODULE_2__.getFragmentDefinitions)(doc))) ? null : doc;
      }

      function getDirectiveMatcher(directives) {
        return function directiveMatcher(directive) {
          return directives.some(function (dir) {
            return dir.name && dir.name === directive.name.value || dir.test && dir.test(directive);
          });
        };
      }

      function _removeDirectivesFromDocument(directives, doc) {
        var variablesInUse = Object.create(null);
        var variablesToRemove = [];
        var fragmentSpreadsInUse = Object.create(null);
        var fragmentSpreadsToRemove = [];
        var modifiedDoc = nullIfDocIsEmpty((0, graphql__WEBPACK_IMPORTED_MODULE_1__.visit)(doc, {
          Variable: {
            enter: function enter(node, _key, parent) {
              if (parent.kind !== 'VariableDefinition') {
                variablesInUse[node.name.value] = true;
              }
            }
          },
          Field: {
            enter: function enter(node) {
              if (directives && node.directives) {
                var shouldRemoveField = directives.some(function (directive) {
                  return directive.remove;
                });

                if (shouldRemoveField && node.directives && node.directives.some(getDirectiveMatcher(directives))) {
                  if (node.arguments) {
                    node.arguments.forEach(function (arg) {
                      if (arg.value.kind === 'Variable') {
                        variablesToRemove.push({
                          name: arg.value.name.value
                        });
                      }
                    });
                  }

                  if (node.selectionSet) {
                    getAllFragmentSpreadsFromSelectionSet(node.selectionSet).forEach(function (frag) {
                      fragmentSpreadsToRemove.push({
                        name: frag.name.value
                      });
                    });
                  }

                  return null;
                }
              }
            }
          },
          FragmentSpread: {
            enter: function enter(node) {
              fragmentSpreadsInUse[node.name.value] = true;
            }
          },
          Directive: {
            enter: function enter(node) {
              if (getDirectiveMatcher(directives)(node)) {
                return null;
              }
            }
          }
        }));

        if (modifiedDoc && (0, _common_filterInPlace_js__WEBPACK_IMPORTED_MODULE_4__.filterInPlace)(variablesToRemove, function (v) {
          return !!v.name && !variablesInUse[v.name];
        }).length) {
          modifiedDoc = _removeArgumentsFromDocument(variablesToRemove, modifiedDoc);
        }

        if (modifiedDoc && (0, _common_filterInPlace_js__WEBPACK_IMPORTED_MODULE_4__.filterInPlace)(fragmentSpreadsToRemove, function (fs) {
          return !!fs.name && !fragmentSpreadsInUse[fs.name];
        }).length) {
          modifiedDoc = _removeFragmentSpreadFromDocument(fragmentSpreadsToRemove, modifiedDoc);
        }

        return modifiedDoc;
      }

      var _addTypenameToDocument = Object.assign(function (doc) {
        return (0, graphql__WEBPACK_IMPORTED_MODULE_1__.visit)((0, _getFromAST_js__WEBPACK_IMPORTED_MODULE_2__.checkDocument)(doc), {
          SelectionSet: {
            enter: function enter(node, _key, parent) {
              if (parent && parent.kind === 'OperationDefinition') {
                return;
              }

              var selections = node.selections;

              if (!selections) {
                return;
              }

              var skip = selections.some(function (selection) {
                return (0, _storeUtils_js__WEBPACK_IMPORTED_MODULE_5__.isField)(selection) && (selection.name.value === '__typename' || selection.name.value.lastIndexOf('__', 0) === 0);
              });

              if (skip) {
                return;
              }

              var field = parent;

              if ((0, _storeUtils_js__WEBPACK_IMPORTED_MODULE_5__.isField)(field) && field.directives && field.directives.some(function (d) {
                return d.name.value === 'export';
              })) {
                return;
              }

              return (0, tslib__WEBPACK_IMPORTED_MODULE_6__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_6__.__assign)({}, node), {
                selections: (0, tslib__WEBPACK_IMPORTED_MODULE_6__.__spreadArray)((0, tslib__WEBPACK_IMPORTED_MODULE_6__.__spreadArray)([], selections, true), [TYPENAME_FIELD], false)
              });
            }
          }
        });
      }, {
        added: function added(field) {
          return field === TYPENAME_FIELD;
        }
      });

      var connectionRemoveConfig = {
        test: function test(directive) {
          var willRemove = directive.name.value === 'connection';

          if (willRemove) {
            if (!directive.arguments || !directive.arguments.some(function (arg) {
              return arg.name.value === 'key';
            })) {
              __DEV__ && _globals_index_js__WEBPACK_IMPORTED_MODULE_0__.invariant.warn('Removing an @connection directive even though it does not have a key. ' + 'You may want to use the key parameter to specify a store key.');
            }
          }

          return willRemove;
        }
      };

      function _removeConnectionDirectiveFromDocument(doc) {
        return _removeDirectivesFromDocument([connectionRemoveConfig], (0, _getFromAST_js__WEBPACK_IMPORTED_MODULE_2__.checkDocument)(doc));
      }

      function hasDirectivesInSelectionSet(directives, selectionSet, nestedCheck) {
        if (nestedCheck === void 0) {
          nestedCheck = true;
        }

        return !!selectionSet && selectionSet.selections && selectionSet.selections.some(function (selection) {
          return hasDirectivesInSelection(directives, selection, nestedCheck);
        });
      }

      function hasDirectivesInSelection(directives, selection, nestedCheck) {
        if (nestedCheck === void 0) {
          nestedCheck = true;
        }

        if (!(0, _storeUtils_js__WEBPACK_IMPORTED_MODULE_5__.isField)(selection)) {
          return true;
        }

        if (!selection.directives) {
          return false;
        }

        return selection.directives.some(getDirectiveMatcher(directives)) || nestedCheck && hasDirectivesInSelectionSet(directives, selection.selectionSet, nestedCheck);
      }

      function getArgumentMatcher(config) {
        return function argumentMatcher(argument) {
          return config.some(function (aConfig) {
            return argument.value && argument.value.kind === 'Variable' && argument.value.name && (aConfig.name === argument.value.name.value || aConfig.test && aConfig.test(argument));
          });
        };
      }

      function _removeArgumentsFromDocument(config, doc) {
        var argMatcher = getArgumentMatcher(config);
        return nullIfDocIsEmpty((0, graphql__WEBPACK_IMPORTED_MODULE_1__.visit)(doc, {
          OperationDefinition: {
            enter: function enter(node) {
              return (0, tslib__WEBPACK_IMPORTED_MODULE_6__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_6__.__assign)({}, node), {
                variableDefinitions: node.variableDefinitions ? node.variableDefinitions.filter(function (varDef) {
                  return !config.some(function (arg) {
                    return arg.name === varDef.variable.name.value;
                  });
                }) : []
              });
            }
          },
          Field: {
            enter: function enter(node) {
              var shouldRemoveField = config.some(function (argConfig) {
                return argConfig.remove;
              });

              if (shouldRemoveField) {
                var argMatchCount_1 = 0;

                if (node.arguments) {
                  node.arguments.forEach(function (arg) {
                    if (argMatcher(arg)) {
                      argMatchCount_1 += 1;
                    }
                  });
                }

                if (argMatchCount_1 === 1) {
                  return null;
                }
              }
            }
          },
          Argument: {
            enter: function enter(node) {
              if (argMatcher(node)) {
                return null;
              }
            }
          }
        }));
      }

      function _removeFragmentSpreadFromDocument(config, doc) {
        function enter(node) {
          if (config.some(function (def) {
            return def.name === node.name.value;
          })) {
            return null;
          }
        }

        return nullIfDocIsEmpty((0, graphql__WEBPACK_IMPORTED_MODULE_1__.visit)(doc, {
          FragmentSpread: {
            enter: enter
          },
          FragmentDefinition: {
            enter: enter
          }
        }));
      }

      function getAllFragmentSpreadsFromSelectionSet(selectionSet) {
        var allFragments = [];
        selectionSet.selections.forEach(function (selection) {
          if (((0, _storeUtils_js__WEBPACK_IMPORTED_MODULE_5__.isField)(selection) || (0, _storeUtils_js__WEBPACK_IMPORTED_MODULE_5__.isInlineFragment)(selection)) && selection.selectionSet) {
            getAllFragmentSpreadsFromSelectionSet(selection.selectionSet).forEach(function (frag) {
              return allFragments.push(frag);
            });
          } else if (selection.kind === 'FragmentSpread') {
            allFragments.push(selection);
          }
        });
        return allFragments;
      }

      function _buildQueryFromSelectionSet(document) {
        var definition = (0, _getFromAST_js__WEBPACK_IMPORTED_MODULE_2__.getMainDefinition)(document);
        var definitionOperation = definition.operation;

        if (definitionOperation === 'query') {
          return document;
        }

        var modifiedDoc = (0, graphql__WEBPACK_IMPORTED_MODULE_1__.visit)(document, {
          OperationDefinition: {
            enter: function enter(node) {
              return (0, tslib__WEBPACK_IMPORTED_MODULE_6__.__assign)((0, tslib__WEBPACK_IMPORTED_MODULE_6__.__assign)({}, node), {
                operation: 'query'
              });
            }
          }
        });
        return modifiedDoc;
      }

      function _removeClientSetsFromDocument(document) {
        (0, _getFromAST_js__WEBPACK_IMPORTED_MODULE_2__.checkDocument)(document);

        var modifiedDoc = _removeDirectivesFromDocument([{
          test: function test(directive) {
            return directive.name.value === 'client';
          },
          remove: true
        }], document);

        if (modifiedDoc) {
          modifiedDoc = (0, graphql__WEBPACK_IMPORTED_MODULE_1__.visit)(modifiedDoc, {
            FragmentDefinition: {
              enter: function enter(node) {
                if (node.selectionSet) {
                  var isTypenameOnly = node.selectionSet.selections.every(function (selection) {
                    return (0, _storeUtils_js__WEBPACK_IMPORTED_MODULE_5__.isField)(selection) && selection.name.value === '__typename';
                  });

                  if (isTypenameOnly) {
                    return null;
                  }
                }
              }
            }
          });
        }

        return modifiedDoc;
      }
      /***/

    },

    /***/
    85033: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "Slot": function Slot() {
          return (
            /* binding */
            _Slot
          );
        },

        /* harmony export */
        "asyncFromGen": function asyncFromGen() {
          return (
            /* binding */
            _asyncFromGen
          );
        },

        /* harmony export */
        "bind": function bind() {
          return (
            /* binding */
            _bind
          );
        },

        /* harmony export */
        "noContext": function noContext() {
          return (
            /* binding */
            _noContext
          );
        },

        /* harmony export */
        "setTimeout": function setTimeout() {
          return (
            /* binding */
            setTimeoutWithContext
          );
        },

        /* harmony export */
        "wrapYieldingFiberMethods": function wrapYieldingFiberMethods() {
          return (
            /* binding */
            _wrapYieldingFiberMethods
          );
        }
        /* harmony export */

      }); // This currentContext variable will only be used if the makeSlotClass
      // function is called, which happens only if this is the first copy of the
      // @wry/context package to be imported.


      var currentContext = null; // This unique internal object is used to denote the absence of a value
      // for a given Slot, and is never exposed to outside code.

      var MISSING_VALUE = {};
      var idCounter = 1; // Although we can't do anything about the cost of duplicated code from
      // accidentally bundling multiple copies of the @wry/context package, we can
      // avoid creating the Slot class more than once using makeSlotClass.

      var makeSlotClass = function makeSlotClass() {
        return function () {
          function Slot() {
            // If you have a Slot object, you can find out its slot.id, but you cannot
            // guess the slot.id of a Slot you don't have access to, thanks to the
            // randomized suffix.
            this.id = ["slot", idCounter++, Date.now(), Math.random().toString(36).slice(2)].join(":");
          }

          Slot.prototype.hasValue = function () {
            for (var context_1 = currentContext; context_1; context_1 = context_1.parent) {
              // We use the Slot object iself as a key to its value, which means the
              // value cannot be obtained without a reference to the Slot object.
              if (this.id in context_1.slots) {
                var value = context_1.slots[this.id];
                if (value === MISSING_VALUE) break;

                if (context_1 !== currentContext) {
                  // Cache the value in currentContext.slots so the next lookup will
                  // be faster. This caching is safe because the tree of contexts and
                  // the values of the slots are logically immutable.
                  currentContext.slots[this.id] = value;
                }

                return true;
              }
            }

            if (currentContext) {
              // If a value was not found for this Slot, it's never going to be found
              // no matter how many times we look it up, so we might as well cache
              // the absence of the value, too.
              currentContext.slots[this.id] = MISSING_VALUE;
            }

            return false;
          };

          Slot.prototype.getValue = function () {
            if (this.hasValue()) {
              return currentContext.slots[this.id];
            }
          };

          Slot.prototype.withValue = function (value, callback, // Given the prevalence of arrow functions, specifying arguments is likely
          // to be much more common than specifying `this`, hence this ordering:
          args, thisArg) {
            var _a;

            var slots = (_a = {
              __proto__: null
            }, _a[this.id] = value, _a);
            var parent = currentContext;
            currentContext = {
              parent: parent,
              slots: slots
            };

            try {
              // Function.prototype.apply allows the arguments array argument to be
              // omitted or undefined, so args! is fine here.
              return callback.apply(thisArg, args);
            } finally {
              currentContext = parent;
            }
          }; // Capture the current context and wrap a callback function so that it
          // reestablishes the captured context when called.


          Slot.bind = function (callback) {
            var context = currentContext;
            return function () {
              var saved = currentContext;

              try {
                currentContext = context;
                return callback.apply(this, arguments);
              } finally {
                currentContext = saved;
              }
            };
          }; // Immediately run a callback function without any captured context.


          Slot.noContext = function (callback, // Given the prevalence of arrow functions, specifying arguments is likely
          // to be much more common than specifying `this`, hence this ordering:
          args, thisArg) {
            if (currentContext) {
              var saved = currentContext;

              try {
                currentContext = null; // Function.prototype.apply allows the arguments array argument to be
                // omitted or undefined, so args! is fine here.

                return callback.apply(thisArg, args);
              } finally {
                currentContext = saved;
              }
            } else {
              return callback.apply(thisArg, args);
            }
          };

          return Slot;
        }();
      }; // We store a single global implementation of the Slot class as a permanent
      // non-enumerable symbol property of the Array constructor. This obfuscation
      // does nothing to prevent access to the Slot class, but at least it ensures
      // the implementation (i.e. currentContext) cannot be tampered with, and all
      // copies of the @wry/context package (hopefully just one) will share the
      // same Slot implementation. Since the first copy of the @wry/context package
      // to be imported wins, this technique imposes a very high cost for any
      // future breaking changes to the Slot class.


      var globalKey = "@wry/context:Slot";
      var host = Array;

      var _Slot = host[globalKey] || function () {
        var Slot = makeSlotClass();

        try {
          Object.defineProperty(host, globalKey, {
            value: host[globalKey] = Slot,
            enumerable: false,
            writable: false,
            configurable: false
          });
        } finally {
          return Slot;
        }
      }();

      var _bind = _Slot.bind,
          _noContext = _Slot.noContext;

      function setTimeoutWithContext(callback, delay) {
        return setTimeout(_bind(callback), delay);
      } // Turn any generator function into an async function (using yield instead
      // of await), with context automatically preserved across yields.


      function _asyncFromGen(genFn) {
        return function () {
          var gen = genFn.apply(this, arguments);

          var boundNext = _bind(gen.next);

          var boundThrow = _bind(gen["throw"]);

          return new Promise(function (resolve, reject) {
            function invoke(method, argument) {
              try {
                var result = method.call(gen, argument);
              } catch (error) {
                return reject(error);
              }

              var next = result.done ? resolve : invokeNext;

              if (isPromiseLike(result.value)) {
                result.value.then(next, result.done ? reject : invokeThrow);
              } else {
                next(result.value);
              }
            }

            var invokeNext = function invokeNext(value) {
              return invoke(boundNext, value);
            };

            var invokeThrow = function invokeThrow(error) {
              return invoke(boundThrow, error);
            };

            invokeNext();
          });
        };
      }

      function isPromiseLike(value) {
        return value && typeof value.then === "function";
      } // If you use the fibers npm package to implement coroutines in Node.js,
      // you should call this function at least once to ensure context management
      // remains coherent across any yields.


      var wrappedFibers = [];

      function _wrapYieldingFiberMethods(Fiber) {
        // There can be only one implementation of Fiber per process, so this array
        // should never grow longer than one element.
        if (wrappedFibers.indexOf(Fiber) < 0) {
          var wrap = function wrap(obj, method) {
            var fn = obj[method];

            obj[method] = function () {
              return _noContext(fn, arguments, this);
            };
          }; // These methods can yield, according to
          // https://github.com/laverdet/node-fibers/blob/ddebed9b8ae3883e57f822e2108e6943e5c8d2a8/fibers.js#L97-L100


          wrap(Fiber, "yield");
          wrap(Fiber.prototype, "run");
          wrap(Fiber.prototype, "throwInto");
          wrappedFibers.push(Fiber);
        }

        return Fiber;
      }
      /***/

    },

    /***/
    54803: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "default": function _default() {
          return (
            /* binding */
            _equal
          );
        },

        /* harmony export */
        "equal": function equal() {
          return (
            /* binding */
            _equal
          );
        }
        /* harmony export */

      });

      var _a = Object.prototype,
          toString = _a.toString,
          hasOwnProperty = _a.hasOwnProperty;
      var fnToStr = Function.prototype.toString;
      var previousComparisons = new Map();
      /**
       * Performs a deep equality check on two JavaScript values, tolerating cycles.
       */

      function _equal(a, b) {
        try {
          return check(a, b);
        } finally {
          previousComparisons.clear();
        }
      }

      function check(a, b) {
        // If the two values are strictly equal, our job is easy.
        if (a === b) {
          return true;
        } // Object.prototype.toString returns a representation of the runtime type of
        // the given value that is considerably more precise than typeof.


        var aTag = toString.call(a);
        var bTag = toString.call(b); // If the runtime types of a and b are different, they could maybe be equal
        // under some interpretation of equality, but for simplicity and performance
        // we just return false instead.

        if (aTag !== bTag) {
          return false;
        }

        switch (aTag) {
          case '[object Array]':
            // Arrays are a lot like other objects, but we can cheaply compare their
            // lengths as a short-cut before comparing their elements.
            if (a.length !== b.length) return false;
          // Fall through to object case...

          case '[object Object]':
            {
              if (previouslyCompared(a, b)) return true;
              var aKeys = definedKeys(a);
              var bKeys = definedKeys(b); // If `a` and `b` have a different number of enumerable keys, they
              // must be different.

              var keyCount = aKeys.length;
              if (keyCount !== bKeys.length) return false; // Now make sure they have the same keys.

              for (var k = 0; k < keyCount; ++k) {
                if (!hasOwnProperty.call(b, aKeys[k])) {
                  return false;
                }
              } // Finally, check deep equality of all child properties.


              for (var k = 0; k < keyCount; ++k) {
                var key = aKeys[k];

                if (!check(a[key], b[key])) {
                  return false;
                }
              }

              return true;
            }

          case '[object Error]':
            return a.name === b.name && a.message === b.message;

          case '[object Number]':
            // Handle NaN, which is !== itself.
            if (a !== a) return b !== b;
          // Fall through to shared +a === +b case...

          case '[object Boolean]':
          case '[object Date]':
            return +a === +b;

          case '[object RegExp]':
          case '[object String]':
            return a == "" + b;

          case '[object Map]':
          case '[object Set]':
            {
              if (a.size !== b.size) return false;
              if (previouslyCompared(a, b)) return true;
              var aIterator = a.entries();
              var isMap = aTag === '[object Map]';

              while (true) {
                var info = aIterator.next();
                if (info.done) break; // If a instanceof Set, aValue === aKey.

                var _a = info.value,
                    aKey = _a[0],
                    aValue = _a[1]; // So this works the same way for both Set and Map.

                if (!b.has(aKey)) {
                  return false;
                } // However, we care about deep equality of values only when dealing
                // with Map structures.


                if (isMap && !check(aValue, b.get(aKey))) {
                  return false;
                }
              }

              return true;
            }

          case '[object Uint16Array]':
          case '[object Uint8Array]': // Buffer, in Node.js.

          case '[object Uint32Array]':
          case '[object Int32Array]':
          case '[object Int8Array]':
          case '[object Int16Array]':
          case '[object ArrayBuffer]':
            // DataView doesn't need these conversions, but the equality check is
            // otherwise the same.
            a = new Uint8Array(a);
            b = new Uint8Array(b);
          // Fall through...

          case '[object DataView]':
            {
              var len = a.byteLength;

              if (len === b.byteLength) {
                while (len-- && a[len] === b[len]) {// Keep looping as long as the bytes are equal.
                }
              }

              return len === -1;
            }

          case '[object AsyncFunction]':
          case '[object GeneratorFunction]':
          case '[object AsyncGeneratorFunction]':
          case '[object Function]':
            {
              var aCode = fnToStr.call(a);

              if (aCode !== fnToStr.call(b)) {
                return false;
              } // We consider non-native functions equal if they have the same code
              // (native functions require === because their code is censored).
              // Note that this behavior is not entirely sound, since !== function
              // objects with the same code can behave differently depending on
              // their closure scope. However, any function can behave differently
              // depending on the values of its input arguments (including this)
              // and its calling context (including its closure scope), even
              // though the function object is === to itself; and it is entirely
              // possible for functions that are not === to behave exactly the
              // same under all conceivable circumstances. Because none of these
              // factors are statically decidable in JavaScript, JS function
              // equality is not well-defined. This ambiguity allows us to
              // consider the best possible heuristic among various imperfect
              // options, and equating non-native functions that have the same
              // code has enormous practical benefits, such as when comparing
              // functions that are repeatedly passed as fresh function
              // expressions within objects that are otherwise deeply equal. Since
              // any function created from the same syntactic expression (in the
              // same code location) will always stringify to the same code
              // according to fnToStr.call, we can reasonably expect these
              // repeatedly passed function expressions to have the same code, and
              // thus behave "the same" (with all the caveats mentioned above),
              // even though the runtime function objects are !== to one another.


              return !endsWith(aCode, nativeCodeSuffix);
            }
        } // Otherwise the values are not equal.


        return false;
      }

      function definedKeys(obj) {
        // Remember that the second argument to Array.prototype.filter will be
        // used as `this` within the callback function.
        return Object.keys(obj).filter(isDefinedKey, obj);
      }

      function isDefinedKey(key) {
        return this[key] !== void 0;
      }

      var nativeCodeSuffix = "{ [native code] }";

      function endsWith(full, suffix) {
        var fromIndex = full.length - suffix.length;
        return fromIndex >= 0 && full.indexOf(suffix, fromIndex) === fromIndex;
      }

      function previouslyCompared(a, b) {
        // Though cyclic references can make an object graph appear infinite from the
        // perspective of a depth-first traversal, the graph still contains a finite
        // number of distinct object references. We use the previousComparisons cache
        // to avoid comparing the same pair of object references more than once, which
        // guarantees termination (even if we end up comparing every object in one
        // graph to every object in the other graph, which is extremely unlikely),
        // while still allowing weird isomorphic structures (like rings with different
        // lengths) a chance to pass the equality test.
        var bSet = previousComparisons.get(a);

        if (bSet) {
          // Return true here because we can be sure false will be returned somewhere
          // else if the objects are not equivalent.
          if (bSet.has(b)) return true;
        } else {
          previousComparisons.set(a, bSet = new Set());
        }

        bSet.add(b);
        return false;
      }
      /***/

    },

    /***/
    35217: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "Trie": function Trie() {
          return (
            /* binding */
            _Trie
          );
        }
        /* harmony export */

      }); // A [trie](https://en.wikipedia.org/wiki/Trie) data structure that holds
      // object keys weakly, yet can also hold non-object keys, unlike the
      // native `WeakMap`.
      // If no makeData function is supplied, the looked-up data will be an empty,
      // null-prototype Object.


      var defaultMakeData = function defaultMakeData() {
        return Object.create(null);
      }; // Useful for processing arguments objects as well as arrays.


      var _a = Array.prototype,
          forEach = _a.forEach,
          slice = _a.slice;

      var _Trie = function () {
        function Trie(weakness, makeData) {
          if (weakness === void 0) {
            weakness = true;
          }

          if (makeData === void 0) {
            makeData = defaultMakeData;
          }

          this.weakness = weakness;
          this.makeData = makeData;
        }

        Trie.prototype.lookup = function () {
          var array = [];

          for (var _i = 0; _i < arguments.length; _i++) {
            array[_i] = arguments[_i];
          }

          return this.lookupArray(array);
        };

        Trie.prototype.lookupArray = function (array) {
          var node = this;
          forEach.call(array, function (key) {
            return node = node.getChildTrie(key);
          });
          return node.data || (node.data = this.makeData(slice.call(array)));
        };

        Trie.prototype.getChildTrie = function (key) {
          var map = this.weakness && isObjRef(key) ? this.weak || (this.weak = new WeakMap()) : this.strong || (this.strong = new Map());
          var child = map.get(key);
          if (!child) map.set(key, child = new Trie(this.weakness, this.makeData));
          return child;
        };

        return Trie;
      }();

      function isObjRef(value) {
        switch (typeof value) {
          case "object":
            if (value === null) break;
          // Fall through to return true...

          case "function":
            return true;
        }

        return false;
      }
      /***/

    },

    /***/
    47592: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "HttpBatchLink": function HttpBatchLink() {
          return (
            /* binding */
            _HttpBatchLink
          );
        },

        /* harmony export */
        "HttpBatchLinkHandler": function HttpBatchLinkHandler() {
          return (
            /* binding */
            _HttpBatchLinkHandler
          );
        },

        /* harmony export */
        "HttpLink": function HttpLink() {
          return (
            /* binding */
            _HttpLink
          );
        },

        /* harmony export */
        "HttpLinkHandler": function HttpLinkHandler() {
          return (
            /* binding */
            _HttpLinkHandler
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! @angular/core */
      14468);
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_angular_core__WEBPACK_IMPORTED_MODULE_0__);
      /* harmony import */


      var _angular_common_http__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! @angular/common/http */
      12445);
      /* harmony import */


      var _angular_common_http__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_angular_common_http__WEBPACK_IMPORTED_MODULE_1__);
      /* harmony import */


      var _apollo_client_core__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
      /*! @apollo/client/core */
      14530);
      /* harmony import */


      var _apollo_client_core__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
      /*! @apollo/client/core */
      77669);
      /* harmony import */


      var graphql__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! graphql */
      94005);
      /* harmony import */


      var graphql__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(graphql__WEBPACK_IMPORTED_MODULE_2__);
      /* harmony import */


      var extract_files__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
      /*! extract-files */
      88312);
      /* harmony import */


      var extract_files__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(extract_files__WEBPACK_IMPORTED_MODULE_6__);
      /* harmony import */


      var rxjs__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! rxjs */
      71180);
      /* harmony import */


      var rxjs__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(rxjs__WEBPACK_IMPORTED_MODULE_3__);
      /* harmony import */


      var _apollo_client_link_batch__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(
      /*! @apollo/client/link/batch */
      21137);

      var fetch = function fetch(req, httpClient, extractFiles) {
        var shouldUseBody = ['POST', 'PUT', 'PATCH'].indexOf(req.method.toUpperCase()) !== -1;

        var shouldStringify = function shouldStringify(param) {
          return ['variables', 'extensions'].indexOf(param.toLowerCase()) !== -1;
        };

        var isBatching = req.body.length;
        var shouldUseMultipart = req.options && req.options.useMultipart;
        var multipartInfo;

        if (shouldUseMultipart) {
          if (isBatching) {
            return new rxjs__WEBPACK_IMPORTED_MODULE_3__.Observable(function (observer) {
              return observer.error(new Error('File upload is not available when combined with Batching'));
            });
          }

          if (!shouldUseBody) {
            return new rxjs__WEBPACK_IMPORTED_MODULE_3__.Observable(function (observer) {
              return observer.error(new Error('File upload is not available when GET is used'));
            });
          }

          multipartInfo = extractFiles(req.body);
          shouldUseMultipart = !!multipartInfo.files.size;
        } // `body` for some, `params` for others


        var bodyOrParams = {};

        if (isBatching) {
          if (!shouldUseBody) {
            return new rxjs__WEBPACK_IMPORTED_MODULE_3__.Observable(function (observer) {
              return observer.error(new Error('Batching is not available for GET requests'));
            });
          }

          bodyOrParams = {
            body: req.body
          };
        } else {
          var body = shouldUseMultipart ? multipartInfo.clone : req.body;

          if (shouldUseBody) {
            bodyOrParams = {
              body: body
            };
          } else {
            var params = Object.keys(req.body).reduce(function (obj, param) {
              var value = req.body[param];
              obj[param] = shouldStringify(param) ? JSON.stringify(value) : value;
              return obj;
            }, {});
            bodyOrParams = {
              params: params
            };
          }
        }

        if (shouldUseMultipart && shouldUseBody) {
          var form = new FormData();
          form.append('operations', JSON.stringify(bodyOrParams.body));
          var map = {};
          var files = multipartInfo.files;
          var i = 0;
          files.forEach(function (paths) {
            map[++i] = paths;
          });
          form.append('map', JSON.stringify(map));
          i = 0;
          files.forEach(function (_, file) {
            form.append(++i + '', file, file.name);
          });
          bodyOrParams.body = form;
        } // create a request


        return httpClient.request(req.method, req.url, Object.assign(Object.assign({
          observe: 'response',
          responseType: 'json',
          reportProgress: false
        }, bodyOrParams), req.options));
      };

      var mergeHeaders = function mergeHeaders(source, destination) {
        if (source && destination) {
          var merged = destination.keys().reduce(function (headers, name) {
            return headers.set(name, destination.getAll(name));
          }, source);
          return merged;
        }

        return destination || source;
      };

      function prioritize() {
        for (var _len7 = arguments.length, values = new Array(_len7), _key8 = 0; _key8 < _len7; _key8++) {
          values[_key8] = arguments[_key8];
        }

        var picked = values.find(function (val) {
          return typeof val !== 'undefined';
        });

        if (typeof picked === 'undefined') {
          return values[values.length - 1];
        }

        return picked;
      }

      function createHeadersWithClientAwereness(context) {
        // `apollographql-client-*` headers are automatically set if a
        // `clientAwareness` object is found in the context. These headers are
        // set first, followed by the rest of the headers pulled from
        // `context.headers`.
        var headers = context.headers && context.headers instanceof _angular_common_http__WEBPACK_IMPORTED_MODULE_1__.HttpHeaders ? context.headers : new _angular_common_http__WEBPACK_IMPORTED_MODULE_1__.HttpHeaders(context.headers);

        if (context.clientAwareness) {
          var _context$clientAwaren = context.clientAwareness,
              name = _context$clientAwaren.name,
              version = _context$clientAwaren.version; // If desired, `apollographql-client-*` headers set by
          // the `clientAwareness` object can be overridden by
          // `apollographql-client-*` headers set in `context.headers`.

          if (name && !headers.has('apollographql-client-name')) {
            headers = headers.set('apollographql-client-name', name);
          }

          if (version && !headers.has('apollographql-client-version')) {
            headers = headers.set('apollographql-client-version', version);
          }
        }

        return headers;
      } // XXX find a better name for it


      var _HttpLinkHandler = /*#__PURE__*/function (_apollo_client_core__) {
        _inherits(_HttpLinkHandler, _apollo_client_core__);

        var _super18 = _createSuper(_HttpLinkHandler);

        function _HttpLinkHandler(httpClient, options) {
          var _this80;

          _classCallCheck(this, _HttpLinkHandler);

          _this80 = _super18.call(this);
          _this80.httpClient = httpClient;
          _this80.options = options;
          _this80.print = graphql__WEBPACK_IMPORTED_MODULE_2__.print;

          if (_this80.options.operationPrinter) {
            _this80.print = _this80.options.operationPrinter;
          }

          _this80.requester = function (operation) {
            return new _apollo_client_core__WEBPACK_IMPORTED_MODULE_5__.Observable(function (observer) {
              var context = operation.getContext(); // decides which value to pick, Context, Options or to just use the default

              var pick = function pick(key, init) {
                return prioritize(context[key], _this80.options[key], init);
              };

              var includeQuery = pick('includeQuery', true);
              var includeExtensions = pick('includeExtensions', false);
              var method = pick('method', 'POST');
              var url = pick('uri', 'graphql');
              var withCredentials = pick('withCredentials');
              var useMultipart = pick('useMultipart');
              var req = {
                method: method,
                url: typeof url === 'function' ? url(operation) : url,
                body: {
                  operationName: operation.operationName,
                  variables: operation.variables
                },
                options: {
                  withCredentials: withCredentials,
                  useMultipart: useMultipart,
                  headers: _this80.options.headers
                }
              };

              if (includeExtensions) {
                req.body.extensions = operation.extensions;
              }

              if (includeQuery) {
                req.body.query = _this80.print(operation.query);
              }

              var headers = createHeadersWithClientAwereness(context);
              req.options.headers = mergeHeaders(req.options.headers, headers);
              var sub = fetch(req, _this80.httpClient, extract_files__WEBPACK_IMPORTED_MODULE_6___default()).subscribe({
                next: function next(response) {
                  operation.setContext({
                    response: response
                  });
                  observer.next(response.body);
                },
                error: function error(err) {
                  return observer.error(err);
                },
                complete: function complete() {
                  return observer.complete();
                }
              });
              return function () {
                if (!sub.closed) {
                  sub.unsubscribe();
                }
              };
            });
          };

          return _this80;
        }

        _createClass2(_HttpLinkHandler, [{
          key: "request",
          value: function request(op) {
            return this.requester(op);
          }
        }]);

        return _HttpLinkHandler;
      }(_apollo_client_core__WEBPACK_IMPORTED_MODULE_4__.ApolloLink);

      var _HttpLink = /*#__PURE__*/function () {
        var HttpLink = /*#__PURE__*/function () {
          function HttpLink(httpClient) {
            _classCallCheck(this, HttpLink);

            this.httpClient = httpClient;
          }

          _createClass2(HttpLink, [{
            key: "create",
            value: function create(options) {
              return new _HttpLinkHandler(this.httpClient, options);
            }
          }]);

          return HttpLink;
        }();

        HttpLink.ɵfac = function HttpLink_Factory(t) {
          return new (t || HttpLink)(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](_angular_common_http__WEBPACK_IMPORTED_MODULE_1__.HttpClient));
        };

        HttpLink.ɵprov = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineInjectable"]({
          factory: function HttpLink_Factory() {
            return new HttpLink(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](_angular_common_http__WEBPACK_IMPORTED_MODULE_1__.HttpClient));
          },
          token: HttpLink,
          providedIn: "root"
        });
        return HttpLink;
      }();

      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();

      var defaults = {
        batchInterval: 10,
        batchMax: 10,
        uri: 'graphql',
        method: 'POST'
      };

      var _HttpBatchLinkHandler = /*#__PURE__*/function (_apollo_client_core__2) {
        _inherits(_HttpBatchLinkHandler, _apollo_client_core__2);

        var _super19 = _createSuper(_HttpBatchLinkHandler);

        function _HttpBatchLinkHandler(httpClient, options) {
          var _this81;

          _classCallCheck(this, _HttpBatchLinkHandler);

          _this81 = _super19.call(this);
          _this81.httpClient = httpClient;
          _this81.options = options;
          _this81.print = graphql__WEBPACK_IMPORTED_MODULE_2__.print;
          _this81.batchInterval = options.batchInterval || defaults.batchInterval;
          _this81.batchMax = options.batchMax || defaults.batchMax;

          if (_this81.options.operationPrinter) {
            _this81.print = _this81.options.operationPrinter;
          }

          var batchHandler = function batchHandler(operations) {
            return new _apollo_client_core__WEBPACK_IMPORTED_MODULE_5__.Observable(function (observer) {
              var body = _this81.createBody(operations);

              var headers = _this81.createHeaders(operations);

              var _this81$createOptions = _this81.createOptions(operations),
                  method = _this81$createOptions.method,
                  uri = _this81$createOptions.uri,
                  withCredentials = _this81$createOptions.withCredentials;

              if (typeof uri === 'function') {
                throw new Error("Option 'uri' is a function, should be a string");
              }

              var req = {
                method: method,
                url: uri,
                body: body,
                options: {
                  withCredentials: withCredentials,
                  headers: headers
                }
              };
              var sub = fetch(req, _this81.httpClient, function () {
                throw new Error('File upload is not available when combined with Batching');
              }).subscribe({
                next: function next(result) {
                  return observer.next(result.body);
                },
                error: function error(err) {
                  return observer.error(err);
                },
                complete: function complete() {
                  return observer.complete();
                }
              });
              return function () {
                if (!sub.closed) {
                  sub.unsubscribe();
                }
              };
            });
          };

          var batchKey = options.batchKey || function (operation) {
            return _this81.createBatchKey(operation);
          };

          _this81.batcher = new _apollo_client_link_batch__WEBPACK_IMPORTED_MODULE_7__.BatchLink({
            batchInterval: _this81.batchInterval,
            batchMax: _this81.batchMax,
            batchKey: batchKey,
            batchHandler: batchHandler
          });
          return _this81;
        }

        _createClass2(_HttpBatchLinkHandler, [{
          key: "createOptions",
          value: function createOptions(operations) {
            var context = operations[0].getContext();
            return {
              method: prioritize(context.method, this.options.method, defaults.method),
              uri: prioritize(context.uri, this.options.uri, defaults.uri),
              withCredentials: prioritize(context.withCredentials, this.options.withCredentials)
            };
          }
        }, {
          key: "createBody",
          value: function createBody(operations) {
            var _this82 = this;

            return operations.map(function (operation) {
              var includeExtensions = prioritize(operation.getContext().includeExtensions, _this82.options.includeExtensions, false);
              var includeQuery = prioritize(operation.getContext().includeQuery, _this82.options.includeQuery, true);
              var body = {
                operationName: operation.operationName,
                variables: operation.variables
              };

              if (includeExtensions) {
                body.extensions = operation.extensions;
              }

              if (includeQuery) {
                body.query = _this82.print(operation.query);
              }

              return body;
            });
          }
        }, {
          key: "createHeaders",
          value: function createHeaders(operations) {
            var _a, _b;

            return operations.reduce(function (headers, operation) {
              return mergeHeaders(headers, operation.getContext().headers);
            }, createHeadersWithClientAwereness({
              headers: this.options.headers,
              clientAwareness: (_b = (_a = operations[0]) === null || _a === void 0 ? void 0 : _a.getContext()) === null || _b === void 0 ? void 0 : _b.clientAwareness
            }));
          }
        }, {
          key: "createBatchKey",
          value: function createBatchKey(operation) {
            var context = operation.getContext();

            if (context.skipBatching) {
              return Math.random().toString(36).substr(2, 9);
            }

            var headers = context.headers && context.headers.keys().map(function (k) {
              return context.headers.get(k);
            });
            var opts = JSON.stringify({
              includeQuery: context.includeQuery,
              includeExtensions: context.includeExtensions,
              headers: headers
            });
            return prioritize(context.uri, this.options.uri) + opts;
          }
        }, {
          key: "request",
          value: function request(op) {
            return this.batcher.request(op);
          }
        }]);

        return _HttpBatchLinkHandler;
      }(_apollo_client_core__WEBPACK_IMPORTED_MODULE_4__.ApolloLink);

      var _HttpBatchLink = /*#__PURE__*/function () {
        var HttpBatchLink = /*#__PURE__*/function () {
          function HttpBatchLink(httpClient) {
            _classCallCheck(this, HttpBatchLink);

            this.httpClient = httpClient;
          }

          _createClass2(HttpBatchLink, [{
            key: "create",
            value: function create(options) {
              return new _HttpBatchLinkHandler(this.httpClient, options);
            }
          }]);

          return HttpBatchLink;
        }();

        HttpBatchLink.ɵfac = function HttpBatchLink_Factory(t) {
          return new (t || HttpBatchLink)(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](_angular_common_http__WEBPACK_IMPORTED_MODULE_1__.HttpClient));
        };

        HttpBatchLink.ɵprov = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineInjectable"]({
          factory: function HttpBatchLink_Factory() {
            return new HttpBatchLink(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](_angular_common_http__WEBPACK_IMPORTED_MODULE_1__.HttpClient));
          },
          token: HttpBatchLink,
          providedIn: "root"
        });
        return HttpBatchLink;
      }();

      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })(); // http

      /**
       * Generated bundle index. Do not edit.
       */

      /***/

    },

    /***/
    89101: function _(module) {
      module.exports = function ReactNativeFile(_ref) {
        var uri = _ref.uri,
            name = _ref.name,
            type = _ref.type;
        this.uri = uri;
        this.name = name;
        this.type = type;
      };
      /***/

    },

    /***/
    88312: function _(module, __unused_webpack_exports, __webpack_require__) {
      var defaultIsExtractableFile = __webpack_require__(
      /*! ./isExtractableFile */
      37275);

      module.exports = function extractFiles(value, path, isExtractableFile) {
        if (path === void 0) {
          path = '';
        }

        if (isExtractableFile === void 0) {
          isExtractableFile = defaultIsExtractableFile;
        }

        var clone;
        var files = new Map();

        function addFile(paths, file) {
          var storedPaths = files.get(file);
          if (storedPaths) storedPaths.push.apply(storedPaths, paths);else files.set(file, paths);
        }

        if (isExtractableFile(value)) {
          clone = null;
          addFile([path], value);
        } else {
          var prefix = path ? path + '.' : '';
          if (typeof FileList !== 'undefined' && value instanceof FileList) clone = Array.prototype.map.call(value, function (file, i) {
            addFile(['' + prefix + i], file);
            return null;
          });else if (Array.isArray(value)) clone = value.map(function (child, i) {
            var result = extractFiles(child, '' + prefix + i, isExtractableFile);
            result.files.forEach(addFile);
            return result.clone;
          });else if (value && value.constructor === Object) {
            clone = {};

            for (var i in value) {
              var result = extractFiles(value[i], '' + prefix + i, isExtractableFile);
              result.files.forEach(addFile);
              clone[i] = result.clone;
            }
          } else clone = value;
        }

        return {
          clone: clone,
          files: files
        };
      };
      /***/

    },

    /***/
    37275: function _(module, __unused_webpack_exports, __webpack_require__) {
      var ReactNativeFile = __webpack_require__(
      /*! ./ReactNativeFile */
      89101);

      module.exports = function isExtractableFile(value) {
        return typeof File !== 'undefined' && value instanceof File || typeof Blob !== 'undefined' && value instanceof Blob || value instanceof ReactNativeFile;
      };
      /***/

    },

    /***/
    65016: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "KeyTrie": function KeyTrie() {
          return (
            /* reexport safe */
            _wry_trie__WEBPACK_IMPORTED_MODULE_0__.Trie
          );
        },

        /* harmony export */
        "asyncFromGen": function asyncFromGen() {
          return (
            /* reexport safe */
            _wry_context__WEBPACK_IMPORTED_MODULE_1__.asyncFromGen
          );
        },

        /* harmony export */
        "bindContext": function bindContext() {
          return (
            /* reexport safe */
            _wry_context__WEBPACK_IMPORTED_MODULE_1__.bind
          );
        },

        /* harmony export */
        "noContext": function noContext() {
          return (
            /* reexport safe */
            _wry_context__WEBPACK_IMPORTED_MODULE_1__.noContext
          );
        },

        /* harmony export */
        "setTimeout": function setTimeout() {
          return (
            /* reexport safe */
            _wry_context__WEBPACK_IMPORTED_MODULE_1__.setTimeout
          );
        },

        /* harmony export */
        "defaultMakeCacheKey": function defaultMakeCacheKey() {
          return (
            /* binding */
            _defaultMakeCacheKey
          );
        },

        /* harmony export */
        "dep": function dep() {
          return (
            /* binding */
            _dep
          );
        },

        /* harmony export */
        "wrap": function wrap() {
          return (
            /* binding */
            _wrap
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var _wry_trie__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! @wry/trie */
      35217);
      /* harmony import */


      var _wry_context__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! @wry/context */
      85033);

      function defaultDispose() {}

      var Cache = function () {
        function Cache(max, dispose) {
          if (max === void 0) {
            max = Infinity;
          }

          if (dispose === void 0) {
            dispose = defaultDispose;
          }

          this.max = max;
          this.dispose = dispose;
          this.map = new Map();
          this.newest = null;
          this.oldest = null;
        }

        Cache.prototype.has = function (key) {
          return this.map.has(key);
        };

        Cache.prototype.get = function (key) {
          var node = this.getNode(key);
          return node && node.value;
        };

        Cache.prototype.getNode = function (key) {
          var node = this.map.get(key);

          if (node && node !== this.newest) {
            var older = node.older,
                newer = node.newer;

            if (newer) {
              newer.older = older;
            }

            if (older) {
              older.newer = newer;
            }

            node.older = this.newest;
            node.older.newer = node;
            node.newer = null;
            this.newest = node;

            if (node === this.oldest) {
              this.oldest = newer;
            }
          }

          return node;
        };

        Cache.prototype.set = function (key, value) {
          var node = this.getNode(key);

          if (node) {
            return node.value = value;
          }

          node = {
            key: key,
            value: value,
            newer: null,
            older: this.newest
          };

          if (this.newest) {
            this.newest.newer = node;
          }

          this.newest = node;
          this.oldest = this.oldest || node;
          this.map.set(key, node);
          return node.value;
        };

        Cache.prototype.clean = function () {
          while (this.oldest && this.map.size > this.max) {
            this["delete"](this.oldest.key);
          }
        };

        Cache.prototype["delete"] = function (key) {
          var node = this.map.get(key);

          if (node) {
            if (node === this.newest) {
              this.newest = node.older;
            }

            if (node === this.oldest) {
              this.oldest = node.newer;
            }

            if (node.newer) {
              node.newer.older = node.older;
            }

            if (node.older) {
              node.older.newer = node.newer;
            }

            this.map["delete"](key);
            this.dispose(node.value, key);
            return true;
          }

          return false;
        };

        return Cache;
      }();

      var parentEntrySlot = new _wry_context__WEBPACK_IMPORTED_MODULE_1__.Slot();

      var _a;

      var hasOwnProperty = Object.prototype.hasOwnProperty;
      var // This Array.from polyfill is restricted to working with Set<any> for now,
      // but we can improve the polyfill and add other input types, as needed. Note
      // that this fallback implementation will only be used if the host environment
      // does not support a native Array.from function. In most modern JS runtimes,
      // the toArray function exported here will be === Array.from.
      toArray = (_a = Array.from, _a === void 0 ? function (collection) {
        var array = [];
        collection.forEach(function (item) {
          return array.push(item);
        });
        return array;
      } : _a);

      function maybeUnsubscribe(entryOrDep) {
        var unsubscribe = entryOrDep.unsubscribe;

        if (typeof unsubscribe === "function") {
          entryOrDep.unsubscribe = void 0;
          unsubscribe();
        }
      }

      var emptySetPool = [];
      var POOL_TARGET_SIZE = 100; // Since this package might be used browsers, we should avoid using the
      // Node built-in assert module.

      function assert(condition, optionalMessage) {
        if (!condition) {
          throw new Error(optionalMessage || "assertion failure");
        }
      }

      function valueIs(a, b) {
        var len = a.length;
        return (// Unknown values are not equal to each other.
          len > 0 && // Both values must be ordinary (or both exceptional) to be equal.
          len === b.length && // The underlying value or exception must be the same.
          a[len - 1] === b[len - 1]
        );
      }

      function valueGet(value) {
        switch (value.length) {
          case 0:
            throw new Error("unknown value");

          case 1:
            return value[0];

          case 2:
            throw value[1];
        }
      }

      function valueCopy(value) {
        return value.slice(0);
      }

      var Entry = function () {
        function Entry(fn) {
          this.fn = fn;
          this.parents = new Set();
          this.childValues = new Map(); // When this Entry has children that are dirty, this property becomes
          // a Set containing other Entry objects, borrowed from emptySetPool.
          // When the set becomes empty, it gets recycled back to emptySetPool.

          this.dirtyChildren = null;
          this.dirty = true;
          this.recomputing = false;
          this.value = [];
          this.deps = null;
          ++Entry.count;
        }

        Entry.prototype.peek = function () {
          if (this.value.length === 1 && !mightBeDirty(this)) {
            rememberParent(this);
            return this.value[0];
          }
        }; // This is the most important method of the Entry API, because it
        // determines whether the cached this.value can be returned immediately,
        // or must be recomputed. The overall performance of the caching system
        // depends on the truth of the following observations: (1) this.dirty is
        // usually false, (2) this.dirtyChildren is usually null/empty, and thus
        // (3) valueGet(this.value) is usually returned without recomputation.


        Entry.prototype.recompute = function (args) {
          assert(!this.recomputing, "already recomputing");
          rememberParent(this);
          return mightBeDirty(this) ? reallyRecompute(this, args) : valueGet(this.value);
        };

        Entry.prototype.setDirty = function () {
          if (this.dirty) return;
          this.dirty = true;
          this.value.length = 0;
          reportDirty(this); // We can go ahead and unsubscribe here, since any further dirty
          // notifications we receive will be redundant, and unsubscribing may
          // free up some resources, e.g. file watchers.

          maybeUnsubscribe(this);
        };

        Entry.prototype.dispose = function () {
          var _this = this;

          this.setDirty(); // Sever any dependency relationships with our own children, so those
          // children don't retain this parent Entry in their child.parents sets,
          // thereby preventing it from being fully garbage collected.

          forgetChildren(this); // Because this entry has been kicked out of the cache (in index.js),
          // we've lost the ability to find out if/when this entry becomes dirty,
          // whether that happens through a subscription, because of a direct call
          // to entry.setDirty(), or because one of its children becomes dirty.
          // Because of this loss of future information, we have to assume the
          // worst (that this entry might have become dirty very soon), so we must
          // immediately mark this entry's parents as dirty. Normally we could
          // just call entry.setDirty() rather than calling parent.setDirty() for
          // each parent, but that would leave this entry in parent.childValues
          // and parent.dirtyChildren, which would prevent the child from being
          // truly forgotten.

          eachParent(this, function (parent, child) {
            parent.setDirty();
            forgetChild(parent, _this);
          });
        };

        Entry.prototype.forget = function () {
          // The code that creates Entry objects in index.ts will replace this method
          // with one that actually removes the Entry from the cache, which will also
          // trigger the entry.dispose method.
          this.dispose();
        };

        Entry.prototype.dependOn = function (dep) {
          dep.add(this);

          if (!this.deps) {
            this.deps = emptySetPool.pop() || new Set();
          }

          this.deps.add(dep);
        };

        Entry.prototype.forgetDeps = function () {
          var _this = this;

          if (this.deps) {
            toArray(this.deps).forEach(function (dep) {
              return dep["delete"](_this);
            });
            this.deps.clear();
            emptySetPool.push(this.deps);
            this.deps = null;
          }
        };

        Entry.count = 0;
        return Entry;
      }();

      function rememberParent(child) {
        var parent = parentEntrySlot.getValue();

        if (parent) {
          child.parents.add(parent);

          if (!parent.childValues.has(child)) {
            parent.childValues.set(child, []);
          }

          if (mightBeDirty(child)) {
            reportDirtyChild(parent, child);
          } else {
            reportCleanChild(parent, child);
          }

          return parent;
        }
      }

      function reallyRecompute(entry, args) {
        forgetChildren(entry); // Set entry as the parent entry while calling recomputeNewValue(entry).

        parentEntrySlot.withValue(entry, recomputeNewValue, [entry, args]);

        if (maybeSubscribe(entry, args)) {
          // If we successfully recomputed entry.value and did not fail to
          // (re)subscribe, then this Entry is no longer explicitly dirty.
          setClean(entry);
        }

        return valueGet(entry.value);
      }

      function recomputeNewValue(entry, args) {
        entry.recomputing = true; // Set entry.value as unknown.

        entry.value.length = 0;

        try {
          // If entry.fn succeeds, entry.value will become a normal Value.
          entry.value[0] = entry.fn.apply(null, args);
        } catch (e) {
          // If entry.fn throws, entry.value will become exceptional.
          entry.value[1] = e;
        } // Either way, this line is always reached.


        entry.recomputing = false;
      }

      function mightBeDirty(entry) {
        return entry.dirty || !!(entry.dirtyChildren && entry.dirtyChildren.size);
      }

      function setClean(entry) {
        entry.dirty = false;

        if (mightBeDirty(entry)) {
          // This Entry may still have dirty children, in which case we can't
          // let our parents know we're clean just yet.
          return;
        }

        reportClean(entry);
      }

      function reportDirty(child) {
        eachParent(child, reportDirtyChild);
      }

      function reportClean(child) {
        eachParent(child, reportCleanChild);
      }

      function eachParent(child, callback) {
        var parentCount = child.parents.size;

        if (parentCount) {
          var parents = toArray(child.parents);

          for (var i = 0; i < parentCount; ++i) {
            callback(parents[i], child);
          }
        }
      } // Let a parent Entry know that one of its children may be dirty.


      function reportDirtyChild(parent, child) {
        // Must have called rememberParent(child) before calling
        // reportDirtyChild(parent, child).
        assert(parent.childValues.has(child));
        assert(mightBeDirty(child));
        var parentWasClean = !mightBeDirty(parent);

        if (!parent.dirtyChildren) {
          parent.dirtyChildren = emptySetPool.pop() || new Set();
        } else if (parent.dirtyChildren.has(child)) {
          // If we already know this child is dirty, then we must have already
          // informed our own parents that we are dirty, so we can terminate
          // the recursion early.
          return;
        }

        parent.dirtyChildren.add(child); // If parent was clean before, it just became (possibly) dirty (according to
        // mightBeDirty), since we just added child to parent.dirtyChildren.

        if (parentWasClean) {
          reportDirty(parent);
        }
      } // Let a parent Entry know that one of its children is no longer dirty.


      function reportCleanChild(parent, child) {
        // Must have called rememberChild(child) before calling
        // reportCleanChild(parent, child).
        assert(parent.childValues.has(child));
        assert(!mightBeDirty(child));
        var childValue = parent.childValues.get(child);

        if (childValue.length === 0) {
          parent.childValues.set(child, valueCopy(child.value));
        } else if (!valueIs(childValue, child.value)) {
          parent.setDirty();
        }

        removeDirtyChild(parent, child);

        if (mightBeDirty(parent)) {
          return;
        }

        reportClean(parent);
      }

      function removeDirtyChild(parent, child) {
        var dc = parent.dirtyChildren;

        if (dc) {
          dc["delete"](child);

          if (dc.size === 0) {
            if (emptySetPool.length < POOL_TARGET_SIZE) {
              emptySetPool.push(dc);
            }

            parent.dirtyChildren = null;
          }
        }
      } // Removes all children from this entry and returns an array of the
      // removed children.


      function forgetChildren(parent) {
        if (parent.childValues.size > 0) {
          parent.childValues.forEach(function (_value, child) {
            forgetChild(parent, child);
          });
        } // Remove this parent Entry from any sets to which it was added by the
        // addToSet method.


        parent.forgetDeps(); // After we forget all our children, this.dirtyChildren must be empty
        // and therefore must have been reset to null.

        assert(parent.dirtyChildren === null);
      }

      function forgetChild(parent, child) {
        child.parents["delete"](parent);
        parent.childValues["delete"](child);
        removeDirtyChild(parent, child);
      }

      function maybeSubscribe(entry, args) {
        if (typeof entry.subscribe === "function") {
          try {
            maybeUnsubscribe(entry); // Prevent double subscriptions.

            entry.unsubscribe = entry.subscribe.apply(null, args);
          } catch (e) {
            // If this Entry has a subscribe function and it threw an exception
            // (or an unsubscribe function it previously returned now throws),
            // return false to indicate that we were not able to subscribe (or
            // unsubscribe), and this Entry should remain dirty.
            entry.setDirty();
            return false;
          }
        } // Returning true indicates either that there was no entry.subscribe
        // function or that it succeeded.


        return true;
      }

      var EntryMethods = {
        setDirty: true,
        dispose: true,
        forget: true
      };

      function _dep(options) {
        var depsByKey = new Map();
        var subscribe = options && options.subscribe;

        function depend(key) {
          var parent = parentEntrySlot.getValue();

          if (parent) {
            var dep_1 = depsByKey.get(key);

            if (!dep_1) {
              depsByKey.set(key, dep_1 = new Set());
            }

            parent.dependOn(dep_1);

            if (typeof subscribe === "function") {
              maybeUnsubscribe(dep_1);
              dep_1.unsubscribe = subscribe(key);
            }
          }
        }

        depend.dirty = function dirty(key, entryMethodName) {
          var dep = depsByKey.get(key);

          if (dep) {
            var m_1 = entryMethodName && hasOwnProperty.call(EntryMethods, entryMethodName) ? entryMethodName : "setDirty"; // We have to use toArray(dep).forEach instead of dep.forEach, because
            // modifying a Set while iterating over it can cause elements in the Set
            // to be removed from the Set before they've been iterated over.

            toArray(dep).forEach(function (entry) {
              return entry[m_1]();
            });
            depsByKey["delete"](key);
            maybeUnsubscribe(dep);
          }
        };

        return depend;
      }

      function makeDefaultMakeCacheKeyFunction() {
        var keyTrie = new _wry_trie__WEBPACK_IMPORTED_MODULE_0__.Trie(typeof WeakMap === "function");
        return function () {
          return keyTrie.lookupArray(arguments);
        };
      } // The defaultMakeCacheKey function is remarkably powerful, because it gives
      // a unique object for any shallow-identical list of arguments. If you need
      // to implement a custom makeCacheKey function, you may find it helpful to
      // delegate the final work to defaultMakeCacheKey, which is why we export it
      // here. However, you may want to avoid defaultMakeCacheKey if your runtime
      // does not support WeakMap, or you have the ability to return a string key.
      // In those cases, just write your own custom makeCacheKey functions.


      var _defaultMakeCacheKey = makeDefaultMakeCacheKeyFunction();

      var caches = new Set();

      function _wrap(originalFunction, options) {
        if (options === void 0) {
          options = Object.create(null);
        }

        var cache = new Cache(options.max || Math.pow(2, 16), function (entry) {
          return entry.dispose();
        });
        var keyArgs = options.keyArgs;
        var makeCacheKey = options.makeCacheKey || makeDefaultMakeCacheKeyFunction();

        var optimistic = function optimistic() {
          var key = makeCacheKey.apply(null, keyArgs ? keyArgs.apply(null, arguments) : arguments);

          if (key === void 0) {
            return originalFunction.apply(null, arguments);
          }

          var entry = cache.get(key);

          if (!entry) {
            cache.set(key, entry = new Entry(originalFunction));
            entry.subscribe = options.subscribe; // Give the Entry the ability to trigger cache.delete(key), even though
            // the Entry itself does not know about key or cache.

            entry.forget = function () {
              return cache["delete"](key);
            };
          }

          var value = entry.recompute(Array.prototype.slice.call(arguments)); // Move this entry to the front of the least-recently used queue,
          // since we just finished computing its value.

          cache.set(key, entry);
          caches.add(cache); // Clean up any excess entries in the cache, but only if there is no
          // active parent entry, meaning we're not in the middle of a larger
          // computation that might be flummoxed by the cleaning.

          if (!parentEntrySlot.hasValue()) {
            caches.forEach(function (cache) {
              return cache.clean();
            });
            caches.clear();
          }

          return value;
        };

        Object.defineProperty(optimistic, "size", {
          get: function get() {
            return cache["map"].size;
          },
          configurable: false,
          enumerable: false
        });

        function dirtyKey(key) {
          var entry = cache.get(key);

          if (entry) {
            entry.setDirty();
          }
        }

        optimistic.dirtyKey = dirtyKey;

        optimistic.dirty = function dirty() {
          dirtyKey(makeCacheKey.apply(null, arguments));
        };

        function peekKey(key) {
          var entry = cache.get(key);

          if (entry) {
            return entry.peek();
          }
        }

        optimistic.peekKey = peekKey;

        optimistic.peek = function peek() {
          return peekKey(makeCacheKey.apply(null, arguments));
        };

        function forgetKey(key) {
          return cache["delete"](key);
        }

        optimistic.forgetKey = forgetKey;

        optimistic.forget = function forget() {
          return forgetKey(makeCacheKey.apply(null, arguments));
        };

        optimistic.makeCacheKey = makeCacheKey;
        optimistic.getKey = keyArgs ? function getKey() {
          return makeCacheKey.apply(null, keyArgs.apply(null, arguments));
        } : makeCacheKey;
        return Object.freeze(optimistic);
      }
      /***/

    },

    /***/
    68247: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "InvariantError": function InvariantError() {
          return (
            /* binding */
            _InvariantError
          );
        },

        /* harmony export */
        "default": function _default() {
          return (
            /* binding */
            invariant$1
          );
        },

        /* harmony export */
        "invariant": function invariant() {
          return (
            /* binding */
            _invariant
          );
        },

        /* harmony export */
        "setVerbosity": function setVerbosity() {
          return (
            /* binding */
            _setVerbosity
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! tslib */
      75545);

      var genericMessage = "Invariant Violation";
      var _a = Object.setPrototypeOf,
          setPrototypeOf = _a === void 0 ? function (obj, proto) {
        obj.__proto__ = proto;
        return obj;
      } : _a;

      var _InvariantError = function (_super) {
        (0, tslib__WEBPACK_IMPORTED_MODULE_0__.__extends)(InvariantError, _super);

        function InvariantError(message) {
          if (message === void 0) {
            message = genericMessage;
          }

          var _this = _super.call(this, typeof message === "number" ? genericMessage + ": " + message + " (see https://github.com/apollographql/invariant-packages)" : message) || this;

          _this.framesToPop = 1;
          _this.name = genericMessage;
          setPrototypeOf(_this, InvariantError.prototype);
          return _this;
        }

        return InvariantError;
      }(Error);

      function _invariant(condition, message) {
        if (!condition) {
          throw new _InvariantError(message);
        }
      }

      var verbosityLevels = ["debug", "log", "warn", "error", "silent"];
      var verbosityLevel = verbosityLevels.indexOf("log");

      function wrapConsoleMethod(name) {
        return function () {
          if (verbosityLevels.indexOf(name) >= verbosityLevel) {
            // Default to console.log if this host environment happens not to provide
            // all the console.* methods we need.
            var method = console[name] || console.log;
            return method.apply(console, arguments);
          }
        };
      }

      (function (invariant) {
        invariant.debug = wrapConsoleMethod("debug");
        invariant.log = wrapConsoleMethod("log");
        invariant.warn = wrapConsoleMethod("warn");
        invariant.error = wrapConsoleMethod("error");
      })(_invariant || (_invariant = {}));

      function _setVerbosity(level) {
        var old = verbosityLevels[verbosityLevel];
        verbosityLevel = Math.max(0, verbosityLevels.indexOf(level));
        return old;
      }

      var invariant$1 = _invariant;
      /***/
    },

    /***/
    26045: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "install": function install() {
          return (
            /* binding */
            _install
          );
        },

        /* harmony export */
        "remove": function remove() {
          return (
            /* binding */
            _remove
          );
        }
        /* harmony export */

      });

      function maybe(thunk) {
        try {
          return thunk();
        } catch (_) {}
      }

      var safeGlobal = maybe(function () {
        return globalThis;
      }) || maybe(function () {
        return window;
      }) || maybe(function () {
        return self;
      }) || maybe(function () {
        return global;
      }) || maybe(function () {
        return Function("return this")();
      });
      var needToRemove = false;

      function _install() {
        if (safeGlobal && !maybe(function () {
          return "development";
        }) && !maybe(function () {
          return process;
        })) {
          Object.defineProperty(safeGlobal, "process", {
            value: {
              env: {
                // This default needs to be "production" instead of "development", to
                // avoid the problem https://github.com/graphql/graphql-js/pull/2894
                // will eventually solve, once merged and released.
                NODE_ENV: "production"
              }
            },
            // Let anyone else change global.process as they see fit, but hide it from
            // Object.keys(global) enumeration.
            configurable: true,
            enumerable: false,
            writable: true
          });
          needToRemove = true;
        }
      } // Call install() at least once, when this module is imported.


      _install();

      function _remove() {
        if (needToRemove) {
          delete safeGlobal.process;
          needToRemove = false;
        }
      }
      /***/

    },

    /***/
    77669: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "Observable": function Observable() {
          return (
            /* binding */
            _Observable
          );
        }
        /* harmony export */

      });

      function _createForOfIteratorHelperLoose(o, allowArrayLike) {
        var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"];
        if (it) return (it = it.call(o)).next.bind(it);

        if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") {
          if (it) o = it;
          var i = 0;
          return function () {
            if (i >= o.length) return {
              done: true
            };
            return {
              done: false,
              value: o[i++]
            };
          };
        }

        throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
      }

      function _unsupportedIterableToArray(o, minLen) {
        if (!o) return;
        if (typeof o === "string") return _arrayLikeToArray(o, minLen);
        var n = Object.prototype.toString.call(o).slice(8, -1);
        if (n === "Object" && o.constructor) n = o.constructor.name;
        if (n === "Map" || n === "Set") return Array.from(o);
        if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen);
      }

      function _arrayLikeToArray(arr, len) {
        if (len == null || len > arr.length) len = arr.length;

        for (var i = 0, arr2 = new Array(len); i < len; i++) {
          arr2[i] = arr[i];
        }

        return arr2;
      }

      function _defineProperties(target, props) {
        for (var i = 0; i < props.length; i++) {
          var descriptor = props[i];
          descriptor.enumerable = descriptor.enumerable || false;
          descriptor.configurable = true;
          if ("value" in descriptor) descriptor.writable = true;
          Object.defineProperty(target, descriptor.key, descriptor);
        }
      }

      function _createClass(Constructor, protoProps, staticProps) {
        if (protoProps) _defineProperties(Constructor.prototype, protoProps);
        if (staticProps) _defineProperties(Constructor, staticProps);
        return Constructor;
      } // === Symbol Support ===


      var hasSymbols = function hasSymbols() {
        return typeof Symbol === 'function';
      };

      var hasSymbol = function hasSymbol(name) {
        return hasSymbols() && Boolean(Symbol[name]);
      };

      var getSymbol = function getSymbol(name) {
        return hasSymbol(name) ? Symbol[name] : '@@' + name;
      };

      if (hasSymbols() && !hasSymbol('observable')) {
        Symbol.observable = Symbol('observable');
      }

      var SymbolIterator = getSymbol('iterator');
      var SymbolObservable = getSymbol('observable');
      var SymbolSpecies = getSymbol('species'); // === Abstract Operations ===

      function getMethod(obj, key) {
        var value = obj[key];
        if (value == null) return undefined;
        if (typeof value !== 'function') throw new TypeError(value + ' is not a function');
        return value;
      }

      function getSpecies(obj) {
        var ctor = obj.constructor;

        if (ctor !== undefined) {
          ctor = ctor[SymbolSpecies];

          if (ctor === null) {
            ctor = undefined;
          }
        }

        return ctor !== undefined ? ctor : _Observable;
      }

      function isObservable(x) {
        return x instanceof _Observable; // SPEC: Brand check
      }

      function hostReportError(e) {
        if (hostReportError.log) {
          hostReportError.log(e);
        } else {
          setTimeout(function () {
            throw e;
          });
        }
      }

      function enqueue(fn) {
        Promise.resolve().then(function () {
          try {
            fn();
          } catch (e) {
            hostReportError(e);
          }
        });
      }

      function cleanupSubscription(subscription) {
        var cleanup = subscription._cleanup;
        if (cleanup === undefined) return;
        subscription._cleanup = undefined;

        if (!cleanup) {
          return;
        }

        try {
          if (typeof cleanup === 'function') {
            cleanup();
          } else {
            var unsubscribe = getMethod(cleanup, 'unsubscribe');

            if (unsubscribe) {
              unsubscribe.call(cleanup);
            }
          }
        } catch (e) {
          hostReportError(e);
        }
      }

      function closeSubscription(subscription) {
        subscription._observer = undefined;
        subscription._queue = undefined;
        subscription._state = 'closed';
      }

      function flushSubscription(subscription) {
        var queue = subscription._queue;

        if (!queue) {
          return;
        }

        subscription._queue = undefined;
        subscription._state = 'ready';

        for (var i = 0; i < queue.length; ++i) {
          notifySubscription(subscription, queue[i].type, queue[i].value);
          if (subscription._state === 'closed') break;
        }
      }

      function notifySubscription(subscription, type, value) {
        subscription._state = 'running';
        var observer = subscription._observer;

        try {
          var m = getMethod(observer, type);

          switch (type) {
            case 'next':
              if (m) m.call(observer, value);
              break;

            case 'error':
              closeSubscription(subscription);
              if (m) m.call(observer, value);else throw value;
              break;

            case 'complete':
              closeSubscription(subscription);
              if (m) m.call(observer);
              break;
          }
        } catch (e) {
          hostReportError(e);
        }

        if (subscription._state === 'closed') cleanupSubscription(subscription);else if (subscription._state === 'running') subscription._state = 'ready';
      }

      function onNotify(subscription, type, value) {
        if (subscription._state === 'closed') return;

        if (subscription._state === 'buffering') {
          subscription._queue.push({
            type: type,
            value: value
          });

          return;
        }

        if (subscription._state !== 'ready') {
          subscription._state = 'buffering';
          subscription._queue = [{
            type: type,
            value: value
          }];
          enqueue(function () {
            return flushSubscription(subscription);
          });
          return;
        }

        notifySubscription(subscription, type, value);
      }

      var Subscription = /*#__PURE__*/function () {
        function Subscription(observer, subscriber) {
          // ASSERT: observer is an object
          // ASSERT: subscriber is callable
          this._cleanup = undefined;
          this._observer = observer;
          this._queue = undefined;
          this._state = 'initializing';
          var subscriptionObserver = new SubscriptionObserver(this);

          try {
            this._cleanup = subscriber.call(undefined, subscriptionObserver);
          } catch (e) {
            subscriptionObserver.error(e);
          }

          if (this._state === 'initializing') this._state = 'ready';
        }

        var _proto = Subscription.prototype;

        _proto.unsubscribe = function unsubscribe() {
          if (this._state !== 'closed') {
            closeSubscription(this);
            cleanupSubscription(this);
          }
        };

        _createClass(Subscription, [{
          key: "closed",
          get: function get() {
            return this._state === 'closed';
          }
        }]);

        return Subscription;
      }();

      var SubscriptionObserver = /*#__PURE__*/function () {
        function SubscriptionObserver(subscription) {
          this._subscription = subscription;
        }

        var _proto2 = SubscriptionObserver.prototype;

        _proto2.next = function next(value) {
          onNotify(this._subscription, 'next', value);
        };

        _proto2.error = function error(value) {
          onNotify(this._subscription, 'error', value);
        };

        _proto2.complete = function complete() {
          onNotify(this._subscription, 'complete');
        };

        _createClass(SubscriptionObserver, [{
          key: "closed",
          get: function get() {
            return this._subscription._state === 'closed';
          }
        }]);

        return SubscriptionObserver;
      }();

      var _Observable = /*#__PURE__*/function () {
        function Observable(subscriber) {
          if (!(this instanceof Observable)) throw new TypeError('Observable cannot be called as a function');
          if (typeof subscriber !== 'function') throw new TypeError('Observable initializer must be a function');
          this._subscriber = subscriber;
        }

        var _proto3 = Observable.prototype;

        _proto3.subscribe = function subscribe(observer) {
          if (typeof observer !== 'object' || observer === null) {
            observer = {
              next: observer,
              error: arguments[1],
              complete: arguments[2]
            };
          }

          return new Subscription(observer, this._subscriber);
        };

        _proto3.forEach = function forEach(fn) {
          var _this = this;

          return new Promise(function (resolve, reject) {
            if (typeof fn !== 'function') {
              reject(new TypeError(fn + ' is not a function'));
              return;
            }

            function done() {
              subscription.unsubscribe();
              resolve();
            }

            var subscription = _this.subscribe({
              next: function next(value) {
                try {
                  fn(value, done);
                } catch (e) {
                  reject(e);
                  subscription.unsubscribe();
                }
              },
              error: reject,
              complete: resolve
            });
          });
        };

        _proto3.map = function map(fn) {
          var _this2 = this;

          if (typeof fn !== 'function') throw new TypeError(fn + ' is not a function');
          var C = getSpecies(this);
          return new C(function (observer) {
            return _this2.subscribe({
              next: function next(value) {
                try {
                  value = fn(value);
                } catch (e) {
                  return observer.error(e);
                }

                observer.next(value);
              },
              error: function error(e) {
                observer.error(e);
              },
              complete: function complete() {
                observer.complete();
              }
            });
          });
        };

        _proto3.filter = function filter(fn) {
          var _this3 = this;

          if (typeof fn !== 'function') throw new TypeError(fn + ' is not a function');
          var C = getSpecies(this);
          return new C(function (observer) {
            return _this3.subscribe({
              next: function next(value) {
                try {
                  if (!fn(value)) return;
                } catch (e) {
                  return observer.error(e);
                }

                observer.next(value);
              },
              error: function error(e) {
                observer.error(e);
              },
              complete: function complete() {
                observer.complete();
              }
            });
          });
        };

        _proto3.reduce = function reduce(fn) {
          var _this4 = this;

          if (typeof fn !== 'function') throw new TypeError(fn + ' is not a function');
          var C = getSpecies(this);
          var hasSeed = arguments.length > 1;
          var hasValue = false;
          var seed = arguments[1];
          var acc = seed;
          return new C(function (observer) {
            return _this4.subscribe({
              next: function next(value) {
                var first = !hasValue;
                hasValue = true;

                if (!first || hasSeed) {
                  try {
                    acc = fn(acc, value);
                  } catch (e) {
                    return observer.error(e);
                  }
                } else {
                  acc = value;
                }
              },
              error: function error(e) {
                observer.error(e);
              },
              complete: function complete() {
                if (!hasValue && !hasSeed) return observer.error(new TypeError('Cannot reduce an empty sequence'));
                observer.next(acc);
                observer.complete();
              }
            });
          });
        };

        _proto3.concat = function concat() {
          var _this5 = this;

          for (var _len = arguments.length, sources = new Array(_len), _key = 0; _key < _len; _key++) {
            sources[_key] = arguments[_key];
          }

          var C = getSpecies(this);
          return new C(function (observer) {
            var subscription;
            var index = 0;

            function startNext(next) {
              subscription = next.subscribe({
                next: function next(v) {
                  observer.next(v);
                },
                error: function error(e) {
                  observer.error(e);
                },
                complete: function complete() {
                  if (index === sources.length) {
                    subscription = undefined;
                    observer.complete();
                  } else {
                    startNext(C.from(sources[index++]));
                  }
                }
              });
            }

            startNext(_this5);
            return function () {
              if (subscription) {
                subscription.unsubscribe();
                subscription = undefined;
              }
            };
          });
        };

        _proto3.flatMap = function flatMap(fn) {
          var _this6 = this;

          if (typeof fn !== 'function') throw new TypeError(fn + ' is not a function');
          var C = getSpecies(this);
          return new C(function (observer) {
            var subscriptions = [];

            var outer = _this6.subscribe({
              next: function next(value) {
                if (fn) {
                  try {
                    value = fn(value);
                  } catch (e) {
                    return observer.error(e);
                  }
                }

                var inner = C.from(value).subscribe({
                  next: function next(value) {
                    observer.next(value);
                  },
                  error: function error(e) {
                    observer.error(e);
                  },
                  complete: function complete() {
                    var i = subscriptions.indexOf(inner);
                    if (i >= 0) subscriptions.splice(i, 1);
                    completeIfDone();
                  }
                });
                subscriptions.push(inner);
              },
              error: function error(e) {
                observer.error(e);
              },
              complete: function complete() {
                completeIfDone();
              }
            });

            function completeIfDone() {
              if (outer.closed && subscriptions.length === 0) observer.complete();
            }

            return function () {
              subscriptions.forEach(function (s) {
                return s.unsubscribe();
              });
              outer.unsubscribe();
            };
          });
        };

        _proto3[SymbolObservable] = function () {
          return this;
        };

        Observable.from = function from(x) {
          var C = typeof this === 'function' ? this : Observable;
          if (x == null) throw new TypeError(x + ' is not an object');
          var method = getMethod(x, SymbolObservable);

          if (method) {
            var observable = method.call(x);
            if (Object(observable) !== observable) throw new TypeError(observable + ' is not an object');
            if (isObservable(observable) && observable.constructor === C) return observable;
            return new C(function (observer) {
              return observable.subscribe(observer);
            });
          }

          if (hasSymbol('iterator')) {
            method = getMethod(x, SymbolIterator);

            if (method) {
              return new C(function (observer) {
                enqueue(function () {
                  if (observer.closed) return;

                  for (var _iterator = _createForOfIteratorHelperLoose(method.call(x)), _step; !(_step = _iterator()).done;) {
                    var item = _step.value;
                    observer.next(item);
                    if (observer.closed) return;
                  }

                  observer.complete();
                });
              });
            }
          }

          if (Array.isArray(x)) {
            return new C(function (observer) {
              enqueue(function () {
                if (observer.closed) return;

                for (var i = 0; i < x.length; ++i) {
                  observer.next(x[i]);
                  if (observer.closed) return;
                }

                observer.complete();
              });
            });
          }

          throw new TypeError(x + ' is not observable');
        };

        Observable.of = function of() {
          for (var _len2 = arguments.length, items = new Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {
            items[_key2] = arguments[_key2];
          }

          var C = typeof this === 'function' ? this : Observable;
          return new C(function (observer) {
            enqueue(function () {
              if (observer.closed) return;

              for (var i = 0; i < items.length; ++i) {
                observer.next(items[i]);
                if (observer.closed) return;
              }

              observer.complete();
            });
          });
        };

        _createClass(Observable, null, [{
          key: SymbolSpecies,
          get: function get() {
            return this;
          }
        }]);

        return Observable;
      }();

      if (hasSymbols()) {
        Object.defineProperty(_Observable, Symbol('extensions'), {
          value: {
            symbol: SymbolObservable,
            hostReportError: hostReportError
          },
          configurable: true
        });
      }
      /***/

    }
  }]);
})();
//# sourceMappingURL=core_app_shell_src_bootstrap_ts-es5.c9a5695aa39e4f350217.js.map
(function () {
  "use strict";

  function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

  function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

  function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

  function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

  function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

  function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

  (self["webpackChunkshell"] = self["webpackChunkshell"] || []).push([["dist_common___ivy_ngcc___fesm2015_common_js-_37420"], {
    /***/
    97502: function _(__unused_webpack_module, __webpack_exports__, __webpack_require__) {
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */


      __webpack_require__.d(__webpack_exports__, {
        /* harmony export */
        "ALL_VIEW_MODES": function ALL_VIEW_MODES() {
          return (
            /* binding */
            _ALL_VIEW_MODES
          );
        },

        /* harmony export */
        "ActionHandler": function ActionHandler() {
          return (
            /* binding */
            _ActionHandler
          );
        },

        /* harmony export */
        "BaseComponentRegistry": function BaseComponentRegistry() {
          return (
            /* binding */
            _BaseComponentRegistry
          );
        },

        /* harmony export */
        "BaseField": function BaseField() {
          return (
            /* binding */
            _BaseField
          );
        },

        /* harmony export */
        "Button": function Button() {
          return (
            /* binding */
            _Button
          );
        },

        /* harmony export */
        "EDITABLE_VIEW_MODES": function EDITABLE_VIEW_MODES() {
          return (
            /* binding */
            _EDITABLE_VIEW_MODES
          );
        },

        /* harmony export */
        "LineActionEvent": function LineActionEvent() {
          return (
            /* binding */
            _LineActionEvent
          );
        },

        /* harmony export */
        "MessageTypes": function MessageTypes() {
          return (
            /* binding */
            _MessageTypes
          );
        },

        /* harmony export */
        "OverridableMap": function OverridableMap() {
          return (
            /* binding */
            _OverridableMap
          );
        },

        /* harmony export */
        "PageSelection": function PageSelection() {
          return (
            /* binding */
            _PageSelection
          );
        },

        /* harmony export */
        "RecordMapperRegistry": function RecordMapperRegistry() {
          return (
            /* binding */
            _RecordMapperRegistry
          );
        },

        /* harmony export */
        "SelectionStatus": function SelectionStatus() {
          return (
            /* binding */
            _SelectionStatus
          );
        },

        /* harmony export */
        "SortDirection": function SortDirection() {
          return (
            /* binding */
            _SortDirection
          );
        },

        /* harmony export */
        "User": function User() {
          return (
            /* binding */
            _User
          );
        },

        /* harmony export */
        "deepClone": function deepClone() {
          return (
            /* binding */
            _deepClone
          );
        },

        /* harmony export */
        "emptyObject": function emptyObject() {
          return (
            /* binding */
            _emptyObject
          );
        },

        /* harmony export */
        "isEditable": function isEditable() {
          return (
            /* binding */
            _isEditable
          );
        },

        /* harmony export */
        "isEmptyString": function isEmptyString() {
          return (
            /* binding */
            _isEmptyString
          );
        },

        /* harmony export */
        "isFalse": function isFalse() {
          return (
            /* binding */
            _isFalse
          );
        },

        /* harmony export */
        "isTrue": function isTrue() {
          return (
            /* binding */
            _isTrue
          );
        },

        /* harmony export */
        "isVoid": function isVoid() {
          return (
            /* binding */
            _isVoid
          );
        },

        /* harmony export */
        "padObjectValues": function padObjectValues() {
          return (
            /* binding */
            _padObjectValues
          );
        },

        /* harmony export */
        "ready": function ready() {
          return (
            /* binding */
            _ready
          );
        }
        /* harmony export */

      });
      /* harmony import */


      var rxjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! rxjs */
      71180);
      /* harmony import */


      var rxjs__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(rxjs__WEBPACK_IMPORTED_MODULE_0__);
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


      var _ActionHandler = /*#__PURE__*/function () {
        function _ActionHandler() {
          _classCallCheck(this, _ActionHandler);
        }

        _createClass(_ActionHandler, [{
          key: "getStatus",
          value: function getStatus(data) {
            return '';
          }
        }, {
          key: "checkAccess",
          value: function checkAccess(action, acls, defaultAcls) {
            var requiredAcls = defaultAcls || [];

            if (action && action.acl) {
              requiredAcls = action.acl;
            }

            if (!requiredAcls || !requiredAcls.length) {
              return true;
            }

            var aclsMap = {};
            acls.forEach(function (value) {
              return aclsMap[value] = value;
            });
            return requiredAcls.every(function (value) {
              return aclsMap[value];
            });
          }
        }]);

        return _ActionHandler;
      }();
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


      var _LineActionEvent = /*#__PURE__*/function () {
        (function (LineActionEvent) {
          LineActionEvent["onLineItemAdd"] = "onLineItemAdd";
          LineActionEvent["onLineItemRemove"] = "onLineItemRemove";
        })(_LineActionEvent || (_LineActionEvent = {}));

        return _LineActionEvent;
      }();
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


      var _Button = /*#__PURE__*/function () {
        function _Button() {
          var klass = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
          var onClick = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;
          var label = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : null;
          var icon = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : null;
          var labelKey = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : null;
          var titleKey = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : null;

          _classCallCheck(this, _Button);

          this.klass = klass;
          this.onClick = onClick;
          this.label = label;
          this.icon = icon;
          this.labelKey = labelKey;
          this.titleKey = titleKey;
        }

        _createClass(_Button, [{
          key: "addClasses",
          value: function addClasses(newClasses) {
            if (!this.klass) {
              this.klass = newClasses;
              return;
            }

            if (typeof this.klass === 'string') {
              this.klass = newClasses.join(' ') + ' ' + this.klass;
              return;
            }

            if (this.klass instanceof Array || this.klass instanceof Set) {
              this.klass = [].concat(_toConsumableArray(this.klass), _toConsumableArray(newClasses));
              return;
            }

            if (this.klass instanceof Object) {
              var classes = Object.assign({}, this.klass);
              classes[newClasses.join(' ')] = true;
              this.klass = classes;
            }
          }
        }], [{
          key: "fromButton",
          value: function fromButton(button) {
            return new _Button(button.klass, button.onClick, button.label, button.icon, button.labelKey, button.titleKey);
          }
        }, {
          key: "appendClasses",
          value: function appendClasses(button, newClasses) {
            if (!button.klass) {
              button.klass = newClasses;
              return;
            }

            if (typeof button.klass === 'string') {
              button.klass = newClasses.join(' ') + ' ' + button.klass;
              return;
            }

            if (button.klass instanceof Array || button.klass instanceof Set) {
              button.klass = [].concat(_toConsumableArray(button.klass), _toConsumableArray(newClasses));
              return;
            }

            if (button.klass instanceof Object) {
              var classes = Object.assign({}, button.klass);
              classes[newClasses.join(' ')] = true;
              button.klass = classes;
            }
          }
        }]);

        return _Button;
      }();
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


      var _OverridableMap = /*#__PURE__*/function () {
        function _OverridableMap() {
          _classCallCheck(this, _OverridableMap);

          this.map = {
            "default": {
              values: {},
              exclude: []
            }
          };
        }

        _createClass(_OverridableMap, [{
          key: "init",
          value: function init(entryMap) {
            var _this = this;

            Object.keys(entryMap).forEach(function (group) {
              if (entryMap[group].values) {
                Object.keys(entryMap[group].values).forEach(function (key) {
                  _this.addEntry(group, key, entryMap[group].values[key]);
                });
              }

              if (entryMap[group].exclude) {
                entryMap[group].exclude.forEach(function (excluded) {
                  return _this.excludeEntry(group, excluded);
                });
              }
            });
          }
        }, {
          key: "addEntry",
          value: function addEntry(group, key, value) {
            if (!(group in this.map)) {
              this.map[group] = {
                values: {},
                exclude: []
              };
            }

            this.map[group].values[key] = value;
          }
        }, {
          key: "excludeEntry",
          value: function excludeEntry(group, key) {
            if (!(group in this.map)) {
              this.map[group] = {
                values: {},
                exclude: []
              };
            }

            this.map[group].exclude.push(key);
          }
        }, {
          key: "getGroupEntries",
          value: function getGroupEntries(group) {
            var _this2 = this;

            var values = {};
            var allValues = Object.assign({}, this.map["default"].values);
            var groupEntry = {
              values: {},
              exclude: []
            };

            if (group in this.map) {
              groupEntry = this.map[group];
              groupEntry.values = groupEntry.values || {};
              groupEntry.exclude = groupEntry.exclude || [];
            }

            Object.keys(groupEntry.values).forEach(function (key) {
              allValues[key] = groupEntry.values[key];
            });
            Object.keys(allValues).forEach(function (key) {
              if (_this2.map["default"].exclude.includes(key)) {
                return;
              }

              if (groupEntry.exclude.includes(key)) {
                return;
              }

              values[key] = allValues[key];
            });
            return values;
          }
        }]);

        return _OverridableMap;
      }();
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


      var _BaseComponentRegistry = /*#__PURE__*/function () {
        function _BaseComponentRegistry() {
          _classCallCheck(this, _BaseComponentRegistry);

          this.init();
        }

        _createClass(_BaseComponentRegistry, [{
          key: "register",
          value: function register(module, type, component) {
            this.map.addEntry(module, _BaseComponentRegistry.getKey(type), component);
          }
        }, {
          key: "exclude",
          value: function exclude(module, key) {
            this.map.excludeEntry(module, key);
          }
        }, {
          key: "get",
          value: function get(module, type) {
            var components = this.map.getGroupEntries(module);

            var key = _BaseComponentRegistry.getKey(type);

            if (components[key]) {
              return components[key];
            }

            return null;
          }
        }, {
          key: "has",
          value: function has(module, type) {
            var components = this.map.getGroupEntries(module);

            var key = _BaseComponentRegistry.getKey(type);

            return !!components[key];
          }
        }, {
          key: "init",
          value: function init() {
            this.map = new _OverridableMap();
            this.initDefault();
          }
        }, {
          key: "initDefault",
          value: function initDefault() {}
        }], [{
          key: "getKey",
          value: function getKey(type) {
            return type;
          }
        }]);

        return _BaseComponentRegistry;
      }();
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

      /* eslint-enable camelcase */

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


      var _BaseField = /*#__PURE__*/function () {
        function _BaseField() {
          _classCallCheck(this, _BaseField);

          this.fieldDependencies = [];
          this.attributeDependencies = [];
          this.valueSubject = new rxjs__WEBPACK_IMPORTED_MODULE_0__.BehaviorSubject({});
          this.valueChanges$ = this.valueSubject.asObservable();
        }

        _createClass(_BaseField, [{
          key: "value",
          get: function get() {
            return this.valueState;
          },
          set: function set(value) {
            var changed = value !== this.valueState;
            this.valueState = value;

            if (changed) {
              this.emitValueChanges();
            }
          }
        }, {
          key: "valueList",
          get: function get() {
            return this.valueListState;
          },
          set: function set(value) {
            this.valueListState = value;
            this.emitValueChanges();
          }
        }, {
          key: "valueObject",
          get: function get() {
            return this.valueObjectState;
          },
          set: function set(value) {
            this.valueObjectState = value;
            this.emitValueChanges();
          }
        }, {
          key: "valueObjectArray",
          get: function get() {
            return this.valueObjectArrayState;
          },
          set: function set(value) {
            this.valueObjectArrayState = value;
            this.emitValueChanges();
          }
        }, {
          key: "emitValueChanges",
          value: function emitValueChanges() {
            this.valueSubject.next({
              value: this.valueState,
              valueList: this.valueListState,
              valueObject: this.valueObjectState
            });
          }
        }]);

        return _BaseField;
      }();
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


      var _RecordMapperRegistry = /*#__PURE__*/function () {
        var RecordMapperRegistry = /*#__PURE__*/function () {
          function RecordMapperRegistry() {
            _classCallCheck(this, RecordMapperRegistry);

            this.init();
          }

          _createClass(RecordMapperRegistry, [{
            key: "register",
            value: function register(module, key, mapper) {
              this.map.addEntry(module, key, mapper);
            }
          }, {
            key: "exclude",
            value: function exclude(module, key) {
              this.map.excludeEntry(module, key);
            }
          }, {
            key: "get",
            value: function get(module) {
              return this.map.getGroupEntries(module);
            }
          }, {
            key: "has",
            value: function has(module, key) {
              var moduleFields = this.map.getGroupEntries(module);
              return !!moduleFields[key];
            }
          }, {
            key: "init",
            value: function init() {
              this.map = new _OverridableMap();
            }
          }]);

          return RecordMapperRegistry;
        }();

        RecordMapperRegistry.ɵfac = function RecordMapperRegistry_Factory(t) {
          return new (t || RecordMapperRegistry)();
        };

        RecordMapperRegistry.ɵprov = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjectable"]({
          factory: function RecordMapperRegistry_Factory() {
            return new RecordMapperRegistry();
          },
          token: RecordMapperRegistry,
          providedIn: "root"
        });
        return RecordMapperRegistry;
      }();

      (function () {
        (typeof ngDevMode === "undefined" || ngDevMode) && void 0;
      })();
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


      var _MessageTypes = /*#__PURE__*/function () {
        (function (MessageTypes) {
          MessageTypes["primary"] = "alert alert-primary";
          MessageTypes["secondary"] = "alert alert-secondary";
          MessageTypes["success"] = "alert alert-success";
          MessageTypes["danger"] = "alert alert-danger";
          MessageTypes["warning"] = "alert alert-warning";
          MessageTypes["info"] = "alert alert-info";
          MessageTypes["light"] = "alert alert-light";
          MessageTypes["dark"] = "alert alert-dark";
        })(_MessageTypes || (_MessageTypes = {}));

        return _MessageTypes;
      }();
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


      var _User = function _User() {
        _classCallCheck(this, _User);
      };
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

      /**
       * Deep clones an object
       *
       * @param {object} obj to clone
       * @returns {string} any
       */


      var _deepClone = function _deepClone(obj) {
        return JSON.parse(JSON.stringify(obj));
      };
      /**
       * Check if all entries have been loaded and are ready to use
       *
       * @param entries
       * @returns boolean
       */


      var _ready = function _ready(entries) {
        var areReady = true;
        entries.every(function (entry) {
          if (!entry) {
            areReady = false;
            return false;
          }

          if (Array.isArray(entry) && entry.length <= 0) {
            areReady = false;
            return false;
          }

          if (typeof entry === 'object' && Object.keys(entry).length <= 0) {
            areReady = false;
            return false;
          }

          return true;
        });
        return areReady;
      };
      /**
       * Pad all values of an object
       * Singular digit numbers will be padded/prefixed with a 0
       * e.g. numbers 1-9 will be padded with a 0 in front to 01-09
       *
       * @param {object} obj to pad
       * @returns {object} any
       */


      var _padObjectValues = function _padObjectValues(obj) {
        Object.keys(obj).forEach(function (key) {
          obj[key] = String(obj[key]).padStart(2, '0');
        });
        return obj;
      };
      /**
       * @param {object} obj to be checked
       * @returns {boolean} true/false
       * @description Returns true, if the object is empty
       */


      var _emptyObject = function _emptyObject(obj) {
        return obj && Object.keys(obj).length === 0;
      };
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

      /**
       * Check if value is false
       *
       * @param {any} value to check
       * @returns {boolean} isFalse
       */


      var _isFalse = function _isFalse(value) {
        return value === false || value === 'false';
      };
      /**
       * Check if value is true
       *
       * @param {any} value to check
       * @returns {boolean} isFalse
       */


      var _isTrue = function _isTrue(value) {
        return value === true || value === 'true';
      };
      /**
       * Check if value is null or undefined
       *
       * @param {any} value to check
       * @returns {boolean} isVoid
       */


      var _isVoid = function _isVoid(value) {
        return value === null || typeof value === 'undefined';
      };
      /**
       * Check if value is an empty string
       *
       * @param {any} value to check
       * @returns {boolean} isEmptyString
       */


      var _isEmptyString = function _isEmptyString(value) {
        return typeof value === 'string' && !value.trim();
      };
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


      var _ALL_VIEW_MODES = ['detail', 'edit', 'list', 'create', 'massupdate', 'filter'];
      var _EDITABLE_VIEW_MODES = ['edit', 'create', 'massupdate', 'filter'];
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

      /**
       * Check if value is editable
       *
       * @param {string} value to check
       * @returns {boolean} isEditable
       */

      var _isEditable = function _isEditable(value) {
        return _EDITABLE_VIEW_MODES.includes(value);
      };
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


      var _SortDirection = /*#__PURE__*/function () {
        (function (SortDirection) {
          SortDirection["NONE"] = "NONE";
          SortDirection["ASC"] = "ASC";
          SortDirection["DESC"] = "DESC";
        })(_SortDirection || (_SortDirection = {}));

        return _SortDirection;
      }();

      var _PageSelection = /*#__PURE__*/function () {
        (function (PageSelection) {
          PageSelection["FIRST"] = "FIRST";
          PageSelection["PREVIOUS"] = "PREVIOUS";
          PageSelection["NEXT"] = "NEXT";
          PageSelection["LAST"] = "LAST";
        })(_PageSelection || (_PageSelection = {}));

        return _PageSelection;
      }();
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


      var _SelectionStatus = /*#__PURE__*/function () {
        (function (SelectionStatus) {
          SelectionStatus["ALL"] = "ALL";
          SelectionStatus["SOME"] = "SOME";
          SelectionStatus["PAGE"] = "PAGE";
          SelectionStatus["NONE"] = "NONE";
        })(_SelectionStatus || (_SelectionStatus = {}));

        return _SelectionStatus;
      }();
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

      /*
       * Public API Surface of common
       */

      /**
       * Generated bundle index. Do not edit.
       */

      /***/

    }
  }]);
})();
//# sourceMappingURL=dist_common___ivy_ngcc___fesm2015_common_js-_37420-es5.6d85ca6fca1b9abcf84d.js.map
/*!
 * dmn-js - dmn-viewer v4.1.0
 *
 * Copyright (c) 2014-present, camunda Services GmbH
 *
 * Released under the bpmn.io license
 * http://bpmn.io/license
 *
 * Source Code: https://github.com/bpmn-io/dmn-js
 *
 * Date: 2018-04-02
 */
(function (global, factory) {
  typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
  typeof define === 'function' && define.amd ? define(factory) :
  (global.DmnJS = factory());
}(this, (function () { 'use strict';

  /**
   * Flatten array, one level deep.
   *
   * @param {Array<?>} arr
   *
   * @return {Array<?>}
   */

  var nativeToString = Object.prototype.toString;
  var nativeHasOwnProperty = Object.prototype.hasOwnProperty;

  function isUndefined(obj) {
    return obj === null || obj === undefined;
  }

  function isArray(obj) {
    return nativeToString.call(obj) === '[object Array]';
  }

  function isObject(obj) {
    return nativeToString.call(obj) === '[object Object]';
  }

  function isNumber(obj) {
    return nativeToString.call(obj) === '[object Number]';
  }

  function isFunction(obj) {
    return nativeToString.call(obj) === '[object Function]';
  }

  function isString(obj) {
    return nativeToString.call(obj) === '[object String]';
  }

  /**
   * Return true, if target owns a property with the given key.
   *
   * @param {Object} target
   * @param {String} key
   *
   * @return {Boolean}
   */
  function has(target, key) {
    return nativeHasOwnProperty.call(target, key);
  }

  /**
   * Find element in collection.
   *
   * @param  {Array|Object} collection
   * @param  {Function|Object} matcher
   *
   * @return {Object}
   */
  function find(collection, matcher) {

    matcher = toMatcher(matcher);

    var match;

    forEach(collection, function (val, key) {
      if (matcher(val, key)) {
        match = val;

        return false;
      }
    });

    return match;
  }

  /**
   * Find element in collection.
   *
   * @param  {Array|Object} collection
   * @param  {Function} matcher
   *
   * @return {Array} result
   */
  function filter(collection, matcher) {

    var result = [];

    forEach(collection, function (val, key) {
      if (matcher(val, key)) {
        result.push(val);
      }
    });

    return result;
  }

  /**
   * Iterate over collection; returning something
   * (non-undefined) will stop iteration.
   *
   * @param  {Array|Object} collection
   * @param  {Function} iterator
   *
   * @return {Object} return result that stopped the iteration
   */
  function forEach(collection, iterator) {

    if (isUndefined(collection)) {
      return;
    }

    var convertKey = isArray(collection) ? toNum : identity;

    for (var key in collection) {

      if (has(collection, key)) {
        var val = collection[key];

        var result = iterator(val, convertKey(key));

        if (result === false) {
          return;
        }
      }
    }
  }

  /**
   * Reduce collection, returning a single result.
   *
   * @param  {Object|Array} collection
   * @param  {Function} iterator
   * @param  {Any} result
   *
   * @return {Any} result returned from last iterator
   */
  function reduce(collection, iterator, result) {

    forEach(collection, function (value, idx) {
      result = iterator(result, value, idx);
    });

    return result;
  }

  /**
   * Return true if every element in the collection
   * matches the criteria.
   *
   * @param  {Object|Array} collection
   * @param  {Function} matcher
   *
   * @return {Boolean}
   */
  function every(collection, matcher) {

    return reduce(collection, function (matches, val, key) {
      return matches && matcher(val, key);
    }, true);
  }

  /**
   * Return true if some elements in the collection
   * match the criteria.
   *
   * @param  {Object|Array} collection
   * @param  {Function} matcher
   *
   * @return {Boolean}
   */
  function some(collection, matcher) {

    return !!find(collection, matcher);
  }

  /**
   * Transform a collection into another collection
   * by piping each member through the given fn.
   *
   * @param  {Object|Array}   collection
   * @param  {Function} fn
   *
   * @return {Array} transformed collection
   */
  function map(collection, fn) {

    var result = [];

    forEach(collection, function (val, key) {
      result.push(fn(val, key));
    });

    return result;
  }

  /**
   * Create an object pattern matcher.
   *
   * @example
   *
   * const matcher = matchPattern({ id: 1 });
   *
   * var element = find(elements, matcher);
   *
   * @param  {Object} pattern
   *
   * @return {Function} matcherFn
   */
  function matchPattern(pattern) {

    return function (el) {

      return every(pattern, function (val, key) {
        return el[key] === val;
      });
    };
  }

  function toMatcher(matcher) {
    return isFunction(matcher) ? matcher : function (e) {
      return e === matcher;
    };
  }

  function identity(arg) {
    return arg;
  }

  function toNum(arg) {
    return Number(arg);
  }

  function _toConsumableArray(arr) {
    if (Array.isArray(arr)) {
      for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) {
        arr2[i] = arr[i];
      }return arr2;
    } else {
      return Array.from(arr);
    }
  }

  var slice = Array.prototype.slice;

  /**
   * Debounce fn, calling it only once if
   * the given time elapsed between calls.
   *
   * @param  {Function} fn
   * @param  {Number} timeout
   *
   * @return {Function} debounced function
   */
  function debounce(fn, timeout) {

    var timer;

    return function () {

      var args = slice.call(arguments);

      if (timer) {
        clearTimeout(timer);
      }

      timer = setTimeout(function () {
        fn.apply(undefined, _toConsumableArray(args));
      }, timeout);
    };
  }

  /**
   * Bind function against target <this>.
   *
   * @param  {Function} fn
   * @param  {Object}   target
   *
   * @return {Function} bound function
   */
  function bind(fn, target) {
    return fn.bind(target);
  }

  var _extends = Object.assign || function (target) {
    for (var i = 1; i < arguments.length; i++) {
      var source = arguments[i];for (var key in source) {
        if (Object.prototype.hasOwnProperty.call(source, key)) {
          target[key] = source[key];
        }
      }
    }return target;
  };

  /**
   * Convenience wrapper for `Object.assign`.
   *
   * @param {Object} target
   * @param {...Object} others
   *
   * @return {Object} the target
   */
  function assign(target) {
    for (var _len = arguments.length, others = Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
      others[_key - 1] = arguments[_key];
    }

    return _extends.apply(undefined, [target].concat(others));
  }

  /**
   * Pick given properties from the target object.
   *
   * @param {Object} target
   * @param {Array} properties
   *
   * @return {Object} target
   */
  function pick(target, properties) {

    var result = {};

    var obj = Object(target);

    forEach(properties, function (prop) {

      if (prop in obj) {
        result[prop] = target[prop];
      }
    });

    return result;
  }

  var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

  var FN_REF = '__fn';

  var DEFAULT_PRIORITY = 1000;

  var slice$1 = Array.prototype.slice;

  /**
   * A general purpose event bus.
   *
   * This component is used to communicate across a diagram instance.
   * Other parts of a diagram can use it to listen to and broadcast events.
   *
   *
   * ## Registering for Events
   *
   * The event bus provides the {@link EventBus#on} and {@link EventBus#once}
   * methods to register for events. {@link EventBus#off} can be used to
   * remove event registrations. Listeners receive an instance of {@link Event}
   * as the first argument. It allows them to hook into the event execution.
   *
   * ```javascript
   *
   * // listen for event
   * eventBus.on('foo', function(event) {
   *
   *   // access event type
   *   event.type; // 'foo'
   *
   *   // stop propagation to other listeners
   *   event.stopPropagation();
   *
   *   // prevent event default
   *   event.preventDefault();
   * });
   *
   * // listen for event with custom payload
   * eventBus.on('bar', function(event, payload) {
   *   console.log(payload);
   * });
   *
   * // listen for event returning value
   * eventBus.on('foobar', function(event) {
   *
   *   // stop event propagation + prevent default
   *   return false;
   *
   *   // stop event propagation + return custom result
   *   return {
   *     complex: 'listening result'
   *   };
   * });
   *
   *
   * // listen with custom priority (default=1000, higher is better)
   * eventBus.on('priorityfoo', 1500, function(event) {
   *   console.log('invoked first!');
   * });
   *
   *
   * // listen for event and pass the context (`this`)
   * eventBus.on('foobar', function(event) {
   *   this.foo();
   * }, this);
   * ```
   *
   *
   * ## Emitting Events
   *
   * Events can be emitted via the event bus using {@link EventBus#fire}.
   *
   * ```javascript
   *
   * // false indicates that the default action
   * // was prevented by listeners
   * if (eventBus.fire('foo') === false) {
   *   console.log('default has been prevented!');
   * };
   *
   *
   * // custom args + return value listener
   * eventBus.on('sum', function(event, a, b) {
   *   return a + b;
   * });
   *
   * // you can pass custom arguments + retrieve result values.
   * var sum = eventBus.fire('sum', 1, 2);
   * console.log(sum); // 3
   * ```
   */
  function EventBus() {
    this._listeners = {};

    // cleanup on destroy on lowest priority to allow
    // message passing until the bitter end
    this.on('diagram.destroy', 1, this._destroy, this);
  }

  /**
   * Register an event listener for events with the given name.
   *
   * The callback will be invoked with `event, ...additionalArguments`
   * that have been passed to {@link EventBus#fire}.
   *
   * Returning false from a listener will prevent the events default action
   * (if any is specified). To stop an event from being processed further in
   * other listeners execute {@link Event#stopPropagation}.
   *
   * Returning anything but `undefined` from a listener will stop the listener propagation.
   *
   * @param {String|Array<String>} events
   * @param {Number} [priority=1000] the priority in which this listener is called, larger is higher
   * @param {Function} callback
   * @param {Object} [that] Pass context (`this`) to the callback
   */
  EventBus.prototype.on = function (events, priority, callback, that) {

    events = isArray(events) ? events : [events];

    if (isFunction(priority)) {
      that = callback;
      callback = priority;
      priority = DEFAULT_PRIORITY;
    }

    if (!isNumber(priority)) {
      throw new Error('priority must be a number');
    }

    var actualCallback = callback;

    if (that) {
      actualCallback = bind(callback, that);

      // make sure we remember and are able to remove
      // bound callbacks via {@link #off} using the original
      // callback
      actualCallback[FN_REF] = callback[FN_REF] || callback;
    }

    var self = this,
        listener = { priority: priority, callback: actualCallback };

    events.forEach(function (e) {
      self._addListener(e, listener);
    });
  };

  /**
   * Register an event listener that is executed only once.
   *
   * @param {String} event the event name to register for
   * @param {Function} callback the callback to execute
   * @param {Object} [that] Pass context (`this`) to the callback
   */
  EventBus.prototype.once = function (event, priority, callback, that) {
    var self = this;

    if (isFunction(priority)) {
      that = callback;
      callback = priority;
      priority = DEFAULT_PRIORITY;
    }

    if (!isNumber(priority)) {
      throw new Error('priority must be a number');
    }

    function wrappedCallback() {
      self.off(event, wrappedCallback);
      return callback.apply(that, arguments);
    }

    // make sure we remember and are able to remove
    // bound callbacks via {@link #off} using the original
    // callback
    wrappedCallback[FN_REF] = callback;

    this.on(event, priority, wrappedCallback);
  };

  /**
   * Removes event listeners by event and callback.
   *
   * If no callback is given, all listeners for a given event name are being removed.
   *
   * @param {String} event
   * @param {Function} [callback]
   */
  EventBus.prototype.off = function (event, callback) {
    var listeners = this._getListeners(event),
        listener,
        listenerCallback,
        idx;

    if (callback) {

      // move through listeners from back to front
      // and remove matching listeners
      for (idx = listeners.length - 1; listener = listeners[idx]; idx--) {
        listenerCallback = listener.callback;

        if (listenerCallback === callback || listenerCallback[FN_REF] === callback) {
          listeners.splice(idx, 1);
        }
      }
    } else {
      // clear listeners
      listeners.length = 0;
    }
  };

  /**
   * Create an EventBus event.
   *
   * @param {Object} data
   *
   * @return {Object} event, recognized by the eventBus
   */
  EventBus.prototype.createEvent = function (data) {
    var event = new InternalEvent();

    event.init(data);

    return event;
  };

  /**
   * Fires a named event.
   *
   * @example
   *
   * // fire event by name
   * events.fire('foo');
   *
   * // fire event object with nested type
   * var event = { type: 'foo' };
   * events.fire(event);
   *
   * // fire event with explicit type
   * var event = { x: 10, y: 20 };
   * events.fire('element.moved', event);
   *
   * // pass additional arguments to the event
   * events.on('foo', function(event, bar) {
   *   alert(bar);
   * });
   *
   * events.fire({ type: 'foo' }, 'I am bar!');
   *
   * @param {String} [name] the optional event name
   * @param {Object} [event] the event object
   * @param {...Object} additional arguments to be passed to the callback functions
   *
   * @return {Boolean} the events return value, if specified or false if the
   *                   default action was prevented by listeners
   */
  EventBus.prototype.fire = function (type, data) {

    var event, listeners, returnValue, args;

    args = slice$1.call(arguments);

    if ((typeof type === 'undefined' ? 'undefined' : _typeof(type)) === 'object') {
      event = type;
      type = event.type;
    }

    if (!type) {
      throw new Error('no event type specified');
    }

    listeners = this._listeners[type];

    if (!listeners) {
      return;
    }

    // we make sure we fire instances of our home made
    // events here. We wrap them only once, though
    if (data instanceof InternalEvent) {
      // we are fine, we alread have an event
      event = data;
    } else {
      event = this.createEvent(data);
    }

    // ensure we pass the event as the first parameter
    args[0] = event;

    // original event type (in case we delegate)
    var originalType = event.type;

    // update event type before delegation
    if (type !== originalType) {
      event.type = type;
    }

    try {
      returnValue = this._invokeListeners(event, args, listeners);
    } finally {
      // reset event type after delegation
      if (type !== originalType) {
        event.type = originalType;
      }
    }

    // set the return value to false if the event default
    // got prevented and no other return value exists
    if (returnValue === undefined && event.defaultPrevented) {
      returnValue = false;
    }

    return returnValue;
  };

  EventBus.prototype.handleError = function (error) {
    return this.fire('error', { error: error }) === false;
  };

  EventBus.prototype._destroy = function () {
    this._listeners = {};
  };

  EventBus.prototype._invokeListeners = function (event, args, listeners) {

    var idx, listener, returnValue;

    for (idx = 0; listener = listeners[idx]; idx++) {

      // handle stopped propagation
      if (event.cancelBubble) {
        break;
      }

      returnValue = this._invokeListener(event, args, listener);
    }

    return returnValue;
  };

  EventBus.prototype._invokeListener = function (event, args, listener) {

    var returnValue;

    try {
      // returning false prevents the default action
      returnValue = invokeFunction(listener.callback, args);

      // stop propagation on return value
      if (returnValue !== undefined) {
        event.returnValue = returnValue;
        event.stopPropagation();
      }

      // prevent default on return false
      if (returnValue === false) {
        event.preventDefault();
      }
    } catch (e) {
      if (!this.handleError(e)) {
        console.error('unhandled error in event listener');
        console.error(e.stack);

        throw e;
      }
    }

    return returnValue;
  };

  /*
   * Add new listener with a certain priority to the list
   * of listeners (for the given event).
   *
   * The semantics of listener registration / listener execution are
   * first register, first serve: New listeners will always be inserted
   * after existing listeners with the same priority.
   *
   * Example: Inserting two listeners with priority 1000 and 1300
   *
   *    * before: [ 1500, 1500, 1000, 1000 ]
   *    * after: [ 1500, 1500, (new=1300), 1000, 1000, (new=1000) ]
   *
   * @param {String} event
   * @param {Object} listener { priority, callback }
   */
  EventBus.prototype._addListener = function (event, newListener) {

    var listeners = this._getListeners(event),
        existingListener,
        idx;

    // ensure we order listeners by priority from
    // 0 (high) to n > 0 (low)
    for (idx = 0; existingListener = listeners[idx]; idx++) {
      if (existingListener.priority < newListener.priority) {

        // prepend newListener at before existingListener
        listeners.splice(idx, 0, newListener);
        return;
      }
    }

    listeners.push(newListener);
  };

  EventBus.prototype._getListeners = function (name) {
    var listeners = this._listeners[name];

    if (!listeners) {
      this._listeners[name] = listeners = [];
    }

    return listeners;
  };

  /**
   * A event that is emitted via the event bus.
   */
  function InternalEvent() {}

  InternalEvent.prototype.stopPropagation = function () {
    this.cancelBubble = true;
  };

  InternalEvent.prototype.preventDefault = function () {
    this.defaultPrevented = true;
  };

  InternalEvent.prototype.init = function (data) {
    assign(this, data || {});
  };

  /**
   * Invoke function. Be fast...
   *
   * @param {Function} fn
   * @param {Array<Object>} args
   *
   * @return {Any}
   */
  function invokeFunction(fn, args) {
    return fn.apply(null, args);
  }

  /**
   * Moddle base element.
   */
  function Base() {}

  Base.prototype.get = function (name) {
    return this.$model.properties.get(this, name);
  };

  Base.prototype.set = function (name, value) {
    this.$model.properties.set(this, name, value);
  };

  /**
   * A model element factory.
   *
   * @param {Moddle} model
   * @param {Properties} properties
   */
  function Factory(model, properties) {
    this.model = model;
    this.properties = properties;
  }

  Factory.prototype.createType = function (descriptor) {

    var model = this.model;

    var props = this.properties,
        prototype = Object.create(Base.prototype);

    // initialize default values
    forEach(descriptor.properties, function (p) {
      if (!p.isMany && p.default !== undefined) {
        prototype[p.name] = p.default;
      }
    });

    props.defineModel(prototype, model);
    props.defineDescriptor(prototype, descriptor);

    var name = descriptor.ns.name;

    /**
     * The new type constructor
     */
    function ModdleElement(attrs) {
      props.define(this, '$type', { value: name, enumerable: true });
      props.define(this, '$attrs', { value: {} });
      props.define(this, '$parent', { writable: true });

      forEach(attrs, bind(function (val, key) {
        this.set(key, val);
      }, this));
    }

    ModdleElement.prototype = prototype;

    ModdleElement.hasType = prototype.$instanceOf = this.model.hasType;

    // static links
    props.defineModel(ModdleElement, model);
    props.defineDescriptor(ModdleElement, descriptor);

    return ModdleElement;
  };

  /**
   * Built-in moddle types
   */
  var BUILTINS = {
    String: true,
    Boolean: true,
    Integer: true,
    Real: true,
    Element: true
  };

  /**
   * Converters for built in types from string representations
   */
  var TYPE_CONVERTERS = {
    String: function String(s) {
      return s;
    },
    Boolean: function Boolean(s) {
      return s === 'true';
    },
    Integer: function Integer(s) {
      return parseInt(s, 10);
    },
    Real: function Real(s) {
      return parseFloat(s, 10);
    }
  };

  /**
   * Convert a type to its real representation
   */
  function coerceType(type, value) {

    var converter = TYPE_CONVERTERS[type];

    if (converter) {
      return converter(value);
    } else {
      return value;
    }
  }

  /**
   * Return whether the given type is built-in
   */
  function isBuiltIn(type) {
    return !!BUILTINS[type];
  }

  /**
   * Return whether the given type is simple
   */
  function isSimple(type) {
    return !!TYPE_CONVERTERS[type];
  }

  /**
   * Parses a namespaced attribute name of the form (ns:)localName to an object,
   * given a default prefix to assume in case no explicit namespace is given.
   *
   * @param {String} name
   * @param {String} [defaultPrefix] the default prefix to take, if none is present.
   *
   * @return {Object} the parsed name
   */
  function parseName(name, defaultPrefix) {
    var parts = name.split(/:/),
        localName,
        prefix;

    // no prefix (i.e. only local name)
    if (parts.length === 1) {
      localName = name;
      prefix = defaultPrefix;
    } else
      // prefix + local name
      if (parts.length === 2) {
        localName = parts[1];
        prefix = parts[0];
      } else {
        throw new Error('expected <prefix:localName> or <localName>, got ' + name);
      }

    name = (prefix ? prefix + ':' : '') + localName;

    return {
      name: name,
      prefix: prefix,
      localName: localName
    };
  }

  /**
   * A utility to build element descriptors.
   */
  function DescriptorBuilder(nameNs) {
    this.ns = nameNs;
    this.name = nameNs.name;
    this.allTypes = [];
    this.allTypesByName = {};
    this.properties = [];
    this.propertiesByName = {};
  }

  DescriptorBuilder.prototype.build = function () {
    return pick(this, ['ns', 'name', 'allTypes', 'allTypesByName', 'properties', 'propertiesByName', 'bodyProperty', 'idProperty']);
  };

  /**
   * Add property at given index.
   *
   * @param {Object} p
   * @param {Number} [idx]
   * @param {Boolean} [validate=true]
   */
  DescriptorBuilder.prototype.addProperty = function (p, idx, validate) {

    if (typeof idx === 'boolean') {
      validate = idx;
      idx = undefined;
    }

    this.addNamedProperty(p, validate !== false);

    var properties = this.properties;

    if (idx !== undefined) {
      properties.splice(idx, 0, p);
    } else {
      properties.push(p);
    }
  };

  DescriptorBuilder.prototype.replaceProperty = function (oldProperty, newProperty, replace) {
    var oldNameNs = oldProperty.ns;

    var props = this.properties,
        propertiesByName = this.propertiesByName,
        rename = oldProperty.name !== newProperty.name;

    if (oldProperty.isId) {
      if (!newProperty.isId) {
        throw new Error('property <' + newProperty.ns.name + '> must be id property ' + 'to refine <' + oldProperty.ns.name + '>');
      }

      this.setIdProperty(newProperty, false);
    }

    if (oldProperty.isBody) {

      if (!newProperty.isBody) {
        throw new Error('property <' + newProperty.ns.name + '> must be body property ' + 'to refine <' + oldProperty.ns.name + '>');
      }

      // TODO: Check compatibility
      this.setBodyProperty(newProperty, false);
    }

    // validate existence and get location of old property
    var idx = props.indexOf(oldProperty);
    if (idx === -1) {
      throw new Error('property <' + oldNameNs.name + '> not found in property list');
    }

    // remove old property
    props.splice(idx, 1);

    // replacing the named property is intentional
    //
    //  * validate only if this is a "rename" operation
    //  * add at specific index unless we "replace"
    //
    this.addProperty(newProperty, replace ? undefined : idx, rename);

    // make new property available under old name
    propertiesByName[oldNameNs.name] = propertiesByName[oldNameNs.localName] = newProperty;
  };

  DescriptorBuilder.prototype.redefineProperty = function (p, targetPropertyName, replace) {

    var nsPrefix = p.ns.prefix;
    var parts = targetPropertyName.split('#');

    var name = parseName(parts[0], nsPrefix);
    var attrName = parseName(parts[1], name.prefix).name;

    var redefinedProperty = this.propertiesByName[attrName];
    if (!redefinedProperty) {
      throw new Error('refined property <' + attrName + '> not found');
    } else {
      this.replaceProperty(redefinedProperty, p, replace);
    }

    delete p.redefines;
  };

  DescriptorBuilder.prototype.addNamedProperty = function (p, validate) {
    var ns = p.ns,
        propsByName = this.propertiesByName;

    if (validate) {
      this.assertNotDefined(p, ns.name);
      this.assertNotDefined(p, ns.localName);
    }

    propsByName[ns.name] = propsByName[ns.localName] = p;
  };

  DescriptorBuilder.prototype.removeNamedProperty = function (p) {
    var ns = p.ns,
        propsByName = this.propertiesByName;

    delete propsByName[ns.name];
    delete propsByName[ns.localName];
  };

  DescriptorBuilder.prototype.setBodyProperty = function (p, validate) {

    if (validate && this.bodyProperty) {
      throw new Error('body property defined multiple times ' + '(<' + this.bodyProperty.ns.name + '>, <' + p.ns.name + '>)');
    }

    this.bodyProperty = p;
  };

  DescriptorBuilder.prototype.setIdProperty = function (p, validate) {

    if (validate && this.idProperty) {
      throw new Error('id property defined multiple times ' + '(<' + this.idProperty.ns.name + '>, <' + p.ns.name + '>)');
    }

    this.idProperty = p;
  };

  DescriptorBuilder.prototype.assertNotDefined = function (p, name) {
    var propertyName = p.name,
        definedProperty = this.propertiesByName[propertyName];

    if (definedProperty) {
      throw new Error('property <' + propertyName + '> already defined; ' + 'override of <' + definedProperty.definedBy.ns.name + '#' + definedProperty.ns.name + '> by ' + '<' + p.definedBy.ns.name + '#' + p.ns.name + '> not allowed without redefines');
    }
  };

  DescriptorBuilder.prototype.hasProperty = function (name) {
    return this.propertiesByName[name];
  };

  DescriptorBuilder.prototype.addTrait = function (t, inherited) {

    var typesByName = this.allTypesByName,
        types = this.allTypes;

    var typeName = t.name;

    if (typeName in typesByName) {
      return;
    }

    forEach(t.properties, bind(function (p) {

      // clone property to allow extensions
      p = assign({}, p, {
        name: p.ns.localName,
        inherited: inherited
      });

      Object.defineProperty(p, 'definedBy', {
        value: t
      });

      var replaces = p.replaces,
          redefines = p.redefines;

      // add replace/redefine support
      if (replaces || redefines) {
        this.redefineProperty(p, replaces || redefines, replaces);
      } else {
        if (p.isBody) {
          this.setBodyProperty(p);
        }
        if (p.isId) {
          this.setIdProperty(p);
        }
        this.addProperty(p);
      }
    }, this));

    types.push(t);
    typesByName[typeName] = t;
  };

  /**
   * A registry of Moddle packages.
   *
   * @param {Array<Package>} packages
   * @param {Properties} properties
   */
  function Registry(packages, properties) {
    this.packageMap = {};
    this.typeMap = {};

    this.packages = [];

    this.properties = properties;

    forEach(packages, bind(this.registerPackage, this));
  }

  Registry.prototype.getPackage = function (uriOrPrefix) {
    return this.packageMap[uriOrPrefix];
  };

  Registry.prototype.getPackages = function () {
    return this.packages;
  };

  Registry.prototype.registerPackage = function (pkg) {

    // copy package
    pkg = assign({}, pkg);

    var pkgMap = this.packageMap;

    ensureAvailable(pkgMap, pkg, 'prefix');
    ensureAvailable(pkgMap, pkg, 'uri');

    // register types
    forEach(pkg.types, bind(function (descriptor) {
      this.registerType(descriptor, pkg);
    }, this));

    pkgMap[pkg.uri] = pkgMap[pkg.prefix] = pkg;
    this.packages.push(pkg);
  };

  /**
   * Register a type from a specific package with us
   */
  Registry.prototype.registerType = function (type, pkg) {

    type = assign({}, type, {
      superClass: (type.superClass || []).slice(),
      extends: (type.extends || []).slice(),
      properties: (type.properties || []).slice(),
      meta: assign((type.meta || {}))
    });

    var ns = parseName(type.name, pkg.prefix),
        name = ns.name,
        propertiesByName = {};

    // parse properties
    forEach(type.properties, bind(function (p) {

      // namespace property names
      var propertyNs = parseName(p.name, ns.prefix),
          propertyName = propertyNs.name;

      // namespace property types
      if (!isBuiltIn(p.type)) {
        p.type = parseName(p.type, propertyNs.prefix).name;
      }

      assign(p, {
        ns: propertyNs,
        name: propertyName
      });

      propertiesByName[propertyName] = p;
    }, this));

    // update ns + name
    assign(type, {
      ns: ns,
      name: name,
      propertiesByName: propertiesByName
    });

    forEach(type.extends, bind(function (extendsName) {
      var extended = this.typeMap[extendsName];

      extended.traits = extended.traits || [];
      extended.traits.push(name);
    }, this));

    // link to package
    this.definePackage(type, pkg);

    // register
    this.typeMap[name] = type;
  };

  /**
   * Traverse the type hierarchy from bottom to top,
   * calling iterator with (type, inherited) for all elements in
   * the inheritance chain.
   *
   * @param {Object} nsName
   * @param {Function} iterator
   * @param {Boolean} [trait=false]
   */
  Registry.prototype.mapTypes = function (nsName, iterator, trait) {

    var type = isBuiltIn(nsName.name) ? { name: nsName.name } : this.typeMap[nsName.name];

    var self = this;

    /**
     * Traverse the selected trait.
     *
     * @param {String} cls
     */
    function traverseTrait(cls) {
      return traverseSuper(cls, true);
    }

    /**
     * Traverse the selected super type or trait
     *
     * @param {String} cls
     * @param {Boolean} [trait=false]
     */
    function traverseSuper(cls, trait) {
      var parentNs = parseName(cls, isBuiltIn(cls) ? '' : nsName.prefix);
      self.mapTypes(parentNs, iterator, trait);
    }

    if (!type) {
      throw new Error('unknown type <' + nsName.name + '>');
    }

    forEach(type.superClass, trait ? traverseTrait : traverseSuper);

    // call iterator with (type, inherited=!trait)
    iterator(type, !trait);

    forEach(type.traits, traverseTrait);
  };

  /**
   * Returns the effective descriptor for a type.
   *
   * @param  {String} type the namespaced name (ns:localName) of the type
   *
   * @return {Descriptor} the resulting effective descriptor
   */
  Registry.prototype.getEffectiveDescriptor = function (name) {

    var nsName = parseName(name);

    var builder = new DescriptorBuilder(nsName);

    this.mapTypes(nsName, function (type, inherited) {
      builder.addTrait(type, inherited);
    });

    var descriptor = builder.build();

    // define package link
    this.definePackage(descriptor, descriptor.allTypes[descriptor.allTypes.length - 1].$pkg);

    return descriptor;
  };

  Registry.prototype.definePackage = function (target, pkg) {
    this.properties.define(target, '$pkg', { value: pkg });
  };

  ///////// helpers ////////////////////////////

  function ensureAvailable(packageMap, pkg, identifierKey) {

    var value = pkg[identifierKey];

    if (value in packageMap) {
      throw new Error('package with ' + identifierKey + ' <' + value + '> already defined');
    }
  }

  /**
   * A utility that gets and sets properties of model elements.
   *
   * @param {Model} model
   */
  function Properties(model) {
    this.model = model;
  }

  /**
   * Sets a named property on the target element.
   * If the value is undefined, the property gets deleted.
   *
   * @param {Object} target
   * @param {String} name
   * @param {Object} value
   */
  Properties.prototype.set = function (target, name, value) {

    var property = this.model.getPropertyDescriptor(target, name);

    var propertyName = property && property.name;

    if (isUndefined$1(value)) {
      // unset the property, if the specified value is undefined;
      // delete from $attrs (for extensions) or the target itself
      if (property) {
        delete target[propertyName];
      } else {
        delete target.$attrs[name];
      }
    } else {
      // set the property, defining well defined properties on the fly
      // or simply updating them in target.$attrs (for extensions)
      if (property) {
        if (propertyName in target) {
          target[propertyName] = value;
        } else {
          defineProperty(target, property, value);
        }
      } else {
        target.$attrs[name] = value;
      }
    }
  };

  /**
   * Returns the named property of the given element
   *
   * @param  {Object} target
   * @param  {String} name
   *
   * @return {Object}
   */
  Properties.prototype.get = function (target, name) {

    var property = this.model.getPropertyDescriptor(target, name);

    if (!property) {
      return target.$attrs[name];
    }

    var propertyName = property.name;

    // check if access to collection property and lazily initialize it
    if (!target[propertyName] && property.isMany) {
      defineProperty(target, property, []);
    }

    return target[propertyName];
  };

  /**
   * Define a property on the target element
   *
   * @param  {Object} target
   * @param  {String} name
   * @param  {Object} options
   */
  Properties.prototype.define = function (target, name, options) {
    Object.defineProperty(target, name, options);
  };

  /**
   * Define the descriptor for an element
   */
  Properties.prototype.defineDescriptor = function (target, descriptor) {
    this.define(target, '$descriptor', { value: descriptor });
  };

  /**
   * Define the model for an element
   */
  Properties.prototype.defineModel = function (target, model) {
    this.define(target, '$model', { value: model });
  };

  function isUndefined$1(val) {
    return typeof val === 'undefined';
  }

  function defineProperty(target, property, value) {
    Object.defineProperty(target, property.name, {
      enumerable: !property.isReference,
      writable: true,
      value: value,
      configurable: true
    });
  }

  //// Moddle implementation /////////////////////////////////////////////////

  /**
   * @class Moddle
   *
   * A model that can be used to create elements of a specific type.
   *
   * @example
   *
   * var Moddle = require('moddle');
   *
   * var pkg = {
   *   name: 'mypackage',
   *   prefix: 'my',
   *   types: [
   *     { name: 'Root' }
   *   ]
   * };
   *
   * var moddle = new Moddle([pkg]);
   *
   * @param {Array<Package>} packages the packages to contain
   */
  function Moddle(packages) {

    this.properties = new Properties(this);

    this.factory = new Factory(this, this.properties);
    this.registry = new Registry(packages, this.properties);

    this.typeCache = {};
  }

  /**
   * Create an instance of the specified type.
   *
   * @method Moddle#create
   *
   * @example
   *
   * var foo = moddle.create('my:Foo');
   * var bar = moddle.create('my:Bar', { id: 'BAR_1' });
   *
   * @param  {String|Object} descriptor the type descriptor or name know to the model
   * @param  {Object} attrs   a number of attributes to initialize the model instance with
   * @return {Object}         model instance
   */
  Moddle.prototype.create = function (descriptor, attrs) {
    var Type = this.getType(descriptor);

    if (!Type) {
      throw new Error('unknown type <' + descriptor + '>');
    }

    return new Type(attrs);
  };

  /**
   * Returns the type representing a given descriptor
   *
   * @method Moddle#getType
   *
   * @example
   *
   * var Foo = moddle.getType('my:Foo');
   * var foo = new Foo({ 'id' : 'FOO_1' });
   *
   * @param  {String|Object} descriptor the type descriptor or name know to the model
   * @return {Object}         the type representing the descriptor
   */
  Moddle.prototype.getType = function (descriptor) {

    var cache = this.typeCache;

    var name = isString(descriptor) ? descriptor : descriptor.ns.name;

    var type = cache[name];

    if (!type) {
      descriptor = this.registry.getEffectiveDescriptor(name);
      type = cache[name] = this.factory.createType(descriptor);
    }

    return type;
  };

  /**
   * Creates an any-element type to be used within model instances.
   *
   * This can be used to create custom elements that lie outside the meta-model.
   * The created element contains all the meta-data required to serialize it
   * as part of meta-model elements.
   *
   * @method Moddle#createAny
   *
   * @example
   *
   * var foo = moddle.createAny('vendor:Foo', 'http://vendor', {
   *   value: 'bar'
   * });
   *
   * var container = moddle.create('my:Container', 'http://my', {
   *   any: [ foo ]
   * });
   *
   * // go ahead and serialize the stuff
   *
   *
   * @param  {String} name  the name of the element
   * @param  {String} nsUri the namespace uri of the element
   * @param  {Object} [properties] a map of properties to initialize the instance with
   * @return {Object} the any type instance
   */
  Moddle.prototype.createAny = function (name, nsUri, properties) {

    var nameNs = parseName(name);

    var element = {
      $type: name,
      $instanceOf: function $instanceOf(type) {
        return type === this.$type;
      }
    };

    var descriptor = {
      name: name,
      isGeneric: true,
      ns: {
        prefix: nameNs.prefix,
        localName: nameNs.localName,
        uri: nsUri
      }
    };

    this.properties.defineDescriptor(element, descriptor);
    this.properties.defineModel(element, this);
    this.properties.define(element, '$parent', { enumerable: false, writable: true });

    forEach(properties, function (a, key) {
      if (isObject(a) && a.value !== undefined) {
        element[a.name] = a.value;
      } else {
        element[key] = a;
      }
    });

    return element;
  };

  /**
   * Returns a registered package by uri or prefix
   *
   * @return {Object} the package
   */
  Moddle.prototype.getPackage = function (uriOrPrefix) {
    return this.registry.getPackage(uriOrPrefix);
  };

  /**
   * Returns a snapshot of all known packages
   *
   * @return {Object} the package
   */
  Moddle.prototype.getPackages = function () {
    return this.registry.getPackages();
  };

  /**
   * Returns the descriptor for an element
   */
  Moddle.prototype.getElementDescriptor = function (element) {
    return element.$descriptor;
  };

  /**
   * Returns true if the given descriptor or instance
   * represents the given type.
   *
   * May be applied to this, if element is omitted.
   */
  Moddle.prototype.hasType = function (element, type) {
    if (type === undefined) {
      type = element;
      element = this;
    }

    var descriptor = element.$model.getElementDescriptor(element);

    return type in descriptor.allTypesByName;
  };

  /**
   * Returns the descriptor of an elements named property
   */
  Moddle.prototype.getPropertyDescriptor = function (element, property) {
    return this.getElementDescriptor(element).propertiesByName[property];
  };

  /**
   * Returns a mapped type's descriptor
   */
  Moddle.prototype.getTypeDescriptor = function (type) {
    return this.registry.typeMap[type];
  };

  var commonjsGlobal = typeof window !== 'undefined' ? window : typeof global !== 'undefined' ? global : typeof self !== 'undefined' ? self : {};

  function createCommonjsModule(fn, module) {
  	return module = { exports: {} }, fn(module, module.exports), module.exports;
  }

  var tinyStack = createCommonjsModule(function (module, exports) {
  /**
   * Tiny stack for browser or server
   *
   * @copyright 2015 Jason Mulligan <jason.mulligan@avoidwork.com>
   * @license BSD-3-Clause
   * @version 1.0.0
   */

  (function (global) {

    /**
     * TinyStack
     *
     * @constructor
     */

    function TinyStack() {
      this.data = [null];
      this.top = 0;
    }

    /**
     * Clears the stack
     *
     * @method clear
     * @memberOf TinyStack
     * @return {Object} {@link TinyStack}
     */
    TinyStack.prototype.clear = function clear() {
      this.data = [null];
      this.top = 0;

      return this;
    };

    /**
     * Gets the size of the stack
     *
     * @method length
     * @memberOf TinyStack
     * @return {Number} Size of stack
     */
    TinyStack.prototype.length = function length() {
      return this.top;
    };

    /**
     * Tests if this stack is empty
     *
     * @method empty
     * @memberOf TinyStack
     * @return {Boolean} Stack is empty
     */
    TinyStack.prototype.empty = function empty() {
      return this.top === 0;
    };

    /**
     * Gets the item at the top of the stack
     *
     * @method peek
     * @memberOf TinyStack
     * @return {Mixed} Item at the top of the stack
     */
    TinyStack.prototype.peek = function peek() {
      return this.data[this.top];
    };

    /**
     * Gets & removes the item at the top of the stack
     *
     * @method pop
     * @memberOf TinyStack
     * @return {Mixed} Item at the top of the stack
     */
    TinyStack.prototype.pop = function pop() {
      if (this.top > 0) {
        this.top--;

        return this.data.pop();
      } else {
        return undefined;
      }
    };

    /**
     * Pushes an item onto the stack
     *
     * @method push
     * @memberOf TinyStack
     * @return {Object} {@link TinyStack}
     */
    TinyStack.prototype.push = function push(arg) {
      this.data[++this.top] = arg;

      return this;
    };

    /**
     * Returns the 1-based position where an object is on this stack
     *
     * If the object o occurs as an item in this stack, this method returns the
     * distance from the top of the stack of the occurrence nearest the top of
     * the stack; the topmost item on the stack is considered to be at distance 1.
     * The equals method is used to compare o to the items in this stack.
     *
     * @method push
     * @memberOf TinyStack
     * @return {Number} 1-based position
     */
    TinyStack.prototype.search = function search(arg) {
      var index = this.data.indexOf(arg);

      return index === -1 ? -1 : this.data.length - index;
    };

    /**
     * TinyStack factory
     *
     * @method factory
     * @return {Object} {@link TinyStack}
     */
    function factory() {
      return new TinyStack();
    }

    // Node, AMD & window supported
    {
      module.exports = factory;
    }
  })(commonjsGlobal);
  });

  var _typeof$1 = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

  var fromCharCode = String.fromCharCode;

  var hasOwnProperty = Object.prototype.hasOwnProperty;

  var ENTITY_PATTERN = /&#(\d+);|&#x([0-9a-f]+);|&(\w+);/ig;

  var ENTITY_MAPPING = {
    'amp': '&',
    'apos': '\'',
    'gt': '>',
    'lt': '<',
    'quot': '"'
  };

  // map UPPERCASE variants of supported special chars
  Object.keys(ENTITY_MAPPING).forEach(function (k) {
    ENTITY_MAPPING[k.toUpperCase()] = ENTITY_MAPPING[k];
  });

  function replaceEntities(_, d, x, z) {

    // reserved names, i.e. &nbsp;
    if (z) {
      if (hasOwnProperty.call(ENTITY_MAPPING, z)) {
        return ENTITY_MAPPING[z];
      } else {
        // fall back to original value
        return '&' + z + ';';
      }
    }

    // decimal encoded char
    if (d) {
      return fromCharCode(d);
    }

    // hex encoded char
    return fromCharCode(parseInt(x, 16));
  }

  /**
   * A basic entity decoder that can decode a minimal
   * sub-set of reserved names (&amp;) as well as
   * hex (&#xaaf;) and decimal (&#1231;) encoded characters.
   *
   * @param {string} str
   *
   * @return {string} decoded string
   */
  function decodeEntities(s) {
    if (s.length > 3 && s.indexOf('&') !== -1) {
      return s.replace(ENTITY_PATTERN, replaceEntities);
    }

    return s;
  }

  var XSI_URI = 'http://www.w3.org/2001/XMLSchema-instance';
  var XSI_PREFIX = 'xsi';
  var XSI_TYPE = 'xsi:type';

  function error(msg) {
    return new Error(msg);
  }

  function missingNamespaceForPrefix(prefix) {
    return 'missing namespace for prefix <' + prefix + '>';
  }

  function getter(getFn) {
    return {
      'get': getFn,
      'enumerable': true
    };
  }

  function cloneNsMatrix(nsMatrix) {
    var clone = {},
        key;
    for (key in nsMatrix) {
      clone[key] = nsMatrix[key];
    }
    return clone;
  }

  function uriPrefix(prefix) {
    return prefix + '$uri';
  }

  function buildNsMatrix(nsUriToPrefix) {
    var nsMatrix = {},
        uri,
        prefix;

    for (uri in nsUriToPrefix) {
      prefix = nsUriToPrefix[uri];
      nsMatrix[prefix] = prefix;
      nsMatrix[uriPrefix(prefix)] = uri;
    }

    return nsMatrix;
  }

  function noopGetContext() {
    return { 'line': 0, 'column': 0 };
  }

  function throwFunc(err) {
    throw err;
  }

  /**
   * Creates a new parser with the given options.
   *
   * @constructor
   *
   * @param  {!Object<string, ?>=} options
   */
  function Parser(options) {

    if (!this) {
      return new Parser(options);
    }

    var proxy = options && options['proxy'];

    var onText,
        onOpenTag,
        onCloseTag,
        onCDATA,
        onError = throwFunc,
        onWarning,
        onComment,
        onQuestion,
        onAttention;

    var getContext = noopGetContext;

    /**
     * Do we need to parse the current elements attributes for namespaces?
     *
     * @type {boolean}
     */
    var maybeNS = false;

    /**
     * Do we process namespaces at all?
     *
     * @type {boolean}
     */
    var isNamespace = false;

    /**
     * The caught error returned on parse end
     *
     * @type {Error}
     */
    var returnError = null;

    /**
     * Should we stop parsing?
     *
     * @type {boolean}
     */
    var parseStop = false;

    /**
     * A map of { uri: prefix } used by the parser.
     *
     * This map will ensure we can normalize prefixes during processing;
     * for each uri, only one prefix will be exposed to the handlers.
     *
     * @type {!Object<string, string>}}
     */
    var nsUriToPrefix;

    /**
     * Handle parse error.
     *
     * @param  {string|Error} err
     */
    function handleError(err) {
      if (!(err instanceof Error)) {
        err = error(err);
      }

      returnError = err;

      onError(err, getContext);
    }

    /**
     * Handle parse error.
     *
     * @param  {string|Error} err
     */
    function handleWarning(err) {

      if (!onWarning) {
        return;
      }

      if (!(err instanceof Error)) {
        err = error(err);
      }

      onWarning(err, getContext);
    }

    /**
     * Register parse listener.
     *
     * @param  {string}   name
     * @param  {Function} cb
     *
     * @return {Parser}
     */
    this['on'] = function (name, cb) {

      if (typeof cb !== 'function') {
        throw error('required args <name, cb>');
      }

      switch (name) {
        case 'openTag':
          onOpenTag = cb;break;
        case 'text':
          onText = cb;break;
        case 'closeTag':
          onCloseTag = cb;break;
        case 'error':
          onError = cb;break;
        case 'warn':
          onWarning = cb;break;
        case 'cdata':
          onCDATA = cb;break;
        case 'attention':
          onAttention = cb;break; // <!XXXXX zzzz="eeee">
        case 'question':
          onQuestion = cb;break; // <? ....  ?>
        case 'comment':
          onComment = cb;break;
        default:
          throw error('unsupported event: ' + name);
      }

      return this;
    };

    /**
     * Set the namespace to prefix mapping.
     *
     * @example
     *
     * parser.ns({
     *   'http://foo': 'foo',
     *   'http://bar': 'bar'
     * });
     *
     * @param  {!Object<string, string>} nsMap
     *
     * @return {Parser}
     */
    this['ns'] = function (nsMap) {

      if (typeof nsMap === 'undefined') {
        nsMap = {};
      }

      if ((typeof nsMap === 'undefined' ? 'undefined' : _typeof$1(nsMap)) !== 'object') {
        throw error('required args <nsMap={}>');
      }

      var _nsUriToPrefix = {},
          k;

      for (k in nsMap) {
        _nsUriToPrefix[k] = nsMap[k];
      }

      // FORCE default mapping for schema instance
      _nsUriToPrefix[XSI_URI] = XSI_PREFIX;

      isNamespace = true;
      nsUriToPrefix = _nsUriToPrefix;

      return this;
    };

    /**
     * Parse xml string.
     *
     * @param  {string} xml
     *
     * @return {Error} returnError, if not thrown
     */
    this['parse'] = function (xml) {
      if (typeof xml !== 'string') {
        throw error('required args <xml=string>');
      }

      returnError = null;

      parse(xml);

      getContext = noopGetContext;
      parseStop = false;

      return returnError;
    };

    /**
     * Stop parsing.
     */
    this['stop'] = function () {
      parseStop = true;
    };

    /**
     * Parse string, invoking configured listeners on element.
     *
     * @param  {string} xml
     */
    function parse(xml) {
      var nsMatrixStack = isNamespace ? [] : null,
          nsMatrix = isNamespace ? buildNsMatrix(nsUriToPrefix) : null,
          _nsMatrix,
          nodeStack = [],
          anonymousNsCount = 0,
          tagStart = false,
          tagEnd = false,
          i = 0,
          j = 0,
          x,
          y,
          q,
          w,
          xmlns,
          elementName,
          _elementName,
          elementProxy;

      var attrsString = '',
          attrsStart = 0,
          cachedAttrs // false = parsed with errors, null = needs parsing
      ;

      /**
       * Parse attributes on demand and returns the parsed attributes.
       *
       * Return semantics: (1) `false` on attribute parse error,
       * (2) object hash on extracted attrs.
       *
       * @return {boolean|Object}
       */
      function getAttrs() {
        if (cachedAttrs !== null) {
          return cachedAttrs;
        }

        var nsUri,
            nsUriPrefix,
            nsName,
            defaultAlias = isNamespace && nsMatrix['xmlns'],
            attrList = isNamespace && maybeNS ? [] : null,
            i = attrsStart,
            s = attrsString,
            l = s.length,
            hasNewMatrix,
            newalias,
            value,
            alias,
            name,
            attrs = {},
            seenAttrs = {},
            skipAttr,
            w,
            j;

        parseAttr: for (; i < l; i++) {
          skipAttr = false;
          w = s.charCodeAt(i);

          if (w === 32 || w < 14 && w > 8) {
            // WHITESPACE={ \f\n\r\t\v}
            continue;
          }

          // wait for non whitespace character
          if (w < 65 || w > 122 || w > 90 && w < 97) {
            if (w !== 95 && w !== 58) {
              // char 95"_" 58":"
              handleWarning('illegal first char attribute name');
              skipAttr = true;
            }
          }

          // parse attribute name
          for (j = i + 1; j < l; j++) {
            w = s.charCodeAt(j);

            if (w > 96 && w < 123 || w > 64 && w < 91 || w > 47 && w < 59 || w === 46 || // '.'
            w === 45 || // '-'
            w === 95 // '_'
            ) {
                continue;
              }

            // unexpected whitespace
            if (w === 32 || w < 14 && w > 8) {
              // WHITESPACE
              handleWarning('missing attribute value');
              i = j;

              continue parseAttr;
            }

            // expected "="
            if (w === 61) {
              // "=" == 61
              break;
            }

            handleWarning('illegal attribute name char');
            skipAttr = true;
          }

          name = s.substring(i, j);

          if (name === 'xmlns:xmlns') {
            handleWarning('illegal declaration of xmlns');
            skipAttr = true;
          }

          w = s.charCodeAt(j + 1);

          if (w === 34) {
            // '"'
            j = s.indexOf('"', i = j + 2);

            if (j === -1) {
              j = s.indexOf('\'', i);

              if (j !== -1) {
                handleWarning('attribute value quote missmatch');
                skipAttr = true;
              }
            }
          } else if (w === 39) {
            // "'"
            j = s.indexOf('\'', i = j + 2);

            if (j === -1) {
              j = s.indexOf('"', i);

              if (j !== -1) {
                handleWarning('attribute value quote missmatch');
                skipAttr = true;
              }
            }
          } else {
            handleWarning('missing attribute value quotes');
            skipAttr = true;

            // skip to next space
            for (j = j + 1; j < l; j++) {
              w = s.charCodeAt(j + 1);

              if (w === 32 || w < 14 && w > 8) {
                // WHITESPACE
                break;
              }
            }
          }

          if (j === -1) {
            handleWarning('missing closing quotes');

            j = l;
            skipAttr = true;
          }

          if (!skipAttr) {
            value = s.substring(i, j);
          }

          i = j;

          // ensure SPACE follows attribute
          // skip illegal content otherwise
          // example a="b"c
          for (; j + 1 < l; j++) {
            w = s.charCodeAt(j + 1);

            if (w === 32 || w < 14 && w > 8) {
              // WHITESPACE
              break;
            }

            // FIRST ILLEGAL CHAR
            if (i === j) {
              handleWarning('illegal character after attribute end');
              skipAttr = true;
            }
          }

          // advance cursor to next attribute
          i = j + 1;

          if (skipAttr) {
            continue parseAttr;
          }

          // check attribute re-declaration
          if (name in seenAttrs) {
            handleWarning('attribute <' + name + '> already defined');
            continue;
          }

          seenAttrs[name] = true;

          if (!isNamespace) {
            attrs[name] = value;
            continue;
          }

          // try to extract namespace information
          if (maybeNS) {
            newalias = name === 'xmlns' ? 'xmlns' : name.charCodeAt(0) === 120 && name.substr(0, 6) === 'xmlns:' ? name.substr(6) : null;

            // handle xmlns(:alias) assignment
            if (newalias !== null) {
              nsUri = decodeEntities(value);
              nsUriPrefix = uriPrefix(newalias);

              alias = nsUriToPrefix[nsUri];

              if (!alias) {
                // no prefix defined or prefix collision
                if (newalias === 'xmlns' || nsUriPrefix in nsMatrix && nsMatrix[nsUriPrefix] !== nsUri) {
                  // alocate free ns prefix
                  do {
                    alias = 'ns' + anonymousNsCount++;
                  } while (typeof nsMatrix[alias] !== 'undefined');
                } else {
                  alias = newalias;
                }

                nsUriToPrefix[nsUri] = alias;
              }

              if (nsMatrix[newalias] !== alias) {
                if (!hasNewMatrix) {
                  nsMatrix = cloneNsMatrix(nsMatrix);
                  hasNewMatrix = true;
                }

                nsMatrix[newalias] = alias;
                if (newalias === 'xmlns') {
                  nsMatrix[uriPrefix(alias)] = nsUri;
                  defaultAlias = alias;
                }

                nsMatrix[nsUriPrefix] = nsUri;
              }

              // expose xmlns(:asd)="..." in attributes
              attrs[name] = value;
              continue;
            }

            // collect attributes until all namespace
            // declarations are processed
            attrList.push(name, value);
            continue;
          } /** end if (maybeNs) */

          // handle attributes on element without
          // namespace declarations
          w = name.indexOf(':');
          if (w === -1) {
            attrs[name] = value;
            continue;
          }

          // normalize ns attribute name
          if (!(nsName = nsMatrix[name.substring(0, w)])) {
            handleWarning(missingNamespaceForPrefix(name.substring(0, w)));
            continue;
          }

          name = defaultAlias === nsName ? name.substr(w + 1) : nsName + name.substr(w);
          // end: normalize ns attribute name

          // normalize xsi:type ns attribute value
          if (name === XSI_TYPE) {
            w = value.indexOf(':');

            if (w !== -1) {
              nsName = value.substring(0, w);
              // handle default prefixes, i.e. xs:String gracefully
              nsName = nsMatrix[nsName] || nsName;
              value = nsName + value.substring(w);
            } else {
              value = defaultAlias + ':' + value;
            }
          }
          // end: normalize xsi:type ns attribute value

          attrs[name] = value;
        }

        // handle deferred, possibly namespaced attributes
        if (maybeNS) {

          // normalize captured attributes
          for (i = 0, l = attrList.length; i < l; i++) {

            name = attrList[i++];
            value = attrList[i];

            w = name.indexOf(':');

            if (w !== -1) {
              // normalize ns attribute name
              if (!(nsName = nsMatrix[name.substring(0, w)])) {
                handleWarning(missingNamespaceForPrefix(name.substring(0, w)));
                continue;
              }

              name = defaultAlias === nsName ? name.substr(w + 1) : nsName + name.substr(w);
              // end: normalize ns attribute name

              // normalize xsi:type ns attribute value
              if (name === XSI_TYPE) {
                w = value.indexOf(':');

                if (w !== -1) {
                  nsName = value.substring(0, w);
                  // handle default prefixes, i.e. xs:String gracefully
                  nsName = nsMatrix[nsName] || nsName;
                  value = nsName + value.substring(w);
                } else {
                  value = defaultAlias + ':' + value;
                }
              }
              // end: normalize xsi:type ns attribute value
            }

            attrs[name] = value;
          }
          // end: normalize captured attributes
        }

        return cachedAttrs = attrs;
      }

      /**
       * Extract the parse context { line, column, part }
       * from the current parser position.
       *
       * @return {Object} parse context
       */
      function getParseContext() {
        var splitsRe = /(\r\n|\r|\n)/g;

        var line = 0;
        var column = 0;
        var startOfLine = 0;
        var endOfLine = j;
        var match;
        var data;

        while (i >= startOfLine) {

          match = splitsRe.exec(xml);

          if (!match) {
            break;
          }

          // end of line = (break idx + break chars)
          endOfLine = match[0].length + match.index;

          if (endOfLine > i) {
            break;
          }

          // advance to next line
          line += 1;

          startOfLine = endOfLine;
        }

        // EOF errors
        if (i == -1) {
          column = endOfLine;
          data = '';
        } else {
          column = i - startOfLine;
          data = j == -1 ? xml.substring(i) : xml.substring(i, j + 1);
        }

        return {
          'data': data,
          'line': line,
          'column': column
        };
      }

      getContext = getParseContext;

      if (proxy) {
        elementProxy = Object.create({}, {
          'name': getter(function () {
            return elementName;
          }),
          'originalName': getter(function () {
            return _elementName;
          }),
          'attrs': getter(getAttrs),
          'ns': getter(function () {
            return nsMatrix;
          })
        });
      }

      // actual parse logic
      while (j !== -1) {

        if (xml.charCodeAt(j) === 60) {
          // "<"
          i = j;
        } else {
          i = xml.indexOf('<', j);
        }

        // parse end
        if (i === -1) {
          if (nodeStack.length) {
            return handleError('unexpected end of file');
          }

          if (j === 0) {
            return handleError('missing start tag');
          }

          return;
        }

        if (j !== i) {
          if (onText) {
            onText(xml.substring(j, i), decodeEntities, getContext);
            if (parseStop) {
              return;
            }
          }
        }

        w = xml.charCodeAt(i + 1);

        // parse comments + CDATA
        if (w === 33) {
          // "!"
          w = xml.charCodeAt(i + 2);
          if (w === 91 && xml.substr(i + 3, 6) === 'CDATA[') {
            // 91 == "["
            j = xml.indexOf(']]>', i);
            if (j === -1) {
              return handleError('unclosed cdata');
            }

            if (onCDATA) {
              onCDATA(xml.substring(i + 9, j), getContext);
              if (parseStop) {
                return;
              }
            }

            j += 3;
            continue;
          }

          if (w === 45 && xml.charCodeAt(i + 3) === 45) {
            // 45 == "-"
            j = xml.indexOf('-->', i);
            if (j === -1) {
              return handleError('unclosed comment');
            }

            if (onComment) {
              onComment(xml.substring(i + 4, j), decodeEntities, getContext);
              if (parseStop) {
                return;
              }
            }

            j += 3;
            continue;
          }

          j = xml.indexOf('>', i + 1);
          if (j === -1) {
            return handleError('unclosed tag');
          }

          if (onAttention) {
            onAttention(xml.substring(i, j + 1), decodeEntities, getContext);
            if (parseStop) {
              return;
            }
          }

          j += 1;
          continue;
        }

        if (w === 63) {
          // "?"
          j = xml.indexOf('?>', i);
          if (j === -1) {
            return handleError('unclosed question');
          }

          if (onQuestion) {
            onQuestion(xml.substring(i, j + 2), getContext);
            if (parseStop) {
              return;
            }
          }

          j += 2;
          continue;
        }

        j = xml.indexOf('>', i + 1);

        if (j == -1) {
          return handleError('unclosed tag');
        }

        // don't process attributes;
        // there are none
        cachedAttrs = {};

        // if (xml.charCodeAt(i+1) === 47) { // </...
        if (w === 47) {
          // </...
          tagStart = false;
          tagEnd = true;

          if (!nodeStack.length) {
            return handleError('missing open tag');
          }

          // verify open <-> close tag match
          x = elementName = nodeStack.pop();
          q = i + 2 + x.length;

          if (xml.substring(i + 2, q) !== x) {
            return handleError('closing tag mismatch');
          }

          // verify chars in close tag
          for (; q < j; q++) {
            w = xml.charCodeAt(q);

            if (w === 32 || w > 8 && w < 14) {
              // \f\n\r\t\v space
              continue;
            }

            return handleError('close tag');
          }
        } else {
          if (xml.charCodeAt(j - 1) === 47) {
            // .../>
            x = elementName = xml.substring(i + 1, j - 1);

            tagStart = true;
            tagEnd = true;
          } else {
            x = elementName = xml.substring(i + 1, j);

            tagStart = true;
            tagEnd = false;
          }

          if (!(w > 96 && w < 123 || w > 64 && w < 91 || w === 95 || w === 58)) {
            // char 95"_" 58":"
            return handleError('illegal first char nodeName');
          }

          for (q = 1, y = x.length; q < y; q++) {
            w = x.charCodeAt(q);

            if (w > 96 && w < 123 || w > 64 && w < 91 || w > 47 && w < 59 || w === 45 || w === 95) {
              continue;
            }

            if (w === 32 || w < 14 && w > 8) {
              // \f\n\r\t\v space
              elementName = x.substring(0, q);
              // maybe there are attributes
              cachedAttrs = null;
              break;
            }

            return handleError('invalid nodeName');
          }

          if (!tagEnd) {
            nodeStack.push(elementName);
          }
        }

        if (isNamespace) {

          _nsMatrix = nsMatrix;

          if (tagStart) {
            // remember old namespace
            // unless we're self-closing
            if (!tagEnd) {
              nsMatrixStack.push(_nsMatrix);
            }

            if (cachedAttrs === null) {
              // quick check, whether there may be namespace
              // declarations on the node; if that is the case
              // we need to eagerly parse the node attributes
              if (maybeNS = x.indexOf('xmlns', q) !== -1) {
                attrsStart = q;
                attrsString = x;

                getAttrs();

                maybeNS = false;
              }
            }
          }

          _elementName = elementName;

          w = elementName.indexOf(':');
          if (w !== -1) {
            xmlns = nsMatrix[elementName.substring(0, w)];

            // prefix given; namespace must exist
            if (!xmlns) {
              return handleError('missing namespace on <' + _elementName + '>');
            }

            elementName = elementName.substr(w + 1);
          } else {
            xmlns = nsMatrix['xmlns'];

            // if no default namespace is defined,
            // we'll import the element as anonymous.
            //
            // it is up to users to correct that to the document defined
            // targetNamespace, or whatever their undersanding of the
            // XML spec mandates.
          }

          // adjust namespace prefixs as configured
          if (xmlns) {
            elementName = xmlns + ':' + elementName;
          }
        }

        if (tagStart) {
          attrsStart = q;
          attrsString = x;

          if (onOpenTag) {
            if (proxy) {
              onOpenTag(elementProxy, decodeEntities, tagEnd, getContext);
            } else {
              onOpenTag(elementName, getAttrs, decodeEntities, tagEnd, getContext);
            }

            if (parseStop) {
              return;
            }
          }
        }

        if (tagEnd) {

          if (onCloseTag) {
            onCloseTag(proxy ? elementProxy : elementName, decodeEntities, tagStart, getContext);

            if (parseStop) {
              return;
            }
          }

          // restore old namespace
          if (isNamespace) {
            if (!tagStart) {
              nsMatrix = nsMatrixStack.pop();
            } else {
              nsMatrix = _nsMatrix;
            }
          }
        }

        j += 1;
      }
    } /** end parse */
  }

  function hasLowerCaseAlias(pkg) {
    return pkg.xml && pkg.xml.tagAlias === 'lowerCase';
  }

  var DEFAULT_NS_MAP = {
    'xsi': 'http://www.w3.org/2001/XMLSchema-instance'
  };

  var XSI_TYPE$1 = 'xsi:type';

  function serializeFormat(element) {
    return element.xml && element.xml.serialize;
  }

  function serializeAsType(element) {
    return serializeFormat(element) === XSI_TYPE$1;
  }

  function serializeAsProperty(element) {
    return serializeFormat(element) === 'property';
  }

  function capitalize(str) {
    return str.charAt(0).toUpperCase() + str.slice(1);
  }

  function aliasToName(aliasNs, pkg) {

    if (!hasLowerCaseAlias(pkg)) {
      return aliasNs.name;
    }

    return aliasNs.prefix + ':' + capitalize(aliasNs.localName);
  }

  function prefixedToName(nameNs, pkg) {

    var name = nameNs.name,
        localName = nameNs.localName;

    var typePrefix = pkg.xml && pkg.xml.typePrefix;

    if (typePrefix && localName.indexOf(typePrefix) === 0) {
      return nameNs.prefix + ':' + localName.slice(typePrefix.length);
    } else {
      return name;
    }
  }

  function normalizeXsiTypeName(name, model) {

    var nameNs = parseName(name);
    var pkg = model.getPackage(nameNs.prefix);

    return prefixedToName(nameNs, pkg);
  }

  function error$1(message) {
    return new Error(message);
  }

  /**
   * Get the moddle descriptor for a given instance or type.
   *
   * @param  {ModdleElement|Function} element
   *
   * @return {Object} the moddle descriptor
   */
  function getModdleDescriptor(element) {
    return element.$descriptor;
  }

  function defer(fn) {
    setTimeout(fn, 0);
  }

  /**
   * A parse context.
   *
   * @class
   *
   * @param {Object} options
   * @param {ElementHandler} options.rootHandler the root handler for parsing a document
   * @param {boolean} [options.lax=false] whether or not to ignore invalid elements
   */
  function Context(options) {

    /**
     * @property {ElementHandler} rootHandler
     */

    /**
     * @property {Boolean} lax
     */

    assign(this, options);

    this.elementsById = {};
    this.references = [];
    this.warnings = [];

    /**
     * Add an unresolved reference.
     *
     * @param {Object} reference
     */
    this.addReference = function (reference) {
      this.references.push(reference);
    };

    /**
     * Add a processed element.
     *
     * @param {ModdleElement} element
     */
    this.addElement = function (element) {

      if (!element) {
        throw error$1('expected element');
      }

      var elementsById = this.elementsById;

      var descriptor = getModdleDescriptor(element);

      var idProperty = descriptor.idProperty,
          id;

      if (idProperty) {
        id = element.get(idProperty.name);

        if (id) {

          if (elementsById[id]) {
            throw error$1('duplicate ID <' + id + '>');
          }

          elementsById[id] = element;
        }
      }
    };

    /**
     * Add an import warning.
     *
     * @param {Object} warning
     * @param {String} warning.message
     * @param {Error} [warning.error]
     */
    this.addWarning = function (warning) {
      this.warnings.push(warning);
    };
  }

  function BaseHandler() {}

  BaseHandler.prototype.handleEnd = function () {};
  BaseHandler.prototype.handleText = function () {};
  BaseHandler.prototype.handleNode = function () {};

  /**
   * A simple pass through handler that does nothing except for
   * ignoring all input it receives.
   *
   * This is used to ignore unknown elements and
   * attributes.
   */
  function NoopHandler() {}

  NoopHandler.prototype = Object.create(BaseHandler.prototype);

  NoopHandler.prototype.handleNode = function () {
    return this;
  };

  function BodyHandler() {}

  BodyHandler.prototype = Object.create(BaseHandler.prototype);

  BodyHandler.prototype.handleText = function (text) {
    this.body = (this.body || '') + text;
  };

  function ReferenceHandler(property, context) {
    this.property = property;
    this.context = context;
  }

  ReferenceHandler.prototype = Object.create(BodyHandler.prototype);

  ReferenceHandler.prototype.handleNode = function (node) {

    if (this.element) {
      throw error$1('expected no sub nodes');
    } else {
      this.element = this.createReference(node);
    }

    return this;
  };

  ReferenceHandler.prototype.handleEnd = function () {
    this.element.id = this.body;
  };

  ReferenceHandler.prototype.createReference = function (node) {
    return {
      property: this.property.ns.name,
      id: ''
    };
  };

  function ValueHandler(propertyDesc, element) {
    this.element = element;
    this.propertyDesc = propertyDesc;
  }

  ValueHandler.prototype = Object.create(BodyHandler.prototype);

  ValueHandler.prototype.handleEnd = function () {

    var value = this.body || '',
        element = this.element,
        propertyDesc = this.propertyDesc;

    value = coerceType(propertyDesc.type, value);

    if (propertyDesc.isMany) {
      element.get(propertyDesc.name).push(value);
    } else {
      element.set(propertyDesc.name, value);
    }
  };

  function BaseElementHandler() {}

  BaseElementHandler.prototype = Object.create(BodyHandler.prototype);

  BaseElementHandler.prototype.handleNode = function (node) {
    var parser = this,
        element = this.element;

    if (!element) {
      element = this.element = this.createElement(node);

      this.context.addElement(element);
    } else {
      parser = this.handleChild(node);
    }

    return parser;
  };

  /**
   * @class Reader.ElementHandler
   *
   */
  function ElementHandler(model, typeName, context) {
    this.model = model;
    this.type = model.getType(typeName);
    this.context = context;
  }

  ElementHandler.prototype = Object.create(BaseElementHandler.prototype);

  ElementHandler.prototype.addReference = function (reference) {
    this.context.addReference(reference);
  };

  ElementHandler.prototype.handleEnd = function () {

    var value = this.body,
        element = this.element,
        descriptor = getModdleDescriptor(element),
        bodyProperty = descriptor.bodyProperty;

    if (bodyProperty && value !== undefined) {
      value = coerceType(bodyProperty.type, value);
      element.set(bodyProperty.name, value);
    }
  };

  /**
   * Create an instance of the model from the given node.
   *
   * @param  {Element} node the xml node
   */
  ElementHandler.prototype.createElement = function (node) {
    var attributes = node.attributes,
        Type = this.type,
        descriptor = getModdleDescriptor(Type),
        context = this.context,
        instance = new Type({});

    forEach(attributes, function (value, name) {

      var prop = descriptor.propertiesByName[name],
          values$$1;

      if (prop && prop.isReference) {

        if (!prop.isMany) {
          context.addReference({
            element: instance,
            property: prop.ns.name,
            id: value
          });
        } else {
          // IDREFS: parse references as whitespace-separated list
          values$$1 = value.split(' ');

          forEach(values$$1, function (v) {
            context.addReference({
              element: instance,
              property: prop.ns.name,
              id: v
            });
          });
        }
      } else {
        if (prop) {
          value = coerceType(prop.type, value);
        }

        instance.set(name, value);
      }
    });

    return instance;
  };

  ElementHandler.prototype.getPropertyForNode = function (node) {

    var name = node.name;
    var nameNs = parseName(name);

    var type = this.type,
        model = this.model,
        descriptor = getModdleDescriptor(type);

    var propertyName = nameNs.name,
        property = descriptor.propertiesByName[propertyName],
        elementTypeName,
        elementType;

    // search for properties by name first

    if (property) {

      if (serializeAsType(property)) {
        elementTypeName = node.attributes[XSI_TYPE$1];

        // xsi type is optional, if it does not exists the
        // default type is assumed
        if (elementTypeName) {

          // take possible type prefixes from XML
          // into account, i.e.: xsi:type="t{ActualType}"
          elementTypeName = normalizeXsiTypeName(elementTypeName, model);

          elementType = model.getType(elementTypeName);

          return assign({}, property, { effectiveType: getModdleDescriptor(elementType).name });
        }
      }

      // search for properties by name first
      return property;
    }

    var pkg = model.getPackage(nameNs.prefix);

    if (pkg) {
      elementTypeName = aliasToName(nameNs, pkg);
      elementType = model.getType(elementTypeName);

      // search for collection members later
      property = find(descriptor.properties, function (p) {
        return !p.isVirtual && !p.isReference && !p.isAttribute && elementType.hasType(p.type);
      });

      if (property) {
        return assign({}, property, { effectiveType: getModdleDescriptor(elementType).name });
      }
    } else {
      // parse unknown element (maybe extension)
      property = find(descriptor.properties, function (p) {
        return !p.isReference && !p.isAttribute && p.type === 'Element';
      });

      if (property) {
        return property;
      }
    }

    throw error$1('unrecognized element <' + nameNs.name + '>');
  };

  ElementHandler.prototype.toString = function () {
    return 'ElementDescriptor[' + getModdleDescriptor(this.type).name + ']';
  };

  ElementHandler.prototype.valueHandler = function (propertyDesc, element) {
    return new ValueHandler(propertyDesc, element);
  };

  ElementHandler.prototype.referenceHandler = function (propertyDesc) {
    return new ReferenceHandler(propertyDesc, this.context);
  };

  ElementHandler.prototype.handler = function (type) {
    if (type === 'Element') {
      return new GenericElementHandler(this.model, type, this.context);
    } else {
      return new ElementHandler(this.model, type, this.context);
    }
  };

  /**
   * Handle the child element parsing
   *
   * @param  {Element} node the xml node
   */
  ElementHandler.prototype.handleChild = function (node) {
    var propertyDesc, type, element, childHandler;

    propertyDesc = this.getPropertyForNode(node);
    element = this.element;

    type = propertyDesc.effectiveType || propertyDesc.type;

    if (isSimple(type)) {
      return this.valueHandler(propertyDesc, element);
    }

    if (propertyDesc.isReference) {
      childHandler = this.referenceHandler(propertyDesc).handleNode(node);
    } else {
      childHandler = this.handler(type).handleNode(node);
    }

    var newElement = childHandler.element;

    // child handles may decide to skip elements
    // by not returning anything
    if (newElement !== undefined) {

      if (propertyDesc.isMany) {
        element.get(propertyDesc.name).push(newElement);
      } else {
        element.set(propertyDesc.name, newElement);
      }

      if (propertyDesc.isReference) {
        assign(newElement, {
          element: element
        });

        this.context.addReference(newElement);
      } else {
        // establish child -> parent relationship
        newElement.$parent = element;
      }
    }

    return childHandler;
  };

  /**
   * An element handler that performs special validation
   * to ensure the node it gets initialized with matches
   * the handlers type (namespace wise).
   *
   * @param {Moddle} model
   * @param {String} typeName
   * @param {Context} context
   */
  function RootElementHandler(model, typeName, context) {
    ElementHandler.call(this, model, typeName, context);
  }

  RootElementHandler.prototype = Object.create(ElementHandler.prototype);

  RootElementHandler.prototype.createElement = function (node) {

    var name = node.name,
        nameNs = parseName(name),
        model = this.model,
        type = this.type,
        pkg = model.getPackage(nameNs.prefix),
        typeName = pkg && aliasToName(nameNs, pkg) || name;

    // verify the correct namespace if we parse
    // the first element in the handler tree
    //
    // this ensures we don't mistakenly import wrong namespace elements
    if (!type.hasType(typeName)) {
      throw error$1('unexpected element <' + node.originalName + '>');
    }

    return ElementHandler.prototype.createElement.call(this, node);
  };

  function GenericElementHandler(model, typeName, context) {
    this.model = model;
    this.context = context;
  }

  GenericElementHandler.prototype = Object.create(BaseElementHandler.prototype);

  GenericElementHandler.prototype.createElement = function (node) {

    var name = node.name,
        ns = parseName(name),
        prefix = ns.prefix,
        uri = node.ns[prefix + '$uri'],
        attributes = node.attributes;

    return this.model.createAny(name, uri, attributes);
  };

  GenericElementHandler.prototype.handleChild = function (node) {

    var handler = new GenericElementHandler(this.model, 'Element', this.context).handleNode(node),
        element = this.element;

    var newElement = handler.element,
        children;

    if (newElement !== undefined) {
      children = element.$children = element.$children || [];
      children.push(newElement);

      // establish child -> parent relationship
      newElement.$parent = element;
    }

    return handler;
  };

  GenericElementHandler.prototype.handleText = function (text) {
    this.body = this.body || '' + text;
  };

  GenericElementHandler.prototype.handleEnd = function () {
    if (this.body) {
      this.element.$body = this.body;
    }
  };

  /**
   * A reader for a meta-model
   *
   * @param {Object} options
   * @param {Model} options.model used to read xml files
   * @param {Boolean} options.lax whether to make parse errors warnings
   */
  function Reader(options) {

    if (options instanceof Moddle) {
      options = {
        model: options
      };
    }

    assign(this, { lax: false }, options);
  }

  /**
   * Parse the given XML into a moddle document tree.
   *
   * @param {String} xml
   * @param {ElementHandler|Object} options or rootHandler
   * @param  {Function} done
   */
  Reader.prototype.fromXML = function (xml, options, done) {

    var rootHandler = options.rootHandler;

    if (options instanceof ElementHandler) {
      // root handler passed via (xml, { rootHandler: ElementHandler }, ...)
      rootHandler = options;
      options = {};
    } else {
      if (typeof options === 'string') {
        // rootHandler passed via (xml, 'someString', ...)
        rootHandler = this.handler(options);
        options = {};
      } else if (typeof rootHandler === 'string') {
        // rootHandler passed via (xml, { rootHandler: 'someString' }, ...)
        rootHandler = this.handler(rootHandler);
      }
    }

    var model = this.model,
        lax = this.lax;

    var context = new Context(assign({}, options, { rootHandler: rootHandler })),
        parser = new Parser({ proxy: true }),
        stack = new tinyStack();

    rootHandler.context = context;

    // push root handler
    stack.push(rootHandler);

    /**
     * Handle error.
     *
     * @param  {Error} err
     * @param  {Function} getContext
     * @param  {boolean} lax
     *
     * @return {boolean} true if handled
     */
    function handleError(err, getContext, lax) {

      var ctx = getContext();

      var line = ctx.line,
          column = ctx.column,
          data = ctx.data;

      // we receive the full context data here,
      // for elements trim down the information
      // to the tag name, only
      if (data.charAt(0) === '<' && data.indexOf(' ') !== -1) {
        data = data.slice(0, data.indexOf(' ')) + '>';
      }

      var message = 'unparsable content ' + (data ? data + ' ' : '') + 'detected\n\t' + 'line: ' + line + '\n\t' + 'column: ' + column + '\n\t' + 'nested error: ' + err.message;

      if (lax) {
        context.addWarning({
          message: message,
          error: err
        });

        console.warn('could not parse node');
        console.warn(err);

        return true;
      } else {
        console.error('could not parse document');
        console.error(err);

        throw error$1(message);
      }
    }

    function handleWarning(err, getContext) {
      // just like handling errors in <lax=true> mode
      return handleError(err, getContext, true);
    }

    /**
     * Resolve collected references on parse end.
     */
    function resolveReferences() {

      var elementsById = context.elementsById;
      var references = context.references;

      var i, r;

      for (i = 0; r = references[i]; i++) {
        var element = r.element;
        var reference = elementsById[r.id];
        var property = getModdleDescriptor(element).propertiesByName[r.property];

        if (!reference) {
          context.addWarning({
            message: 'unresolved reference <' + r.id + '>',
            element: r.element,
            property: r.property,
            value: r.id
          });
        }

        if (property.isMany) {
          var collection = element.get(property.name),
              idx = collection.indexOf(r);

          // we replace an existing place holder (idx != -1) or
          // append to the collection instead
          if (idx === -1) {
            idx = collection.length;
          }

          if (!reference) {
            // remove unresolvable reference
            collection.splice(idx, 1);
          } else {
            // add or update reference in collection
            collection[idx] = reference;
          }
        } else {
          element.set(property.name, reference);
        }
      }
    }

    function handleClose() {
      stack.pop().handleEnd();
    }

    var PREAMBLE_START_PATTERN = /^<\?xml /i;

    var ENCODING_PATTERN = / encoding="([^"]+)"/i;

    var UTF_8_PATTERN = /^utf-8$/i;

    function handleQuestion(question) {

      if (!PREAMBLE_START_PATTERN.test(question)) {
        return;
      }

      var match = ENCODING_PATTERN.exec(question);
      var encoding = match && match[1];

      if (!encoding || UTF_8_PATTERN.test(encoding)) {
        return;
      }

      context.addWarning({
        message: 'unsupported document encoding <' + encoding + '>, ' + 'falling back to UTF-8'
      });
    }

    function handleOpen(node, getContext) {
      var handler = stack.peek();

      try {
        stack.push(handler.handleNode(node));
      } catch (err) {

        if (handleError(err, getContext, lax)) {
          stack.push(new NoopHandler());
        }
      }
    }

    function handleCData(text) {
      stack.peek().handleText(text);
    }

    function handleText(text) {
      // strip whitespace only nodes, i.e. before
      // <!CDATA[ ... ]> sections and in between tags
      text = text.trim();

      if (!text) {
        return;
      }

      stack.peek().handleText(text);
    }

    var uriMap = model.getPackages().reduce(function (uriMap, p) {
      uriMap[p.uri] = p.prefix;

      return uriMap;
    }, {});

    parser.ns(uriMap).on('openTag', function (obj, decodeStr, selfClosing, getContext) {

      // gracefully handle unparsable attributes (attrs=false)
      var attrs = obj.attrs || {};

      var decodedAttrs = Object.keys(attrs).reduce(function (d, key) {
        var value = decodeStr(attrs[key]);

        d[key] = value;

        return d;
      }, {});

      var node = {
        name: obj.name,
        originalName: obj.originalName,
        attributes: decodedAttrs,
        ns: obj.ns
      };

      handleOpen(node, getContext);
    }).on('question', handleQuestion).on('closeTag', handleClose).on('cdata', handleCData).on('text', function (text, decodeEntities$$1) {
      handleText(decodeEntities$$1(text));
    }).on('error', handleError).on('warn', handleWarning);

    // deferred parse XML to make loading really ascnchronous
    // this ensures the execution environment (node or browser)
    // is kept responsive and that certain optimization strategies
    // can kick in
    defer(function () {
      var err;

      try {
        parser.parse(xml);

        resolveReferences();
      } catch (e) {
        err = e;
      }

      var element = rootHandler.element;

      // handle the situation that we could not extract
      // the desired root element from the document
      if (!err && !element) {
        err = error$1('failed to parse document as <' + rootHandler.type.$descriptor.name + '>');
      }

      done(err, err ? undefined : element, context);
    });
  };

  Reader.prototype.handler = function (name) {
    return new RootElementHandler(this.model, name);
  };

  var XML_PREAMBLE = '<?xml version="1.0" encoding="UTF-8"?>\n';

  var ESCAPE_ATTR_CHARS = /<|>|'|"|&|\n\r|\n/g;
  var ESCAPE_CHARS = /<|>|&/g;

  function Namespaces(parent) {

    var prefixMap = {};
    var uriMap = {};
    var used = {};

    var wellknown = [];
    var custom = [];

    // API

    this.byUri = function (uri) {
      return uriMap[uri] || parent && parent.byUri(uri);
    };

    this.add = function (ns, isWellknown) {

      uriMap[ns.uri] = ns;

      if (isWellknown) {
        wellknown.push(ns);
      } else {
        custom.push(ns);
      }

      this.mapPrefix(ns.prefix, ns.uri);
    };

    this.uriByPrefix = function (prefix) {
      return prefixMap[prefix || 'xmlns'];
    };

    this.mapPrefix = function (prefix, uri) {
      prefixMap[prefix || 'xmlns'] = uri;
    };

    this.logUsed = function (ns) {
      var uri = ns.uri;

      used[uri] = this.byUri(uri);
    };

    this.getUsed = function (ns) {

      function isUsed(ns) {
        return used[ns.uri];
      }

      var allNs = [].concat(wellknown, custom);

      return allNs.filter(isUsed);
    };
  }

  function lower(string) {
    return string.charAt(0).toLowerCase() + string.slice(1);
  }

  function nameToAlias(name, pkg) {
    if (hasLowerCaseAlias(pkg)) {
      return lower(name);
    } else {
      return name;
    }
  }

  function inherits(ctor, superCtor) {
    ctor.super_ = superCtor;
    ctor.prototype = Object.create(superCtor.prototype, {
      constructor: {
        value: ctor,
        enumerable: false,
        writable: true,
        configurable: true
      }
    });
  }

  function nsName(ns) {
    if (isString(ns)) {
      return ns;
    } else {
      return (ns.prefix ? ns.prefix + ':' : '') + ns.localName;
    }
  }

  function getNsAttrs(namespaces) {

    return map(namespaces.getUsed(), function (ns) {
      var name = 'xmlns' + (ns.prefix ? ':' + ns.prefix : '');
      return { name: name, value: ns.uri };
    });
  }

  function getElementNs(ns, descriptor) {
    if (descriptor.isGeneric) {
      return assign({ localName: descriptor.ns.localName }, ns);
    } else {
      return assign({ localName: nameToAlias(descriptor.ns.localName, descriptor.$pkg) }, ns);
    }
  }

  function getPropertyNs(ns, descriptor) {
    return assign({ localName: descriptor.ns.localName }, ns);
  }

  function getSerializableProperties(element) {
    var descriptor = element.$descriptor;

    return filter(descriptor.properties, function (p) {
      var name = p.name;

      if (p.isVirtual) {
        return false;
      }

      // do not serialize defaults
      if (!element.hasOwnProperty(name)) {
        return false;
      }

      var value = element[name];

      // do not serialize default equals
      if (value === p.default) {
        return false;
      }

      // do not serialize null properties
      if (value === null) {
        return false;
      }

      return p.isMany ? value.length : true;
    });
  }

  var ESCAPE_ATTR_MAP = {
    '\n': '#10',
    '\n\r': '#10',
    '"': '#34',
    '\'': '#39',
    '<': '#60',
    '>': '#62',
    '&': '#38'
  };

  var ESCAPE_MAP = {
    '<': 'lt',
    '>': 'gt',
    '&': 'amp'
  };

  function escape(str, charPattern, replaceMap) {

    // ensure we are handling strings here
    str = isString(str) ? str : '' + str;

    return str.replace(charPattern, function (s) {
      return '&' + replaceMap[s] + ';';
    });
  }

  /**
   * Escape a string attribute to not contain any bad values (line breaks, '"', ...)
   *
   * @param {String} str the string to escape
   * @return {String} the escaped string
   */
  function escapeAttr(str) {
    return escape(str, ESCAPE_ATTR_CHARS, ESCAPE_ATTR_MAP);
  }

  function escapeBody(str) {
    return escape(str, ESCAPE_CHARS, ESCAPE_MAP);
  }

  function filterAttributes(props) {
    return filter(props, function (p) {
      return p.isAttr;
    });
  }

  function filterContained(props) {
    return filter(props, function (p) {
      return !p.isAttr;
    });
  }

  function ReferenceSerializer(tagName) {
    this.tagName = tagName;
  }

  ReferenceSerializer.prototype.build = function (element) {
    this.element = element;
    return this;
  };

  ReferenceSerializer.prototype.serializeTo = function (writer) {
    writer.appendIndent().append('<' + this.tagName + '>' + this.element.id + '</' + this.tagName + '>').appendNewLine();
  };

  function BodySerializer() {}

  BodySerializer.prototype.serializeValue = BodySerializer.prototype.serializeTo = function (writer) {
    writer.append(this.escape ? escapeBody(this.value) : this.value);
  };

  BodySerializer.prototype.build = function (prop, value) {
    this.value = value;

    if (prop.type === 'String' && value.search(ESCAPE_CHARS) !== -1) {
      this.escape = true;
    }

    return this;
  };

  function ValueSerializer(tagName) {
    this.tagName = tagName;
  }

  inherits(ValueSerializer, BodySerializer);

  ValueSerializer.prototype.serializeTo = function (writer) {

    writer.appendIndent().append('<' + this.tagName + '>');

    this.serializeValue(writer);

    writer.append('</' + this.tagName + '>').appendNewLine();
  };

  function ElementSerializer(parent, propertyDescriptor) {
    this.body = [];
    this.attrs = [];

    this.parent = parent;
    this.propertyDescriptor = propertyDescriptor;
  }

  ElementSerializer.prototype.build = function (element) {
    this.element = element;

    var elementDescriptor = element.$descriptor,
        propertyDescriptor = this.propertyDescriptor;

    var otherAttrs, properties;

    var isGeneric = elementDescriptor.isGeneric;

    if (isGeneric) {
      otherAttrs = this.parseGeneric(element);
    } else {
      otherAttrs = this.parseNsAttributes(element);
    }

    if (propertyDescriptor) {
      this.ns = this.nsPropertyTagName(propertyDescriptor);
    } else {
      this.ns = this.nsTagName(elementDescriptor);
    }

    // compute tag name
    this.tagName = this.addTagName(this.ns);

    if (!isGeneric) {
      properties = getSerializableProperties(element);

      this.parseAttributes(filterAttributes(properties));
      this.parseContainments(filterContained(properties));
    }

    this.parseGenericAttributes(element, otherAttrs);

    return this;
  };

  ElementSerializer.prototype.nsTagName = function (descriptor) {
    var effectiveNs = this.logNamespaceUsed(descriptor.ns);
    return getElementNs(effectiveNs, descriptor);
  };

  ElementSerializer.prototype.nsPropertyTagName = function (descriptor) {
    var effectiveNs = this.logNamespaceUsed(descriptor.ns);
    return getPropertyNs(effectiveNs, descriptor);
  };

  ElementSerializer.prototype.isLocalNs = function (ns) {
    return ns.uri === this.ns.uri;
  };

  /**
   * Get the actual ns attribute name for the given element.
   *
   * @param {Object} element
   * @param {Boolean} [element.inherited=false]
   *
   * @return {Object} nsName
   */
  ElementSerializer.prototype.nsAttributeName = function (element) {

    var ns;

    if (isString(element)) {
      ns = parseName(element);
    } else {
      ns = element.ns;
    }

    // return just local name for inherited attributes
    if (element.inherited) {
      return { localName: ns.localName };
    }

    // parse + log effective ns
    var effectiveNs = this.logNamespaceUsed(ns);

    // LOG ACTUAL namespace use
    this.getNamespaces().logUsed(effectiveNs);

    // strip prefix if same namespace like parent
    if (this.isLocalNs(effectiveNs)) {
      return { localName: ns.localName };
    } else {
      return assign({ localName: ns.localName }, effectiveNs);
    }
  };

  ElementSerializer.prototype.parseGeneric = function (element) {

    var self = this,
        body = this.body;

    var attributes = [];

    forEach(element, function (val, key) {

      var nonNsAttr;

      if (key === '$body') {
        body.push(new BodySerializer().build({ type: 'String' }, val));
      } else if (key === '$children') {
        forEach(val, function (child) {
          body.push(new ElementSerializer(self).build(child));
        });
      } else if (key.indexOf('$') !== 0) {
        nonNsAttr = self.parseNsAttribute(element, key, val);

        if (nonNsAttr) {
          attributes.push({ name: key, value: val });
        }
      }
    });

    return attributes;
  };

  ElementSerializer.prototype.parseNsAttribute = function (element, name, value) {
    var model = element.$model;

    var nameNs = parseName(name);

    var ns;

    // parse xmlns:foo="http://foo.bar"
    if (nameNs.prefix === 'xmlns') {
      ns = { prefix: nameNs.localName, uri: value };
    }

    // parse xmlns="http://foo.bar"
    if (!nameNs.prefix && nameNs.localName === 'xmlns') {
      ns = { uri: value };
    }

    if (!ns) {
      return {
        name: name,
        value: value
      };
    }

    if (model && model.getPackage(value)) {
      // register well known namespace
      this.logNamespace(ns, true, true);
    } else {
      // log custom namespace directly as used
      var actualNs = this.logNamespaceUsed(ns, true);

      this.getNamespaces().logUsed(actualNs);
    }
  };

  /**
   * Parse namespaces and return a list of left over generic attributes
   *
   * @param  {Object} element
   * @return {Array<Object>}
   */
  ElementSerializer.prototype.parseNsAttributes = function (element, attrs) {
    var self = this;

    var genericAttrs = element.$attrs;

    var attributes = [];

    // parse namespace attributes first
    // and log them. push non namespace attributes to a list
    // and process them later
    forEach(genericAttrs, function (value, name) {

      var nonNsAttr = self.parseNsAttribute(element, name, value);

      if (nonNsAttr) {
        attributes.push(nonNsAttr);
      }
    });

    return attributes;
  };

  ElementSerializer.prototype.parseGenericAttributes = function (element, attributes) {

    var self = this;

    forEach(attributes, function (attr) {

      // do not serialize xsi:type attribute
      // it is set manually based on the actual implementation type
      if (attr.name === XSI_TYPE$1) {
        return;
      }

      try {
        self.addAttribute(self.nsAttributeName(attr.name), attr.value);
      } catch (e) {
        console.warn('missing namespace information for ', attr.name, '=', attr.value, 'on', element, e);
      }
    });
  };

  ElementSerializer.prototype.parseContainments = function (properties) {

    var self = this,
        body = this.body,
        element = this.element;

    forEach(properties, function (p) {
      var value = element.get(p.name),
          isReference = p.isReference,
          isMany = p.isMany;

      if (!isMany) {
        value = [value];
      }

      if (p.isBody) {
        body.push(new BodySerializer().build(p, value[0]));
      } else if (isSimple(p.type)) {
        forEach(value, function (v) {
          body.push(new ValueSerializer(self.addTagName(self.nsPropertyTagName(p))).build(p, v));
        });
      } else if (isReference) {
        forEach(value, function (v) {
          body.push(new ReferenceSerializer(self.addTagName(self.nsPropertyTagName(p))).build(v));
        });
      } else {
        // allow serialization via type
        // rather than element name
        var asType = serializeAsType(p),
            asProperty = serializeAsProperty(p);

        forEach(value, function (v) {
          var serializer;

          if (asType) {
            serializer = new TypeSerializer(self, p);
          } else if (asProperty) {
            serializer = new ElementSerializer(self, p);
          } else {
            serializer = new ElementSerializer(self);
          }

          body.push(serializer.build(v));
        });
      }
    });
  };

  ElementSerializer.prototype.getNamespaces = function (local) {

    var namespaces = this.namespaces,
        parent = this.parent,
        parentNamespaces;

    if (!namespaces) {
      parentNamespaces = parent && parent.getNamespaces();

      if (local || !parentNamespaces) {
        this.namespaces = namespaces = new Namespaces(parentNamespaces);
      } else {
        namespaces = parentNamespaces;
      }
    }

    return namespaces;
  };

  ElementSerializer.prototype.logNamespace = function (ns, wellknown, local) {
    var namespaces = this.getNamespaces(local);

    var nsUri = ns.uri,
        nsPrefix = ns.prefix;

    var existing = namespaces.byUri(nsUri);

    if (!existing) {
      namespaces.add(ns, wellknown);
    }

    namespaces.mapPrefix(nsPrefix, nsUri);

    return ns;
  };

  ElementSerializer.prototype.logNamespaceUsed = function (ns, local) {
    var element = this.element,
        model = element.$model,
        namespaces = this.getNamespaces(local);

    // ns may be
    //
    //   * prefix only
    //   * prefix:uri
    //   * localName only

    var prefix = ns.prefix,
        uri = ns.uri,
        newPrefix,
        idx,
        wellknownUri;

    // handle anonymous namespaces (elementForm=unqualified), cf. #23
    if (!prefix && !uri) {
      return { localName: ns.localName };
    }

    wellknownUri = DEFAULT_NS_MAP[prefix] || model && (model.getPackage(prefix) || {}).uri;

    uri = uri || wellknownUri || namespaces.uriByPrefix(prefix);

    if (!uri) {
      throw new Error('no namespace uri given for prefix <' + prefix + '>');
    }

    ns = namespaces.byUri(uri);

    if (!ns) {
      newPrefix = prefix;
      idx = 1;

      // find a prefix that is not mapped yet
      while (namespaces.uriByPrefix(newPrefix)) {
        newPrefix = prefix + '_' + idx++;
      }

      ns = this.logNamespace({ prefix: newPrefix, uri: uri }, wellknownUri === uri);
    }

    if (prefix) {
      namespaces.mapPrefix(prefix, uri);
    }

    return ns;
  };

  ElementSerializer.prototype.parseAttributes = function (properties) {
    var self = this,
        element = this.element;

    forEach(properties, function (p) {

      var value = element.get(p.name);

      if (p.isReference) {

        if (!p.isMany) {
          value = value.id;
        } else {
          var values$$1 = [];
          forEach(value, function (v) {
            values$$1.push(v.id);
          });
          // IDREFS is a whitespace-separated list of references.
          value = values$$1.join(' ');
        }
      }

      self.addAttribute(self.nsAttributeName(p), value);
    });
  };

  ElementSerializer.prototype.addTagName = function (nsTagName) {
    var actualNs = this.logNamespaceUsed(nsTagName);

    this.getNamespaces().logUsed(actualNs);

    return nsName(nsTagName);
  };

  ElementSerializer.prototype.addAttribute = function (name, value) {
    var attrs = this.attrs;

    if (isString(value)) {
      value = escapeAttr(value);
    }

    attrs.push({ name: name, value: value });
  };

  ElementSerializer.prototype.serializeAttributes = function (writer) {
    var attrs = this.attrs,
        namespaces = this.namespaces;

    if (namespaces) {
      attrs = getNsAttrs(namespaces).concat(attrs);
    }

    forEach(attrs, function (a) {
      writer.append(' ').append(nsName(a.name)).append('="').append(a.value).append('"');
    });
  };

  ElementSerializer.prototype.serializeTo = function (writer) {
    var firstBody = this.body[0],
        indent = firstBody && firstBody.constructor !== BodySerializer;

    writer.appendIndent().append('<' + this.tagName);

    this.serializeAttributes(writer);

    writer.append(firstBody ? '>' : ' />');

    if (firstBody) {

      if (indent) {
        writer.appendNewLine().indent();
      }

      forEach(this.body, function (b) {
        b.serializeTo(writer);
      });

      if (indent) {
        writer.unindent().appendIndent();
      }

      writer.append('</' + this.tagName + '>');
    }

    writer.appendNewLine();
  };

  /**
   * A serializer for types that handles serialization of data types
   */
  function TypeSerializer(parent, propertyDescriptor) {
    ElementSerializer.call(this, parent, propertyDescriptor);
  }

  inherits(TypeSerializer, ElementSerializer);

  TypeSerializer.prototype.parseNsAttributes = function (element) {

    // extracted attributes
    var attributes = ElementSerializer.prototype.parseNsAttributes.call(this, element);

    var descriptor = element.$descriptor;

    // only serialize xsi:type if necessary
    if (descriptor.name === this.propertyDescriptor.type) {
      return attributes;
    }

    var typeNs = this.typeNs = this.nsTagName(descriptor);
    this.getNamespaces().logUsed(this.typeNs);

    // add xsi:type attribute to represent the elements
    // actual type

    var pkg = element.$model.getPackage(typeNs.uri),
        typePrefix = pkg.xml && pkg.xml.typePrefix || '';

    this.addAttribute(this.nsAttributeName(XSI_TYPE$1), (typeNs.prefix ? typeNs.prefix + ':' : '') + typePrefix + descriptor.ns.localName);

    return attributes;
  };

  TypeSerializer.prototype.isLocalNs = function (ns) {
    return ns.uri === this.typeNs.uri;
  };

  function SavingWriter() {
    this.value = '';

    this.write = function (str) {
      this.value += str;
    };
  }

  function FormatingWriter(out, format) {

    var indent = [''];

    this.append = function (str) {
      out.write(str);

      return this;
    };

    this.appendNewLine = function () {
      if (format) {
        out.write('\n');
      }

      return this;
    };

    this.appendIndent = function () {
      if (format) {
        out.write(indent.join('  '));
      }

      return this;
    };

    this.indent = function () {
      indent.push('');
      return this;
    };

    this.unindent = function () {
      indent.pop();
      return this;
    };
  }

  /**
   * A writer for meta-model backed document trees
   *
   * @param {Object} options output options to pass into the writer
   */
  function Writer(options) {

    options = assign({ format: false, preamble: true }, options || {});

    function toXML(tree, writer) {
      var internalWriter = writer || new SavingWriter();
      var formatingWriter = new FormatingWriter(internalWriter, options.format);

      if (options.preamble) {
        formatingWriter.append(XML_PREAMBLE);
      }

      new ElementSerializer().build(tree).serializeTo(formatingWriter);

      if (!writer) {
        return internalWriter.value;
      }
    }

    return {
      toXML: toXML
    };
  }

  /**
   * A sub class of {@link Moddle} with support for import and export of DMN xml files.
   *
   * @class DmnModdle
   * @extends Moddle
   *
   * @param {Object|Array} packages to use for instantiating the model
   * @param {Object} [options] additional options to pass over
   */
  function DmnModdle(packages, options) {
    Moddle.call(this, packages, options);
  }

  DmnModdle.prototype = Object.create(Moddle.prototype);

  /**
   * Instantiates a DMN model tree from a given xml string.
   *
   * @param {String}   xmlStr
   * @param {String}   [typeName='dmn:Definitions'] name of the root element
   * @param {Object}   [options]  options to pass to the underlying reader
   * @param {Function} done       callback that is invoked with (err, result, parseContext)
   *                              once the import completes
   */
  DmnModdle.prototype.fromXML = function (xmlStr, typeName, options, done) {

    if (!isString(typeName)) {
      done = options;
      options = typeName;
      typeName = 'dmn:Definitions';
    }

    if (isFunction(options)) {
      done = options;
      options = {};
    }

    var reader = new Reader(assign({ model: this, lax: true }, options));
    var rootHandler = reader.handler(typeName);

    reader.fromXML(xmlStr, rootHandler, done);
  };

  /**
   * Serializes a DMN object tree to XML.
   *
   * @param {String}   element    the root element, typically an instance of `Definitions`
   * @param {Object}   [options]  to pass to the underlying writer
   * @param {Function} done       callback invoked with (err, xmlStr) once the import completes
   */
  DmnModdle.prototype.toXML = function (element, options, done) {

    if (isFunction(options)) {
      done = options;
      options = {};
    }

    var writer = new Writer(options);

    var result;
    var err;

    try {
      result = writer.toXML(element);
    } catch (e) {
      err = e;
    }

    return done(err, result);
  };

  var name = "DMN";
  var uri = "http://www.omg.org/spec/DMN/20151101/dmn.xsd";
  var xml = { "tagAlias": "lowerCase" };
  var prefix = "dmn";
  var types = [{ "name": "DMNElement", "isAbstract": true, "properties": [{ "name": "description", "type": "String" }, { "name": "id", "type": "String", "isAttr": true, "isId": true }, { "name": "label", "type": "String", "isAttr": true }, { "name": "extensionElements", "type": "ExtensionElements" }] }, { "name": "NamedElement", "isAbstract": true, "superClass": ["DMNElement"], "properties": [{ "name": "name", "type": "String", "isAttr": true }] }, { "name": "DMNElementReference", "properties": [{ "name": "href", "type": "String", "isAttr": true }] }, { "name": "ExtensionElements", "properties": [{ "name": "values", "type": "Element", "isMany": true }] }, { "name": "Definitions", "superClass": ["NamedElement"], "properties": [{ "name": "namespace", "type": "String", "isAttr": true }, { "name": "typeLanguage", "type": "String", "isAttr": true, "default": "http://www.omg.org/spec/FEEL/20140401" }, { "name": "expressionLanguage", "type": "String", "isAttr": true, "default": "http://www.omg.org/spec/FEEL/20140401" }, { "name": "exporter", "type": "String", "isAttr": true }, { "name": "exporterVersion", "type": "String", "isAttr": true }, { "name": "itemDefinition", "type": "ItemDefinition", "isMany": true, "xml": { "serialize": "property" } }, { "name": "drgElements", "type": "DRGElement", "isMany": true }, { "name": "artifacts", "type": "Artifact", "isMany": true }] }, { "name": "Import", "properties": [{ "name": "namespace", "type": "String", "isAttr": true }, { "name": "locationURI", "type": "String", "isAttr": true }, { "name": "importType", "type": "String", "isAttr": true }] }, { "name": "DRGElement", "isAbstract": true, "superClass": ["NamedElement"] }, { "name": "Decision", "superClass": ["DRGElement"], "properties": [{ "name": "question", "type": "String" }, { "name": "allowedAnswers", "type": "String" }, { "name": "variable", "type": "InformationItem", "xml": { "serialize": "property" } }, { "name": "informationRequirement", "type": "InformationRequirement", "isMany": true, "xml": { "serialize": "property" } }, { "name": "knowledgeRequirement", "type": "KnowledgeRequirement", "isMany": true, "xml": { "serialize": "property" } }, { "name": "authorityRequirement", "type": "AuthorityRequirement", "isMany": true, "xml": { "serialize": "property" } }, { "name": "decisionTable", "type": "DecisionTable", "xml": { "serialize": "property" } }, { "name": "literalExpression", "type": "LiteralExpression", "xml": { "serialize": "property" } }] }, { "name": "BusinessKnowledgeModel", "superClass": ["DRGElement"], "properties": [{ "name": "encapsulatedLogic", "type": "FunctionDefinition" }, { "name": "variable", "type": "InformationItem", "xml": { "serialize": "property" } }, { "name": "knowledgeRequirement", "type": "KnowledgeRequirement", "isMany": true, "xml": { "serialize": "property" } }, { "name": "authorityRequirement", "type": "AuthorityRequirement", "isMany": true, "xml": { "serialize": "property" } }] }, { "name": "InputData", "superClass": ["DRGElement"], "properties": [{ "name": "variable", "type": "InformationItem", "xml": { "serialize": "property" } }] }, { "name": "KnowledgeSource", "superClass": ["DRGElement"], "properties": [{ "name": "authorityRequirement", "type": "AuthorityRequirement", "isMany": true, "xml": { "serialize": "property" } }, { "name": "type", "type": "String", "isAttr": true }, { "name": "owner", "type": "DMNElementReference", "isAttr": true }, { "name": "locationURI", "type": "String", "isAttr": true }] }, { "name": "InformationRequirement", "properties": [{ "name": "requiredDecision", "type": "DMNElementReference", "xml": { "serialize": "property" } }, { "name": "requiredInput", "type": "DMNElementReference", "xml": { "serialize": "property" } }] }, { "name": "KnowledgeRequirement", "properties": [{ "name": "requiredKnowledge", "type": "DMNElementReference", "isUnique": true, "xml": { "serialize": "property" } }] }, { "name": "AuthorityRequirement", "properties": [{ "name": "requiredDecision", "type": "DMNElementReference", "xml": { "serialize": "property" } }, { "name": "requiredInput", "type": "DMNElementReference", "xml": { "serialize": "property" } }, { "name": "requiredAuthority", "type": "DMNElementReference", "xml": { "serialize": "property" } }] }, { "name": "Expression", "isAbstract": true, "superClass": ["DMNElement"], "properties": [{ "name": "typeRef", "type": "String", "isAttr": true }] }, { "name": "ItemDefinition", "superClass": ["NamedElement"], "properties": [{ "name": "typeLanguage", "type": "String", "isAttr": true }, { "name": "isCollection", "type": "Boolean", "isAttr": true, "default": false }, { "name": "typeRef", "type": "String" }, { "name": "allowedValues", "type": "UnaryTests", "isMany": true, "xml": { "serialize": "property" } }] }, { "name": "LiteralExpression", "superClass": ["Expression"], "properties": [{ "name": "expressionLanguage", "type": "String", "isAttr": true }, { "name": "importedValues", "type": "ImportedValues" }, { "name": "text", "type": "String" }] }, { "name": "InformationItem", "superClass": ["NamedElement"], "properties": [{ "name": "typeRef", "type": "String", "isAttr": true }] }, { "name": "DecisionTable", "superClass": ["Expression"], "properties": [{ "name": "input", "type": "InputClause", "isMany": true, "xml": { "serialize": "property" } }, { "name": "output", "type": "OutputClause", "isMany": true, "xml": { "serialize": "property" } }, { "name": "rule", "type": "DecisionRule", "isMany": true, "xml": { "serialize": "property" } }, { "name": "hitPolicy", "type": "HitPolicy", "isAttr": true, "default": "UNIQUE" }, { "name": "aggregation", "type": "BuiltinAggregator", "isAttr": true }, { "name": "preferredOrientation", "type": "DecisionTableOrientation", "isAttr": true, "default": "Rule-as-Row" }, { "name": "outputLabel", "type": "String", "isAttr": true }] }, { "name": "DecisionRule", "superClass": ["DMNElement"], "properties": [{ "name": "inputEntry", "type": "UnaryTests", "isMany": true, "xml": { "serialize": "property" } }, { "name": "outputEntry", "type": "LiteralExpression", "isMany": true, "xml": { "serialize": "property" } }] }, { "name": "ImportedValues", "superClass": ["Import"], "properties": [{ "name": "importedElement", "type": "String", "isMany": true, "xml": { "serialize": "property" } }, { "name": "expressionLanguage", "type": "String", "isAttr": true }] }, { "name": "Artifact", "isAbstract": true, "superClass": ["DMNElement"] }, { "name": "TextAnnotation", "superClass": ["Artifact"], "properties": [{ "name": "text", "type": "String", "xml": { "serialize": "property" } }, { "name": "textFormat", "type": "String", "isAttr": true }] }, { "name": "Association", "superClass": ["Artifact"], "properties": [{ "name": "sourceRef", "type": "DMNElementReference", "xml": { "serialize": "property" } }, { "name": "targetRef", "type": "DMNElementReference", "xml": { "serialize": "property" } }, { "name": "associationDirection", "type": "AssociationDirection", "isAttr": true, "default": "None" }] }, { "name": "InputClause", "superClass": ["DMNElement"], "properties": [{ "name": "inputExpression", "type": "LiteralExpression", "xml": { "serialize": "property" } }, { "name": "inputValues", "type": "UnaryTests", "xml": { "serialize": "property" } }] }, { "name": "OutputClause", "superClass": ["DMNElement"], "properties": [{ "name": "outputValues", "type": "UnaryTests", "xml": { "serialize": "property" } }, { "name": "defaultOutputEntry", "type": "LiteralExpression", "xml": { "serialize": "property" } }, { "name": "name", "type": "String", "isAttr": true }, { "name": "typeRef", "type": "String", "isAttr": true }] }, { "name": "UnaryTests", "superClass": ["DMNElement"], "properties": [{ "name": "text", "type": "String" }, { "name": "expressionLanguage", "type": "String", "isAttr": true }] }, { "name": "FunctionDefinition", "superClass": ["Expression"], "properties": [{ "name": "formalParameter", "type": "InformationItem", "isMany": true, "xml": { "serialize": "property" } }, { "name": "expression", "type": "String", "isReference": true, "xml": { "serialize": "property" } }] }];
  var emumerations = [{ "name": "AssociationDirection", "literalValues": [{ "name": "None" }, { "name": "One" }, { "name": "Both" }] }, { "name": "HitPolicy", "literalValues": [{ "name": "UNIQUE" }, { "name": "FIRST" }, { "name": "PRIORITY" }, { "name": "ANY" }, { "name": "COLLECT" }, { "name": "RULE ORDER" }, { "name": "OUTPUT ORDER" }] }, { "name": "BuiltinAggregator", "literalValues": [{ "name": "SUM" }, { "name": "COUNT" }, { "name": "MIN" }, { "name": "MAX" }] }, { "name": "DecisionTableOrientation", "literalValues": [{ "name": "Rule-as-Row" }, { "name": "Rule-as-Column" }, { "name": "CrossTable" }] }];
  var DmnPackage = {
  	name: name,
  	uri: uri,
  	xml: xml,
  	prefix: prefix,
  	types: types,
  	emumerations: emumerations
  };

  var name$1 = "Camunda";
  var uri$1 = "http://camunda.org/schema/1.0/dmn";
  var prefix$1 = "camunda";
  var xml$1 = { "tagAlias": "lowerCase" };
  var types$1 = [{ "name": "InputVariable", "extends": ["dmn:InputClause"], "properties": [{ "name": "inputVariable", "isAttr": true, "type": "String" }] }];
  var CamundaPackage = {
  	name: name$1,
  	uri: uri$1,
  	prefix: prefix$1,
  	xml: xml$1,
  	types: types$1
  };

  var name$2 = "DC";
  var uri$2 = "http://www.omg.org/spec/DD/20100524/DC";
  var types$2 = [{ "name": "Boolean" }, { "name": "Integer" }, { "name": "Real" }, { "name": "String" }, { "name": "Font", "properties": [{ "name": "name", "type": "String", "isAttr": true }, { "name": "size", "type": "Real", "isAttr": true }, { "name": "isBold", "type": "Boolean", "isAttr": true }, { "name": "isItalic", "type": "Boolean", "isAttr": true }, { "name": "isUnderline", "type": "Boolean", "isAttr": true }, { "name": "isStrikeThrough", "type": "Boolean", "isAttr": true }] }, { "name": "Point", "properties": [{ "name": "x", "type": "Real", "default": "0", "isAttr": true }, { "name": "y", "type": "Real", "default": "0", "isAttr": true }] }, { "name": "Bounds", "properties": [{ "name": "x", "type": "Real", "default": "0", "isAttr": true }, { "name": "y", "type": "Real", "default": "0", "isAttr": true }, { "name": "width", "type": "Real", "isAttr": true }, { "name": "height", "type": "Real", "isAttr": true }] }];
  var prefix$2 = "dc";
  var associations = [];
  var BiodcPackage = {
  	name: name$2,
  	uri: uri$2,
  	types: types$2,
  	prefix: prefix$2,
  	associations: associations
  };

  var name$3 = "bpmn.io DI for DMN";
  var uri$3 = "http://bpmn.io/schema/dmn/biodi/1.0";
  var prefix$3 = "biodi";
  var xml$2 = { "tagAlias": "lowerCase" };
  var types$3 = [{ "name": "Edge", "superClass": ["Element"], "properties": [{ "name": "source", "type": "String", "isAttr": true }, { "name": "waypoints", "type": "Waypoint", "isMany": true, "xml": { "serialize": "property" } }] }, { "name": "Bounds", "superClass": ["dc:Bounds", "Element"] }, { "name": "Waypoint", "superClass": ["dc:Point"] }];
  var BiodiPackage = {
  	name: name$3,
  	uri: uri$3,
  	prefix: prefix$3,
  	xml: xml$2,
  	types: types$3
  };

  var packages = {
    dmn: DmnPackage,
    camunda: CamundaPackage,
    dc: BiodcPackage,
    biodi: BiodiPackage
  };

  function DmnModdle$1 (additionalPackages, options) {
    var pks = assign({}, packages, additionalPackages);

    return new DmnModdle(pks, options);
  }

  /**
   * Set attribute `name` to `val`, or get attr `name`.
   *
   * @param {Element} el
   * @param {String} name
   * @param {String} [val]
   * @api public
   */
  function attr(el, name, val) {
    // get
    if (arguments.length == 2) {
      return el.getAttribute(name);
    }

    // remove
    if (val === null) {
      return el.removeAttribute(name);
    }

    // set
    el.setAttribute(name, val);

    return el;
  }

  var indexOf = [].indexOf;

  var indexof = function indexof(arr, obj) {
    if (indexOf) return arr.indexOf(obj);
    for (var i = 0; i < arr.length; ++i) {
      if (arr[i] === obj) return i;
    }
    return -1;
  };

  /**
   * Taken from https://github.com/component/classes
   *
   * Without the component bits.
   */

  /**
   * Whitespace regexp.
   */

  var re = /\s+/;

  /**
   * toString reference.
   */

  var toString = Object.prototype.toString;

  /**
   * Wrap `el` in a `ClassList`.
   *
   * @param {Element} el
   * @return {ClassList}
   * @api public
   */

  function classes(el) {
    return new ClassList(el);
  }

  /**
   * Initialize a new ClassList for `el`.
   *
   * @param {Element} el
   * @api private
   */

  function ClassList(el) {
    if (!el || !el.nodeType) {
      throw new Error('A DOM element reference is required');
    }
    this.el = el;
    this.list = el.classList;
  }

  /**
   * Add class `name` if not already present.
   *
   * @param {String} name
   * @return {ClassList}
   * @api public
   */

  ClassList.prototype.add = function (name) {
    // classList
    if (this.list) {
      this.list.add(name);
      return this;
    }

    // fallback
    var arr = this.array();
    var i = indexof(arr, name);
    if (!~i) arr.push(name);
    this.el.className = arr.join(' ');
    return this;
  };

  /**
   * Remove class `name` when present, or
   * pass a regular expression to remove
   * any which match.
   *
   * @param {String|RegExp} name
   * @return {ClassList}
   * @api public
   */

  ClassList.prototype.remove = function (name) {
    if ('[object RegExp]' == toString.call(name)) {
      return this.removeMatching(name);
    }

    // classList
    if (this.list) {
      this.list.remove(name);
      return this;
    }

    // fallback
    var arr = this.array();
    var i = indexof(arr, name);
    if (~i) arr.splice(i, 1);
    this.el.className = arr.join(' ');
    return this;
  };

  /**
   * Remove all classes matching `re`.
   *
   * @param {RegExp} re
   * @return {ClassList}
   * @api private
   */

  ClassList.prototype.removeMatching = function (re) {
    var arr = this.array();
    for (var i = 0; i < arr.length; i++) {
      if (re.test(arr[i])) {
        this.remove(arr[i]);
      }
    }
    return this;
  };

  /**
   * Toggle class `name`, can force state via `force`.
   *
   * For browsers that support classList, but do not support `force` yet,
   * the mistake will be detected and corrected.
   *
   * @param {String} name
   * @param {Boolean} force
   * @return {ClassList}
   * @api public
   */

  ClassList.prototype.toggle = function (name, force) {
    // classList
    if (this.list) {
      if ('undefined' !== typeof force) {
        if (force !== this.list.toggle(name, force)) {
          this.list.toggle(name); // toggle again to correct
        }
      } else {
        this.list.toggle(name);
      }
      return this;
    }

    // fallback
    if ('undefined' !== typeof force) {
      if (!force) {
        this.remove(name);
      } else {
        this.add(name);
      }
    } else {
      if (this.has(name)) {
        this.remove(name);
      } else {
        this.add(name);
      }
    }

    return this;
  };

  /**
   * Return an array of classes.
   *
   * @return {Array}
   * @api public
   */

  ClassList.prototype.array = function () {
    var className = this.el.getAttribute('class') || '';
    var str = className.replace(/^\s+|\s+$/g, '');
    var arr = str.split(re);
    if ('' === arr[0]) arr.shift();
    return arr;
  };

  /**
   * Check if class `name` is present.
   *
   * @param {String} name
   * @return {ClassList}
   * @api public
   */

  ClassList.prototype.has = ClassList.prototype.contains = function (name) {
    return this.list ? this.list.contains(name) : !!~indexof(this.array(), name);
  };

  /**
   * Remove all children from the given element.
   */
  function clear(el) {

    var c;

    while (el.childNodes.length) {
      c = el.childNodes[0];
      el.removeChild(c);
    }

    return el;
  }

  /**
   * Element prototype.
   */

  var proto = Element.prototype;

  /**
   * Vendor function.
   */

  var vendor = proto.matchesSelector || proto.webkitMatchesSelector || proto.mozMatchesSelector || proto.msMatchesSelector || proto.oMatchesSelector;

  /**
   * Expose `match()`.
   */

  var matchesSelector = match;

  /**
   * Match `el` to `selector`.
   *
   * @param {Element} el
   * @param {String} selector
   * @return {Boolean}
   * @api public
   */

  function match(el, selector) {
    if (vendor) return vendor.call(el, selector);
    var nodes = el.parentNode.querySelectorAll(selector);
    for (var i = 0; i < nodes.length; ++i) {
      if (nodes[i] == el) return true;
    }
    return false;
  }

  var closest = function closest(element, selector, checkYoSelf) {
    var parent = checkYoSelf ? element : element.parentNode;

    while (parent && parent !== document) {
      if (matchesSelector(parent, selector)) return parent;
      parent = parent.parentNode;
    }
  };

  var bind$1 = window.addEventListener ? 'addEventListener' : 'attachEvent',
      unbind = window.removeEventListener ? 'removeEventListener' : 'detachEvent',
      prefix$4 = bind$1 !== 'addEventListener' ? 'on' : '';

  /**
   * Bind `el` event `type` to `fn`.
   *
   * @param {Element} el
   * @param {String} type
   * @param {Function} fn
   * @param {Boolean} capture
   * @return {Function}
   * @api public
   */

  var bind_1 = function bind_1(el, type, fn, capture) {
    el[bind$1](prefix$4 + type, fn, capture || false);
    return fn;
  };

  /**
   * Unbind `el` event `type`'s callback `fn`.
   *
   * @param {Element} el
   * @param {String} type
   * @param {Function} fn
   * @param {Boolean} capture
   * @return {Function}
   * @api public
   */

  var unbind_1 = function unbind_1(el, type, fn, capture) {
    el[unbind](prefix$4 + type, fn, capture || false);
    return fn;
  };

  var componentEvent = {
    bind: bind_1,
    unbind: unbind_1
  };

  /**
   * Module dependencies.
   */

  /**
   * Delegate event `type` to `selector`
   * and invoke `fn(e)`. A callback function
   * is returned which may be passed to `.unbind()`.
   *
   * @param {Element} el
   * @param {String} selector
   * @param {String} type
   * @param {Function} fn
   * @param {Boolean} capture
   * @return {Function}
   * @api public
   */

  // Some events don't bubble, so we want to bind to the capture phase instead
  // when delegating.
  var forceCaptureEvents = ['focus', 'blur'];

  var bind$1$1 = function bind$1(el, selector, type, fn, capture) {
    if (forceCaptureEvents.indexOf(type) !== -1) capture = true;

    return componentEvent.bind(el, type, function (e) {
      var target = e.target || e.srcElement;
      e.delegateTarget = closest(target, selector, true, el);
      if (e.delegateTarget) fn.call(el, e);
    }, capture);
  };

  /**
   * Unbind event `type`'s callback `fn`.
   *
   * @param {Element} el
   * @param {String} type
   * @param {Function} fn
   * @param {Boolean} capture
   * @api public
   */

  var unbind$1 = function unbind$1(el, type, fn, capture) {
    if (forceCaptureEvents.indexOf(type) !== -1) capture = true;

    componentEvent.unbind(el, type, fn, capture);
  };

  var delegateEvents = {
    bind: bind$1$1,
    unbind: unbind$1
  };

  /**
   * Expose `parse`.
   */

  var domify = parse;

  /**
   * Tests for browser support.
   */

  var innerHTMLBug = false;
  var bugTestDiv;
  if (typeof document !== 'undefined') {
    bugTestDiv = document.createElement('div');
    // Setup
    bugTestDiv.innerHTML = '  <link/><table></table><a href="/a">a</a><input type="checkbox"/>';
    // Make sure that link elements get serialized correctly by innerHTML
    // This requires a wrapper element in IE
    innerHTMLBug = !bugTestDiv.getElementsByTagName('link').length;
    bugTestDiv = undefined;
  }

  /**
   * Wrap map from jquery.
   */

  var map$1 = {
    legend: [1, '<fieldset>', '</fieldset>'],
    tr: [2, '<table><tbody>', '</tbody></table>'],
    col: [2, '<table><tbody></tbody><colgroup>', '</colgroup></table>'],
    // for script/link/style tags to work in IE6-8, you have to wrap
    // in a div with a non-whitespace character in front, ha!
    _default: innerHTMLBug ? [1, 'X<div>', '</div>'] : [0, '', '']
  };

  map$1.td = map$1.th = [3, '<table><tbody><tr>', '</tr></tbody></table>'];

  map$1.option = map$1.optgroup = [1, '<select multiple="multiple">', '</select>'];

  map$1.thead = map$1.tbody = map$1.colgroup = map$1.caption = map$1.tfoot = [1, '<table>', '</table>'];

  map$1.polyline = map$1.ellipse = map$1.polygon = map$1.circle = map$1.text = map$1.line = map$1.path = map$1.rect = map$1.g = [1, '<svg xmlns="http://www.w3.org/2000/svg" version="1.1">', '</svg>'];

  /**
   * Parse `html` and return a DOM Node instance, which could be a TextNode,
   * HTML DOM Node of some kind (<div> for example), or a DocumentFragment
   * instance, depending on the contents of the `html` string.
   *
   * @param {String} html - HTML string to "domify"
   * @param {Document} doc - The `document` instance to create the Node for
   * @return {DOMNode} the TextNode, DOM Node, or DocumentFragment instance
   * @api private
   */

  function parse(html, doc) {
    if ('string' != typeof html) throw new TypeError('String expected');

    // default to the global `document` object
    if (!doc) doc = document;

    // tag name
    var m = /<([\w:]+)/.exec(html);
    if (!m) return doc.createTextNode(html);

    html = html.replace(/^\s+|\s+$/g, ''); // Remove leading/trailing whitespace

    var tag = m[1];

    // body support
    if (tag == 'body') {
      var el = doc.createElement('html');
      el.innerHTML = html;
      return el.removeChild(el.lastChild);
    }

    // wrap map
    var wrap = map$1[tag] || map$1._default;
    var depth = wrap[0];
    var prefix = wrap[1];
    var suffix = wrap[2];
    var el = doc.createElement('div');
    el.innerHTML = prefix + html + suffix;
    while (depth--) {
      el = el.lastChild;
    } // one element
    if (el.firstChild == el.lastChild) {
      return el.removeChild(el.firstChild);
    }

    // several elements
    var fragment = doc.createDocumentFragment();
    while (el.firstChild) {
      fragment.appendChild(el.removeChild(el.firstChild));
    }

    return fragment;
  }

  var proto$1 = typeof Element !== 'undefined' ? Element.prototype : {};
  var vendor$1 = proto$1.matches || proto$1.matchesSelector || proto$1.webkitMatchesSelector || proto$1.mozMatchesSelector || proto$1.msMatchesSelector || proto$1.oMatchesSelector;

  function query(selector, el) {
    el = el || document;

    return el.querySelector(selector);
  }

  function remove(el) {
    el.parentNode && el.parentNode.removeChild(el);
  }

  var _extends$1 = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

  var _typeof$2 = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

  var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _toConsumableArray$1(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var DEFAULT_CONTAINER_OPTIONS = {
    width: '100%',
    height: '100%',
    position: 'relative'
  };

  /**
   * The base class for DMN viewers and editors.
   *
   * @abstract
   */

  var Manager = function () {

    /**
     * Create a new instance with the given options.
     *
     * @param  {Object} options
     *
     * @return {Manager}
     */
    function Manager() {
      var _this = this;

      var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

      _classCallCheck(this, Manager);

      this._viewsChanged = function () {
        _this._emit('views.changed', {
          views: _this._views,
          activeView: _this._activeView
        });
      };

      this._eventBus = new EventBus();

      this._viewsChanged = debounce(this._viewsChanged, 0);

      this._views = [];
      this._viewers = {};

      this._init(options);
    }

    /**
     * Parse and render a DMN 1.1 diagram.
     *
     * Once finished the viewer reports back the result to the
     * provided callback function with (err, warnings).
     *
     * ## Life-Cycle Events
     *
     * During import the viewer will fire life-cycle events:
     *
     *   * import.parse.start (about to read model from xml)
     *   * import.parse.complete (model read; may have worked or not)
     *   * import.render.start (graphical import start)
     *   * import.render.complete (graphical import finished)
     *   * import.done (everything done)
     *
     * You can use these events to hook into the life-cycle.
     *
     * @param {String} xml the DMN 1.1 xml
     * @param {Object} [options]
     * @param {Boolean} [options.open=true]
     * @param {Function} [done] invoked with (err, warnings=[])
     */


    _createClass(Manager, [{
      key: 'importXML',
      value: function importXML(xml, options, done) {
        var _this2 = this;

        if ((typeof options === 'undefined' ? 'undefined' : _typeof$2(options)) !== 'object') {
          done = options;
          options = { open: true };
        }

        if (typeof done !== 'function') {
          done = noop;
        }

        // hook in pre-parse listeners +
        // allow xml manipulation
        xml = this._emit('import.parse.start', { xml: xml }) || xml;

        this._moddle.fromXML(xml, 'dmn:Definitions', function (err, definitions, context) {

          // hook in post parse listeners +
          // allow definitions manipulation
          definitions = _this2._emit('import.parse.complete', {
            error: err,
            definitions: definitions,
            context: context
          }) || definitions;

          var parseWarnings = context.warnings;

          _this2._setDefinitions(definitions);

          if (err) {
            err = checkValidationError(err);
          }

          if (err || !options.open) {
            _this2._emit('import.done', { error: err, warmings: parseWarnings });

            return done(err, parseWarnings);
          }

          var view = _this2._activeView || _this2._getInitialView(_this2._views);

          if (!view) {
            return done(new Error('no displayable contents'));
          }

          _this2.open(view, function (err, warnings) {

            var allWarnings = [].concat(parseWarnings, warnings || []);

            _this2._emit('import.done', { error: err, warnings: allWarnings });

            done(err, allWarnings);
          });
        });
      }
    }, {
      key: 'getDefinitions',
      value: function getDefinitions() {
        return this._definitions;
      }

      /**
       * Return active view.
       *
       * @return {View}
       */

    }, {
      key: 'getActiveView',
      value: function getActiveView() {
        return this._activeView;
      }

      /**
       * Get the currently active viewer instance.
       *
       * @return {View}
       */

    }, {
      key: 'getActiveViewer',
      value: function getActiveViewer() {
        var activeView = this.getActiveView();

        return activeView && this._getViewer(activeView);
      }
    }, {
      key: 'getView',
      value: function getView(element) {
        return this._views.filter(function (v) {
          return v.element === element;
        })[0];
      }
    }, {
      key: 'getViews',
      value: function getViews() {
        return this._views;
      }

      /**
       * Export the currently displayed DMN 1.1 diagram as
       * a DMN 1.1 XML document.
       *
       * @param {Object} [options] export options
       * @param {Boolean} [options.format=false] output formated XML
       * @param {Boolean} [options.preamble=true] output preamble
       * @param {Function} done invoked with (err, xml)
       */

    }, {
      key: 'saveXML',
      value: function saveXML(options, done) {

        if (typeof options === 'function') {
          done = options;
          options = {};
        }

        var definitions = this._definitions;

        if (!definitions) {
          return done(new Error('no definitions loaded'));
        }

        this._moddle.toXML(definitions, options, done);
      }

      /**
       * Register an event listener
       *
       * Remove a previously added listener via {@link #off(event, callback)}.
       *
       * @param {String} event
       * @param {Number} [priority]
       * @param {Function} callback
       * @param {Object} [that]
       */

    }, {
      key: 'on',
      value: function on() {
        var _eventBus;

        (_eventBus = this._eventBus).on.apply(_eventBus, arguments);
      }

      /**
       * De-register an event listener
       *
       * @param {String} event
       * @param {Function} callback
       */

    }, {
      key: 'off',
      value: function off() {
        var _eventBus2;

        (_eventBus2 = this._eventBus).off.apply(_eventBus2, arguments);
      }

      /**
       * Register a listener to be invoked once only.
       *
       * @param {String} event
       * @param {Number} [priority]
       * @param {Function} callback
       * @param {Object} [that]
       */

    }, {
      key: 'once',
      value: function once() {
        var _eventBus3;

        (_eventBus3 = this._eventBus).once.apply(_eventBus3, arguments);
      }
    }, {
      key: 'attachTo',
      value: function attachTo(parentNode) {

        // unwrap jQuery if provided
        if (parentNode.get && parentNode.constructor.prototype.jquery) {
          parentNode = parentNode.get(0);
        }

        if (typeof parentNode === 'string') {
          parentNode = query(parentNode);
        }

        parentNode.appendChild(this._container);
      }
    }, {
      key: 'detach',
      value: function detach() {
        remove(this._container);
      }
    }, {
      key: 'destroy',
      value: function destroy() {
        var _this3 = this;

        Object.keys(this._viewers, function (viewerId) {
          var viewer = _this3._viewers[viewerId];

          safeExecute(viewer, 'destroy');
        });

        remove(this._container);
      }
    }, {
      key: '_init',
      value: function _init(options) {
        this._options = options;

        this._moddle = this._createModdle(options);

        this._viewers = {};
        this._views = [];

        var container = domify('<div class="dmn-js-parent"></div>');

        var containerOptions = assign({}, DEFAULT_CONTAINER_OPTIONS, options);

        assign(container.style, {
          width: ensureUnit(containerOptions.width),
          height: ensureUnit(containerOptions.height),
          position: containerOptions.position
        });

        this._container = container;

        if (options.container) {
          this.attachTo(options.container);
        }
      }

      /**
       * Open diagram element.
       *
       * @param  {ModdleElement}   element
       * @param  {Function} [done]
       */

    }, {
      key: 'open',
      value: function open(view) {
        var done = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : noop;

        this._switchView(view, done);
      }
    }, {
      key: '_setDefinitions',
      value: function _setDefinitions(definitions) {
        this._definitions = definitions;

        this._updateViews();
      }
    }, {
      key: '_updateViews',


      /**
       * Recompute changed views after elements in
       * the DMN diagram have changed.
       */
      value: function _updateViews() {

        var definitions = this._definitions;

        if (!definitions) {
          this._views = [];
          this._switchView(null);

          return;
        }

        var viewProviders = this._getViewProviders();

        var displayableElements = [definitions].concat(_toConsumableArray$1(definitions.drgElements || []));

        // compute list of available views
        this._views = displayableElements.reduce(function (views, element) {

          var provider = find$1(viewProviders, function (provider) {
            if (typeof provider.opens === 'string') {
              return provider.opens === element.$type;
            } else {
              return provider.opens(element);
            }
          });

          if (!provider) {
            return views;
          }

          var view = {
            element: element,
            type: provider.id
          };

          return [].concat(_toConsumableArray$1(views), [view]);
        }, []);

        var activeView = this._activeView,
            newActiveView;

        if (activeView) {
          // check the new active view
          newActiveView = find$1(this._views, function (v) {
            return viewsEqual(activeView, v);
          }) || this._getInitialView(this._views);

          if (viewsEqual(activeView, newActiveView)) {
            // active view changed
            this._activeView = newActiveView;
          } else {
            // active view got deleted
            return this._switchView(null);
          }
        }

        this._viewsChanged();
      }
    }, {
      key: '_getInitialView',
      value: function _getInitialView(views) {
        return views[0];
      }

      /**
       * Switch to another view.
       *
       * @param  {View} newView
       * @param  {Function} [done]
       */

    }, {
      key: '_switchView',
      value: function _switchView(newView) {
        var _this4 = this;

        var done = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : noop;


        var complete = function complete(err, warnings) {
          _this4._viewsChanged();

          done(err, warnings);
        };

        var activeView = this.getActiveView(),
            activeViewer;

        var newViewer = newView && this._getViewer(newView),
            element = newView && newView.element;

        if (activeView) {
          activeViewer = this._getViewer(activeView);

          if (activeViewer !== newViewer) {
            safeExecute(activeViewer, 'clear');

            activeViewer.detach();
          }
        }

        this._activeView = newView;

        if (newViewer) {

          if (activeViewer !== newViewer) {
            newViewer.attachTo(this._container);
          }

          this._emit('import.render.start', {
            view: newView,
            element: element
          });

          return newViewer.open(element, function (err, warnings) {

            _this4._emit('import.render.complete', {
              view: newView,
              error: err,
              warnings: warnings
            });

            complete(err, warnings);
          });
        }

        // no active view
        complete();
      }
    }, {
      key: '_getViewer',
      value: function _getViewer(view) {

        var type = view.type;

        var viewer = this._viewers[type];

        if (!viewer) {
          viewer = this._viewers[type] = this._createViewer(view.type);

          this._emit('viewer.created', {
            type: type,
            viewer: viewer
          });
        }

        return viewer;
      }
    }, {
      key: '_createViewer',
      value: function _createViewer(id) {

        var provider = find$1(this._getViewProviders(), function (provider) {
          return provider.id === id;
        });

        if (!provider) {
          throw new Error('no provider for view type <' + id + '>');
        }

        var Viewer = provider.constructor;

        var providerOptions = this._options[id] || {};
        var commonOptions = this._options.common || {};

        return new Viewer(_extends$1({}, commonOptions, providerOptions, {
          additionalModules: [].concat(_toConsumableArray$1(providerOptions.additionalModules || []), [{
            _parent: ['value', this],
            moddle: ['value', this._moddle]
          }])
        }));
      }

      /**
       * Emit an event.
       */

    }, {
      key: '_emit',
      value: function _emit() {
        var _eventBus4;

        (_eventBus4 = this._eventBus).fire.apply(_eventBus4, arguments);
      }
    }, {
      key: '_createModdle',
      value: function _createModdle(options) {
        return new DmnModdle$1(options.moddleExtensions || {});
      }

      /**
       * Return the list of available view providers.
       *
       * @abstract
       *
       * @return {Array<ViewProvider>}
       */

    }, {
      key: '_getViewProviders',
      value: function _getViewProviders() {
        return [];
      }
    }]);

    return Manager;
  }();
  function noop() {}

  /**
   * Ensure the passed argument is a proper unit (defaulting to px)
   */
  function ensureUnit(val) {
    return val + (isNumber(val) ? 'px' : '');
  }

  function checkValidationError(err) {

    // check if we can help the user by indicating wrong DMN 1.1 xml
    // (in case he or the exporting tool did not get that right)

    var pattern = /unparsable content <([^>]+)> detected([\s\S]*)$/,
        match = pattern.exec(err.message);

    if (match) {
      err.message = 'unparsable content <' + match[1] + '> detected; ' + 'this may indicate an invalid DMN 1.1 diagram file' + match[2];
    }

    return err;
  }

  function find$1(arr, fn) {
    return arr.filter(fn)[0];
  }

  function viewsEqual(a, b) {

    if (typeof a === 'undefined') {
      if (typeof b === 'undefined') {
        return true;
      } else {
        return false;
      }
    }

    if (typeof b === 'undefined') {
      return false;
    }

    // compare by element _or_ element ID equality
    return a.element === b.element || a.element.id === b.element.id;
  }

  function safeExecute(viewer, method) {
    if (typeof viewer[method] === 'function') {
      viewer[method]();
    }
  }

  var _typeof2 = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

  var CLASS_PATTERN = /^class /;

  function isClass(fn) {
    return CLASS_PATTERN.test(fn.toString());
  }

  function isArray$1(obj) {
    return Object.prototype.toString.call(obj) === '[object Array]';
  }

  function annotate() {
    var args = Array.prototype.slice.call(arguments);

    if (args.length === 1 && isArray$1(args[0])) {
      args = args[0];
    }

    var fn = args.pop();

    fn.$inject = args;

    return fn;
  }

  // Current limitations:
  // - can't put into "function arg" comments
  // function /* (no parenthesis like this) */ (){}
  // function abc( /* xx (no parenthesis like this) */ a, b) {}
  //
  // Just put the comment before function or inside:
  // /* (((this is fine))) */ function(a, b) {}
  // function abc(a) { /* (((this is fine))) */}
  //
  // - can't reliably auto-annotate constructor; we'll match the
  // first constructor(...) pattern found which may be the one
  // of a nested class, too.

  var CONSTRUCTOR_ARGS = /constructor\s*[^(]*\(\s*([^)]*)\)/m;
  var FN_ARGS = /^function\s*[^(]*\(\s*([^)]*)\)/m;
  var FN_ARG = /\/\*([^*]*)\*\//m;

  function parse$1(fn) {

    if (typeof fn !== 'function') {
      throw new Error('Cannot annotate "' + fn + '". Expected a function!');
    }

    var match = fn.toString().match(isClass(fn) ? CONSTRUCTOR_ARGS : FN_ARGS);

    // may parse class without constructor
    if (!match) {
      return [];
    }

    return match[1] && match[1].split(',').map(function (arg) {
      match = arg.match(FN_ARG);
      return match ? match[1].trim() : arg.trim();
    }) || [];
  }

  function Module() {
    var providers = [];

    this.factory = function (name, factory) {
      providers.push([name, 'factory', factory]);
      return this;
    };

    this.value = function (name, value) {
      providers.push([name, 'value', value]);
      return this;
    };

    this.type = function (name, type) {
      providers.push([name, 'type', type]);
      return this;
    };

    this.forEach = function (iterator) {
      providers.forEach(iterator);
    };
  }

  var _typeof$3 = typeof Symbol === "function" && _typeof2(Symbol.iterator) === "symbol" ? function (obj) {
    return typeof obj === 'undefined' ? 'undefined' : _typeof2(obj);
  } : function (obj) {
    return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj === 'undefined' ? 'undefined' : _typeof2(obj);
  };

  function _toConsumableArray$2(arr) {
    if (Array.isArray(arr)) {
      for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) {
        arr2[i] = arr[i];
      }return arr2;
    } else {
      return Array.from(arr);
    }
  }

  function Injector(modules, parent) {
    parent = parent || {
      get: function get(name, strict) {
        currentlyResolving.push(name);

        if (strict === false) {
          return null;
        } else {
          throw error('No provider for "' + name + '"!');
        }
      }
    };

    var currentlyResolving = [];
    var providers = this._providers = Object.create(parent._providers || null);
    var instances = this._instances = Object.create(null);

    var self = instances.injector = this;

    var error = function error(msg) {
      var stack = currentlyResolving.join(' -> ');
      currentlyResolving.length = 0;
      return new Error(stack ? msg + ' (Resolving: ' + stack + ')' : msg);
    };

    /**
     * Return a named service.
     *
     * @param {String} name
     * @param {Boolean} [strict=true] if false, resolve missing services to null
     *
     * @return {Object}
     */
    var get = function get(name, strict) {
      if (!providers[name] && name.indexOf('.') !== -1) {
        var parts = name.split('.');
        var pivot = get(parts.shift());

        while (parts.length) {
          pivot = pivot[parts.shift()];
        }

        return pivot;
      }

      if (hasProp(instances, name)) {
        return instances[name];
      }

      if (hasProp(providers, name)) {
        if (currentlyResolving.indexOf(name) !== -1) {
          currentlyResolving.push(name);
          throw error('Cannot resolve circular dependency!');
        }

        currentlyResolving.push(name);
        instances[name] = providers[name][0](providers[name][1]);
        currentlyResolving.pop();

        return instances[name];
      }

      return parent.get(name, strict);
    };

    var fnDef = function fnDef(fn) {
      var locals = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};

      if (typeof fn !== 'function') {
        if (isArray$1(fn)) {
          fn = annotate(fn.slice());
        } else {
          throw new Error('Cannot invoke "' + fn + '". Expected a function!');
        }
      }

      var inject = fn.$inject || parse$1(fn);
      var dependencies = inject.map(function (dep) {
        if (hasProp(locals, dep)) {
          return locals[dep];
        } else {
          return get(dep);
        }
      });

      return {
        fn: fn,
        dependencies: dependencies
      };
    };

    var instantiate = function instantiate(Type) {
      var _fnDef = fnDef(Type),
          dependencies = _fnDef.dependencies,
          fn = _fnDef.fn;

      return new (Function.prototype.bind.apply(fn, [null].concat(_toConsumableArray$2(dependencies))))();
    };

    var invoke = function invoke(func, context, locals) {
      var _fnDef2 = fnDef(func, locals),
          dependencies = _fnDef2.dependencies,
          fn = _fnDef2.fn;

      return fn.call.apply(fn, [context].concat(_toConsumableArray$2(dependencies)));
    };

    var createPrivateInjectorFactory = function createPrivateInjectorFactory(privateChildInjector) {
      return annotate(function (key) {
        return privateChildInjector.get(key);
      });
    };

    var createChild = function createChild(modules, forceNewInstances) {
      if (forceNewInstances && forceNewInstances.length) {
        var fromParentModule = Object.create(null);
        var matchedScopes = Object.create(null);

        var privateInjectorsCache = [];
        var privateChildInjectors = [];
        var privateChildFactories = [];

        var provider;
        var cacheIdx;
        var privateChildInjector;
        var privateChildInjectorFactory;
        for (var name in providers) {
          provider = providers[name];

          if (forceNewInstances.indexOf(name) !== -1) {
            if (provider[2] === 'private') {
              cacheIdx = privateInjectorsCache.indexOf(provider[3]);
              if (cacheIdx === -1) {
                privateChildInjector = provider[3].createChild([], forceNewInstances);
                privateChildInjectorFactory = createPrivateInjectorFactory(privateChildInjector);
                privateInjectorsCache.push(provider[3]);
                privateChildInjectors.push(privateChildInjector);
                privateChildFactories.push(privateChildInjectorFactory);
                fromParentModule[name] = [privateChildInjectorFactory, name, 'private', privateChildInjector];
              } else {
                fromParentModule[name] = [privateChildFactories[cacheIdx], name, 'private', privateChildInjectors[cacheIdx]];
              }
            } else {
              fromParentModule[name] = [provider[2], provider[1]];
            }
            matchedScopes[name] = true;
          }

          if ((provider[2] === 'factory' || provider[2] === 'type') && provider[1].$scope) {
            /* jshint -W083 */
            forceNewInstances.forEach(function (scope) {
              if (provider[1].$scope.indexOf(scope) !== -1) {
                fromParentModule[name] = [provider[2], provider[1]];
                matchedScopes[scope] = true;
              }
            });
          }
        }

        forceNewInstances.forEach(function (scope) {
          if (!matchedScopes[scope]) {
            throw new Error('No provider for "' + scope + '". Cannot use provider from the parent!');
          }
        });

        modules.unshift(fromParentModule);
      }

      return new Injector(modules, self);
    };

    var factoryMap = {
      factory: invoke,
      type: instantiate,
      value: function value(_value) {
        return _value;
      }
    };

    modules.forEach(function (module) {

      function arrayUnwrap(type, value) {
        if (type !== 'value' && isArray$1(value)) {
          value = annotate(value.slice());
        }

        return value;
      }

      // TODO(vojta): handle wrong inputs (modules)
      if (module instanceof Module) {
        module.forEach(function (provider) {
          var name = provider[0];
          var type = provider[1];
          var value = provider[2];

          providers[name] = [factoryMap[type], arrayUnwrap(type, value), type];
        });
      } else if ((typeof module === 'undefined' ? 'undefined' : _typeof$3(module)) === 'object') {
        if (module.__exports__) {
          var clonedModule = Object.keys(module).reduce(function (m, key) {
            if (key.substring(0, 2) !== '__') {
              m[key] = module[key];
            }
            return m;
          }, Object.create(null));

          var privateInjector = new Injector((module.__modules__ || []).concat([clonedModule]), self);
          var getFromPrivateInjector = annotate(function (key) {
            return privateInjector.get(key);
          });
          module.__exports__.forEach(function (key) {
            providers[key] = [getFromPrivateInjector, key, 'private', privateInjector];
          });
        } else {
          Object.keys(module).forEach(function (name) {
            if (module[name][2] === 'private') {
              providers[name] = module[name];
              return;
            }

            var type = module[name][0];
            var value = module[name][1];

            providers[name] = [factoryMap[type], arrayUnwrap(type, value), type];
          });
        }
      }
    });

    // public API
    this.get = get;
    this.invoke = invoke;
    this.instantiate = instantiate;
    this.createChild = createChild;
  }

  // helpers /////////////////

  function hasProp(obj, prop) {
    return Object.hasOwnProperty.call(obj, prop);
  }

  var inherits_browser = createCommonjsModule(function (module) {
  if (typeof Object.create === 'function') {
    // implementation from standard node.js 'util' module
    module.exports = function inherits(ctor, superCtor) {
      ctor.super_ = superCtor;
      ctor.prototype = Object.create(superCtor.prototype, {
        constructor: {
          value: ctor,
          enumerable: false,
          writable: true,
          configurable: true
        }
      });
    };
  } else {
    // old school shim for old browsers
    module.exports = function inherits(ctor, superCtor) {
      ctor.super_ = superCtor;
      var TempCtor = function TempCtor() {};
      TempCtor.prototype = superCtor.prototype;
      ctor.prototype = new TempCtor();
      ctor.prototype.constructor = ctor;
    };
  }
  });

  var DEFAULT_RENDER_PRIORITY = 1000;

  /**
   * The base implementation of shape and connection renderers.
   *
   * @param {EventBus} eventBus
   * @param {Number} [renderPriority=1000]
   */
  function BaseRenderer(eventBus, renderPriority) {
    var self = this;

    renderPriority = renderPriority || DEFAULT_RENDER_PRIORITY;

    eventBus.on(['render.shape', 'render.connection'], renderPriority, function (evt, context) {
      var type = evt.type,
          element = context.element,
          visuals = context.gfx;

      if (self.canRender(element)) {
        if (type === 'render.shape') {
          return self.drawShape(visuals, element);
        } else {
          return self.drawConnection(visuals, element);
        }
      }
    });

    eventBus.on(['render.getShapePath', 'render.getConnectionPath'], renderPriority, function (evt, element) {
      if (self.canRender(element)) {
        if (evt.type === 'render.getShapePath') {
          return self.getShapePath(element);
        } else {
          return self.getConnectionPath(element);
        }
      }
    });
  }

  /**
   * Should check whether *this* renderer can render
   * the element/connection.
   *
   * @param {element} element
   *
   * @returns {Boolean}
   */
  BaseRenderer.prototype.canRender = function () {};

  /**
   * Provides the shape's snap svg element to be drawn on the `canvas`.
   *
   * @param {djs.Graphics} visuals
   * @param {Shape} shape
   *
   * @returns {Snap.svg} [returns a Snap.svg paper element ]
   */
  BaseRenderer.prototype.drawShape = function () {};

  /**
   * Provides the shape's snap svg element to be drawn on the `canvas`.
   *
   * @param {djs.Graphics} visuals
   * @param {Connection} connection
   *
   * @returns {Snap.svg} [returns a Snap.svg paper element ]
   */
  BaseRenderer.prototype.drawConnection = function () {};

  /**
   * Gets the SVG path of a shape that represents it's visual bounds.
   *
   * @param {Shape} shape
   *
   * @return {string} svg path
   */
  BaseRenderer.prototype.getShapePath = function () {};

  /**
   * Gets the SVG path of a connection that represents it's visual bounds.
   *
   * @param {Connection} connection
   *
   * @return {string} svg path
   */
  BaseRenderer.prototype.getConnectionPath = function () {};

  function ensureImported(element, target) {

    if (element.ownerDocument !== target.ownerDocument) {
      try {
        // may fail on webkit
        return target.ownerDocument.importNode(element, true);
      } catch (e) {
        // ignore
      }
    }

    return element;
  }

  /**
   * appendTo utility
   */

  /**
   * Append a node to a target element and return the appended node.
   *
   * @param  {SVGElement} element
   * @param  {SVGElement} node
   *
   * @return {SVGElement} the appended node
   */
  function appendTo(element, target) {
    target.appendChild(ensureImported(element, target));
    return element;
  }

  /**
   * append utility
   */

  /**
   * Append a node to an element
   *
   * @param  {SVGElement} element
   * @param  {SVGElement} node
   *
   * @return {SVGElement} the element
   */
  function append(element, node) {
    appendTo(node, element);
    return element;
  }

  /**
   * attribute accessor utility
   */

  var LENGTH_ATTR = 2;

  var CSS_PROPERTIES = {
    'alignment-baseline': 1,
    'baseline-shift': 1,
    'clip': 1,
    'clip-path': 1,
    'clip-rule': 1,
    'color': 1,
    'color-interpolation': 1,
    'color-interpolation-filters': 1,
    'color-profile': 1,
    'color-rendering': 1,
    'cursor': 1,
    'direction': 1,
    'display': 1,
    'dominant-baseline': 1,
    'enable-background': 1,
    'fill': 1,
    'fill-opacity': 1,
    'fill-rule': 1,
    'filter': 1,
    'flood-color': 1,
    'flood-opacity': 1,
    'font': 1,
    'font-family': 1,
    'font-size': LENGTH_ATTR,
    'font-size-adjust': 1,
    'font-stretch': 1,
    'font-style': 1,
    'font-variant': 1,
    'font-weight': 1,
    'glyph-orientation-horizontal': 1,
    'glyph-orientation-vertical': 1,
    'image-rendering': 1,
    'kerning': 1,
    'letter-spacing': 1,
    'lighting-color': 1,
    'marker': 1,
    'marker-end': 1,
    'marker-mid': 1,
    'marker-start': 1,
    'mask': 1,
    'opacity': 1,
    'overflow': 1,
    'pointer-events': 1,
    'shape-rendering': 1,
    'stop-color': 1,
    'stop-opacity': 1,
    'stroke': 1,
    'stroke-dasharray': 1,
    'stroke-dashoffset': 1,
    'stroke-linecap': 1,
    'stroke-linejoin': 1,
    'stroke-miterlimit': 1,
    'stroke-opacity': 1,
    'stroke-width': LENGTH_ATTR,
    'text-anchor': 1,
    'text-decoration': 1,
    'text-rendering': 1,
    'unicode-bidi': 1,
    'visibility': 1,
    'word-spacing': 1,
    'writing-mode': 1
  };

  function getAttribute(node, name) {
    if (CSS_PROPERTIES[name]) {
      return node.style[name];
    } else {
      return node.getAttributeNS(null, name);
    }
  }

  function setAttribute(node, name, value) {
    var hyphenated = name.replace(/([a-z])([A-Z])/g, '$1-$2').toLowerCase();

    var type = CSS_PROPERTIES[hyphenated];

    if (type) {
      // append pixel unit, unless present
      if (type === LENGTH_ATTR && typeof value === 'number') {
        value = String(value) + 'px';
      }

      node.style[hyphenated] = value;
    } else {
      node.setAttributeNS(null, name, value);
    }
  }

  function setAttributes(node, attrs) {

    var names = Object.keys(attrs),
        i,
        name;

    for (i = 0, name; name = names[i]; i++) {
      setAttribute(node, name, attrs[name]);
    }
  }

  /**
   * Gets or sets raw attributes on a node.
   *
   * @param  {SVGElement} node
   * @param  {Object} [attrs]
   * @param  {String} [name]
   * @param  {String} [value]
   *
   * @return {String}
   */
  function attr$1(node, name, value) {
    if (typeof name === 'string') {
      if (value !== undefined) {
        setAttribute(node, name, value);
      } else {
        return getAttribute(node, name);
      }
    } else {
      setAttributes(node, name);
    }

    return node;
  }

  /**
   * Clear utility
   */
  function index(arr, obj) {
    if (arr.indexOf) {
      return arr.indexOf(obj);
    }

    for (var i = 0; i < arr.length; ++i) {
      if (arr[i] === obj) {
        return i;
      }
    }

    return -1;
  }

  var re$1 = /\s+/;

  var toString$1 = Object.prototype.toString;

  function defined(o) {
    return typeof o !== 'undefined';
  }

  /**
   * Wrap `el` in a `ClassList`.
   *
   * @param {Element} el
   * @return {ClassList}
   * @api public
   */

  function classes$1(el) {
    return new ClassList$1(el);
  }

  function ClassList$1(el) {
    if (!el || !el.nodeType) {
      throw new Error('A DOM element reference is required');
    }
    this.el = el;
    this.list = el.classList;
  }

  /**
   * Add class `name` if not already present.
   *
   * @param {String} name
   * @return {ClassList}
   * @api public
   */

  ClassList$1.prototype.add = function (name) {

    // classList
    if (this.list) {
      this.list.add(name);
      return this;
    }

    // fallback
    var arr = this.array();
    var i = index(arr, name);
    if (!~i) {
      arr.push(name);
    }

    if (defined(this.el.className.baseVal)) {
      this.el.className.baseVal = arr.join(' ');
    } else {
      this.el.className = arr.join(' ');
    }

    return this;
  };

  /**
   * Remove class `name` when present, or
   * pass a regular expression to remove
   * any which match.
   *
   * @param {String|RegExp} name
   * @return {ClassList}
   * @api public
   */

  ClassList$1.prototype.remove = function (name) {
    if ('[object RegExp]' === toString$1.call(name)) {
      return this.removeMatching(name);
    }

    // classList
    if (this.list) {
      this.list.remove(name);
      return this;
    }

    // fallback
    var arr = this.array();
    var i = index(arr, name);
    if (~i) {
      arr.splice(i, 1);
    }
    this.el.className.baseVal = arr.join(' ');
    return this;
  };

  /**
   * Remove all classes matching `re`.
   *
   * @param {RegExp} re
   * @return {ClassList}
   * @api private
   */

  ClassList$1.prototype.removeMatching = function (re) {
    var arr = this.array();
    for (var i = 0; i < arr.length; i++) {
      if (re.test(arr[i])) {
        this.remove(arr[i]);
      }
    }
    return this;
  };

  /**
   * Toggle class `name`, can force state via `force`.
   *
   * For browsers that support classList, but do not support `force` yet,
   * the mistake will be detected and corrected.
   *
   * @param {String} name
   * @param {Boolean} force
   * @return {ClassList}
   * @api public
   */

  ClassList$1.prototype.toggle = function (name, force) {
    // classList
    if (this.list) {
      if (defined(force)) {
        if (force !== this.list.toggle(name, force)) {
          this.list.toggle(name); // toggle again to correct
        }
      } else {
        this.list.toggle(name);
      }
      return this;
    }

    // fallback
    if (defined(force)) {
      if (!force) {
        this.remove(name);
      } else {
        this.add(name);
      }
    } else {
      if (this.has(name)) {
        this.remove(name);
      } else {
        this.add(name);
      }
    }

    return this;
  };

  /**
   * Return an array of classes.
   *
   * @return {Array}
   * @api public
   */

  ClassList$1.prototype.array = function () {
    var className = this.el.getAttribute('class') || '';
    var str = className.replace(/^\s+|\s+$/g, '');
    var arr = str.split(re$1);
    if ('' === arr[0]) {
      arr.shift();
    }
    return arr;
  };

  /**
   * Check if class `name` is present.
   *
   * @param {String} name
   * @return {ClassList}
   * @api public
   */

  ClassList$1.prototype.has = ClassList$1.prototype.contains = function (name) {
    return this.list ? this.list.contains(name) : !!~index(this.array(), name);
  };

  function remove$1(element) {
    var parent = element.parentNode;

    if (parent) {
      parent.removeChild(element);
    }

    return element;
  }

  /**
   * Clear utility
   */

  /**
   * Removes all children from the given element
   *
   * @param  {DOMElement} element
   * @return {DOMElement} the element (for chaining)
   */
  function clear$1(element) {
    var child;

    while (child = element.firstChild) {
      remove$1(child);
    }

    return element;
  }

  var ns = {
    svg: 'http://www.w3.org/2000/svg'
  };

  /**
   * DOM parsing utility
   */

  var SVG_START = '<svg xmlns="' + ns.svg + '"';

  function parse$2(svg) {

    // ensure we import a valid svg document
    if (svg.substring(0, 4) === '<svg') {
      if (svg.indexOf(ns.svg) === -1) {
        svg = SVG_START + svg.substring(4);
      }
    } else {
      // namespace svg
      svg = SVG_START + '>' + svg + '</svg>';
    }

    return parseDocument(svg);
  }

  function parseDocument(svg) {

    var parser;

    // parse
    parser = new DOMParser();
    parser.async = false;

    return parser.parseFromString(svg, 'text/xml');
  }

  /**
   * Create utility for SVG elements
   */

  /**
   * Create a specific type from name or SVG markup.
   *
   * @param {String} name the name or markup of the element
   * @param {Object} [attrs] attributes to set on the element
   *
   * @returns {SVGElement}
   */
  function create(name, attrs) {
    var element;

    if (name.charAt(0) === '<') {
      element = parse$2(name).firstChild;
      element = document.importNode(element, true);
    } else {
      element = document.createElementNS(ns.svg, name);
    }

    if (attrs) {
      attr$1(element, attrs);
    }

    return element;
  }

  /**
   * Geometry helpers
   */

  // fake node used to instantiate svg geometry elements
  var node = create('svg');

  function extend(object, props) {
    var i,
        k,
        keys = Object.keys(props);

    for (i = 0; k = keys[i]; i++) {
      object[k] = props[k];
    }

    return object;
  }

  function createMatrix(a, b, c, d, e, f) {
    var matrix = node.createSVGMatrix();

    switch (arguments.length) {
      case 0:
        return matrix;
      case 6:
        a = {
          a: a,
          b: b,
          c: c,
          d: d,
          e: e,
          f: f
        };
        break;
    }

    return extend(matrix, a);
  }

  function createTransform(matrix) {
    if (matrix) {
      return node.createSVGTransformFromMatrix(matrix);
    } else {
      return node.createSVGTransform();
    }
  }

  /**
   * Serialization util
   */

  var TEXT_ENTITIES = /([&<>]{1})/g;
  var ATTR_ENTITIES = /([\n\r"]{1})/g;

  var ENTITY_REPLACEMENT = {
    '&': '&amp;',
    '<': '&lt;',
    '>': '&gt;',
    '"': '\''
  };

  function escape$1(str, pattern) {

    function replaceFn(match, entity) {
      return ENTITY_REPLACEMENT[entity] || entity;
    }

    return str.replace(pattern, replaceFn);
  }

  function serialize(node, output) {

    var i, len, attrMap, attrNode, childNodes;

    switch (node.nodeType) {
      // TEXT
      case 3:
        // replace special XML characters
        output.push(escape$1(node.textContent, TEXT_ENTITIES));
        break;

      // ELEMENT
      case 1:
        output.push('<', node.tagName);

        if (node.hasAttributes()) {
          attrMap = node.attributes;
          for (i = 0, len = attrMap.length; i < len; ++i) {
            attrNode = attrMap.item(i);
            output.push(' ', attrNode.name, '="', escape$1(attrNode.value, ATTR_ENTITIES), '"');
          }
        }

        if (node.hasChildNodes()) {
          output.push('>');
          childNodes = node.childNodes;
          for (i = 0, len = childNodes.length; i < len; ++i) {
            serialize(childNodes.item(i), output);
          }
          output.push('</', node.tagName, '>');
        } else {
          output.push('/>');
        }
        break;

      // COMMENT
      case 8:
        output.push('<!--', escape$1(node.nodeValue, TEXT_ENTITIES), '-->');
        break;

      // CDATA
      case 4:
        output.push('<![CDATA[', node.nodeValue, ']]>');
        break;

      default:
        throw new Error('unable to handle node ' + node.nodeType);
    }

    return output;
  }

  /**
   * innerHTML like functionality for SVG elements.
   * based on innerSVG (https://code.google.com/p/innersvg)
   */

  function set(element, svg) {

    var node,
        documentElement = parse$2(svg).documentElement;

    // clear element contents
    clear$1(element);

    if (!svg) {
      return;
    }

    // import + append each node
    node = documentElement.firstChild;

    while (node) {
      appendTo(node, element);
      node = node.nextSibling;
    }
  }

  function get(element) {
    var child = element.firstChild,
        output = [];

    while (child) {
      serialize(child, output);
      child = child.nextSibling;
    }

    return output.join('');
  }

  function innerSVG(element, svg) {

    if (svg !== undefined) {

      try {
        set(element, svg);
      } catch (e) {
        throw new Error('error parsing SVG: ' + e.message);
      }

      return element;
    } else {
      return get(element);
    }
  }

  /**
   * transform accessor utility
   */

  function wrapMatrix(transformList, transform) {
    if (transform instanceof SVGMatrix) {
      return transformList.createSVGTransformFromMatrix(transform);
    } else {
      return transform;
    }
  }

  function setTransforms(transformList, transforms) {
    var i, t;

    transformList.clear();

    for (i = 0; t = transforms[i]; i++) {
      transformList.appendItem(wrapMatrix(transformList, t));
    }

    transformList.consolidate();
  }

  function transform(node, transforms) {
    var transformList = node.transform.baseVal;

    if (arguments.length === 1) {
      return transformList.consolidate();
    } else {
      if (transforms.length) {
        setTransforms(transformList, transforms);
      } else {
        transformList.initialize(wrapMatrix(transformList, transforms));
      }
    }
  }

  function componentsToPath(elements) {
    return elements.join(',').replace(/,?([A-z]),?/g, '$1');
  }

  function toSVGPoints(points) {
    var result = '';

    for (var i = 0, p; p = points[i]; i++) {
      result += p.x + ',' + p.y + ' ';
    }

    return result;
  }

  function createLine(points, attrs) {

    var line = create('polyline');
    attr$1(line, { points: toSVGPoints(points) });

    if (attrs) {
      attr$1(line, attrs);
    }

    return line;
  }

  function updateLine(gfx, points) {
    attr$1(gfx, { points: toSVGPoints(points) });

    return gfx;
  }

  // apply default renderer with lowest possible priority
  // so that it only kicks in if noone else could render
  var DEFAULT_RENDER_PRIORITY$1 = 1;

  /**
   * The default renderer used for shapes and connections.
   *
   * @param {EventBus} eventBus
   * @param {Styles} styles
   */
  function DefaultRenderer(eventBus, styles) {
    //
    BaseRenderer.call(this, eventBus, DEFAULT_RENDER_PRIORITY$1);

    this.CONNECTION_STYLE = styles.style(['no-fill'], { strokeWidth: 5, stroke: 'fuchsia' });
    this.SHAPE_STYLE = styles.style({ fill: 'white', stroke: 'fuchsia', strokeWidth: 2 });
  }

  inherits_browser(DefaultRenderer, BaseRenderer);

  DefaultRenderer.prototype.canRender = function () {
    return true;
  };

  DefaultRenderer.prototype.drawShape = function drawShape(visuals, element) {

    var rect = create('rect');
    attr$1(rect, {
      x: 0,
      y: 0,
      width: element.width || 0,
      height: element.height || 0
    });
    attr$1(rect, this.SHAPE_STYLE);

    append(visuals, rect);

    return rect;
  };

  DefaultRenderer.prototype.drawConnection = function drawConnection(visuals, connection) {

    var line = createLine(connection.waypoints, this.CONNECTION_STYLE);
    append(visuals, line);

    return line;
  };

  DefaultRenderer.prototype.getShapePath = function getShapePath(shape) {

    var x = shape.x,
        y = shape.y,
        width = shape.width,
        height = shape.height;

    var shapePath = [['M', x, y], ['l', width, 0], ['l', 0, height], ['l', -width, 0], ['z']];

    return componentsToPath(shapePath);
  };

  DefaultRenderer.prototype.getConnectionPath = function getConnectionPath(connection) {
    var waypoints = connection.waypoints;

    var idx,
        point,
        connectionPath = [];

    for (idx = 0; point = waypoints[idx]; idx++) {

      // take invisible docking into account
      // when creating the path
      point = point.original || point;

      connectionPath.push([idx === 0 ? 'M' : 'L', point.x, point.y]);
    }

    return componentsToPath(connectionPath);
  };

  DefaultRenderer.$inject = ['eventBus', 'styles'];

  /**
   * A component that manages shape styles
   */
  function Styles() {

    var defaultTraits = {

      'no-fill': {
        fill: 'none'
      },
      'no-border': {
        strokeOpacity: 0.0
      },
      'no-events': {
        pointerEvents: 'none'
      }
    };

    var self = this;

    /**
     * Builds a style definition from a className, a list of traits and an object of additional attributes.
     *
     * @param  {String} className
     * @param  {Array<String>} traits
     * @param  {Object} additionalAttrs
     *
     * @return {Object} the style defintion
     */
    this.cls = function (className, traits, additionalAttrs) {
      var attrs = this.style(traits, additionalAttrs);

      return assign(attrs, { 'class': className });
    };

    /**
     * Builds a style definition from a list of traits and an object of additional attributes.
     *
     * @param  {Array<String>} traits
     * @param  {Object} additionalAttrs
     *
     * @return {Object} the style defintion
     */
    this.style = function (traits, additionalAttrs) {

      if (!isArray(traits) && !additionalAttrs) {
        additionalAttrs = traits;
        traits = [];
      }

      var attrs = reduce(traits, function (attrs, t) {
        return assign(attrs, defaultTraits[t] || {});
      }, {});

      return additionalAttrs ? assign(attrs, additionalAttrs) : attrs;
    };

    this.computeStyle = function (custom, traits, defaultStyles) {
      if (!isArray(traits)) {
        defaultStyles = traits;
        traits = [];
      }

      return self.style(traits || [], assign({}, defaultStyles, custom || {}));
    };
  }

  var DrawModule = {
    __init__: ['defaultRenderer'],
    defaultRenderer: ['type', DefaultRenderer],
    styles: ['type', Styles]
  };

  /**
   * Failsafe remove an element from a collection
   *
   * @param  {Array<Object>} [collection]
   * @param  {Object} [element]
   *
   * @return {Number} the previous index of the element
   */
  function remove$2(collection, element) {

    if (!collection || !element) {
      return -1;
    }

    var idx = collection.indexOf(element);

    if (idx !== -1) {
      collection.splice(idx, 1);
    }

    return idx;
  }

  /**
   * Fail save add an element to the given connection, ensuring
   * it does not yet exist.
   *
   * @param {Array<Object>} collection
   * @param {Object} element
   * @param {Number} idx
   */
  function add(collection, element, idx) {

    if (!collection || !element) {
      return;
    }

    if (typeof idx !== 'number') {
      idx = -1;
    }

    var currentIdx = collection.indexOf(element);

    if (currentIdx !== -1) {

      if (currentIdx === idx) {
        // nothing to do, position has not changed
        return;
      } else {

        if (idx !== -1) {
          // remove from current position
          collection.splice(currentIdx, 1);
        } else {
          // already exists in collection
          return;
        }
      }
    }

    if (idx !== -1) {
      // insert at specified position
      collection.splice(idx, 0, element);
    } else {
      // push to end
      collection.push(element);
    }
  }

  /**
   * Returns the surrounding bbox for all elements in
   * the array or the element primitive.
   *
   * @param {Array<djs.model.Shape>|djs.model.Shape} elements
   * @param {Boolean} stopRecursion
   */
  function getBBox(elements, stopRecursion) {

    stopRecursion = !!stopRecursion;
    if (!isArray(elements)) {
      elements = [elements];
    }

    var minX, minY, maxX, maxY;

    forEach(elements, function (element) {

      // If element is a connection the bbox must be computed first
      var bbox = element;
      if (element.waypoints && !stopRecursion) {
        bbox = getBBox(element.waypoints, true);
      }

      var x = bbox.x,
          y = bbox.y,
          height = bbox.height || 0,
          width = bbox.width || 0;

      if (x < minX || minX === undefined) {
        minX = x;
      }
      if (y < minY || minY === undefined) {
        minY = y;
      }

      if (x + width > maxX || maxX === undefined) {
        maxX = x + width;
      }
      if (y + height > maxY || maxY === undefined) {
        maxY = y + height;
      }
    });

    return {
      x: minX,
      y: minY,
      height: maxY - minY,
      width: maxX - minX
    };
  }

  function getType(element) {

    if ('waypoints' in element) {
      return 'connection';
    }

    if ('x' in element) {
      return 'shape';
    }

    return 'root';
  }

  var _typeof$4 = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

  function round(number, resolution) {
    return Math.round(number * resolution) / resolution;
  }

  function ensurePx(number) {
    return isNumber(number) ? number + 'px' : number;
  }

  /**
   * Creates a HTML container element for a SVG element with
   * the given configuration
   *
   * @param  {Object} options
   * @return {HTMLElement} the container element
   */
  function createContainer(options) {

    options = assign({}, { width: '100%', height: '100%' }, options);

    var container = options.container || document.body;

    // create a <div> around the svg element with the respective size
    // this way we can always get the correct container size
    // (this is impossible for <svg> elements at the moment)
    var parent = document.createElement('div');
    parent.setAttribute('class', 'djs-container');

    assign(parent.style, {
      position: 'relative',
      overflow: 'hidden',
      width: ensurePx(options.width),
      height: ensurePx(options.height)
    });

    container.appendChild(parent);

    return parent;
  }

  function createGroup(parent, cls, childIndex) {
    var group = create('g');
    classes$1(group).add(cls);

    var index = childIndex !== undefined ? childIndex : parent.childNodes.length - 1;

    parent.insertBefore(group, parent.childNodes[index]);

    return group;
  }

  var BASE_LAYER = 'base';

  var REQUIRED_MODEL_ATTRS = {
    shape: ['x', 'y', 'width', 'height'],
    connection: ['waypoints']
  };

  /**
   * The main drawing canvas.
   *
   * @class
   * @constructor
   *
   * @emits Canvas#canvas.init
   *
   * @param {Object} config
   * @param {EventBus} eventBus
   * @param {GraphicsFactory} graphicsFactory
   * @param {ElementRegistry} elementRegistry
   */
  function Canvas(config, eventBus, graphicsFactory, elementRegistry) {

    this._eventBus = eventBus;
    this._elementRegistry = elementRegistry;
    this._graphicsFactory = graphicsFactory;

    this._init(config || {});
  }

  Canvas.$inject = ['config.canvas', 'eventBus', 'graphicsFactory', 'elementRegistry'];

  Canvas.prototype._init = function (config) {

    var eventBus = this._eventBus;

    // Creates a <svg> element that is wrapped into a <div>.
    // This way we are always able to correctly figure out the size of the svg element
    // by querying the parent node.
    //
    // (It is not possible to get the size of a svg element cross browser @ 2014-04-01)
    //
    // <div class="djs-container" style="width: {desired-width}, height: {desired-height}">
    //   <svg width="100%" height="100%">
    //    ...
    //   </svg>
    // </div>

    // html container
    var container = this._container = createContainer(config);

    var svg = this._svg = create('svg');
    attr$1(svg, { width: '100%', height: '100%' });

    append(container, svg);

    var viewport = this._viewport = createGroup(svg, 'viewport');

    this._layers = {};

    // debounce canvas.viewbox.changed events
    // for smoother diagram interaction
    if (config.deferUpdate !== false) {
      this._viewboxChanged = debounce(bind(this._viewboxChanged, this), 300);
    }

    eventBus.on('diagram.init', function () {

      /**
       * An event indicating that the canvas is ready to be drawn on.
       *
       * @memberOf Canvas
       *
       * @event canvas.init
       *
       * @type {Object}
       * @property {SVGElement} svg the created svg element
       * @property {SVGElement} viewport the direct parent of diagram elements and shapes
       */
      eventBus.fire('canvas.init', {
        svg: svg,
        viewport: viewport
      });
    }, this);

    // reset viewbox on shape changes to
    // recompute the viewbox
    eventBus.on(['shape.added', 'connection.added', 'shape.removed', 'connection.removed', 'elements.changed'], function () {
      delete this._cachedViewbox;
    }, this);

    eventBus.on('diagram.destroy', 500, this._destroy, this);
    eventBus.on('diagram.clear', 500, this._clear, this);
  };

  Canvas.prototype._destroy = function (emit) {
    this._eventBus.fire('canvas.destroy', {
      svg: this._svg,
      viewport: this._viewport
    });

    var parent = this._container.parentNode;

    if (parent) {
      parent.removeChild(this._container);
    }

    delete this._svg;
    delete this._container;
    delete this._layers;
    delete this._rootElement;
    delete this._viewport;
  };

  Canvas.prototype._clear = function () {

    var self = this;

    var allElements = this._elementRegistry.getAll();

    // remove all elements
    allElements.forEach(function (element) {
      var type = getType(element);

      if (type === 'root') {
        self.setRootElement(null, true);
      } else {
        self._removeElement(element, type);
      }
    });

    // force recomputation of view box
    delete this._cachedViewbox;
  };

  /**
   * Returns the default layer on which
   * all elements are drawn.
   *
   * @returns {SVGElement}
   */
  Canvas.prototype.getDefaultLayer = function () {
    return this.getLayer(BASE_LAYER, 0);
  };

  /**
   * Returns a layer that is used to draw elements
   * or annotations on it.
   *
   * Non-existing layers retrieved through this method
   * will be created. During creation, the optional index
   * may be used to create layers below or above existing layers.
   * A layer with a certain index is always created above all
   * existing layers with the same index.
   *
   * @param {String} name
   * @param {Number} index
   *
   * @returns {SVGElement}
   */
  Canvas.prototype.getLayer = function (name, index) {

    if (!name) {
      throw new Error('must specify a name');
    }

    var layer = this._layers[name];

    if (!layer) {
      layer = this._layers[name] = this._createLayer(name, index);
    }

    // throw an error if layer creation / retrival is
    // requested on different index
    if (typeof index !== 'undefined' && layer.index !== index) {
      throw new Error('layer <' + name + '> already created at index <' + index + '>');
    }

    return layer.group;
  };

  /**
   * Creates a given layer and returns it.
   *
   * @param {String} name
   * @param {Number} [index=0]
   *
   * @return {Object} layer descriptor with { index, group: SVGGroup }
   */
  Canvas.prototype._createLayer = function (name, index) {

    if (!index) {
      index = 0;
    }

    var childIndex = reduce(this._layers, function (childIndex, layer) {
      if (index >= layer.index) {
        childIndex++;
      }

      return childIndex;
    }, 0);

    return {
      group: createGroup(this._viewport, 'layer-' + name, childIndex),
      index: index
    };
  };

  /**
   * Returns the html element that encloses the
   * drawing canvas.
   *
   * @return {DOMNode}
   */
  Canvas.prototype.getContainer = function () {
    return this._container;
  };

  // markers //////////////////////

  Canvas.prototype._updateMarker = function (element, marker, add$$1) {
    var container;

    if (!element.id) {
      element = this._elementRegistry.get(element);
    }

    // we need to access all
    container = this._elementRegistry._elements[element.id];

    if (!container) {
      return;
    }

    forEach([container.gfx, container.secondaryGfx], function (gfx) {
      if (gfx) {
        // invoke either addClass or removeClass based on mode
        if (add$$1) {
          classes$1(gfx).add(marker);
        } else {
          classes$1(gfx).remove(marker);
        }
      }
    });

    /**
     * An event indicating that a marker has been updated for an element
     *
     * @event element.marker.update
     * @type {Object}
     * @property {djs.model.Element} element the shape
     * @property {Object} gfx the graphical representation of the shape
     * @property {String} marker
     * @property {Boolean} add true if the marker was added, false if it got removed
     */
    this._eventBus.fire('element.marker.update', { element: element, gfx: container.gfx, marker: marker, add: !!add$$1 });
  };

  /**
   * Adds a marker to an element (basically a css class).
   *
   * Fires the element.marker.update event, making it possible to
   * integrate extension into the marker life-cycle, too.
   *
   * @example
   * canvas.addMarker('foo', 'some-marker');
   *
   * var fooGfx = canvas.getGraphics('foo');
   *
   * fooGfx; // <g class="... some-marker"> ... </g>
   *
   * @param {String|djs.model.Base} element
   * @param {String} marker
   */
  Canvas.prototype.addMarker = function (element, marker) {
    this._updateMarker(element, marker, true);
  };

  /**
   * Remove a marker from an element.
   *
   * Fires the element.marker.update event, making it possible to
   * integrate extension into the marker life-cycle, too.
   *
   * @param  {String|djs.model.Base} element
   * @param  {String} marker
   */
  Canvas.prototype.removeMarker = function (element, marker) {
    this._updateMarker(element, marker, false);
  };

  /**
   * Check the existence of a marker on element.
   *
   * @param  {String|djs.model.Base} element
   * @param  {String} marker
   */
  Canvas.prototype.hasMarker = function (element, marker) {
    if (!element.id) {
      element = this._elementRegistry.get(element);
    }

    var gfx = this.getGraphics(element);

    return classes$1(gfx).has(marker);
  };

  /**
   * Toggles a marker on an element.
   *
   * Fires the element.marker.update event, making it possible to
   * integrate extension into the marker life-cycle, too.
   *
   * @param  {String|djs.model.Base} element
   * @param  {String} marker
   */
  Canvas.prototype.toggleMarker = function (element, marker) {
    if (this.hasMarker(element, marker)) {
      this.removeMarker(element, marker);
    } else {
      this.addMarker(element, marker);
    }
  };

  Canvas.prototype.getRootElement = function () {
    if (!this._rootElement) {
      this.setRootElement({ id: '__implicitroot', children: [] });
    }

    return this._rootElement;
  };

  // root element handling //////////////////////

  /**
   * Sets a given element as the new root element for the canvas
   * and returns the new root element.
   *
   * @param {Object|djs.model.Root} element
   * @param {Boolean} [override] whether to override the current root element, if any
   *
   * @return {Object|djs.model.Root} new root element
   */
  Canvas.prototype.setRootElement = function (element, override) {

    if (element) {
      this._ensureValid('root', element);
    }

    var currentRoot = this._rootElement,
        elementRegistry = this._elementRegistry,
        eventBus = this._eventBus;

    if (currentRoot) {
      if (!override) {
        throw new Error('rootElement already set, need to specify override');
      }

      // simulate element remove event sequence
      eventBus.fire('root.remove', { element: currentRoot });
      eventBus.fire('root.removed', { element: currentRoot });

      elementRegistry.remove(currentRoot);
    }

    if (element) {
      var gfx = this.getDefaultLayer();

      // resemble element add event sequence
      eventBus.fire('root.add', { element: element });

      elementRegistry.add(element, gfx, this._svg);

      eventBus.fire('root.added', { element: element, gfx: gfx });
    }

    this._rootElement = element;

    return element;
  };

  // add functionality //////////////////////

  Canvas.prototype._ensureValid = function (type, element) {
    if (!element.id) {
      throw new Error('element must have an id');
    }

    if (this._elementRegistry.get(element.id)) {
      throw new Error('element with id ' + element.id + ' already exists');
    }

    var requiredAttrs = REQUIRED_MODEL_ATTRS[type];

    var valid = every(requiredAttrs, function (attr$$1) {
      return typeof element[attr$$1] !== 'undefined';
    });

    if (!valid) {
      throw new Error('must supply { ' + requiredAttrs.join(', ') + ' } with ' + type);
    }
  };

  Canvas.prototype._setParent = function (element, parent, parentIndex) {
    add(parent.children, element, parentIndex);
    element.parent = parent;
  };

  /**
   * Adds an element to the canvas.
   *
   * This wires the parent <-> child relationship between the element and
   * a explicitly specified parent or an implicit root element.
   *
   * During add it emits the events
   *
   *  * <{type}.add> (element, parent)
   *  * <{type}.added> (element, gfx)
   *
   * Extensions may hook into these events to perform their magic.
   *
   * @param {String} type
   * @param {Object|djs.model.Base} element
   * @param {Object|djs.model.Base} [parent]
   * @param {Number} [parentIndex]
   *
   * @return {Object|djs.model.Base} the added element
   */
  Canvas.prototype._addElement = function (type, element, parent, parentIndex) {

    parent = parent || this.getRootElement();

    var eventBus = this._eventBus,
        graphicsFactory = this._graphicsFactory;

    this._ensureValid(type, element);

    eventBus.fire(type + '.add', { element: element, parent: parent });

    this._setParent(element, parent, parentIndex);

    // create graphics
    var gfx = graphicsFactory.create(type, element, parentIndex);

    this._elementRegistry.add(element, gfx);

    // update its visual
    graphicsFactory.update(type, element, gfx);

    eventBus.fire(type + '.added', { element: element, gfx: gfx });

    return element;
  };

  /**
   * Adds a shape to the canvas
   *
   * @param {Object|djs.model.Shape} shape to add to the diagram
   * @param {djs.model.Base} [parent]
   * @param {Number} [parentIndex]
   *
   * @return {djs.model.Shape} the added shape
   */
  Canvas.prototype.addShape = function (shape, parent, parentIndex) {
    return this._addElement('shape', shape, parent, parentIndex);
  };

  /**
   * Adds a connection to the canvas
   *
   * @param {Object|djs.model.Connection} connection to add to the diagram
   * @param {djs.model.Base} [parent]
   * @param {Number} [parentIndex]
   *
   * @return {djs.model.Connection} the added connection
   */
  Canvas.prototype.addConnection = function (connection, parent, parentIndex) {
    return this._addElement('connection', connection, parent, parentIndex);
  };

  /**
   * Internal remove element
   */
  Canvas.prototype._removeElement = function (element, type) {

    var elementRegistry = this._elementRegistry,
        graphicsFactory = this._graphicsFactory,
        eventBus = this._eventBus;

    element = elementRegistry.get(element.id || element);

    if (!element) {
      // element was removed already
      return;
    }

    eventBus.fire(type + '.remove', { element: element });

    graphicsFactory.remove(element);

    // unset parent <-> child relationship
    remove$2(element.parent && element.parent.children, element);
    element.parent = null;

    eventBus.fire(type + '.removed', { element: element });

    elementRegistry.remove(element);

    return element;
  };

  /**
   * Removes a shape from the canvas
   *
   * @param {String|djs.model.Shape} shape or shape id to be removed
   *
   * @return {djs.model.Shape} the removed shape
   */
  Canvas.prototype.removeShape = function (shape) {

    /**
     * An event indicating that a shape is about to be removed from the canvas.
     *
     * @memberOf Canvas
     *
     * @event shape.remove
     * @type {Object}
     * @property {djs.model.Shape} element the shape descriptor
     * @property {Object} gfx the graphical representation of the shape
     */

    /**
     * An event indicating that a shape has been removed from the canvas.
     *
     * @memberOf Canvas
     *
     * @event shape.removed
     * @type {Object}
     * @property {djs.model.Shape} element the shape descriptor
     * @property {Object} gfx the graphical representation of the shape
     */
    return this._removeElement(shape, 'shape');
  };

  /**
   * Removes a connection from the canvas
   *
   * @param {String|djs.model.Connection} connection or connection id to be removed
   *
   * @return {djs.model.Connection} the removed connection
   */
  Canvas.prototype.removeConnection = function (connection) {

    /**
     * An event indicating that a connection is about to be removed from the canvas.
     *
     * @memberOf Canvas
     *
     * @event connection.remove
     * @type {Object}
     * @property {djs.model.Connection} element the connection descriptor
     * @property {Object} gfx the graphical representation of the connection
     */

    /**
     * An event indicating that a connection has been removed from the canvas.
     *
     * @memberOf Canvas
     *
     * @event connection.removed
     * @type {Object}
     * @property {djs.model.Connection} element the connection descriptor
     * @property {Object} gfx the graphical representation of the connection
     */
    return this._removeElement(connection, 'connection');
  };

  /**
   * Return the graphical object underlaying a certain diagram element
   *
   * @param {String|djs.model.Base} element descriptor of the element
   * @param {Boolean} [secondary=false] whether to return the secondary connected element
   *
   * @return {SVGElement}
   */
  Canvas.prototype.getGraphics = function (element, secondary) {
    return this._elementRegistry.getGraphics(element, secondary);
  };

  /**
   * Perform a viewbox update via a given change function.
   *
   * @param {Function} changeFn
   */
  Canvas.prototype._changeViewbox = function (changeFn) {

    // notify others of the upcoming viewbox change
    this._eventBus.fire('canvas.viewbox.changing');

    // perform actual change
    changeFn.apply(this);

    // reset the cached viewbox so that
    // a new get operation on viewbox or zoom
    // triggers a viewbox re-computation
    this._cachedViewbox = null;

    // notify others of the change; this step
    // may or may not be debounced
    this._viewboxChanged();
  };

  Canvas.prototype._viewboxChanged = function () {
    this._eventBus.fire('canvas.viewbox.changed', { viewbox: this.viewbox() });
  };

  /**
   * Gets or sets the view box of the canvas, i.e. the
   * area that is currently displayed.
   *
   * The getter may return a cached viewbox (if it is currently
   * changing). To force a recomputation, pass `false` as the first argument.
   *
   * @example
   *
   * canvas.viewbox({ x: 100, y: 100, width: 500, height: 500 })
   *
   * // sets the visible area of the diagram to (100|100) -> (600|100)
   * // and and scales it according to the diagram width
   *
   * var viewbox = canvas.viewbox(); // pass `false` to force recomputing the box.
   *
   * console.log(viewbox);
   * // {
   * //   inner: Dimensions,
   * //   outer: Dimensions,
   * //   scale,
   * //   x, y,
   * //   width, height
   * // }
   *
   * // if the current diagram is zoomed and scrolled, you may reset it to the
   * // default zoom via this method, too:
   *
   * var zoomedAndScrolledViewbox = canvas.viewbox();
   *
   * canvas.viewbox({
   *   x: 0,
   *   y: 0,
   *   width: zoomedAndScrolledViewbox.outer.width,
   *   height: zoomedAndScrolledViewbox.outer.height
   * });
   *
   * @param  {Object} [box] the new view box to set
   * @param  {Number} box.x the top left X coordinate of the canvas visible in view box
   * @param  {Number} box.y the top left Y coordinate of the canvas visible in view box
   * @param  {Number} box.width the visible width
   * @param  {Number} box.height
   *
   * @return {Object} the current view box
   */
  Canvas.prototype.viewbox = function (box) {

    if (box === undefined && this._cachedViewbox) {
      return this._cachedViewbox;
    }

    var viewport = this._viewport,
        innerBox,
        outerBox = this.getSize(),
        matrix,
        transform$$1,
        scale,
        x,
        y;

    if (!box) {
      // compute the inner box based on the
      // diagrams default layer. This allows us to exclude
      // external components, such as overlays
      innerBox = this.getDefaultLayer().getBBox();

      transform$$1 = transform(viewport);
      matrix = transform$$1 ? transform$$1.matrix : createMatrix();
      scale = round(matrix.a, 1000);

      x = round(-matrix.e || 0, 1000);
      y = round(-matrix.f || 0, 1000);

      box = this._cachedViewbox = {
        x: x ? x / scale : 0,
        y: y ? y / scale : 0,
        width: outerBox.width / scale,
        height: outerBox.height / scale,
        scale: scale,
        inner: {
          width: innerBox.width,
          height: innerBox.height,
          x: innerBox.x,
          y: innerBox.y
        },
        outer: outerBox
      };

      return box;
    } else {

      this._changeViewbox(function () {
        scale = Math.min(outerBox.width / box.width, outerBox.height / box.height);

        var matrix = this._svg.createSVGMatrix().scale(scale).translate(-box.x, -box.y);

        transform(viewport, matrix);
      });
    }

    return box;
  };

  /**
   * Gets or sets the scroll of the canvas.
   *
   * @param {Object} [delta] the new scroll to apply.
   *
   * @param {Number} [delta.dx]
   * @param {Number} [delta.dy]
   */
  Canvas.prototype.scroll = function (delta) {

    var node = this._viewport;
    var matrix = node.getCTM();

    if (delta) {
      this._changeViewbox(function () {
        delta = assign({ dx: 0, dy: 0 }, delta || {});

        matrix = this._svg.createSVGMatrix().translate(delta.dx, delta.dy).multiply(matrix);

        setCTM(node, matrix);
      });
    }

    return { x: matrix.e, y: matrix.f };
  };

  /**
   * Gets or sets the current zoom of the canvas, optionally zooming
   * to the specified position.
   *
   * The getter may return a cached zoom level. Call it with `false` as
   * the first argument to force recomputation of the current level.
   *
   * @param {String|Number} [newScale] the new zoom level, either a number, i.e. 0.9,
   *                                   or `fit-viewport` to adjust the size to fit the current viewport
   * @param {String|Point} [center] the reference point { x: .., y: ..} to zoom to, 'auto' to zoom into mid or null
   *
   * @return {Number} the current scale
   */
  Canvas.prototype.zoom = function (newScale, center) {

    if (!newScale) {
      return this.viewbox(newScale).scale;
    }

    if (newScale === 'fit-viewport') {
      return this._fitViewport(center);
    }

    var outer, matrix;

    this._changeViewbox(function () {

      if ((typeof center === 'undefined' ? 'undefined' : _typeof$4(center)) !== 'object') {
        outer = this.viewbox().outer;

        center = {
          x: outer.width / 2,
          y: outer.height / 2
        };
      }

      matrix = this._setZoom(newScale, center);
    });

    return round(matrix.a, 1000);
  };

  function setCTM(node, m) {
    var mstr = 'matrix(' + m.a + ',' + m.b + ',' + m.c + ',' + m.d + ',' + m.e + ',' + m.f + ')';
    node.setAttribute('transform', mstr);
  }

  Canvas.prototype._fitViewport = function (center) {

    var vbox = this.viewbox(),
        outer = vbox.outer,
        inner = vbox.inner,
        newScale,
        newViewbox;

    // display the complete diagram without zooming in.
    // instead of relying on internal zoom, we perform a
    // hard reset on the canvas viewbox to realize this
    //
    // if diagram does not need to be zoomed in, we focus it around
    // the diagram origin instead

    if (inner.x >= 0 && inner.y >= 0 && inner.x + inner.width <= outer.width && inner.y + inner.height <= outer.height && !center) {

      newViewbox = {
        x: 0,
        y: 0,
        width: Math.max(inner.width + inner.x, outer.width),
        height: Math.max(inner.height + inner.y, outer.height)
      };
    } else {

      newScale = Math.min(1, outer.width / inner.width, outer.height / inner.height);
      newViewbox = {
        x: inner.x + (center ? inner.width / 2 - outer.width / newScale / 2 : 0),
        y: inner.y + (center ? inner.height / 2 - outer.height / newScale / 2 : 0),
        width: outer.width / newScale,
        height: outer.height / newScale
      };
    }

    this.viewbox(newViewbox);

    return this.viewbox(false).scale;
  };

  Canvas.prototype._setZoom = function (scale, center) {

    var svg = this._svg,
        viewport = this._viewport;

    var matrix = svg.createSVGMatrix();
    var point = svg.createSVGPoint();

    var centerPoint, originalPoint, currentMatrix, scaleMatrix, newMatrix;

    currentMatrix = viewport.getCTM();

    var currentScale = currentMatrix.a;

    if (center) {
      centerPoint = assign(point, center);

      // revert applied viewport transformations
      originalPoint = centerPoint.matrixTransform(currentMatrix.inverse());

      // create scale matrix
      scaleMatrix = matrix.translate(originalPoint.x, originalPoint.y).scale(1 / currentScale * scale).translate(-originalPoint.x, -originalPoint.y);

      newMatrix = currentMatrix.multiply(scaleMatrix);
    } else {
      newMatrix = matrix.scale(scale);
    }

    setCTM(this._viewport, newMatrix);

    return newMatrix;
  };

  /**
   * Returns the size of the canvas
   *
   * @return {Dimensions}
   */
  Canvas.prototype.getSize = function () {
    return {
      width: this._container.clientWidth,
      height: this._container.clientHeight
    };
  };

  /**
   * Return the absolute bounding box for the given element
   *
   * The absolute bounding box may be used to display overlays in the
   * callers (browser) coordinate system rather than the zoomed in/out
   * canvas coordinates.
   *
   * @param  {ElementDescriptor} element
   * @return {Bounds} the absolute bounding box
   */
  Canvas.prototype.getAbsoluteBBox = function (element) {
    var vbox = this.viewbox();
    var bbox;

    // connection
    // use svg bbox
    if (element.waypoints) {
      var gfx = this.getGraphics(element);

      bbox = gfx.getBBox();
    }
    // shapes
    // use data
    else {
        bbox = element;
      }

    var x = bbox.x * vbox.scale - vbox.x * vbox.scale;
    var y = bbox.y * vbox.scale - vbox.y * vbox.scale;

    var width = bbox.width * vbox.scale;
    var height = bbox.height * vbox.scale;

    return {
      x: x,
      y: y,
      width: width,
      height: height
    };
  };

  /**
   * Fires an event in order other modules can react to the
   * canvas resizing
   */
  Canvas.prototype.resized = function () {

    // force recomputation of view box
    delete this._cachedViewbox;

    this._eventBus.fire('canvas.resized');
  };

  var ELEMENT_ID = 'data-element-id';

  /**
   * @class
   *
   * A registry that keeps track of all shapes in the diagram.
   */
  function ElementRegistry(eventBus) {
    this._elements = {};

    this._eventBus = eventBus;
  }

  ElementRegistry.$inject = ['eventBus'];

  /**
   * Register a pair of (element, gfx, (secondaryGfx)).
   *
   * @param {djs.model.Base} element
   * @param {SVGElement} gfx
   * @param {SVGElement} [secondaryGfx] optional other element to register, too
   */
  ElementRegistry.prototype.add = function (element, gfx, secondaryGfx) {

    var id = element.id;

    this._validateId(id);

    // associate dom node with element
    attr$1(gfx, ELEMENT_ID, id);

    if (secondaryGfx) {
      attr$1(secondaryGfx, ELEMENT_ID, id);
    }

    this._elements[id] = { element: element, gfx: gfx, secondaryGfx: secondaryGfx };
  };

  /**
   * Removes an element from the registry.
   *
   * @param {djs.model.Base} element
   */
  ElementRegistry.prototype.remove = function (element) {
    var elements = this._elements,
        id = element.id || element,
        container = id && elements[id];

    if (container) {

      // unset element id on gfx
      attr$1(container.gfx, ELEMENT_ID, '');

      if (container.secondaryGfx) {
        attr$1(container.secondaryGfx, ELEMENT_ID, '');
      }

      delete elements[id];
    }
  };

  /**
   * Update the id of an element
   *
   * @param {djs.model.Base} element
   * @param {String} newId
   */
  ElementRegistry.prototype.updateId = function (element, newId) {

    this._validateId(newId);

    if (typeof element === 'string') {
      element = this.get(element);
    }

    this._eventBus.fire('element.updateId', {
      element: element,
      newId: newId
    });

    var gfx = this.getGraphics(element),
        secondaryGfx = this.getGraphics(element, true);

    this.remove(element);

    element.id = newId;

    this.add(element, gfx, secondaryGfx);
  };

  /**
   * Return the model element for a given id or graphics.
   *
   * @example
   *
   * elementRegistry.get('SomeElementId_1');
   * elementRegistry.get(gfx);
   *
   *
   * @param {String|SVGElement} filter for selecting the element
   *
   * @return {djs.model.Base}
   */
  ElementRegistry.prototype.get = function (filter) {
    var id;

    if (typeof filter === 'string') {
      id = filter;
    } else {
      id = filter && attr$1(filter, ELEMENT_ID);
    }

    var container = this._elements[id];
    return container && container.element;
  };

  /**
   * Return all elements that match a given filter function.
   *
   * @param {Function} fn
   *
   * @return {Array<djs.model.Base>}
   */
  ElementRegistry.prototype.filter = function (fn) {

    var filtered = [];

    this.forEach(function (element, gfx) {
      if (fn(element, gfx)) {
        filtered.push(element);
      }
    });

    return filtered;
  };

  /**
   * Return all rendered model elements.
   *
   * @return {Array<djs.model.Base>}
   */
  ElementRegistry.prototype.getAll = function () {
    return this.filter(function (e) {
      return e;
    });
  };

  /**
   * Iterate over all diagram elements.
   *
   * @param {Function} fn
   */
  ElementRegistry.prototype.forEach = function (fn) {

    var map = this._elements;

    Object.keys(map).forEach(function (id) {
      var container = map[id],
          element = container.element,
          gfx = container.gfx;

      return fn(element, gfx);
    });
  };

  /**
   * Return the graphical representation of an element or its id.
   *
   * @example
   * elementRegistry.getGraphics('SomeElementId_1');
   * elementRegistry.getGraphics(rootElement); // <g ...>
   *
   * elementRegistry.getGraphics(rootElement, true); // <svg ...>
   *
   *
   * @param {String|djs.model.Base} filter
   * @param {Boolean} [secondary=false] whether to return the secondary connected element
   *
   * @return {SVGElement}
   */
  ElementRegistry.prototype.getGraphics = function (filter, secondary) {
    var id = filter.id || filter;

    var container = this._elements[id];
    return container && (secondary ? container.secondaryGfx : container.gfx);
  };

  /**
   * Validate the suitability of the given id and signals a problem
   * with an exception.
   *
   * @param {String} id
   *
   * @throws {Error} if id is empty or already assigned
   */
  ElementRegistry.prototype._validateId = function (id) {
    if (!id) {
      throw new Error('element must have an id');
    }

    if (this._elements[id]) {
      throw new Error('element with id ' + id + ' already added');
    }
  };

  /**
   * An empty collection stub. Use {@link RefsCollection.extend} to extend a
   * collection with ref semantics.
   *
   * @class RefsCollection
   */

  /**
   * Extends a collection with {@link Refs} aware methods
   *
   * @memberof RefsCollection
   * @static
   *
   * @param  {Array<Object>} collection
   * @param  {Refs} refs instance
   * @param  {Object} property represented by the collection
   * @param  {Object} target object the collection is attached to
   *
   * @return {RefsCollection<Object>} the extended array
   */

  function extend$1(collection, refs, property, target) {

    var inverseProperty = property.inverse;

    /**
     * Removes the given element from the array and returns it.
     *
     * @method RefsCollection#remove
     *
     * @param {Object} element the element to remove
     */
    Object.defineProperty(collection, 'remove', {
      value: function value(element) {
        var idx = this.indexOf(element);
        if (idx !== -1) {
          this.splice(idx, 1);

          // unset inverse
          refs.unset(element, inverseProperty, target);
        }

        return element;
      }
    });

    /**
     * Returns true if the collection contains the given element
     *
     * @method RefsCollection#contains
     *
     * @param {Object} element the element to check for
     */
    Object.defineProperty(collection, 'contains', {
      value: function value(element) {
        return this.indexOf(element) !== -1;
      }
    });

    /**
     * Adds an element to the array, unless it exists already (set semantics).
     *
     * @method RefsCollection#add
     *
     * @param {Object} element the element to add
     */
    Object.defineProperty(collection, 'add', {
      value: function value(element) {

        if (!this.contains(element)) {
          this.push(element);

          // set inverse
          refs.set(element, inverseProperty, target);
        }
      }
    });

    // a simple marker, identifying this element
    // as being a refs collection
    Object.defineProperty(collection, '__refs_collection', {
      value: true
    });

    return collection;
  }

  function isExtended(collection) {
    return collection.__refs_collection === true;
  }

  var extend_1 = extend$1;

  var isExtended_1 = isExtended;

  var collection = {
  	extend: extend_1,
  	isExtended: isExtended_1
  };

  function hasOwnProperty$1(e, property) {
    return Object.prototype.hasOwnProperty.call(e, property.name || property);
  }

  function defineCollectionProperty(ref, property, target) {
    Object.defineProperty(target, property.name, {
      enumerable: property.enumerable,
      value: collection.extend(target[property.name] || [], ref, property, target)
    });
  }

  function defineProperty$1(ref, property, target) {

    var inverseProperty = property.inverse;

    var _value = target[property.name];

    Object.defineProperty(target, property.name, {
      enumerable: property.enumerable,

      get: function get() {
        return _value;
      },

      set: function set(value) {

        // return if we already performed all changes
        if (value === _value) {
          return;
        }

        var old = _value;

        // temporary set null
        _value = null;

        if (old) {
          ref.unset(old, inverseProperty, target);
        }

        // set new value
        _value = value;

        // set inverse value
        ref.set(_value, inverseProperty, target);
      }
    });
  }

  /**
   * Creates a new references object defining two inversly related
   * attribute descriptors a and b.
   *
   * <p>
   *   When bound to an object using {@link Refs#bind} the references
   *   get activated and ensure that add and remove operations are applied
   *   reversely, too.
   * </p>
   *
   * <p>
   *   For attributes represented as collections {@link Refs} provides the
   *   {@link RefsCollection#add}, {@link RefsCollection#remove} and {@link RefsCollection#contains} extensions
   *   that must be used to properly hook into the inverse change mechanism.
   * </p>
   *
   * @class Refs
   *
   * @classdesc A bi-directional reference between two attributes.
   *
   * @param {Refs.AttributeDescriptor} a property descriptor
   * @param {Refs.AttributeDescriptor} b property descriptor
   *
   * @example
   *
   * var refs = Refs({ name: 'wheels', collection: true, enumerable: true }, { name: 'car' });
   *
   * var car = { name: 'toyota' };
   * var wheels = [{ pos: 'front-left' }, { pos: 'front-right' }];
   *
   * refs.bind(car, 'wheels');
   *
   * car.wheels // []
   * car.wheels.add(wheels[0]);
   * car.wheels.add(wheels[1]);
   *
   * car.wheels // [{ pos: 'front-left' }, { pos: 'front-right' }]
   *
   * wheels[0].car // { name: 'toyota' };
   * car.wheels.remove(wheels[0]);
   *
   * wheels[0].car // undefined
   */
  function Refs(a, b) {

    if (!(this instanceof Refs)) {
      return new Refs(a, b);
    }

    // link
    a.inverse = b;
    b.inverse = a;

    this.props = {};
    this.props[a.name] = a;
    this.props[b.name] = b;
  }

  /**
   * Binds one side of a bi-directional reference to a
   * target object.
   *
   * @memberOf Refs
   *
   * @param  {Object} target
   * @param  {String} property
   */
  Refs.prototype.bind = function (target, property) {
    if (typeof property === 'string') {
      if (!this.props[property]) {
        throw new Error('no property <' + property + '> in ref');
      }
      property = this.props[property];
    }

    if (property.collection) {
      defineCollectionProperty(this, property, target);
    } else {
      defineProperty$1(this, property, target);
    }
  };

  Refs.prototype.ensureRefsCollection = function (target, property) {

    var collection$$1 = target[property.name];

    if (!collection.isExtended(collection$$1)) {
      defineCollectionProperty(this, property, target);
    }

    return collection$$1;
  };

  Refs.prototype.ensureBound = function (target, property) {
    if (!hasOwnProperty$1(target, property)) {
      this.bind(target, property);
    }
  };

  Refs.prototype.unset = function (target, property, value) {

    if (target) {
      this.ensureBound(target, property);

      if (property.collection) {
        this.ensureRefsCollection(target, property).remove(value);
      } else {
        target[property.name] = undefined;
      }
    }
  };

  Refs.prototype.set = function (target, property, value) {

    if (target) {
      this.ensureBound(target, property);

      if (property.collection) {
        this.ensureRefsCollection(target, property).add(value);
      } else {
        target[property.name] = value;
      }
    }
  };

  var refs = Refs;

  var objectRefs = refs;

  var Collection = collection;
  objectRefs.Collection = Collection;

  var parentRefs = new objectRefs({ name: 'children', enumerable: true, collection: true }, { name: 'parent' }),
      labelRefs = new objectRefs({ name: 'label', enumerable: true }, { name: 'labelTarget' }),
      attacherRefs = new objectRefs({ name: 'attachers', collection: true }, { name: 'host' }),
      outgoingRefs = new objectRefs({ name: 'outgoing', collection: true }, { name: 'source' }),
      incomingRefs = new objectRefs({ name: 'incoming', collection: true }, { name: 'target' });

  /**
   * @namespace djs.model
   */

  /**
   * @memberOf djs.model
   */

  /**
   * The basic graphical representation
   *
   * @class
   *
   * @abstract
   */
  function Base$1() {

    /**
     * The object that backs up the shape
     *
     * @name Base#businessObject
     * @type Object
     */
    Object.defineProperty(this, 'businessObject', {
      writable: true
    });

    /**
     * The parent shape
     *
     * @name Base#parent
     * @type Shape
     */
    parentRefs.bind(this, 'parent');

    /**
     * @name Base#label
     * @type Label
     */
    labelRefs.bind(this, 'label');

    /**
     * The list of outgoing connections
     *
     * @name Base#outgoing
     * @type Array<Connection>
     */
    outgoingRefs.bind(this, 'outgoing');

    /**
     * The list of incoming connections
     *
     * @name Base#incoming
     * @type Array<Connection>
     */
    incomingRefs.bind(this, 'incoming');
  }

  /**
   * A graphical object
   *
   * @class
   * @constructor
   *
   * @extends Base
   */
  function Shape() {
    Base$1.call(this);

    /**
     * The list of children
     *
     * @name Shape#children
     * @type Array<Base>
     */
    parentRefs.bind(this, 'children');

    /**
     * @name Shape#host
     * @type Shape
     */
    attacherRefs.bind(this, 'host');

    /**
     * @name Shape#attachers
     * @type Shape
     */
    attacherRefs.bind(this, 'attachers');
  }

  inherits_browser(Shape, Base$1);

  /**
   * A root graphical object
   *
   * @class
   * @constructor
   *
   * @extends Shape
   */
  function Root() {
    Shape.call(this);
  }

  inherits_browser(Root, Shape);

  /**
   * A label for an element
   *
   * @class
   * @constructor
   *
   * @extends Shape
   */
  function Label() {
    Shape.call(this);

    /**
     * The labeled element
     *
     * @name Label#labelTarget
     * @type Base
     */
    labelRefs.bind(this, 'labelTarget');
  }

  inherits_browser(Label, Shape);

  /**
   * A connection between two elements
   *
   * @class
   * @constructor
   *
   * @extends Base
   */
  function Connection() {
    Base$1.call(this);

    /**
     * The element this connection originates from
     *
     * @name Connection#source
     * @type Base
     */
    outgoingRefs.bind(this, 'source');

    /**
     * The element this connection points to
     *
     * @name Connection#target
     * @type Base
     */
    incomingRefs.bind(this, 'target');
  }

  inherits_browser(Connection, Base$1);

  var types$4 = {
    connection: Connection,
    shape: Shape,
    label: Label,
    root: Root
  };

  /**
   * Creates a new model element of the specified type
   *
   * @method create
   *
   * @example
   *
   * var shape1 = Model.create('shape', { x: 10, y: 10, width: 100, height: 100 });
   * var shape2 = Model.create('shape', { x: 210, y: 210, width: 100, height: 100 });
   *
   * var connection = Model.create('connection', { waypoints: [ { x: 110, y: 55 }, {x: 210, y: 55 } ] });
   *
   * @param  {String} type lower-cased model name
   * @param  {Object} attrs attributes to initialize the new model instance with
   *
   * @return {Base} the new model instance
   */
  function create$1(type, attrs) {
    var Type = types$4[type];
    if (!Type) {
      throw new Error('unknown type: <' + type + '>');
    }
    return assign(new Type(), attrs);
  }

  /**
   * A factory for diagram-js shapes
   */
  function ElementFactory() {
    this._uid = 12;
  }

  ElementFactory.prototype.createRoot = function (attrs) {
    return this.create('root', attrs);
  };

  ElementFactory.prototype.createLabel = function (attrs) {
    return this.create('label', attrs);
  };

  ElementFactory.prototype.createShape = function (attrs) {
    return this.create('shape', attrs);
  };

  ElementFactory.prototype.createConnection = function (attrs) {
    return this.create('connection', attrs);
  };

  /**
   * Create a model element with the given type and
   * a number of pre-set attributes.
   *
   * @param  {String} type
   * @param  {Object} attrs
   * @return {djs.model.Base} the newly created model instance
   */
  ElementFactory.prototype.create = function (type, attrs) {

    attrs = assign({}, attrs || {});

    if (!attrs.id) {
      attrs.id = type + '_' + this._uid++;
    }

    return create$1(type, attrs);
  };

  /**
   * SVGs for elements are generated by the {@link GraphicsFactory}.
   *
   * This utility gives quick access to the important semantic
   * parts of an element.
   */

  /**
   * Returns the visual part of a diagram element
   *
   * @param {Snap<SVGElement>} gfx
   *
   * @return {Snap<SVGElement>}
   */
  function getVisual(gfx) {
    return query('.djs-visual', gfx);
  }

  /**
   * Returns the children for a given diagram element.
   *
   * @param {Snap<SVGElement>} gfx
   * @return {Snap<SVGElement>}
   */
  function getChildren(gfx) {
    return gfx.parentNode.childNodes[1];
  }

  /**
   * @param {SVGElement} element
   * @param {Number} x
   * @param {Number} y
   */
  function translate(gfx, x, y) {
    var translate = createTransform();
    translate.setTranslate(x, y);

    transform(gfx, translate);
  }

  /**
   * A factory that creates graphical elements
   *
   * @param {EventBus} eventBus
   * @param {ElementRegistry} elementRegistry
   */
  function GraphicsFactory(eventBus, elementRegistry) {
    this._eventBus = eventBus;
    this._elementRegistry = elementRegistry;
  }

  GraphicsFactory.$inject = ['eventBus', 'elementRegistry'];

  GraphicsFactory.prototype._getChildren = function (element) {

    var gfx = this._elementRegistry.getGraphics(element);

    var childrenGfx;

    // root element
    if (!element.parent) {
      childrenGfx = gfx;
    } else {
      childrenGfx = getChildren(gfx);
      if (!childrenGfx) {
        childrenGfx = create('g');
        classes$1(childrenGfx).add('djs-children');

        append(gfx.parentNode, childrenGfx);
      }
    }

    return childrenGfx;
  };

  /**
   * Clears the graphical representation of the element and returns the
   * cleared visual (the <g class="djs-visual" /> element).
   */
  GraphicsFactory.prototype._clear = function (gfx) {
    var visual = getVisual(gfx);

    clear(visual);

    return visual;
  };

  /**
   * Creates a gfx container for shapes and connections
   *
   * The layout is as follows:
   *
   * <g class="djs-group">
   *
   *   <!-- the gfx -->
   *   <g class="djs-element djs-(shape|connection)">
   *     <g class="djs-visual">
   *       <!-- the renderer draws in here -->
   *     </g>
   *
   *     <!-- extensions (overlays, click box, ...) goes here
   *   </g>
   *
   *   <!-- the gfx child nodes -->
   *   <g class="djs-children"></g>
   * </g>
   *
   * @param {Object} parent
   * @param {String} type the type of the element, i.e. shape | connection
   * @param {Number} [parentIndex] position to create container in parent
   */
  GraphicsFactory.prototype._createContainer = function (type, childrenGfx, parentIndex) {
    var outerGfx = create('g');
    classes$1(outerGfx).add('djs-group');

    // insert node at position
    if (typeof parentIndex !== 'undefined') {
      prependTo(outerGfx, childrenGfx, childrenGfx.childNodes[parentIndex]);
    } else {
      append(childrenGfx, outerGfx);
    }

    var gfx = create('g');
    classes$1(gfx).add('djs-element');
    classes$1(gfx).add('djs-' + type);

    append(outerGfx, gfx);

    // create visual
    var visual = create('g');
    classes$1(visual).add('djs-visual');

    append(gfx, visual);

    return gfx;
  };

  GraphicsFactory.prototype.create = function (type, element, parentIndex) {
    var childrenGfx = this._getChildren(element.parent);
    return this._createContainer(type, childrenGfx, parentIndex);
  };

  GraphicsFactory.prototype.updateContainments = function (elements) {

    var self = this,
        elementRegistry = this._elementRegistry,
        parents;

    parents = reduce(elements, function (map$$1, e) {

      if (e.parent) {
        map$$1[e.parent.id] = e.parent;
      }

      return map$$1;
    }, {});

    // update all parents of changed and reorganized their children
    // in the correct order (as indicated in our model)
    forEach(parents, function (parent) {

      var children = parent.children;

      if (!children) {
        return;
      }

      var childGfx = self._getChildren(parent);

      forEach(children.slice().reverse(), function (c) {
        var gfx = elementRegistry.getGraphics(c);

        prependTo(gfx.parentNode, childGfx);
      });
    });
  };

  GraphicsFactory.prototype.drawShape = function (visual, element) {
    var eventBus = this._eventBus;

    return eventBus.fire('render.shape', { gfx: visual, element: element });
  };

  GraphicsFactory.prototype.getShapePath = function (element) {
    var eventBus = this._eventBus;

    return eventBus.fire('render.getShapePath', element);
  };

  GraphicsFactory.prototype.drawConnection = function (visual, element) {
    var eventBus = this._eventBus;

    return eventBus.fire('render.connection', { gfx: visual, element: element });
  };

  GraphicsFactory.prototype.getConnectionPath = function (waypoints) {
    var eventBus = this._eventBus;

    return eventBus.fire('render.getConnectionPath', waypoints);
  };

  GraphicsFactory.prototype.update = function (type, element, gfx) {
    // Do not update root element
    if (!element.parent) {
      return;
    }

    var visual = this._clear(gfx);

    // redraw
    if (type === 'shape') {
      this.drawShape(visual, element);

      // update positioning
      translate(gfx, element.x, element.y);
    } else if (type === 'connection') {
      this.drawConnection(visual, element);
    } else {
      throw new Error('unknown type: ' + type);
    }

    if (element.hidden) {
      attr$1(gfx, 'display', 'none');
    } else {
      attr$1(gfx, 'display', 'block');
    }
  };

  GraphicsFactory.prototype.remove = function (element) {
    var gfx = this._elementRegistry.getGraphics(element);

    // remove
    remove$1(gfx.parentNode);
  };

  // helpers //////////////////////

  function prependTo(newNode, parentNode, siblingNode) {
    parentNode.insertBefore(newNode, siblingNode || parentNode.firstChild);
  }

  var CoreModule = {
    __depends__: [DrawModule],
    __init__: ['canvas'],
    canvas: ['type', Canvas],
    elementRegistry: ['type', ElementRegistry],
    elementFactory: ['type', ElementFactory],
    eventBus: ['type', EventBus],
    graphicsFactory: ['type', GraphicsFactory]
  };

  /**
   * Bootstrap an injector from a list of modules, instantiating a number of default components
   *
   * @ignore
   * @param {Array<didi.Module>} bootstrapModules
   *
   * @return {didi.Injector} a injector to use to access the components
   */
  function bootstrap(bootstrapModules) {

    var modules = [],
        components = [];

    function hasModule(m) {
      return modules.indexOf(m) >= 0;
    }

    function addModule(m) {
      modules.push(m);
    }

    function visit(m) {
      if (hasModule(m)) {
        return;
      }

      (m.__depends__ || []).forEach(visit);

      if (hasModule(m)) {
        return;
      }

      addModule(m);

      (m.__init__ || []).forEach(function (c) {
        components.push(c);
      });
    }

    bootstrapModules.forEach(visit);

    var injector = new Injector(modules);

    components.forEach(function (c) {

      try {
        // eagerly resolve component (fn or string)
        injector[typeof c === 'string' ? 'get' : 'invoke'](c);
      } catch (e) {
        console.error('Failed to instantiate component');
        console.error(e.stack);

        throw e;
      }
    });

    return injector;
  }

  /**
   * Creates an injector from passed options.
   *
   * @ignore
   * @param  {Object} options
   * @return {didi.Injector}
   */
  function createInjector(options) {

    options = options || {};

    var configModule = {
      'config': ['value', options]
    };

    var modules = [configModule, CoreModule].concat(options.modules || []);

    return bootstrap(modules);
  }

  /**
   * The main diagram-js entry point that bootstraps the diagram with the given
   * configuration.
   *
   * To register extensions with the diagram, pass them as Array<didi.Module> to the constructor.
   *
   * @class djs.Diagram
   * @memberOf djs
   * @constructor
   *
   * @example
   *
   * <caption>Creating a plug-in that logs whenever a shape is added to the canvas.</caption>
   *
   * // plug-in implemenentation
   * function MyLoggingPlugin(eventBus) {
   *   eventBus.on('shape.added', function(event) {
   *     console.log('shape ', event.shape, ' was added to the diagram');
   *   });
   * }
   *
   * // export as module
   * export default {
   *   __init__: [ 'myLoggingPlugin' ],
   *     myLoggingPlugin: [ 'type', MyLoggingPlugin ]
   * };
   *
   *
   * // instantiate the diagram with the new plug-in
   *
   * import MyLoggingModule from 'path-to-my-logging-plugin';
   *
   * var diagram = new Diagram({
   *   modules: [
   *     MyLoggingModule
   *   ]
   * });
   *
   * diagram.invoke([ 'canvas', function(canvas) {
   *   // add shape to drawing canvas
   *   canvas.addShape({ x: 10, y: 10 });
   * });
   *
   * // 'shape ... was added to the diagram' logged to console
   *
   * @param {Object} options
   * @param {Array<didi.Module>} [options.modules] external modules to instantiate with the diagram
   * @param {didi.Injector} [injector] an (optional) injector to bootstrap the diagram with
   */
  function Diagram(options, injector) {

    // create injector unless explicitly specified
    this.injector = injector = injector || createInjector(options);

    // API

    /**
     * Resolves a diagram service
     *
     * @method Diagram#get
     *
     * @param {String} name the name of the diagram service to be retrieved
     * @param {Boolean} [strict=true] if false, resolve missing services to null
     */
    this.get = injector.get;

    /**
     * Executes a function into which diagram services are injected
     *
     * @method Diagram#invoke
     *
     * @param {Function|Object[]} fn the function to resolve
     * @param {Object} locals a number of locals to use to resolve certain dependencies
     */
    this.invoke = injector.invoke;

    // init

    // indicate via event


    /**
     * An event indicating that all plug-ins are loaded.
     *
     * Use this event to fire other events to interested plug-ins
     *
     * @memberOf Diagram
     *
     * @event diagram.init
     *
     * @example
     *
     * eventBus.on('diagram.init', function() {
     *   eventBus.fire('my-custom-event', { foo: 'BAR' });
     * });
     *
     * @type {Object}
     */
    this.get('eventBus').fire('diagram.init');
  }

  /**
   * Destroys the diagram
   *
   * @method  Diagram#destroy
   */
  Diagram.prototype.destroy = function () {
    this.get('eventBus').fire('diagram.destroy');
  };

  /**
   * Clear the diagram, removing all contents.
   */
  Diagram.prototype.clear = function () {
    this.get('eventBus').fire('diagram.clear');
  };

  var Diagram$1 = /*#__PURE__*/Object.freeze({
    default: Diagram
  });

  var require$$0 = ( Diagram$1 && Diagram ) || Diagram$1;

  var diagramJs = require$$0;

  /**
   * Is an element of the given DMN type?
   *
   * @param  {tjs.model.Base|ModdleElement} element
   * @param  {String} type
   *
   * @return {Boolean}
   */
  function is(element, type) {
    var bo = getBusinessObject(element);

    return bo && typeof bo.$instanceOf === 'function' && bo.$instanceOf(type);
  }

  /**
   * Return the business object for a given element.
   *
   * @param  {tjs.model.Base|ModdleElement} element
   *
   * @return {ModdleElement}
   */
  function getBusinessObject(element) {
    return element && element.businessObject || element;
  }

  function getName(element) {
    return getBusinessObject(element).name;
  }

  function parseID(element) {
    return element && element.href.slice(1);
  }

  function DRDTreeWalker(handler, options) {

    // list of elements to handle deferred to ensure
    // prerequisites are drawn
    var deferred = [];

    function visit(element, di) {

      var gfx = element.gfx;

      // avoid multiple rendering of elements
      if (gfx) {
        throw new Error('already rendered ' + element.id);
      }

      // call handler
      return handler.element(element, di);
    }

    // Semantic handling //////////////////////

    function handleDefinitions(definitions) {

      // make sure we walk the correct dmnElement
      handler.root(definitions);

      forEach(['decision', 'drgElements', 'artifacts'], function (element) {
        if (definitions[element]) {
          forEach(definitions[element], handleElement);
        }
      });

      handleDeferred(deferred);
    }

    function handleDeferred(elements) {
      forEach(elements, function (d) {
        d();
      });
    }

    function handleElement(element) {
      var edges = [];

      handleDI(element, function (extensionElement) {
        if (is(extensionElement, 'biodi:Bounds')) {
          visit(element, extensionElement);
        } else if (is(extensionElement, 'biodi:Edge')) {
          edges.push(extensionElement);
        }
      });

      handleConnections(edges, element);
    }

    function handleConnections(edges, element) {

      function deferConnection(semantic, property) {
        var id = parseID(property),
            edge = find(edges, matchPattern({ source: id }));

        if (edge) {
          deferred.push(function () {
            visit(semantic, edge);
          });
        }
      }

      if (is(element, 'dmn:Association')) {
        return deferConnection(element, element.sourceRef);
      }

      forEach(['informationRequirement', 'knowledgeRequirement', 'authorityRequirement'], function (requirements) {
        forEach(element[requirements], function (requirement) {
          var properties = null;

          // get the href
          if (is(requirement, 'dmn:InformationRequirement')) {
            properties = ['requiredDecision', 'requiredInput'];
          } else if (is(requirement, 'dmn:KnowledgeRequirement')) {
            properties = ['requiredKnowledge'];
          } else if (is(requirement, 'dmn:AuthorityRequirement')) {
            properties = ['requiredDecision', 'requiredInput', 'requiredAuthority'];
          }

          if (properties) {
            forEach(properties, function (property) {
              if (requirement[property]) {
                deferConnection(requirement, requirement[property]);
              }
            });
          }
        });
      });
    }

    function handleDI(element, fn) {
      var extensionElements = element.extensionElements;

      if (!extensionElements) {
        return;
      }

      forEach(extensionElements.values, fn);
    }

    // API //////////////////////

    return {
      handleDefinitions: handleDefinitions
    };
  }

  /**
   * Import the definitions into a diagram.
   *
   * Errors and warnings are reported through the specified callback.
   *
   * @param  {Drd} drd
   * @param  {ModdleElement} definitions
   * @param  {Function} done
   *         the callback, invoked with (err, [ warning ]) once the import is done
   */
  function importDRD(drd, definitions, done) {

    var importer = drd.get('drdImporter'),
        eventBus = drd.get('eventBus');

    var error,
        warnings = [];

    function render(definitions) {

      var visitor = {
        root: function root(element) {
          return importer.root(element);
        },

        element: function element(_element, di) {
          return importer.add(_element, di);
        },

        error: function error(message, context) {
          warnings.push({ message: message, context: context });
        }
      };

      var walker = new DRDTreeWalker(visitor);

      // import
      walker.handleDefinitions(definitions);
    }

    eventBus.fire('import.start', { definitions: definitions });

    try {
      render(definitions);
    } catch (e) {
      error = e;
    }

    eventBus.fire('import.done', { error: error, warnings: warnings });

    done(error, warnings);
  }

  var DEFAULT_BOX_PADDING = 0;

  var DEFAULT_LABEL_SIZE = {
    width: 150,
    height: 50
  };

  function parseAlign(align) {

    var parts = align.split('-');

    return {
      horizontal: parts[0] || 'center',
      vertical: parts[1] || 'top'
    };
  }

  function parsePadding(padding) {

    if (isObject(padding)) {
      return assign({ top: 0, left: 0, right: 0, bottom: 0 }, padding);
    } else {
      return {
        top: padding,
        left: padding,
        right: padding,
        bottom: padding
      };
    }
  }

  function getTextBBox(text, fakeText) {

    fakeText.textContent = text;

    try {
      var bbox,
          emptyLine = text === '';

      // add dummy text, when line is empty to determine correct height
      fakeText.textContent = emptyLine ? 'dummy' : text;

      bbox = pick(fakeText.getBBox(), ['width', 'height']);

      if (emptyLine) {
        // correct width
        bbox.width = 0;
      }

      return bbox;
    } catch (e) {
      return { width: 0, height: 0 };
    }
  }

  /**
   * Layout the next line and return the layouted element.
   *
   * Alters the lines passed.
   *
   * @param  {Array<String>} lines
   * @return {Object} the line descriptor, an object { width, height, text }
   */
  function layoutNext(lines, maxWidth, fakeText) {

    var originalLine = lines.shift(),
        fitLine = originalLine;

    var textBBox;

    for (;;) {
      textBBox = getTextBBox(fitLine, fakeText);

      textBBox.width = fitLine ? textBBox.width : 0;

      // try to fit
      if (fitLine === ' ' || fitLine === '' || textBBox.width < Math.round(maxWidth) || fitLine.length < 2) {
        return fit(lines, fitLine, originalLine, textBBox);
      }

      fitLine = shortenLine(fitLine, textBBox.width, maxWidth);
    }
  }

  function fit(lines, fitLine, originalLine, textBBox) {
    if (fitLine.length < originalLine.length) {
      var remainder = originalLine.slice(fitLine.length).trim();

      lines.unshift(remainder);
    }
    return { width: textBBox.width, height: textBBox.height, text: fitLine };
  }

  /**
   * Shortens a line based on spacing and hyphens.
   * Returns the shortened result on success.
   *
   * @param  {String} line
   * @param  {Number} maxLength the maximum characters of the string
   * @return {String} the shortened string
   */
  function semanticShorten(line, maxLength) {
    var parts = line.split(/(\s|-)/g),
        part,
        shortenedParts = [],
        length = 0;

    // try to shorten via spaces + hyphens
    if (parts.length > 1) {
      while (part = parts.shift()) {
        if (part.length + length < maxLength) {
          shortenedParts.push(part);
          length += part.length;
        } else {
          // remove previous part, too if hyphen does not fit anymore
          if (part === '-') {
            shortenedParts.pop();
          }

          break;
        }
      }
    }

    return shortenedParts.join('');
  }

  function shortenLine(line, width, maxWidth) {
    var length = Math.max(line.length * (maxWidth / width), 1);

    // try to shorten semantically (i.e. based on spaces and hyphens)
    var shortenedLine = semanticShorten(line, length);

    if (!shortenedLine) {

      // force shorten by cutting the long word
      shortenedLine = line.slice(0, Math.max(Math.round(length - 1), 1));
    }

    return shortenedLine;
  }

  function getHelperSvg() {
    var helperSvg = document.getElementById('helper-svg');

    if (!helperSvg) {
      helperSvg = create('svg');

      attr$1(helperSvg, {
        id: 'helper-svg',
        width: 0,
        height: 0,
        style: 'visibility: hidden; position: fixed'
      });

      document.body.appendChild(helperSvg);
    }

    return helperSvg;
  }

  /**
   * Creates a new label utility
   *
   * @param {Object} config
   * @param {Dimensions} config.size
   * @param {Number} config.padding
   * @param {Object} config.style
   * @param {String} config.align
   */
  function Text(config) {

    this._config = assign({}, {
      size: DEFAULT_LABEL_SIZE,
      padding: DEFAULT_BOX_PADDING,
      style: {},
      align: 'center-top'
    }, config || {});
  }

  /**
   * Returns the layouted text as an SVG element.
   *
   * @param {String} text
   * @param {Object} options
   *
   * @return {SVGElement}
   */
  Text.prototype.createText = function (text, options) {
    return this.layoutText(text, options).element;
  };

  /**
   * Returns a labels layouted dimensions.
   *
   * @param {String} text to layout
   * @param {Object} options
   *
   * @return {Dimensions}
   */
  Text.prototype.getDimensions = function (text, options) {
    return this.layoutText(text, options).dimensions;
  };

  /**
   * Creates and returns a label and its bounding box.
   *
   * @method Text#createText
   *
   * @param {String} text the text to render on the label
   * @param {Object} options
   * @param {String} options.align how to align in the bounding box.
   *                               Any of { 'center-middle', 'center-top' },
   *                               defaults to 'center-top'.
   * @param {String} options.style style to be applied to the text
   * @param {boolean} options.fitBox indicates if box will be recalculated to
   *                                 fit text
   *
   * @return {Object} { element, dimensions }
   */
  Text.prototype.layoutText = function (text, options) {
    var box = assign({}, this._config.size, options.box),
        style = assign({}, this._config.style, options.style),
        align = parseAlign(options.align || this._config.align),
        padding = parsePadding(options.padding !== undefined ? options.padding : this._config.padding),
        fitBox = options.fitBox || false;

    var lines = text.split(/\r?\n/g),
        layouted = [];

    var maxWidth = box.width - padding.left - padding.right;

    // ensure correct rendering by attaching helper text node to invisible SVG
    var helperText = create('text');
    attr$1(helperText, { x: 0, y: 0 });
    attr$1(helperText, style);

    var helperSvg = getHelperSvg();

    append(helperSvg, helperText);

    while (lines.length) {
      layouted.push(layoutNext(lines, maxWidth, helperText));
    }

    var totalHeight = reduce(layouted, function (sum, line, idx) {
      return sum + line.height;
    }, 0);

    var maxLineWidth = reduce(layouted, function (sum, line, idx) {
      return line.width > sum ? line.width : sum;
    }, 0);

    // the y position of the next line
    var y, x;

    switch (align.vertical) {
      case 'middle':
        y = (box.height - totalHeight) / 2 - layouted[0].height / 4;
        break;

      default:
        y = padding.top;
    }

    var textElement = create('text');

    attr$1(textElement, style);

    // layout each line taking into account that parent
    // shape might resize to fit text size
    forEach(layouted, function (line) {
      y += line.height;

      switch (align.horizontal) {
        case 'left':
          x = padding.left;
          break;

        case 'right':
          x = (fitBox ? maxLineWidth : maxWidth) - padding.right - line.width;
          break;

        default:
          // aka center
          x = Math.max(((fitBox ? maxLineWidth : maxWidth) - line.width) / 2 + padding.left, 0);
      }

      var tspan = create('tspan');
      attr$1(tspan, { x: x, y: y });

      tspan.textContent = line.text;

      append(textElement, tspan);
    });

    remove$1(helperText);

    var dimensions = {
      width: maxLineWidth,
      height: totalHeight
    };

    return {
      dimensions: dimensions,
      element: textElement
    };
  };

  function DrdRenderer(eventBus, pathMap, styles) {

    BaseRenderer.call(this, eventBus);

    var LABEL_STYLE = {
      fontFamily: 'Arial, sans-serif',
      fontSize: '12px'
    };

    var textUtil = new Text({
      style: LABEL_STYLE,
      size: { width: 100 }
    });

    var markers = {};

    function addMarker(id, element) {
      markers[id] = element;
    }

    function marker(id) {
      var marker = markers[id];

      return 'url(#' + marker.id + ')';
    }

    function initMarkers(svg) {

      function createMarker(id, options) {
        var attrs = assign({
          strokeWidth: 1,
          strokeLinecap: 'round',
          strokeDasharray: 'none'
        }, options.attrs);

        var ref = options.ref || { x: 0, y: 0 };

        var scale = options.scale || 1;

        // fix for safari / chrome / firefox bug not correctly
        // resetting stroke dash array
        if (attrs.strokeDasharray === 'none') {
          attrs.strokeDasharray = [10000, 1];
        }

        var marker = create('marker');

        attr$1(options.element, attrs);

        append(marker, options.element);

        attr$1(marker, {
          id: id,
          viewBox: '0 0 20 20',
          refX: ref.x,
          refY: ref.y,
          markerWidth: 20 * scale,
          markerHeight: 20 * scale,
          orient: 'auto'
        });

        var defs = query('defs', svg);

        if (!defs) {
          defs = create('defs');

          append(svg, defs);
        }

        append(defs, marker);

        return addMarker(id, marker);
      }

      var associationStart = create('path');
      attr$1(associationStart, { d: 'M 11 5 L 1 10 L 11 15' });

      createMarker('association-start', {
        element: associationStart,
        attrs: {
          fill: 'none',
          stroke: 'black',
          strokeWidth: 1.5
        },
        ref: { x: 1, y: 10 },
        scale: 0.5
      });

      var associationEnd = create('path');
      attr$1(associationEnd, { d: 'M 1 5 L 11 10 L 1 15' });

      createMarker('association-end', {
        element: associationEnd,
        attrs: {
          fill: 'none',
          stroke: 'black',
          strokeWidth: 1.5
        },
        ref: { x: 12, y: 10 },
        scale: 0.5
      });

      var informationRequirementEnd = create('path');
      attr$1(informationRequirementEnd, { d: 'M 1 5 L 11 10 L 1 15 Z' });

      createMarker('information-requirement-end', {
        element: informationRequirementEnd,
        ref: { x: 11, y: 10 },
        scale: 1
      });

      var knowledgeRequirementEnd = create('path');
      attr$1(knowledgeRequirementEnd, { d: 'M 1 3 L 11 10 L 1 17' });

      createMarker('knowledge-requirement-end', {
        element: knowledgeRequirementEnd,
        attrs: {
          fill: 'none',
          stroke: 'black',
          strokeWidth: 2
        },
        ref: { x: 11, y: 10 },
        scale: 0.8
      });

      var authorityRequirementEnd = create('circle');
      attr$1(authorityRequirementEnd, { cx: 3, cy: 3, r: 3 });

      createMarker('authority-requirement-end', {
        element: authorityRequirementEnd,
        ref: { x: 3, y: 3 },
        scale: 0.9
      });
    }

    function computeStyle(custom, traits, defaultStyles) {
      if (!isArray(traits)) {
        defaultStyles = traits;
        traits = [];
      }

      return styles.style(traits || [], assign(defaultStyles, custom || {}));
    }

    function drawRect(p, width, height, r, offset, attrs) {

      if (isObject(offset)) {
        attrs = offset;
        offset = 0;
      }

      offset = offset || 0;

      attrs = computeStyle(attrs, {
        stroke: 'black',
        strokeWidth: 2,
        fill: 'white'
      });

      var rect = create('rect');
      attr$1(rect, {
        x: offset,
        y: offset,
        width: width - offset * 2,
        height: height - offset * 2,
        rx: r,
        ry: r
      });
      attr$1(rect, attrs);

      append(p, rect);

      return rect;
    }

    function renderLabel(p, label, options) {
      var text = textUtil.createText(label || '', options);

      attr(text, 'class', 'djs-label');

      append(p, text);

      return text;
    }

    function renderEmbeddedLabel(p, element, align) {
      var name = getName(element);
      return renderLabel(p, name, { box: element, align: align, padding: 5 });
    }

    function drawPath(p, d, attrs) {

      attrs = computeStyle(attrs, ['no-fill'], {
        strokeWidth: 2,
        stroke: 'black'
      });

      var path = create('path');
      attr$1(path, { d: d });
      attr$1(path, attrs);

      append(p, path);

      return path;
    }

    var handlers = {
      'dmn:Decision': function dmnDecision(p, element, attrs) {
        var rect = drawRect(p, element.width, element.height, 0, attrs);

        renderEmbeddedLabel(p, element, 'center-middle');

        return rect;
      },
      'dmn:KnowledgeSource': function dmnKnowledgeSource(p, element, attrs) {

        var pathData = pathMap.getScaledPath('KNOWLEDGE_SOURCE', {
          xScaleFactor: 1.021,
          yScaleFactor: 1,
          containerWidth: element.width,
          containerHeight: element.height,
          position: {
            mx: 0.0,
            my: 0.075
          }
        });

        var knowledgeSource = drawPath(p, pathData, {
          strokeWidth: 2,
          fill: 'white',
          stroke: 'black'
        });

        renderEmbeddedLabel(p, element, 'center-middle');

        return knowledgeSource;
      },
      'dmn:BusinessKnowledgeModel': function dmnBusinessKnowledgeModel(p, element, attrs) {

        var pathData = pathMap.getScaledPath('BUSINESS_KNOWLEDGE_MODEL', {
          xScaleFactor: 1,
          yScaleFactor: 1,
          containerWidth: element.width,
          containerHeight: element.height,
          position: {
            mx: 0.0,
            my: 0.3
          }
        });

        var businessKnowledge = drawPath(p, pathData, {
          strokeWidth: 2,
          fill: 'white',
          stroke: 'black'
        });

        renderEmbeddedLabel(p, element, 'center-middle');

        return businessKnowledge;
      },
      'dmn:InputData': function dmnInputData(p, element, attrs) {

        var rect = drawRect(p, element.width, element.height, 22, attrs);

        renderEmbeddedLabel(p, element, 'center-middle');

        return rect;
      },
      'dmn:TextAnnotation': function dmnTextAnnotation(p, element, attrs) {
        var style = {
          'fill': 'none',
          'stroke': 'none'
        };
        var textElement = drawRect(p, element.width, element.height, 0, 0, style),
            textPathData = pathMap.getScaledPath('TEXT_ANNOTATION', {
          xScaleFactor: 1,
          yScaleFactor: 1,
          containerWidth: element.width,
          containerHeight: element.height,
          position: {
            mx: 0.0,
            my: 0.0
          }
        });

        drawPath(p, textPathData);

        var text = getSemantic(element).text || '';

        renderLabel(p, text, { box: element, align: 'left-middle', padding: 5 });

        return textElement;
      },
      'dmn:Association': function dmnAssociation(p, element, attrs) {
        var semantic = getSemantic(element);

        attrs = assign({
          strokeDasharray: '0.5, 5',
          strokeLinecap: 'round',
          strokeLinejoin: 'round',
          fill: 'none'
        }, attrs || {});

        if (semantic.associationDirection === 'One' || semantic.associationDirection === 'Both') {
          attrs.markerEnd = marker('association-end');
        }

        if (semantic.associationDirection === 'Both') {
          attrs.markerStart = marker('association-start');
        }

        return drawLine(p, element.waypoints, attrs);
      },
      'dmn:InformationRequirement': function dmnInformationRequirement(p, element, attrs) {

        attrs = assign({
          strokeWidth: 1,
          strokeLinecap: 'round',
          strokeLinejoin: 'round',
          markerEnd: marker('information-requirement-end')
        }, attrs || {});

        return drawLine(p, element.waypoints, attrs);
      },
      'dmn:KnowledgeRequirement': function dmnKnowledgeRequirement(p, element, attrs) {

        attrs = assign({
          strokeWidth: 1,
          strokeDasharray: 5,
          strokeLinecap: 'round',
          strokeLinejoin: 'round',
          markerEnd: marker('knowledge-requirement-end')
        }, attrs || {});

        return drawLine(p, element.waypoints, attrs);
      },
      'dmn:AuthorityRequirement': function dmnAuthorityRequirement(p, element, attrs) {

        attrs = assign({
          strokeWidth: 1.5,
          strokeDasharray: 5,
          strokeLinecap: 'round',
          strokeLinejoin: 'round',
          markerEnd: marker('authority-requirement-end')
        }, attrs || {});

        return drawLine(p, element.waypoints, attrs);
      }
    };

    // draw shape and connection //////////////////

    function drawShape(parent, element) {
      var h = handlers[element.type];

      if (!h) {
        return BaseRenderer.prototype.drawShape.apply(this, [parent, element]);
      } else {
        return h(parent, element);
      }
    }

    function drawConnection(parent, element) {
      var type = element.type;
      var h = handlers[type];

      if (!h) {
        return BaseRenderer.prototype.drawConnection.apply(this, [parent, element]);
      } else {
        return h(parent, element);
      }
    }

    function drawLine(p, waypoints, attrs) {
      attrs = computeStyle(attrs, ['no-fill'], {
        stroke: 'black',
        strokeWidth: 2,
        fill: 'none'
      });

      var line = createLine(waypoints, attrs);

      append(p, line);

      return line;
    }

    this.canRender = function (element) {
      return is(element, 'dmn:DMNElement') || is(element, 'dmn:InformationRequirement') || is(element, 'dmn:KnowledgeRequirement') || is(element, 'dmn:AuthorityRequirement');
    };

    this.drawShape = drawShape;
    this.drawConnection = drawConnection;

    // hook onto canvas init event to initialize
    // connection start/end markers on svg
    eventBus.on('canvas.init', function (event) {
      initMarkers(event.svg);
    });
  }

  inherits_browser(DrdRenderer, BaseRenderer);

  DrdRenderer.$inject = ['eventBus', 'pathMap', 'styles'];

  // helper functions //////////////////////

  function getSemantic(element) {
    return element.businessObject;
  }

  /* eslint-disable max-len */

  /**
   * Map containing SVG paths needed by BpmnRenderer.
   */

  function PathMap() {

    /**
     * Contains a map of path elements
     *
     * <h1>Path definition</h1>
     * A parameterized path is defined like this:
     * <pre>
     * 'GATEWAY_PARALLEL': {
     *   d: 'm {mx},{my} {e.x0},0 0,{e.x1} {e.x1},0 0,{e.y0} -{e.x1},0 0,{e.y1} ' +
            '-{e.x0},0 0,-{e.y1} -{e.x1},0 0,-{e.y0} {e.x1},0 z',
     *   height: 17.5,
     *   width:  17.5,
     *   heightElements: [2.5, 7.5],
     *   widthElements: [2.5, 7.5]
     * }
     * </pre>
     * <p>It's important to specify a correct <b>height and width</b> for the path as the scaling
     * is based on the ratio between the specified height and width in this object and the
     * height and width that is set as scale target (Note x,y coordinates will be scaled with
     * individual ratios).</p>
     * <p>The '<b>heightElements</b>' and '<b>widthElements</b>' array must contain the values that will be scaled.
     * The scaling is based on the computed ratios.
     * Coordinates on the y axis should be in the <b>heightElement</b>'s array, they will be scaled using
     * the computed ratio coefficient.
     * In the parameterized path the scaled values can be accessed through the 'e' object in {} brackets.
     *   <ul>
     *    <li>The values for the y axis can be accessed in the path string using {e.y0}, {e.y1}, ....</li>
     *    <li>The values for the x axis can be accessed in the path string using {e.x0}, {e.x1}, ....</li>
     *   </ul>
     *   The numbers x0, x1 respectively y0, y1, ... map to the corresponding array index.
     * </p>
      m1,1
      l 0,55.3
      c 29.8,19.7 48.4,-4.2 67.2,-6.7
      c 12.2,-2.3 19.8,1.6 30.8,6.2
      l 0,-54.6
      z
      */
    this.pathMap = {
      'KNOWLEDGE_SOURCE': {
        d: 'm {mx},{my} ' + 'l 0,{e.y0} ' + 'c {e.x0},{e.y1} {e.x1},-{e.y2} {e.x2},-{e.y3} ' + 'c {e.x3},-{e.y4} {e.x4},{e.y5} {e.x5},{e.y6} ' + 'l 0,-{e.y7}z',
        width: 100,
        height: 65,
        widthElements: [29.8, 48.4, 67.2, 12.2, 19.8, 30.8],
        heightElements: [55.3, 19.7, 4.2, 6.7, 2.3, 1.6, 6.2, 54.6]
      },
      'BUSINESS_KNOWLEDGE_MODEL': {
        d: 'm {mx},{my} l {e.x0},-{e.y0} l {e.x1},0 l 0,{e.y1} l -{e.x2},{e.y2} l -{e.x3},0z',
        width: 125,
        height: 45,
        widthElements: [13.8, 109.2, 13.8, 109.1],
        heightElements: [13.2, 29.8, 13.2]
      },
      'TEXT_ANNOTATION': {
        d: 'm {mx}, {my} m 10,0 l -10,0 l 0,{e.y0} l 10,0',
        width: 10,
        height: 30,
        widthElements: [10],
        heightElements: [30]
      }
    };

    this.getRawPath = function getRawPath(pathId) {
      return this.pathMap[pathId].d;
    };

    /**
     * Scales the path to the given height and width.
     * <h1>Use case</h1>
     * <p>Use case is to scale the content of elements (event, gateways) based
     * on the element bounding box's size.
     * </p>
     * <h1>Why not transform</h1>
     * <p>Scaling a path with transform() will also scale the stroke and IE does not support
     * the option 'non-scaling-stroke' to prevent this.
     * Also there are use cases where only some parts of a path should be
     * scaled.</p>
     *
     * @param {String} pathId The ID of the path.
     * @param {Object} param <p>
     *   Example param object scales the path to 60% size of the container (data.width, data.height).
     *   <pre>
     *   {
     *     xScaleFactor: 0.6,
     *     yScaleFactor:0.6,
     *     containerWidth: data.width,
     *     containerHeight: data.height,
     *     position: {
     *       mx: 0.46,
     *       my: 0.2,
     *     }
     *   }
     *   </pre>
     *   <ul>
     *    <li>targetpathwidth = xScaleFactor * containerWidth</li>
     *    <li>targetpathheight = yScaleFactor * containerHeight</li>
     *    <li>Position is used to set the starting coordinate of the path. M is computed:
      *    <ul>
      *      <li>position.x * containerWidth</li>
      *      <li>position.y * containerHeight</li>
      *    </ul>
      *    Center of the container <pre> position: {
     *       mx: 0.5,
     *       my: 0.5,
     *     }</pre>
     *     Upper left corner of the container
     *     <pre> position: {
     *       mx: 0.0,
     *       my: 0.0,
     *     }</pre>
     *    </li>
     *   </ul>
     * </p>
     *
     */
    this.getScaledPath = function getScaledPath(pathId, param) {
      var rawPath = this.pathMap[pathId];

      // positioning
      // compute the start point of the path
      var mx, my;

      if (param.abspos) {
        mx = param.abspos.x;
        my = param.abspos.y;
      } else {
        mx = param.containerWidth * param.position.mx;
        my = param.containerHeight * param.position.my;
      }

      var coordinates = {}; // map for the scaled coordinates
      if (param.position) {

        // path
        var heightRatio = param.containerHeight / rawPath.height * param.yScaleFactor;
        var widthRatio = param.containerWidth / rawPath.width * param.xScaleFactor;

        // Apply height ratio
        for (var heightIndex = 0; heightIndex < rawPath.heightElements.length; heightIndex++) {
          coordinates['y' + heightIndex] = rawPath.heightElements[heightIndex] * heightRatio;
        }

        // Apply width ratio
        for (var widthIndex = 0; widthIndex < rawPath.widthElements.length; widthIndex++) {
          coordinates['x' + widthIndex] = rawPath.widthElements[widthIndex] * widthRatio;
        }
      }

      // Apply value to raw path
      var path = format(rawPath.d, {
        mx: mx,
        my: my,
        e: coordinates
      });
      return path;
    };
  }

  // helpers //////////////////////

  // copied from https://github.com/adobe-webplatform/Snap.svg/blob/master/src/svg.js
  var tokenRegex = /\{([^}]+)\}/g,
      objNotationRegex = /(?:(?:^|\.)(.+?)(?=\[|\.|$|\()|\[('|")(.+?)\2\])(\(\))?/g; // matches .xxxxx or ["xxxxx"] to run over object properties

  function replacer(all, key, obj) {
    var res = obj;
    key.replace(objNotationRegex, function (all, name, quote, quotedName, isFunc) {
      name = name || quotedName;
      if (res) {
        if (name in res) {
          res = res[name];
        }
        typeof res == 'function' && isFunc && (res = res());
      }
    });
    res = (res == null || res == obj ? all : res) + '';

    return res;
  }

  function format(str, obj) {
    return String(str).replace(tokenRegex, function (all, key) {
      return replacer(all, key, obj);
    });
  }

  var DrawModule$1 = {
    __init__: ['drdRenderer'],
    drdRenderer: ['type', DrdRenderer],
    pathMap: ['type', PathMap]
  };

  function elementData(semantic, attrs) {
    return assign({
      id: semantic.id,
      type: semantic.$type,
      businessObject: semantic
    }, attrs);
  }

  function getHREF(element) {
    return element && element.href.slice(1);
  }

  function collectWaypoints(edge) {
    var waypoints = edge.waypoints;

    if (waypoints) {
      return map(waypoints, function (waypoint) {
        var position = { x: waypoint.x, y: waypoint.y };

        return assign({ original: position }, position);
      });
    }
  }

  function DrdImporter(eventBus, canvas, elementFactory, elementRegistry) {

    this._eventBus = eventBus;
    this._canvas = canvas;
    this._elementRegistry = elementRegistry;
    this._elementFactory = elementFactory;
  }

  DrdImporter.$inject = ['eventBus', 'canvas', 'elementFactory', 'elementRegistry'];

  DrdImporter.prototype.root = function (diagram) {
    var element = this._elementFactory.createRoot(elementData(diagram));

    this._canvas.setRootElement(element);

    return element;
  };

  /**
   * Add drd element (semantic) to the canvas.
   */
  DrdImporter.prototype.add = function (semantic, di) {
    var elementFactory = this._elementFactory,
        canvas = this._canvas,
        eventBus = this._eventBus;

    var element, waypoints, sourceShape, targetShape, elementDefinition, sourceID, targetID;

    if (di.$instanceOf('biodi:Bounds')) {
      elementDefinition = elementData(semantic, {
        x: Math.round(di.x),
        y: Math.round(di.y),
        width: Math.round(di.width),
        height: Math.round(di.height)
      });

      element = elementFactory.createShape(elementDefinition);

      canvas.addShape(element);

      eventBus.fire('drdElement.added', { element: element, di: di });
    } else if (di.$instanceOf('biodi:Edge')) {
      waypoints = collectWaypoints(di);

      sourceID = di.source;
      targetID = semantic.$parent.id;

      if (is(semantic, 'dmn:Association')) {
        targetID = getHREF(semantic.targetRef);
      }

      sourceShape = this._getShape(sourceID);
      targetShape = this._getShape(targetID);

      if (sourceShape && targetShape) {
        elementDefinition = elementData(semantic, {
          hidden: false,
          source: sourceShape,
          target: targetShape,
          waypoints: waypoints
        });

        element = elementFactory.createConnection(elementDefinition);

        canvas.addConnection(element);

        eventBus.fire('drdElement.added', { element: element, di: di });
      }
    } else {
      throw new Error('unknown di for element ' + semantic.id);
    }

    return element;
  };

  DrdImporter.prototype._getShape = function (id) {
    return this._elementRegistry.get(id);
  };

  var ImportModule = {
    drdImporter: ['type', DrdImporter]
  };

  var CoreModule$1 = {
    __depends__: [DrawModule$1, ImportModule]
  };

  /**
   * A simple translation stub to be used for multi-language support
   * in diagrams. Can be easily replaced with a more sophisticated
   * solution.
   *
   * @example
   *
   * // use it inside any diagram component by injecting `translate`.
   *
   * function MyService(translate) {
   *   alert(translate('HELLO {you}', { you: 'You!' }));
   * }
   *
   * @param {String} template to interpolate
   * @param {Object} [replacements] a map with substitutes
   *
   * @return {String} the translated string
   */
  function translate$1(template, replacements) {

    replacements = replacements || {};

    return template.replace(/{([^}]+)}/g, function (_, key) {
      return replacements[key] || '{' + key + '}';
    });
  }

  var TranslateModule = {
    translate: ['value', translate$1]
  };

  function getOriginal(event) {
    return event.originalEvent || event.srcEvent;
  }

  function isMac() {
    return (/mac/i.test(navigator.platform)
    );
  }

  function isPrimaryButton(event) {
    // button === 0 -> left áka primary mouse button
    return !(getOriginal(event) || event).button;
  }

  function hasPrimaryModifier(event) {
    var originalEvent = getOriginal(event) || event;

    if (!isPrimaryButton(event)) {
      return false;
    }

    // Use alt as primary modifier key for mac OS
    if (isMac()) {
      return originalEvent.metaKey;
    } else {
      return originalEvent.ctrlKey;
    }
  }

  function allowAll(e) {
    return true;
  }

  var LOW_PRIORITY = 500;

  /**
   * A plugin that provides interaction events for diagram elements.
   *
   * It emits the following events:
   *
   *   * element.hover
   *   * element.out
   *   * element.click
   *   * element.dblclick
   *   * element.mousedown
   *   * element.contextmenu
   *
   * Each event is a tuple { element, gfx, originalEvent }.
   *
   * Canceling the event via Event#preventDefault()
   * prevents the original DOM operation.
   *
   * @param {EventBus} eventBus
   */
  function InteractionEvents(eventBus, elementRegistry, styles) {

    var HIT_STYLE = styles.cls('djs-hit', ['no-fill', 'no-border'], {
      stroke: 'white',
      strokeWidth: 15
    });

    /**
     * Fire an interaction event.
     *
     * @param {String} type local event name, e.g. element.click.
     * @param {DOMEvent} event native event
     * @param {djs.model.Base} [element] the diagram element to emit the event on;
     *                                   defaults to the event target
     */
    function fire(type, event, element) {

      if (isIgnored(type, event)) {
        return;
      }

      var target, gfx, returnValue;

      if (!element) {
        target = event.delegateTarget || event.target;

        if (target) {
          gfx = target;
          element = elementRegistry.get(gfx);
        }
      } else {
        gfx = elementRegistry.getGraphics(element);
      }

      if (!gfx || !element) {
        return;
      }

      returnValue = eventBus.fire(type, {
        element: element,
        gfx: gfx,
        originalEvent: event
      });

      if (returnValue === false) {
        event.stopPropagation();
        event.preventDefault();
      }
    }

    // TODO(nikku): document this
    var handlers = {};

    function mouseHandler(localEventName) {
      return handlers[localEventName];
    }

    function isIgnored(localEventName, event) {

      var filter$$1 = ignoredFilters[localEventName] || isPrimaryButton;

      // only react on left mouse button interactions
      // except for interaction events that are enabled
      // for secundary mouse button
      return !filter$$1(event);
    }

    var bindings = {
      mouseover: 'element.hover',
      mouseout: 'element.out',
      click: 'element.click',
      dblclick: 'element.dblclick',
      mousedown: 'element.mousedown',
      mouseup: 'element.mouseup',
      contextmenu: 'element.contextmenu'
    };

    var ignoredFilters = {
      'element.contextmenu': allowAll
    };

    // manual event trigger

    /**
     * Trigger an interaction event (based on a native dom event)
     * on the target shape or connection.
     *
     * @param {String} eventName the name of the triggered DOM event
     * @param {MouseEvent} event
     * @param {djs.model.Base} targetElement
     */
    function triggerMouseEvent(eventName, event, targetElement) {

      // i.e. element.mousedown...
      var localEventName = bindings[eventName];

      if (!localEventName) {
        throw new Error('unmapped DOM event name <' + eventName + '>');
      }

      return fire(localEventName, event, targetElement);
    }

    var elementSelector = 'svg, .djs-element';

    // event registration

    function registerEvent(node, event, localEvent, ignoredFilter) {

      var handler = handlers[localEvent] = function (event) {
        fire(localEvent, event);
      };

      if (ignoredFilter) {
        ignoredFilters[localEvent] = ignoredFilter;
      }

      handler.$delegate = delegateEvents.bind(node, elementSelector, event, handler);
    }

    function unregisterEvent(node, event, localEvent) {

      var handler = mouseHandler(localEvent);

      if (!handler) {
        return;
      }

      delegateEvents.unbind(node, event, handler.$delegate);
    }

    function registerEvents(svg) {
      forEach(bindings, function (val, key) {
        registerEvent(svg, key, val);
      });
    }

    function unregisterEvents(svg) {
      forEach(bindings, function (val, key) {
        unregisterEvent(svg, key, val);
      });
    }

    eventBus.on('canvas.destroy', function (event) {
      unregisterEvents(event.svg);
    });

    eventBus.on('canvas.init', function (event) {
      registerEvents(event.svg);
    });

    eventBus.on(['shape.added', 'connection.added'], function (event) {
      var element = event.element,
          gfx = event.gfx,
          hit;

      if (element.waypoints) {
        hit = createLine(element.waypoints);
      } else {
        hit = create('rect');
        attr$1(hit, {
          x: 0,
          y: 0,
          width: element.width,
          height: element.height
        });
      }

      attr$1(hit, HIT_STYLE);

      append(gfx, hit);
    });

    // Update djs-hit on change.
    // A low priortity is necessary, because djs-hit of labels has to be updated
    // after the label bounds have been updated in the renderer.
    eventBus.on('shape.changed', LOW_PRIORITY, function (event) {

      var element = event.element,
          gfx = event.gfx,
          hit = query('.djs-hit', gfx);

      attr$1(hit, {
        width: element.width,
        height: element.height
      });
    });

    eventBus.on('connection.changed', function (event) {

      var element = event.element,
          gfx = event.gfx,
          hit = query('.djs-hit', gfx);

      updateLine(hit, element.waypoints);
    });

    // API

    this.fire = fire;

    this.triggerMouseEvent = triggerMouseEvent;

    this.mouseHandler = mouseHandler;

    this.registerEvent = registerEvent;
    this.unregisterEvent = unregisterEvent;
  }

  InteractionEvents.$inject = ['eventBus', 'elementRegistry', 'styles'];

  /**
   * An event indicating that the mouse hovered over an element
   *
   * @event element.hover
   *
   * @type {Object}
   * @property {djs.model.Base} element
   * @property {SVGElement} gfx
   * @property {Event} originalEvent
   */

  /**
   * An event indicating that the mouse has left an element
   *
   * @event element.out
   *
   * @type {Object}
   * @property {djs.model.Base} element
   * @property {SVGElement} gfx
   * @property {Event} originalEvent
   */

  /**
   * An event indicating that the mouse has clicked an element
   *
   * @event element.click
   *
   * @type {Object}
   * @property {djs.model.Base} element
   * @property {SVGElement} gfx
   * @property {Event} originalEvent
   */

  /**
   * An event indicating that the mouse has double clicked an element
   *
   * @event element.dblclick
   *
   * @type {Object}
   * @property {djs.model.Base} element
   * @property {SVGElement} gfx
   * @property {Event} originalEvent
   */

  /**
   * An event indicating that the mouse has gone down on an element.
   *
   * @event element.mousedown
   *
   * @type {Object}
   * @property {djs.model.Base} element
   * @property {SVGElement} gfx
   * @property {Event} originalEvent
   */

  /**
   * An event indicating that the mouse has gone up on an element.
   *
   * @event element.mouseup
   *
   * @type {Object}
   * @property {djs.model.Base} element
   * @property {SVGElement} gfx
   * @property {Event} originalEvent
   */

  /**
   * An event indicating that the context menu action is triggered
   * via mouse or touch controls.
   *
   * @event element.contextmenu
   *
   * @type {Object}
   * @property {djs.model.Base} element
   * @property {SVGElement} gfx
   * @property {Event} originalEvent
   */

  var InteractionEventsModule = {
    __init__: ['interactionEvents'],
    interactionEvents: ['type', InteractionEvents]
  };

  var LOW_PRIORITY$1 = 500;

  /**
   * @class
   *
   * A plugin that adds an outline to shapes and connections that may be activated and styled
   * via CSS classes.
   *
   * @param {EventBus} eventBus
   * @param {Styles} styles
   * @param {ElementRegistry} elementRegistry
   */
  function Outline(eventBus, styles, elementRegistry) {

    this.offset = 6;

    var OUTLINE_STYLE = styles.cls('djs-outline', ['no-fill']);

    var self = this;

    function createOutline(gfx, bounds) {
      var outline = create('rect');

      attr$1(outline, assign({
        x: 10,
        y: 10,
        width: 100,
        height: 100
      }, OUTLINE_STYLE));

      append(gfx, outline);

      return outline;
    }

    // A low priortity is necessary, because outlines of labels have to be updated
    // after the label bounds have been updated in the renderer.
    eventBus.on(['shape.added', 'shape.changed'], LOW_PRIORITY$1, function (event) {
      var element = event.element,
          gfx = event.gfx;

      var outline = query('.djs-outline', gfx);

      if (!outline) {
        outline = createOutline(gfx, element);
      }

      self.updateShapeOutline(outline, element);
    });

    eventBus.on(['connection.added', 'connection.changed'], function (event) {
      var element = event.element,
          gfx = event.gfx;

      var outline = query('.djs-outline', gfx);

      if (!outline) {
        outline = createOutline(gfx, element);
      }

      self.updateConnectionOutline(outline, element);
    });
  }

  /**
   * Updates the outline of a shape respecting the dimension of the
   * element and an outline offset.
   *
   * @param  {SVGElement} outline
   * @param  {djs.model.Base} element
   */
  Outline.prototype.updateShapeOutline = function (outline, element) {

    attr$1(outline, {
      x: -this.offset,
      y: -this.offset,
      width: element.width + this.offset * 2,
      height: element.height + this.offset * 2
    });
  };

  /**
   * Updates the outline of a connection respecting the bounding box of
   * the connection and an outline offset.
   *
   * @param  {SVGElement} outline
   * @param  {djs.model.Base} element
   */
  Outline.prototype.updateConnectionOutline = function (outline, connection) {

    var bbox = getBBox(connection);

    attr$1(outline, {
      x: bbox.x - this.offset,
      y: bbox.y - this.offset,
      width: bbox.width + this.offset * 2,
      height: bbox.height + this.offset * 2
    });
  };

  Outline.$inject = ['eventBus', 'styles', 'elementRegistry'];

  var OutlineModule = {
    __init__: ['outline'],
    outline: ['type', Outline]
  };

  /**
   * A service that offers the current selection in a diagram.
   * Offers the api to control the selection, too.
   *
   * @class
   *
   * @param {EventBus} eventBus the event bus
   */
  function Selection(eventBus) {

    this._eventBus = eventBus;

    this._selectedElements = [];

    var self = this;

    eventBus.on(['shape.remove', 'connection.remove'], function (e) {
      var element = e.element;
      self.deselect(element);
    });

    eventBus.on(['diagram.clear'], function (e) {
      self.select(null);
    });
  }

  Selection.$inject = ['eventBus'];

  Selection.prototype.deselect = function (element) {
    var selectedElements = this._selectedElements;

    var idx = selectedElements.indexOf(element);

    if (idx !== -1) {
      var oldSelection = selectedElements.slice();

      selectedElements.splice(idx, 1);

      this._eventBus.fire('selection.changed', { oldSelection: oldSelection, newSelection: selectedElements });
    }
  };

  Selection.prototype.get = function () {
    return this._selectedElements;
  };

  Selection.prototype.isSelected = function (element) {
    return this._selectedElements.indexOf(element) !== -1;
  };

  /**
   * This method selects one or more elements on the diagram.
   *
   * By passing an additional add parameter you can decide whether or not the element(s)
   * should be added to the already existing selection or not.
   *
   * @method Selection#select
   *
   * @param  {Object|Object[]} elements element or array of elements to be selected
   * @param  {boolean} [add] whether the element(s) should be appended to the current selection, defaults to false
   */
  Selection.prototype.select = function (elements, add) {
    var selectedElements = this._selectedElements,
        oldSelection = selectedElements.slice();

    if (!isArray(elements)) {
      elements = elements ? [elements] : [];
    }

    // selection may be cleared by passing an empty array or null
    // to the method
    if (add) {
      forEach(elements, function (element) {
        if (selectedElements.indexOf(element) !== -1) {
          // already selected
          return;
        } else {
          selectedElements.push(element);
        }
      });
    } else {
      this._selectedElements = selectedElements = elements.slice();
    }

    this._eventBus.fire('selection.changed', { oldSelection: oldSelection, newSelection: selectedElements });
  };

  var MARKER_HOVER = 'hover',
      MARKER_SELECTED = 'selected';

  /**
   * A plugin that adds a visible selection UI to shapes and connections
   * by appending the <code>hover</code> and <code>selected</code> classes to them.
   *
   * @class
   *
   * Makes elements selectable, too.
   *
   * @param {EventBus} events
   * @param {SelectionService} selection
   * @param {Canvas} canvas
   */
  function SelectionVisuals(events, canvas, selection, styles) {

    this._multiSelectionBox = null;

    function addMarker(e, cls) {
      canvas.addMarker(e, cls);
    }

    function removeMarker(e, cls) {
      canvas.removeMarker(e, cls);
    }

    events.on('element.hover', function (event) {
      addMarker(event.element, MARKER_HOVER);
    });

    events.on('element.out', function (event) {
      removeMarker(event.element, MARKER_HOVER);
    });

    events.on('selection.changed', function (event) {

      function deselect(s) {
        removeMarker(s, MARKER_SELECTED);
      }

      function select(s) {
        addMarker(s, MARKER_SELECTED);
      }

      var oldSelection = event.oldSelection,
          newSelection = event.newSelection;

      forEach(oldSelection, function (e) {
        if (newSelection.indexOf(e) === -1) {
          deselect(e);
        }
      });

      forEach(newSelection, function (e) {
        if (oldSelection.indexOf(e) === -1) {
          select(e);
        }
      });
    });
  }

  SelectionVisuals.$inject = ['eventBus', 'canvas', 'selection', 'styles'];

  function SelectionBehavior(eventBus, selection, canvas, elementRegistry) {

    eventBus.on('create.end', 500, function (e) {

      // select the created shape after a
      // successful create operation
      if (e.context.canExecute) {
        selection.select(e.context.shape);
      }
    });

    eventBus.on('connect.end', 500, function (e) {

      // select the connect end target
      // after a connect operation
      if (e.context.canExecute && e.context.target) {
        selection.select(e.context.target);
      }
    });

    eventBus.on('shape.move.end', 500, function (e) {
      var previousSelection = e.previousSelection || [];

      var shape = elementRegistry.get(e.context.shape.id);

      // make sure at least the main moved element is being
      // selected after a move operation
      var inSelection = find(previousSelection, function (selectedShape) {
        return shape.id === selectedShape.id;
      });

      if (!inSelection) {
        selection.select(shape);
      }
    });

    // Shift + click selection
    eventBus.on('element.click', function (event) {

      var element = event.element;

      // do not select the root element
      // or connections
      if (element === canvas.getRootElement()) {
        element = null;
      }

      var isSelected = selection.isSelected(element),
          isMultiSelect = selection.get().length > 1;

      // mouse-event: SELECTION_KEY
      var add = hasPrimaryModifier(event);

      // select OR deselect element in multi selection
      if (isSelected && isMultiSelect) {
        if (add) {
          return selection.deselect(element);
        } else {
          return selection.select(element);
        }
      } else if (!isSelected) {
        selection.select(element, add);
      } else {
        selection.deselect(element);
      }
    });
  }

  SelectionBehavior.$inject = ['eventBus', 'selection', 'canvas', 'elementRegistry'];

  var SelectionModule = {
    __init__: ['selectionVisuals', 'selectionBehavior'],
    __depends__: [InteractionEventsModule, OutlineModule],
    selection: ['type', Selection],
    selectionVisuals: ['type', SelectionVisuals],
    selectionBehavior: ['type', SelectionBehavior]
  };

  /**
   * Util that provides unique IDs.
   *
   * @class djs.util.IdGenerator
   * @constructor
   * @memberOf djs.util
   *
   * The ids can be customized via a given prefix and contain a random value to avoid collisions.
   *
   * @param {String} prefix a prefix to prepend to generated ids (for better readability)
   */
  function IdGenerator(prefix) {

    this._counter = 0;
    this._prefix = (prefix ? prefix + '-' : '') + Math.floor(Math.random() * 1000000000) + '-';
  }

  /**
   * Returns a next unique ID.
   *
   * @method djs.util.IdGenerator#next
   *
   * @returns {String} the id
   */
  IdGenerator.prototype.next = function () {
    return this._prefix + ++this._counter;
  };

  // document wide unique overlay ids
  var ids = new IdGenerator('ov');

  var LOW_PRIORITY$2 = 500;

  function createRoot(parent) {
    var root = domify('<div class="djs-overlay-container" style="position: absolute; width: 0; height: 0;" />');
    parent.insertBefore(root, parent.firstChild);

    return root;
  }

  function setPosition(el, x, y) {
    assign(el.style, { left: x + 'px', top: y + 'px' });
  }

  function setVisible(el, visible) {
    el.style.display = visible === false ? 'none' : '';
  }

  function setTransform(el, transform) {

    el.style['transform-origin'] = 'top left';

    ['', '-ms-', '-webkit-'].forEach(function (prefix) {
      el.style[prefix + 'transform'] = transform;
    });
  }

  function isDef(o) {
    return typeof o !== 'undefined';
  }

  /**
   * A service that allows users to attach overlays to diagram elements.
   *
   * The overlay service will take care of overlay positioning during updates.
   *
   * @example
   *
   * // add a pink badge on the top left of the shape
   * overlays.add(someShape, {
   *   position: {
   *     top: -5,
   *     left: -5
   *   },
   *   html: '<div style="width: 10px; background: fuchsia; color: white;">0</div>'
   * });
   *
   * // or add via shape id
   *
   * overlays.add('some-element-id', {
   *   position: {
   *     top: -5,
   *     left: -5
   *   }
   *   html: '<div style="width: 10px; background: fuchsia; color: white;">0</div>'
   * });
   *
   * // or add with optional type
   *
   * overlays.add(someShape, 'badge', {
   *   position: {
   *     top: -5,
   *     left: -5
   *   }
   *   html: '<div style="width: 10px; background: fuchsia; color: white;">0</div>'
   * });
   *
   *
   * // remove an overlay
   *
   * var id = overlays.add(...);
   * overlays.remove(id);
   *
   *
   * You may configure overlay defaults during tool by providing a `config` module
   * with `overlays.defaults` as an entry:
   *
   * {
   *   overlays: {
   *     defaults: {
   *       show: {
   *         minZoom: 0.7,
   *         maxZoom: 5.0
   *       },
   *       scale: {
   *         min: 1
   *       }
   *     }
   * }
   *
   * @param {Object} config
   * @param {EventBus} eventBus
   * @param {Canvas} canvas
   * @param {ElementRegistry} elementRegistry
   */
  function Overlays(config, eventBus, canvas, elementRegistry) {

    this._eventBus = eventBus;
    this._canvas = canvas;
    this._elementRegistry = elementRegistry;

    this._ids = ids;

    this._overlayDefaults = assign({
      // no show constraints
      show: null,

      // always scale
      scale: true
    }, config && config.defaults);

    /**
     * Mapping overlayId -> overlay
     */
    this._overlays = {};

    /**
     * Mapping elementId -> overlay container
     */
    this._overlayContainers = [];

    // root html element for all overlays
    this._overlayRoot = createRoot(canvas.getContainer());

    this._init();
  }

  Overlays.$inject = ['config.overlays', 'eventBus', 'canvas', 'elementRegistry'];

  /**
   * Returns the overlay with the specified id or a list of overlays
   * for an element with a given type.
   *
   * @example
   *
   * // return the single overlay with the given id
   * overlays.get('some-id');
   *
   * // return all overlays for the shape
   * overlays.get({ element: someShape });
   *
   * // return all overlays on shape with type 'badge'
   * overlays.get({ element: someShape, type: 'badge' });
   *
   * // shape can also be specified as id
   * overlays.get({ element: 'element-id', type: 'badge' });
   *
   *
   * @param {Object} search
   * @param {String} [search.id]
   * @param {String|djs.model.Base} [search.element]
   * @param {String} [search.type]
   *
   * @return {Object|Array<Object>} the overlay(s)
   */
  Overlays.prototype.get = function (search) {

    if (isString(search)) {
      search = { id: search };
    }

    if (isString(search.element)) {
      search.element = this._elementRegistry.get(search.element);
    }

    if (search.element) {
      var container = this._getOverlayContainer(search.element, true);

      // return a list of overlays when searching by element (+type)
      if (container) {
        return search.type ? filter(container.overlays, matchPattern({ type: search.type })) : container.overlays.slice();
      } else {
        return [];
      }
    } else if (search.type) {
      return filter(this._overlays, matchPattern({ type: search.type }));
    } else {
      // return single element when searching by id
      return search.id ? this._overlays[search.id] : null;
    }
  };

  /**
   * Adds a HTML overlay to an element.
   *
   * @param {String|djs.model.Base}   element   attach overlay to this shape
   * @param {String}                  [type]    optional type to assign to the overlay
   * @param {Object}                  overlay   the overlay configuration
   *
   * @param {String|DOMElement}       overlay.html                 html element to use as an overlay
   * @param {Object}                  [overlay.show]               show configuration
   * @param {Number}                  [overlay.show.minZoom]       minimal zoom level to show the overlay
   * @param {Number}                  [overlay.show.maxZoom]       maximum zoom level to show the overlay
   * @param {Object}                  overlay.position             where to attach the overlay
   * @param {Number}                  [overlay.position.left]      relative to element bbox left attachment
   * @param {Number}                  [overlay.position.top]       relative to element bbox top attachment
   * @param {Number}                  [overlay.position.bottom]    relative to element bbox bottom attachment
   * @param {Number}                  [overlay.position.right]     relative to element bbox right attachment
   * @param {Boolean|Object}          [overlay.scale=true]         false to preserve the same size regardless of
   *                                                               diagram zoom
   * @param {Number}                  [overlay.scale.min]
   * @param {Number}                  [overlay.scale.max]
   *
   * @return {String}                 id that may be used to reference the overlay for update or removal
   */
  Overlays.prototype.add = function (element, type, overlay) {

    if (isObject(type)) {
      overlay = type;
      type = null;
    }

    if (!element.id) {
      element = this._elementRegistry.get(element);
    }

    if (!overlay.position) {
      throw new Error('must specifiy overlay position');
    }

    if (!overlay.html) {
      throw new Error('must specifiy overlay html');
    }

    if (!element) {
      throw new Error('invalid element specified');
    }

    var id = this._ids.next();

    overlay = assign({}, this._overlayDefaults, overlay, {
      id: id,
      type: type,
      element: element,
      html: overlay.html
    });

    this._addOverlay(overlay);

    return id;
  };

  /**
   * Remove an overlay with the given id or all overlays matching the given filter.
   *
   * @see Overlays#get for filter options.
   *
   * @param {String} [id]
   * @param {Object} [filter]
   */
  Overlays.prototype.remove = function (filter$$1) {

    var overlays = this.get(filter$$1) || [];

    if (!isArray(overlays)) {
      overlays = [overlays];
    }

    var self = this;

    forEach(overlays, function (overlay) {

      var container = self._getOverlayContainer(overlay.element, true);

      if (overlay) {
        remove(overlay.html);
        remove(overlay.htmlContainer);

        delete overlay.htmlContainer;
        delete overlay.element;

        delete self._overlays[overlay.id];
      }

      if (container) {
        var idx = container.overlays.indexOf(overlay);
        if (idx !== -1) {
          container.overlays.splice(idx, 1);
        }
      }
    });
  };

  Overlays.prototype.show = function () {
    setVisible(this._overlayRoot);
  };

  Overlays.prototype.hide = function () {
    setVisible(this._overlayRoot, false);
  };

  Overlays.prototype.clear = function () {
    this._overlays = {};

    this._overlayContainers = [];

    clear(this._overlayRoot);
  };

  Overlays.prototype._updateOverlayContainer = function (container) {
    var element = container.element,
        html = container.html;

    // update container left,top according to the elements x,y coordinates
    // this ensures we can attach child elements relative to this container

    var x = element.x,
        y = element.y;

    if (element.waypoints) {
      var bbox = getBBox(element);
      x = bbox.x;
      y = bbox.y;
    }

    setPosition(html, x, y);

    attr(container.html, 'data-container-id', element.id);
  };

  Overlays.prototype._updateOverlay = function (overlay) {

    var position = overlay.position,
        htmlContainer = overlay.htmlContainer,
        element = overlay.element;

    // update overlay html relative to shape because
    // it is already positioned on the element

    // update relative
    var left = position.left,
        top = position.top;

    if (position.right !== undefined) {

      var width;

      if (element.waypoints) {
        width = getBBox(element).width;
      } else {
        width = element.width;
      }

      left = position.right * -1 + width;
    }

    if (position.bottom !== undefined) {

      var height;

      if (element.waypoints) {
        height = getBBox(element).height;
      } else {
        height = element.height;
      }

      top = position.bottom * -1 + height;
    }

    setPosition(htmlContainer, left || 0, top || 0);
  };

  Overlays.prototype._createOverlayContainer = function (element) {
    var html = domify('<div class="djs-overlays" style="position: absolute" />');

    this._overlayRoot.appendChild(html);

    var container = {
      html: html,
      element: element,
      overlays: []
    };

    this._updateOverlayContainer(container);

    this._overlayContainers.push(container);

    return container;
  };

  Overlays.prototype._updateRoot = function (viewbox) {
    var scale = viewbox.scale || 1;

    var matrix = 'matrix(' + [scale, 0, 0, scale, -1 * viewbox.x * scale, -1 * viewbox.y * scale].join(',') + ')';

    setTransform(this._overlayRoot, matrix);
  };

  Overlays.prototype._getOverlayContainer = function (element, raw) {
    var container = find(this._overlayContainers, function (c) {
      return c.element === element;
    });

    if (!container && !raw) {
      return this._createOverlayContainer(element);
    }

    return container;
  };

  Overlays.prototype._addOverlay = function (overlay) {

    var id = overlay.id,
        element = overlay.element,
        html = overlay.html,
        htmlContainer,
        overlayContainer;

    // unwrap jquery (for those who need it)
    if (html.get && html.constructor.prototype.jquery) {
      html = html.get(0);
    }

    // create proper html elements from
    // overlay HTML strings
    if (isString(html)) {
      html = domify(html);
    }

    overlayContainer = this._getOverlayContainer(element);

    htmlContainer = domify('<div class="djs-overlay" data-overlay-id="' + id + '" style="position: absolute">');

    htmlContainer.appendChild(html);

    if (overlay.type) {
      classes(htmlContainer).add('djs-overlay-' + overlay.type);
    }

    overlay.htmlContainer = htmlContainer;

    overlayContainer.overlays.push(overlay);
    overlayContainer.html.appendChild(htmlContainer);

    this._overlays[id] = overlay;

    this._updateOverlay(overlay);
    this._updateOverlayVisibilty(overlay, this._canvas.viewbox());
  };

  Overlays.prototype._updateOverlayVisibilty = function (overlay, viewbox) {
    var show = overlay.show,
        minZoom = show && show.minZoom,
        maxZoom = show && show.maxZoom,
        htmlContainer = overlay.htmlContainer,
        visible = true;

    if (show) {
      if (isDef(minZoom) && minZoom > viewbox.scale || isDef(maxZoom) && maxZoom < viewbox.scale) {
        visible = false;
      }

      setVisible(htmlContainer, visible);
    }

    this._updateOverlayScale(overlay, viewbox);
  };

  Overlays.prototype._updateOverlayScale = function (overlay, viewbox) {
    var shouldScale = overlay.scale,
        minScale,
        maxScale,
        htmlContainer = overlay.htmlContainer;

    var scale,
        transform = '';

    if (shouldScale !== true) {

      if (shouldScale === false) {
        minScale = 1;
        maxScale = 1;
      } else {
        minScale = shouldScale.min;
        maxScale = shouldScale.max;
      }

      if (isDef(minScale) && viewbox.scale < minScale) {
        scale = (1 / viewbox.scale || 1) * minScale;
      }

      if (isDef(maxScale) && viewbox.scale > maxScale) {
        scale = (1 / viewbox.scale || 1) * maxScale;
      }
    }

    if (isDef(scale)) {
      transform = 'scale(' + scale + ',' + scale + ')';
    }

    setTransform(htmlContainer, transform);
  };

  Overlays.prototype._updateOverlaysVisibilty = function (viewbox) {

    var self = this;

    forEach(this._overlays, function (overlay) {
      self._updateOverlayVisibilty(overlay, viewbox);
    });
  };

  Overlays.prototype._init = function () {

    var eventBus = this._eventBus;

    var self = this;

    // scroll/zoom integration

    function updateViewbox(viewbox) {
      self._updateRoot(viewbox);
      self._updateOverlaysVisibilty(viewbox);

      self.show();
    }

    eventBus.on('canvas.viewbox.changing', function (event) {
      self.hide();
    });

    eventBus.on('canvas.viewbox.changed', function (event) {
      updateViewbox(event.viewbox);
    });

    // remove integration

    eventBus.on(['shape.remove', 'connection.remove'], function (e) {
      var element = e.element;
      var overlays = self.get({ element: element });

      forEach(overlays, function (o) {
        self.remove(o.id);
      });

      var container = self._getOverlayContainer(element);

      if (container) {
        remove(container.html);
        var i = self._overlayContainers.indexOf(container);
        if (i !== -1) {
          self._overlayContainers.splice(i, 1);
        }
      }
    });

    // move integration

    eventBus.on('element.changed', LOW_PRIORITY$2, function (e) {
      var element = e.element;

      var container = self._getOverlayContainer(element, true);

      if (container) {
        forEach(container.overlays, function (overlay) {
          self._updateOverlay(overlay);
        });

        self._updateOverlayContainer(container);
      }
    });

    // marker integration, simply add them on the overlays as classes, too.

    eventBus.on('element.marker.update', function (e) {
      var container = self._getOverlayContainer(e.element, true);
      if (container) {
        classes(container.html)[e.add ? 'add' : 'remove'](e.marker);
      }
    });

    // clear overlays with diagram

    eventBus.on('diagram.clear', this.clear, this);
  };

  var OverlaysModule = {
    __init__: ['overlays'],
    overlays: ['type', Overlays]
  };

  function DefinitionIdView(eventBus, canvas) {
    this._eventBus = eventBus;
    this._canvas = canvas;

    eventBus.on('diagram.init', function () {
      this._init();
    }, this);

    eventBus.on('import.done', function (event) {
      this.update();
    }, this);
  }

  DefinitionIdView.$inject = ['eventBus', 'canvas'];

  /**
   * Initialize
   */
  DefinitionIdView.prototype._init = function () {
    var canvas = this._canvas,
        eventBus = this._eventBus;

    var parent = canvas.getContainer(),
        container = this._container = domify(DefinitionIdView.HTML_MARKUP);

    parent.appendChild(container);

    this.nameElement = query('.dmn-definitions-name', this._container);
    this.idElement = query('.dmn-definitions-id', this._container);

    delegateEvents.bind(container, '.dmn-definitions-name, .dmn-definitions-id', 'mousedown', function (event) {
      event.stopPropagation();
    });

    eventBus.fire('definitionIdView.create', {
      html: container
    });
  };

  DefinitionIdView.prototype.update = function (newName) {
    var businessObject = this._canvas.getRootElement().businessObject;

    this.nameElement.textContent = businessObject.name;
    this.idElement.textContent = businessObject.id;
  };

  /* markup definition */

  DefinitionIdView.HTML_MARKUP = '<div class="dmn-definitions">' + '<div class="dmn-definitions-name" title="Definition Name"></div>' + '<div class="dmn-definitions-id" title="Definition ID"></div>' + '</div>';

  function PaletteAdapter(eventBus, canvas) {

    function toggleMarker(cls, on) {
      var container = canvas.getContainer();

      classes(container).toggle(cls, on);
    }

    eventBus.on('palette.create', function () {
      toggleMarker('with-palette', true);
    });

    eventBus.on('palette.changed', function (event) {
      toggleMarker('with-palette-two-column', event.twoColumn);
    });
  }

  PaletteAdapter.$inject = ['eventBus', 'canvas'];

  var DefinitionPropertiesModule = {
    __init__: ['definitionPropertiesView', 'definitionPropertiesPaletteAdapter'],
    definitionPropertiesView: ['type', DefinitionIdView],
    definitionPropertiesPaletteAdapter: ['type', PaletteAdapter]
  };

  var _createClass$1 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$1(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var PROVIDERS = [{
    className: 'dmn-icon-decision-table',
    matches: function matches(el) {
      var businessObject = el.businessObject;

      return is(businessObject, 'dmn:Decision') && businessObject.decisionTable;
    }
  }, {
    className: 'dmn-icon-literal-expression',
    matches: function matches(el) {
      var businessObject = el.businessObject;

      return is(businessObject, 'dmn:Decision') && businessObject.literalExpression;
    }
  }];

  /**
   * Displays overlays that can be clicked in order to drill
   * down into a DMN 1.1 element.
   */

  var DrillDown = function () {
    function DrillDown(injector, eventBus, overlays, config) {
      var _this = this;

      _classCallCheck$1(this, DrillDown);

      this._injector = injector;
      this._overlays = overlays;

      this._config = config || { enabled: true };

      eventBus.on(['drdElement.added', 'shape.added'], function (_ref) {
        var element = _ref.element;


        for (var i = 0; i < PROVIDERS.length; i++) {
          var _PROVIDERS$i = PROVIDERS[i],
              matches = _PROVIDERS$i.matches,
              className = _PROVIDERS$i.className;


          var editable = matches && matches(element);

          if (editable) {
            _this.addOverlay(element, className);
          }
        }
      });
    }

    /**
     * Add overlay to an element that enables drill down.
     *
     * @param {Object} element Element to add overlay to.
     * @param {string} className
     *        CSS class that will be added to overlay in order to display icon.
     */


    _createClass$1(DrillDown, [{
      key: 'addOverlay',
      value: function addOverlay(element, className) {
        var html = domify('\n      <div class="drill-down-overlay">\n        <span class="' + className + '"></span>\n      </div>\n    ');

        var overlayId = this._overlays.add(element, {
          position: {
            top: 2,
            left: 2
          },
          html: html
        });

        // TODO(nikku): can we remove renamed to drillDown.enabled
        if (this._config.enabled !== false) {
          classes(html).add('interactive');

          this.bindEventListener(element, html, overlayId);
        }
      }

      /**
       *
       * @param {Object} element
       * @param {Object} overlay
       * @param {string} id
       */

    }, {
      key: 'bindEventListener',
      value: function bindEventListener(element, overlay, id) {
        var overlays = this._overlays,
            injector = this._injector;

        var parent = injector.get('_parent', false);

        if (!parent) {
          return;
        }

        var overlaysRoot = overlays._overlayRoot;

        delegateEvents.bind(overlaysRoot, '[data-overlay-id="' + id + '"]', 'click', function () {

          var view = parent.getView(element.businessObject);

          if (view) {
            parent.open(view);
          }
        });
      }
    }]);

    return DrillDown;
  }();


  DrillDown.$inject = ['injector', 'eventBus', 'overlays', 'config.drillDown'];

  var DrillDownModule = {
    __init__: ['drillDown'],
    drillDown: ['type', DrillDown]
  };

  /**
   * This file must not be changed or exchanged.
   *
   * @see http://bpmn.io/license for more information.
   */

  // inlined ../../../../resources/logo.svg
  // eslint-disable-next-line
  var BPMNIO_LOGO_SVG = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 960 960"><path fill="#fff" d="M960 60v839c0 33-27 61-60 61H60c-33 0-60-27-60-60V60C0 27 27 0 60 0h839c34 0 61 27 61 60z"/><path fill="#52b415" d="M217 548a205 205 0 0 0-144 58 202 202 0 0 0-4 286 202 202 0 0 0 285 3 200 200 0 0 0 48-219 203 203 0 0 0-185-128zM752 6a206 206 0 0 0-192 285 206 206 0 0 0 269 111 207 207 0 0 0 111-260A204 204 0 0 0 752 6zM62 0A62 62 0 0 0 0 62v398l60 46a259 259 0 0 1 89-36c5-28 10-57 14-85l99 2 12 85a246 246 0 0 1 88 38l70-52 69 71-52 68c17 30 29 58 35 90l86 14-2 100-86 12a240 240 0 0 1-38 89l43 58h413c37 0 60-27 60-61V407a220 220 0 0 1-44 40l21 85-93 39-45-76a258 258 0 0 1-98 1l-45 76-94-39 22-85a298 298 0 0 1-70-69l-86 22-38-94 76-45a258 258 0 0 1-1-98l-76-45 40-94 85 22a271 271 0 0 1 41-47z"/></svg>';
  var BPMNIO_LOGO_URL = 'data:image/svg+xml,' + encodeURIComponent(BPMNIO_LOGO_SVG);

  var BPMNIO_IMG = '<img width="52" height="52" src="' + BPMNIO_LOGO_URL + '" />';

  function css(attrs) {
    return attrs.join(';');
  }

  var LIGHTBOX_STYLES = css(['z-index: 1001', 'position: fixed', 'top: 0', 'left: 0', 'right: 0', 'bottom: 0']);

  var BACKDROP_STYLES = css(['width: 100%', 'height: 100%', 'background: rgba(0,0,0,0.2)']);

  var NOTICE_STYLES = css(['position: absolute', 'left: 50%', 'top: 40%', 'margin: 0 -130px', 'width: 260px', 'padding: 10px', 'background: white', 'border: solid 1px #AAA', 'border-radius: 3px', 'font-family: Helvetica, Arial, sans-serif', 'font-size: 14px', 'line-height: 1.2em']);

  /* eslint-disable max-len */
  var LIGHTBOX_MARKUP = '<div class="bjs-powered-by-lightbox" style="' + LIGHTBOX_STYLES + '">' + '<div class="backdrop" style="' + BACKDROP_STYLES + '"></div>' + '<div class="notice" style="' + NOTICE_STYLES + '">' + '<a href="http://bpmn.io" target="_blank" style="float: left; margin-right: 10px">' + BPMNIO_IMG + '</a>' + 'Web-based tooling for BPMN, DMN and CMMN diagrams ' + 'powered by <a href="http://bpmn.io" target="_blank">bpmn.io</a>.' + '</div>' + '</div>';
  /* eslint-enable */

  var lightbox;

  function open() {

    if (!lightbox) {
      lightbox = domify(LIGHTBOX_MARKUP);

      delegateEvents.bind(lightbox, '.backdrop', 'click', function (event) {
        document.body.removeChild(lightbox);
      });
    }

    document.body.appendChild(lightbox);
  }

  var _extends$2 = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

  function _toConsumableArray$3(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

  function _objectWithoutProperties(obj, keys) { var target = {}; for (var i in obj) { if (keys.indexOf(i) >= 0) continue; if (!Object.prototype.hasOwnProperty.call(obj, i)) continue; target[i] = obj[i]; } return target; }

  /**
   * A viewer for DMN 1.1 diagrams.
   *
   * Have a look at {@link NavigatedViewer} or {@link Modeler} for bundles that include
   * additional features.
   *
   *
   * ## Extending the Viewer
   *
   * In order to extend the viewer pass extension modules to bootstrap via the
   * `additionalModules` option. An extension module is an object that exposes
   * named services.
   *
   * The following example depicts the integration of a simple
   * logging component that integrates with interaction events:
   *
   *
   * ```javascript
   *
   * // logging component
   * function InteractionLogger(eventBus) {
   *   eventBus.on('element.hover', function(event) {
   *     console.log()
   *   })
   * }
   *
   * InteractionLogger.$inject = [ 'eventBus' ]; // minification save
   *
   * // extension module
   * var extensionModule = {
   *   __init__: [ 'interactionLogger' ],
   *   interactionLogger: [ 'type', InteractionLogger ]
   * };
   *
   * // extend the viewer
   * var drdViewer = new Viewer({ additionalModules: [ extensionModule ] });
   * drdViewer.importXML(...);
   * ```
   *
   * @param {Object} options configuration options to pass to the viewer
   * @param {DOMElement} [options.container]
   *        the container to render the viewer in, defaults to body
   * @param {Array<didi.Module>} [options.modules]
   *        a list of modules to override the default modules
   * @param {Array<didi.Module>} [options.additionalModules]
   *        a list of modules to use with the default modules
   */
  function Viewer(options) {

    this._container = this._createContainer();

    /* <project-logo> */

    addProjectLogo(this._container);

    /* </project-logo> */

    this._init(this._container, options);
  }

  inherits_browser(Viewer, diagramJs);

  /**
   * Export the currently displayed DMN 1.1 diagram as
   * an SVG image.
   *
   * @param {Object} [options]
   * @param {Function} done invoked with (err, svgStr)
   */
  Viewer.prototype.saveSVG = function (options, done) {

    if (!done) {
      done = options;
      options = {};
    }

    var canvas = this.get('canvas');

    var contentNode = canvas.getDefaultLayer(),
        defsNode = query('defs', canvas._svg);

    var contents = innerSVG(contentNode),
        defs = defsNode && defsNode.outerHTML || '';

    var bbox = contentNode.getBBox();

    /* eslint-disable max-len */
    var svg = '<?xml version="1.0" encoding="utf-8"?>\n' + '<!-- created with dmn-js / http://bpmn.io -->\n' + '<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">\n' + '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" ' + 'width="' + bbox.width + '" height="' + bbox.height + '" ' + 'viewBox="' + bbox.x + ' ' + bbox.y + ' ' + bbox.width + ' ' + bbox.height + '" version="1.1">' + defs + contents + '</svg>';
    /* eslint-enable */

    done(null, svg);
  };

  Viewer.prototype.getModules = function () {
    return this._modules;
  };

  /**
   * Destroy the viewer instance and remove all its
   * remainders from the document tree.
   */
  Viewer.prototype.destroy = function () {

    // diagram destroy
    diagramJs.prototype.destroy.call(this);

    // dom detach
    remove(this._container);
  };

  /**
   * Register an event listener
   *
   * Remove a previously added listener via {@link #off(event, callback)}.
   *
   * @param {String} event
   * @param {Number} [priority]
   * @param {Function} callback
   * @param {Object} [that]
   */
  Viewer.prototype.on = function (event$$1, priority, callback, target) {
    return this.get('eventBus').on(event$$1, priority, callback, target);
  };

  /**
   * De-register an event listener
   *
   * @param {String} event
   * @param {Function} callback
   */
  Viewer.prototype.off = function (event$$1, callback) {
    this.get('eventBus').off(event$$1, callback);
  };

  Viewer.prototype._init = function (container, options) {
    var additionalModules = options.additionalModules,
        canvas = options.canvas,
        additionalOptions = _objectWithoutProperties(options, ['additionalModules', 'canvas']);

    var baseModules = options.modules || this.getModules(),
        staticModules = [{
      drd: ['value', this]
    }];

    var modules = [].concat(staticModules, _toConsumableArray$3(baseModules), _toConsumableArray$3(additionalModules || []));

    var diagramOptions = _extends$2({}, additionalOptions, {
      canvas: _extends$2({}, canvas, {
        container: container
      }),
      modules: modules
    });

    // invoke diagram constructor
    diagramJs.call(this, diagramOptions);

    if (options && options.container) {
      this.attachTo(options.container);
    }
  };

  /**
   * Emit an event on the underlying {@link EventBus}
   *
   * @param  {String} type
   * @param  {Object} event
   *
   * @return {Object} event processing result (if any)
   */
  Viewer.prototype._emit = function (type, event$$1) {
    return this.get('eventBus').fire(type, event$$1);
  };

  Viewer.prototype._createContainer = function () {
    return domify('<div class="dmn-drd-container"></div>');
  };

  Viewer.prototype.open = function (definitions, done) {

    var err;

    // use try/catch to not swallow synchronous exceptions
    // that may be raised during model parsing
    try {

      if (this._definitions) {
        // clear existing rendered diagram
        this.clear();
      }

      // update definitions
      this._definitions = definitions;

      // perform graphical import
      return importDRD(this, definitions, done);
    } catch (e) {
      err = e;
    }

    return done(err);
  };

  /**
   * Attach viewer to given parent node.
   *
   * @param  {Element} parentNode
   */
  Viewer.prototype.attachTo = function (parentNode) {

    if (!parentNode) {
      throw new Error('parentNode required');
    }

    // ensure we detach from the
    // previous, old parent
    this.detach();

    var container = this._container;

    parentNode.appendChild(container);

    this._emit('attach', {});

    this.get('canvas').resized();
  };

  /**
   * Detach viewer from parent node, if attached.
   */
  Viewer.prototype.detach = function () {

    var container = this._container,
        parentNode = container.parentNode;

    if (!parentNode) {
      return;
    }

    this._emit('detach', {});

    parentNode.removeChild(container);
  };

  Viewer.prototype._modules = [CoreModule$1, TranslateModule, SelectionModule, OverlaysModule, DefinitionPropertiesModule, DrillDownModule];

  /**
   * Adds the project logo to the diagram container as
   * required by the bpmn.io license.
   *
   * @see http://bpmn.io/license
   *
   * @param {Element} container
   */
  function addProjectLogo(container) {
    var img = BPMNIO_IMG;

    var linkMarkup = '<a href="http://bpmn.io" ' + 'target="_blank" ' + 'class="bjs-powered-by" ' + 'title="Powered by bpmn.io" ' + 'style="position: absolute; bottom: 15px; right: 15px; z-index: 100">' + img + '</a>';

    var linkElement = domify(linkMarkup);

    container.appendChild(linkElement);

    componentEvent.bind(linkElement, 'click', function (event$$1) {
      open();

      event$$1.preventDefault();
    });
  }

  /* </project-logo> */

  function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  function _classCallCheck$2(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var Base$2 = function Base(attrs) {
    _classCallCheck$2(this, Base);

    assign(this, attrs);

    /**
     * The object that backs up the shape
     *
     * @name Base#businessObject
     * @type Object
     */
    defineProperty$2(this, 'businessObject', {
      writable: true
    });
  };

  var Root$1 = function (_Base) {
    _inherits(Root, _Base);

    function Root(attrs) {
      _classCallCheck$2(this, Root);

      /**
       * The tables rows
       *
       * @name Root#rows
       * @type Row
       */
      var _this = _possibleConstructorReturn(this, (Root.__proto__ || Object.getPrototypeOf(Root)).call(this, attrs));

      defineProperty$2(_this, 'rows', {
        enumerable: true,
        value: _this.rows || []
      });

      /**
       * The tables columns
       *
       * @name Root#cols
       * @type Col
       */
      defineProperty$2(_this, 'cols', {
        enumerable: true,
        value: _this.cols || []
      });
      return _this;
    }

    return Root;
  }(Base$2);

  var Row = function (_Base2) {
    _inherits(Row, _Base2);

    function Row(attrs) {
      _classCallCheck$2(this, Row);

      /**
       * Reference to the table
       *
       * @name Row#root
       * @type Root
       */
      var _this2 = _possibleConstructorReturn(this, (Row.__proto__ || Object.getPrototypeOf(Row)).call(this, attrs));

      defineProperty$2(_this2, 'root', {
        writable: true
      });

      /**
       * Reference to contained cells
       *
       * @name Row#cells
       * @type Cell
       */
      defineProperty$2(_this2, 'cells', {
        enumerable: true,
        value: _this2.cells || []
      });
      return _this2;
    }

    return Row;
  }(Base$2);

  var Col = function (_Base3) {
    _inherits(Col, _Base3);

    function Col(attrs) {
      _classCallCheck$2(this, Col);

      /**
       * Reference to the table
       *
       * @name Col#table
       * @type Root
       */
      var _this3 = _possibleConstructorReturn(this, (Col.__proto__ || Object.getPrototypeOf(Col)).call(this, attrs));

      defineProperty$2(_this3, 'root', {
        writable: true
      });

      /**
       * Reference to contained cells
       *
       * @name Row#cells
       * @type Cell
       */
      defineProperty$2(_this3, 'cells', {
        enumerable: true,
        value: _this3.cells || []
      });
      return _this3;
    }

    return Col;
  }(Base$2);

  var Cell = function (_Base4) {
    _inherits(Cell, _Base4);

    function Cell(attrs) {
      _classCallCheck$2(this, Cell);

      /**
       * Reference to the row
       *
       * @name Cell#row
       * @type Row
       */
      var _this4 = _possibleConstructorReturn(this, (Cell.__proto__ || Object.getPrototypeOf(Cell)).call(this, attrs));

      defineProperty$2(_this4, 'row', {
        writable: true
      });

      /**
       * Reference to the col
       *
       * @name Cell#col
       * @type Col
       */
      defineProperty$2(_this4, 'col', {
        writable: true
      });
      return _this4;
    }

    return Cell;
  }(Base$2);

  var TYPES = {
    root: Root$1,
    row: Row,
    col: Col,
    cell: Cell
  };

  function create$2(type, attrs) {
    var Type = TYPES[type];

    if (!Type) {
      throw new Error('unknown type ' + type);
    }

    return new Type(attrs);
  }

  // helpers /////////////

  function defineProperty$2(el, prop, options) {
    Object.defineProperty(el, prop, options);
  }

  var _createClass$2 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$3(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var ElementFactory$1 = function () {
    function ElementFactory() {
      _classCallCheck$3(this, ElementFactory);

      this._uid = 12;
    }

    _createClass$2(ElementFactory, [{
      key: 'create',
      value: function create$$1(type) {
        var attrs = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};

        if (!attrs.id) {
          attrs.id = type + '_' + this._uid++;
        }

        return create$2(type, attrs);
      }
    }, {
      key: 'createRoot',
      value: function createRoot(attrs) {
        return this.create('root', attrs);
      }
    }, {
      key: 'createRow',
      value: function createRow(attrs) {
        return this.create('row', attrs);
      }
    }, {
      key: 'createCol',
      value: function createCol(attrs) {
        return this.create('col', attrs);
      }
    }, {
      key: 'createCell',
      value: function createCell(attrs) {
        return this.create('cell', attrs);
      }
    }]);

    return ElementFactory;
  }();

  var _createClass$3 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$4(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var ElementRegistry$1 = function () {
    function ElementRegistry(eventBus) {
      _classCallCheck$4(this, ElementRegistry);

      this._eventBus = eventBus;

      this._elements = {};

      eventBus.on('table.clear', this.clear.bind(this));
    }

    _createClass$3(ElementRegistry, [{
      key: 'add',
      value: function add(element, type) {
        var id = element.id;


        this._elements[id] = element;
      }
    }, {
      key: 'remove',
      value: function remove(element) {
        var id = element.id || element;

        delete this._elements[id];
      }
    }, {
      key: 'get',
      value: function get(id) {
        return this._elements[id];
      }
    }, {
      key: 'getAll',
      value: function getAll() {
        return values$1(this._elements);
      }
    }, {
      key: 'forEach',
      value: function forEach(fn) {
        values$1(this._elements).forEach(function (element) {
          return fn(element);
        });
      }
    }, {
      key: 'filter',
      value: function filter(fn) {
        return values$1(this._elements).filter(function (element) {
          return fn(element);
        });
      }
    }, {
      key: 'clear',
      value: function clear() {
        this._elements = {};
      }
    }]);

    return ElementRegistry;
  }();


  ElementRegistry$1.$inject = ['eventBus'];

  // helpers

  function values$1(obj) {
    return Object.keys(obj).map(function (k) {
      return obj[k];
    });
  }

  var _createClass$4 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$5(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var ChangeSupport = function () {
    function ChangeSupport(eventBus) {
      var _this = this;

      _classCallCheck$5(this, ChangeSupport);

      this._listeners = {};

      eventBus.on('elements.changed', function (_ref) {
        var elements = _ref.elements;

        _this.elementsChanged(elements);
      });

      eventBus.on('root.remove', function (context) {
        var oldRootId = context.root.id;

        if (_this._listeners[oldRootId]) {

          eventBus.once('root.add', function (context) {
            var newRootId = context.root.id;

            _this._listeners[newRootId] = _this._listeners[oldRootId];

            delete _this._listeners[oldRootId];
          });
        }
      });
    }

    _createClass$4(ChangeSupport, [{
      key: 'elementsChanged',
      value: function elementsChanged(elements) {
        var invoked = {};

        var elementsLength = elements.length;

        for (var i = 0; i < elementsLength; i++) {
          var id = elements[i].id;


          if (invoked[id]) {
            return;
          }

          invoked[id] = true;

          var listenersLength = this._listeners[id] && this._listeners[id].length;

          if (listenersLength) {
            for (var j = 0; j < listenersLength; j++) {

              // listeners might remove themselves before they get called
              this._listeners[id][j] && this._listeners[id][j]();
            }
          }
        }
      }
    }, {
      key: 'onElementsChanged',
      value: function onElementsChanged(id, listener) {
        if (!this._listeners[id]) {
          this._listeners[id] = [];
        }

        // avoid push for better performance
        this._listeners[id][this._listeners[id].length] = listener;
      }
    }, {
      key: 'offElementsChanged',
      value: function offElementsChanged(id, listener) {
        if (!this._listeners[id]) {
          return;
        }

        if (listener) {
          var idx = this._listeners[id].indexOf(listener);

          if (idx !== -1) {
            this._listeners[id].splice(idx, 1);
          }
        } else {
          this._listeners[id].length = 0;
        }
      }
    }]);

    return ChangeSupport;
  }();


  ChangeSupport.$inject = ['eventBus'];

  var _createClass$5 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$6(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var DEFAULT_PRIORITY$1 = 1000;

  var Components = function () {
    function Components() {
      _classCallCheck$6(this, Components);

      this._listeners = {};
    }

    _createClass$5(Components, [{
      key: 'getComponent',
      value: function getComponent(type, context) {
        var listeners = this._listeners[type];

        if (!listeners) {
          return;
        }

        var component = void 0;

        for (var i = 0; i < listeners.length; i++) {
          component = listeners[i].callback(context);

          if (component) {
            break;
          }
        }

        return component;
      }
    }, {
      key: 'getComponents',
      value: function getComponents(type, context) {
        var listeners = this._listeners[type];

        var components = [];

        if (!listeners) {
          return components;
        }

        for (var i = 0; i < listeners.length; i++) {
          var component = listeners[i].callback(context);

          if (component) {
            components.push(component);
          }
        }

        if (!components.length) {
          return components;
        }

        return components;
      }
    }, {
      key: 'onGetComponent',
      value: function onGetComponent(type, priority, callback) {
        if (isFunction(priority)) {
          callback = priority;
          priority = DEFAULT_PRIORITY$1;
        }

        if (!isNumber(priority)) {
          throw new Error('priority must be a number');
        }

        var listeners = this._getListeners(type);

        var existingListener = void 0,
            idx = void 0;

        var newListener = { priority: priority, callback: callback };

        for (idx = 0; existingListener = listeners[idx]; idx++) {
          if (existingListener.priority < priority) {

            // prepend newListener at before existingListener
            listeners.splice(idx, 0, newListener);
            return;
          }
        }

        listeners.push(newListener);
      }
    }, {
      key: 'offGetComponent',
      value: function offGetComponent(type, callback) {
        var listeners = this._getListeners(type);

        var listener = void 0,
            listenerCallback = void 0,
            idx = void 0;

        if (callback) {

          // move through listeners from back to front
          // and remove matching listeners
          for (idx = listeners.length - 1; listener = listeners[idx]; idx--) {
            listenerCallback = listener.callback;

            if (listenerCallback === callback) {
              listeners.splice(idx, 1);
            }
          }
        } else {
          // clear listeners
          listeners.length = 0;
        }
      }
    }, {
      key: '_getListeners',
      value: function _getListeners(type) {
        var listeners = this._listeners[type];

        if (!listeners) {
          this._listeners[type] = listeners = [];
        }

        return listeners;
      }
    }]);

    return Components;
  }();

  var _typeof$5 = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

  var NO_OP = '$NO_OP';
  var ERROR_MSG = 'a runtime error occured! Use Inferno in development environment to find the error.';
  // This should be boolean and not reference to window.document
  var isBrowser = !!(typeof window !== 'undefined' && window.document);
  // this is MUCH faster than .constructor === Array and instanceof Array
  // in Node 7 and the later versions of V8, slower in older versions though
  var isArray$2 = Array.isArray;
  function isStringOrNumber(o) {
      var type = typeof o === 'undefined' ? 'undefined' : _typeof$5(o);
      return type === 'string' || type === 'number';
  }
  function isNullOrUndef(o) {
      return isUndefined$2(o) || isNull(o);
  }
  function isInvalid(o) {
      return isNull(o) || o === false || isTrue(o) || isUndefined$2(o);
  }
  function isFunction$1(o) {
      return typeof o === 'function';
  }
  function isString$1(o) {
      return typeof o === 'string';
  }
  function isNumber$1(o) {
      return typeof o === 'number';
  }
  function isNull(o) {
      return o === null;
  }
  function isTrue(o) {
      return o === true;
  }
  function isUndefined$2(o) {
      return o === void 0;
  }
  function isDefined$1(o) {
      return o !== void 0;
  }
  function isObject$1(o) {
      return (typeof o === 'undefined' ? 'undefined' : _typeof$5(o)) === 'object';
  }
  function throwError(message) {
      if (!message) {
          message = ERROR_MSG;
      }
      throw new Error("Inferno Error: " + message);
  }
  function combineFrom(first, second) {
      var out = {};
      if (first) {
          for (var key in first) {
              out[key] = first[key];
          }
      }
      if (second) {
          for (var key$1 in second) {
              out[key$1] = second[key$1];
          }
      }
      return out;
  }

  var keyPrefix = '$';
  function getVNode(childFlags, children, className, flags, key, props, ref, type) {
      return {
          childFlags: childFlags,
          children: children,
          className: className,
          dom: null,
          flags: flags,
          key: key === void 0 ? null : key,
          parentVNode: null,
          props: props === void 0 ? null : props,
          ref: ref === void 0 ? null : ref,
          type: type
      };
  }
  function createVNode(flags, type, className, children, childFlags, props, key, ref) {
      var childFlag = childFlags === void 0 ? 1 /* HasInvalidChildren */ : childFlags;
      var vNode = getVNode(childFlag, children, className, flags, key, props, ref, type);
      var optsVNode = options.createVNode;
      if (typeof optsVNode === 'function') {
          optsVNode(vNode);
      }
      if (childFlag === 0 /* UnknownChildren */) {
              normalizeChildren(vNode, vNode.children);
          }
      return vNode;
  }
  function createComponentVNode(flags, type, props, key, ref) {
      if ((flags & 2 /* ComponentUnknown */) > 0) {
          flags = isDefined$1(type.prototype) && isFunction$1(type.prototype.render) ? 4 /* ComponentClass */ : 8 /* ComponentFunction */;
      }
      // set default props
      var defaultProps = type.defaultProps;
      if (!isNullOrUndef(defaultProps)) {
          if (!props) {
              props = {}; // Props can be referenced and modified at application level so always create new object
          }
          for (var prop in defaultProps) {
              if (isUndefined$2(props[prop])) {
                  props[prop] = defaultProps[prop];
              }
          }
      }
      if ((flags & 8 /* ComponentFunction */) > 0) {
          var defaultHooks = type.defaultHooks;
          if (!isNullOrUndef(defaultHooks)) {
              if (!ref) {
                  // As ref cannot be referenced from application level, we can use the same refs object
                  ref = defaultHooks;
              } else {
                  for (var prop$1 in defaultHooks) {
                      if (isUndefined$2(ref[prop$1])) {
                          ref[prop$1] = defaultHooks[prop$1];
                      }
                  }
              }
          }
      }
      var vNode = getVNode(1 /* HasInvalidChildren */, null, null, flags, key, props, ref, type);
      var optsVNode = options.createVNode;
      if (isFunction$1(optsVNode)) {
          optsVNode(vNode);
      }
      return vNode;
  }
  function createTextVNode(text, key) {
      return getVNode(1 /* HasInvalidChildren */, isNullOrUndef(text) ? '' : text, null, 16 /* Text */, key, null, null, null);
  }
  function normalizeProps(vNode) {
      var props = vNode.props;
      if (props) {
          var flags = vNode.flags;
          if (flags & 481 /* Element */) {
                  if (isDefined$1(props.children) && isNullOrUndef(vNode.children)) {
                      normalizeChildren(vNode, props.children);
                  }
                  if (isDefined$1(props.className)) {
                      vNode.className = props.className || null;
                      props.className = undefined;
                  }
              }
          if (isDefined$1(props.key)) {
              vNode.key = props.key;
              props.key = undefined;
          }
          if (isDefined$1(props.ref)) {
              if (flags & 8 /* ComponentFunction */) {
                      vNode.ref = combineFrom(vNode.ref, props.ref);
                  } else {
                  vNode.ref = props.ref;
              }
              props.ref = undefined;
          }
      }
      return vNode;
  }
  function directClone(vNodeToClone) {
      var newVNode;
      var flags = vNodeToClone.flags;
      if (flags & 14 /* Component */) {
              var props;
              var propsToClone = vNodeToClone.props;
              if (!isNull(propsToClone)) {
                  props = {};
                  for (var key in propsToClone) {
                      props[key] = propsToClone[key];
                  }
              }
              newVNode = createComponentVNode(flags, vNodeToClone.type, props, vNodeToClone.key, vNodeToClone.ref);
          } else if (flags & 481 /* Element */) {
              var children = vNodeToClone.children;
              newVNode = createVNode(flags, vNodeToClone.type, vNodeToClone.className, children, vNodeToClone.childFlags, vNodeToClone.props, vNodeToClone.key, vNodeToClone.ref);
          } else if (flags & 16 /* Text */) {
              newVNode = createTextVNode(vNodeToClone.children, vNodeToClone.key);
          } else if (flags & 1024 /* Portal */) {
              newVNode = vNodeToClone;
          }
      return newVNode;
  }
  function createVoidVNode() {
      return createTextVNode('', null);
  }
  function _normalizeVNodes(nodes, result, index, currentKey) {
      for (var len = nodes.length; index < len; index++) {
          var n = nodes[index];
          if (!isInvalid(n)) {
              var newKey = currentKey + keyPrefix + index;
              if (isArray$2(n)) {
                  _normalizeVNodes(n, result, 0, newKey);
              } else {
                  if (isStringOrNumber(n)) {
                      n = createTextVNode(n, newKey);
                  } else {
                      var oldKey = n.key;
                      var isPrefixedKey = isString$1(oldKey) && oldKey[0] === keyPrefix;
                      if (!isNull(n.dom) || isPrefixedKey) {
                          n = directClone(n);
                      }
                      if (isNull(oldKey) || isPrefixedKey) {
                          n.key = newKey;
                      } else {
                          n.key = currentKey + oldKey;
                      }
                  }
                  result.push(n);
              }
          }
      }
  }
  function normalizeChildren(vNode, children) {
      var newChildren;
      var newChildFlags = 1 /* HasInvalidChildren */;
      // Don't change children to match strict equal (===) true in patching
      if (isInvalid(children)) {
          newChildren = children;
      } else if (isString$1(children)) {
          newChildFlags = 2 /* HasVNodeChildren */;
          newChildren = createTextVNode(children);
      } else if (isNumber$1(children)) {
          newChildFlags = 2 /* HasVNodeChildren */;
          newChildren = createTextVNode(children + '');
      } else if (isArray$2(children)) {
          var len = children.length;
          if (len === 0) {
              newChildren = null;
              newChildFlags = 1 /* HasInvalidChildren */;
          } else {
              // we assign $ which basically means we've flagged this array for future note
              // if it comes back again, we need to clone it, as people are using it
              // in an immutable way
              // tslint:disable-next-line
              if (Object.isFrozen(children) || children['$'] === true) {
                  children = children.slice();
              }
              newChildFlags = 8 /* HasKeyedChildren */;
              for (var i = 0; i < len; i++) {
                  var n = children[i];
                  if (isInvalid(n) || isArray$2(n)) {
                      newChildren = newChildren || children.slice(0, i);
                      _normalizeVNodes(children, newChildren, i, '');
                      break;
                  } else if (isStringOrNumber(n)) {
                      newChildren = newChildren || children.slice(0, i);
                      newChildren.push(createTextVNode(n, keyPrefix + i));
                  } else {
                      var key = n.key;
                      var isNullDom = isNull(n.dom);
                      var isNullKey = isNull(key);
                      var isPrefixed = !isNullKey && key[0] === keyPrefix;
                      if (!isNullDom || isNullKey || isPrefixed) {
                          newChildren = newChildren || children.slice(0, i);
                          if (!isNullDom || isPrefixed) {
                              n = directClone(n);
                          }
                          if (isNullKey || isPrefixed) {
                              n.key = keyPrefix + i;
                          }
                          newChildren.push(n);
                      } else if (newChildren) {
                          newChildren.push(n);
                      }
                  }
              }
              newChildren = newChildren || children;
              newChildren.$ = true;
          }
      } else {
          newChildren = children;
          if (!isNull(children.dom)) {
              newChildren = directClone(children);
          }
          newChildFlags = 2 /* HasVNodeChildren */;
      }
      vNode.children = newChildren;
      vNode.childFlags = newChildFlags;
      return vNode;
  }
  var options = {
      afterMount: null,
      afterRender: null,
      afterUpdate: null,
      beforeRender: null,
      beforeUnmount: null,
      createVNode: null,
      roots: []
  };

  var xlinkNS = 'http://www.w3.org/1999/xlink';
  var xmlNS = 'http://www.w3.org/XML/1998/namespace';
  var svgNS = 'http://www.w3.org/2000/svg';
  var namespaces = {
      'xlink:actuate': xlinkNS,
      'xlink:arcrole': xlinkNS,
      'xlink:href': xlinkNS,
      'xlink:role': xlinkNS,
      'xlink:show': xlinkNS,
      'xlink:title': xlinkNS,
      'xlink:type': xlinkNS,
      'xml:base': xmlNS,
      'xml:lang': xmlNS,
      'xml:space': xmlNS
  };

  // We need EMPTY_OBJ defined in one place.
  // Its used for comparison so we cant inline it into shared
  var EMPTY_OBJ = {};
  var LIFECYCLE = [];
  function appendChild(parentDom, dom) {
      parentDom.appendChild(dom);
  }
  function insertOrAppend(parentDom, newNode, nextNode) {
      if (isNullOrUndef(nextNode)) {
          appendChild(parentDom, newNode);
      } else {
          parentDom.insertBefore(newNode, nextNode);
      }
  }
  function documentCreateElement(tag, isSVG) {
      if (isSVG === true) {
          return document.createElementNS(svgNS, tag);
      }
      return document.createElement(tag);
  }
  function replaceChild(parentDom, newDom, lastDom) {
      parentDom.replaceChild(newDom, lastDom);
  }
  function removeChild(parentDom, dom) {
      parentDom.removeChild(dom);
  }
  function callAll(arrayFn) {
      var listener;
      while ((listener = arrayFn.shift()) !== undefined) {
          listener();
      }
  }

  var attachedEventCounts = {};
  var attachedEvents = {};
  function handleEvent(name, nextEvent, dom) {
      var eventsLeft = attachedEventCounts[name];
      var eventsObject = dom.$EV;
      if (nextEvent) {
          if (!eventsLeft) {
              attachedEvents[name] = attachEventToDocument(name);
              attachedEventCounts[name] = 0;
          }
          if (!eventsObject) {
              eventsObject = dom.$EV = {};
          }
          if (!eventsObject[name]) {
              attachedEventCounts[name]++;
          }
          eventsObject[name] = nextEvent;
      } else if (eventsObject && eventsObject[name]) {
          attachedEventCounts[name]--;
          if (eventsLeft === 1) {
              document.removeEventListener(normalizeEventName(name), attachedEvents[name]);
              attachedEvents[name] = null;
          }
          eventsObject[name] = nextEvent;
      }
  }
  function dispatchEvents(event, target, isClick, name, eventData) {
      var dom = target;
      while (!isNull(dom)) {
          // Html Nodes can be nested fe: span inside button in that scenario browser does not handle disabled attribute on parent,
          // because the event listener is on document.body
          // Don't process clicks on disabled elements
          if (isClick && dom.disabled) {
              return;
          }
          var eventsObject = dom.$EV;
          if (eventsObject) {
              var currentEvent = eventsObject[name];
              if (currentEvent) {
                  // linkEvent object
                  eventData.dom = dom;
                  if (currentEvent.event) {
                      currentEvent.event(currentEvent.data, event);
                  } else {
                      currentEvent(event);
                  }
                  if (event.cancelBubble) {
                      return;
                  }
              }
          }
          dom = dom.parentNode;
      }
  }
  function normalizeEventName(name) {
      return name.substr(2).toLowerCase();
  }
  function stopPropagation$1() {
      this.cancelBubble = true;
      this.stopImmediatePropagation();
  }
  function attachEventToDocument(name) {
      var docEvent = function docEvent(event) {
          var type = event.type;
          var isClick = type === 'click' || type === 'dblclick';
          if (isClick && event.button !== 0) {
              // Firefox incorrectly triggers click event for mid/right mouse buttons.
              // This bug has been active for 12 years.
              // https://bugzilla.mozilla.org/show_bug.cgi?id=184051
              event.preventDefault();
              event.stopPropagation();
              return false;
          }
          event.stopPropagation = stopPropagation$1;
          // Event data needs to be object to save reference to currentTarget getter
          var eventData = {
              dom: document
          };
          Object.defineProperty(event, 'currentTarget', {
              configurable: true,
              get: function get() {
                  return eventData.dom;
              }
          });
          dispatchEvents(event, event.target, isClick, name, eventData);
          return;
      };
      document.addEventListener(normalizeEventName(name), docEvent);
      return docEvent;
  }

  function isSameInnerHTML(dom, innerHTML) {
      var tempdom = document.createElement('i');
      tempdom.innerHTML = innerHTML;
      return tempdom.innerHTML === dom.innerHTML;
  }
  function isSamePropsInnerHTML(dom, props) {
      return Boolean(props && props.dangerouslySetInnerHTML && props.dangerouslySetInnerHTML.__html && isSameInnerHTML(dom, props.dangerouslySetInnerHTML.__html));
  }

  function triggerEventListener(props, methodName, e) {
      if (props[methodName]) {
          var listener = props[methodName];
          if (listener.event) {
              listener.event(listener.data, e);
          } else {
              listener(e);
          }
      } else {
          var nativeListenerName = methodName.toLowerCase();
          if (props[nativeListenerName]) {
              props[nativeListenerName](e);
          }
      }
  }
  function createWrappedFunction(methodName, applyValue) {
      var fnMethod = function fnMethod(e) {
          e.stopPropagation();
          var vNode = this.$V;
          // If vNode is gone by the time event fires, no-op
          if (!vNode) {
              return;
          }
          var props = vNode.props || EMPTY_OBJ;
          var dom = vNode.dom;
          if (isString$1(methodName)) {
              triggerEventListener(props, methodName, e);
          } else {
              for (var i = 0; i < methodName.length; i++) {
                  triggerEventListener(props, methodName[i], e);
              }
          }
          if (isFunction$1(applyValue)) {
              var newVNode = this.$V;
              var newProps = newVNode.props || EMPTY_OBJ;
              applyValue(newProps, dom, false, newVNode);
          }
      };
      Object.defineProperty(fnMethod, 'wrapped', {
          configurable: false,
          enumerable: false,
          value: true,
          writable: false
      });
      return fnMethod;
  }

  function isCheckedType(type) {
      return type === 'checkbox' || type === 'radio';
  }
  var onTextInputChange = createWrappedFunction('onInput', applyValueInput);
  var wrappedOnChange = createWrappedFunction(['onClick', 'onChange'], applyValueInput);
  /* tslint:disable-next-line:no-empty */
  function emptywrapper(event) {
      event.stopPropagation();
  }
  emptywrapper.wrapped = true;
  function inputEvents(dom, nextPropsOrEmpty) {
      if (isCheckedType(nextPropsOrEmpty.type)) {
          dom.onchange = wrappedOnChange;
          dom.onclick = emptywrapper;
      } else {
          dom.oninput = onTextInputChange;
      }
  }
  function applyValueInput(nextPropsOrEmpty, dom) {
      var type = nextPropsOrEmpty.type;
      var value = nextPropsOrEmpty.value;
      var checked = nextPropsOrEmpty.checked;
      var multiple = nextPropsOrEmpty.multiple;
      var defaultValue = nextPropsOrEmpty.defaultValue;
      var hasValue = !isNullOrUndef(value);
      if (type && type !== dom.type) {
          dom.setAttribute('type', type);
      }
      if (!isNullOrUndef(multiple) && multiple !== dom.multiple) {
          dom.multiple = multiple;
      }
      if (!isNullOrUndef(defaultValue) && !hasValue) {
          dom.defaultValue = defaultValue + '';
      }
      if (isCheckedType(type)) {
          if (hasValue) {
              dom.value = value;
          }
          if (!isNullOrUndef(checked)) {
              dom.checked = checked;
          }
      } else {
          if (hasValue && dom.value !== value) {
              dom.defaultValue = value;
              dom.value = value;
          } else if (!isNullOrUndef(checked)) {
              dom.checked = checked;
          }
      }
  }

  function updateChildOptionGroup(vNode, value) {
      var type = vNode.type;
      if (type === 'optgroup') {
          var children = vNode.children;
          var childFlags = vNode.childFlags;
          if (childFlags & 12 /* MultipleChildren */) {
                  for (var i = 0, len = children.length; i < len; i++) {
                      updateChildOption(children[i], value);
                  }
              } else if (childFlags === 2 /* HasVNodeChildren */) {
                  updateChildOption(children, value);
              }
      } else {
          updateChildOption(vNode, value);
      }
  }
  function updateChildOption(vNode, value) {
      var props = vNode.props || EMPTY_OBJ;
      var dom = vNode.dom;
      // we do this as multiple may have changed
      dom.value = props.value;
      if (isArray$2(value) && value.indexOf(props.value) !== -1 || props.value === value) {
          dom.selected = true;
      } else if (!isNullOrUndef(value) || !isNullOrUndef(props.selected)) {
          dom.selected = props.selected || false;
      }
  }
  var onSelectChange = createWrappedFunction('onChange', applyValueSelect);
  function selectEvents(dom) {
      dom.onchange = onSelectChange;
  }
  function applyValueSelect(nextPropsOrEmpty, dom, mounting, vNode) {
      var multiplePropInBoolean = Boolean(nextPropsOrEmpty.multiple);
      if (!isNullOrUndef(nextPropsOrEmpty.multiple) && multiplePropInBoolean !== dom.multiple) {
          dom.multiple = multiplePropInBoolean;
      }
      var childFlags = vNode.childFlags;
      if ((childFlags & 1 /* HasInvalidChildren */) === 0) {
          var children = vNode.children;
          var value = nextPropsOrEmpty.value;
          if (mounting && isNullOrUndef(value)) {
              value = nextPropsOrEmpty.defaultValue;
          }
          if (childFlags & 12 /* MultipleChildren */) {
                  for (var i = 0, len = children.length; i < len; i++) {
                      updateChildOptionGroup(children[i], value);
                  }
              } else if (childFlags === 2 /* HasVNodeChildren */) {
                  updateChildOptionGroup(children, value);
              }
      }
  }

  var onTextareaInputChange = createWrappedFunction('onInput', applyValueTextArea);
  var wrappedOnChange$1 = createWrappedFunction('onChange');
  function textAreaEvents(dom, nextPropsOrEmpty) {
      dom.oninput = onTextareaInputChange;
      if (nextPropsOrEmpty.onChange) {
          dom.onchange = wrappedOnChange$1;
      }
  }
  function applyValueTextArea(nextPropsOrEmpty, dom, mounting) {
      var value = nextPropsOrEmpty.value;
      var domValue = dom.value;
      if (isNullOrUndef(value)) {
          if (mounting) {
              var defaultValue = nextPropsOrEmpty.defaultValue;
              if (!isNullOrUndef(defaultValue) && defaultValue !== domValue) {
                  dom.defaultValue = defaultValue;
                  dom.value = defaultValue;
              }
          }
      } else if (domValue !== value) {
          /* There is value so keep it controlled */
          dom.defaultValue = value;
          dom.value = value;
      }
  }

  /**
   * There is currently no support for switching same input between controlled and nonControlled
   * If that ever becomes a real issue, then re design controlled elements
   * Currently user must choose either controlled or non-controlled and stick with that
   */
  function processElement(flags, vNode, dom, nextPropsOrEmpty, mounting, isControlled) {
      if (flags & 64 /* InputElement */) {
              applyValueInput(nextPropsOrEmpty, dom);
          } else if (flags & 256 /* SelectElement */) {
              applyValueSelect(nextPropsOrEmpty, dom, mounting, vNode);
          } else if (flags & 128 /* TextareaElement */) {
              applyValueTextArea(nextPropsOrEmpty, dom, mounting);
          }
      if (isControlled) {
          dom.$V = vNode;
      }
  }
  function addFormElementEventHandlers(flags, dom, nextPropsOrEmpty) {
      if (flags & 64 /* InputElement */) {
              inputEvents(dom, nextPropsOrEmpty);
          } else if (flags & 256 /* SelectElement */) {
              selectEvents(dom);
          } else if (flags & 128 /* TextareaElement */) {
              textAreaEvents(dom, nextPropsOrEmpty);
          }
  }
  function isControlledFormElement(nextPropsOrEmpty) {
      return nextPropsOrEmpty.type && isCheckedType(nextPropsOrEmpty.type) ? !isNullOrUndef(nextPropsOrEmpty.checked) : !isNullOrUndef(nextPropsOrEmpty.value);
  }

  function remove$3(vNode, parentDom) {
      unmount(vNode);
      if (!isNull(parentDom)) {
          removeChild(parentDom, vNode.dom);
          // Let carbage collector free memory
          vNode.dom = null;
      }
  }
  function unmount(vNode) {
      var flags = vNode.flags;
      if (flags & 481 /* Element */) {
              var ref = vNode.ref;
              var props = vNode.props;
              if (isFunction$1(ref)) {
                  ref(null);
              }
              var children = vNode.children;
              var childFlags = vNode.childFlags;
              if (childFlags & 12 /* MultipleChildren */) {
                      unmountAllChildren(children);
                  } else if (childFlags === 2 /* HasVNodeChildren */) {
                      unmount(children);
                  }
              if (!isNull(props)) {
                  for (var name in props) {
                      switch (name) {
                          case 'onClick':
                          case 'onDblClick':
                          case 'onFocusIn':
                          case 'onFocusOut':
                          case 'onKeyDown':
                          case 'onKeyPress':
                          case 'onKeyUp':
                          case 'onMouseDown':
                          case 'onMouseMove':
                          case 'onMouseUp':
                          case 'onSubmit':
                          case 'onTouchEnd':
                          case 'onTouchMove':
                          case 'onTouchStart':
                              handleEvent(name, null, vNode.dom);
                              break;
                          default:
                              break;
                      }
                  }
              }
          } else if (flags & 14 /* Component */) {
              var instance = vNode.children;
              var ref$1 = vNode.ref;
              if (flags & 4 /* ComponentClass */) {
                      if (isFunction$1(options.beforeUnmount)) {
                          options.beforeUnmount(vNode);
                      }
                      if (isFunction$1(instance.componentWillUnmount)) {
                          instance.componentWillUnmount();
                      }
                      if (isFunction$1(ref$1)) {
                          ref$1(null);
                      }
                      instance.$UN = true;
                      unmount(instance.$LI);
                  } else {
                  if (!isNullOrUndef(ref$1) && isFunction$1(ref$1.onComponentWillUnmount)) {
                      ref$1.onComponentWillUnmount(vNode.dom, vNode.props || EMPTY_OBJ);
                  }
                  unmount(instance);
              }
          } else if (flags & 1024 /* Portal */) {
              var children$1 = vNode.children;
              if (!isNull(children$1) && isObject$1(children$1)) {
                  remove$3(children$1, vNode.type);
              }
          }
  }
  function unmountAllChildren(children) {
      for (var i = 0, len = children.length; i < len; i++) {
          unmount(children[i]);
      }
  }
  function removeAllChildren(dom, children) {
      unmountAllChildren(children);
      dom.textContent = '';
  }

  function createLinkEvent(linkEvent, nextValue) {
      return function (e) {
          linkEvent(nextValue.data, e);
      };
  }
  function patchEvent(name, lastValue, nextValue, dom) {
      var nameLowerCase = name.toLowerCase();
      if (!isFunction$1(nextValue) && !isNullOrUndef(nextValue)) {
          var linkEvent = nextValue.event;
          if (linkEvent && isFunction$1(linkEvent)) {
              dom[nameLowerCase] = createLinkEvent(linkEvent, nextValue);
          } else {}
      } else {
          var domEvent = dom[nameLowerCase];
          // if the function is wrapped, that means it's been controlled by a wrapper
          if (!domEvent || !domEvent.wrapped) {
              dom[nameLowerCase] = nextValue;
          }
      }
  }
  function getNumberStyleValue(style, value) {
      switch (style) {
          case 'animationIterationCount':
          case 'borderImageOutset':
          case 'borderImageSlice':
          case 'borderImageWidth':
          case 'boxFlex':
          case 'boxFlexGroup':
          case 'boxOrdinalGroup':
          case 'columnCount':
          case 'fillOpacity':
          case 'flex':
          case 'flexGrow':
          case 'flexNegative':
          case 'flexOrder':
          case 'flexPositive':
          case 'flexShrink':
          case 'floodOpacity':
          case 'fontWeight':
          case 'gridColumn':
          case 'gridRow':
          case 'lineClamp':
          case 'lineHeight':
          case 'opacity':
          case 'order':
          case 'orphans':
          case 'stopOpacity':
          case 'strokeDasharray':
          case 'strokeDashoffset':
          case 'strokeMiterlimit':
          case 'strokeOpacity':
          case 'strokeWidth':
          case 'tabSize':
          case 'widows':
          case 'zIndex':
          case 'zoom':
              return value;
          default:
              return value + 'px';
      }
  }
  // We are assuming here that we come from patchProp routine
  // -nextAttrValue cannot be null or undefined
  function patchStyle(lastAttrValue, nextAttrValue, dom) {
      var domStyle = dom.style;
      var style;
      var value;
      if (isString$1(nextAttrValue)) {
          domStyle.cssText = nextAttrValue;
          return;
      }
      if (!isNullOrUndef(lastAttrValue) && !isString$1(lastAttrValue)) {
          for (style in nextAttrValue) {
              // do not add a hasOwnProperty check here, it affects performance
              value = nextAttrValue[style];
              if (value !== lastAttrValue[style]) {
                  domStyle[style] = isNumber$1(value) ? getNumberStyleValue(style, value) : value;
              }
          }
          for (style in lastAttrValue) {
              if (isNullOrUndef(nextAttrValue[style])) {
                  domStyle[style] = '';
              }
          }
      } else {
          for (style in nextAttrValue) {
              value = nextAttrValue[style];
              domStyle[style] = isNumber$1(value) ? getNumberStyleValue(style, value) : value;
          }
      }
  }
  function patchProp(prop, lastValue, nextValue, dom, isSVG, hasControlledValue, lastVNode) {
      switch (prop) {
          case 'onClick':
          case 'onDblClick':
          case 'onFocusIn':
          case 'onFocusOut':
          case 'onKeyDown':
          case 'onKeyPress':
          case 'onKeyUp':
          case 'onMouseDown':
          case 'onMouseMove':
          case 'onMouseUp':
          case 'onSubmit':
          case 'onTouchEnd':
          case 'onTouchMove':
          case 'onTouchStart':
              handleEvent(prop, nextValue, dom);
              break;
          case 'children':
          case 'childrenType':
          case 'className':
          case 'defaultValue':
          case 'key':
          case 'multiple':
          case 'ref':
              return;
          case 'allowfullscreen':
          case 'autoFocus':
          case 'autoplay':
          case 'capture':
          case 'checked':
          case 'controls':
          case 'default':
          case 'disabled':
          case 'hidden':
          case 'indeterminate':
          case 'loop':
          case 'muted':
          case 'novalidate':
          case 'open':
          case 'readOnly':
          case 'required':
          case 'reversed':
          case 'scoped':
          case 'seamless':
          case 'selected':
              prop = prop === 'autoFocus' ? prop.toLowerCase() : prop;
              dom[prop] = !!nextValue;
              break;
          case 'defaultChecked':
          case 'value':
          case 'volume':
              if (hasControlledValue && prop === 'value') {
                  return;
              }
              var value = isNullOrUndef(nextValue) ? '' : nextValue;
              if (dom[prop] !== value) {
                  dom[prop] = value;
              }
              break;
          case 'dangerouslySetInnerHTML':
              var lastHtml = lastValue && lastValue.__html || '';
              var nextHtml = nextValue && nextValue.__html || '';
              if (lastHtml !== nextHtml) {
                  if (!isNullOrUndef(nextHtml) && !isSameInnerHTML(dom, nextHtml)) {
                      if (!isNull(lastVNode)) {
                          if (lastVNode.childFlags & 12 /* MultipleChildren */) {
                                  unmountAllChildren(lastVNode.children);
                              } else if (lastVNode.childFlags === 2 /* HasVNodeChildren */) {
                                  unmount(lastVNode.children);
                              }
                          lastVNode.children = null;
                          lastVNode.childFlags = 1 /* HasInvalidChildren */;
                      }
                      dom.innerHTML = nextHtml;
                  }
              }
              break;
          default:
              if (prop[0] === 'o' && prop[1] === 'n') {
                  patchEvent(prop, lastValue, nextValue, dom);
              } else if (isNullOrUndef(nextValue)) {
                  dom.removeAttribute(prop);
              } else if (prop === 'style') {
                  patchStyle(lastValue, nextValue, dom);
              } else if (isSVG && namespaces[prop]) {
                  // We optimize for NS being boolean. Its 99.9% time false
                  // If we end up in this path we can read property again
                  dom.setAttributeNS(namespaces[prop], prop, nextValue);
              } else {
                  dom.setAttribute(prop, nextValue);
              }
              break;
      }
  }
  function mountProps(vNode, flags, props, dom, isSVG) {
      var hasControlledValue = false;
      var isFormElement = (flags & 448 /* FormElement */) > 0;
      if (isFormElement) {
          hasControlledValue = isControlledFormElement(props);
          if (hasControlledValue) {
              addFormElementEventHandlers(flags, dom, props);
          }
      }
      for (var prop in props) {
          // do not add a hasOwnProperty check here, it affects performance
          patchProp(prop, null, props[prop], dom, isSVG, hasControlledValue, null);
      }
      if (isFormElement) {
          processElement(flags, vNode, dom, props, true, hasControlledValue);
      }
  }

  function createClassComponentInstance(vNode, Component, props, context) {
      var instance = new Component(props, context);
      vNode.children = instance;
      instance.$V = vNode;
      instance.$BS = false;
      instance.context = context;
      if (instance.props === EMPTY_OBJ) {
          instance.props = props;
      }
      instance.$UN = false;
      if (isFunction$1(instance.componentWillMount)) {
          instance.$BR = true;
          instance.componentWillMount();
          if (instance.$PSS) {
              var state = instance.state;
              var pending = instance.$PS;
              if (isNull(state)) {
                  instance.state = pending;
              } else {
                  for (var key in pending) {
                      state[key] = pending[key];
                  }
              }
              instance.$PSS = false;
              instance.$PS = null;
          }
          instance.$BR = false;
      }
      if (isFunction$1(options.beforeRender)) {
          options.beforeRender(instance);
      }
      var input = handleComponentInput(instance.render(props, instance.state, context), vNode);
      var childContext;
      if (isFunction$1(instance.getChildContext)) {
          childContext = instance.getChildContext();
      }
      if (isNullOrUndef(childContext)) {
          instance.$CX = context;
      } else {
          instance.$CX = combineFrom(context, childContext);
      }
      if (isFunction$1(options.afterRender)) {
          options.afterRender(instance);
      }
      instance.$LI = input;
      return instance;
  }
  function handleComponentInput(input, componentVNode) {
      if (isInvalid(input)) {
          input = createVoidVNode();
      } else if (isStringOrNumber(input)) {
          input = createTextVNode(input, null);
      } else {
          if (input.dom) {
              input = directClone(input);
          }
          if (input.flags & 14 /* Component */) {
                  // if we have an input that is also a component, we run into a tricky situation
                  // where the root vNode needs to always have the correct DOM entry
                  // we can optimise this in the future, but this gets us out of a lot of issues
                  input.parentVNode = componentVNode;
              }
      }
      return input;
  }

  function mount(vNode, parentDom, lifecycle, context, isSVG) {
      var flags = vNode.flags;
      if (flags & 481 /* Element */) {
              return mountElement(vNode, parentDom, lifecycle, context, isSVG);
          }
      if (flags & 14 /* Component */) {
              return mountComponent(vNode, parentDom, lifecycle, context, isSVG, (flags & 4 /* ComponentClass */) > 0);
          }
      if (flags & 512 /* Void */ || flags & 16 /* Text */) {
              return mountText(vNode, parentDom);
          }
      if (flags & 1024 /* Portal */) {
              mount(vNode.children, vNode.type, lifecycle, context, false);
              return vNode.dom = mountText(createVoidVNode(), parentDom);
          }
  }
  function mountText(vNode, parentDom) {
      var dom = vNode.dom = document.createTextNode(vNode.children);
      if (!isNull(parentDom)) {
          appendChild(parentDom, dom);
      }
      return dom;
  }
  function mountElement(vNode, parentDom, lifecycle, context, isSVG) {
      var flags = vNode.flags;
      var children = vNode.children;
      var props = vNode.props;
      var className = vNode.className;
      var ref = vNode.ref;
      var childFlags = vNode.childFlags;
      isSVG = isSVG || (flags & 32 /* SvgElement */) > 0;
      var dom = documentCreateElement(vNode.type, isSVG);
      vNode.dom = dom;
      if (!isNullOrUndef(className) && className !== '') {
          if (isSVG) {
              dom.setAttribute('class', className);
          } else {
              dom.className = className;
          }
      }
      if (!isNull(parentDom)) {
          appendChild(parentDom, dom);
      }
      if ((childFlags & 1 /* HasInvalidChildren */) === 0) {
          var childrenIsSVG = isSVG === true && vNode.type !== 'foreignObject';
          if (childFlags === 2 /* HasVNodeChildren */) {
                  mount(children, dom, lifecycle, context, childrenIsSVG);
              } else if (childFlags & 12 /* MultipleChildren */) {
                  mountArrayChildren(children, dom, lifecycle, context, childrenIsSVG);
              }
      }
      if (!isNull(props)) {
          mountProps(vNode, flags, props, dom, isSVG);
      }
      if (isFunction$1(ref)) {
          mountRef(dom, ref, lifecycle);
      }
      return dom;
  }
  function mountArrayChildren(children, dom, lifecycle, context, isSVG) {
      for (var i = 0, len = children.length; i < len; i++) {
          var child = children[i];
          if (!isNull(child.dom)) {
              children[i] = child = directClone(child);
          }
          mount(child, dom, lifecycle, context, isSVG);
      }
  }
  function mountComponent(vNode, parentDom, lifecycle, context, isSVG, isClass) {
      var dom;
      var type = vNode.type;
      var props = vNode.props || EMPTY_OBJ;
      var ref = vNode.ref;
      if (isClass) {
          var instance = createClassComponentInstance(vNode, type, props, context);
          vNode.dom = dom = mount(instance.$LI, null, lifecycle, instance.$CX, isSVG);
          mountClassComponentCallbacks(vNode, ref, instance, lifecycle);
          instance.$UPD = false;
      } else {
          var input = handleComponentInput(type(props, context), vNode);
          vNode.children = input;
          vNode.dom = dom = mount(input, null, lifecycle, context, isSVG);
          mountFunctionalComponentCallbacks(props, ref, dom, lifecycle);
      }
      if (!isNull(parentDom)) {
          appendChild(parentDom, dom);
      }
      return dom;
  }
  function createClassMountCallback(instance, hasAfterMount, afterMount, vNode, hasDidMount) {
      return function () {
          instance.$UPD = true;
          if (hasAfterMount) {
              afterMount(vNode);
          }
          if (hasDidMount) {
              instance.componentDidMount();
          }
          instance.$UPD = false;
      };
  }
  function mountClassComponentCallbacks(vNode, ref, instance, lifecycle) {
      if (isFunction$1(ref)) {
          ref(instance);
      } else {}
      var hasDidMount = isFunction$1(instance.componentDidMount);
      var afterMount = options.afterMount;
      var hasAfterMount = isFunction$1(afterMount);
      if (hasDidMount || hasAfterMount) {
          lifecycle.push(createClassMountCallback(instance, hasAfterMount, afterMount, vNode, hasDidMount));
      }
  }
  // Create did mount callback lazily to avoid creating function context if not needed
  function createOnMountCallback(ref, dom, props) {
      return function () {
          return ref.onComponentDidMount(dom, props);
      };
  }
  function mountFunctionalComponentCallbacks(props, ref, dom, lifecycle) {
      if (!isNullOrUndef(ref)) {
          if (isFunction$1(ref.onComponentWillMount)) {
              ref.onComponentWillMount(props);
          }
          if (isFunction$1(ref.onComponentDidMount)) {
              lifecycle.push(createOnMountCallback(ref, dom, props));
          }
      }
  }
  function mountRef(dom, value, lifecycle) {
      lifecycle.push(function () {
          return value(dom);
      });
  }

  function hydrateComponent(vNode, dom, lifecycle, context, isSVG, isClass) {
      var type = vNode.type;
      var ref = vNode.ref;
      var props = vNode.props || EMPTY_OBJ;
      if (isClass) {
          var instance = createClassComponentInstance(vNode, type, props, context);
          var input = instance.$LI;
          hydrateVNode(input, dom, lifecycle, instance.$CX, isSVG);
          vNode.dom = input.dom;
          mountClassComponentCallbacks(vNode, ref, instance, lifecycle);
          instance.$UPD = false; // Mount finished allow going sync
      } else {
          var input$1 = handleComponentInput(type(props, context), vNode);
          hydrateVNode(input$1, dom, lifecycle, context, isSVG);
          vNode.children = input$1;
          vNode.dom = input$1.dom;
          mountFunctionalComponentCallbacks(props, ref, dom, lifecycle);
      }
  }
  function hydrateElement(vNode, dom, lifecycle, context, isSVG) {
      var children = vNode.children;
      var props = vNode.props;
      var className = vNode.className;
      var flags = vNode.flags;
      var ref = vNode.ref;
      isSVG = isSVG || (flags & 32 /* SvgElement */) > 0;
      if (dom.nodeType !== 1 || dom.tagName.toLowerCase() !== vNode.type) {
          var newDom = mountElement(vNode, null, lifecycle, context, isSVG);
          vNode.dom = newDom;
          replaceChild(dom.parentNode, newDom, dom);
      } else {
          vNode.dom = dom;
          var childNode = dom.firstChild;
          var childFlags = vNode.childFlags;
          if ((childFlags & 1 /* HasInvalidChildren */) === 0) {
              var nextSibling = null;
              while (childNode) {
                  nextSibling = childNode.nextSibling;
                  if (childNode.nodeType === 8) {
                      if (childNode.data === '!') {
                          dom.replaceChild(document.createTextNode(''), childNode);
                      } else {
                          dom.removeChild(childNode);
                      }
                  }
                  childNode = nextSibling;
              }
              childNode = dom.firstChild;
              if (childFlags === 2 /* HasVNodeChildren */) {
                      if (isNull(childNode)) {
                          mount(children, dom, lifecycle, context, isSVG);
                      } else {
                          nextSibling = childNode.nextSibling;
                          hydrateVNode(children, childNode, lifecycle, context, isSVG);
                          childNode = nextSibling;
                      }
                  } else if (childFlags & 12 /* MultipleChildren */) {
                      for (var i = 0, len = children.length; i < len; i++) {
                          var child = children[i];
                          if (isNull(childNode)) {
                              mount(child, dom, lifecycle, context, isSVG);
                          } else {
                              nextSibling = childNode.nextSibling;
                              hydrateVNode(child, childNode, lifecycle, context, isSVG);
                              childNode = nextSibling;
                          }
                      }
                  }
              // clear any other DOM nodes, there should be only a single entry for the root
              while (childNode) {
                  nextSibling = childNode.nextSibling;
                  dom.removeChild(childNode);
                  childNode = nextSibling;
              }
          } else if (!isNull(dom.firstChild) && !isSamePropsInnerHTML(dom, props)) {
              dom.textContent = ''; // dom has content, but VNode has no children remove everything from DOM
              if (flags & 448 /* FormElement */) {
                      // If element is form element, we need to clear defaultValue also
                      dom.defaultValue = '';
                  }
          }
          if (!isNull(props)) {
              mountProps(vNode, flags, props, dom, isSVG);
          }
          if (isNullOrUndef(className)) {
              if (dom.className !== '') {
                  dom.removeAttribute('class');
              }
          } else if (isSVG) {
              dom.setAttribute('class', className);
          } else {
              dom.className = className;
          }
          if (isFunction$1(ref)) {
              mountRef(dom, ref, lifecycle);
          } else {}
      }
  }
  function hydrateText(vNode, dom) {
      if (dom.nodeType !== 3) {
          var newDom = mountText(vNode, null);
          vNode.dom = newDom;
          replaceChild(dom.parentNode, newDom, dom);
      } else {
          var text = vNode.children;
          if (dom.nodeValue !== text) {
              dom.nodeValue = text;
          }
          vNode.dom = dom;
      }
  }
  function hydrateVNode(vNode, dom, lifecycle, context, isSVG) {
      var flags = vNode.flags;
      if (flags & 14 /* Component */) {
              hydrateComponent(vNode, dom, lifecycle, context, isSVG, (flags & 4 /* ComponentClass */) > 0);
          } else if (flags & 481 /* Element */) {
              hydrateElement(vNode, dom, lifecycle, context, isSVG);
          } else if (flags & 16 /* Text */) {
              hydrateText(vNode, dom);
          } else if (flags & 512 /* Void */) {
              vNode.dom = dom;
          } else {
          throwError();
      }
  }
  function hydrate(input, parentDom, callback) {
      var dom = parentDom.firstChild;
      if (!isNull(dom)) {
          if (!isInvalid(input)) {
              hydrateVNode(input, dom, LIFECYCLE, EMPTY_OBJ, false);
          }
          dom = parentDom.firstChild;
          // clear any other DOM nodes, there should be only a single entry for the root
          while (dom = dom.nextSibling) {
              parentDom.removeChild(dom);
          }
      }
      if (LIFECYCLE.length > 0) {
          callAll(LIFECYCLE);
      }
      if (!parentDom.$V) {
          options.roots.push(parentDom);
      }
      parentDom.$V = input;
      if (isFunction$1(callback)) {
          callback();
      }
  }

  function replaceWithNewNode(lastNode, nextNode, parentDom, lifecycle, context, isSVG) {
      unmount(lastNode);
      replaceChild(parentDom, mount(nextNode, null, lifecycle, context, isSVG), lastNode.dom);
  }
  function patch(lastVNode, nextVNode, parentDom, lifecycle, context, isSVG) {
      if (lastVNode !== nextVNode) {
          var nextFlags = nextVNode.flags | 0;
          if (lastVNode.flags !== nextFlags || nextFlags & 2048 /* ReCreate */) {
                  replaceWithNewNode(lastVNode, nextVNode, parentDom, lifecycle, context, isSVG);
              } else if (nextFlags & 481 /* Element */) {
                  patchElement(lastVNode, nextVNode, parentDom, lifecycle, context, isSVG);
              } else if (nextFlags & 14 /* Component */) {
                  patchComponent(lastVNode, nextVNode, parentDom, lifecycle, context, isSVG, (nextFlags & 4 /* ComponentClass */) > 0);
              } else if (nextFlags & 16 /* Text */) {
                  patchText(lastVNode, nextVNode, parentDom);
              } else if (nextFlags & 512 /* Void */) {
                  nextVNode.dom = lastVNode.dom;
              } else {
              // Portal
              patchPortal(lastVNode, nextVNode, lifecycle, context);
          }
      }
  }
  function patchPortal(lastVNode, nextVNode, lifecycle, context) {
      var lastContainer = lastVNode.type;
      var nextContainer = nextVNode.type;
      var nextChildren = nextVNode.children;
      patchChildren(lastVNode.childFlags, nextVNode.childFlags, lastVNode.children, nextChildren, lastContainer, lifecycle, context, false);
      nextVNode.dom = lastVNode.dom;
      if (lastContainer !== nextContainer && !isInvalid(nextChildren)) {
          var node = nextChildren.dom;
          lastContainer.removeChild(node);
          nextContainer.appendChild(node);
      }
  }
  function patchElement(lastVNode, nextVNode, parentDom, lifecycle, context, isSVG) {
      var nextTag = nextVNode.type;
      if (lastVNode.type !== nextTag) {
          replaceWithNewNode(lastVNode, nextVNode, parentDom, lifecycle, context, isSVG);
      } else {
          var dom = lastVNode.dom;
          var nextFlags = nextVNode.flags;
          var lastProps = lastVNode.props;
          var nextProps = nextVNode.props;
          var isFormElement = false;
          var hasControlledValue = false;
          var nextPropsOrEmpty;
          nextVNode.dom = dom;
          isSVG = isSVG || (nextFlags & 32 /* SvgElement */) > 0;
          // inlined patchProps  -- starts --
          if (lastProps !== nextProps) {
              var lastPropsOrEmpty = lastProps || EMPTY_OBJ;
              nextPropsOrEmpty = nextProps || EMPTY_OBJ;
              if (nextPropsOrEmpty !== EMPTY_OBJ) {
                  isFormElement = (nextFlags & 448 /* FormElement */) > 0;
                  if (isFormElement) {
                      hasControlledValue = isControlledFormElement(nextPropsOrEmpty);
                  }
                  for (var prop in nextPropsOrEmpty) {
                      var lastValue = lastPropsOrEmpty[prop];
                      var nextValue = nextPropsOrEmpty[prop];
                      if (lastValue !== nextValue) {
                          patchProp(prop, lastValue, nextValue, dom, isSVG, hasControlledValue, lastVNode);
                      }
                  }
              }
              if (lastPropsOrEmpty !== EMPTY_OBJ) {
                  for (var prop$1 in lastPropsOrEmpty) {
                      // do not add a hasOwnProperty check here, it affects performance
                      if (!nextPropsOrEmpty.hasOwnProperty(prop$1) && !isNullOrUndef(lastPropsOrEmpty[prop$1])) {
                          patchProp(prop$1, lastPropsOrEmpty[prop$1], null, dom, isSVG, hasControlledValue, lastVNode);
                      }
                  }
              }
          }
          var lastChildren = lastVNode.children;
          var nextChildren = nextVNode.children;
          var nextRef = nextVNode.ref;
          var lastClassName = lastVNode.className;
          var nextClassName = nextVNode.className;
          if (lastChildren !== nextChildren) {
              patchChildren(lastVNode.childFlags, nextVNode.childFlags, lastChildren, nextChildren, dom, lifecycle, context, isSVG && nextTag !== 'foreignObject');
          }
          if (isFormElement) {
              processElement(nextFlags, nextVNode, dom, nextPropsOrEmpty, false, hasControlledValue);
          }
          // inlined patchProps  -- ends --
          if (lastClassName !== nextClassName) {
              if (isNullOrUndef(nextClassName)) {
                  dom.removeAttribute('class');
              } else if (isSVG) {
                  dom.setAttribute('class', nextClassName);
              } else {
                  dom.className = nextClassName;
              }
          }
          if (isFunction$1(nextRef) && lastVNode.ref !== nextRef) {
              mountRef(dom, nextRef, lifecycle);
          } else {}
      }
  }
  function patchChildren(lastChildFlags, nextChildFlags, lastChildren, nextChildren, parentDOM, lifecycle, context, isSVG) {
      switch (lastChildFlags) {
          case 2 /* HasVNodeChildren */:
              switch (nextChildFlags) {
                  case 2 /* HasVNodeChildren */:
                      patch(lastChildren, nextChildren, parentDOM, lifecycle, context, isSVG);
                      break;
                  case 1 /* HasInvalidChildren */:
                      remove$3(lastChildren, parentDOM);
                      break;
                  default:
                      remove$3(lastChildren, parentDOM);
                      mountArrayChildren(nextChildren, parentDOM, lifecycle, context, isSVG);
                      break;
              }
              break;
          case 1 /* HasInvalidChildren */:
              switch (nextChildFlags) {
                  case 2 /* HasVNodeChildren */:
                      mount(nextChildren, parentDOM, lifecycle, context, isSVG);
                      break;
                  case 1 /* HasInvalidChildren */:
                      break;
                  default:
                      mountArrayChildren(nextChildren, parentDOM, lifecycle, context, isSVG);
                      break;
              }
              break;
          default:
              if (nextChildFlags & 12 /* MultipleChildren */) {
                      var lastLength = lastChildren.length;
                      var nextLength = nextChildren.length;
                      // Fast path's for both algorithms
                      if (lastLength === 0) {
                          if (nextLength > 0) {
                              mountArrayChildren(nextChildren, parentDOM, lifecycle, context, isSVG);
                          }
                      } else if (nextLength === 0) {
                          removeAllChildren(parentDOM, lastChildren);
                      } else if (nextChildFlags === 8 /* HasKeyedChildren */ && lastChildFlags === 8 /* HasKeyedChildren */) {
                              patchKeyedChildren(lastChildren, nextChildren, parentDOM, lifecycle, context, isSVG, lastLength, nextLength);
                          } else {
                          patchNonKeyedChildren(lastChildren, nextChildren, parentDOM, lifecycle, context, isSVG, lastLength, nextLength);
                      }
                  } else if (nextChildFlags === 1 /* HasInvalidChildren */) {
                      removeAllChildren(parentDOM, lastChildren);
                  } else {
                  removeAllChildren(parentDOM, lastChildren);
                  mount(nextChildren, parentDOM, lifecycle, context, isSVG);
              }
              break;
      }
  }
  function updateClassComponent(instance, nextState, nextVNode, nextProps, parentDom, lifecycle, context, isSVG, force, fromSetState) {
      var lastState = instance.state;
      var lastProps = instance.props;
      nextVNode.children = instance;
      var renderOutput;
      if (instance.$UN) {
          return;
      }
      if (lastProps !== nextProps || nextProps === EMPTY_OBJ) {
          if (!fromSetState && isFunction$1(instance.componentWillReceiveProps)) {
              instance.$BR = true;
              instance.componentWillReceiveProps(nextProps, context);
              // If instance component was removed during its own update do nothing...
              if (instance.$UN) {
                  return;
              }
              instance.$BR = false;
          }
          if (instance.$PSS) {
              nextState = combineFrom(nextState, instance.$PS);
              instance.$PSS = false;
              instance.$PS = null;
          }
      }
      /* Update if scu is not defined, or it returns truthy value or force */
      var hasSCU = isFunction$1(instance.shouldComponentUpdate);
      if (force || !hasSCU || hasSCU && instance.shouldComponentUpdate(nextProps, nextState, context)) {
          if (isFunction$1(instance.componentWillUpdate)) {
              instance.$BS = true;
              instance.componentWillUpdate(nextProps, nextState, context);
              instance.$BS = false;
          }
          instance.props = nextProps;
          instance.state = nextState;
          instance.context = context;
          if (isFunction$1(options.beforeRender)) {
              options.beforeRender(instance);
          }
          renderOutput = instance.render(nextProps, nextState, context);
          if (isFunction$1(options.afterRender)) {
              options.afterRender(instance);
          }
          var didUpdate = renderOutput !== NO_OP;
          var childContext;
          if (isFunction$1(instance.getChildContext)) {
              childContext = instance.getChildContext();
          }
          if (isNullOrUndef(childContext)) {
              childContext = context;
          } else {
              childContext = combineFrom(context, childContext);
          }
          instance.$CX = childContext;
          if (didUpdate) {
              var lastInput = instance.$LI;
              var nextInput = instance.$LI = handleComponentInput(renderOutput, nextVNode);
              patch(lastInput, nextInput, parentDom, lifecycle, childContext, isSVG);
              if (isFunction$1(instance.componentDidUpdate)) {
                  instance.componentDidUpdate(lastProps, lastState);
              }
              if (isFunction$1(options.afterUpdate)) {
                  options.afterUpdate(nextVNode);
              }
          }
      } else {
          instance.props = nextProps;
          instance.state = nextState;
          instance.context = context;
      }
      nextVNode.dom = instance.$LI.dom;
  }
  function patchComponent(lastVNode, nextVNode, parentDom, lifecycle, context, isSVG, isClass) {
      var nextType = nextVNode.type;
      var lastKey = lastVNode.key;
      var nextKey = nextVNode.key;
      if (lastVNode.type !== nextType || lastKey !== nextKey) {
          replaceWithNewNode(lastVNode, nextVNode, parentDom, lifecycle, context, isSVG);
      } else {
          var nextProps = nextVNode.props || EMPTY_OBJ;
          if (isClass) {
              var instance = lastVNode.children;
              instance.$UPD = true;
              updateClassComponent(instance, instance.state, nextVNode, nextProps, parentDom, lifecycle, context, isSVG, false, false);
              instance.$V = nextVNode;
              instance.$UPD = false;
          } else {
              var shouldUpdate = true;
              var lastProps = lastVNode.props;
              var nextHooks = nextVNode.ref;
              var nextHooksDefined = !isNullOrUndef(nextHooks);
              var lastInput = lastVNode.children;
              nextVNode.dom = lastVNode.dom;
              nextVNode.children = lastInput;
              if (nextHooksDefined && isFunction$1(nextHooks.onComponentShouldUpdate)) {
                  shouldUpdate = nextHooks.onComponentShouldUpdate(lastProps, nextProps);
              }
              if (shouldUpdate !== false) {
                  if (nextHooksDefined && isFunction$1(nextHooks.onComponentWillUpdate)) {
                      nextHooks.onComponentWillUpdate(lastProps, nextProps);
                  }
                  var nextInput = nextType(nextProps, context);
                  if (nextInput !== NO_OP) {
                      nextInput = handleComponentInput(nextInput, nextVNode);
                      patch(lastInput, nextInput, parentDom, lifecycle, context, isSVG);
                      nextVNode.children = nextInput;
                      nextVNode.dom = nextInput.dom;
                      if (nextHooksDefined && isFunction$1(nextHooks.onComponentDidUpdate)) {
                          nextHooks.onComponentDidUpdate(lastProps, nextProps);
                      }
                  }
              } else if (lastInput.flags & 14 /* Component */) {
                      lastInput.parentVNode = nextVNode;
                  }
          }
      }
  }
  function patchText(lastVNode, nextVNode, parentDom) {
      var nextText = nextVNode.children;
      var textNode = parentDom.firstChild;
      var dom;
      // Guard against external change on DOM node.
      if (isNull(textNode)) {
          parentDom.textContent = nextText;
          dom = parentDom.firstChild;
      } else {
          dom = lastVNode.dom;
          if (nextText !== lastVNode.children) {
              dom.nodeValue = nextText;
          }
      }
      nextVNode.dom = dom;
  }
  function patchNonKeyedChildren(lastChildren, nextChildren, dom, lifecycle, context, isSVG, lastChildrenLength, nextChildrenLength) {
      var commonLength = lastChildrenLength > nextChildrenLength ? nextChildrenLength : lastChildrenLength;
      var i = 0;
      var nextChild;
      for (; i < commonLength; i++) {
          nextChild = nextChildren[i];
          if (nextChild.dom) {
              nextChild = nextChildren[i] = directClone(nextChild);
          }
          patch(lastChildren[i], nextChild, dom, lifecycle, context, isSVG);
      }
      if (lastChildrenLength < nextChildrenLength) {
          for (i = commonLength; i < nextChildrenLength; i++) {
              nextChild = nextChildren[i];
              if (nextChild.dom) {
                  nextChild = nextChildren[i] = directClone(nextChild);
              }
              mount(nextChild, dom, lifecycle, context, isSVG);
          }
      } else if (lastChildrenLength > nextChildrenLength) {
          for (i = commonLength; i < lastChildrenLength; i++) {
              remove$3(lastChildren[i], dom);
          }
      }
  }
  function patchKeyedChildren(a, b, dom, lifecycle, context, isSVG, aLength, bLength) {
      var aEnd = aLength - 1;
      var bEnd = bLength - 1;
      var aStart = 0;
      var bStart = 0;
      var i;
      var j;
      var aNode = a[aStart];
      var bNode = b[bStart];
      var nextNode;
      var nextPos;
      // Step 1
      // tslint:disable-next-line
      outer: {
          // Sync nodes with the same key at the beginning.
          while (aNode.key === bNode.key) {
              if (bNode.dom) {
                  b[bStart] = bNode = directClone(bNode);
              }
              patch(aNode, bNode, dom, lifecycle, context, isSVG);
              aStart++;
              bStart++;
              if (aStart > aEnd || bStart > bEnd) {
                  break outer;
              }
              aNode = a[aStart];
              bNode = b[bStart];
          }
          aNode = a[aEnd];
          bNode = b[bEnd];
          // Sync nodes with the same key at the end.
          while (aNode.key === bNode.key) {
              if (bNode.dom) {
                  b[bEnd] = bNode = directClone(bNode);
              }
              patch(aNode, bNode, dom, lifecycle, context, isSVG);
              aEnd--;
              bEnd--;
              if (aStart > aEnd || bStart > bEnd) {
                  break outer;
              }
              aNode = a[aEnd];
              bNode = b[bEnd];
          }
      }
      if (aStart > aEnd) {
          if (bStart <= bEnd) {
              nextPos = bEnd + 1;
              nextNode = nextPos < bLength ? b[nextPos].dom : null;
              while (bStart <= bEnd) {
                  bNode = b[bStart];
                  if (bNode.dom) {
                      b[bStart] = bNode = directClone(bNode);
                  }
                  bStart++;
                  insertOrAppend(dom, mount(bNode, null, lifecycle, context, isSVG), nextNode);
              }
          }
      } else if (bStart > bEnd) {
          while (aStart <= aEnd) {
              remove$3(a[aStart++], dom);
          }
      } else {
          var aLeft = aEnd - aStart + 1;
          var bLeft = bEnd - bStart + 1;
          var sources = new Array(bLeft);
          for (i = 0; i < bLeft; i++) {
              sources[i] = -1;
          }
          // Keep track if its possible to remove whole DOM using textContent = '';
          var canRemoveWholeContent = aLeft === aLength;
          var moved = false;
          var pos = 0;
          var patched = 0;
          // When sizes are small, just loop them through
          if (bLeft <= 4 || aLeft * bLeft <= 16) {
              for (i = aStart; i <= aEnd; i++) {
                  aNode = a[i];
                  if (patched < bLeft) {
                      for (j = bStart; j <= bEnd; j++) {
                          bNode = b[j];
                          if (aNode.key === bNode.key) {
                              sources[j - bStart] = i;
                              if (canRemoveWholeContent) {
                                  canRemoveWholeContent = false;
                                  while (i > aStart) {
                                      remove$3(a[aStart++], dom);
                                  }
                              }
                              if (pos > j) {
                                  moved = true;
                              } else {
                                  pos = j;
                              }
                              if (bNode.dom) {
                                  b[j] = bNode = directClone(bNode);
                              }
                              patch(aNode, bNode, dom, lifecycle, context, isSVG);
                              patched++;
                              break;
                          }
                      }
                      if (!canRemoveWholeContent && j > bEnd) {
                          remove$3(aNode, dom);
                      }
                  } else if (!canRemoveWholeContent) {
                      remove$3(aNode, dom);
                  }
              }
          } else {
              var keyIndex = {};
              // Map keys by their index in array
              for (i = bStart; i <= bEnd; i++) {
                  keyIndex[b[i].key] = i;
              }
              // Try to patch same keys
              for (i = aStart; i <= aEnd; i++) {
                  aNode = a[i];
                  if (patched < bLeft) {
                      j = keyIndex[aNode.key];
                      if (isDefined$1(j)) {
                          if (canRemoveWholeContent) {
                              canRemoveWholeContent = false;
                              while (i > aStart) {
                                  remove$3(a[aStart++], dom);
                              }
                          }
                          bNode = b[j];
                          sources[j - bStart] = i;
                          if (pos > j) {
                              moved = true;
                          } else {
                              pos = j;
                          }
                          if (bNode.dom) {
                              b[j] = bNode = directClone(bNode);
                          }
                          patch(aNode, bNode, dom, lifecycle, context, isSVG);
                          patched++;
                      } else if (!canRemoveWholeContent) {
                          remove$3(aNode, dom);
                      }
                  } else if (!canRemoveWholeContent) {
                      remove$3(aNode, dom);
                  }
              }
          }
          // fast-path: if nothing patched remove all old and add all new
          if (canRemoveWholeContent) {
              removeAllChildren(dom, a);
              mountArrayChildren(b, dom, lifecycle, context, isSVG);
          } else {
              if (moved) {
                  var seq = lis_algorithm(sources);
                  j = seq.length - 1;
                  for (i = bLeft - 1; i >= 0; i--) {
                      if (sources[i] === -1) {
                          pos = i + bStart;
                          bNode = b[pos];
                          if (bNode.dom) {
                              b[pos] = bNode = directClone(bNode);
                          }
                          nextPos = pos + 1;
                          insertOrAppend(dom, mount(bNode, null, lifecycle, context, isSVG), nextPos < bLength ? b[nextPos].dom : null);
                      } else if (j < 0 || i !== seq[j]) {
                          pos = i + bStart;
                          bNode = b[pos];
                          nextPos = pos + 1;
                          insertOrAppend(dom, bNode.dom, nextPos < bLength ? b[nextPos].dom : null);
                      } else {
                          j--;
                      }
                  }
              } else if (patched !== bLeft) {
                  // when patched count doesn't match b length we need to insert those new ones
                  // loop backwards so we can use insertBefore
                  for (i = bLeft - 1; i >= 0; i--) {
                      if (sources[i] === -1) {
                          pos = i + bStart;
                          bNode = b[pos];
                          if (bNode.dom) {
                              b[pos] = bNode = directClone(bNode);
                          }
                          nextPos = pos + 1;
                          insertOrAppend(dom, mount(bNode, null, lifecycle, context, isSVG), nextPos < bLength ? b[nextPos].dom : null);
                      }
                  }
              }
          }
      }
  }
  // // https://en.wikipedia.org/wiki/Longest_increasing_subsequence
  function lis_algorithm(arr) {
      var p = arr.slice();
      var result = [0];
      var i;
      var j;
      var u;
      var v;
      var c;
      var len = arr.length;
      for (i = 0; i < len; i++) {
          var arrI = arr[i];
          if (arrI !== -1) {
              j = result[result.length - 1];
              if (arr[j] < arrI) {
                  p[i] = j;
                  result.push(i);
                  continue;
              }
              u = 0;
              v = result.length - 1;
              while (u < v) {
                  c = (u + v) / 2 | 0;
                  if (arr[result[c]] < arrI) {
                      u = c + 1;
                  } else {
                      v = c;
                  }
              }
              if (arrI < arr[result[u]]) {
                  if (u > 0) {
                      p[i] = result[u - 1];
                  }
                  result[u] = i;
              }
          }
      }
      u = result.length;
      v = result[u - 1];
      while (u-- > 0) {
          result[u] = v;
          v = p[v];
      }
      return result;
  }

  var roots = options.roots;
  var documentBody = isBrowser ? document.body : null;
  function render(input, parentDom, callback) {
      if (input === NO_OP) {
          return;
      }
      var rootLen = roots.length;
      var rootInput;
      var index;
      for (index = 0; index < rootLen; index++) {
          if (roots[index] === parentDom) {
              rootInput = parentDom.$V;
              break;
          }
      }
      if (isUndefined$2(rootInput)) {
          if (!isInvalid(input)) {
              if (input.dom) {
                  input = directClone(input);
              }
              if (isNull(parentDom.firstChild)) {
                  mount(input, parentDom, LIFECYCLE, EMPTY_OBJ, false);
                  parentDom.$V = input;
                  roots.push(parentDom);
              } else {
                  hydrate(input, parentDom);
              }
              rootInput = input;
          }
      } else {
          if (isNullOrUndef(input)) {
              remove$3(rootInput, parentDom);
              roots.splice(index, 1);
          } else {
              if (input.dom) {
                  input = directClone(input);
              }
              patch(rootInput, input, parentDom, LIFECYCLE, EMPTY_OBJ, false);
              rootInput = parentDom.$V = input;
          }
      }
      if (LIFECYCLE.length > 0) {
          callAll(LIFECYCLE);
      }
      if (isFunction$1(callback)) {
          callback();
      }
      if (rootInput && rootInput.flags & 14 /* Component */) {
              return rootInput.children;
          }
      return;
  }

  var resolvedPromise = typeof Promise === 'undefined' ? null : Promise.resolve();
  // raf.bind(window) is needed to work around bug in IE10-IE11 strict mode (TypeError: Invalid calling object)
  var fallbackMethod = typeof requestAnimationFrame === 'undefined' ? setTimeout : requestAnimationFrame.bind(window);
  function nextTick(fn) {
      if (resolvedPromise) {
          return resolvedPromise.then(fn);
      }
      return fallbackMethod(fn);
  }
  function queueStateChanges(component, newState, callback) {
      if (isFunction$1(newState)) {
          newState = newState(component.state, component.props, component.context);
      }
      var pending = component.$PS;
      if (isNullOrUndef(pending)) {
          component.$PS = newState;
      } else {
          for (var stateKey in newState) {
              pending[stateKey] = newState[stateKey];
          }
      }
      if (!component.$PSS && !component.$BR) {
          if (!component.$UPD) {
              component.$PSS = true;
              component.$UPD = true;
              applyState(component, false, callback);
              component.$UPD = false;
          } else {
              // Async
              var queue = component.$QU;
              if (isNull(queue)) {
                  queue = component.$QU = [];
                  nextTick(promiseCallback(component, queue));
              }
              if (isFunction$1(callback)) {
                  queue.push(callback);
              }
          }
      } else {
          component.$PSS = true;
          if (component.$BR && isFunction$1(callback)) {
              LIFECYCLE.push(callback.bind(component));
          }
      }
  }
  function promiseCallback(component, queue) {
      return function () {
          component.$QU = null;
          component.$UPD = true;
          applyState(component, false, function () {
              for (var i = 0, len = queue.length; i < len; i++) {
                  queue[i].call(component);
              }
          });
          component.$UPD = false;
      };
  }
  function applyState(component, force, callback) {
      if (component.$UN) {
          return;
      }
      if (force || !component.$BR) {
          component.$PSS = false;
          var pendingState = component.$PS;
          var prevState = component.state;
          var nextState = combineFrom(prevState, pendingState);
          var props = component.props;
          var context = component.context;
          component.$PS = null;
          var vNode = component.$V;
          var lastInput = component.$LI;
          var parentDom = lastInput.dom && lastInput.dom.parentNode;
          updateClassComponent(component, nextState, vNode, props, parentDom, LIFECYCLE, context, (vNode.flags & 32 /* SvgElement */) > 0, force, true);
          if (component.$UN) {
              return;
          }
          if ((component.$LI.flags & 1024 /* Portal */) === 0) {
              var dom = component.$LI.dom;
              while (!isNull(vNode = vNode.parentVNode)) {
                  if ((vNode.flags & 14 /* Component */) > 0) {
                      vNode.dom = dom;
                  }
              }
          }
          if (LIFECYCLE.length > 0) {
              callAll(LIFECYCLE);
          }
      } else {
          component.state = component.$PS;
          component.$PS = null;
      }
      if (isFunction$1(callback)) {
          callback.call(component);
      }
  }
  var Component = function Component(props, context) {
      this.state = null;
      // Internal properties
      this.$BR = false; // BLOCK RENDER
      this.$BS = true; // BLOCK STATE
      this.$PSS = false; // PENDING SET STATE
      this.$PS = null; // PENDING STATE (PARTIAL or FULL)
      this.$LI = null; // LAST INPUT
      this.$V = null; // VNODE
      this.$UN = false; // UNMOUNTED
      this.$CX = null; // CHILDCONTEXT
      this.$UPD = true; // UPDATING
      this.$QU = null; // QUEUE
      /** @type {object} */
      this.props = props || EMPTY_OBJ;
      /** @type {object} */
      this.context = context || EMPTY_OBJ; // context should not be mutable
  };
  Component.prototype.forceUpdate = function forceUpdate(callback) {
      if (this.$UN) {
          return;
      }
      applyState(this, true, callback);
  };
  Component.prototype.setState = function setState(newState, callback) {
      if (this.$UN) {
          return;
      }
      if (!this.$BS) {
          queueStateChanges(this, newState, callback);
      } else {
          return;
      }
  };
  // tslint:disable-next-line:no-empty
  Component.prototype.render = function render(nextProps, nextState, nextContext) {
      return undefined;
  };
  // Public
  Component.defaultProps = null;

  var JSX = /*#__PURE__*/Object.freeze({});

  var _createClass$6 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$7(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$1(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$1(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  var TableComponent = function (_Component) {
    _inherits$1(TableComponent, _Component);

    function TableComponent(props) {
      _classCallCheck$7(this, TableComponent);

      var _this = _possibleConstructorReturn$1(this, (TableComponent.__proto__ || Object.getPrototypeOf(TableComponent)).call(this, props));

      var injector = _this._injector = props.injector;

      _this._sheet = injector.get('sheet');
      _this._changeSupport = injector.get('changeSupport');
      _this._components = injector.get('components');

      _this.onElementsChanged = _this.onElementsChanged.bind(_this);
      return _this;
    }

    _createClass$6(TableComponent, [{
      key: 'onElementsChanged',
      value: function onElementsChanged() {
        this.forceUpdate();
      }
    }, {
      key: 'getChildContext',
      value: function getChildContext() {
        return {
          changeSupport: this._changeSupport,
          components: this._components,
          injector: this._injector
        };
      }
    }, {
      key: 'componentWillMount',
      value: function componentWillMount() {
        var _sheet$getRoot = this._sheet.getRoot(),
            id = _sheet$getRoot.id;

        this._changeSupport.onElementsChanged(id, this.onElementsChanged);
      }
    }, {
      key: 'componentWillUnmount',
      value: function componentWillUnmount() {
        var _sheet$getRoot2 = this._sheet.getRoot(),
            id = _sheet$getRoot2.id;

        this._changeSupport.offElementsChanged(id, this.onElementsChanged);
      }
    }, {
      key: 'render',
      value: function render$$1() {
        var _sheet$getRoot3 = this._sheet.getRoot(),
            rows = _sheet$getRoot3.rows,
            cols = _sheet$getRoot3.cols;

        var beforeTableComponents = this._components.getComponents('table.before');
        var afterTableComponents = this._components.getComponents('table.after');

        var Head = this._components.getComponent('table.head');
        var Body = this._components.getComponent('table.body');
        var Foot = this._components.getComponent('table.foot');

        return createVNode(1, 'div', 'tjs-container', [beforeTableComponents && beforeTableComponents.map(function (Component$$1, index) {
          return createComponentVNode(2, Component$$1, null, index);
        }), createVNode(1, 'table', 'tjs-table', [Head && createComponentVNode(2, Head, {
          'rows': rows,
          'cols': cols
        }), Body && createComponentVNode(2, Body, {
          'rows': rows,
          'cols': cols
        }), Foot && createComponentVNode(2, Foot, {
          'rows': rows,
          'cols': cols
        })], 0), afterTableComponents && afterTableComponents.map(function (Component$$1, index) {
          return createComponentVNode(2, Component$$1, null, index);
        })], 0);
      }
    }]);

    return TableComponent;
  }(Component);

  var _createClass$7 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$8(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var Renderer = function () {
    function Renderer(changeSupport, components, config, eventBus, injector) {
      _classCallCheck$8(this, Renderer);

      var container = config.container;


      this._container = container;

      eventBus.on('root.added', function () {
        render(createComponentVNode(2, TableComponent, {
          'injector': injector
        }), container);
      });

      eventBus.on('root.remove', function () {
        render(null, container);
      });
    }

    _createClass$7(Renderer, [{
      key: 'getContainer',
      value: function getContainer() {
        return this._container;
      }
    }]);

    return Renderer;
  }();


  Renderer.$inject = ['changeSupport', 'components', 'config.renderer', 'eventBus', 'injector'];

  var renderModule = {
    __init__: ['changeSupport', 'components', 'renderer'],
    changeSupport: ['type', ChangeSupport],
    components: ['type', Components],
    renderer: ['type', Renderer]
  };

  var _createClass$8 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$9(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var Sheet = function () {
    function Sheet(elementRegistry, eventBus) {
      var _this = this;

      _classCallCheck$9(this, Sheet);

      this._elementRegistry = elementRegistry;
      this._eventBus = eventBus;

      this._root = null;

      eventBus.on('table.clear', function () {
        _this.setRoot(null);
      });
    }

    _createClass$8(Sheet, [{
      key: 'setRoot',
      value: function setRoot(root) {
        if (this._root) {
          var oldRoot = this._root;

          this._eventBus.fire('root.remove', { root: oldRoot });

          this._root = null;

          this._eventBus.fire('root.removed', { root: oldRoot });
        }

        if (root) {
          this._eventBus.fire('root.add', { root: root });
        }

        this._root = root;

        if (root) {
          this._eventBus.fire('root.added', { root: root });
        }
      }
    }, {
      key: 'getRoot',
      value: function getRoot() {
        if (!this._root) {
          this.setRoot({
            id: '__implicitroot',
            rows: [],
            cols: []
          });
        }

        return this._root;
      }

      /**
       * Add row to sheet.
       *
       * @param {Object} row - Row.
       */

    }, {
      key: 'addRow',
      value: function addRow(row, index) {
        var _this2 = this;

        var root = this.getRoot();

        if (root.cols.length != row.cells.length) {
          throw new Error('number of cells is not equal to number of cols');
        }

        if (typeof index === 'undefined') {
          index = root.rows.length;
        }

        addAtIndex(index, root.rows, row);
        row.root = root;

        this._elementRegistry.add(row);

        row.cells.forEach(function (cell, idx) {
          _this2._elementRegistry.add(cell);

          cell.row = row;
          cell.col = root.cols[idx];

          addAtIndex(index, root.cols[idx].cells, cell);
        });

        this._eventBus.fire('row.add', { row: row });

        return row;
      }

      /**
       * Remove row from sheet.
       *
       * @param {Object|string} row - Row or row ID.
       */

    }, {
      key: 'removeRow',
      value: function removeRow(row) {
        var _this3 = this;

        var root = this.getRoot();

        if (typeof row === 'string') {
          row = this._elementRegistry.get(row);
        }

        var index = root.rows.indexOf(row);

        if (index === -1) {
          return;
        }

        removeAtIndex(index, root.rows);
        row.root = undefined;

        this._elementRegistry.remove(row);

        row.cells.forEach(function (cell, idx) {
          _this3._elementRegistry.remove(cell);

          cell.col = undefined;

          removeAtIndex(index, root.cols[idx].cells);
        });

        this._eventBus.fire('row.remove', { row: row });
      }

      /**
       * Add col to sheet.
       *
       * @param {Object} col
       * @param {Number} [index]
       */

    }, {
      key: 'addCol',
      value: function addCol(col, index) {
        var _this4 = this;

        var root = this.getRoot();

        this._elementRegistry.add(col);

        if (root.rows.length != col.cells.length) {
          throw new Error('number of cells is not equal to number of rows');
        }

        if (typeof index === 'undefined') {
          index = root.cols.length;
        }

        addAtIndex(index, root.cols, col);
        col.root = root;

        col.cells.forEach(function (cell, idx) {
          _this4._elementRegistry.add(cell);

          cell.col = col;
          cell.row = root.rows[idx];

          addAtIndex(index, root.rows[idx].cells, cell);
        });

        this._eventBus.fire('col.add', { col: col });

        return col;
      }

      /**
       * Remove col from sheet.
       *
       * @param {Object|string} col - Col or col ID.
       */

    }, {
      key: 'removeCol',
      value: function removeCol(col) {
        var _this5 = this;

        var root = this.getRoot();

        if (typeof col === 'string') {
          col = this._elementRegistry.get(col);
        }

        var index = root.cols.indexOf(col);

        if (index === -1) {
          return;
        }

        removeAtIndex(index, root.cols);
        col.root = undefined;

        this._elementRegistry.remove(col);

        col.cells.forEach(function (cell, idx) {
          _this5._elementRegistry.remove(cell);

          cell.row = undefined;

          removeAtIndex(index, root.rows[idx].cells);
        });

        this._eventBus.fire('col.remove', { col: col });
      }
    }, {
      key: 'resized',
      value: function resized() {
        this._eventBus.fire('sheet.resized');
      }
    }]);

    return Sheet;
  }();


  Sheet.$inject = ['elementRegistry', 'eventBus'];

  // helpers /////////////

  /**
   * Insert value
   *
   * @param {number} index - Index to insert value at.
   * @param {Array} array - Array to insert value into.
   * @param {*} value - Value to insert.
   */
  function addAtIndex(index, array, value) {
    return array.splice(index, 0, value);
  }

  /**
   *
   * @param {number} index - Index to remove.
   * @param {Array} array - Array to remove from.
   */
  function removeAtIndex(index, array) {
    return array.splice(index, 1);
  }

  var core = {
    __depends__: [renderModule],
    __init__: ['elementFactory', 'sheet'],
    elementFactory: ['type', ElementFactory$1],
    elementRegistry: ['type', ElementRegistry$1],
    eventBus: ['type', EventBus],
    sheet: ['type', Sheet]
  };

  var _createClass$9 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _objectWithoutProperties$1(obj, keys) { var target = {}; for (var i in obj) { if (keys.indexOf(i) >= 0) continue; if (!Object.prototype.hasOwnProperty.call(obj, i)) continue; target[i] = obj[i]; } return target; }

  function _classCallCheck$10(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var Table = function () {
    function Table() {
      var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

      _classCallCheck$10(this, Table);

      var injector = options.injector;


      if (!injector) {
        var _init2 = this._init(options),
            modules = _init2.modules,
            config = _init2.config;

        injector = createInjector$1(config, modules);
      }

      this.get = injector.get;

      this.invoke = injector.invoke;

      this.get('eventBus').fire('table.init');
      this.get('eventBus').fire('diagram.init');
    }

    /**
     * Intialize table and return modules and config used for creation.
     *
     * @param  {Object} options
     *
     * @return {Object} { modules=[], config }
     */


    _createClass$9(Table, [{
      key: '_init',
      value: function _init(options) {
        var modules = options.modules,
            config = _objectWithoutProperties$1(options, ['modules']);

        return { modules: modules, config: config };
      }

      /**
       * Destroys the table. This results in removing the attachment from the container.
       */

    }, {
      key: 'destroy',
      value: function destroy() {
        var eventBus = this.get('eventBus');

        eventBus.fire('table.destroy');
        eventBus.fire('diagram.destroy');
      }

      /**
       * Clears the table. Should be used to reset the state of any stateful services.
       */

    }, {
      key: 'clear',
      value: function clear() {
        var eventBus = this.get('eventBus');

        eventBus.fire('table.clear');
        eventBus.fire('diagram.clear');
      }
    }]);

    return Table;
  }();
  function bootstrap$1(bootstrapModules) {

    var modules = [],
        components = [];

    function hasModule(m) {
      return modules.indexOf(m) >= 0;
    }

    function addModule(m) {
      modules.push(m);
    }

    function visit(m) {
      if (hasModule(m)) {
        return;
      }

      (m.__depends__ || []).forEach(visit);

      if (hasModule(m)) {
        return;
      }

      addModule(m);

      (m.__init__ || []).forEach(function (c) {
        components.push(c);
      });
    }

    bootstrapModules.forEach(visit);

    var injector = new Injector(modules);

    components.forEach(function (c) {

      try {
        // eagerly resolve component (fn or string)
        injector[typeof c === 'string' ? 'get' : 'invoke'](c);
      } catch (e) {
        console.error('Failed to instantiate component');
        console.error(e.stack);

        throw e;
      }
    });

    return injector;
  }

  function createInjector$1(config, modules) {
    var bootstrapModules = [{
      config: ['value', config]
    }, core].concat(modules || []);

    return bootstrap$1(bootstrapModules);
  }

  function elementToString(element) {
    if (!element) {
      return '<null>';
    }

    var id = element.id ? ' id="' + element.id + '"' : '';

    return '<' + element.$type + id + ' />';
  }

  function TableTreeWalker(handler, options) {

    function visit(element, ctx, definitions) {

      var gfx = element.gfx;

      // avoid multiple rendering of elements
      if (gfx) {
        throw new Error('already rendered ' + elementToString(element));
      }

      // call handler
      return handler.element(element, ctx, definitions);
    }

    function visitTable(element) {
      return handler.table(element);
    }

    // Semantic handling //////////////////////

    function handleDecision(decision) {

      if (!decision.id) {
        decision.id = 'decision';
      }

      var table = decision.decisionTable;

      if (table) {

        if (!table.output) {
          throw new Error('missing output for ' + elementToString(table));
        }

        var ctx = visitTable(table);

        if (table.input) {
          handleClauses(table.input, ctx, table);
        }

        handleClauses(table.output, ctx, table);

        // if any input or output clauses (columns) were added
        // make sure that for each rule the according input/output entry is created
        handleRules(table.rule, ctx, table);
      } else {
        throw new Error('no table for ' + elementToString(decision));
      }
    }

    function handleClauses(clauses, context, definitions) {
      forEach(clauses, function (e) {
        visit(e, context, definitions);
      });
    }

    function handleRules(rules, context, definitions) {
      forEach(rules, function (e) {
        visit(e, context, definitions);

        handleEntry(e.inputEntry, e);

        handleEntry(e.outputEntry, e);
      });
    }

    function handleEntry(entry, context, definitions) {
      forEach(entry, function (e) {
        visit(e, context, definitions);
      });
    }

    // API //////////////////////

    return {
      handleDecision: handleDecision
    };
  }

  /**
   * Import the decision table into a table.
   *
   * Errors and warnings are reported through the specified callback.
   *
   * @param  {decisionTable} decisionTable instance of DecisionTable
   * @param  {ModdleElement} decision moddle element
   * @param  {Function} done
   *         the callback, invoked with (err, [ warning ]) once the import is done
   */
  function importDecision(decisionTable, decision, done) {
    var importer = decisionTable.get('tableImporter'),
        eventBus = decisionTable.get('eventBus'),
        sheet = decisionTable.get('sheet');

    var hasModeling = decisionTable.get('modeling', false);

    var error = void 0,
        warnings = [];

    function render(decision) {

      var visitor = {
        create: function create(type, parent, clause, rule) {
          return importer.create(type, parent, clause, rule);
        },
        table: function table(element) {
          return importer.add(element);
        },
        element: function element(_element, parentShape, definitions) {
          return importer.add(_element, parentShape, definitions);
        },
        error: function error(message, context) {
          warnings.push({ message: message, context: context });
        }
      };

      var walker = new TableTreeWalker(visitor, { canAddMissingEntries: hasModeling });

      // import
      walker.handleDecision(decision);
    }

    eventBus.fire('import.render.start', { decision: decision });

    try {
      render(decision);
    } catch (e) {
      error = e;
    }

    eventBus.fire('import.render.complete', {
      error: error,
      warnings: warnings
    });

    eventBus.fire('elements.changed', {
      elements: [sheet.getRoot()]
    });

    done(error, warnings);
  }

  function AnnotationHeader() {
    return createVNode(1, "th", "annotation header", createTextVNode("Annotation"), 2, {
      "rowspan": "3"
    });
  }

  var _typeof$6 = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

  var _extends$3 = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

  function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

  function _toConsumableArray$4(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

  function newSet() {
    return {
      elements: [],
      index: {}
    };
  }

  function add$2(set, element) {
    var elements = set.elements,
        index = set.index;


    if (index[element]) {
      return set;
    } else {
      return {
        elements: [].concat(_toConsumableArray$4(elements), [element]),
        index: _extends$3({}, index, _defineProperty({}, element, true))
      };
    }
  }

  function join(set, separator) {
    return set.elements.join(separator);
  }

  function classNames() {

    var set = newSet();

    for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    args.forEach(function (item) {
      var type = typeof item === 'undefined' ? 'undefined' : _typeof$6(item);

      if (type === 'string' && item.length > 0) {
        set = add$2(set, item);
      } else if (type === 'object' && item !== null) {

        Object.keys(item).forEach(function (key) {
          var value = item[key];

          if (value) {
            set = add$2(set, key);
          }
        });
      }
    });

    return join(set, ' ');
  }

  function _toConsumableArray$5(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

  function inject(component) {

    var Type = component.constructor;

    return injectType(Type, component);
  }

  function injectType(Type, component) {

    var annotation = Type.$inject;

    if (!annotation) {
      return;
    }

    var injector = component.context.injector;


    var setupFn = [].concat(_toConsumableArray$5(annotation), [function () {
      for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
        args[_key] = arguments[_key];
      }

      for (var idx in args) {
        var name = annotation[idx];
        var value = args[idx];

        component[name] = value;
      }
    }]);

    injector.invoke(setupFn);
  }

  /**
   * Composes a number of functions.
   *
   * All receive the the same arguments; the chain is interruped as soon
   * as one function returns a value.
   *
   * @param  {Object}    self
   * @param  {...Function} fns
   *
   * @return {Object}
   */
  function compose(self) {
    for (var _len = arguments.length, fns = Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
      fns[_key - 1] = arguments[_key];
    }

    return function () {
      for (var _len2 = arguments.length, args = Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {
        args[_key2] = arguments[_key2];
      }

      var result = void 0;

      fns.forEach(function (fn) {

        result = fn.call.apply(fn, [self].concat(args));

        if (typeof result !== 'undefined') {
          return false;
        }
      });

      return result;
    }.bind(self);
  }

  /**
   * A Component and injection aware mixin mechanism.
   *
   * @param {Component} component
   * @param {Object|Function} mixinDef
   */
  function mixin(component, mixinDef) {

    Object.keys(mixinDef).forEach(function (key) {

      if (key === '$inject' || key === '__init') {
        return;
      }

      var mixinFn = mixinDef[key];

      if (key === 'constructor') {
        mixinFn.call(component, component.props, component.context);
      }

      var componentFn = component[key];

      if (typeof componentFn !== 'undefined') {
        if (typeof componentFn !== 'function') {
          throw new Error('failed to mixin <' + key + '>: cannot combine with non-fn component value');
        }

        component[key] = compose(component, componentFn, mixinFn);
      } else {
        component[key] = mixinFn.bind(component);
      }
    });

    if ('$inject' in mixinDef) {
      injectType(mixinDef, component);
    }

    // call initializer
    if ('__init' in mixinDef) {
      mixinDef.__init.call(component, component.props, component.context);
    }
  }

  /**
   * A mixin to make an element _selection aware_.
   */
  var SelectionAware = {
    getSelectionClasses: function getSelectionClasses() {
      var _state = this.state,
          selected = _state.selected,
          selectedSecondary = _state.selectedSecondary,
          focussed = _state.focussed;


      return classNames({
        'selected': selected,
        'selected-secondary': selectedSecondary,
        'focussed': focussed
      });
    },
    selectionChanged: function selectionChanged(newSelection) {

      // newSelection = { selected, selectedSecondary, focussed }
      this.setState(newSelection);
    },
    componentWillUpdate: function componentWillUpdate(newProps) {
      if (newProps.elementId !== this.props.elementId) {
        this.updateSelectionSubscription(false);
      }
    },
    componentDidUpdate: function componentDidUpdate(oldProps) {

      if (oldProps.elementId !== this.props.elementId) {
        this.updateSelectionSubscription(true);
      }
    },
    componentDidMount: function componentDidMount() {
      this.updateSelectionSubscription(true);
    },
    componentWillUnmount: function componentWillUnmount() {
      this.updateSelectionSubscription(false);
    },
    updateSelectionSubscription: function updateSelectionSubscription(enable) {
      var elementId = this.props.elementId;


      if (!elementId) {
        return;
      }

      if (elementId) {
        this.eventBus[enable ? 'on' : 'off']('selection.' + elementId + '.changed', this.selectionChanged);
      }
    }
  };

  SelectionAware.$inject = ['eventBus'];

  var _extends$4 = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

  var _createClass$10 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _objectWithoutProperties$2(obj, keys) { var target = {}; for (var i in obj) { if (keys.indexOf(i) >= 0) continue; if (!Object.prototype.hasOwnProperty.call(obj, i)) continue; target[i] = obj[i]; } return target; }

  function _classCallCheck$11(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$2(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$2(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  var BaseCell = function (_Component) {
    _inherits$2(BaseCell, _Component);

    function BaseCell(props, context) {
      _classCallCheck$11(this, BaseCell);

      var _this = _possibleConstructorReturn$2(this, (BaseCell.__proto__ || Object.getPrototypeOf(BaseCell)).call(this, props, context));

      mixin(_this, SelectionAware);

      inject(_this);
      return _this;
    }

    _createClass$10(BaseCell, [{
      key: 'getRenderProps',
      value: function getRenderProps() {
        var _props = this.props,
            className = _props.className,
            elementId = _props.elementId,
            coords = _props.coords,
            props = _objectWithoutProperties$2(_props, ['className', 'elementId', 'coords']);

        for (var _len = arguments.length, cls = Array(_len), _key = 0; _key < _len; _key++) {
          cls[_key] = arguments[_key];
        }

        var baseProps = {
          className: classNames.apply(undefined, cls.concat([this.getSelectionClasses(), className]))
        };

        if (elementId) {
          baseProps['data-element-id'] = elementId;
        }

        if (coords) {
          baseProps['data-coords'] = coords;
        }

        return _extends$4({}, baseProps, props);
      }
    }]);

    return BaseCell;
  }(Component);

  var _extends$5 = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

  var _createClass$11 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$12(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$3(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$3(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  var HeaderCell = function (_BaseCell) {
    _inherits$3(HeaderCell, _BaseCell);

    function HeaderCell(props, context) {
      _classCallCheck$12(this, HeaderCell);

      var _this = _possibleConstructorReturn$3(this, (HeaderCell.__proto__ || Object.getPrototypeOf(HeaderCell)).call(this, props, context));

      _this.state = {};
      return _this;
    }

    _createClass$11(HeaderCell, [{
      key: 'render',
      value: function render$$1() {
        var children = this.props.children;


        var props = this.getRenderProps('cell');

        return normalizeProps(createVNode(1, 'td', null, children, 0, _extends$5({}, props)));
      }
    }]);

    return HeaderCell;
  }(BaseCell);

  var _createClass$12 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$13(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$4(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$4(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  var DiContainer = function (_Component) {
    _inherits$4(DiContainer, _Component);

    function DiContainer() {
      _classCallCheck$13(this, DiContainer);

      return _possibleConstructorReturn$4(this, (DiContainer.__proto__ || Object.getPrototypeOf(DiContainer)).apply(this, arguments));
    }

    _createClass$12(DiContainer, [{
      key: 'getChildContext',
      value: function getChildContext() {

        return {
          injector: this.props.injector
        };
      }
    }, {
      key: 'render',
      value: function render$$1() {
        return this.props.children;
      }
    }]);

    return DiContainer;
  }(Component);

  var _extends$6 = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

  var _createClass$13 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$14(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$5(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$5(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  var HeaderCell$1 = function (_BaseCell) {
    _inherits$5(HeaderCell, _BaseCell);

    function HeaderCell(props, context) {
      _classCallCheck$14(this, HeaderCell);

      var _this = _possibleConstructorReturn$5(this, (HeaderCell.__proto__ || Object.getPrototypeOf(HeaderCell)).call(this, props, context));

      _this.state = {};
      return _this;
    }

    _createClass$13(HeaderCell, [{
      key: 'render',
      value: function render$$1() {
        var children = this.props.children;


        var props = this.getRenderProps('cell', 'header-cell');

        return normalizeProps(createVNode(1, 'th', null, children, 0, _extends$6({}, props)));
      }
    }]);

    return HeaderCell;
  }(BaseCell);

  function AnnotationCell(props) {
    var row = props.row;
    var _row$businessObject = row.businessObject,
        id = _row$businessObject.id,
        description = _row$businessObject.description;


    return createComponentVNode(2, HeaderCell, {
      'className': 'annotation',
      'elementId': id + '__annotation',
      children: description || '-'
    });
  }

  function AnnotationsProvider(components) {

    components.onGetComponent('cell', function (_ref) {
      var cellType = _ref.cellType;


      if (cellType === 'after-label-cells') {
        return AnnotationHeader;
      } else if (cellType === 'after-rule-cells') {
        return AnnotationCell;
      }
    });
  }

  AnnotationsProvider.$inject = ['components'];

  var annotationsModule = {
    __init__: ['annotationsProvider'],
    annotationsProvider: ['type', AnnotationsProvider]
  };

  var _createClass$14 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _toConsumableArray$6(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

  function _classCallCheck$15(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function elementData$1(semantic, attrs) {
    return assign({
      id: semantic.id,
      type: semantic.$type,
      businessObject: semantic
    }, attrs);
  }

  var TableImporter = function () {
    function TableImporter(elementFactory, eventBus, sheet) {
      _classCallCheck$15(this, TableImporter);

      this._elementFactory = elementFactory;
      this._eventBus = eventBus;
      this._sheet = sheet;
    }

    /**
     * Add DMN element.
     */


    _createClass$14(TableImporter, [{
      key: 'add',
      value: function add(semantic) {
        var _this = this;

        var element = void 0;

        // decision table
        if (is(semantic, 'dmn:DecisionTable')) {
          element = this._elementFactory.createRoot(elementData$1(semantic));

          this._sheet.setRoot(element);
        }

        // input clause
        else if (is(semantic, 'dmn:InputClause')) {
            element = this._elementFactory.createCol(elementData$1(semantic));

            this._sheet.addCol(element);
          }

          // output clause
          else if (is(semantic, 'dmn:OutputClause')) {
              element = this._elementFactory.createCol(elementData$1(semantic));

              this._sheet.addCol(element);
            }

            // rule
            else if (is(semantic, 'dmn:DecisionRule')) {
                if (!semantic.inputEntry) {
                  semantic.inputEntry = [];
                }

                if (!semantic.outputEntry) {
                  semantic.outputEntry = [];
                }

                var cells = [].concat(_toConsumableArray$6(semantic.inputEntry), _toConsumableArray$6(semantic.outputEntry)).map(function (entry) {
                  return _this._elementFactory.createCell(elementData$1(entry));
                });

                element = this._elementFactory.createRow(assign(elementData$1(semantic), {
                  cells: cells
                }));

                this._sheet.addRow(element);
              }

        this._eventBus.fire('dmnElement.added', { element: element });

        return element;
      }
    }]);

    return TableImporter;
  }();


  TableImporter.$inject = ['elementFactory', 'eventBus', 'sheet'];

  var importModule = {
    tableImporter: ['type', TableImporter]
  };

  var coreModule = {
    __depends__: [importModule, renderModule]
  };

  var _extends$7 = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

  function _objectWithoutProperties$3(obj, keys) { var target = {}; for (var i in obj) { if (keys.indexOf(i) >= 0) continue; if (!Object.prototype.hasOwnProperty.call(obj, i)) continue; target[i] = obj[i]; } return target; }

  /**
   * A simple slot extension, built upon the components service.
   *
   * @type {Object}
   */
  var ComponentWithSlots = {
    slotFill: function slotFill(slotProps, DefaultFill) {
      var type = slotProps.type,
          context = slotProps.context,
          props = _objectWithoutProperties$3(slotProps, ['type', 'context']);

      var Fill = this.components.getComponent(type, context) || DefaultFill;

      if (Fill) {
        return normalizeProps(createComponentVNode(2, Fill, _extends$7({}, context, props)));
      }

      return null;
    },
    slotFills: function slotFills(slotProps) {
      var type = slotProps.type,
          context = slotProps.context,
          props = _objectWithoutProperties$3(slotProps, ['type', 'context']);

      var fills = this.components.getComponents(type, context);

      return fills.map(function (Fill) {
        return normalizeProps(createComponentVNode(2, Fill, _extends$7({}, context, props)));
      });
    }
  };

  ComponentWithSlots.$inject = ['components'];

  var _createClass$15 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$16(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$6(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$6(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  var DecisionTableHead = function (_Component) {
    _inherits$6(DecisionTableHead, _Component);

    function DecisionTableHead(props, context) {
      _classCallCheck$16(this, DecisionTableHead);

      var _this = _possibleConstructorReturn$6(this, (DecisionTableHead.__proto__ || Object.getPrototypeOf(DecisionTableHead)).call(this, props, context));

      _this.onElementsChanged = function () {
        _this.forceUpdate();
      };

      mixin(_this, ComponentWithSlots);

      _this._sheet = context.injector.get('sheet');

      _this._changeSupport = context.changeSupport;
      return _this;
    }

    _createClass$15(DecisionTableHead, [{
      key: 'componentWillMount',
      value: function componentWillMount() {
        var root = this._sheet.getRoot();

        this._changeSupport.onElementsChanged(root.id, this.onElementsChanged);
      }
    }, {
      key: 'componentWillUnmout',
      value: function componentWillUnmout() {
        var root = this._sheet.getRoot();

        this._changeSupport.offElementsChanged(root.id, this.onElementsChanged);
      }
    }, {
      key: 'render',
      value: function render$$1(props) {
        var _this2 = this;

        var root = this._sheet.getRoot();

        if (!is(root, 'dmn:DMNElement')) {
          return null;
        }

        var businessObject = getBusinessObject(root);

        var inputs = businessObject.input,
            outputs = businessObject.output;

        return createVNode(1, 'thead', null, [createVNode(1, 'tr', null, [this.slotFills({
          type: 'cell',
          context: { cellType: 'before-label-cells' }
        }), this.slotFill({
          type: 'cell',
          context: { cellType: 'input-label' }
        }, DefaultInputLabel), this.slotFill({
          type: 'cell',
          context: { cellType: 'output-label' }
        }, DefaultOutputLabel), this.slotFills({
          type: 'cell',
          context: { cellType: 'after-label-cells' }
        })], 0), createVNode(1, 'tr', null, [inputs && inputs.map(function (input) {
          return _this2.slotFill({
            type: 'cell',
            context: {
              cellType: 'input-header',
              input: input
            },
            key: input.id
          }, DefaultInputHeaderCell);
        }), outputs.map(function (output) {
          return _this2.slotFill({
            type: 'cell',
            context: {
              cellType: 'output-header',
              output: output
            },
            key: output.id
          }, DefaultOutputHeaderCell);
        })], 0), createVNode(1, 'tr', null, [inputs && inputs.map(function (input, index) {
          var inputExpression = input.inputExpression;


          return _this2.slotFill({
            type: 'cell',
            context: {
              cellType: 'input-header-type-ref',
              element: inputExpression
            },
            className: 'input-cell',
            key: input.id
          }, DefaultTypeRefCell);
        }), outputs.map(function (output) {

          return _this2.slotFill({
            type: 'cell',
            context: {
              cellType: 'output-header-type-ref',
              element: output
            },
            className: 'output-cell',
            key: output.id
          }, DefaultTypeRefCell);
        })], 0)], 4);
      }
    }]);

    return DecisionTableHead;
  }(Component);
  function DefaultInputHeaderCell(props) {
    var input = props.input,
        className = props.className;
    var label = input.label,
        inputExpression = input.inputExpression;


    var actualClassName = (className || '') + ' input-cell';

    return createVNode(1, 'th', actualClassName, label ? createVNode(1, 'span', 'input-label', label, 0, {
      'title': 'Input Label'
    }) : createVNode(1, 'span', 'input-expression', inputExpression.text || '-', 0, {
      'title': 'Input Expression'
    }), 0, null, input.id);
  }

  var DefaultInputLabel = function (_Component2) {
    _inherits$6(DefaultInputLabel, _Component2);

    function DefaultInputLabel(props, context) {
      _classCallCheck$16(this, DefaultInputLabel);

      var _this3 = _possibleConstructorReturn$6(this, (DefaultInputLabel.__proto__ || Object.getPrototypeOf(DefaultInputLabel)).call(this, props, context));

      _this3._sheet = context.injector.get('sheet');
      return _this3;
    }

    _createClass$15(DefaultInputLabel, [{
      key: 'render',
      value: function render$$1() {

        var root = this._sheet.getRoot(),
            businessObject = root.businessObject;

        var inputs = businessObject.input;

        if (!inputs || !inputs.length) {
          return null;
        }

        var colspan = businessObject.input.length;

        return createVNode(1, 'th', 'input-cell inputs-label header', createTextVNode('Input'), 2, {
          'colspan': colspan
        });
      }
    }]);

    return DefaultInputLabel;
  }(Component);

  function DefaultOutputHeaderCell(props) {
    var output = props.output,
        className = props.className;
    var label = output.label,
        name = output.name;


    var actualClassName = (className || '') + ' output-cell';

    return createVNode(1, 'th', actualClassName, label ? createVNode(1, 'span', 'output-label', label, 0, {
      'title': 'Output Label'
    }) : createVNode(1, 'span', 'output-name', name || '-', 0, {
      'title': 'Output Name'
    }), 0, null, output.id);
  }

  var DefaultOutputLabel = function (_Component3) {
    _inherits$6(DefaultOutputLabel, _Component3);

    function DefaultOutputLabel(props, context) {
      _classCallCheck$16(this, DefaultOutputLabel);

      var _this4 = _possibleConstructorReturn$6(this, (DefaultOutputLabel.__proto__ || Object.getPrototypeOf(DefaultOutputLabel)).call(this, props, context));

      _this4._sheet = context.injector.get('sheet');
      return _this4;
    }

    _createClass$15(DefaultOutputLabel, [{
      key: 'render',
      value: function render$$1() {
        var root = this._sheet.getRoot(),
            businessObject = root.businessObject,
            colspan = businessObject.output.length;

        return createVNode(1, 'th', 'output-cell outputs-label header', createTextVNode('Output'), 2, {
          'colspan': colspan
        });
      }
    }]);

    return DefaultOutputLabel;
  }(Component);

  function DefaultTypeRefCell(props) {
    var className = props.className,
        element = props.element;


    var actualClassName = className + ' type-ref';

    return createVNode(1, 'th', actualClassName, element.typeRef, 0, {
      'title': 'Data Type'
    });
  }

  function DecisionTableHeadProvider(components) {
    components.onGetComponent('table.head', function () {
      return DecisionTableHead;
    });
  }

  DecisionTableHeadProvider.$inject = ['components'];

  var decisionTableHeadModule = {
    __init__: ['decisionTableHeadProvider'],
    decisionTableHeadProvider: ['type', DecisionTableHeadProvider]
  };

  var _createClass$16 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$17(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$7(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$7(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  var DecisionTablePropertiesComponent = function (_Component) {
    _inherits$7(DecisionTablePropertiesComponent, _Component);

    function DecisionTablePropertiesComponent() {
      _classCallCheck$17(this, DecisionTablePropertiesComponent);

      return _possibleConstructorReturn$7(this, (DecisionTablePropertiesComponent.__proto__ || Object.getPrototypeOf(DecisionTablePropertiesComponent)).apply(this, arguments));
    }

    _createClass$16(DecisionTablePropertiesComponent, [{
      key: 'componentWillMount',
      value: function componentWillMount() {
        var injector = this.context.injector;


        this._sheet = injector.get('sheet');
      }
    }, {
      key: 'render',
      value: function render$$1() {
        var root = this._sheet.getRoot();

        if (!is(root, 'dmn:DMNElement')) {
          return null;
        }

        var _root$businessObject$ = root.businessObject.$parent,
            id = _root$businessObject$.id,
            name = _root$businessObject$.name;


        return createVNode(1, 'header', 'decision-table-properties', [createVNode(1, 'h3', 'decision-table-name', name, 0, {
          'title': 'Decision Name'
        }), createVNode(1, 'h5', 'decision-table-id', id, 0, {
          'title': 'Decision Id'
        })], 4);
      }
    }]);

    return DecisionTablePropertiesComponent;
  }(Component);

  function _classCallCheck$18(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var DecisionTableProperties = function DecisionTableProperties(components) {
    _classCallCheck$18(this, DecisionTableProperties);

    components.onGetComponent('table.before', function () {
      return DecisionTablePropertiesComponent;
    });
  };


  DecisionTableProperties.$inject = ['components'];

  var decisionTablePropertiesModule = {
    __init__: ['decisionTableProperties'],
    decisionTableProperties: ['type', DecisionTableProperties]
  };

  var _createClass$17 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$19(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$8(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$8(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  var DecisionRulesIndexCellComponent = function (_Component) {
    _inherits$8(DecisionRulesIndexCellComponent, _Component);

    function DecisionRulesIndexCellComponent() {
      _classCallCheck$19(this, DecisionRulesIndexCellComponent);

      return _possibleConstructorReturn$8(this, (DecisionRulesIndexCellComponent.__proto__ || Object.getPrototypeOf(DecisionRulesIndexCellComponent)).apply(this, arguments));
    }

    _createClass$17(DecisionRulesIndexCellComponent, [{
      key: 'render',
      value: function render$$1() {
        var _props = this.props,
            row = _props.row,
            rowIndex = _props.rowIndex;
        var components = this.context.components;


        var innerComponents = components.getComponents('cell-inner', {
          cellType: 'rule-index',
          row: row,
          rowIndex: rowIndex
        });

        return createVNode(1, 'td', 'rule-index', [innerComponents && innerComponents.map(function (InnerComponent) {
          return createComponentVNode(2, InnerComponent, {
            'row': row,
            'rowIndex': rowIndex
          });
        }), rowIndex + 1], 0, {
          'data-row-id': row.id
        });
      }
    }]);

    return DecisionRulesIndexCellComponent;
  }(Component);

  function _classCallCheck$20(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var DecisionRuleIndices = function DecisionRuleIndices(components) {
    _classCallCheck$20(this, DecisionRuleIndices);

    components.onGetComponent('cell', function (_ref) {
      var cellType = _ref.cellType;

      if (cellType === 'before-rule-cells') {
        return DecisionRulesIndexCellComponent;
      }
    });
  };


  DecisionRuleIndices.$inject = ['components'];

  var decisionRuleIndicesModule = {
    __init__: ['decisionRuleIndices'],
    decisionRuleIndices: ['type', DecisionRuleIndices]
  };

  var _createClass$18 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$21(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$9(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$9(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  var DecisionRulesBodyComponent = function (_Component) {
    _inherits$9(DecisionRulesBodyComponent, _Component);

    function DecisionRulesBodyComponent() {
      _classCallCheck$21(this, DecisionRulesBodyComponent);

      return _possibleConstructorReturn$9(this, (DecisionRulesBodyComponent.__proto__ || Object.getPrototypeOf(DecisionRulesBodyComponent)).apply(this, arguments));
    }

    _createClass$18(DecisionRulesBodyComponent, [{
      key: 'render',
      value: function render$$1(_ref) {
        var rows = _ref.rows,
            cols = _ref.cols;
        var components = this.context.components;


        return createVNode(1, 'tbody', null, rows.map(function (row, rowIndex) {
          var RowComponent = components.getComponent('row', { rowType: 'rule' });

          return RowComponent && createComponentVNode(2, RowComponent, {
            'row': row,
            'rowIndex': rowIndex,
            'cols': cols
          }, row.id);
        }), 0);
      }
    }]);

    return DecisionRulesBodyComponent;
  }(Component);

  var _createClass$19 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$22(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$10(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$10(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  var DecisionRulesRowComponent = function (_Component) {
    _inherits$10(DecisionRulesRowComponent, _Component);

    function DecisionRulesRowComponent(props, context) {
      _classCallCheck$22(this, DecisionRulesRowComponent);

      var _this = _possibleConstructorReturn$10(this, (DecisionRulesRowComponent.__proto__ || Object.getPrototypeOf(DecisionRulesRowComponent)).call(this, props, context));

      mixin(_this, ComponentWithSlots);
      return _this;
    }

    _createClass$19(DecisionRulesRowComponent, [{
      key: 'render',
      value: function render$$1() {
        var _this2 = this;

        var _props = this.props,
            row = _props.row,
            rowIndex = _props.rowIndex,
            cols = _props.cols;
        var cells = row.cells;


        return createVNode(1, 'tr', null, [this.slotFills({
          type: 'cell',
          context: {
            cellType: 'before-rule-cells',
            row: row,
            rowIndex: rowIndex
          }
        }), cells.map(function (cell, colIndex) {
          return _this2.slotFill({
            type: 'cell',
            context: {
              cellType: 'rule',
              cell: cell,
              rowIndex: rowIndex,
              colIndex: colIndex
            },
            key: cell.id,
            row: row,
            col: cols[colIndex]
          });
        }), this.slotFills({
          type: 'cell',
          context: {
            cellType: 'after-rule-cells',
            row: row,
            rowIndex: rowIndex
          }
        })], 0);
      }
    }]);

    return DecisionRulesRowComponent;
  }(Component);

  var _createClass$20 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$23(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$11(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$11(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  var DecisionRulesCellComponent = function (_Component) {
    _inherits$11(DecisionRulesCellComponent, _Component);

    function DecisionRulesCellComponent() {
      _classCallCheck$23(this, DecisionRulesCellComponent);

      return _possibleConstructorReturn$11(this, (DecisionRulesCellComponent.__proto__ || Object.getPrototypeOf(DecisionRulesCellComponent)).apply(this, arguments));
    }

    _createClass$20(DecisionRulesCellComponent, [{
      key: 'render',
      value: function render$$1() {
        var cell = this.props.cell;


        if (is(cell, 'dmn:UnaryTests')) {
          return createComponentVNode(2, HeaderCell, {
            'className': 'input-cell',
            'elementId': cell.id,
            children: cell.businessObject.text
          });
        } else {
          return createComponentVNode(2, HeaderCell, {
            'className': 'output-cell',
            'elementId': cell.id,
            children: cell.businessObject.text
          });
        }
      }
    }]);

    return DecisionRulesCellComponent;
  }(Component);

  function _classCallCheck$24(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var Rules = function Rules(components) {
    _classCallCheck$24(this, Rules);

    components.onGetComponent('table.body', function () {
      return DecisionRulesBodyComponent;
    });

    components.onGetComponent('row', function (_ref) {
      var rowType = _ref.rowType;

      if (rowType === 'rule') {
        return DecisionRulesRowComponent;
      }
    });

    components.onGetComponent('cell', function (_ref2) {
      var cellType = _ref2.cellType;

      if (cellType === 'rule') {
        return DecisionRulesCellComponent;
      }
    });
  };


  Rules.$inject = ['components'];

  var decisoinRulesModule = {
    __init__: ['decisionRules'],
    decisionRules: ['type', Rules]
  };

  var _createClass$21 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$25(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$12(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$12(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  var HitPolicyCell = function (_Component) {
    _inherits$12(HitPolicyCell, _Component);

    function HitPolicyCell() {
      _classCallCheck$25(this, HitPolicyCell);

      return _possibleConstructorReturn$12(this, (HitPolicyCell.__proto__ || Object.getPrototypeOf(HitPolicyCell)).apply(this, arguments));
    }

    _createClass$21(HitPolicyCell, [{
      key: 'componentWillMount',
      value: function componentWillMount() {
        var injector = this.context.injector;


        this._sheet = injector.get('sheet');
      }
    }, {
      key: 'render',
      value: function render$$1() {
        var root = this._sheet.getRoot(),
            businessObject = root.businessObject,
            hitPolicy = businessObject.hitPolicy,
            hitPolicyLabel = hitPolicy.charAt(0),
            aggregation = businessObject.aggregation;

        var aggregationLabel = getAggregationLabel(aggregation);

        return createVNode(1, 'th', 'hit-policy header', [hitPolicyLabel, aggregationLabel], 0, {
          'rowspan': '3',
          'title': 'Hit Policy = ' + hitPolicy
        });
      }
    }]);

    return HitPolicyCell;
  }(Component);
  function getAggregationLabel(aggregation) {
    switch (aggregation) {
      case 'SUM':
        return '+';
      case 'MIN':
        return '<';
      case 'MAX':
        return '>';
      case 'COUNT':
        return '#';
      default:
        return '';
    }
  }

  function HitPolicyProvider(components) {
    components.onGetComponent('cell', function (_ref) {
      var cellType = _ref.cellType;

      if (cellType === 'before-label-cells') {
        return HitPolicyCell;
      }
    });
  }

  HitPolicyProvider.$inject = ['components'];

  var hitPolicyModule = {
    __init__: ['hitPolicyProvider'],
    hitPolicyProvider: ['type', HitPolicyProvider]
  };

  var _createClass$22 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$26(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$13(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$13(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  var ViewDrdComponent = function (_Component) {
    _inherits$13(ViewDrdComponent, _Component);

    function ViewDrdComponent(props, context) {
      _classCallCheck$26(this, ViewDrdComponent);

      var _this = _possibleConstructorReturn$13(this, (ViewDrdComponent.__proto__ || Object.getPrototypeOf(ViewDrdComponent)).call(this, props, context));

      _this.onClick = function () {
        _this._eventBus.fire('showDrd');
      };

      var injector = context.injector;


      _this._eventBus = injector.get('eventBus');
      return _this;
    }

    _createClass$22(ViewDrdComponent, [{
      key: 'render',
      value: function render$$1() {
        var _this2 = this;

        return createVNode(1, 'div', 'view-drd', createVNode(1, 'button', 'view-drd-button', createTextVNode('View DRD'), 2, {
          'onClick': this.onClick
        }), 2, null, null, function (node) {
          return _this2.node = node;
        });
      }
    }]);

    return ViewDrdComponent;
  }(Component);

  var _createClass$23 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$27(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var ViewDrd = function () {
    function ViewDrd(components, eventBus, injector, sheet) {
      var _this = this;

      _classCallCheck$27(this, ViewDrd);

      this._injector = injector;
      this._sheet = sheet;

      components.onGetComponent('table.before', function () {
        if (_this.canViewDrd()) {
          return ViewDrdComponent;
        }
      });

      eventBus.on('showDrd', function () {
        var parent = injector.get('_parent', false);

        var root = sheet.getRoot();

        var definitions = getDefinitions(root);

        if (!definitions) {
          return;
        }

        // open definitions
        var view = parent.getView(definitions);

        parent.open(view);
      });
    }

    _createClass$23(ViewDrd, [{
      key: 'canViewDrd',
      value: function canViewDrd() {
        var parent = this._injector.get('_parent', false);

        if (!parent) {
          return false;
        }

        var root = this._sheet.getRoot();

        var definitions = getDefinitions(root);

        return !!parent.getView(definitions);
      }
    }]);

    return ViewDrd;
  }();


  ViewDrd.$inject = ['components', 'eventBus', 'injector', 'sheet'];

  // helpers //////////////////////

  function getDefinitions(root) {
    var businessObject = root.businessObject;

    // root might not have business object

    if (!businessObject) {
      return;
    }

    var decision = businessObject.$parent;

    var definitions = decision.$parent;

    return definitions;
  }

  var viewDrdModule = {
    __init__: ['viewDrd'],
    viewDrd: ['type', ViewDrd]
  };

  var _createClass$24 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$28(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$14(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$14(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  // eslint-disable-next-line
  var logo = 'iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAMAAADypuvZAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAADBQTFRFiMte9PrwldFwfcZPqtqN0+zEyOe1XLgjvuKncsJAZ70y6fXh3vDT////UrQV////G2zN+AAAABB0Uk5T////////////////////AOAjXRkAAAHDSURBVHjavJZJkoUgDEBJmAX8979tM8u3E6x20VlYJfFFMoL4vBDxATxZcakIOJTWSmxvKWVIkJ8jHvlRv1F2LFrVISCZI+tCtQx+XfewgVTfyY3plPiQEAzI3zWy+kR6NBhFBYeBuscJLOUuA2WVLpCjVIaFzrNQZArxAZKUQm6gsj37L9Cb7dnIBUKxENaaMJQqMpDXvSL+ktxdGRm2IsKgJGGPg7atwUG5CcFUEuSv+CwQqizTrvDTNXdMU2bMiDWZd8d7QIySWVRsb2vBBioxOFt4OinPBapL+neAb5KL5IJ8szOza2/DYoipUCx+CjO0Bpsv0V6mktNZ+k8rlABlWG0FrOpKYVo8DT3dBeLEjUBAj7moDogVii7nSS9QzZnFcOVBp1g2PyBQ3Vr5aIapN91VJy33HTJLC1iX2FY6F8gRdaAeIEfVONgtFCzZTmoLEdOjBDfsIOA6128gw3eu1shAajdZNAORxuQDJN5A5PbEG6gNIu24QJD5iNyRMZIr6bsHbCtCU/OaOaSvgkUyDMdDa1BXGf5HJ1To+/Ym6mCKT02Y+/Sa126ZKyd3jxhzpc1r8zVL6YM1Qy/kR4ABAFJ6iQUnivhAAAAAAElFTkSuQmCC';

  var PoweredByLogoComponent = function (_Component) {
    _inherits$14(PoweredByLogoComponent, _Component);

    function PoweredByLogoComponent(props, context) {
      _classCallCheck$28(this, PoweredByLogoComponent);

      var _this = _possibleConstructorReturn$14(this, (PoweredByLogoComponent.__proto__ || Object.getPrototypeOf(PoweredByLogoComponent)).call(this, props, context));

      _this.onClick = function () {
        _this._eventBus.fire('poweredBy.show');
      };

      var injector = context.injector;


      _this._eventBus = injector.get('eventBus');
      return _this;
    }

    _createClass$24(PoweredByLogoComponent, [{
      key: 'render',
      value: function render$$1() {
        var _this2 = this;

        return createVNode(1, 'div', 'powered-by-logo', createVNode(1, 'img', 'logo', null, 1, {
          'src': 'data:image/png;base64,' + logo
        }), 2, {
          'onClick': this.onClick,
          'title': 'Powered by bpmn.io'
        }, null, function (node) {
          return _this2.node = node;
        });
      }
    }]);

    return PoweredByLogoComponent;
  }(Component);

  var _createClass$25 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$29(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$15(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$15(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  // eslint-disable-next-line
  var logo$1 = 'iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAMAAADypuvZAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAADBQTFRFiMte9PrwldFwfcZPqtqN0+zEyOe1XLgjvuKncsJAZ70y6fXh3vDT////UrQV////G2zN+AAAABB0Uk5T////////////////////AOAjXRkAAAHDSURBVHjavJZJkoUgDEBJmAX8979tM8u3E6x20VlYJfFFMoL4vBDxATxZcakIOJTWSmxvKWVIkJ8jHvlRv1F2LFrVISCZI+tCtQx+XfewgVTfyY3plPiQEAzI3zWy+kR6NBhFBYeBuscJLOUuA2WVLpCjVIaFzrNQZArxAZKUQm6gsj37L9Cb7dnIBUKxENaaMJQqMpDXvSL+ktxdGRm2IsKgJGGPg7atwUG5CcFUEuSv+CwQqizTrvDTNXdMU2bMiDWZd8d7QIySWVRsb2vBBioxOFt4OinPBapL+neAb5KL5IJ8szOza2/DYoipUCx+CjO0Bpsv0V6mktNZ+k8rlABlWG0FrOpKYVo8DT3dBeLEjUBAj7moDogVii7nSS9QzZnFcOVBp1g2PyBQ3Vr5aIapN91VJy33HTJLC1iX2FY6F8gRdaAeIEfVONgtFCzZTmoLEdOjBDfsIOA6128gw3eu1shAajdZNAORxuQDJN5A5PbEG6gNIu24QJD5iNyRMZIr6bsHbCtCU/OaOaSvgkUyDMdDa1BXGf5HJ1To+/Ym6mCKT02Y+/Sa126ZKyd3jxhzpc1r8zVL6YM1Qy/kR4ABAFJ6iQUnivhAAAAAAElFTkSuQmCC';

  var PoweredByOverlayComponent = function (_Component) {
    _inherits$15(PoweredByOverlayComponent, _Component);

    function PoweredByOverlayComponent(props) {
      _classCallCheck$29(this, PoweredByOverlayComponent);

      var _this = _possibleConstructorReturn$15(this, (PoweredByOverlayComponent.__proto__ || Object.getPrototypeOf(PoweredByOverlayComponent)).call(this, props));

      _this.state = {
        show: false
      };

      _this.onClick = _this.onClick.bind(_this);
      _this.onShow = _this.onShow.bind(_this);
      return _this;
    }

    _createClass$25(PoweredByOverlayComponent, [{
      key: 'onClick',
      value: function onClick() {
        this.setState({
          show: false
        });
      }
    }, {
      key: 'onShow',
      value: function onShow() {
        this.setState({
          show: true
        });
      }
    }, {
      key: 'componentWillMount',
      value: function componentWillMount() {
        var eventBus = this._eventBus = this.context.injector.get('eventBus');

        eventBus.on('poweredBy.show', this.onShow);
      }
    }, {
      key: 'componentWillUnmount',
      value: function componentWillUnmount() {
        this._eventBus.off('poweredBy.show', this.onShow);
      }
    }, {
      key: 'render',
      value: function render$$1() {
        var show = this.state.show;


        return show && createVNode(1, 'div', 'powered-by-overlay', createVNode(1, 'div', 'powered-by-overlay-content', [createVNode(1, 'div', null, createVNode(1, 'img', 'logo', null, 1, {
          'src': 'data:image/png;base64,' + logo$1
        }), 2), createVNode(1, 'div', null, [createTextVNode('Web-based tooling for BPMN, DMN and CMMN diagrams powered by '), createVNode(1, 'a', null, createTextVNode('bpmn.io'), 2, {
          'href': 'http://bpmn.io',
          'target': '_blank'
        }), createTextVNode('.')], 4)], 4, {
          'onClick': function onClick(e) {
            return e.stopPropagation();
          }
        }), 2, {
          'onClick': this.onClick
        });
      }
    }]);

    return PoweredByOverlayComponent;
  }(Component);

  function _classCallCheck$30(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var PoweredBy = function PoweredBy(components, eventBus) {
    _classCallCheck$30(this, PoweredBy);

    components.onGetComponent('table.before', function () {
      return PoweredByLogoComponent;
    });

    components.onGetComponent('table.before', function () {
      return PoweredByOverlayComponent;
    });
  };


  PoweredBy.$inject = ['components', 'eventBus'];

  var PoweredByModule = {
    __init__: ['poweredBy'],
    poweredBy: ['type', PoweredBy]
  };

  var _createClass$26 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  var _get = function get(object, property, receiver) { if (object === null) object = Function.prototype; var desc = Object.getOwnPropertyDescriptor(object, property); if (desc === undefined) { var parent = Object.getPrototypeOf(object); if (parent === null) { return undefined; } else { return get(parent, property, receiver); } } else if ("value" in desc) { return desc.value; } else { var getter = desc.get; if (getter === undefined) { return undefined; } return getter.call(receiver); } };

  function _toConsumableArray$7(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

  function _objectWithoutProperties$4(obj, keys$$1) { var target = {}; for (var i in obj) { if (keys$$1.indexOf(i) >= 0) continue; if (!Object.prototype.hasOwnProperty.call(obj, i)) continue; target[i] = obj[i]; } return target; }

  function _classCallCheck$31(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$16(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$16(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  var Viewer$1 = function (_Table) {
    _inherits$16(Viewer, _Table);

    function Viewer() {
      var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

      _classCallCheck$31(this, Viewer);

      var container = Viewer._createContainer();

      var _this = _possibleConstructorReturn$16(this, (Viewer.__proto__ || Object.getPrototypeOf(Viewer)).call(this, assign(options, {
        renderer: {
          container: container
        }
      })));

      _this._container = container;
      return _this;
    }

    _createClass$26(Viewer, [{
      key: 'open',
      value: function open(decision, done) {

        var err;

        // use try/catch to not swallow synchronous exceptions
        // that may be raised during model parsing
        try {

          if (this._decision) {
            // clear existing rendered diagram
            this.clear();
          }

          // update decision
          this._decision = decision;

          // perform import
          return importDecision(this, decision, done);
        } catch (e) {
          err = e;
        }

        // handle synchronously thrown exception
        return done(err);
      }

      /**
       * Initialize the table, returning { modules: [], config }.
       *
       * @param  {Object} options
       *
       * @return {Object} init config
       */

    }, {
      key: '_init',
      value: function _init(options) {
        var modules = options.modules,
            additionalModules = options.additionalModules,
            config = _objectWithoutProperties$4(options, ['modules', 'additionalModules']);

        var baseModules = modules || this.getModules();
        var extraModules = additionalModules || [];
        var staticModules = [{
          decisionTable: ['value', this]
        }];

        var allModules = [PoweredByModule].concat(_toConsumableArray$7(baseModules), _toConsumableArray$7(extraModules), staticModules);

        return {
          modules: allModules,
          config: config
        };
      }

      /**
       * Register an event listener
       *
       * Remove a previously added listener via {@link #off(event, callback)}.
       *
       * @param {String} event
       * @param {Number} [priority]
       * @param {Function} callback
       * @param {Object} [that]
       */

    }, {
      key: 'on',
      value: function on(event, priority, callback, target) {
        return this.get('eventBus').on(event, priority, callback, target);
      }

      /**
       * De-register an event listener
       *
       * @param {String} event
       * @param {Function} callback
       */

    }, {
      key: 'off',
      value: function off(event, callback) {
        this.get('eventBus').off(event, callback);
      }

      /**
       * Emit an event on the underlying {@link EventBus}
       *
       * @param  {String} type
       * @param  {Object} event
       *
       * @return {Object} event processing result (if any)
       */

    }, {
      key: '_emit',
      value: function _emit(type, event) {
        return this.get('eventBus').fire(type, event);
      }

      /**
       * Attach viewer to given parent node.
       *
       * @param  {Element} parentNode
       */

    }, {
      key: 'attachTo',
      value: function attachTo(parentNode) {

        if (!parentNode) {
          throw new Error('parentNode required');
        }

        // ensure we detach from the
        // previous, old parent
        this.detach();

        var container = this._container;

        parentNode.appendChild(container);

        this._emit('attach', {});
      }

      /**
       * Detach viewer from parent node, if attached.
       */

    }, {
      key: 'detach',
      value: function detach() {

        var container = this._container,
            parentNode = container.parentNode;

        if (!parentNode) {
          return;
        }

        this._emit('detach', {});

        remove(container);
      }
    }, {
      key: 'destroy',
      value: function destroy() {
        _get(Viewer.prototype.__proto__ || Object.getPrototypeOf(Viewer.prototype), 'destroy', this).call(this);

        this.detach();
      }
    }, {
      key: 'getModules',
      value: function getModules() {
        return Viewer._getModules();
      }
    }], [{
      key: '_getModules',
      value: function _getModules() {
        return [annotationsModule, coreModule, decisionTableHeadModule, decisionTablePropertiesModule, decisionRuleIndicesModule, decisoinRulesModule, hitPolicyModule, viewDrdModule];
      }
    }, {
      key: '_createContainer',
      value: function _createContainer() {
        return domify('<div class="dmn-decision-table-container"></div>');
      }
    }]);

    return Viewer;
  }(Table);

  var _createClass$27 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$32(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var ChangeSupport$1 = function () {
    function ChangeSupport(eventBus) {
      var _this = this;

      _classCallCheck$32(this, ChangeSupport);

      this._listeners = {};

      eventBus.on('elements.changed', function (_ref) {
        var elements = _ref.elements;

        _this.elementsChanged(elements);
      });

      eventBus.on('root.remove', function (context) {
        var oldRootId = context.root.id;

        if (_this._listeners[oldRootId]) {

          eventBus.once('root.add', function (context) {
            var newRootId = context.root.id;

            _this._listeners[newRootId] = _this._listeners[oldRootId];

            delete _this._listeners[oldRootId];
          });
        }
      });
    }

    _createClass$27(ChangeSupport, [{
      key: 'elementsChanged',
      value: function elementsChanged(elements) {
        var invoked = {};

        var elementsLength = elements.length;

        for (var i = 0; i < elementsLength; i++) {
          var id = elements[i].id;


          if (invoked[id]) {
            return;
          }

          invoked[id] = true;

          var listenersLength = this._listeners[id] && this._listeners[id].length;

          if (listenersLength) {
            for (var j = 0; j < listenersLength; j++) {

              // listeners might remove themselves before they get called
              this._listeners[id][j] && this._listeners[id][j]();
            }
          }
        }
      }
    }, {
      key: 'onElementsChanged',
      value: function onElementsChanged(id, listener) {
        if (!this._listeners[id]) {
          this._listeners[id] = [];
        }

        // avoid push for better performance
        this._listeners[id][this._listeners[id].length] = listener;
      }
    }, {
      key: 'offElementsChanged',
      value: function offElementsChanged(id, listener) {
        if (!this._listeners[id]) {
          return;
        }

        if (listener) {
          var idx = this._listeners[id].indexOf(listener);

          if (idx !== -1) {
            this._listeners[id].splice(idx, 1);
          }
        } else {
          this._listeners[id].length = 0;
        }
      }
    }]);

    return ChangeSupport;
  }();


  ChangeSupport$1.$inject = ['eventBus'];

  var _createClass$28 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$33(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var DEFAULT_PRIORITY$2 = 1000;

  var Components$1 = function () {
    function Components() {
      _classCallCheck$33(this, Components);

      this._listeners = {};
    }

    _createClass$28(Components, [{
      key: 'getComponent',
      value: function getComponent(type, context) {
        var listeners = this._listeners[type];

        if (!listeners) {
          return;
        }

        var component = void 0;

        for (var i = 0; i < listeners.length; i++) {
          component = listeners[i].callback(context);

          if (component) {
            break;
          }
        }

        return component;
      }
    }, {
      key: 'getComponents',
      value: function getComponents(type, context) {
        var listeners = this._listeners[type];

        if (!listeners) {
          return;
        }

        var components = [];

        for (var i = 0; i < listeners.length; i++) {
          var component = listeners[i].callback(context);

          if (component) {
            components.push(component);
          }
        }

        if (!components.length) {
          return;
        }

        return components;
      }
    }, {
      key: 'onGetComponent',
      value: function onGetComponent(type, priority, callback) {
        if (isFunction(priority)) {
          callback = priority;
          priority = DEFAULT_PRIORITY$2;
        }

        if (!isNumber(priority)) {
          throw new Error('priority must be a number');
        }

        var listeners = this._getListeners(type);

        var existingListener = void 0,
            idx = void 0;

        var newListener = { priority: priority, callback: callback };

        for (idx = 0; existingListener = listeners[idx]; idx++) {
          if (existingListener.priority < priority) {

            // prepend newListener at before existingListener
            listeners.splice(idx, 0, newListener);
            return;
          }
        }

        listeners.push(newListener);
      }
    }, {
      key: 'offGetComponent',
      value: function offGetComponent(type, callback) {
        var listeners = this._getListeners(type);

        var listener = void 0,
            listenerCallback = void 0,
            idx = void 0;

        if (callback) {

          // move through listeners from back to front
          // and remove matching listeners
          for (idx = listeners.length - 1; listener = listeners[idx]; idx--) {
            listenerCallback = listener.callback;

            if (listenerCallback === callback) {
              listeners.splice(idx, 1);
            }
          }
        } else {
          // clear listeners
          listeners.length = 0;
        }
      }
    }, {
      key: '_getListeners',
      value: function _getListeners(type) {
        var listeners = this._listeners[type];

        if (!listeners) {
          this._listeners[type] = listeners = [];
        }

        return listeners;
      }
    }]);

    return Components;
  }();

  var _createClass$29 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$34(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$17(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$17(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  var ViewerComponent = function (_Component) {
    _inherits$17(ViewerComponent, _Component);

    function ViewerComponent(props) {
      _classCallCheck$34(this, ViewerComponent);

      var _this = _possibleConstructorReturn$17(this, (ViewerComponent.__proto__ || Object.getPrototypeOf(ViewerComponent)).call(this, props));

      var injector = _this._injector = props.injector;

      _this._changeSupport = injector.get('changeSupport');
      _this._components = injector.get('components');
      _this._renderer = injector.get('renderer');
      return _this;
    }

    _createClass$29(ViewerComponent, [{
      key: 'getChildContext',
      value: function getChildContext() {
        return {
          changeSupport: this._changeSupport,
          components: this._components,
          renderer: this._renderer,
          injector: this._injector
        };
      }
    }, {
      key: 'render',
      value: function render$$1() {
        var components = this._components.getComponents('viewer');

        return createVNode(1, 'div', 'viewer-container', components && components.map(function (Component$$1, index) {
          return createComponentVNode(2, Component$$1, null, index);
        }), 0);
      }
    }]);

    return ViewerComponent;
  }(Component);

  var _createClass$30 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$35(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var Renderer$1 = function () {
    function Renderer(changeSupport, components, config, eventBus, injector) {
      _classCallCheck$35(this, Renderer);

      var container = config.container;


      this._container = container;

      eventBus.on('renderer.mount', function () {
        render(createComponentVNode(2, ViewerComponent, {
          'injector': injector
        }), container);
      });

      eventBus.on('renderer.unmount', function () {
        render(null, container);
      });
    }

    _createClass$30(Renderer, [{
      key: 'getContainer',
      value: function getContainer() {
        return this._container;
      }
    }]);

    return Renderer;
  }();


  Renderer$1.$inject = ['changeSupport', 'components', 'config.renderer', 'eventBus', 'injector'];

  var core$1 = {
    __init__: ['changeSupport', 'components', 'renderer'],
    changeSupport: ['type', ChangeSupport$1],
    components: ['type', Components$1],
    eventBus: ['type', EventBus],
    renderer: ['type', Renderer$1]
  };

  var _createClass$31 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _objectWithoutProperties$5(obj, keys) { var target = {}; for (var i in obj) { if (keys.indexOf(i) >= 0) continue; if (!Object.prototype.hasOwnProperty.call(obj, i)) continue; target[i] = obj[i]; } return target; }

  function _classCallCheck$36(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var Viewer$2 = function () {
    function Viewer() {
      var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

      _classCallCheck$36(this, Viewer);

      var injector = options.injector;


      if (!injector) {
        var _init2 = this._init(options),
            modules = _init2.modules,
            config = _init2.config;

        injector = createInjector$2(config, modules);
      }

      this.get = injector.get;

      this.invoke = injector.invoke;

      this.get('eventBus').fire('viewer.init');
    }

    /**
     * Intialize and return modules and config used for creation.
     *
     * @param  {Object} options
     *
     * @return {Object} { modules=[], config }
     */


    _createClass$31(Viewer, [{
      key: '_init',
      value: function _init(options) {
        var modules = options.modules,
            config = _objectWithoutProperties$5(options, ['modules']);

        return { modules: modules, config: config };
      }

      /**
       * Destroy. This results in removing the attachment from the container.
       */

    }, {
      key: 'destroy',
      value: function destroy() {
        var eventBus = this.get('eventBus');

        eventBus.fire('viewer.destroy');
      }

      /**
       * Clear. Should be used to reset the state of any stateful services.
       */

    }, {
      key: 'clear',
      value: function clear() {
        var eventBus = this.get('eventBus');

        eventBus.fire('viewer.clear');
      }
    }]);

    return Viewer;
  }();
  function bootstrap$2(bootstrapModules) {

    var modules = [],
        components = [];

    function hasModule(m) {
      return modules.indexOf(m) >= 0;
    }

    function addModule(m) {
      modules.push(m);
    }

    function visit(m) {
      if (hasModule(m)) {
        return;
      }

      (m.__depends__ || []).forEach(visit);

      if (hasModule(m)) {
        return;
      }

      addModule(m);

      (m.__init__ || []).forEach(function (c) {
        components.push(c);
      });
    }

    bootstrapModules.forEach(visit);

    var injector = new Injector(modules);

    components.forEach(function (c) {

      try {
        // eagerly resolve component (fn or string)
        injector[typeof c === 'string' ? 'get' : 'invoke'](c);
      } catch (e) {
        console.error('Failed to instantiate component');
        console.error(e.stack);

        throw e;
      }
    });

    return injector;
  }

  function createInjector$2(config, modules) {
    var bootstrapModules = [{
      config: ['value', config]
    }, core$1].concat(modules || []);

    return bootstrap$2(bootstrapModules);
  }

  var _createClass$32 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$37(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$18(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$18(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  var DecisionPropertiesComponent = function (_Component) {
    _inherits$18(DecisionPropertiesComponent, _Component);

    function DecisionPropertiesComponent(props, context) {
      _classCallCheck$37(this, DecisionPropertiesComponent);

      var _this = _possibleConstructorReturn$18(this, (DecisionPropertiesComponent.__proto__ || Object.getPrototypeOf(DecisionPropertiesComponent)).call(this, props, context));

      _this._viewer = context.injector.get('viewer');
      return _this;
    }

    _createClass$32(DecisionPropertiesComponent, [{
      key: 'render',
      value: function render$$1() {
        var _viewer$_decision = this._viewer._decision,
            name = _viewer$_decision.name,
            id = _viewer$_decision.id;


        return createVNode(1, 'div', 'decision-properties', [createVNode(1, 'h3', 'decision-name', name, 0), createVNode(1, 'h5', 'decision-id', id, 0)], 4);
      }
    }]);

    return DecisionPropertiesComponent;
  }(Component);

  function _classCallCheck$38(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var HIGH_PRIORITY = 2000;

  var DecisionProperties = function DecisionProperties(components) {
    _classCallCheck$38(this, DecisionProperties);

    components.onGetComponent('viewer', HIGH_PRIORITY, function () {
      return DecisionPropertiesComponent;
    });
  };


  DecisionProperties.$inject = ['components'];

  var DecisionPropertiesModule = {
    __init__: ['decisionProperties'],
    decisionProperties: ['type', DecisionProperties]
  };

  var _createClass$33 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$39(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$19(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$19(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  var LiteralExpressionPropertiesComponent = function (_Component) {
    _inherits$19(LiteralExpressionPropertiesComponent, _Component);

    function LiteralExpressionPropertiesComponent(props, context) {
      _classCallCheck$39(this, LiteralExpressionPropertiesComponent);

      var _this = _possibleConstructorReturn$19(this, (LiteralExpressionPropertiesComponent.__proto__ || Object.getPrototypeOf(LiteralExpressionPropertiesComponent)).call(this, props, context));

      _this._viewer = context.injector.get('viewer');
      return _this;
    }

    _createClass$33(LiteralExpressionPropertiesComponent, [{
      key: 'render',
      value: function render$$1() {
        var _viewer$_decision = this._viewer._decision,
            literalExpression = _viewer$_decision.literalExpression,
            variable = _viewer$_decision.variable;


        return createVNode(1, 'div', 'literal-expression-properties', createVNode(1, 'table', null, [createVNode(1, 'tr', null, [createVNode(1, 'td', null, createTextVNode('Variable Name:'), 2), createVNode(1, 'td', null, createVNode(1, 'span', null, variable.name || '-', 0), 2)], 4), createVNode(1, 'tr', null, [createVNode(1, 'td', null, createTextVNode('Variable Type:'), 2), createVNode(1, 'td', null, createVNode(1, 'span', null, variable.typeRef || '-', 0), 2)], 4), createVNode(1, 'tr', null, [createVNode(1, 'td', null, createTextVNode('Expression Language:'), 2), createVNode(1, 'td', null, createVNode(1, 'span', null, literalExpression.expressionLanguage || '-', 0), 2)], 4)], 4), 2);
      }
    }]);

    return LiteralExpressionPropertiesComponent;
  }(Component);

  function _classCallCheck$40(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var LOW_PRIORITY$3 = 500;

  var DecisionProperties$1 = function DecisionProperties(components) {
    _classCallCheck$40(this, DecisionProperties);

    components.onGetComponent('viewer', LOW_PRIORITY$3, function () {
      return LiteralExpressionPropertiesComponent;
    });
  };


  DecisionProperties$1.$inject = ['components'];

  var LiteralExpressionPropertiesModule = {
    __init__: ['literalExpressionProperties'],
    literalExpressionProperties: ['type', DecisionProperties$1]
  };

  var _createClass$34 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$41(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$20(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$20(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  // eslint-disable-next-line
  var logo$2 = 'iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAMAAADypuvZAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAADBQTFRFiMte9PrwldFwfcZPqtqN0+zEyOe1XLgjvuKncsJAZ70y6fXh3vDT////UrQV////G2zN+AAAABB0Uk5T////////////////////AOAjXRkAAAHDSURBVHjavJZJkoUgDEBJmAX8979tM8u3E6x20VlYJfFFMoL4vBDxATxZcakIOJTWSmxvKWVIkJ8jHvlRv1F2LFrVISCZI+tCtQx+XfewgVTfyY3plPiQEAzI3zWy+kR6NBhFBYeBuscJLOUuA2WVLpCjVIaFzrNQZArxAZKUQm6gsj37L9Cb7dnIBUKxENaaMJQqMpDXvSL+ktxdGRm2IsKgJGGPg7atwUG5CcFUEuSv+CwQqizTrvDTNXdMU2bMiDWZd8d7QIySWVRsb2vBBioxOFt4OinPBapL+neAb5KL5IJ8szOza2/DYoipUCx+CjO0Bpsv0V6mktNZ+k8rlABlWG0FrOpKYVo8DT3dBeLEjUBAj7moDogVii7nSS9QzZnFcOVBp1g2PyBQ3Vr5aIapN91VJy33HTJLC1iX2FY6F8gRdaAeIEfVONgtFCzZTmoLEdOjBDfsIOA6128gw3eu1shAajdZNAORxuQDJN5A5PbEG6gNIu24QJD5iNyRMZIr6bsHbCtCU/OaOaSvgkUyDMdDa1BXGf5HJ1To+/Ym6mCKT02Y+/Sa126ZKyd3jxhzpc1r8zVL6YM1Qy/kR4ABAFJ6iQUnivhAAAAAAElFTkSuQmCC';

  var PoweredByLogoComponent$1 = function (_Component) {
    _inherits$20(PoweredByLogoComponent, _Component);

    function PoweredByLogoComponent(props, context) {
      _classCallCheck$41(this, PoweredByLogoComponent);

      var _this = _possibleConstructorReturn$20(this, (PoweredByLogoComponent.__proto__ || Object.getPrototypeOf(PoweredByLogoComponent)).call(this, props, context));

      _this.onClick = function () {
        _this._eventBus.fire('poweredBy.show');
      };

      var injector = context.injector;


      _this._eventBus = injector.get('eventBus');
      return _this;
    }

    _createClass$34(PoweredByLogoComponent, [{
      key: 'render',
      value: function render$$1() {
        var _this2 = this;

        return createVNode(1, 'div', 'powered-by-logo', createVNode(1, 'img', 'logo', null, 1, {
          'src': 'data:image/png;base64,' + logo$2
        }), 2, {
          'onClick': this.onClick,
          'title': 'Powered by bpmn.io'
        }, null, function (node) {
          return _this2.node = node;
        });
      }
    }]);

    return PoweredByLogoComponent;
  }(Component);

  var _createClass$35 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$42(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$21(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$21(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  // eslint-disable-next-line
  var logo$3 = 'iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAMAAADypuvZAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAADBQTFRFiMte9PrwldFwfcZPqtqN0+zEyOe1XLgjvuKncsJAZ70y6fXh3vDT////UrQV////G2zN+AAAABB0Uk5T////////////////////AOAjXRkAAAHDSURBVHjavJZJkoUgDEBJmAX8979tM8u3E6x20VlYJfFFMoL4vBDxATxZcakIOJTWSmxvKWVIkJ8jHvlRv1F2LFrVISCZI+tCtQx+XfewgVTfyY3plPiQEAzI3zWy+kR6NBhFBYeBuscJLOUuA2WVLpCjVIaFzrNQZArxAZKUQm6gsj37L9Cb7dnIBUKxENaaMJQqMpDXvSL+ktxdGRm2IsKgJGGPg7atwUG5CcFUEuSv+CwQqizTrvDTNXdMU2bMiDWZd8d7QIySWVRsb2vBBioxOFt4OinPBapL+neAb5KL5IJ8szOza2/DYoipUCx+CjO0Bpsv0V6mktNZ+k8rlABlWG0FrOpKYVo8DT3dBeLEjUBAj7moDogVii7nSS9QzZnFcOVBp1g2PyBQ3Vr5aIapN91VJy33HTJLC1iX2FY6F8gRdaAeIEfVONgtFCzZTmoLEdOjBDfsIOA6128gw3eu1shAajdZNAORxuQDJN5A5PbEG6gNIu24QJD5iNyRMZIr6bsHbCtCU/OaOaSvgkUyDMdDa1BXGf5HJ1To+/Ym6mCKT02Y+/Sa126ZKyd3jxhzpc1r8zVL6YM1Qy/kR4ABAFJ6iQUnivhAAAAAAElFTkSuQmCC';

  var PoweredByOverlayComponent$1 = function (_Component) {
    _inherits$21(PoweredByOverlayComponent, _Component);

    function PoweredByOverlayComponent(props) {
      _classCallCheck$42(this, PoweredByOverlayComponent);

      var _this = _possibleConstructorReturn$21(this, (PoweredByOverlayComponent.__proto__ || Object.getPrototypeOf(PoweredByOverlayComponent)).call(this, props));

      _this.state = {
        show: false
      };

      _this.onClick = _this.onClick.bind(_this);
      _this.onShow = _this.onShow.bind(_this);
      return _this;
    }

    _createClass$35(PoweredByOverlayComponent, [{
      key: 'onClick',
      value: function onClick() {
        this.setState({
          show: false
        });
      }
    }, {
      key: 'onShow',
      value: function onShow() {
        this.setState({
          show: true
        });
      }
    }, {
      key: 'componentWillMount',
      value: function componentWillMount() {
        var eventBus = this._eventBus = this.context.injector.get('eventBus');

        eventBus.on('poweredBy.show', this.onShow);
      }
    }, {
      key: 'componentWillUnmount',
      value: function componentWillUnmount() {
        this._eventBus.off('poweredBy.show', this.onShow);
      }
    }, {
      key: 'render',
      value: function render$$1() {
        var show = this.state.show;


        return show && createVNode(1, 'div', 'powered-by-overlay', createVNode(1, 'div', 'powered-by-overlay-content', [createVNode(1, 'div', null, createVNode(1, 'img', 'logo', null, 1, {
          'src': 'data:image/png;base64,' + logo$3
        }), 2), createVNode(1, 'div', null, [createTextVNode('Web-based tooling for BPMN, DMN and CMMN diagrams powered by '), createVNode(1, 'a', null, createTextVNode('bpmn.io'), 2, {
          'href': 'http://bpmn.io',
          'target': '_blank'
        }), createTextVNode('.')], 4)], 4, {
          'onClick': function onClick(e) {
            return e.stopPropagation();
          }
        }), 2, {
          'onClick': this.onClick
        });
      }
    }]);

    return PoweredByOverlayComponent;
  }(Component);

  function _classCallCheck$43(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var HIGHER_PRIORITY = 2000;

  var PoweredBy$1 = function PoweredBy(components, eventBus) {
    _classCallCheck$43(this, PoweredBy);

    components.onGetComponent('viewer', HIGHER_PRIORITY, function () {
      return PoweredByLogoComponent$1;
    });

    components.onGetComponent('viewer', function () {
      return PoweredByOverlayComponent$1;
    });
  };


  PoweredBy$1.$inject = ['components', 'eventBus'];

  var PoweredByModule$1 = {
    __init__: ['poweredBy'],
    poweredBy: ['type', PoweredBy$1]
  };

  var _createClass$36 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$44(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$22(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$22(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  var TextareaComponent = function (_Component) {
    _inherits$22(TextareaComponent, _Component);

    function TextareaComponent(props, context) {
      _classCallCheck$44(this, TextareaComponent);

      var _this = _possibleConstructorReturn$22(this, (TextareaComponent.__proto__ || Object.getPrototypeOf(TextareaComponent)).call(this, props, context));

      _this._viewer = context.injector.get('viewer');
      return _this;
    }

    _createClass$36(TextareaComponent, [{
      key: 'render',
      value: function render$$1() {
        var text = this._viewer._decision.literalExpression.text;


        return createVNode(1, 'div', 'textarea', createVNode(1, 'div', 'content', text, 0), 2);
      }
    }]);

    return TextareaComponent;
  }(Component);

  function _classCallCheck$45(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var Textarea = function Textarea(components) {
    _classCallCheck$45(this, Textarea);

    components.onGetComponent('viewer', function () {
      return TextareaComponent;
    });
  };


  Textarea.$inject = ['components'];

  var TextareaModule = {
    __init__: ['textarea'],
    textarea: ['type', Textarea]
  };

  var _createClass$37 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$46(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$23(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$23(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  var ViewDrdComponent$1 = function (_Component) {
    _inherits$23(ViewDrdComponent, _Component);

    function ViewDrdComponent(props, context) {
      _classCallCheck$46(this, ViewDrdComponent);

      var _this = _possibleConstructorReturn$23(this, (ViewDrdComponent.__proto__ || Object.getPrototypeOf(ViewDrdComponent)).call(this, props, context));

      _this.onClick = function () {
        _this._eventBus.fire('showDrd');
      };

      var injector = context.injector;


      _this._eventBus = injector.get('eventBus');
      return _this;
    }

    _createClass$37(ViewDrdComponent, [{
      key: 'render',
      value: function render$$1() {
        var _this2 = this;

        return createVNode(1, 'div', 'view-drd', createVNode(1, 'button', 'view-drd-button', createTextVNode('View DRD'), 2, {
          'onClick': this.onClick
        }), 2, null, null, function (node) {
          return _this2.node = node;
        });
      }
    }]);

    return ViewDrdComponent;
  }(Component);

  var _createClass$38 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$47(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  var HIGH_PRIORITY$1 = 1500;

  var ViewDrd$1 = function () {
    function ViewDrd(components, eventBus, injector, viewer) {
      var _this = this;

      _classCallCheck$47(this, ViewDrd);

      this._injector = injector;
      this._viewer = viewer;

      components.onGetComponent('viewer', HIGH_PRIORITY$1, function () {
        if (_this.canViewDrd()) {
          return ViewDrdComponent$1;
        }
      });

      eventBus.on('showDrd', function () {
        var parent = injector.get('_parent', false);

        var definitions = getDefinitions$1(viewer._decision);

        // open definitions
        var view = parent.getView(definitions);

        parent.open(view);
      });
    }

    _createClass$38(ViewDrd, [{
      key: 'canViewDrd',
      value: function canViewDrd() {
        var parent = this._injector.get('_parent', false);

        if (!parent) {
          return;
        }

        var definitions = getDefinitions$1(this._viewer._decision);

        return !!parent.getView(definitions);
      }
    }]);

    return ViewDrd;
  }();


  ViewDrd$1.$inject = ['components', 'eventBus', 'injector', 'viewer'];

  // helpers //////////////////////

  function getDefinitions$1(decision) {
    var definitions = decision.$parent;

    return definitions;
  }

  var ViewDrdModule = {
    __init__: ['viewDrd'],
    viewDrd: ['type', ViewDrd$1]
  };

  var _createClass$39 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  var _get$1 = function get(object, property, receiver) { if (object === null) object = Function.prototype; var desc = Object.getOwnPropertyDescriptor(object, property); if (desc === undefined) { var parent = Object.getPrototypeOf(object); if (parent === null) { return undefined; } else { return get(parent, property, receiver); } } else if ("value" in desc) { return desc.value; } else { var getter = desc.get; if (getter === undefined) { return undefined; } return getter.call(receiver); } };

  function _toConsumableArray$8(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

  function _objectWithoutProperties$6(obj, keys$$1) { var target = {}; for (var i in obj) { if (keys$$1.indexOf(i) >= 0) continue; if (!Object.prototype.hasOwnProperty.call(obj, i)) continue; target[i] = obj[i]; } return target; }

  function _classCallCheck$48(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$24(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$24(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  var Viewer$3 = function (_BaseViewer) {
    _inherits$24(Viewer, _BaseViewer);

    function Viewer() {
      var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

      _classCallCheck$48(this, Viewer);

      var container = Viewer._createContainer();

      var _this = _possibleConstructorReturn$24(this, (Viewer.__proto__ || Object.getPrototypeOf(Viewer)).call(this, assign(options, {
        renderer: {
          container: container
        }
      })));

      _this._container = container;
      return _this;
    }

    _createClass$39(Viewer, [{
      key: 'open',
      value: function open(decision, done) {

        var err;

        // use try/catch to not swallow synchronous exceptions
        // that may be raised during model parsing
        try {

          if (this._decision) {

            // clear existing literal expression
            this.clear();

            // unmount first
            this.get('eventBus').fire('renderer.unmount');
          }

          // update literal expression
          this._decision = decision;

          // let others know about import
          this.get('eventBus').fire('import', decision);

          this.get('eventBus').fire('renderer.mount');
        } catch (e) {
          err = e;
        }

        // handle synchronously thrown exception
        return done(err);
      }

      /**
       * Initialize the literal expression, returning { modules: [], config }.
       *
       * @param  {Object} options
       *
       * @return {Object} init config
       */

    }, {
      key: '_init',
      value: function _init(options) {
        var modules = options.modules,
            additionalModules = options.additionalModules,
            config = _objectWithoutProperties$6(options, ['modules', 'additionalModules']);

        var baseModules = modules || this.getModules();
        var extraModules = additionalModules || [];
        var staticModules = [{
          viewer: ['value', this]
        }];

        var allModules = [].concat(_toConsumableArray$8(baseModules), _toConsumableArray$8(extraModules), staticModules);

        return {
          modules: allModules,
          config: config
        };
      }

      /**
       * Register an event listener
       *
       * Remove a previously added listener via {@link #off(event, callback)}.
       *
       * @param {String} event
       * @param {Number} [priority]
       * @param {Function} callback
       * @param {Object} [that]
       */

    }, {
      key: 'on',
      value: function on(event, priority, callback, target) {
        return this.get('eventBus').on(event, priority, callback, target);
      }

      /**
       * De-register an event listener
       *
       * @param {String} event
       * @param {Function} callback
       */

    }, {
      key: 'off',
      value: function off(event, callback) {
        this.get('eventBus').off(event, callback);
      }

      /**
       * Emit an event on the underlying {@link EventBus}
       *
       * @param  {String} type
       * @param  {Object} event
       *
       * @return {Object} event processing result (if any)
       */

    }, {
      key: '_emit',
      value: function _emit(type, event) {
        return this.get('eventBus').fire(type, event);
      }

      /**
       * Attach viewer to given parent node.
       *
       * @param  {Element} parentNode
       */

    }, {
      key: 'attachTo',
      value: function attachTo(parentNode) {

        if (!parentNode) {
          throw new Error('parentNode required');
        }

        // ensure we detach from the
        // previous, old parent
        this.detach();

        parentNode.appendChild(this._container);

        this._emit('attach', {});
      }

      /**
       * Detach viewer from parent node, if attached.
       */

    }, {
      key: 'detach',
      value: function detach() {

        var container = this._container,
            parentNode = container.parentNode;

        if (!parentNode) {
          return;
        }

        this._emit('detach', {});

        remove(container);
      }
    }, {
      key: 'destroy',
      value: function destroy() {
        _get$1(Viewer.prototype.__proto__ || Object.getPrototypeOf(Viewer.prototype), 'destroy', this).call(this);

        this.detach();
      }
    }, {
      key: 'getModules',
      value: function getModules() {
        return Viewer._getModules();
      }
    }], [{
      key: '_getModules',
      value: function _getModules() {
        return [DecisionPropertiesModule, LiteralExpressionPropertiesModule, PoweredByModule$1, TextareaModule, ViewDrdModule];
      }
    }, {
      key: '_createContainer',
      value: function _createContainer() {
        return domify('<div class="dmn-literal-expression-container"></div>');
      }
    }]);

    return Viewer;
  }(Viewer$2);

  /**
   * Does the definitions element contain graphical information?
   *
   * @param  {ModdleElement} definitions
   *
   * @return {Boolean} true, if the definitions contains graphical information
   */
  function containsDi(definitions) {
    return some(definitions.drgElements, hasDi);
  }

  function hasDi(element) {

    var extensions = element.extensionElements;

    var values$$1 = extensions && extensions.values;

    return values$$1 && find(values$$1, function (v) {
      return is(v, 'biodi:Bounds');
    });
  }

  var _createClass$40 = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

  function _classCallCheck$49(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _possibleConstructorReturn$25(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

  function _inherits$25(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

  /**
   * The dmn viewer.
   */

  var Viewer$4 = function (_Manager) {
    _inherits$25(Viewer$$1, _Manager);

    function Viewer$$1() {
      _classCallCheck$49(this, Viewer$$1);

      return _possibleConstructorReturn$25(this, (Viewer$$1.__proto__ || Object.getPrototypeOf(Viewer$$1)).apply(this, arguments));
    }

    _createClass$40(Viewer$$1, [{
      key: '_getViewProviders',
      value: function _getViewProviders() {

        return [{
          id: 'drd',
          constructor: Viewer,
          opens: function opens(element) {
            return is(element, 'dmn:Definitions') && containsDi(element);
          }
        }, {
          id: 'decisionTable',
          constructor: Viewer$1,
          opens: function opens(element) {
            return is(element, 'dmn:Decision') && element.decisionTable;
          }
        }, {
          id: 'literalExpression',
          constructor: Viewer$3,
          opens: function opens(element) {
            return is(element, 'dmn:Decision') && element.literalExpression;
          }
        }];
      }
    }]);

    return Viewer$$1;
  }(Manager);

  return Viewer$4;

})));

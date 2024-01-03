Category: Utilities
Category: Core

* jQuery()
=> Return a collection of matched elements either found in the DOM based on passed argument(s) or created by passing an HTML string.

* .jquery
=> A string containing the jQuery version number.

* jQuery.ajax()
=> Perform an asynchronous HTTP (Ajax) request.

* jQuery.ajaxPrefilter()
=> Handle custom Ajax options or modify existing options before each request is sent and before they are processed by $.ajax().

* jQuery.ajaxSetup()
=> Set default values for future Ajax requests. Its use is not recommended.

* jQuery.ajaxTransport()
=> Creates an object that handles the actual transmission of Ajax data.

* jQuery.boxModel
=> States if the current page, in the user’s browser, is being rendered using the W3C CSS Box Model.

* jQuery.browser
=> Contains flags for the useragent, read from navigator.userAgent. This property was removed in jQuery 1.9 and is available only through the jQuery.
=> migrate plugin. Please try to use feature detection instead.

* jQuery.Callbacks()
=> A multi-purpose callbacks list object that provides a powerful way to manage callback lists.

* jQuery.contains()
=> Check to see if a DOM element is a descendant of another DOM element.

* jQuery.cssHooks
=> Hook directly into jQuery to override how particular CSS properties are retrieved or set, normalize CSS property naming, or create custom properties.

* jQuery.cssNumber
=> An object containing all CSS properties that may be used without a unit. The .css() method uses this object to see if it may append px to unitless values.

* jQuery.data()
=> Store arbitrary data associated with the specified element and/or return the value that was set.

* jQuery.Deferred()
=> A factory function that returns a chainable utility object with methods to register multiple callbacks into callback queues, 
=> invoke callback queues, and relay the success or failure state of any synchronous or asynchronous function.

* jQuery.dequeue()
=> Execute the next function on the queue for the matched element.

* jQuery.each()
=> A generic iterator function, which can be used to seamlessly iterate over both objects and arrays. 
=> Arrays and array-like objects with a length property (such as a function’s arguments object) are iterated by numeric index, from 0 to length-1. 
=> Other objects are iterated via their named properties.

* jQuery.error()
=> Takes a string and throws an exception containing it.

* jQuery.escapeSelector()
=> Escapes any character that has a special meaning in a CSS selector.

* jQuery.extend()
=> Merge the contents of two or more objects together into the first object.

* jQuery.fn.extend()
=> Merge the contents of an object onto the jQuery prototype to provide new jQuery instance methods.

* jQuery.fx.interval
=> The rate (in milliseconds) at which animations fire.

* jQuery.fx.off
=> Globally disable all animations.

* jQuery.get()
=> Load data from the server using a HTTP GET request.

* jQuery.getJSON()
=> Load JSON-encoded data from the server using a GET HTTP request.

* jQuery.getScript()
=> Load a JavaScript file from the server using a GET HTTP request, then execute it.

* jQuery.globalEval()
=> Execute some JavaScript code globally.

* jQuery.grep()
=> Finds the elements of an array which satisfy a filter function. The original array is not affected.

* jQuery.hasData()
=> Determine whether an element has any jQuery data associated with it.

* jQuery.holdReady()
=> Holds or releases the execution of jQuery’s ready event.

* jQuery.htmlPrefilter()
=> Modify and filter HTML strings passed through jQuery manipulation methods.

* jQuery.inArray()
=> Search for a specified value within an array and return its index (or -1 if not found).

* jQuery.isArray()
=> Determine whether the argument is an array.

* jQuery.isEmptyObject()
=> Check to see if an object is empty (contains no enumerable properties).

* jQuery.isFunction()
=> Determines if its argument is callable as a function.

* jQuery.isNumeric()
=> Determines whether its argument represents a JavaScript number.

* jQuery.isPlainObject()
=> Check to see if an object is a plain object (created using “{}” or “new Object”).

* jQuery.isWindow()
=> Determine whether the argument is a window.

* jQuery.isXMLDoc()
=> Check to see if a DOM node is within an XML document (or is an XML document).

* jQuery.makeArray()
=> Convert an array-like object into a true JavaScript array.

* jQuery.map()
=> Translate all items in an array or object to new array of items.

* jQuery.merge()
=> Merge the contents of two arrays together into the first array.

* jQuery.noConflict()
=> Relinquish jQuery’s control of the $ variable.

* jQuery.noop()
=> An empty function.

* jQuery.now()
=> Return a number representing the current time.

* jQuery.param()
=> Create a serialized representation of an array, a plain object, or a jQuery object suitable for use in a URL query string or Ajax request. 
=> In case a jQuery object is passed, it should contain input elements with name/value properties.

* jQuery.parseHTML()
=> Parses a string into an array of DOM nodes.

* jQuery.parseJSON()
=> Takes a well-formed JSON string and returns the resulting JavaScript value.

* jQuery.parseXML()
=> Parses a string into an XML document.

* jQuery.post()
=> Send data to the server using a HTTP POST request.

* jQuery.proxy()
=> Takes a function and returns a new one that will always have a particular context.

* jQuery.queue()
=> Show or manipulate the queue of functions to be executed on the matched element.

* jQuery.ready
=> A Promise-like object (or “thenable”) that resolves when the document is ready.

* jQuery.readyException()
=> Handles errors thrown synchronously in functions wrapped in jQuery().

* jQuery.removeData()
=> Remove a previously-stored piece of data.

* jQuery.speed
=> Creates an object containing a set of properties ready to be used in the definition of custom animations.

* jQuery.sub()
=> Creates a new copy of jQuery whose properties and methods can be modified without affecting the original jQuery object.

* jQuery.support
=> A collection of properties that represent the presence of different browser features or bugs; intended for jQuery’s internal use.

* jQuery.trim()
=> Remove the whitespace from the beginning and end of a string.

* jQuery.type()
=> Determine the internal JavaScript [[Class]] of an object.

* jQuery.unique()
=> Sorts an array of DOM elements, in place, with the duplicates removed. Note that this only works on arrays of DOM elements, not strings or numbers.

* jQuery.uniqueSort()
=> Sorts an array or an array-like object of DOM elements, in place, with the duplicates removed. Note that this only works on arrays/array-likes of DOM elements, not strings or numbers.

* jQuery.when()
=> Provides a way to execute callback functions based on zero or more Thenable objects, usually Deferred objects that represent asynchronous events
Category: Event Object

jQuery's event system normalizes the event object according to W3C standards. The event object is guaranteed to be passed to the event handler. Most properties from the original event are copied over and normalized to the new event object.

jQuery.Event Constructor

The jQuery.Event constructor is exposed and can be used when calling trigger. The new operator is optional.

Check trigger's documentation to see how to combine it with your own event object.

Example:

//Create a new jQuery.Event object without the "new" operator.

var e = jQuery.Event( "click" );

// trigger an artificial click event

jQuery( "body" ).trigger( e );

As of jQuery 1.6, you can also pass an object to jQuery.Event() and its properties will be set on the newly created Event object.

Example:

// Create a new jQuery.Event object with specified event properties.

var e = jQuery.Event( "keydown", { keyCode: 64 } );

// trigger an artificial keydown event with keyCode 64

jQuery( "body" ).trigger( e );

Common Event Properties

jQuery normalizes the following properties for cross-browser consistency:

\## target

\## relatedTarget

\## pageX

\## pageY

\## which

\## metaKey

\### The following properties are also copied to the event object, though some of their values may be undefined depending on the event:

\##  altKey, bubbles, button, buttons, cancelable, char, charCode, clientX, clientY, ctrlKey, currentTarget, data, detail, eventPhase, key, keyCode, metaKey, offsetX, offsetY, originalTarget, pageX, pageY, relatedTarget, screenX, screenY, shiftKey, target, toElement, view, which

\##

\##  Other Properties

\##  To access event properties not listed above, use the event.originalEvent object:

\##

\##  // Access the `dataTransfer` property from the `drop` event which

\##  // holds the files dropped into the browser window.

\##  var files = event.originalEvent.dataTransfer.files;

* event.currentTarget
* The current DOM element within the event bubbling phase.

* event.data
* An optional object of data passed to an event method when the current executing handler is bound.

* event.delegateTarget
* The element where the currently-called jQuery event handler was attached.

* event.isDefaultPrevented()
* Returns whether event.preventDefault() was ever called on this event object.

* event.isImmediatePropagationStopped()
* Returns whether event.stopImmediatePropagation() was ever called on this event object.

* event.isPropagationStopped()
* Returns whether event.stopPropagation() was ever called on this event object.

* event.metaKey
* Indicates whether the META key was pressed when the event fired.

* event.namespace
* The namespace specified when the event was triggered.

* event.pageX
* The mouse position relative to the left edge of the document.

* event.pageY
* The mouse position relative to the top edge of the document.

* event.preventDefault()
* If this method is called, the default action of the event will not be triggered.

* event.relatedTarget
* The other DOM element involved in the event, if any.

* event.result
* The last value returned by an event handler that was triggered by this event, unless the value was undefined.

* event.stopImmediatePropagation()
* Keeps the rest of the handlers from being executed and prevents the event from bubbling up the DOM tree.

* event.stopPropagation()
* Prevents the event from bubbling up the DOM tree, preventing any parent handlers from being notified of the event.

* event.target
* The DOM element that initiated the event.

* event.timeStamp
* The difference in milliseconds between the time the browser created the event and January 1, 1970.

* event.type
* Describes the nature of the event.

* event.which
* For key or mouse events, this property indicates the specific key or button that was pressed.
Category: Deferred Object

The Deferred object, introduced in jQuery 1.5, is a chainable utility
object created by calling the jQuery.Deferred() method. It can register
multiple callbacks into callback queues, invoke callback queues, and
relay the success or failure state of any synchronous or asynchronous
function.

The Deferred object is chainable, similar to the way a jQuery object is
chainable, but it has its own methods. After creating a Deferred object,
you can use any of the methods below by either chaining directly from
the object creation or saving the object in a variable and invoking one
or more methods on that variable.

1.  deferred.always() =\> Add handlers to be called when the Deferred
    object is either resolved or rejected.

2.  deferred.catch() =\> Add handlers to be called when the Deferred
    object is rejected.

3.  deferred.done() =\> Add handlers to be called when the Deferred
    object is resolved.

4.  deferred.fail() =\> Add handlers to be called when the Deferred
    object is rejected.

5.  deferred.isRejected() =\> Determine whether a Deferred object has
    been rejected.\
    ?/ Note: This API has been removed in jQuery 1.8; please use
    deferred.state() instead.

6.  deferred.isResolved() =\> Determine whether a Deferred object has
    been resolved. ?/ Note: This API has been removed in jQuery 1.8;
    please use deferred.state() instead.

7.  deferred.notify() =\> Call the progressCallbacks on a Deferred
    object with the given args.

8.  deferred.notifyWith() =\> Call the progressCallbacks on a Deferred
    object with the given context and args.

9.  deferred.pipe() =\> Utility method to filter and/or chain Deferreds.

10. deferred.progress() =\> Add handlers to be called when the Deferred
    object generates progress notifications.

11. deferred.promise() =\> Return a Deferred's Promise object.

12. deferred.reject() =\> Reject a Deferred object and call any
    failCallbacks with the given args.

13. deferred.rejectWith() =\> Reject a Deferred object and call any
    failCallbacks with the given context and args.

14. deferred.resolve() =\> Resolve a Deferred object and call any
    doneCallbacks with the given args.

15. deferred.resolveWith() =\> Resolve a Deferred object and call any
    doneCallbacks with the given context and args.

16. deferred.state() =\> Determine the current state of a Deferred
    object.

17. deferred.then() =\> Add handlers to be called when the Deferred
    object is resolved, rejected, or still in progress.

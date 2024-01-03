Category: Global Ajax Event Handlers These methods register handlers to
be called when certain events, such as initialization or completion,
take place for any Ajax request on the page. The global events are fired
on each Ajax request if the global property in jQuery.ajaxSetup() is
true, which it is by default. Note: Global events are never fired for
cross-domain script or JSONP requests, regardless of the value of
global.

1.  ajaxComplete event =\> Register a handler to be called when Ajax
    requests complete. This is an AjaxEvent.

2.  .ajaxComplete() =\> Register a handler to be called when Ajax
    requests complete. This is an AjaxEvent.

3.  ajaxError event =\> Register a handler to be called when Ajax
    requests complete with an error. This is an Ajax Event.

4.  .ajaxError() =\> Register a handler to be called when Ajax requests
    complete with an error. This is an Ajax Event.

5.  ajaxSend event =\> Attach a function to be executed before an Ajax
    request is sent. This is an Ajax Event.

6.  .ajaxSend() =\> Attach a function to be executed before an Ajax
    request is sent. This is an Ajax Event.

7.  ajaxStart event =\> Register a handler to be called when the first
    Ajax request begins. This is an Ajax Event.

8.  .ajaxStart() =\> Register a handler to be called when the first Ajax
    request begins. This is an Ajax Event.

9.  ajaxStop event =\> Register a handler to be called when all Ajax
    requests have completed. This is an Ajax Event.

10 .ajaxStop() =\> Register a handler to be called when all Ajax
requests have completed. This is an Ajax Event.

11 ajaxSuccess event =\> Attach a function to be executed whenever an
Ajax request completes successfully. This is an Ajax Event.

12 .ajaxSuccess() =\> Attach a function to be executed whenever an Ajax
request completes successfully. This is an Ajax Event.

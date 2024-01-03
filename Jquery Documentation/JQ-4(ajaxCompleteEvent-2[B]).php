<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function () {
            // Make an ajax request to a server
            var xhr = $.ajax({
                url: "temp.php"
            });
            // Ajax Started To Send Request 
            $(document).on("ajaxStart", function (data) {
                $("#msg").append("<li>Starting request at " + data + "</li>");
                $("#result").html("Request started...");
            });
            $(document).on("ajaxSend", function () {
                // Show a message when the request is sent
                $("#msg").text("Triggered AjaxSend handler.");
                $("#msg").append("<li>Starting request at </li>");
                $("#result").html("Request sent...");
            });
            $(document).on("ajaxComplete", function () {
                // Show a message and the response data when the request succeeds
                $("#msg").text("Triggered Ajax Complete handler.  The result is ");
                $("#msg").after("<li> request Completed </li>");
                xhr.done(function (data) {
                    $("#result").html("Request succeeded! <br> Data: " + data);
                });
            });
            $(document).on("ajaxError", function () {
                // Show a message and the status text when the request is stopped
                $("#msg").text("Triggered ajaxError handler." + xhr.responseText);
                $("#msg").append("<li> request Failed </li>");
                xhr.fail(function (xhr) {
                    $("#result").html("Request stopped! Status: "+ xhr.responseText);
                });
            });
        });
    </script>
</head>
<body>
    <h1>jQuery Ajax Events Demo</h1>
    <div id="result"></div>
    <div id="msg"></div>
</body>
</html>
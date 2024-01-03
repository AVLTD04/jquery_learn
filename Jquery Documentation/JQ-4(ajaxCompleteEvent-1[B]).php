<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Complete, Error And Send Events</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <style>
        #msg {
            color: red;
            font-weight: 300;
        }
    </style>
</head>
<body>
    <div id="msg">msg block here</div> 
    <div class="result"></div>
    <div class="trigger3">AjaxSend Trigger text Button3 </div>
    <div class="trigger1">AjaxComplete Trigger text Button1 </div>
    <div class="trigger2">AjaxError Trigger text Button2 </div>
</body>
<script>
    $(document).ready(function () {
        $(".trigger1").on("click", function () {
            $(".result").load("jq-2(addBack).php");    //Files And its  load To The  Element 
        });
        $(".trigger2").on("click", function () {
            $(".result").load("jq-3(addBack).php");    //Files And its  load To The  Element 
        });
        $(".trigger3").on("click", function () {
            $(".result").load("jq-3(addClass).php");   //Files And its  load To The  Element 
        });

        $(document).on("ajaxStart", function () {
            $("#msg").show();
        });

        //PAge Started To And Started To Send Request ....
        $("#msg").text("Triggered ajaxStart handler.");

        $(document).on("ajaxSend", function (event, xhr, settings) {    //Ajax Started  To Send Request  For Receive PAge 
            if (settings.url == "jq-3(addClass).php") {
                $("#msg").text("Triggered AjaxSend handler.");
                $("#msg").append("<li>Starting request at " + settings.url + "</li>");
            }
        });
        $(document).on("ajaxComplete", function (event, xhr, settings) {    //When Request Complete And Recive A  Result True Or False 
            if (settings.url == "jq-2(addBack).php") {
                $("#msg").text("Triggered ajaxComplete handler. The result is " + xhr.responseText);
                $("#msg").after("<li> request Completed </li>");
            }
        });
        $(document).on("ajaxError", function (event, xhr, settings, thrownError) {      //When PAge Request Throw Error Uses This Handler 
            if (settings.url == "jq-3(addBack).php") {
                $("#msg").text("Triggered ajaxError handler." + xhr.responseText);
                $("#msg").append("<li> request Failed </li>");
            }
        });
    });
</script>
</html>
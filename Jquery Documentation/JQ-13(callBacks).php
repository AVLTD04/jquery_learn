<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callback In jquery</title>


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>

        /***************************************************************************************************************
         * 
         * 
         * $.Callbacks() supports a number of methods including callbacks.add(),callbacks.remove(), callbacks.fire() and callbacks.disable().
         * 
         * A multi-purpose callbacks list object that provides a powerful way to manage callback lists.
         * 
         * **********************************************************************************************
         * 
         * 
        */
        $(document).ready(function () {
            var Box = function (value) {
                $("p").text("Sample Block Of : " + value);
            };
            var Callback = $.Callbacks();
            $("#add").click(function () {
                Callback.add(Box);
                Callback.fire("Add");
            });
            $("#fire").click(function () {
                Callback.add(Box);
                Callback.fire("fire");
            });
            $("#fired").click(function () {
                Callback.add(Box);
                if (Callback.fired()) {
                    alert("The callbacks have been fired");
                } else {
                    alert("The callbacks have not been fired");
                }
            });
            $("#fireWith").click(function () {
                Callback.add(Box);
                Callback.fireWith(document, ["fireWith", "document"]);
            });
            $("#disabled").click(function () {
                Callback.add(Box);
                Callback.disable();
                Callback.fire("Disabled"); // Attempt to fire any  argument
                //isn't generate output [disabled for fire any argument]
            });
            $("#empty").click(function () {
                Callback.add(Box);
                Callback.empty();
                Callback.fire("Empty");
            });
            $("#has").click(function () {
                Callback.add(Box);
                Callback.has(Box) ? alert("The callback list has Box") : alert("The callback list does not have Box");
            });
            $("#lock").click(function () {
                Callback.add(Box);
                Callback.lock(); // LOck Lock All CallBAcks events
                alert("The callback list is locked");
            });
            $("#locked").click(function () {
                Callback.add(Box);
                Callback.locked() ? alert("The callback list is locked") : alert("The callback list is not locked");// LOck Lock All Listed CallBAcks events
            });
        });
    </script>
</head>
<body>
    <p>Simple Text With .. </p>
    <button id="add"> CallBAck ADD Btn </button><br>
    <button id="fire"> CallBAck fire Btn </button><br>
    <button id="fired"> CallBAck fired Btn </button><br>
    <button id="fireWith"> CallBAck firedWith Btn </button><br>
    <button id="disabled"> CallBAck Disabled Btn </button> <code>Will Not Work </code><br>
    <button id="empty">Empty</button><br>
    <button id="has">has</button><br>
    <button id="lock">lock</button><br>
    <button id="locked">locked</button><br>
</body>
</html>
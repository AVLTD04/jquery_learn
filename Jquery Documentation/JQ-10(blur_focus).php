<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blur</title>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
</head>

<body>
    <script>

        /****************************
         * 
         * The blur event is sent to an element when it loses focus. 
         * 
         * The focus event is sent to an element when it Gain focus. 
         * 
         * Ex : when input Box Leave box-1 loses focus(Called Blur ) And box-2 Gain Focus (called Focus).
         * 
        */
        $(document).ready(function () {
            $("#btn1").click(function () {
                $("input").focus();
                $("p").html("focus event triggered");
            
            });
            $("#btn2").click(function () {
                $("input").blur();
                $("p").html("blur event triggered");
            });
        });
    </script>

    Enter your name: <input type="text">
    <br><br>

    <button id="btn1">Trigger focus event</button>
    <button id="btn2">Trigger blur event</button>

    <p style="color:red"></p>
</body>

</html>

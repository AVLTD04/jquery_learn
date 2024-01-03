<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bind (Old) -- on(New)</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <script>
        $(document).ready(function () {
            $("#btn1").bind("click", function () {
                $("#box1").text("Bind Is The Old Version Of On() ....");
            })


            $("p").bind({
                click: function () {
                    $("#box2").text("You Are As On Click");
                },
                mouseenter: function () {
                    $("#box2").text("You Are As On Mouse Enter");
                },
                mouseleave: function () {
                    $("#box2").text("You Are As On Mouse Leave");
                }
            })
        });

    </script>
    <hr>
    <div id="box2" style="color: red; background-color: aquamarine;"></div>
    <hr>

    <p>See Text To Click OR Hover</p>

    <button id="btn1">Click To See Diff </button>
    <hr>
    <div id="box1"></div>
    <hr>
</body>

</html>
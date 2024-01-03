<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Animation</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <style>
        #block {
            /* position: absolute; */
            background-color: #abc;
            left: 50px;
            width: 90px;
            height: 90px;
            margin: 5px;
        }

        #mover {
            background: yellow;
            border: 1px solid #AAA;
            width: 80px;
            height: 80px;
            margin: 0 5px;
            float: left;
        }
    </style>
</head>

<body>

    <button id="anim">Click To Animate </button>
    <br>
    <button id="left">&laquo;</button>
    <button id="right">&raquo;</button>

    <button id="up">^</button>
    <button id="down">v</button>


    <div id="block" style="position: relative;"></div>
    <br>
    <hr>
    <div id="msg"></div>
    <br>
    <hr>
    <div id="mover"></div>
    <br>
    <img src="dimension-01(exp).png" alt="" id="imgAnimation"
        style="position: relative;padding: 5px ;border: 2px solid black;">


</body>

<script>
    $(document).ready(function () {

        $("#anim").click(function () {
            $("#imgAnimation").animate({
                opacity: 0.75,
                left: "+=50",
                height: "toggle",
                width: "toggle",
                borderWidth: "10px"
            }, {
                duration: 5000,
                specialEasing: {
                    width: "linear",
                    height: "easeInBounce"
                },
                complete: function () {
                    $("#msg").append("<div>Animation complete.</div>");
                }
            });
        });


        /* -= / += Mean  var = var + size  and  var = var - size  */
        $("#right").click(function () {
            $("#block").animate({ "left": "+=50px" }, "slow");
        });

        $("#left").click(function () {
            $("#block").animate({ "left": "-=50px" }, "slow");
        });
        $("#up").click(function () {
            $("#block").animate({ "top": "-=50px" }, "slow");
        });
        $("#down").click(function () {
            $("#block").animate({ "top": "+=50px" }, "slow");
        });

        function animateIt() {
            $("#mover").slideToggle("slow", animateIt);
        }
        animateIt();
    })
</script>

</html>
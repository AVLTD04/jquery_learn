<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Clear Queue</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <style>
        div {
            margin: 3px;
            width: 40px;
            height: 40px;
            position: absolute;
            left: 0px;
            top: 30px;
            background: green;
            display: none;
        }

        div.newcolor {
            background: blue;
        }
    </style>
</head>

<body>
    <button id="start">Start</button>
    <button id="stop">Stop</button>
    <button id="clearQueue">Clear Queue</button>
    <div></div>

    <script>
        $("#start").on("click", function () 
        {

            /* Here A Queue For The Animation And Each Queue After Do Dequeue */
            
            var myDiv = $("div");
            myDiv.show("slow");
            myDiv.animate({
                left: "+=200"
            }, 5000);

            myDiv.queue(function () {
                var that = $(this);
                that.addClass("newcolor");
                that.dequeue();
            });

            myDiv.animate({
                left: "-=200"
            }, 1500);
            myDiv.queue(function () {
                var that = $(this);
                that.removeClass("newcolor");
                that.dequeue();
            });
            myDiv.slideUp();
        });

        $("#stop").on("click", function () {
            var myDiv = $("div");
            myDiv.clearQueue();
            myDiv.stop();
        });
        $("#clearQueue").on("click", function () {
            var myDiv = $("div");
            myDiv.clearQueue();
            
        });

    </script>

</html>
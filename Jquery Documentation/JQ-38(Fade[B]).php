<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fade In / Out / To / Toggle </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <style>
        div {
            background-color: lightgray;
            height: 100px;
            width: 100px;
            margin: 20px;
            text-align: center;
        }
    </style>
</head>

<body>

    <button id="fadeAct2">Click For Fade Out </button>
    <button id="fadeAct1">Click For Fade In</button>
    <button id="fadeAct3">Click For Fade To</button>
    <button id="fadeAct4">Click For FadeToggle  </button>

    <hr>
    <div id="fade2">Block 2 </div>
    <div id="fade3">Block 3 </div>
    <div id="fade4">Block 4 </div>
</body>
    <script>
        $(document).ready(function(){
            $("#fadeAct2").click(function(){
                $("#fade2").fadeOut(2000);
            });
            $("#fadeAct1").click(function(){
                $("#fade2").fadeIn(2000);
            });
            $("#fadeAct3").click(function(){
                $("#fade3").fadeTo("slow",0.45);
            });
            $("#fadeAct4").click(function(){
                $("#fade4").fadeToggle(2000);
            });
        })
    </script>

</html>
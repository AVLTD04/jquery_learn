<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finish </title>
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

    <button id="act1">Start Animation</button>
    <button id="act2">Quick Finish</button>
    <hr>
    <div id="block" style="position: relative;"></div>

</body>
<script>
    $(document).ready(function () {
        $("#act1").click(function () {
            $("#block").animate({ "top": "450" }, 7000);
        });

        
        $("#act2").click(function(){
            $("#block").finish(); /* Finish Function IS Used For Finish Animation ANd  Quick Stop  */
        })
    })
</script>

</html>
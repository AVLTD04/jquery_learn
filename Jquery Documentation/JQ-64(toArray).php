<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> .toArray()</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <div> The Div Value IS : 1 </div>
    <div> The Div Value IS : 2 </div>
    <div> The Div Value IS : 3 </div>
    <div> The Div Value IS : 4 </div>
    <div> The Div Value IS : 5 </div>
    <div> The Div Value IS : 6 </div>
    <div> The Div Value IS : 7 </div>
    <div> The Div Value IS : 8 </div>
    <div> The Div Value IS : 9 </div>
    <div> The Div Value IS : 10 </div>
    <div> The Div Value IS : 11 </div>
    <div> The Div Value IS : 12 </div>
    <hr>

    <span id="ouput"></span>
</body>
<script>
    $(document).ready(function() {

        var divInLoop = $("div");

        var blockRev = divInLoop.toArray().reverse();

        for (i = 0; i < divInLoop.length; i++) {
            $("span#ouput").append(blockRev[i].innerHTML + "<br>");
        };
    });
</script>

</html>
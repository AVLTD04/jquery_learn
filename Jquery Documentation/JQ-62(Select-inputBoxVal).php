<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> select EVENT </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>


</head>

<body>
    Text Box Value : -
    <input type="text" value="Select My Text"><br>
    <span id="log"></span>
</body>

<script>
    $("input").select(function() {
        $("span#log").text(" Value  selected").css("color","red").fadeToggle("slow");
    });
</script>

</html>
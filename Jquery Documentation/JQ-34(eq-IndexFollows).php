<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eq() And :eq Selector Follows Index VAlue Of Any Block </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <p>
    <div>The value OF Index is :: 0</div>
    <div>The value OF Index is :: 1</div>
    <div>The value OF Index is :: 2</div>
    <div>The value OF Index is :: 3</div>
    <div>The value OF Index is :: 4</div>
    <div>The value OF Index is :: 5</div>
    <div>The value OF Index is :: 6</div>
    <div>The value OF Index is :: 7</div>
    <div>The value OF Index is :: 8</div>
    <div>The value OF Index is :: 9</div>
    </p>
</body>
<script>
    $(document).ready(function () {
        $("div").eq(0).css("color", "Red");
        $("div").eq(1).css("color", "orange");
        $("div").eq(2).css("color", "yellow");
        $("div").eq(3).css("color", "green");
        $("div").eq(4).css("color", "blue");
        $("div").eq(5).css("color", "indigo");
        $("div").eq(6).css("color", "violet");
        $("div").eq(7).css("color", "grey");
        $("div").eq(8).css("color", "pink");
        $("div").eq(9).css("color", "lightblue");

        $("div:eq(2)").css("background-color", "black");
    })
</script>

</html>
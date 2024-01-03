<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Double Click Trigger </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <button>Single Click || Double Click</button>
    <br><br><br><br><br>
    <div id="msg"></div>
</body>
<script>
    $(document).ready(function () {
        $("button").click(function () {
            $("#msg").text("You Clicked Single Click");
        })
        $("button").dblclick(function () {
            $("#msg").text("You Clicked Double  Click");
        })
    })
</script>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jquery Disabled || Enabled Selector</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <form action="">
        <label for="">The Box Is 1</label>
        <input type="text" value=""><br>

        <label for="">The Box Is 2</label>
        <input type="text" value="" disabled><br>

        <label for="">The Box Is 3 </label>
        <input type="text" value=""><br>
    </form>
</body>

<script>
    $(document).ready(function () {
        $("input:disabled").val("The Disabled Box Value");
        $("input:enabled").val("The Enabled Box Value");
    })
</script>

</html>
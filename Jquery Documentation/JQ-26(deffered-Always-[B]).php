<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deferred.always() CAllBAck </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <div id="msg"></div>
</body>
<script>
    $(document).ready(function () {
        /*Always Function Is Always Run In Runtime With error OR No Error */
        $.get("temp.html").always(function () {
            $("#msg").text("$.get completed with success or error callback arguments");
        });
    })

</script>

</html>
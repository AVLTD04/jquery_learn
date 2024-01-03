<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>end() </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>

    <p>The  P Tag Code Block <br>
        <span>&nbsp; The Block Of Text </span><br>
        <span>&nbsp; The Block Of Text </span><br>
        <span>&nbsp; The Block Of Text </span><br>
        <span>&nbsp; The Block Of Text </span><br>
        <span>&nbsp; The Block Of Text </span><br>
        End Of P Block
    </p>

</body>
<script>
    $(document).ready(function () {
        $("span").find("p").end().css("border", "2px red solid"); //Elements Ending Block 
    })
</script>

</html>
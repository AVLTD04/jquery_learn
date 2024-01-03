<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jquery Doc .ADDBACK </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>
    <ul>
        <li>Data On List</li>
        <li>Data On List</li>
        <li>Data On List</li>
        <li>Data On List</li>
        <li class="Data-5">Data On List</li>
        <li>Data On List</li>
        <li>Data On List</li>
        <li>Data On List</li>
        <li>Data On List</li>
        <li>Data On List</li>
    </ul>
    <script>
        $(document).ready(function () {
            $("li.Data-5").addBack().css("color", " red"); //After Do The Complete Data And Add Over On Block
        });
    </script>
</html>
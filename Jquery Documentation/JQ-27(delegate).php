<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delegate Function Or Event</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <style>
        p {
            color: aqua;
            font-weight: 300;
            background-color: thistle;
        }
    </style>
</head>

<body>
    <p>Single Click ME !!</p>
    <button>Double Click Me !!</button>
</body>
<script>
    $(document).ready(function () {

        /* delegate Function OR MEthod Is USed Instad OF On OR CLick Any element To trigger Something  */
        $("body").delegate("p", "click", function () {
            $(this).after("<p>Added New Paragraph </p>");
        })
        $("body").delegate("button", "dblclick", function () {
            $(this).after(" <button>Im New Button</button>");
        })
    })
</script>

</html>
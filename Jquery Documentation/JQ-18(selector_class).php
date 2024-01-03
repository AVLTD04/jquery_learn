<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Selector (“.class”)</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <style>
        .color-1 {
            border: 2px double green;
            font-weight: 300;
            margin: 5px;
        }

        .color-2 {
            border: 2px solid blue;
            font-weight: 100;
        }
    </style>
</head>
<body>
    <div>div Has no class </div>
    <div class="color-1">div With Class="color-1"</div>  <!-- Diffrent Class Do Css With Its Class  -->
    <div class="color-2">div With Class="color-2"</div> <!-- Diffrent Class Do Css With Its Class  -->
</body>
</html>
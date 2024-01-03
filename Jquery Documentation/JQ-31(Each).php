<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Jquery Each (Itreate The Block) Like A Loop </title>
    <style>
        .changerCss {
            background-color: aqua;
            color :darkgoldenrod;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
</head>

<body>

    Make Double Of It Self Count <br>
    <button>(click here to change)</button>
    <ol>
        <li>Eat</li>
        <li>Sleep</li>
        <li>Be merry</li>
    </ol>

    <script>
        $("button").on("click", function () {
            $("li").each(function () {
                $("ol").append("<li> More DAta List</li>");
            });
        });
    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.replaceAll() || .replaceWith() || :reset </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <hr>
    <p>The Text Is Now Been Replaced By Blah Blah</p>
    <p>The Text Is Now Been Replaced By Blah Blah</p>
    <p>The Text Is Now Been Replaced By Blah Blah</p>
    <p>The Text Is Now Been Replaced By Blah Blah</p>
    <p>The Text Is Now Been Replaced By Blah Blah</p>
    <button id="replaceAll">Click To Replace </button>
    <hr>

    <div>Replace Text </div>
    <div>Replace Text </div>
    <div>Replace Text </div>
    <div>Replace Text </div>
    <div>Replace Text </div>
    <button id="rpLcewith">Click To Replace All </button>

    <input type="reset" value="ReSet">
    <hr>
</body>
<script>
    $("#replaceAll").click(function() {
        $("<b> Blah Blah </b><br>").replaceAll("p");
    });

    $("#rpLcewith").click(function() {
        $("div").replaceWith(("<b> Blah Blah </b><br>"));
    });

    $("input:reset").css({
        background: "yellow",
        border: "3px red solid"
    });
</script>

</html>
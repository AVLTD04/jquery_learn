<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Scroll Events </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <style>
        div.scrolleft {
            background: repeat scroll 0 0;
            border: 2px solid #666;
            margin: 5px;
            padding: 5px;
            position: relative;
            width: 850px;
            height: 200px;
            overflow: auto;
        }

        p.inner {
            margin: 10px;
            padding: 5px;
            width: 1000px;
            height: 1000px;
        }
    </style>
</head>

<body>
    <h1>Scroll Left The Block </h1>

    <div class="scrolleft">
        <h1>Inner Block TExt </h1>
        <p class="inner">
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
            || Blah || Blah ||
        </p>
    </div>

    <h1>Scroll The Page </h1> <br>

    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
    <span>The Text Is Here !!!! <br> </span>
</body>
<script>
    $(document).scroll(function() {
        $("span").css("color", "blue").fadeIn("slow");
    })

    $("div.scrolleft").scrollLeft(function() {
        alert(" Triggered  LEft SideBar ");
    });
    $("div.scrolleft").scrollTop(function() {
        alert(" Triggered   Top SideBar ");
    });
</script>

</html>
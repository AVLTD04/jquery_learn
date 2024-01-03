<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Jquery All Selector **</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>
<body>
    <div>DIV</div>
    <span>SPAN</span>
    <p>P <button>Button</button></p>
    <script>
        var elementCount = $("*").css("border", "3px solid red").length;  /* [*] Is Used For Select All Elements IN The body  */
        $("body").prepend("<h3>" + elementCount + " elements found</h3>");
    </script>
</body>
</html>
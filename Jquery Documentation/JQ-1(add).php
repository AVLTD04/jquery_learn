<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API DOC .ADD() method</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>

    <div></div>
    <div></div>
    <div></div>

    <p>Text With No Css Of Padding </p>
</body>

<script>
    $(document).ready(function () {
        var block = $("p");
        var content = $("div");
        
        content = content.css({ "height": "50px", "width": "50px", "margin": "5px" });  //Added Css To Div block
        content.add("p").css({ "background-color": "blue", "color": "white" });     //Added Css To P Tag

        block = block.add("<br> <span>The Data Block After   P</span>").appendTo("p"); //Append Mean Next To(Element)
    })
</script>

</html>
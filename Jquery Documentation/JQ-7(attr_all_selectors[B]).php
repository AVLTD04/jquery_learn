<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attr All Selectors </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <style>
        a {
            display: inline-block;
        }
    </style>
    <script>

    </script>
</head>

<body>

    Box-n : <br>
    <input name="man-news"><!-- "Contains [name*='man']" --> <br>
    Box-n : <br>
    <input name="milk man"> <!-- "Contains [name~='man']" --> <br>
    Box-n : <br>
    <input name="letterman2"><!-- "Contains [name*='man']" --> <br>
    Box-n : <br>
    <input name="newmilk"> <br>
    Box-n : <br>
    <input name="newsletter"><!-- Contains [name$='letter'] + [name^='news'] --> <br>
    Box-n : <br>
    <input name="milkman"> <br>
    Box-n : <br>
    <input name="jobletter"><!-- Contains [name$='letter'] --> <br><hr>
    Box-n : <br>
    <input name="newsboy"><!-- Contains [name^='news'] --> <br><hr>
    <hr>

    <a href="#" lang="en">Some text</a>
    <a href="#" lang="en-UK">Some other text</a>
    <a href="#" lang="english">will not be outlined</a>

    <script>
        $("a[lang|='en']").css("border","8px dotted green");               // |=  Attribute Contains Prefix Selector
        $("input[name*='man']").val("Contains [name*='man']");             // *=  Attribute Contains Selector
        $("input[name~='man']").val("Contains [name~='man']");             // ~=  Attribute Contains Word Selector 
        $( "input[name$='letter']" ).val("Contains [name$='letter']");     // $=  Attribute Ends With Selector
        $( "input[name^='news']" ).val("Contains [name^='news']");         // ^=  Attribute Starts With Selector
    </script>

</body>

</html>
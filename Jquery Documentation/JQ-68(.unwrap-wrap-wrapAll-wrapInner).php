<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.unwrap() || .wrap() || .wrapAll() || .wrapInner() </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <style>
        .wrapDiv {
            border: 2px solid blue;
            margin: 10px;
            padding: 10px;
        }

        .wrapedb {
            border: 3px dotted green;
            color: red;
        }
    </style>

</head>

<body>
    <hr>
    <h2>CLick And UnWrap ALl P Tags </h2>
    <h4> <button> UnWrap P TAg</button></h4>
    <hr>
    <h2>Wrap Text </h2>
    <p class="wrap">P TAg Wrapped In Div </p>
    <p class="wrap">P TAg Wrapped In Div </p>
    <p class="wrap">P TAg Wrapped In Div </p>
    <p class="wrap">P TAg Wrapped In Div </p>

    <hr>

    <h2>Wrappes All P In Single Div </h2>
    <p class="wrapAll">P TAg Wrapped In Div </p>
    <p class="wrapAll">P TAg Wrapped In Div </p>
    <p class="wrapAll">P TAg Wrapped In Div </p>
    <p class="wrapAll">P TAg Wrapped In Div </p>
    <hr>

    <h2>Inner Wrap Span And b inner Wrap Of P </h2>
    <p class="wrapInner"> -- || Span Tag Is Inner Wrap IN P Tag </p>
    <p class="wrapInner"> -- || Span Tag Is Inner Wrap IN P Tag </p>
    <p class="wrapInner"> -- || Span Tag Is Inner Wrap IN P Tag </p>
    <p class="wrapInner"> -- || Span Tag Is Inner Wrap IN P Tag </p>

</body>

<script>
    /******************************* .wrap() ***********************************/
    $(".wrap").wrap("<div class='wrapDiv'></div>");
    /***************************************************************************/

    /******************************* .wrapAll() ***********************************/
    $(".wrapAll").wrapAll("<div class='wrapDiv'></div>");
    /***************************************************************************/

    /******************************* .wrapAll() ***********************************/
    $(".wrapInner").wrapInner("<span ><b class='wrapedb'> 000000000 [ I m Inner] 00000000000 </b></span>");
    /***************************************************************************/

    /******************************** .unwrap() ******************************/
    $("button").on("click", function() {
        $("p").unwrap();
    });
</script>

</html>
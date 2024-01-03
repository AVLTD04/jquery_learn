<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Attribute Selector || Multiple Selector </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>
<body>

    <input type="text" value="" class="pbox" name="pbox" ><br><hr>
    <input type="text" value="" class="spanbox" name="spanbox" ><br><hr>
    <input type="text" value="" class="divbox" name="divbox" ><br><hr>
    <input type="text" value="" class="spanbox" name="spanbox" ><br><hr>
    <input type="text" value="" class="divbox" name="divbox" ><br><hr>
    <input type="text" value="" class="pbox" name="pbox" ><br><hr>

<hr>
    <div>  div With No Class </div>
    <div class="iveclass">  div With Class </div>
    <div class="iveclass"> div  With Class </div>
    <div>div  With No Class </div>
    <div> div With No Class </div>
    <p  class="ivenot" >p  With Class </p>
    <p> p With No Class </p>
    <span  class="ivenot" > span With Class </span><br>
    <span> span With No Class </span>

</body>
    <script>
        /******************************************************************************************************
         *
         * Multiple Attribute Selector
         *
         * Syntax ::  jQuery( "[attributeFilter1][attributeFilter2][attributeFilterN]" )
         *
        */

        $( "input[class][name='pbox']" ).val( "This Is P Block " );
        $( "input[class][name='divbox']" ).val( "This Is DIV Block " );
        $( "input[class][name='spanbox']" ).val( "This Is SPAN Block " );

        /*********************************************************************************************************************************/



        /******************************************************************************************************
         *
         * Multiple Selector (“selector1, selector2, selectorN”)
         *
         * Syntax ::  jQuery( "selector1, selector2, selectorN" )
         *
        */

        $( "div.iveclass, span.ivenot, p.ivenot" ).css( "border", "3px solid red" );

        /*********************************************************************************************************************************/
    </script>
</html>
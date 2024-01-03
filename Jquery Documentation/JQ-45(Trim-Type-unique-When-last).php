<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Trim + Type + unique  + When + last   </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>
<body>

    <p id="withouttrim"></p>
    <p id="withtrim"></p>
<hr>
    <div>
        <div> Type IS  :: </div>
        <div> Type IS  :: </div>
        <div> Type IS  :: </div>
        <div> Type IS  :: </div>
        <div> Type IS  :: </div>
        <div> Type IS  :: </div>
        <div> Type IS  :: </div>
        <div> Type IS  :: </div>
        <div> Type IS  :: </div>
        <div> Type IS  :: </div>
        <div> Type IS  :: </div>
        <div> Type IS  :: </div>
        <div> Type IS  :: </div>
        <div> Type IS  :: </div>
    </div>
    <hr>

    
    <span>There Are Total 11 Span TAgs </span>
    <span></span>
    <span></span>
    <span class="duplicates"></span>
    <span class="duplicates"></span>
    <span class="duplicates"></span>
    <span></span>
    <span></span>
    <hr>





</body>
    <script>
        $(document).ready(function(){

            /************************ Jquery Trim (Remove OR TRim Extra In String )  *****************************/
            var str = "      I Have A      S  T    R  IN    G                ";
            $( "#withouttrim" ).html( "Original String:   '" + str + "'" );
            $( "#withtrim" ).html( "Trimed String::  '" + $.trim(str) + "'" );
            /**************************************************************************************************/

            /*************************** Checking Data TYpe In Jquery Using $.type  ******************************/
                    //Syntax : $.type( obj )
            $("div").eq(1).append($.type(true));
            $("div").eq(2).append($.type(true));
            $("div").eq(3).append($.type(3));
            $("div").eq(4).append($.type(new Number(3)));
            $("div").eq(5).append($.type("test"));
            $("div").eq(6).append($.type( new String("test") ) );
            $("div").eq(7).append($.type( function() {} ) );
            $("div").eq(8).append($.type([]) );
            $("div").eq(9).append($.type( new Array() ) );
            $("div").eq(10).append($.type( new Date() ) );
            $("div").eq(11).append($.type( new Error() )  );
            $("div").eq(12).append($.type( Symbol() )  );
            $("div").eq(13).append($.type( Object( Symbol() ) ) );
            $("div").eq(14).append($.type( /test/ ) );
            /*************************************************************************************************************/

            /**************** .Unique() & .uniqueSort() *******************************************************************/
            //Sorts an array or an array-like object of DOM elements, in place, with the duplicates removed.
            //Note that this only works on arrays/array-likes of DOM elements, not strings or numbers.

            //As of jQuery 3.0, .unique() method is deprecated and just an alias of jQuery.uniqueSort(). Please use that method instead.

            var uniques = $("span").get();
            var span  = $("span");
            uniques = uniques.concat( $( ".duplicates" ).get() );

            span.eq(1).html("<br> Before Unique Value Total Span Tags Are " + uniques.length + "<br>");
            uniques = $.uniqueSort(uniques);
            $("span").eq(2).html("After Unique Value Total Span Tags Are " + uniques.length + "<br>");
            /***********************************************************************************************************/


            /*********************  When()  -> If No Parameter Passed But Also Its Called  **************************************/
            $.when().then(function() {
                alert( "When Is  fired immediately" );
            });
            /*********************************************************************************************************************/

            /***************************** last() *****************************/
            $( "div" ).last().css("color","red");
        });
    </script>
</html>

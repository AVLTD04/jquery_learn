<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.uniqueSort() </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>

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
    /******************************************************  .uniqueSort() **********************************************************************/

    //Sorts an array or an array-like object of DOM elements, in place, with the duplicates removed.
    //Note that this only works on arrays/array-likes of DOM elements, not strings or numbers.

    //As of jQuery 3.0, .unique() method is deprecated and just an alias of $.uniqueSort(). Please use that method instead.

    var uniques = $("span").get();
    uniques = uniques.concat($(".duplicates").get());

    $("span").eq(1).html("<br> Before Unique Value Total Span Tags Are " + uniques.length + "<br>");
    uniques = $.uniqueSort(uniques);
    $("span").eq(2).html("After Unique Value Total Span Tags Are " + uniques.length + "<br>");

    /*******************************************************************************************************************************************/
</script>

</html>
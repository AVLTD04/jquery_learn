<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nth-child Topic [ :nth-child() || :nth-last-child() || :nth-last-of-type() || :nth-of-type() ]</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <style>
        span {
            color: blue;
            padding-left: 20px;
            font-weight: 300;
            margin: 10px;
            border: 2px dotted green;
        }
    </style>
</head>

<body>

    <h2>nth-child</h2>
    <ul id="nth-child">
        <li> The LIst Item 1 || </li>
        <li> The LIst Item 2 || </li>
        <li> The LIst Item 3 || </li>
        <li> The LIst Item 4 || </li>
        <li> The LIst Item 5 || </li>
        <li> The LIst Item 6 || </li>
        <li> The LIst Item 7 || </li>
        <li> The LIst Item 8 || </li>
        <li> The LIst Item 9 || </li>
        <li> The LIst Item 10 || </li>
        <li> The LIst Item 11 || </li>
        <li> The LIst Item 12 || </li>
        <li> The LIst Item 13 || </li>
        <li> The LIst Item 14 || </li>
        <li> The LIst Item 15 || </li>
        <li> The LIst Item 16 || </li>
        <li> The LIst Item 17 || </li>
        <li> The LIst Item 18 || </li>
        <li> The LIst Item 19 || </li>
        <li> The LIst Item 20 || </li>
        <li> The LIst Item 21 || </li>
        <li> The LIst Item 22 || </li>
        <li> The LIst Item 23 || </li>
        <li> The LIst Item 24 || </li>
        <li> The LIst Item 25 || </li>
    </ul>
    <hr>
    <br>

    <h2> nth-last-child </h2>
    <ul id="nth-last-child">
        <li> The LIst Item 1 || </li>
        <li> The LIst Item 2 || </li>
        <li> The LIst Item 3 || </li>
        <li> The LIst Item 4 || </li>
        <li> The LIst Item 5 || </li>
        <li> The LIst Item 6 || </li>
        <li> The LIst Item 7 || </li>
        <li> The LIst Item 8 || </li>
        <li> The LIst Item 9 || </li>
        <li> The LIst Item 10 || </li>
        <li> The LIst Item 11 || </li>
        <li> The LIst Item 12 || </li>
        <li> The LIst Item 13 || </li>
        <li> The LIst Item 14 || </li>
        <li> The LIst Item 15 || </li>
        <li> The LIst Item 16 || </li>
        <li> The LIst Item 17 || </li>
        <li> The LIst Item 18 || </li>
        <li> The LIst Item 19 || </li>
        <li> The LIst Item 20 || </li>
        <li> The LIst Item 21 || </li>
        <li> The LIst Item 22 || </li>
        <li> The LIst Item 23 || </li>
        <li> The LIst Item 24 || </li>
        <li> The LIst Item 25 || </li>
    </ul>
    <hr>
    <br>

    <h2> nth-last-of-type </h2>
    <ul id="nth-last-of-type">
        <li> The LIst Item 1 || </li>
        <li> The LIst Item 2 || </li>
        <li> The LIst Item 3 || </li>
        <li> The LIst Item 4 || </li>
        <li> The LIst Item 5 || </li>
        <li> The LIst Item 6 || </li>
        <li> The LIst Item 7 || </li>
        <li> The LIst Item 8 || </li>
        <li> The LIst Item 9 || </li>
        <li> The LIst Item 10 || </li>
        <li> The LIst Item 11 || </li>
        <li> The LIst Item 12 || </li>
        <li> The LIst Item 13 || </li>
        <li> The LIst Item 14 || </li>
        <li> The LIst Item 15 || </li>
        <li> The LIst Item 16 || </li>
        <li> The LIst Item 17 || </li>
        <li> The LIst Item 18 || </li>
        <li> The LIst Item 19 || </li>
        <li> The LIst Item 20 || </li>
        <li> The LIst Item 21 || </li>
        <li> The LIst Item 22 || </li>
        <li> The LIst Item 23 || </li>
        <li> The LIst Item 24 || </li>
        <li> The LIst Item 25 || </li>
    </ul>
    <hr>
    <br>
</body>
<script>
    /***********************************************
     *
     *     1. :nth-child() Selector
     *
     *          => :nth-child(even)
     *          => :nth-child(odd)
     *          => :nth-child(3n)
     *          => :nth-child(2)
     *          => :nth-child(3n+1)
     *          => :nth-child(3n+2)
     *          => .even()
     *          => .odd()
     *******************************************
     *
     *      2. :nth-last-child() Selector
     *
     *          => :nth-last-child(even)
     *          => :nth-last-child(odd)
     *          => :nth-last-child(3n)
     *          => :nth-last-child(2)
     *          => :nth-last-child(3n+1)
     *          => :nth-last-child(3n+2)
     ***********************************************
     *
     *      3. :nth-last-of-type() Selector
     *
     *          => :nth-last-of-type(even)
     *          => :nth-last-of-type(odd)
     *          => :nth-last-of-type(3n)
     *          => :nth-last-of-type(2)
     *          => :nth-last-of-type(3n+1)
     *          => :nth-last-of-type(3n+2)
     *****************************************************
     *
     *        4.  Selector
     *
     *          => :nth-last-of-type(even)
     *          => :nth-last-of-type(odd)
     *          => :nth-last-of-type(3n)
     *          => :nth-last-of-type(2)
     *          => :nth-last-of-type(3n+1)
     *          => :nth-last-of-type(3n+2)
     *
     ************************************************************
     */


    /**********************************@abstract
     *
     *  1.
     *      Syntax : jQuery( ":nth-child(index/even/odd/equation)" )
     *      index:  The index of each child to match, starting with 1,
     *              the string even or odd, or an equation
     *              ( eg. :nth-child(even), :nth-child(4n) )
     *
     *
     */
    $("#nth-child li:nth-child(2)").append("<span>  {- 2nd!  }</span>");
    $("#nth-child li:nth-child(2n)").append("<span> { 2n  }</span>");
    $("#nth-child li:nth-child(3n)").append("<span> { 3n  }</span>");
    $("#nth-child li:nth-child(2n+1)").append("<span>  {2n + 1  }</span>");
    $("#nth-child li:nth-child(3n+1)").append("<span> {3n + 1 } </span>");
    $("#nth-child li:nth-child(2n+2)").append("<span>  {2n + 2  }</span>");
    $("#nth-child li:nth-child(3n+3)").append("<span> {3n + 3 } </span>");


    /*************************************************************************************************/



    /**********************************@abstract
     *
     *  2.
     *      Syntax : jQuery( ":nth-last-child(index/even/odd/equation)" )
     *      index:  The index of each child to match, starting with the last one (1),
     *              the string even or odd, or an equation
     *              ( eg. :nth-last-child(even), :nth-last-child(4n) )
     *
     *
     */
    $("#nth-last-child  li:nth-last-child(2)").append("<span>  {- 2nd to last!  }</span>");
    $("#nth-last-child  li:nth-last-child(2n)").append("<span> { 2n  }</span>");
    $("#nth-last-child  li:nth-last-child(3n)").append("<span> { 3n  }</span>");
    $("#nth-last-child  li:nth-last-child(2n+1)").append("<span>  {2n + 1  }</span>");
    $("#nth-last-child  li:nth-last-child(3n+1)").append("<span> {3n + 1 } </span>");
    $("#nth-last-child  li:nth-last-child(2n+2)").append("<span>  {2n + 2  }</span>");
    $("#nth-last-child  li:nth-last-child(3n+3)").append("<span> {3n + 3 } </span>");


    /*************************************************************************************************/


    /**********************************@abstract
     *
     *  3.
     *      Syntax : jQuery( ":nth-of-type(index/even/odd/equation)" )
     *      index:  he index of each child to match, starting with 1
     *              the string even or odd, or an equation
     *               ( eg. :nth-of-type(even), :nth-of-type(4n) )
     *
     *
     */
    $("#nth-last-of-type  li:nth-last-of-type(2)").append("<span>  {- 2nd nth-last-of-type  }</span>");
    $("#nth-last-of-type  li:nth-last-of-type(2n)").append("<span> { 2n  }</span>");
    $("#nth-last-of-type  li:nth-last-of-type(3n)").append("<span> { 3n  }</span>");
    $("#nth-last-of-type  li:nth-last-of-type(2n+1)").append("<span>  {2n + 1  }</span>");
    $("#nth-last-of-type  li:nth-last-of-type(3n+1)").append("<span> {3n + 1 } </span>");
    $("#nth-last-of-type  li:nth-last-of-type(2n+2)").append("<span>  {2n + 2  }</span>");
    $("#nth-last-of-type  li:nth-last-of-type(3n+3)").append("<span> {3n + 3 } </span>");


    /*************************************************************************************************/
</script>

</html>
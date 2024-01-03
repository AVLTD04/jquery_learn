<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.next() || Next Adjacent Selector (“prev + next”) || Next Siblings Selector (“prev ~ siblings”) || .nextAll() || not() </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>

    <div>The Text Line 1 </div>
    <div>The Text Line 2 </div>
    <div id="select3">The Text Line 3 </div>
    <div>The Text Line 4 </div>
    <div>The Text Line 5 </div>
    <hr>
    <div id="selectUntil">
        <p>Paragraph 1 in the div.</p>
        <p>Paragraph 2 in the div.</p>
    </div>

    <p>Paragraph 3. After a div.</p>
    <p>Paragraph 4. After a div.</p>

    <div id="selectAll">
        <p>Paragraph 5 in the div.</p>
        <p>Paragraph 6 in the div.</p>
    </div>

    <p>Paragraph 7. After a div.</p>
    <p>Paragraph 8. After a div.</p>
</body>

<script>
    $(document).ready(function() {

        /***************** .next() Method  ***************************************** */
        $("#select3").next().css("color", "red");
        /****************************************************************************/

        /********************************************************
         *
         * The notable difference between (prev + next) and (prev ~ siblings) is
         * their respective reach. .
         *
         * While the former reaches only to the immediately following sibling element,
         * the latter extends that reach to all following sibling elements.
         *
         */

        /************************* Next Adjacent Selector (“prev + next”) *******************************************/

        //IN THis Code Next To Div p-3 And p-7 Are near about next to stand

        $("div + p").css("backgroundColor", "yellow"); //Adjent Mean Connected Or Stand NExt To ( /div > p )
        /***********************************************************************************************************/

        /******************************** Next Siblings Selector (“prev ~ siblings”)  ***********************************************/

        // IN This Code P TAg Siblins To Surounded By Div Mean All Sibling P TAgs Are Highlighted( div > p < div )

        $("p ~ div ").css("color", "blue");
        /******************************************************************************************************************************/

        /************************************ .nextAll()   *********************************/
        //Syntax : .nextAll( [selector ] )
        $("#selectAll").nextAll().css("fontWeight", "bold");
        /******************************************************************************************************************************/

        /************************************ .nextUNtil()   *********************************/
        //Syntax : .nextUntil( [selector ] [, filter ] )
        $("#selectUntil").nextUntil("div").css("fontWeight", "bold");
        /******************************************************************************************************************************/




    })
</script>

</html>
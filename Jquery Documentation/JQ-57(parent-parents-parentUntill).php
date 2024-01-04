<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.parent() || :parent || .parents() || .parentsUntil()</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>

<body>

    <div>
        <div class="selected">
            <p> The Direct PArent Of Div Selected </p>
        </div>

        <ul>
            <li> The LIst Item IS 1 </li>
            <li> The LIst Item IS 2 </li>
            <li> The LIst Item IS 3 </li>
            <li> The LIst Item IS 4 </li>
            <li> The LIst Item IS 5 </li>
            <li> The LIst Item IS 6 </li>
            <li> The LIst Item IS 7 </li>
            <li> The LIst Item IS 8 </li>
            <li> The LIst Item IS 9 </li>
            <li> The LIst Item IS 10 </li>
        </ul>
        <hr><br>
        <table border="1">
            <tr>
                <td>Value 1</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Value 2</td>
                <td>&nbsp;</td>
            </tr>
        </table>
        <hr><br>
        <div class="chosenuntill"> Main Div TExt <br>
            <span>Span Text
                <p> P Tag Text <br>
                    <b class="parents"> b Tag Text <br>
                        <code>
                            < b>
                        </code>
                        Block || My PArents ::
                    </b>
                </p>
            </span>
        </div>
        <span id="parentsans"></span>

    </div>

</body>
<script>
    /************** .parent()  [Here .selected  iS A Direct Parent Of p ]  ************************/
    $("p").parent(".selected").css("color", "blue");
    /***********************************************************************************/

    /********************* :parent Selector [ Here tr is A PArent Of td ] ****************************************/

    $("td:parent").css("backgroundColor", "green");

    /*************************************************************************************************************/

    /********************************************** 
     * 
     * .parents() 
     * [ It Mean A element Have To Traverse Till The Ancentors ]  
     * 
     * In Simple Way Grand Child / selected Block To  Ancentors 
     * 
     * *****************************************************/

    var parentsNAmes = $("b").parents().map(function() {
        return this.tagName;
    }).get().join(", ");

    $("#parentsans").text(parentsNAmes).css({
        "border": "3px dotted",
        "color": "blue"
    });

    /***********************************************************/

    /***************************************************************
     * 
     * .parentsUntil()
     * 
     * It Means WE Have Fixed Path To traverse 
     * 
     * Parents Until The Selected Block OR Element Not arrived
     * 
     * here We Setted , We Have To Find b's PArents Untill .chosenuntill class not arrived in path 
     */

    $("b").parentsUntil(".chosenuntill").css("background-color", "yellow");

    /**********************************************************************************************/
</script>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.remove() || .removeAttr() || .removeClass() || .removeProp() </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <style>
        .rmclass {
            color: darkgoldenrod;
            background-color: beige;
        }
    </style>
</head>

<body>
    <!---------------------------------------    .remove()    --------------------------------------->
    <p id="id1rm">HEllo Im Id-1 P Tag </p>
    <button id="rm1p">Remove ID-1 P TAg </button>
    <!-------------------------------------------------------------------------------------------------->
    
    <hr>

    <!---------------------------------------    .removeAttr()    --------------------------------------->
    <input type="text" id="id2rm" disabled value="Try To Enter Text"> <!-- Disabled Is Also Attribute ----->
    <button id="rm2atr">Remove Attribute (Disabled)</button>
    <!-------------------------------------------------------------------------------------------------->

    <hr>

    <!---------------------------------------     .removeClass()    --------------------------------------->
    <p class="rmclass">Class IS Embeded  </p>
    <button id="rm3class">Remove Class </button>
    <!-------------------------------------------------------------------------------------------------->

    <hr>

    <!---------------------------------------    .removeProp()   --------------------------------------->
    <p id="proplog"></p>
    <button id="setprop">CLick To Set Prop </button>
    <button id="rm4prop">Remove Prop </button>
    <!-------------------------------------------------------------------------------------------------->

    <hr>
</body>

<script>
    $(document).ready(function() {

        /*************************** remove() [Mean It can Remove Html Elements ] ****************************************/
        $("#rm1p").click(function() {
            $("#id1rm").remove();
        });
        /*******************************************************************************************************************/


        /********************************* removeAttr() [Mean It Can Remove Html Attribues like name,id,value,readonly,disabled..Etc ] ************************/
        $("#rm2atr").click(function() {
            $("#id2rm").removeAttr("disabled");
        });
        /*****************************************************************************************************************************************************/


        /******************** .removeClass() [Class Remove In The Elements ] classToggle IS Also Works *********************/
        $("#rm3class").click(function() {
            $("p.rmclass").removeClass("rmclass");
        });
        /*********************************************************************************************************************/


        /**************************************************************************************************************************
         * .removeProp() 
         * 
         * Remove a property for the set of matched elements 
         * 
         */

        $("#setprop").click(function() {
            // Here We  Setted The Prop Named "set" And  Value 99999 .
            $("#proplog").prop("set", 99999).append("Before Prop Value is: " + ($("#proplog").prop("set")) + "<br> "); 
        });

        $("#rm4prop").click(function() {
            $("#proplog").removeProp("set").append("After Prop Value is: ", ($("#proplog").prop("set")), "<br> ");
        });
        /***************************************************************************************************************************/

    })
</script>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.trigger() || .triggerHandler() || .unbind() || .undelegate()</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <style>
        .unbind {
            background-color: lightblue;
            color: rebeccapurple;
            font-weight: bold;
        }

        .delgundeleg {
            height: 70px;
            width: 350px;
            background-color: lightgreen;
            color: darkorange;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!---------------------------------------------- For Trigger And Trigger Handle -------------------------------------->
    <input type="text" value="Hello World"><br><br>

    Click To HAndle The Trigger : <input type="checkbox" value="Hello World"><br><br>

    <hr>
    <button id="trig">Click TO Trigger </button><br>
    <hr>
    <button id="trighandle">Double Click TO Trigger HAndler </button><br>

    <!--------------------------------------------------------------------------------------------------------------------------->

    <hr>
    <!--------------------------------------------- For .bind() || unbind()  block  --------------------------------------->
    <p class="unbind">Click this Block to change its background color.</p>

    <button id="unbindevnt">Remove paragraph handler</button>
    <!------------------------------------------------------------------------------------------------------------------->

    <hr>

    <!--------------------------------------------- For .delegate() || undelegate()  block  --------------------------------------->
    <div class="delgundeleg">Does Nothing .</div>

    <button id="delegate">Delegate Click</button>
    <button id="undelegate">UnDelegate Click</button>
    <span class="logdeleg"> </span>
    <!------------------------------------------------------------------------------------------------------------------->

    <hr>

</body>
<script>
    /*****************************  Trigger[Select TRigger ] The Block Using Trigger[Click Trigger ]  ~ Only PArticular Blocks ~  ***********************************/
    $("input[type=text]").select(function() {
        $("input[type=text]").after(" Text marked!");
    });
    $("#trig").click(function() {
        $("input[type=text]").trigger("select");
    });
    /**********************************************************************************************************************************/

    /******************************** Trigger Handler [Execute all handlers attached to an element for an event ] ******************************/
    $("input[type=checkbox]").click(function() {
        $("input[type=checkbox]").after(" Click event triggered!");
    });
    $("#trighandle").dblclick(function() {
        $("input[type=checkbox]").triggerHandler("click");
    });
    /******************************************************************************/

    /*************************** .unbind()  Remove Trigger Ability Opposite Of bind() trigger Event **************************/
    $(".unbind").bind("click", function() {
        $(this).toggleClass("unbind");
    });
    $("#unbindevnt").click(function() {
        $(".unbind").unbind("click"); //unbind Is ALso A Trigger But It IS For Disable Trigger Ability 
    });
    /********************************************************************************************************************************/


    /*************************** .undelegate()  Remove Trigger Ability Opposite Of delegate() trigger Event **************************/

    $("#delegate").on("click", function() {
        $("body").delegate(".delgundeleg", "click", function() {
            $("logdeleg").show().fadeOut("slow");
        }).find(".delgundeleg").text("Can Click!");
    });
    $("#undelegate").on("click", function() {
        $("body").undelegate(".delgundeleg", "click", function() {
            $("logdeleg").show().fadeOut("slow");
        }).find(".delgundeleg").text("Does nothing...");
    });
    /********************************************************************************************************************************/
</script>

</html>
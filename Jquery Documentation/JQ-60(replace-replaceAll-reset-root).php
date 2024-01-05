<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.replaceAll() || .replaceWith() || :reset || :root  </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>

    <!-- For Replace All Block  -->
    <hr>
    <p>The Text Is Now Been Replaced By Blah Blah</p>
    <p>The Text Is Now Been Replaced By Blah Blah</p>
    <p>The Text Is Now Been Replaced By Blah Blah</p>
    <p>The Text Is Now Been Replaced By Blah Blah</p>
    <p>The Text Is Now Been Replaced By Blah Blah</p>
    <button id="replaceAll">Click To Replace </button>
    <hr>
    <!---------------------------------------------------->

    <!-- For Replace With Block  -->
    <div>Replace Text </div>
    <div>Replace Text </div>
    <div>Replace Text </div>
    <div>Replace Text </div>
    <div>Replace Text </div>
    <button id="rpLcewith">Click To Replace All </button>
    <!------------------------------------------------------->

    <!-- For :reset Selector  -->
    <input type="reset" value="ReSet">
    <hr>
    <!------------------------------------------------------->

    <!-- For Root Element Log DAta  -->
    <div id="log"> The root of this document is: </div>
    <!-------------------------------------------------------->
</body>
<script>
    /*********** Replace All Block Replace All Elements Are Given As A Argument *************************/
    $("#replaceAll").click(function() {
        $("<b> Blah Blah </b><br>").replaceAll("p");
    });
    /****************************************************************************************************/

    /*********** Replace With  Block Replace With Some Addition Element Or TExt  Given As A Argument *************************/
    $("#rpLcewith").click(function() {
        $("div").replaceWith(("<b> Blah Blah </b><br>"));
    });
    /****************************************************************************************************/

    /************** :reset Selector Select Those Blocks That Input Type Is reset **************************************/
    $("input:reset").css({
        background: "yellow",
        border: "3px red solid"
    });
    /****************************************************************************************************/

    /******************** :root [ Gives The Root Element OF Document ] *****************************************/

    $("<b></b>").text($(":root")[0].nodeName).appendTo("#log");
    
    /**********************************************************************************************************/
</script>

</html>
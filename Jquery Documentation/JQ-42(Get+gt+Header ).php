<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get + :gt + :header </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>

    <div>
        <!--------------------------------------------------------------------------------------------------->
        <!-- Raw Data For get Index  -->
        <ul>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, commodi?</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, commodi?</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, commodi?</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, commodi?</li>
        </ul>

        <!-- Get Index Value Data Setted Here -->
        <h4>
            <p id="getIndex"> </p>
        </h4>
        <!--------------------------------------------------------------------------------------------------->


        <!--------------------------------------------------------------------------------------------------->
        <!-- Raw Data For gt Selector  -->
        <table border="2">
            <tr>
                <th>TH # </th>
                <th>TH # </th>
                <th>TH # </th>
            </tr>
            <tr>
                <td>TD #0</td>
                <td>TD #1</td>
                <td>TD #2</td>
            </tr>
            <tr>
                <td>TD #3</td>
                <td>TD #4</td>
                <td>TD #5</td>
            </tr>
            <tr>
                <td>TD #6</td>
                <td>TD #7</td>
                <td>TD #8</td>
            </tr>
        </table>

        <!-- :gt [It IS Also Follows Index ] Selector  -->

        <!--------------------------------------------------------------------------------------------------->

        <!------------------------------------>
        <h2>HEading Realted Text</h2>
        <p>NOrmal Paragraph </p>
        <h4>HEading Realted Text</h4>
        <p>NOrmal Paragraph </p>
        <!------------------------------------>

        <!------------------------------------>
        <!-- <p id="TArgetDisplay"></p> -->
        <p>
        <h4 id="RealteTarget">
            Mouse Over Me And See That Block Properties
        </h4>
        <span id="TArgetDisplay"></span>
        </p>
        <!------------------------------------>
    </div>

</body>
<script>
    /********************************** GEt Index DAta/Text  Using .get() Method ****************************************/
    $("#getIndex").html($("li").get(3));
    /********************************************************************************************************************/

    /************************************** :gt Selector [Index With + And - ]  *****************************************/
    $("td:gt(-3)").css("color", "red");
    $("td:gt(3)").css("background-color", "lightblue");
    /*******************************************************************************************************************/

    /**************************************** HEader Selector  *****************************************************/
    $(":header").css("color", "blue");
    /**************************************************************************************************************/

    /******************** GEt Height,  Width , INner - Outer  Height-Width ****************************************/
    $("#RealteTarget").mouseover(function(event) {
        var block = event.relatedTarget.nodeName;       //Returns The Element Name 

        var OutH = " The Hovered Block <b>Outer  Height </b> IS " + $(block).outerHeight() + "px";
        var OutW = " The Hovered Block <b>Outer  Width </b> IS " + $(block).outerWidth() + "px";
        var InH = " The Hovered Block <b>Inner Height </b>  IS " + $(block).innerHeight() + "px";
        var InW = " The Hovered Block <b>Inner Width </b>  IS " + $(block).innerWidth() + "px";
        var h = " The Hovered Block <b>Height  </b>IS " + $(block).height() + "px";
        var W = " The Hovered Block <b>Width </b> IS " + $(block).width() + "px";

        $("#TArgetDisplay").html(OutH + "<br>" + OutW + "<br>" + InW + "<br>" + InH + "<br>" + h + "<br>" + W);
    });
    /*****************************************************************************************************************/
</script>

</html>
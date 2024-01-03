<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery.hasData() || Jquery HoldReady() [Boolean] </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <div>
        <div id="data"></div>
        <ul>
            <li>000</li>
            <li>000</li>
            <li>000</li>
        </ul>
        <p id="display1"></p>
        <p id="display2"></p>
    </div>

</body>
<script>
    $(document).ready(function() {

        /************************************** hasData() Related Code ******************************************************************/
        var data = $("#data");

        /* Before div Data Blank Data  */
        $("#display1").text($.hasData(data) + " " + data); // HAs data Is Check Element Has Data OR nOt 

        /* Adding New Data IN div Element */
        var newData = $.data(data, "testing", 123);

        /* After Adding  Check div Data   */
        $("#display2").text($.hasData(data) + "  " + newData); // HAs data Is Check Element Has Data OR nOt 

        /*********************************************************************************************************************************/

        /************************************* HoldRelay() Related Code *****************************************************************/
        $.holdReady(true);
        alert("Hold Relay Now TRue Called ");
        $.holdReady(false);
        $(function() { // jQuery(document).ready(function(){
            // Other jQuery stuff for after ready()
            alert("Hold Relay Now False ");
        });
        /********************************************************************************************************************************/


    })
</script>

</html>
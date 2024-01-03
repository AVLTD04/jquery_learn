<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Param || parseHTML || parseJSON || parseXML </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>


    <div id="display"></div>
    <hr>
    <div id="parseHTML"></div>
    <hr>
    <div id="parseJSON"></div>
    <hr>
    <div id="parseXML"></div>
    <hr>


</body>
<script>

    $(document).ready(function() {

        var mkaeobj = {
            personal: {
                id: 121,
                name: "UserName",
                Another_field: "Ok_OK"
            },
            work: {
                work_id: 522,
                desig: "Emp"
            },
            noIMp: [5, 9, 21]
        };

        var str = $.param(mkaeobj);
        $("#display").text(str);

        /**********************************************************************************************************************/

        /************************************** PArse Html -> Used For Find Html Elements Used On Data *********************************************/
        var strhtml = "A <b>Data  science portal</b> for <b> Beginners </b>";
        var html = $.parseHTML(strhtml);
        var nodeNames = [];

        // Append the parsed HTML
        $("#parseHTML").append(html);

        // Gather the parsed HTML's node names
        $.each(html, function(i, el) {
            nodeNames[i] = "<li>" + el.nodeName + "</li>";
        });

        // Insert the node names
        $("#parseHTML").append("<h3>Node Names:</h3>");
        $("<li></li>").append(nodeNames).appendTo($("#parseHTML"));
        /**********************************************************************************************************************************************/

        /************************************** PArse JSON -> Used For Find JSON Elements Used On Data *********************************************/
        var strjson = '{ "name": "John" , "city":"New York" }';
        var JSON = $.parseJSON(strjson);
        var nodeNamesJSON = [];

        $("#parseJSON").html("NAme : " + JSON.name + ",<br> City : " + JSON.city);
        /*******************************************************************************************************************************************/

        /************************************** PArse XML -> Used For Find XML  Elements Used On Data *********************************************/
        var strxml = "<rss version='2.0'><channel><title>RSS Title</title></channel></rss>";
        var XML = $.parseXML(strxml);
        dataxml = $(XML).find("title");

        $("#parseXML").html(dataxml);

    });
</script>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Ajax Get With MAny data types </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <button id="loadget1">Get The File Which Data Type IS : PHP </button><br>
    <button id="loadget2">Get The File Which Data Type IS : JSON </button><br>
    <button id="loadget3">Get The File Which Data Type IS : JS </button><br>
    <button id="loadget4">Get The File Which Data Type IS : </button><br>
    <button id="loadget5">Get The File Which Data Type IS : </button><br>
    <hr>
    <div id="logdata"></div>
    <div id="DispDAta"></div>
</body>

<script>
    $(document).ready(function() {


        /***********************************************************************************************
         * 
         * The jqXHR.success(), jqXHR.error(), and jqXHR.complete() 
         * callback methods are removed 
         * as of jQuery 3.0. 
         * 
         * You can use jqXHR.done(), jqXHR.fail(), and jqXHR.always() instead. 
         * 
         * *********************************************************************************************
         */
        $("#loadget1").click(function() {
            $.ajax({
                    type: "GET",
                    url: "./JQUERY-AJAX/sample1.php",
                    contentType: "text/php; charset=utf-8",
                    dataType: 'text',
                    success: function(result, data, status) {
                        $("#logdata").text(data);
                        $("#DispDAta").html(result);

                    },
                })
                .done(function() {
                    alert("Data Load SuccessFully");
                })
                .fail(function(execption) {
                    alert("error");
                });
        });

        /*****************  We Can Also Use $.getJSON() ***********************************************************/
        $("#loadget2").click(function() {
            $.ajax({
                    type: "POST",
                    url: "./JQUERY-AJAX/sample1.json",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function(result, data, status) {
                        $("#logdata").text(data);


                    },
                })
                .done(function(json) {
                    alert("Data Load SuccessFully");
                    $("#DispDAta").html(JSON.stringify(json));
                })
                .fail(function() {
                    alert("error");
                });
        });
        /*************************************************************************************************************/

        /*****************  We Can Also Use $.getScript()  ***********************************************************/
        $("#loadget3").click(function() {
            $.ajax({
                    type: "POST",
                    url: "./JQUERY-AJAX/sample1.js",
                    // contentType: "text/javascript; charset=utf-8",
                    // dataType: "text/javascript",
                    success: function(result, data, xhr) {
                        $("#logdata").text(data);
                        $("#DispDAta").text(result);

                    },
                })
                .done(function() {
                    alert("Data Load SuccessFully");
                })
                .fail(function() {
                    alert("error");
                });
        });
        /*******************************************************************************************************************/
    })
</script>

</html>
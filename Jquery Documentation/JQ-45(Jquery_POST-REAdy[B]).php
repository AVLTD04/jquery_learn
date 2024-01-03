<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery POST </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <button id="fetchgetfile">Click Here To Get SAmple File </button>
    <button id="fetchpostform">Click Here To Get SAmple Form File </button>
    <div class="showget"></div>
    <div class="testform"></div>
</body>
<script>
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

    $(document).ready(function() {
        $("#fetchgetfile").click(function() {

            /*** Syntax : jQuery.get( url [, data ] [, success ] [, dataType ] ) ************************/
            $.get("JQUERY-AJAX/sample1.php", function(data) {
                alert("Data Loaded SuccessFully ");
                $(".showget").html(data);
            }).fail(function() {
                alert("error");
            });

        })
    });


    $("#fetchpostform").click(function() {

        /*** Syntax : jQuery.post( url [, data ] [, success ] [, dataType ] ) ************************/

        /* $.ready IS Simmilar As $(document).ready()  */

        $.when($.ready) //Check  Document IS Ready  And Then Code Block Runs
            .then(function() {
                $.post("./jq-exp-task[1].php", function(data) {
                        alert("Data Loaded SuccessFully ");
                        $(".testform").html(data);
                    })
                    .fail(function() {
                        alert("error");
                    })
            });
            $.readyException = function( error ) {
                window.setTimeout( function() {
                    throw error;
                });
            };
    });
</script>

</html>

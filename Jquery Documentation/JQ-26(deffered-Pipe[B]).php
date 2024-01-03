<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utility method to filter and/or chain Deferreds.</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <div id="msg"></div>
</body>
<script>
    $(document).ready(function() {


        /***********************************************
         * Category: Deferred Object
         * --------------------------------------------
         * you can use any of 
         * the methods below by either chaining directly from 
         * the object creation or saving the object in a variable 
         * and invoking one or more methods on that variable.
         * 
         */

        var defer = $.Deferred();

        // Utility method to filter and/or chain Deferreds.
        var filtered = defer.pipe(function(value) {
            return value * 5;
        });

        /**************************************
         *  // defer.resolve(5);       
         *  // defer.reject(5);      
         * 
         * Note: This API has been removed in jQuery 1.8; please use deferred.state() instead.
         * 
         *  
         * 
         */


        filtered.done(function(value) {
            $("#msg").text("Value is ( 5*5 = ) 25 : Success Value .. " + value);
        });
        filtered.fail(function(value) {
            $("#msg").text("Value is ( 5*5 != ) 25: VAlue Fails .. " + value);
        });
    });
</script>

</html>
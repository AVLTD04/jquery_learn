<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IsArray() || InArray() </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <p id="arraylog"></p>

    <div>
        The Array Find Position IS :: <span> </span><br>
        The Array Find Position IS :: <span> </span><br>
        The Array Find Position IS :: <span> </span><br>
        The Array Find Position IS :: <span> </span><br>
        The Array Find Position IS :: <span> </span><br>
        The Array Find Position IS :: <span> </span><br>
    </div>
</body>
<script>
    $(document).ready(function() {

        var array = ['nulllla', 'data1', 424, 'deff2', 99999, '45132'];

        /***** Checking Array IS Here Or Not ********************/
        // IsArray REturns Boolean VAlue true Or nOt(false) 
        if ($.isArray(array) == true) {
            $("#arraylog").text("Array  Found ");

            // ARRay Found Then Find VAlue In Array 
            var $set = $("span");

            // InArray REturns Index Value Where Value Found 
            $set.eq(0).text($.inArray('nulllla', array));
            $set.eq(1).text($.inArray('data1', array));
            $set.eq(2).text($.inArray(424, array));
            $set.eq(3).text($.inArray('deff2', array));
            $set.eq(4).text($.inArray(99999, array));
            $set.eq(5).text($.inArray('45132', array));

        } else {
            $("#arraylog").text("Array Not Found ");
        }

    })
</script>

</html>
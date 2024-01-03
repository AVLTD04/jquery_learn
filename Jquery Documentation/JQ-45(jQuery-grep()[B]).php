<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery.grep() </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    
    <div id="display"></div>
</body>
<script>
    $(document).ready(function(e) {
        var array = ['211', '51', '34', '55', '46', '87', '32', '22,', '121', '158', '124', '199']; /* ORiginal Array  */

        arr = jQuery.grep(array, function(i) {
            /*  Here We MAde A Filter Array Without Affect Original Array  */
            return (i > 100 && i < 200);
        });
        $("#display").text(arr.join(","));
    })
</script>

</html>
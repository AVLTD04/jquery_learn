<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuery.map() And .map() </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>
<body>
<form>
        <div>
            <input type="checkbox" name="blocks1" value="Block-A" id="Block-A">
            <label for="Block-A">Block-A</label>
        </div>
        <div>
            <input type="checkbox" name="blocks2" value="Block-B" id="Block-B">
            <label for="Block-B">Block-B</label>
        </div>
        <div>
            <input type="checkbox" name="blocks3" value="Block-C" id="Block-C">
            <label for="Block-C">Block-C</label>
        </div>
    </form>
    <hr>
    <div id="showmap"></div>

<hr>

        <div id="showmapArray"></div>
        <hr>
</body>
    <script>
        /************************************ Array Jquery  Map ($.map() ) [It Follows Only Array ] *********************************************************************/
        var arr = [ "a", "b", "c", "d", "e" ];

        var map = $.map(arr, function(n) {
            return [n.toUpperCase()];
        });
        $("#showmapArray").text(map);
        /**********************************************************************************************************************/


        /*********************   .Map()  [ is particularly useful for getting the value of a collection of elements.] *************************/
        $("input").on("click", function () {
            
            var data = $("input:checked").map(function(){
                return this.id;
            })
            .get() 
            .join();
        $("#showmap").text(data);
        });
        /**********************************************************************************************************************/

    </script>
</html>
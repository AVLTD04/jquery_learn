<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Remove Data</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>
<body>
<div>
        The VAlue 1 And Its Data
        { <br>
        <p id="p1"></p></span>
        <p id="p2"></p></span>
        <p id="p3"></p></span>
        }
        <br>

        The VAlue 1 And Its Data
        { <br>
            With REmoved Data
        <p id="p21"></p></span>
        <p id="p22"></p></span>
        <p id="p23"></p></span>
        }
    </div>
</body>
    <script>
        $(document).ready(function(){

        /*************************************************************************
         *
         * Store arbitrary data associated with the matched elements
         * or return the value at the named data store for
         * the first element in the set of matched elements.
         *
         *
        */
        $("div").data("val1", { Data1: 23, Data2: 38, Data3: 148 });
        $("#p1").text("The Data1 Val Is : " + $("div").data("val1").Data1);  // Here A Data MEan Add Data
        $("#p2").text("The Data2 Val Is : " + $("div").data("val1").Data2); // Here A Data MEan Add Data
        $("#p3").text("The Data3 Val Is : " + $("div").data("val1").Data3); // Here A Data MEan Add Data

        var div = $( "div" )[ 0 ];
        $("div").data("test1", "OnlyOne");

        //  Syntax : jQuery.removeData( element [, name ] )
        $.removeData( div, "test1" ); /* Here Data removes  */
        $("#p21").text("The test1 Val Is : " + $("div").data("test1"));  //Dont Showen data Here (undefinded showen )
        });
    </script>
</html>

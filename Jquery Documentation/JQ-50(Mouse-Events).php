<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoseEvents </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <style>
        div {
            background-color: aliceblue;
            height: 50px;
            width: 200px;
            margin: 15px;
            padding-top: 25px;
            text-align: center;
            /* align-content: center; */
        }
    </style>
</head>
<body>
    <div id="clickev" >CLick ME Form The Mouse</div>
    <div id="hover" >Hover Me From The Mouse </div>
    <div id="onmouse" >View Coordinates | Hover DATA Block</div>

    <p id="logData"></p>
</body>
        <script>
            $(document).ready(function(){

                /*****************************************************************************************************************
                 * 
                 * Mouse Events 
                 * [
                 *      mousedown, 
                 *      mouseup, 
                 *      mouseover, 
                 *      mouseenter, 
                 *      mouseleave, 
                 *      mouseout, 
                 *      mousemove
                 * ]
                 * 
                 * 
                */


                $( "#clickev" )
                    .on( "mousedown", function() {
                        $("#logData").append( "<span style='color:#00f;'><li>Mouse down.</li></span> <hr>" );
                    })
                    .on( "mouseup", function() {
                        $("#logData").append( "<span style='color:#f00;'><li>Mouse up.</li></span> <hr>" );
                });

                $( "#hover" )
                    .on( "mouseover", function() {
                        $("#logData").append( "<span style='color:#f00;'><li>Mouse  over.</li></span> <hr>" );
                    })
                    .on( "mouseenter", function() {
                        $("#logData").append( "<span style='color:#f00;'><li>Mouse Enter.</li></span> <hr>" );
                    })
                    .on( "mouseleave", function() {
                        $("#logData").append( "<span style='color:#00f;'><li>Mouse Leave .</li></span> <hr>" );
                    })
                    .on( "mouseout", function() {
                        $("#logData").append( "<span style='color : green;'><li>Mouse Out  .</li></span> <hr>" );
                });

                $("#onmouse")
                    .on( "mousemove", function( event ) {
                        var pageCoords = "( " + event.pageX + ", " + event.pageY + " )";
                        $( "#logData" ).html( "( Mouse.pageX, Mouse.pageY ) : " + pageCoords );
                });
            })
        </script>
</html>


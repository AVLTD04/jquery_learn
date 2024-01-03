    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jquery. Extends() || Merge the contents of two or more objects together into the first object. </title>
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    </head>

    <body>

        <div id="log"></div>

        <script>
            var object1 = {
                apple: 0,
                banana: {
                    weight: 52,
                    price: 100
                },
                cherry: 97
            };
            var object2 = {
                banana: {
                    price: 200
                },
                durian: 100
            };

            // Merge object2 into object1
            var extend = $.extend(object1, object2);

            // Assuming JSON.stringify - not available in IE<8
            $("#log").append(JSON.stringify(extend));
            // $("#log").append(JSON.parse(extend.apple ) + "" + JSON.parse(extend.durian)); 
        </script>

    </body>

    </html>
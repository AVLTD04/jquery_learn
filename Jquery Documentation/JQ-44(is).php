    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>is() MEthod </title>
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    </head>

    <body>
        <div>
            <p>Just Only PAragraph</p>
            <span id="state1"></span><br>
            <span id="state2"></span>
        </div>
    </body>
    <script>
        $(document).ready(function() {
            var state1 = $("div").parent().is("p"); // is() Like Check Element And Setted As That Its Setted Or Not
            var state2 = $("p").parent().is("div"); // is() Like Check Element And Setted As That Its Setted Or Not

            $("#state1").text("Current Testt State IS  = " + state1 + "  || And Condition Is  p Is The Parent Of Div ");
            $("#state2").text("Current Testt State IS  = " + state2 + "  || And Condition Is  Div Is The Parent Of P");
        })
    </script>

    </html>
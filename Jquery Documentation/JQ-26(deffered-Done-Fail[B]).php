<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Differed Done </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <div id="msg"></div>
</body>
<script>
    /**********************************************************
     * 
     *   In Done Function File Request Is Done OR Not  
     * 
     * And When request OF the PAge Not Found And Throw Error
     * That Time Fail Execute
     * 
     * 
     */
    $(document).ready(function() {
        $.get("temp.html")
            .done(function() {
                $("#msg").text("$.get succeeded");
            })
            .fail(function() {
                $("#msg").text("$.get failed!");
            });
    });
</script>

</html>
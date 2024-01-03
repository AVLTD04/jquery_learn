<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $(":button").css({"background-color": "yellow","border":"2px solid red"});
        });
    </script>
    <title>Select Button Which TYpe is  Button</title>
</head>

<body>

    <form action="">
        Name: <input type="text" name="user"><br>
        Password: <input type="password" name="password"><br>
        <input type="reset" value="Reset">
        <input type="submit" value="Submit"><br>


        <!-- all button elements and elements of type=button.  -->
        <input type="button" value="Another useless button"><br>
        <button type="button">Useless Button</button>
    </form>

</body>

</html>
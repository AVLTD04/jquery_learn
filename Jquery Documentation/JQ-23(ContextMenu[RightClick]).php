<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuey ContextMenu (mean Right CLick Event)</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <div>Sll DJh TExt</div>
    <p>Text Here [Mouse Right Click Me !!] </p>
</body>
<script>
    $(document).ready(function(){
        $("p").on("contextmenu",function(){
            $("div").css("background-color","purple")
        })
    })
</script>

</html>
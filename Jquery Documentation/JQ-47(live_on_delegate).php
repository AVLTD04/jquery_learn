<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live trigger(old)[Removed] || delegate(old) ||  on(New)</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>
<body>
    <button id="livebtn">Live Click</button>
    <button id="delegatebtn">Delegate Click</button>
    <button id="onbtn">On Click</button>
</body>
    <script>
        $(document).ready(function(){

            $("body").delegate("#delegatebtn","click",function(){
                alert("You Clicked As Delegate click");
            });

            $("#onbtn").on("click",function(){
                alert("You Clicked As On click");
            });

            /**** Note: This API has been removed in jQuery 1.9; please use on() instead. ************/
            $("#livebtn").live("click",function(){
                alert("You Clicked As Live click")
            })
            .fail(function(error) {
                alert( "Live Is Removed Function IN Leatest Library" + error );
            });
        })
    </script>
</html>
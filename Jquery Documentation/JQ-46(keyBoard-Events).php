<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeyBoard All Events </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>
<body>

TextBox :
<input id="textbox" type="text" />

<div>
1. keyup() Message : <span id="msg-keyup"></span>
</div>

<div>
2. keydown() Message :<span id="msg-keydown"></span>
</div>

<div>
3. keypress() Message :<span id="msg-keypress"></span>
</div>

</body>

<script>

    /**************************************@abstract
     * 
     * KeyBoard Event 
     * Sequence
     *      
     *      1.keydown
     *      2.keypress
     *      3.keyup
     *      
    */

    $('#textbox').keydown(function(event){
        $('#msg-keydown').html('keydown() is triggered!')
    });
    $('#textbox').keypress(function(event){
        $('#msg-keypress').html('keypress() is triggered!')
    });
    
    $('#textbox').keyup(function(event){
        $('#msg-keyup').html('keyup() is triggered!')
    });



</script>
</html>

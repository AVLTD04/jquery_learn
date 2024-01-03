<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clone </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>
<body>
    <div>The Text <b>Block-1 </b> </div>
    <p>Now Do <b>New Block</b></p>
</body>

<script>
    $(document).ready(function(){
        /* MAke A Element Clone (Dulicate Element)  */
        $("p").clone().appendTo("p"); // or use $(this) 
    })
</script>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertation After & Before</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <style>
        #place5{ color: red; }
        #place3{ color: green; }
    </style>
</head>
<body>
    <div>
        <p id="place1" >Im In Paragraph Line :: 1 </p> <!-- OUTPUT : Im In Paragraph Line :: 1   -->
        <p id="place2" >Im In Paragraph Line :: 2 </p> <!-- OUTPUT : Im In Paragraph Line :: 2   -->
        <p id="place3" >Im In Paragraph Line :: 3 </p> <!-- OUTPUT : Im In Paragraph Line :: 4   -->
        <p id="place4" >Im In Paragraph Line :: 4 </p> <!-- OUTPUT : Im In Paragraph Line :: 6   -->
        <p id="place5" >Im In Paragraph Line :: 5 </p> <!-- OUTPUT : Im In Paragraph Line :: 7   -->
        <p id="place6" >Im In Paragraph Line :: 6 </p> <!-- OUTPUT : Im In Paragraph Line :: 5   -->
        <p id="place7" >Im In Paragraph Line :: 7 </p> <!-- OUTPUT : Im In Paragraph Line :: 3   -->
        <p id="place8" >Im In Paragraph Line :: 8 </p> <!-- OUTPUT : Im In Paragraph Line :: 8   -->
    </div>    
</body>

    <script>
        $("#place5").insertAfter("#place7");
        $("#place3").insertBefore("#place8");
    </script>
</html>
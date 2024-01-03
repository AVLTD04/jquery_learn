<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lt Selector (Zero Based Index ) </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>
<body>
    <div>
        <p>Same Block With Index[0]</p>
        <p>Same Block With Index[1]</p>
        <p>Same Block With Index[2]</p>
        <p>Same Block With Index[3]</p>
        <p>Same Block With Index[4]</p>
        <p>Same Block With Index[5]</p>
        <p>Same Block With Index[6]</p>
        <p>Same Block With Index[7]</p>
    </div>
</body>
    <script>
        /*****************************  :lt() Selector Select all elements at an index less than index within the matched set.****************************************/
        $(document).ready(function(){

            //Index 4  Mean Lt Select 0 to 3 Elements [Mean Do (< 0)  And Do  not (<= 0) ]
            $("p:lt(4)").css("color","blue");   //Up To Down 

            //Index 2  Mean Lt Select 0 to 1 Elements 
            $("p:lt(2)").css("backgroundColor","yellow");

            // Index -2 Mean Starts From Last And Skip LAst 2 Index last To zero  [Ex 9 to 0 And Skip 9, 8 And slelect 7 to 0 ]
            $("p:lt(-2)").css("fontWeight","Bolder"); //Down To Up

        })
    </script>
</html>
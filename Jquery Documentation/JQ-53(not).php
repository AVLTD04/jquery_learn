<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> not() || :not() </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>
<body>
    <ul>
        <li>Without Class li</li>
        <li class="withcls">With Class li</li>
        <li class="withcls">With Class li</li>
        <li>Without Class li</li>
        <li class="withcls">With Class li</li>
        <li class="withcls">With Class li</li>
        <li>Without Class li</li>
    </ul>
    
<hr>    
    <input type="checkbox" disabled checked="checked"> checkbox 1 <br>
    <input type="checkbox" disabled > <span> checkbox 2 </span><br>
    <input type="checkbox" disabled > <span> checkbox 3 </span><br>
    <input type="checkbox" disabled > <span> checkbox 4 </span><br>    

</body>
    <script>
        /**I************************* not() || :not()    **********************************/
        
        $( "li" ).not( ".withcls" ).css("color","green"); //Highlight Block HAve Not Class  NAmed withcls [  li != .withcls ]
        
        
        $("input:not(:checked) + span" ).css( "background-color", "yellow" );   //Highlight The Checkbox Which IS Not Selected 
        /*********************************************************************/
    </script>
</html>
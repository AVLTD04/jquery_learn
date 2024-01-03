<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:File Selector + Filter + Find </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <input type="file">

    <!-- Data For Filter Method  -->
    <div>
        <ul>
            <li>list item 1</li>
            <li>list item 2</li>
            <li>list item 3</li>
            <li>list item 4</li>
            <li>list item 5</li>
            <li>list item 6</li>
        </ul>
    </div>
    <!--  -->

    <!-- Data For Find Method -->
    <p><span>Hello</span>, how are you?</p>
    <p>Me? I'm <span>good</span>.</p>
    <!--  -->
    
</body>
<script>
    $(document).ready(function () {
        /************ :file For Select File  ***********************************/
        $("input:file").css("background-color", "blue");
        /**********************************************************************/

        /************************** .filter() Method Find Element Or Filter Data  **************************************************************************/
        $("li").filter(function (index) { return index % 2; /* Indirect Even-odd Method*/ }).css({ "color": "green", "background-color": "yellow" });
        /**************************************************************************************************************************************************/

        /********************* Find same As  Filter But Find CAn Find Direct Element *************************/
        $("p").find("span").css("color", "red");
        /****************************************************************************************************/
    })
</script>

</html>
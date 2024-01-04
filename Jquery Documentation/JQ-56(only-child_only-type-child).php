<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:only-child Selector || :only-of-type Selector </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>


<body>

    <!---------------------------------------------------------------------------------------->
    <!-- For only-child Selector  Block  -->

    <span>

        <!-- No Element Here || Text Only Not Considered  -->
        <div>
            Only Text Here
        </div>

        <!-- Only One Child || This IS Highlighted Block || Considerd  -->
        <div>
            <button>Sibling!</button>
        </div>

        <!-- Two Elements Here  -->
        <div>
            <button>Sibling!</button>
            <button>Sibling!</button>
        </div>

        <!--  Three Elements  Here  -->
        <div>
            <button>Sibling!</button>
            <span>Sibling!</span>
            <span>Sibling!</span>
        </div>
    </span>
    <!-------------------------------------------------------------------------------------->
    <hr>
    <hr>
    <!---------------------------------------------------------------------------------------->
    <!-- For  only-of-type Selector  Block  -->

    <div id="box2">

        <!-- No Element Here || Text Only Not Considered  -->
        <div>
            Only Text Here
        </div>

        <!-- Only One Child || This IS Highlighted Block || Considerd  -->
        <div>
            <button>Sibling!</button>
        </div>

        <!-- Two Elements Here  -->
        <div>
            <button>Sibling!</button>
            <button>Sibling!</button>
        </div>

        <!--  Three Elements  Here  -->
        <div>
            <button>Sibling!</button>
            <span>Sibling!</span>
            <span>Sibling!</span>
        </div>
    </div>
    <!-------------------------------------------------------------------------------------->




</body>

<script>
    /******************************************************************************************************
     * 
     *  Only Child Mean A Element Block Have Only One Block 
     * 
     * [ex : block1>box1 || div> button < /div ] 
     * 
     * [Not Considerd ex div>p button*2 box*n < /div]
     * 
     */

    $("span button:only-child").text("Only Child Box").css("border", "2px blue solid");

    /*****************************************************************************************************/


    /******************************************************************************************************
     * 
     *  only-of-type  Mean Selects all elements that have no siblings with the same element name.
     * 
     * It Simply Considered As If Element Type is Same Then ITs Selected 
     * [e.g div Has sapn and p elements When We Want To Select P Tag Elements And Span Are Siblings But All Div Have P Select ..]
     * 
     */

    $("div#box2 button:only-of-type").text("Only Of TYpe Child").css("border", "2px blue solid");

    /*****************************************************************************************************/
</script>

</html>
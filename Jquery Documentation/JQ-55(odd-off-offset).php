<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.odd || :odd || .off() || .offset() || .offsetParent() </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <style>
        .qw {
            background-color: lightblue;
            color: rebeccapurple;
            font-weight: bold;
        }

        #coordofset {
            color: crimson;
            font-weight: bolder;
        }
    </style>

</head>

<body>

    <div>

        <!--  For .odd() Block -->
        <ul>
            <li class="oddblock1">THe List Item 1 </li>
            <li class="oddblock1">THe List Item 2 </li>
            <li class="oddblock1">THe List Item 3 </li>
            <li class="oddblock1">THe List Item 4 </li>
            <li class="oddblock1">THe List Item 5 </li>
        </ul>
        <!----------------------------------------->
        <hr>

        <!-- For :odd Block  -->
        <table border="2">
            <tr class="oddblock2">
                <td>The Row Value 1</td>
            </tr>
            <tr class="oddblock2">
                <td>The Row Value 2</td>
            </tr>
            <tr class="oddblock2">
                <td>The Row Value 3</td>
            </tr>
            <tr class="oddblock2">
                <td>The Row Value 4</td>
            </tr>
            <tr class="oddblock2">
                <td>The Row Value 5</td>
            </tr>
        </table>
        <!----------------------------------------------------------->

        <hr>
        <!-- For .off() block  -->
        <p class="qw">Click this paragraph to change its background color.</p>
        <p class="qw">Click the button below and then click on this paragraph (the click event is removed).</p>

        <button id="offevent">Remove the click event handler</button>
        <!------------------------------------------------------------------------------------------------------------------->

        <hr>

        <!-- For .offset()  Block  -->
        <p id="coordofset">Click To Set This block POsiton (TOP 120 , left 30) </p>

        <!--------------------------------------------------------------------------->
        <hr>
        <!-- For .offsetParent() Block  -->
        <ul class="level-1">
            <li class="item-i">I</li>
            <li class="item-ii" style="position: relative;">II
                <ul class="level-2">
                    <li class="item-a">A</li>
                    <li class="item-b">B
                        <ul class="level-3">
                            <li class="item-1">1</li>
                            <li class="item-2">2</li>
                            <li class="item-3">3</li>
                        </ul>
                    </li>
                    <li class="item-c">C</li>
                </ul>
            </li>
            <li class="item-iii">III</li>
        </ul>
        <!----------------------------------------------------------------------------->


    </div>
</body>
<script>
    $(document).ready(function() {

        /********************** .odd() || :odd() [odd Values 1,3,57,....,n]*******************************************/
        $("li.oddblock1").odd().css("color", "blue");
        $(".oddblock2 :odd").css("color", "blue");
        /*************************************************************************************/

        /*************************** .off()  Remove Trigger Ability [Opposite Of bind(),on(),delegate() trigger Events **************************/
        $(".qw").on("click", function() {
            $(this).toggleClass("qw");
        });
        $("#offevent").click(function() {
            $(".qw").off("click"); //off Is ALso A Trigger But It IS For Disable Trigger Ability 
        });
        /********************************************************************************************************************************/

        /*************************** .offset() || .offset( coordinates ) || .offset( function )  ****************************************************/
        $("#coordofset").on("click", function() {

            //Here WE Set The Coordinates And Move Element In Document POsiton
            $("#coordofset").offset({
                top: 120,
                left: 30
            });

            //Here We Are Checking The Element Position Top And Left 
            var p = $("#coordofset");
            var offset = p.offset();
            p.html(" Current POsitopn IS :: top: " + offset.top + " left: " + offset.left);
        });
        /***********************************************************************************************************************************************/

        /******************************* .offsetParent() [ Get the closest ancestor element that is positioned. ] *********************************/
        $("li.item-a").offsetParent().css("background-color", "lightgreen");
        /*****************************************************************************************************************************************/







    })
</script>

</html>
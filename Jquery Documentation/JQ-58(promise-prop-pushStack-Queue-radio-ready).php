<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.promise() || .prop() || .pushStack() || .Queue() || :radio || .ready() </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>

    <!------------------------------ For PRomise Block  ----------------------------------------->
    <button id="evnt1">CLick Button For Do Action </button>
    <div id="evnt1act"></div>
    <!------------------------------------------------------------------------------------------->

    <hr>

    <!------------------------------ For Prop Block --------------------------------------------->
    <form action="">
        <span>CheckBox 1 : </span><input type="checkbox" name="" id=""><br>
        <span>CheckBox 2 : </span><input type="checkbox" name="" id=""><br>
        <span>CheckBox 3 : </span><input type="checkbox" name="" id=""><br>
    </form>
    <p id="proplog"></p>
    <!------------------------------------------------------------------------------------------->

    <hr>

    <!---------------------------------  Queue  -------------------------------------------------->
    <button id="queueSeq">TEst Queue Data</button>
    <div id="box"></div>
    <div class="queue"></div>
    <!------------------------------------------------------------------------------------------->

    <hr>

    <!--------------------------------- For Push Stack ------------------------------------------>
    <button id="pushstack">Test Stack click </button>
    <div id="stacklog"></div>
    <div id="expdiv">This IS Experimental Div </div>
    <!------------------------------------------------------------------------------------------->

    <hr>

    <!--------------------------------- For :radio Selector ------------------------------------>
    RAdio Btn's : <input type="radio" name="same" id=""> <br>
    RAdio Btn's : <input type="radio" name="same" id=""> <br>
    RAdio Btn's : <input type="radio" name="same" id=""> <br>
    <div id="radiolog"></div>
    <!------------------------------------------------------------------------------------------>
</body>

<script>
    $(document).ready(function() {

        /*****************************
         * Syntax : .promise( [type ] [, target ] )
         * 
         *  Promise() Mean All Listed OR All Transaction / Actions Are Compled OR Succeed 
         * 
         * The All Reuest That Time All Time Done Work OF Promise 
         * 
         * Promise Check That The All Element Have To Work That Work IS Full Fill Or NOT..
         * 
         */

        var button = $("#evnt1");

        button.on('click', function() {
            $('#evnt1act').append('The Text 1 settes <br>');
            $('#evnt1act').append('The Text 2 settes <br>');
            $('#evnt1act').append('The Text 3 settes <br>');

            $('#evnt1act').promise().done(function() {
                alert('All Appends  completed!');
            });
        });
        /********************************************************************************************************************/


        /************************* .prop() [ ItS Check Input Elements Are disable-enable-check-selected..etc then Trigger ] *********************/
        $("form").change(function() {

            var input = $("input[type='checkbox']");

            input.prop("checked", function(i, val) {
                $("#proplog").html(".prop('checked'): <b>" + input.prop("checked") + "</b><br> IS All Checked ? - > " + val);
            });

        })
        /*******************************************************************************************************************************************/

        /**************************** Queue Topic Block *********************************************************/

        $("#queueSeq").click(function() {
            var myDiv = $("div");
            myDiv.show(5000);


            myDiv.queue(function() {
                var that = $(this);
                that.text("Hello TExt-1");
                that.dequeue();
                $(".queue").text("The Lenth Of Queue IS " + myDiv.queue().length);
            });
            myDiv.queue(function() {
                var that = $(this);
                that.text("newcolor -2");
                that.dequeue();
                $(".queue").text("The Lenth Of Queue IS " + myDiv.queue().length);
            });
        });

        /*************************************************************************************************/


        /********************************* Push Stack   *********************************************/
        $("#pushstack").click(function() {
            var removes = $([]).pushStack($("#expdiv")).remove();
            $("#stacklog").append("Experimental Div Has Been Pushed And removed ");
        });
        /*******************************************************************************************/

        /******************************** :radio Selector **************************************************/
        var radioCheck = $("input:radio");
        $("#radiolog").text("For this type jQuery found " + radioCheck.length + ".").css("color", "red");
        /**********************************************************************************************************/
    });
</script>

</html>
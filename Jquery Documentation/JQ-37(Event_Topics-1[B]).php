<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Topic PT-1 ....</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>

    <div>
        <ul>
            <li><button> 0 </button></li>
            <li><button> 1 </button></li>
            <li><button> 2 </button></li>
            <li><button> 3 </button></li>
            <li><button> 4 </button></li>
            <li><button> 5 </button></li>
            <li><button> 6 </button></li>
            <li><button> 7 </button></li>
            <li><button> 8 </button></li>
            <li><button> 9 </button></li>
            <li><button> 10 </button></li>
        </ul>



        <a href="#">Default click action is prevented</a>



        <p>The Text For Testing , !! Click Here</p>
    </div>

    <span>Click ME For Test Even Delegate Target</span>
    <div id="block"></div>

    <div id="log1"></div>
    <div id="log2"></div>

</body>
<script>
    $(document).ready(function () {

        /* even() Method  */
        $("li").even().css("color", "red");
        /* ************************************ */

        /*  Even Selector */
        $("tr:even").css("color", "red");
        /* *********************************** */

        /* Event Current Target  */
        $("p").on("click", function (event) {
            alert(event.currentTarget == this); // true
        });
        /* ***************************************************** */


        /* Event Data  Code here  */
        var logDiv = $("#log1");
        for (var i = 0; i < 11; i++) {
            $("button").eq(i).on("click", { value: i }, function (event) {
                var msg = "event.data.value = " + event.data.value;
                logDiv.append(msg + "<br>");
            });
        }
        /* ********************************************************************** */


        /* Even Delegate Target  */
        $("span").click(function (event) {
            $(event.delegateTarget).css("background-color", "pink");
        });
        /* ********************************************************************** */

        /* Even Default Prevented */
        $("a").on("click", function (event) {
            event.isDefaultPrevented();
            $("<div>").append(" Before default " + event.type + " prevented " + event.isDefaultPrevented()).appendTo("#log2");

            /* #Main Block PreventDefault Is Used For Prevent  Form To Do OR Target To AnyThing */
            event.preventDefault();  /*For Example It iS Used For Prevent To Submit The Form  */

            $("<div>").append(" After default " + event.type + " prevented " + event.isDefaultPrevented() + "<hr/> ").appendTo("#log2");
        });
        /* ******************************************************************************* */


    })
</script>

</html>
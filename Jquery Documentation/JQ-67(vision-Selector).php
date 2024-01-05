<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> :visible Selector </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <style>
        div {
            width: 150px;
            height: 40px;
            margin: 5px;
            border: 2px dotted green;
            float: left;
        }

        .starthidden {
            display: none;
        }
    </style>
</head>

<body>

    <div>Click US </div>
    <div class="starthidden">Hiiden US Can't Click  </div>
    <div>Click US </div>
    <div>Click US </div>
    <div style="display:none;">Hiiden US Can't Click  </div>
    <br>
    <br>
    <br>
    <hr>
    <button>Show hidden to see they don't change</button>

</body>
<script>
    /****************** 
     * 
     * :Visible Selector select Elements
     *      Which Are Showen IN Document [Not Hidden] And 
     *      Visibly Consumes  Space IN The Document  
     * 
     * 
     * 
    */
    $("div:visible").on("click", function() {
        $(this).css({"background": "blue","color":"yellow","font-size":"20px"});
    });
    $("button").on("click", function() {
        $("div:hidden").show("fast");
    });
</script>

</html>
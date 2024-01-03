<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New class</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <style>
        .style1 {
            background-color: aqua;
            color: blue;
        }
        .style2 {
            background-color: violet;
            color: antiquewhite;
        }
        .style3 {
            background-color: chartreuse;
            color: red;
        }
        .style4 {
            background-color: wheat;
            color: turquoise;
        }
    </style>
</head>
<body>
    <div class="style1">The Text Style Will Change !!</div>
    <p class="style3">The P Tag Style Can Also Change </p>
    <br><button id="btn1">Remove Class OF div</button><br>
    <br><button id="btn2">Remove Class OF p</button><br>
    <br><button id="btn3">Add New Class For Div </button><br>
    <br><button id="btn4">Add New Class For P</button><br>
    <b>Note : For Set Default You Have To Remove All</b>
    <br><button id="btndef">Default </button>
</body>
<script>
    $(document).ready(function () {
        $("#btn1").click(function () {
            $("div").removeClass();
        })
        $("#btn2").click(function () {
            $("p").removeClass();
        })
        $("#btn3").click(function () {
            $("div").addClass("style2");
        })
        $("#btn4").click(function () {
            $("p").addClass("style4");
        })
        $("#btndef").click(function () {
            $("div").addClass("style1");
            $("p").addClass("style3");
        })
    })
</script>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detach (Remove the set of matched elements. ) </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <button>Click For Atach / Deatch</button>
    <p>Text Here 1</p>
    <p>Text Here 2</p>
</body>
<script>
    $(document).ready(function () {
        var p;
        $("button").on("click", function () {
            if (p) {
                p.appendTo("body");
                p = null;
            } else {
                p = $("p").detach();
            }
        });
    });
</script>
</script>

</html>
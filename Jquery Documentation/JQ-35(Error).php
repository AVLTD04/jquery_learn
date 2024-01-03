<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error In jquery</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <img alt="Box" id="box"><!--  Here No Src And No Image Located  -->
</body>

<script>
    $(document).ready(function () {

        // If missing.png is missing, it is replaced by replacement.png
        $("img")
            .on("error", function () {
                $(this).attr("src", "");
            })
            .attr("src", "./IMGs/dimension-01(exp).png");
    })
</script>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check And Checked Event</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>
    <form>
        <div>
            <input type="radio" name="blocks" value="Block-A" id="Block-A">
            <label for="Block-A">Block-A</label>
        </div>
        <div>
            <input type="radio" name="blocks" value="Block-B" id="Block-B">
            <label for="Block-B">Block-B</label>
        </div>
        <div>
            <input type="radio" name="blocks" value="Block-C" id="Block-C">
            <label for="Block-C">Block-C</label>
        </div>
        <div id="log"></div>
    </form>
</body>
<script>

    /***** Select Elements Which Are Selected In Form Checked Radio ,Dropdown Val OR CheckBoxes  **********************************/

    $("input").on("click", function () {
        $("#log").html($("input:checked").val() + " is checked!");
    });
</script>
</html>
</body>
</html>
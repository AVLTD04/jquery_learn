<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descendant Selector (“ancestor descendant”) </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <style>
        form {
            border: 2px green solid;
            padding: 2px;
            margin: 0;
            background: #efe;
        }

        div {
            color: red;
        }

        fieldset {
            margin: 1px;
            padding: 3px;
        }
    </style>
</head>

<body>
    <form>
        <div>
            <p>Some Text In The Div </p>
            Text Box Dirct In The Div<input type="text">
            <fieldset>
                <label>Grandchild of form, child of fieldset:</label>
                <input name="" id="newsletter">
            </fieldset>
            Text Box Dirct In The Div<input type="text">
        </div>
    </form>
    Outside Form Input Box [Called Sibling] <input type="text">

</body>

<script>

    /***************************************
     * 
     * Ancentors  : Mean Purvaja  -> Grand Grand PArent 
     * Decentors : Mean Vansaja   -> Grand Child
     * sibling  : Near Or Neighbour Of Element 
     * 
     * 
     * 
    */
    $(document).ready(function () {
        $("form input").css("border", "2px dotted blue");
        $("form fieldset input").css("background-color", "yellow");
    });
</script>

</html>
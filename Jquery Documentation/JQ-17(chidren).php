<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Children </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>

    <ul>
        <li>Block - I</li>
        <li>Block - II
            <ol class="item-a">
                <li>A</li>
                <li>B
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                    </ul>
                </li>
                <li>C</li>
            </ol>
        </li>
        <li>Block - III</li>
    </ul>
</body>
<script>
    /* Here We HAve To Find Child OF Class- item-a  That Are Highlighted  */
    $( "ol.item-a" ).children().css( "background-color", "green" );
</script>
</html>
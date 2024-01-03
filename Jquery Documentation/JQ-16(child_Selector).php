<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Selector (“parent > child”)</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>

    <ul class="topnav">
        <li>Item 1</li>
        <li>Item 2  <!-- This Block Element Have Child So This IS Highlited In Code Output Box -->
            <ul>
                <li>First item</li>
                <li>Second item</li>
                <li>Third item</li>
                <li>Fourth</li>
                <li>Jae</li>
                <li>Clementine</li>
                <li>Marion</li>
                <li>Christabel</li>
                <li>Marcus</li>
                <li>Tani</li>
                <li>Emilio</li>
                <li>Anica</li>
                <li>Kandace</li>
                <li>Jake</li>
                <li>Horatius</li>
                <li>Hanan</li>
                <li>Rhianon</li>
                <li>Ewan</li>
                <li>Mitchael</li>
                <li>Cirillo</li>
                <li>Clive</li>
                <li>Torey</li>
                <li>Halli</li>
                <li>Abbie</li>
                <li>Judie</li>
                <li>Dorella</li>
                <li>Mag</li>
                <li>Jemmie</li>
                <li>Shaylynn</li>
                <li>Shela</li>
                <li>Milissent</li>
                <li>Kessia</li>
                <li>Cookie</li>
                <li>Katine</li>
            </ul>
        </li>
        <li>Item 3</li>
    </ul>


</body>
<script>
    /* Find The Element In Ul Tag Which Are Inner Block Childrens  */
    $("ul.topnav > li").css("border", "3px double green");
</script>

</html>
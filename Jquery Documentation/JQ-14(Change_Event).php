<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Event </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <style>
        div {
            color: red;
        }
    </style>
</head>
<body>


    <select id="sel">
        <option>dfsk gf</option>
        <option>dfazdphfjljd</option>
        <option>Tani</option>
        <option>Emioptiono</option>
        <option>Anica</option>
        <option>Kandace</option>
        <option>Jake</option>
        <option>Horatius</option>
        <option>Hanan</option>
        <option>Rhianon</option>
        <option>Ewan</option>
        <option>Mitchael</option>
        <option>Cirillo</option>
        <option>Coptionve</option>
        <option>Torey</option>
        <option>Haloption</option>
        <option>Abbie</option>
        <option>Judie</option>
        <option>Dorella</option>
        <option>Mag</option>
        <option>Jemmie</option>
        <option>Shaylynn</option>
        <option>Shela</option>
        <option>Mioptionssent</option>
        <option>Kessia</option>
        <option>Cookie</option>
        <option>Katine</option>
    </select>
    <hr>
    <hr>
    <hr>
    <div id="loc"></div>
</body>
<script>

        /*******************************
         * 
         * Change Event Mean On Document Any Element Changes(LIke On Change ) 
         * That  triigers On Change Elememnt 
         * 
        */


    $("select").on("change", function () {
        $("#loc").text("You Selcted " +  $("#sel").val());
    });
</script>
</html>
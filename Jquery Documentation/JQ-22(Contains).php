<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:Contains </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <div>Manda Grover</div>
    <div>Thomas Lockett</div>
    <div>Frank Pochon</div>
    <div>Noreen Rockwell</div>
    <div>Jan Enders</div>
    <div>Owen Fewster</div>
    <div>Fredrick Corwood</div>
    <div>John Resig</div>
    <div>George Martin</div>
    <div>Malcom John Sinclair</div>
    <div>J. Ohn</div>
    <div>Myrtle Hardwich</div>
    <div>Corabel Gamlen</div>
    <div>Oliviero Brenston</div>
    <div>Thadeus O' Driscoll</div>
    <div>Simone Iveagh</div>
    <div>Prentiss Coundley</div>
    <div>Claiborne Pieche</div>
    <div>John Resig</div>
    <div>George Martin</div>
    <div>Malcom John Sinclair</div>
    <div>J. Ohn</div>
    <div>Lenore De Paoli</div>
    <div>Evangeline Cavy</div>
    <div>Sofia Halkyard</div>
    <div>Horace Johannes</div>
    <div>Alvina Guerra</div>
    <div>Vyky Robertson</div>
    <div>John Resig</div>
    <div>George Martin</div>
    <div>Malcom John Sinclair</div>
    <div>J. Ohn</div>
    <div>Keslie Skitch</div>
    <div>Andrey Syder</div>
    <div>Zedekiah Ettles</div>
    <div>Alix Blakden</div>
    <div>Kate Dufore</div>
    <div>Filberte Duell</div>
    <div>Tracy Poulsen</div>
    <div>Salim Little</div>
    <div>Jacquette Penelli</div>
    <div>Gates State</div>

</body>
<script>
    $(document).ready(function() {

        /******************************************************************************************
        *  Note: The first argument must be a DOM element, not a jQuery object or plain JavaScript object.
        * ******************************************************************************
        *  $.contains( document.documentElement, document.body ); // true
        *  $.contains( document.body, document.documentElement ); // false
        * ************************************************************************
        * *****************************************************************************************
        */
        $("div:contains('John')").css("color", "blue");
    })
</script>

</html>
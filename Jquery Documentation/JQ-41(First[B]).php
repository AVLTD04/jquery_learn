<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Topic

    </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <div>
        <span>John,</span>
        <span>Karl,</span>
        <span>Brandon</span>

        <table>
            <tr>
                <td>Row 1</td>
            </tr>
            <tr>
                <td>Row 2</td>
            </tr>
            <tr>
                <td>Row 3</td>
            </tr>
        </table>

        <ul>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, commodi?</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, commodi?</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, commodi?</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, commodi?</li>
        </ul>
    </div>

</body>

<script>
    $(document).ready(function() {

        /************************************* First ***********************************************/
        $("ul li").first().css("color", "red");
        /*******************************************************************************************/


        /************************************* First-child***********************************************/
        $("span:first-child").html("<h2>John</h2>");
        /*******************************************************************************************/


        /************************************* First  Of Type ***********************************************/
        $("span:first-of-type").css("color", "blue");
        /*******************************************************************************************/


        /************************************* First AS A Selectore ***********************************************/
        $("tr:first").css("background-color", "grey");
        /***********************************************************************************************************/

    })
</script>

</html>
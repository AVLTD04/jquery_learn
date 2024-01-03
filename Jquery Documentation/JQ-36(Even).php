<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.even() --Even Selector ....</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>

    <div>


        <ol>
            <li>The Value Is #1 </li>
            <li>The Value Is #2 </li>
            <li>The Value Is #3 </li>
            <li>The Value Is #4 </li>
            <li>The Value Is #5 </li>
        </ol>

        <table border="2">
            <tbody>
                <tr>
                    <td>The Value Is #1</td>
                </tr>
                <tr>
                    <td>The Value Is #2</td>
                </tr>
                <tr>
                    <td>The Value Is #3</td>
                </tr>
                <tr>
                    <td>The Value Is #4</td>
                </tr>
                <tr>
                    <td>The Value Is #5</td>
                </tr>
                <tr>
                    <td>The Value Is #6</td>
                </tr>
                <tr>
                    <td>The Value Is #7</td>
                </tr>
                <tr>
                    <td>The Value Is #8</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
<script>
    $(document).ready(function () {

        /* even() Method  */
        $("li").even().css("color", "red");
        /* ************************************ */

        /*  Even Selector */
        $("tr:even").css("color", "red");
        /* *********************************** */

    })
</script>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>empty() || And :empty Selector </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <button id="get">The Delete Value Id Has del</button>


    <table border="2">
        <thead>
            <tr>
                <th>THE VALUES </th>
                <th>THE VALUES </th>
                <th>THE VALUES </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>00</td>
                <td>00</td>
                <td>00</td>
            </tr>
            <tr>
                <td id="del"> 99 </td>
                <td id="del"> 99 </td>
                <td id="del"> 99 </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>00</td>
                <td>00</td>
                <td>00</td>
            </tr>
        </tbody>
    </table>
</body>

<script>
    $(document).ready(function () {

        // $("#get").click(function () {

        $("#del").each(function () {
            $("td#del").empty();  /* Do Block Value Empty oR Set Empty  */
        });
        $("td:empty").html("<code>NULL</code>");   // Find Empty Value  
        
        // });

        $("td:empty").html("<code>NULL</code>");  // Find Empty Value  
    })
</script>

</html>
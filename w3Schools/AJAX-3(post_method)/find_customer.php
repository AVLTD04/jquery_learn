<?php

$conn = mysqli_connect("localhost", "root", "", "classicmodels") or die(mysqli_connect_error());
$str = ucfirst($_POST['str']);


$query = "SELECT customerNumber,contactFirstName,city,country FROM customers WHERE contactFirstName LIKE '{$str}%';";
$i = 0;
$records = mysqli_query($conn, $query);
?>

<table border="2">
    <thead>
        <tr>
            <th>NO</th>
            <th>Customer Name</th>
            <th>customerNumber</th>
            <th>City</th>
            <th>country</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($records)) {
            echo "<tr>";
            echo "<td>". ++$i. "</td>";
            echo "<td> {$row['contactFirstName']} </td>";
            echo "<td> {$row['customerNumber']} </td>";
            echo "<td> {$row['city']} </td>";
            echo "<td> {$row['country']} </td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
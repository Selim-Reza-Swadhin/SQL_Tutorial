<h2 align="center">SQL Inner Join Two Tables matching All Data</h2>
<table bgcolor="#7fffd4" border="1" align="center" width="100%">
    <tr align="center">
        <td>SL</td>
        <td>Firstname</td>
        <td>Lastname</td>
        <td>Order No</td>
    </tr>
    <?php

    $conn = mysqli_connect('localhost', 'root', '', 'sql_tutorial');
    $query = "SELECT  Persons.FirstName, Persons.LastName, Orders.Order_No
              /*column_name 3;
                Firstname, Lastname and Order_No*/
              FROM Persons /* table name*/
              INNER JOIN Orders /* table name*/
              ON
                Persons.P_id = Orders.P_id /*place conditional join query table and field name. and two tables field name same(P_id)*/
              ORDER BY Persons.LastName";
    $result = mysqli_query($conn, $query);
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)){
    $i++; ?>
    <tr align="center">
        <td><?= $i; ?></td>
        <td bgcolor="#deb887"><?= $row['FirstName']; ?></td>
        <td bgcolor="#deb887"><?= $row['LastName']; ?></td>
        <td bgcolor="#deb887"><?= $row['Order_No']; ?></td>
    </tr>
<?php } ?>
</table>

<h2 align="center">SQL Inner Join Four Tables matching All Data</h2>
<table bgcolor="#7fffd4" border="1" align="center" width="100%">
    <tr align="center">
        <td>SL</td>
        <td>Firstname (from persons table)</td>
        <td>Lastname (from persons table)</td>
        <td>Order No (from orders table)</td>
        <td>Time (from users2 table)</td>
        <td>Name (from users2 table)</td>
    </tr>
    <?php

    $conn = mysqli_connect('localhost', 'root', '', 'sql_tutorial');
    //single data called
    /*$query = "SELECT  Persons.FirstName, Persons.LastName, Orders.Order_No, users.created_time*/
    //all data called
    $query = "SELECT DISTINCT Persons.*, Orders.*, users.*, users2.*
              /*column_name 3;
                Firstname, Lastname and Order_No*/
              FROM Persons /* table name*/
              INNER JOIN Orders /* table name*/
              ON
                Persons.P_id = Orders.P_id /*place conditional join query table and field name. and two tables field name same(P_id)*/
              INNER JOIN users /* table name*/
              ON
                Persons.P_id = users.id
              INNER JOIN users2 /* table name*/
              ON
                Persons.P_id = users2.id
              ORDER BY users2.id desc";
    $result = mysqli_query($conn, $query);
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)){
    $i++; ?>
    <tr align="center">
        <td><?= $i; ?></td>
        <td bgcolor="#deb887"><?= $row['FirstName']; ?></td>
        <td bgcolor="#deb887"><?= $row['LastName']; ?></td>
        <td bgcolor="#deb887"><?= $row['Order_No']; ?></td>
        <td bgcolor="#deb887"><?= $row['created_time']; ?></td>
        <td bgcolor="#deb887"><?= ucwords($row['name']); ?></td>
    </tr>
<?php } ?>
</table>

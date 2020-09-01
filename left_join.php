<h2 align="center">SQL Left Join means left table Persons in all data show</h2>
<table bgcolor="#7fffd4" border="1" align="center" width="100%">
    <tr align="center">
        <td>SL</td>
        <td>Left Join(Firstname) All Data</td>
        <td>Left Join(Lastname) All Data</td>
        <td>Order No</td>
    </tr>
    <?php

    $conn = mysqli_connect('localhost', 'root', '', 'sql_tutorial');
    $query = "SELECT  Persons.FirstName, Persons.LastName, Orders.Order_No
              /*column_name 3;
                Firstname, Lastname and Order_No*/
              FROM Persons /*place left table name*/
              LEFT OUTER JOIN Orders /*place right table name*/
              ON
                Persons.P_id = Orders.P_id /*place conditional join query table and field name. and two tables field name same(P_id)*/
              ORDER BY Persons.LastName";
    $result = mysqli_query($conn, $query);
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)){
    $i++; ?>
    <tr align="center">
        <td><?= $i; ?></td>
        <td bgcolor="#6b8e23"><?= $row['FirstName']; ?></td>
        <td bgcolor="#6b8e23"><?= $row['LastName']; ?></td>
        <td><?= $row['Order_No']; ?></td>
    </tr>
<?php } ?>
</table>

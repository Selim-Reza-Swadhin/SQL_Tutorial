<h2 align="center">SQL Right Join means right table Orders in all data show</h2>
<table bgcolor="#7fffd4" border="1" align="center" width="100%">
    <tr align="center">
        <td>SL</td>
        <td>Firstname</td>
        <td>Lastname</td>
        <td>Right Join (Order No) All Data</td>
    </tr>
    <?php

    $conn = mysqli_connect('localhost', 'root', '', 'sql_tutorial');
    $query = "SELECT  Persons.FirstName, Persons.LastName, Orders.Order_No
              /*column_name 3;
                Firstname, Lastname and Order_No*/
              FROM Persons /*place left table name*/
              RIGHT JOIN Orders /*place right table name*/
              ON
                Persons.P_id = Orders.P_id /*place conditional join query table and field name. and two tables field name same(P_id)*/
              ORDER BY Persons.LastName";
    $result = mysqli_query($conn, $query);
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)){
    $i++; ?>
    <tr align="center">
        <td><?= $i; ?></td>
        <td><?= $row['FirstName']; ?></td>
        <td><?= $row['LastName']; ?></td>
        <td bgcolor="green"><?= $row['Order_No']; ?></td>
    </tr>
<?php } ?>
</table>

<!--Right outer join-->
<!--$query = "SELECT  Persons.FirstName, Persons.LastName, Orders.Order_No
/*column_name 3;
Firstname, Lastname and Order_No*/
FROM Persons /*place left table name*/
RIGHT OUTER JOIN Orders /*place right table name*/
ON
Persons.P_id = Orders.P_id /*place conditional join query table and field name. and two tables field name same(P_id)*/
ORDER BY Persons.LastName";-->

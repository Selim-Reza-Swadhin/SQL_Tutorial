<h2 align="center">SQL UNION Join Two Tables matching All Data</h2>
<table bgcolor="#7fffd4" border="1" align="center" width="100%">
    <tr align="center">
        <td>Firstname(come from only first table)</td>
        <td>Lastname(come from only first table)</td>
    </tr>
    <?php
    //error_reporting(0);

    $conn = mysqli_connect('localhost', 'root', '', 'sql_tutorial');
    $query = "SELECT  FirstName, LastName  FROM Persons
              UNION 
              SELECT Order_No, P_id FROM Orders";
    $result = mysqli_query($conn, $query);
    $i = 0;
    while($row = mysqli_fetch_assoc($result)){
    $i++;
    ?>
    <tr align="center">
        <td bgcolor="#deb887"><?= $row['FirstName']; ?></td>
        <td bgcolor="#deb887"><?= $row['LastName']; ?></td>
    </tr>
<?php } ?>
</table>

<hr>
<table bgcolor="#7fffd4" border="1" align="center" width="100%">
    <tr align="center">
        <td>Order_No(come from only first table)</td>
        <td>P_id(come from only first table)</td>
    </tr>
    <?php
    //error_reporting(0);

    $conn = mysqli_connect('localhost', 'root', '', 'sql_tutorial');
    $query = "SELECT Order_No, P_id FROM Orders
              UNION ALL
              SELECT  FirstName, LastName  FROM Persons";
    $result = mysqli_query($conn, $query);
    $i = 0;
    while($row = mysqli_fetch_assoc($result)){
        $i++;
        ?>
        <tr align="center">
                    <td bgcolor="#deb887"><?= $row['Order_No']; ?></td>
                    <td bgcolor="#deb887"><?= $row['P_id']; ?></td>
        </tr>
    <?php } ?>
</table>

<!--SELECT  FirstName FROM Persons
UNION
SELECT Order_No FROM Orders-->

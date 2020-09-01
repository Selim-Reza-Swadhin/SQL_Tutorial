<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$id = $_POST['P_id'];
$firstname = $_POST['FirstName'];
$lastname = $_POST['LastName'];
$address = $_POST['Address'];
$city = $_POST['City'];

    $conn = mysqli_connect('localhost', 'root', '', 'sql_tutorial');
//Within column_name and value
    $query = "INSERT INTO persons(P_id, FirstName, LastName, Address, City) VALUES ('$id','$firstname', '$lastname', '$address', '$city')";
    $result = mysqli_query($conn, $query);


    //Without column_name, only value
    $query = "INSERT INTO orders(P_id) VALUES ('$id')";
    $result = mysqli_query($conn, $query);
    if ($result){
        echo 'Data insert success';
    }else{
        echo 'Data insert not success';
    }
}
?>

<h2 align="center">SQL Insert data within two tables</h2>
<form action="" method="post">
    <table>
        <tr>
            <td>ID :</td>
            <td>
                <input type="number" name="P_id" placeholder="Enter id">
            </td>
        </tr>
        <tr>
            <td>Firstname :</td>
            <td>
                <input type="text" name="FirstName" placeholder="Enter firstname">
            </td>
        </tr>
        <tr>
            <td>Lastname :</td>
            <td>
                <input type="text" name="LastName" placeholder="Enter lastname">
            </td>
        </tr>
        <tr>
            <td>Address :</td>
            <td>
                <input type="text" name="Address" placeholder="Enter address">
            </td>
        </tr>
        <tr>
            <td>City :</td>
            <td>
                <input type="text" name="City" placeholder="Enter city">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Submit">
            </td>
        </tr>
    </table>
</form>


<h2 align="center">SQL Insert data and show All Data</h2>

<table bgcolor="#7fffd4" border="1" align="center" width="100%">
    <tr align="center">
        <td>SL</td>
        <td>P_id</td>
        <td>Firstname</td>
        <td>Lastname</td>
        <td>Order No</td>
    </tr>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'sql_tutorial');
    $query = "SELECT  Persons.P_id, Persons.FirstName, Persons.LastName, Orders.Order_No
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
            <td bgcolor="#deb887"><?= $row['P_id']; ?></td>
            <td bgcolor="#deb887"><?= $row['FirstName']; ?></td>
            <td bgcolor="#deb887"><?= $row['LastName']; ?></td>
            <td bgcolor="#deb887"><?= $row['Order_No']; ?></td>
        </tr>
    <?php } ?>
</table>


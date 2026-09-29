<?php

$conn = new mysqli("localhost", "root", "", "order_db");

if ($conn->connect_error) {
    die("Database Connection Failed");
}

if (isset($_POST['place_order'])) {

    $customer = $_POST['customer'];
    $email = $_POST['email'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $address = $_POST['address'];

    $sql = "INSERT INTO orders
            (customer, email, product, quantity, address)
            VALUES
            ('$customer', '$email', '$product', '$quantity', '$address')";

    $conn->query($sql);
}

$result = $conn->query("SELECT * FROM orders ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>
<head>

<title>Order Details</title>

<style>

body {
    font-family: Arial;
    background: #f2f2f2;
    margin: 0;
}

.header {
    background: #222;
    color: white;
    text-align: center;
    padding: 25px;
}

.container {
    width: 90%;
    margin: 40px auto;
}

.success {
    background: #d4edda;
    color: #155724;
    padding: 15px;
    text-align: center;
    border-radius: 6px;
    margin-bottom: 25px;
    font-size: 18px;
}

.box {
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 4px 12px #ccc;
}

h2 {
    text-align: center;
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th {
    background: #222;
    color: white;
    padding: 12px;
}

td {
    padding: 12px;
    text-align: center;
    border: 1px solid #ddd;
}

tr:nth-child(even) {
    background: #f7f7f7;
}

.button {
    display: block;
    width: 200px;
    text-align: center;
    background: #222;
    color: white;
    padding: 12px;
    margin: 25px auto 0;
    text-decoration: none;
    border-radius: 5px;
}

.button:hover {
    background: #444;
}

</style>

</head>

<body>

<div class="header">

<h1>Online Shopping</h1>
<p>Order Management</p>

</div>

<div class="container">

<div class="success">
Order Placed Successfully!
</div>

<div class="box">

<h2>All Stored Orders</h2>

<table>

<tr>
<th>Order ID</th>
<th>Customer Name</th>
<th>Email</th>
<th>Product</th>
<th>Quantity</th>
<th>Delivery Address</th>
</tr>

<?php

while ($row = $result->fetch_assoc()) {

echo "<tr>";

echo "<td>".$row['id']."</td>";

echo "<td>".$row['customer']."</td>";

echo "<td>".$row['email']."</td>";

echo "<td>".$row['product']."</td>";

echo "<td>".$row['quantity']."</td>";

echo "<td>".$row['address']."</td>";

echo "</tr>";

}

?>

</table>

<a href="index.php" class="button">
Place Another Order
</a>

</div>

</div>

</body>
</html>
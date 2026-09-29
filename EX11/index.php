<!DOCTYPE html>
<html>
<head>
    <title>Online Order</title>

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

        .box {
            width: 450px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px #bbb;
        }

        h2 {
            text-align: center;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            height: 80px;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background: #222;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #444;
        }
    </style>
</head>

<body>

<div class="header">
    <h1>Online Shopping</h1>
    <p>Place Your Order</p>
</div>

<div class="box">

    <h2>Order Form</h2>

    <form action="order.php" method="post">

        <label>Customer Name</label>
        <input type="text" name="customer" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Select Product</label>
        <select name="product" required>
            <option value="">Select Product</option>
            <option>Laptop</option>
            <option>Mobile Phone</option>
            <option>Headphones</option>
            <option>Smart Watch</option>
        </select>

        <label>Quantity</label>
        <input type="number" name="quantity" min="1" required>

        <label>Delivery Address</label>
        <textarea name="address" required></textarea>

        <button type="submit" name="place_order">
            Place Order
        </button>

    </form>

</div>

</body>
</html>
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$creditcard = $_POST['creditcard'];
$jobrole = $_POST['jobrole'];
$skills = $_POST['skills'];

$namePattern = "/^[A-Za-z ]{3,50}$/";
$emailPattern = "/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/";
$phonePattern = "/^[0-9]{10}$/";
$passwordPattern = "/^(?=.*[A-Za-z])(?=.*[0-9]).{6,}$/";
$creditCardPattern = "/^[0-9]{16}$/";

$errors = array();

if (!preg_match($namePattern, $name)) {
    $errors[] = "Invalid Name";
}

if (!preg_match($emailPattern, $email)) {
    $errors[] = "Invalid Email";
}

if (!preg_match($phonePattern, $phone)) {
    $errors[] = "Phone Number must contain 10 digits";
}

if (!preg_match($passwordPattern, $password)) {
    $errors[] = "Password must contain letters and numbers with minimum 6 characters";
}

if (!preg_match($creditCardPattern, $creditcard)) {
    $errors[] = "Credit Card Number must contain exactly 16 digits";
}

if (empty($jobrole)) {
    $errors[] = "Please select a Job Role";
}

if (empty($skills)) {
    $errors[] = "Please enter your Skills";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Result</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef2f7;
            margin: 0;
        }

        .header {
            background: #1f3c88;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .container {
            width: 500px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }

        .details {
            background: #f5f7fa;
            padding: 15px;
            margin-top: 20px;
            border-radius: 5px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            background: #1f3c88;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<div class="header">
    <h1>Job Portal</h1>
</div>

<div class="container">

<?php

if (empty($errors)) {

    echo "<h2 class='success'>Registration Successful!</h2>";

    echo "<div class='details'>";
    echo "<p><b>Name:</b> $name</p>";
    echo "<p><b>Email:</b> $email</p>";
    echo "<p><b>Phone:</b> $phone</p>";
    echo "<p><b>Credit Card:</b> $creditcard</p>";
    echo "<p><b>Job Role:</b> $jobrole</p>";
    echo "<p><b>Skills:</b> $skills</p>";
    echo "</div>";

} else {

    echo "<h2 class='error'>Registration Failed</h2>";

    echo "<ul class='error'>";

    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }

    echo "</ul>";
}

?>

<a href="index.html">Back to Registration</a>

</div>

</body>
</html>
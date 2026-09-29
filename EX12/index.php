<?php
$xml = simplexml_load_file("employees.xml");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Details</title>

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
            width: 95%;
            margin: 30px auto;
        }

        h2 {
            text-align: center;
            color: #222;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 4px 12px #ccc;
        }

        th {
            background: #222;
            color: white;
            padding: 14px;
        }

        td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        tr:hover {
            background: #f1f1f1;
        }

        .count {
            text-align: center;
            margin-bottom: 20px;
            font-size: 18px;
        }
    </style>
</head>

<body>

<div class="header">
    <h1>Employee Management System</h1>
    <p>Employee Details List</p>
</div>

<div class="container">

    <h2>Employee Details</h2>

    <div class="count">
        Total Employees: <?php echo count($xml->employee); ?>
    </div>

    <table>

        <tr>
            <th>Employee ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Designation</th>
            <th>Salary</th>
        </tr>

        <?php
        foreach ($xml->employee as $employee) {
            echo "<tr>";
            echo "<td>" . $employee->id . "</td>";
            echo "<td>" . $employee->name . "</td>";
            echo "<td>" . $employee->department . "</td>";
            echo "<td>" . $employee->designation . "</td>";
            echo "<td>₹" . $employee->salary . "</td>";
            echo "</tr>";
        }
        ?>

    </table>

</div>

</body>
</html>
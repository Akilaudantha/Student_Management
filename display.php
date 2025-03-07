<?php
session_start();
include("Connection.php");

// Fetch student data from the database
$sql = "SELECT * FROM Student";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            text-align: center;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Student Details</h2>

    <table>
        <tr>
            <th>Index</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["Index"] . "</td>
                        <td>" . $row["FirstName"] . "</td>
                        <td>" . $row["LastName"] . "</td>
                        <td>" . $row["Phone"] . "</td>
                        <td>" . $row["Address"] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found</td></tr>";
        }
        $conn->close();
        ?>

    </table>

</body>
</html>

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
session_start();
include("connection.php");

$index=$_POST['search'];

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

$found = false; 

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { 
        if ($row['Index'] === $index) {
            $found = true;
            echo "<tr>
                        <td>" . $row["Index"] . "</td>
                        <td>" . $row["FirstName"] . "</td>
                        <td>" . $row["LastName"] . "</td>
                        <td>" . $row["Phone"] . "</td>
                        <td>" . $row["Address"] . "</td>
                      </tr>";
            
            exit();
        }
    }
}

if (!$found) {
    echo "Invalid username or password.";
}


?>
    </table></body></html>
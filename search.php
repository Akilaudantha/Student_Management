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
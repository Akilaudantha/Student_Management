<?php 
session_start();

include("Connection.php");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin";
$result = $conn->query($sql);

$found = false; 

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { 
        if ($row['username'] === $username && $row['password'] === $password) {
            $found = true;
            $_SESSION['username'] = $username; 
            header("Location: Home.html"); 
            exit();
        }
    }
}

if (!$found) {
    echo "Invalid username or password.";
}

$conn->close();
?>

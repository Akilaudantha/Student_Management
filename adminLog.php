<?php
session_start();
include("Connection.php");

$user = $_POST['Aname'];
$pass = $_POST['Apass'];



$sql = "INSERT INTO admin VALUES ('$user','$pass')"; 

if ($conn->query($sql) === TRUE) 
{
    echo "Record inserted successfully!";
   
    exit;
} 
else 
{
    echo "Error: " . $conn->error;
}

$conn->close();
?>

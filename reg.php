<?php
session_start();
include("Connection.php");

$index = $_POST['index'];
$first = $_POST['first'];
$last = $_POST['last'];
$phn = $_POST['phone'];
$add = $_POST['address'];


$sql = "INSERT INTO Student VALUES ('$index','$first', '$last', '$phn', '$add')"; 

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

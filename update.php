<?php
session_start();
include("Connection.php");

$index = $_POST['index'];
$option = $_POST['option'];


if ($option === 'delete') {

    
    $sql = "SELECT * FROM Student WHERE `Index` = '$index'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    
        $del = "DELETE FROM Student WHERE `Index` = '$index'";
        
        if ($conn->query($del) === true) {
            echo 'Successfully deleted';
        } else {
            echo 'Error deleting record';
        }
    } else {
        echo "Index not available"; 
    }
}
else if ($option === 'update') {
    header("Location: up.html");
}

$conn->close();
?>

<?php 
require "connection.php";
$task = $_POST['task'];
$sql = "INSERT INTO tasks VALUES (NULL,'$task')";
$query = mysqli_query($db,$sql);

if($query) {
    header('Location: index.php');
}
?>
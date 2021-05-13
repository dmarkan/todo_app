<?php 
require "connection.php";
$id = $_GET['id'];
$sql = "DELETE FROM tasks WHERE id = $id";
$query = mysqli_query($db,$sql);
header('Location: index.php');
?>
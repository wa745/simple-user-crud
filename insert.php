<?php
$conn = new mysqli("localhost", "root", "", "info");

$name = $_POST['name'];
$age = $_POST['age'];

$conn->query("INSERT INTO user (name, age) VALUES ('$name', $age)");
$conn->close();

header("Location: index.php");
?>

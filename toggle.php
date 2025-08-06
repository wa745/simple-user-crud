<?php
$conn = new mysqli("localhost", "root", "", "info");

$id = $_GET['id'];

// جلب الحالة الحالية
$result = $conn->query("SELECT status FROM user WHERE id = $id");
$row = $result->fetch_assoc();
$currentStatus = $row['status'];

// عكس القيمة: 0 → 1 أو 1 → 0
$newStatus = $currentStatus == 0 ? 1 : 0;

// تحديث الحالة
$conn->query("UPDATE user SET status = $newStatus WHERE id = $id");

echo $newStatus;

$conn->close();
?>

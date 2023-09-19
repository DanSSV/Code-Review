<?php
include('../db/dbconn.php');


$plateNumber = $_SESSION['driver'];
$status = 'active';

$query = "SELECT user_id FROM history_1 WHERE plate_number = ? AND status = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $plateNumber, $status);
$stmt->execute();
$stmt->bind_result($userId);
$stmt->fetch();
$stmt->close();

if (!empty($userId)) {
    $query = "SELECT name FROM users WHERE user_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $stmt->bind_result($name);
    $stmt->fetch();
    $stmt->close();

    echo '<h5 style="color: white;">Passenger: ' . $name . '</h5>';
} else {
    echo '<h5 style="color: white;">Passenger not found</h5>';
}

$conn->close();
?>
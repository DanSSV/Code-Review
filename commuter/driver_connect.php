<?php
require_once "../db/dbconn.php";


if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$plateNumber = $_SESSION['driver'];

$sql = "UPDATE users SET plate_number = ? WHERE user_id = ?";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("si", $plateNumber, $user_id);
    if ($stmt->execute()) {
       
    } else {
        // Error in executing the query
        echo "Error updating plate number: " . $stmt->error;
    }
    $stmt->close();
} else {
    // Error in preparing the SQL statement
    echo "Error preparing statement: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
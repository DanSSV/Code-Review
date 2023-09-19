<?php

include('../db/dbconn.php');

$startingMarkerInfo = $_POST['startingMarkerInfo'];
$newMarkerInfo = $_POST['newMarkerInfo'];

$query = "INSERT INTO history_1 (starting_marker, new_marker) VALUES (?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $startingMarkerInfo, $newMarkerInfo);

if ($stmt->execute()) {

    
} else {

     $stmt->error;
}

$stmt->close();
$conn->close();
?>
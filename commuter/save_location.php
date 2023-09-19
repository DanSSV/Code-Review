<?php

include('../db/dbconn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        isset($_POST['starting_lat']) && isset($_POST['starting_lng']) &&
        isset($_POST['new_lat']) && isset($_POST['new_lng'])
    ) {
        $startingLat = $_POST['starting_lat'];
        $startingLng = $_POST['starting_lng'];
        $newLat = $_POST['new_lat'];
        $newLng = $_POST['new_lng'];

        $platenumber = 'GHI-123';
        $user_id = '2';
        $status = 'active';

        $sql = "INSERT INTO history_1 (starting_lat, starting_lng, new_lat, new_lng, plate_number, user_id, time_date, status) VALUES (?, ?, ?, ?, ?, ?, NOW(), ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("dddssss", $startingLat, $startingLng, $newLat, $newLng, $platenumber, $user_id, $status);
            if ($stmt->execute()) {
                echo "Location data inserted successfully.";
            } else {
                echo "Error inserting location data: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error preparing the statement: " . $conn->error;
        }
    } else {
        echo "Latitude and/or longitude not provided.";
    }
} else {
    echo "Invalid request method.";
}

$conn->close();
?>
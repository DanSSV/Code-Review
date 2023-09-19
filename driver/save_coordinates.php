<?php

include '../db/dbconn.php';

if (isset($_POST['lat']) && isset($_POST['lng']) && isset($_POST['plate_number'])) {
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $plateNumber = $_POST['plate_number'];


    $sql = "SELECT route_id FROM history_1 WHERE status = 'active' AND plate_number = ? ORDER BY time_date DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $plateNumber);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
 
        $row = $result->fetch_assoc();
        $latestId = $row['route_id'];

        $updateSql = "UPDATE history_1 SET currentMarker_lat = ?, currentMarker_long = ? WHERE route_id = ?";
        $stmt = $conn->prepare($updateSql);

        $stmt->bind_param("ddi", $lat, $lng, $latestId);

        if ($stmt->execute()) {
            echo "Coordinates updated successfully.";
        } else {
            echo "Error updating coordinates: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "No active records found for plate number $plateNumber.";
    }

    $conn->close();
} else {
    echo "Latitude, longitude, or plate_number not provided.";
}
?>

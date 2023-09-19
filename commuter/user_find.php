<?php
require_once('../db/dbconn.php');



if (isset($_SESSION['driver'])) {
    $plateNumber = $_SESSION['driver'];

    $sql = "SELECT Plate_Number, body_number, Name FROM driver WHERE Plate_Number = ?";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $plateNumber);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        mysqli_stmt_bind_result($stmt, $plateNumberResult, $bodyNumber, $name);

        mysqli_stmt_fetch($stmt);

        mysqli_stmt_close($stmt);

        echo "<h5>Driver: " . $name . "</h5>";
        echo "<h5>Plate Number: " . $plateNumberResult . "</h5>";
        echo "<h5>Body Number: " . $bodyNumber . "</h5>";
    } else {
        echo "Driver not found.";
    }

    mysqli_close($conn);
} else {
    echo "Session variable 'driver' not set.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TriSakay | Commuter</title>
    <?php
    include '../php/dependencies.php';
    ?>

    <!-- <link rel="stylesheet" href="../css/commuter.css"> -->
    <link rel="stylesheet" href="../css/commuter.css">
    <?php
    include('../php/icon.php');
    ?>

</head>

<body>
    <?php
    session_start();
    include('../php/navbar_commuter.php');
    ?>

    <div class="container">
        <div class="d-flex justify-content-center align-items-center" style="min-height: 70vh;">
            <?php
        

            require_once '../db/dbconn.php';

            $driverName = "";
            $bodyNumber = "";

            if (isset($_SESSION['driver'])) {
                $plateNumber = $_SESSION['driver'];

                $query = "SELECT  body_number, name FROM driver WHERE plate_number = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("s", $plateNumber);
                $stmt->execute();
                $result = $stmt->get_result();
                $driverData = $result->fetch_assoc();

                if ($driverData) {
                    $driverName = $driverData['name'];
                    $bodyNumber = $driverData['body_number'];
                }

                $stmt->close();
            }

            $conn->close();
            ?>

            <div class="info">
                <h1>Matching you with a Driver.</h1>
                <p>Please wait.</p>
                <!-- <h4>Driver:
                    <?php echo $driverName; ?>
                </h4>
                <h4>Body Number:
                    <?php echo $bodyNumber; ?>
                </h4> -->
                <div class="roller" style="display: table; margin: 0 auto; margin-top: 10vh;">
                    <div class="lds-roller">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <script src="../js/commuter_hover.js"></script>
    <script src="../js/button.js"></script>
</body>

</html>
<?php
include('../php/session_commuter.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Route | TriSakay</title>
   
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="../css/connected_maps.css">
    <style>

    </style>
    <?php
    include('../php/dependencies.php');
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <?php
    include('../php/navbar_commuter.php');
    ?>
    <div id="map" style="height: 65vh;"></div>

    <div class="info">
        <?php
    include('user_find.php');
    ?>
    </div>

    

    <button id="cancel" hidden>Cancel</button>
    

    


    <script src="map.js"></script>
    <script>
        
        function checkStatus() {
            var plateNumber = "GHI-123"; 

            $.ajax({
                type: "POST",
                url: "check_status.php",
                data: { plateNumber: plateNumber },
                dataType: "json",
                success: function (response) {
                   
                    if (response.status === "match") {
                      
                        window.location.href = "receipt_cancel.php";
                    } else {
                       
                        $("#status").text("Status: " + response.status);
                    }
                },
                complete: function () {
                    
                    setTimeout(checkStatus, 5000);
                }
            });
        }

        $(document).ready(function () {
            checkStatus();
        });

    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Tempat Transit</title>


    
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Font -->
    <link href="assets/font/Poppins/Poppins-ExtraBold.ttf" rel="stylesheet">

    <link rel="icon" href="assets/img/Logo_Transit.png"
    type="image/x-icon">

    <!-- Leaflet -->
    <link rel="stylesheet" href="leaflet/leaflet.css">

    <style>
        a{
            text-decoration: none;
        }
    </style>

</head>
<body>


    <div class="d-flex">
        <div class="text-center shadow-lg" style="height: 100vh; width: 200px; background-color: #3C76CD;">
            <div class="mb-4 fs-3 border-bottom py-3">
                Tempat Transit
            </div>
            <div class="mb-4">
                <a href="#" class="text-white">Dashboard</a>
            </div>
            <div class="mb-4">
                <a href="#" class="text-white">Update Mapping</a>
            </div>
        </div>
        <div class="w-100">
            <div id="map" class="w-100" style="height: 100vh; background-color: rgba(191, 210, 237, 0.49);">
                
            </div>
        </div>
    </div>

        <?php include('updateDialog.php') ?>
    
    <script src="style/jquery-3.3.1.min.js"></script>
    <script src="js/popper.js"></script>
    
    <!-- Bootstrap -->
    <script src="js/bootstrap.js"></script>

    <!-- Mapping -->
    <script src="Mapping/Pointer_font_point.js"></script>
    <script src="Mapping/Zona_region.js"></script>

    <!-- Leaflet -->
    <script src="leaflet/leaflet.js"></script>
    
    <!-- MyScript -->
    <script src="style/scriptAdmin.js"></script>
</body>
</html>
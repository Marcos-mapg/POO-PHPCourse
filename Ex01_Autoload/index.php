<?php
    include 'includes/autoloader.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Autoload register</title>
</head>
<body>
<?php
    $vehicle = new Vehicle\Vehicle(2007,"VOLVO");
    echo   $vehicle->get_vehicle_brand();
    echo "<br>";
    $parking = new Parking("Big Park ", 10, "11 street");
    echo    $parking->get_parking_name() ;
    echo '<br>'
?>
    
</body>
</html>
<?php
require('../vendor/autoload.php');

# Essayer d'utiliser votre factory ici

use App\Factory\VehicleFactory;

$vehicle1 = VehicleFactory::createVehicle('bicycle', 0.1, 'none');
$vehicle2 = VehicleFactory::getVehicleByCriteria(25, 15);

echo "Vehicle 1: " . get_class($vehicle1) . "\n";
echo "Vehicle 2: " . get_class($vehicle2) . "\n";
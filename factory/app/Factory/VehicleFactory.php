<?php

namespace App\Factory;

use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;
use App\Entity\VehicleInterface;

class VehicleFactory {
    public static function createVehicle($type, $costPerKm, $fuelType): VehicleInterface {
        switch ($type) {
            case 'bicycle':
                return new Bicycle($costPerKm, $fuelType);
            case 'car':
                return new Car($costPerKm, $fuelType);
            case 'truck':
                return new Truck($costPerKm, $fuelType);
            default:
                throw new \InvalidArgumentException("Invalid vehicle type");
        }
    }

    public static function getVehicleByCriteria($distance, $weight): VehicleInterface {
        if ($distance < 20 && $weight < 20) {
            return new Bicycle(0.1, 'none');
        } elseif ($weight > 200) {
            return new Truck(1.5, 'diesel');
        } else {
            return new Car(0.5, 'petrol');
        }
    }
}
// bus_fare.php
<?php

require_once 'vehicle.php';

class Bus extends Vehicle {
    public function fare() {
        $base_fare = $this->seating_capacity() * 100;
        $maintenance_charge = 0.10 * $base_fare; // 10% maintenance charge
        return $base_fare + $maintenance_charge;
    }

    public function seating_capacity($capacity = 50) {
        return $capacity;
    }
}

// Example usage
$bus = new Bus("City Bus", 80, 15);
echo $bus->fare(); // Outputs: 5500
?>
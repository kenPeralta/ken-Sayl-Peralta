// bus_with_capacity.php
<?php

require_once 'vehicle.php';

class Bus extends Vehicle {
    public function seating_capacity($capacity = 50) {
        return $capacity;
    }
}
?>
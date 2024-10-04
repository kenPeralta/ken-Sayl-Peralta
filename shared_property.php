// shared_property.php
<?php

class Vehicle {
    public static $shared_property = 'Common Value';

    // Other properties and methods...
}

class Bus extends Vehicle {
    // Inherits shared_property
}

class Car extends Vehicle {
    // Inherits shared_property
}
?>
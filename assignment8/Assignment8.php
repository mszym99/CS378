<?php
require __DIR__ . '/Vehicle.php';

    

   $allVehicles = array(
    new Vehicle("Ford", "Model‐T", "Gas","30"),
    new LandVehicle("Ford", "Prius", "Hybrid","130",4),
    new WaterVehicle("White Star Line", "titanic", "Steam","24",3327,1178),
    new LandVehicle("Honda", "CR‐V", "Gas","165",4),
    new WaterVehicle("Cunard Line", "Queen Mary 2", "Diesel","30",2620,2620),
    new LandVehicle("Mercedes‐Benz", "Actros", "Diesel","140",8)
    );

    foreach($allVehicles as $vehicle){
        Echo $vehicle . " ";
    }
   /* $car = new Vehicle("Ford", "Model-T", "Hybrid","160"); 
    
    Echo $car; 
    $hybrid = new LandVehicle("Ford", "Prius", "Hybrid","130",4);
    Echo $hybrid; 
    $boat = new WaterVehicle("White Star Line", "titanic", "Steam","24",3327,1178); 
    Echo $boat;*/

?>
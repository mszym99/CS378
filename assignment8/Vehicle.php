<html>
<head>

</head>

<body>
<?php

    class Vehicle{
        protected $make;  
        protected $model; 
        protected $fuel; 
        protected $topSpeed;
        public function __construct($make, $model, $fuel, $topSpeed){
            $this->make = $make;
            $this->model = $model;
            $this->fuel = $fuel;
            $this->topSpeed = $topSpeed;

        }
        
        public function __toString(){ 
                return '<div><h3>'.$this->make.'</h3>
                <table><tbody>
                <tr><td>Model:</td><td>'.$this->model.'</td></tr>
                <tr><td>Fuel:</td><td>'.$this->fuel.'</td></tr>
                <tr><td>Top Speed:</td><td>'.$this->topSpeed.' Mph</td></tr>
                </table> </div>';
                }  
         
    }
    
    class LandVehicle extends Vehicle{
        private $wheels;
        public function __construct($make, $model, $fuel, $topSpeed, $wheels){
            $this->make = $make;
            $this->model = $model;
            $this->fuel = $fuel;
            $this->topSpeed = $topSpeed;
            $this->wheels = $wheels;


        }
        public function __toString(){ 
            return '<div><h3>'.$this->make.'</h3>
            <table><tbody>
            <tr><td>Model:</td><td>'.$this->model.'</td></tr>
            <tr><td>Fuel:</td><td>'.$this->fuel.'</td></tr>
            <tr><td>Top Speed:</td><td>'.$this->topSpeed.' Mph</td></tr>
            <tr><td>Wheels</td><td>'.$this->wheels.' Wheels</td></tr>

            </table></div>';
            } 
    }
    class WaterVehicle extends Vehicle{ 
        private $capacity; 
        private $lifeBoatCapacity; 
        
        public function __construct($make, $model, $fuel, $topSpeed, $capacity, $lifeBoatCapacity){
            $this->make = $make;
            $this->model = $model;
            $this->fuel = $fuel;
            $this->topSpeed = $topSpeed;
            $this->capacity = $capacity;
            $this->lifeBoatCapacity = $lifeBoatCapacity;
        }
        public function __toString(){ 
            return '<div><h3>'.$this->make.'</h3>
            <table><tbody>
            <tr><td>Model:</td><td>'.$this->model.'</td></tr>
            <tr><td>Fuel:</td><td>'.$this->fuel.'</td></tr>
            <tr><td>Top Speed:</td><td>'.$this->topSpeed.' Mph</td></tr>
            <tr><td>Capacity</td><td>'.$this->capacity.' </td></tr>
            <tr><td>Life Boat Capacity</td><td>'.$this->lifeBoatCapacity.' </td></tr>

            </table></div>';
            

        } 
    }
?>
</body>
</html>
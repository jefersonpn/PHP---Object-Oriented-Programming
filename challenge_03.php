<?php

//Declaring a OBJECT
class Bicycle {
    
    public $brand;
    public $model;
    public $year;
    public $description;
    private $weight_kg;
    protected $wheels = 2;

    public function get_wheels() {
        return $this->wheels;
    }

    // GETTER weight_kg
    public function get_weight_kg() {
        return $this->weight_kg . " kg <br />";
    }
    // SETTER weight_kg
    public function set_weight_kg($value_kg) {
        $this->weight_kg = $value_kg;
    }
      
    public function name() {
        // This method create a STD description for all objects. 
        $this->description = $this->brand . " " . $this->model . " " . $this->year;
        return $this->description;
    }
        
    public function weight_lbs() {
        // This method converts Kg into Pounds.
        $lbs_rounded = round( $this->weight_kg * 2.2046226218, 4 );
        return $lbs_rounded . " lbs";
    }

    public function set_weight_lbs($lbs) {
        // This method converts pound into Kg.
        $this->weight_kg = ceil( $lbs / 2.2046226218 ) ;
        return $this->weight_kg;
    }

    public function wheels_details() {
        // Prints on the screen "Bicycle or Unicycle"
        $numbOfWheels = $this->get_wheels();
        if ($numbOfWheels == 1){
            return "It has 1 wheel. <br />";
        } else {
            return "It has 2 wheels.<br />";
        }
    }

   
}

class Unicycle extends Bicycle {

    protected $wheels = 1;


}

// Instantiating a Object and passing some values.
$bike1 = new Bicycle;
$bike1->brand = "Caloi";
$bike1->model = "Mountan bike";
$bike1->year = 2022;
$bike1->set_weight_kg(10);

// Instantiating a Object and passing some values.
$bike2 = new Unicycle;
$bike2->brand = "Barra Fort";
$bike2->model = "Unibike";
$bike2->year = 2023;
$bike2->set_weight_kg(5);


// Checking the name of the class of an object.
echo "<b>The Object is instantiated on: </b>";
echo get_class($bike1) .  "</br>";

// Calling the Method NAME().
echo "<b>Description: </b>";
echo $bike1->name() . "<br />";

// Calling the Method WEIGHT_LBS().
echo "<b>Weight in Pounds: </b>";
echo $bike1->weight_lbs() . "<br />";

// Calling the method SET_WEIGHT_LBS to convert pounds into kg.
echo "<b>Passing the weight in Pounds and setting in Kg: </b>";
echo $bike1->set_weight_lbs(22.0462) . "<br /><br />";

echo "<b>Bike1 have the weight of </b>" . $bike1->get_weight_kg() . " and it has ". $bike1->wheels_details() . "<br />";
echo "<b>Bike2 have the weight of </b>" . $bike2->get_weight_kg(). " and it has ". $bike2->wheels_details() . "<br />";

// Getting all VARs is set up in side the Object.
echo "<b>What VARS are set in Bicycle: </b>";
$var_class = get_class_vars('Bicycle');
echo "<pre>";
print_r($var_class);
echo "</ pre><br />";

// Getting all VARs and Values is in the Object instantiated
echo "<b>What VARS are set in BIKE1: </b>";
$var_object = get_object_vars($bike1);
echo "<pre>";
print_r($var_object);
echo "</ pre><br />";

// Shows which methods are defined in side the Object
echo "<h3>What METHODs are set?</h3><br />";
$method_class = get_class_methods('bicycle');
echo "<b>Methods: </b>" . implode(', ', $method_class) . "<br />";


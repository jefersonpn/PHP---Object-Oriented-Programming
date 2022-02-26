<?php

//Declaring a OBJECT
class Bicycle {
    
    var $brand;
    var $model;
    var $year;
    var $description;
    var $weight_kg;
    
    function name() {
        // This method create a STD description for all objects. 
        $this->description = $this->brand . " " . $this->model . " " . $this->year;
        return $this->description;
    }
        
    function weight_lbs() {
        // This method converts Kg into Pounds.
        $lbs_rounded = round( $this->weight_kg * 2.2046226218, 4 );
        return $lbs_rounded;
    }

    function set_weight_lbs($lbs) {
        // This method converts pound into Kg.
        $this->weight_kg = ceil( $lbs / 2.2046226218 ) ;
        return $this->weight_kg;
    }
}

// Instantiating a Object and passing some values.
$bike1 = new Bicycle;
$bike1->brand = "Caloi";
$bike1->model = "Mountan bike";
$bike1->year = 2022;
$bike1->weight_kg = 10;

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


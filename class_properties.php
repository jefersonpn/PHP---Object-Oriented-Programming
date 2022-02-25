<?php

// Declaring a class or Object.
class Student{

    // Defining properties for the Object.
    var $first_name;
    var $last_name;
    var $country = 'None';

}

// Intantiating a Object.
$student1 = new Student;
$student1->first_name = 'Lucy'; // Filling up the properties. 
$student1->last_name = 'Ricardo';

// Intantiating a Object.
$student2 = new Student;
$student2->first_name = 'Ethel'; // Filling up the properties. 
$student2->last_name = 'Mertz';

// Printing the first name e last name of both objects.
echo $student1->first_name . " " . $student1->last_name . "</br>";
echo $student2->first_name . " " . $student2->last_name . "</br>";

// Checking the defined VARS of the CLASS Student.
$class_vars = get_class_vars('Student');
echo "Class vars:</br>";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

// Checking the defined VARS of the Object Instantiated
$object_vars = get_object_vars($student1);
echo "Object vars:</br>";
echo "<pre>";
print_r($object_vars);
echo "</pre>";

// PROPERTY_EXISTS() -> This function check if the properties are defined in the class.
if(property_exists('Student', 'first_name')):
    echo "Property first_name exists in Student class.</br>";
else:
    echo "Property first_name does not exists in Student class.</br>";
endif;

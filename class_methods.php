<?php

// Declaring a class or Object.
class Student{

    // Defining properties for the Object.
    var $first_name;
    var $last_name;
    var $country = 'None';

    function say_hello() {
        return 'Hello World!';
    }

    function full_name() {
        return $this->first_name . " " . $this->last_name;
    }
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
echo "<b>Printing the full name using the vars from the object:</b><br />";
echo $student1->first_name . " " . $student1->last_name . "<br />";
echo $student2->first_name . " " . $student2->last_name . "<br /><br />";

// Printing the first name e last name of both objects.
echo "<b>Printing the full name using the METHOD of the object::</b><br />";
echo $student1->full_name() . "<br />";
echo $student2->full_name() . "<br /><br />";

// Calling Methods
echo "<b>Using METHOD to display msg:</b><br />";
echo $student1->say_hello() . "<br />";
echo $student2->say_hello() . "<br /><br />";

// Checking the defined VARS of the CLASS Student.
echo "<b>What METHODS are in side the object:</b><br />";
$class_methods = get_class_methods('Student');
echo "Class methods: " . implode(', ', $class_methods) . "<br /><br />";

// METHODS_EXISTS() -> This function check if the METHOD are defined in the Object.
echo "<b>Does the METHODS exists in side the object class?</b><br />";
if(method_exists('Student', 'say_hello')):
    echo "Method say_hello() exists in Student class.</ br>";
else:
    echo "Method say_hello() does not exists in Student class.</ br>";
endif;

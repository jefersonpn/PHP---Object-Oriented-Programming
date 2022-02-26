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
echo $student1->first_name . " " . $student1->last_name . "<br />";
echo $student2->first_name . " " . $student2->last_name . "<br />";

// Calling Methods
echo $student1->say_hello() . "<br />";
echo $student2->say_hello() . "<br />";

// Checking the defined VARS of the CLASS Student.
$class_methods = get_class_methods('Student');
echo "Class methods: " . implode(', ', $class_methods) . "<br />";

// METHODS_EXISTS() -> This function check if the METHOD are defined in the Object.
if(method_exists('Student', 'say_hello')):
    echo "Method say_hello() exists in Student class.</ br>";
else:
    echo "Method say_hello() does not exists in Student class.</ br>";
endif;

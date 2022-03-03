<?php

// Declaring a class or Object.
class Student{

    // Defining properties for the Object.
    public $first_name;
    public $last_name;
    public $country = 'None';

    protected $registration_id;
    private $tuition = 0.00;

    public function hello_world() {
        return 'Hello World!';
    }

    public function full_name() {
        return $this->first_name . " " . $this->last_name;
    }

    protected function hello_family() {
        return 'Hello family';
    }

    private function hello_me() {
        return 'Hello me!';
    }

}

class PartTimeStudent extends Student {

    public function hello_parent() {
        return $this->hello_family();
    }
}

// Intantiating a Object.
//$student1 = new Student;
$student1 = new PartTimeStudent;
$student1->first_name = 'Lucy'; // Filling up the properties. 
$student1->last_name = 'Ricardo';

//echo $student1->registration_id;
//echo $student1->tuition;



// Printing the first name e last name of both objects.
echo "<b>Printing the full name using the vars from the object:</b><br />";
echo $student1->first_name . " " . $student1->last_name . "<br />";

// Printing the first name e last name of both objects.
echo "<b>Printing the full name using the METHOD of the object::</b><br />";
echo $student1->full_name() . "<br />><br />";

// Calling Methods
echo "<b>Using METHOD to display msg:</b><br />";
echo $student1->hello_world() . "<br />";
//echo $student1->hello_family() . "<br />";
//echo $student1->hello_me() . "<br />";
echo $student1->hello_parent();

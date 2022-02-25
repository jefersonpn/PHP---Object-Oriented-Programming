<?php

class Student{

}

$student1 = new Student;
$student2 = new Student;

echo get_class($student1) .  "</br>";//checking the name of the class of an object

$class_names = ['Product', 'Student', 'student'];//list of classes in a variable
foreach($class_names as $class_name){ //loop throw the array using foreach to check if the Object $student1 is instantiated on that class
    if(is_a($student1, $class_name)) { //if is instantiated prints that
        echo "student1 is a {$class_name}.</br>";
     } else {//in case is not instantiated print that
            echo "student1 is not a {$class_name}.</br>";
        }
    }
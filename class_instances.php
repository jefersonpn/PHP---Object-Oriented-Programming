<?php

class Student{

}

$student1 = new Student;
$student2 = new Student;

// Checking the name of the class of an object.
echo get_class($student1) .  "</br>";

// List of classes in a variable.
$class_names = ['Product', 'Student', 'student'];
// Loop throw the array using foreach to check if the Object $student1 is instantiated on that class.
foreach($class_names as $class_name):

    if(is_a($student1, $class_name)): // If is instantiated prints that.

        echo "student1 is a {$class_name}.</br>";

        else: // In case is not instantiated print that.
            echo "student1 is not a {$class_name}.</br>";

    endif;
endforeach;
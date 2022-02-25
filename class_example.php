<?php

//This is how to declare a class
class Student {

}

//This is how to check if the class is declared or not.
//Shows all classes are declared including the ones from php core.
$classes = get_declared_classes();
echo "Classes: " . implode(', ', $classes) . "</br>";

//Check if a specific class is declered
$class_names = ['Product', 'Student', 'student'];//list of classes in a variable
foreach($class_names as $class_name){ //loop throw the array using foreach
    if(class_exists($class_name)) { //if is declared prints that
        echo "{$class_name} is a declared class.</br>";
     } else {//in case is not declared print that
            echo "{$class_name} is not a declared class.</br>";
        }
    }

<?php

class User {

    var $first_name;
    var $last_name;
    var $username;

    function full_name() {
        return $this->first_name ." ". $this->last_name;
    }
}

class Customer extends User {    
}

$u = new User;
$u->first_name = 'Jeferson';
$u->last_name = 'Nascimento';
$u->username = 'jefersonpn';

$c = new Customer;
$c->first_name = 'Caleb';
$c->last_name = 'Nascimento';
$c->username = 'Calebpn';

// Printing full_name from a class 
echo "<b>Printing full name from class: </b>";
echo $u->full_name() . '<br />';

// Printing full_name from a subclass
echo "<b>Printing full name from subclass: </b>";
echo $c->full_name() . '<br />';

// Printing the name o the class is inherited.
echo "<b>The \$u is inherited from: </b>";
echo get_parent_class($u) . "<br />"; // Doe not print a result coz it's not inherited from a subclass.

// Printing the name o the class is inherited.
echo "<b>The \$c is inherited from: </b> ";
echo get_parent_class($c) . "<br />";

// Checking if $c is a subclass of USER.
if (is_subclass_of($c, 'User')) {
    echo "Instance is a subclass of ". get_parent_class($c) . '<br />';
}

// Getting class parents of a intancied Object.
echo "<b>What the class parent of \$c: </b>";
$parents = class_parents($c);
echo implode(', ', $parents) . '<br />';

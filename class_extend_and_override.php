<?php

class User {

    var $is_admin = false;

    var $first_name;
    var $last_name;
    var $username;

function full_name() {
    return $this->first_name ." ". $this->last_name;
}
}

class Customer extends User {
    
    var $city;
    var $state;
    var $country;

    function location() {
        return $this->city . ", ".$this->state . ", ".$this->country;
    }
}

class AdminUser extends User {
    var $is_admin = true;

    function full_name() {
        return $this->first_name . " " . $this->last_name . " (Admin)";
    }
}

$u = new User;
$u->first_name = 'Jeferson';
$u->last_name = 'Nascimento';
$u->username = 'jefersonpn';

$c = new Customer;
$c->first_name = 'Caleb';
$c->last_name = 'Nascimento';
$c->username = 'Calebpn';
$c->city = 'Londrina';
$c->state = 'Paraná';
$c->country = 'Brasil';


echo "<b>Location: </b>" . $c->location();
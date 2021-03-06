<?php

class Sofa {

    public static $instance_count = 0;

    public $seats = 3;
    public $arms = 2;

    public function __construct($args=[]){
        self::$instance_count++;
      //  $this->seats = $args['seats'] ?? NULL;
        $this->seats = $args['seats'] ?? $this->seats;
        $this->arms =  $args['arms'] ?? $this->arms;
    }
}

class Couch extends Sofa {
    var $arms = 0;
}

class Loveseat extends Sofa {
    var $seats = 2;
}

$sofa = new Sofa(['seats' => 3, 'arms' => 2]);
echo 'Sofa<br />';
echo '_ seats: ' . $sofa->seats . '<br />';
echo '_ arms: ' . $sofa->arms . '<br />';
echo '<br />';

$couch = new Couch(['seats' => 4]);
echo 'Couch<br />';
echo '_ seats: ' . $couch->seats . '<br />';
echo '_ arms: ' . $couch->arms . '<br />';
echo '<br />';

$loveseat = new Loveseat(['arms' => 0]);
echo 'Loveseat<br />';
echo '_ seats: ' . $loveseat->seats . '<br />';
echo '_ arms: ' . $loveseat->arms . '<br />';
echo '<br />';

echo 'Instance count: ' . Sofa::$instance_count . '<br />';
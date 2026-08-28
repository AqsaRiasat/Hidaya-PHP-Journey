<?php

class Human {
    public $hands = 2;
    public $eyes  = 2;
    public $heart = 1;
    public $hair_color = "Black";

    public function __call($method_name, $arguments) {
        echo "Method Error: The method '<b>" . $method_name . "</b>' does not exist in this class!<br />";
    }
    public static function __callStatic($method_name, $arguments) {
        echo "Static Error: The static method '<b>" . $method_name . "</b>' cannot be executed!<br />";
    }
    public function __isset($property_name) {
        echo "Checking Isset: Checking if '<b>" . $property_name . "</b>' is set inside the class...<br />";
        return true;
    }

    public function __unset($property_name) {
        echo "Removing Property: The property '<b>" . $property_name . "</b>' is being cleared from memory.<br />";
    }

    
    public function __toString() {
        return "Message: I am a simple object belonging to the Human class.<br />";
    }
}

$ali = new human();
echo "<hr />";
$ali->get_full_name(); 
echo "<hr />";

Human::checkAttendance();
echo "<hr />";

isset($ali->age);
echo "<hr />";

unset($ali->city);
echo "<hr />";

echo $ali;

echo "<hr />";
echo "PHP CODE END";


?>
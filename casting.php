
<?php

$a = "5";
$a = (int) $a; // now $a holds an integer

##################
class Person
{
    var $name = "Fred";
    var $age = 35;
}

$o = new Person;
$a = (array) $o;
print_r($a);
echo "</br>";

#################
$a = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
$o = (object) $a;
echo $o->name;


?>
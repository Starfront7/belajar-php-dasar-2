<?php

require_once "data/Person.php";

$person = new Person("Muhammad ", " Fadil");
$person->name = "Fadil";
$person->address = "Indonesia";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Fadil", null);
$person2->name = "Fadil";
$person2->address = null;

var_dump($person2);

// error
// $person2->name = [];

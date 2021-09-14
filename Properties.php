<?php 
require_once 'data/Person.php';

$person = new Person();
$person->name = "Naufal";
$person->address = "Tasikmalaya";
$person->country = "Korea";

echo "Nama : $person->name" . PHP_EOL;
echo "Alamat : $person->address" . PHP_EOL;
echo "Negara : $person->country" . PHP_EOL;

//var_dump($person);

$person2 = new Person();
$person2->name = "Eli";
$person2->address = "Rajapolah";

echo "Nama : $person2->name" . PHP_EOL;
echo "Alamat : $person2->address" . PHP_EOL;
echo "Negara : $person2->country" . PHP_EOL;

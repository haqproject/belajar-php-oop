<?php

require_once 'data/Person.php';

$person = new Person("Ibra", "Tasik");
$person->name = "Ibra";
$person->saySalam("Naufal"); //memanggil function dalam class

$say = new Person("Nana", "Tasik");
$say->name="Nana";
$say->saySalam(null);

$say->info();
$person->info();
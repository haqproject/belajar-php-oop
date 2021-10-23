<?php

require_once 'data/Manager.php';

$manager = new Manager();
$manager->name = "Naufal";
$manager->sayHello("Inal");

$vm = new ViceManager();
$vm->name = "Arinal";
$vm->sayHello("Opal");

<?php
require_once 'data/Manager.php';

$manajer = new Manager();
$manajer->name = "Opal";
$manajer->sayHello("Arinal");

$vp = new ViceManager();
$vp->name = "Inja";
$vp->sayHello("Arinal");
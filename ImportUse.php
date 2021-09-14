<?php

require_once 'data/Conflict.php';
require_once 'data/Helper.php';

use Data\conflict1\Conflict;
//use DATA\conflict2\Conflict; tidak bisa mengambil data class conflict2 walaupun dgn namespace berbeda karena memiliki class yang sama

use function Helper\helpMe;
use const Helper\APP_VERSION;


$conflict = new Conflict();

helpMe();
echo APP_VERSION;


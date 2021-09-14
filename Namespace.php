<?php
require_once 'data/Conflict.php';
require_once 'data/Helper.php';

$conflict1 = new \Data\conflict1\Conflict(); //cara menggunakan namsespace
$conflict2 = new \Data\conflict2\Conflict();

echo \Helper\helpMe();
echo \Helper\APP_VERSION;

<?php
require_once 'data/Conflict.php';
require_once 'data/Helper.php';

/**
 * jika dalam namespace terdapat beberapa class kita bisa menggunakan use secara bersamaan
 * menggunakan kata kunci {.., ..., ...} diisi dengan nama class
 * /
 */

use Data\conflict1\Conflict as Conf1;
use Data\conflict2\Conflict as Conf2;
use function Helper\helpMe;
use const Helper\APP_VERSION;

$conflict1 = new Conf1();
$conflict2 = new Conf2();

helpMe();
echo APP_VERSION;


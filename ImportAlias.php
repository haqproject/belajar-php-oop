<?php

require_once 'data/Conflict.php';
require_once 'data/Helper.php';

/**
 * Saat kita menggunakan use, artinya kita tidak perlu lagi menggunakan nama namespace diawal class ketika kita ingin membuat class tersebut
 * Namun bagaimana jika kita ternyata nama class nya sama?
 * Untungnya PHP memiliki fitur yang namanya alias
 * Alias adalah kemampuan membuat nama lain dari class, function atau constant yang ada
 * Kita bisa menggunakan kata kunci as setelah melakukan use
 */

use Data\conflict1\{Conflict, Peace, War}; // <--- Contoh
use function Helper\helpMe;
use const Helper\APP_VERSION;

$conflict1 = new Conflict();
$peace = new Peace();
$war = new War();

helpMe();
echo APP_VERSION;

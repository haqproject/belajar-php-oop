<?php
/**
 * //sebelum php 7.4 membuat variable constant biasa menggunakan define
 * Namun sekarang kita bisa membuat konstan dengan keyword const
 */
require_once "data/Person.php";

define("APPLICATION", "Haq Project"); 
const VERSION = "10.0";

echo "Application : " . APPLICATION . PHP_EOL;
echo "Version : " . VERSION . PHP_EOL;
echo "Author : " . Person::AUTHOR . PHP_EOL; //cara mengakses const dari class

<?php
 require_once 'data/Location.php';

use Data\{Location, City, Province};

//$location = new Location(); //error karena abstract class tidak bisa dijadikan object melainkan harus melalui turunannya 
$city = new City();
$province = new Province;
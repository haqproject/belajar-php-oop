<?php
/**
 * Visibility / Access modifier adalah kemampuan properties, 
 * function dan constant dapat diakses dari mana saja
* Secara default, properties, function dan constant yang kita buat di dalam class bisa diakses dari mana saja, atau artinya dia adalah public
* Selain public, masih ada beberapa visibility lainnya
* Secara default kata kunci var untuk properties adalah sifatnya public
 * 
 */

 /*
    |Modifier | Class | Subclass | World|
    -------------------------------------
    |Public   |   Y   |    Y     |   Y  |
    |Protected|   Y   |    Y     |   N  |
    |Private  |   Y   |    N     |   N  |
 */

require_once 'data/Product.php';

$product = new Product("Ager", 100);
// echo $product->name . PHP_EOL;
// echo $product->price . PHP_EOL;

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new DummyProduct("Keyboard", 300);
$dummy->info();
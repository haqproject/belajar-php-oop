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

class Product{
    protected string $name; 
    protected int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getPrice(): int{
        return $this->price;
    }

}

class DummyProduct extends Product{
    public function info(){
        echo "Name : $this->name" . PHP_EOL;
        echo "Price : $this->price" . PHP_EOL; 

    }
}


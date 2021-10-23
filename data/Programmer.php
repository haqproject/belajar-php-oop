<?php

class Programmer {

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer {

}

class FrontendProgrammer extends Programmer {

}

/**
 * Polymorphism adalah kemampuan object berubah bentuk ke bentuk yang lain
 * Polymorphism erat kaitannya dengan inheritance (Pewarisan)
 */

class Company 
{
    public Programmer $programmer;
}

//function polymorphism
function sayHello (Programmer $programmer) {
    //instanceof merupakan fungsi untuk mengecek tipe data pada suatu object

    if ($programmer instanceof BackendProgrammer){
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    }elseif ($programmer instanceof FrontendProgrammer){
        echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    }elseif ($programmer instanceof Programmer){
        echo "Hello Programmer $programmer->name" . PHP_EOL;

    }
}
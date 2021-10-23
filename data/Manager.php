<?php
//class pareny
class Manager {
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = "")
    {
        $this->name = $name;
        $this->title = $title;    
    }

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is Manager $this->name \n";
    }
}

/**
 * Inhertence atau pewarisan bisa kita digunakan untuk beberapa child 1 parent bisa banyak child
 * cara menggunakan inheritn kita bisa menambahkan kata extends lalu diikuti dengan nama class parent
 * seperti contoh dibawah ini.
 * child mewarisi semua fields yang ada pada parent
 */

 //class child
class ViceManager extends Manager{

    //construct override
    public function __construct(string $name = "")
    {
        parent::__construct($name, "VP");
    }

    //function override = penurunan atau penggunaan function dari parent ke child 
    function sayHello(string $name): void
    {
        echo "Hi $name, my name is Vicemanager $this->name \n";
    }
}

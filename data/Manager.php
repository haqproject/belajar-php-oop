<?php
//class pareny
class Manager {
    var string $name;

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is $this->name \n";
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

}

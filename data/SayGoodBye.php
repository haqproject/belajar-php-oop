<?php
/*
● Trait mirip dengan abstract class, kita bisa membuat konkrit function atau abstract function
● Yang membedakan adalah, di trait bisa kita tambahkan ke dalam class lebih dari satu
● Trait mirip seperti ekstension, dimana kita bisa menambahkan konkrit function ke dalam class
dengan trait
● Secara sederhana trait adalah digunakan untuk menyimpan function-function yang bisa digunakan
ulang di beberapa class
● Untuk menggunakan trait di class, kita bisa menggunakan kata kunci use
*/

namespace Data\Traits;

trait SayGoodBye 
{
    public function sayGoodBye(?string $name){
        if(is_null($name)){
            echo "Good Bye" . PHP_EOL;
        }else{
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function sayHello(?string $name){
        if(is_null($name)){
            echo "Hello" . PHP_EOL;
        }else{
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName{
    public string $name ;
}

trait CanRun 
{
    public abstract function run(): void;
}

/*
Jika sebuah class memiliki parent class yang memiliki function yang sama dengan function di trait,
maka secara otomatis trait akan meng-override function tersebut
● Namun jika kita membuat function yang sama di class nya, maka secara otomatis kita akan
meng-override function di trait
● Sehingga posisinya seperti ini ParentClass =override by=> Trait =override by=> ChildClass
*/
class ParentPerson 
{
    public function sayHello(?string $name)
    {
        echo "Hello in Person" . PHP_EOL;
    }

    public function sayGoodBye(?string $name){
        echo "Good Bye In Person" . PHP_EOL;
    }
}

//Trait inheritance
trait All{
    use SayGoodBye, SayHello, HasName, CanRun{
        //set visibility trait
        //sayHello as private;
        //sayGoodBye as private;
    }
}

class Person
{
    use All;

    public function run(){
        echo "Person {$this->name} is running" . PHP_EOL;
    }

    
}
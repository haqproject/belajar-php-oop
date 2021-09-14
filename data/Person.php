<?php

class Person //Ini adalah Class
{

    const AUTHOR = "Naufal Arinal Haq"; //ini adalah variable constant

    var string $name; //ini adalah  proverti OOP kalo dalam function biasa disebut variable
    var ?string $address = null; //nulable properti bisa set null
    var string $country = "Indonesia"; //default value jika tidak set $country maka akan menggunakan default 

    /**
     * Consturctor function yang dijalankan ketika pertama kali 
     */

     function __construct(string $name, ?string $address)
     {
        $this->name = $name;
        $this->address = $address;
     }

    function saySalam (?string $name) {
         if(is_null($name)){
             echo "Hi, Assalamualaikum $this->name" . PHP_EOL; //mengakses properti name dgn menambahkan $this->
         }else{
             echo "Hi $name, Assalamualaikum $this->name" . PHP_EOL;
         }
    }

    /**
     * self keyword digunakan untuk memanggil const tanpa perlu menulis nama class
     * self hanya berlaku ketika const berada di dalam class
     * 
     */
    function info(){
        echo "Author :" . self::AUTHOR . PHP_EOL; //
    }

    function __destruct()
    {
        echo "Object person $this->name is destroyed" , PHP_EOL;
    }

}
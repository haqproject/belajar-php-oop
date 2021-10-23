<?php
//Anonymous Class adalah class tanpa nama

interface HelloWorld {
    public function sayHello(): void;
}

//berikut cara mendeklarasikan anonymous class
$helloWorld = new class("Naufal") implements HelloWorld {

    public string $name;
    //di anonymous class juga kita bisa menambahkan construktor dan destruktor
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$helloWorld->sayHello();
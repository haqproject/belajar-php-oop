<?php

/*
Jika kita menggunakan lebih dari satu trait, lalu terdapat function yang sama di trait tersebut
● Maka hal tersebut akan menyebabkan konflik
● Jika terjadi konflik seperti ini, kita bisa mengatasinya dengan menggunakan kata kunci insteadof
*/

trait A 
{
    function doA():void
    {
        echo "a" . PHP_EOL;
    }

    function doB(): void
    {
        echo "b" . PHP_EOL;
    }
}

trait B
{
    function doA():void
    {
        echo "A" . PHP_EOL;
    }

    function doB(): void
    {
        echo "B" . PHP_EOL;
    }
}

class TraitConflict {
    // use A, B; //jika kita hanya memamnggilnya seperti ini maka akan terjadi konflik karena memiliki function yg sama dlam trait
    use A, B {
        A::doA insteadOf B;
        B::doB insteadOf A;
    }
}

$sample = new TraitConflict();
$sample->doA();
$sample->doB();
<?php
/*
 Sebelumnya kita tahu bahwa untuk membuat object yang bisa di iterasi, kita menggunakan Iterator
● Namun pembuatan Iterator secara manual sangatlah ribet
● Untungnya di PHP, terdapat fitur generator, yang bisa kita gunakan untuk membuat Iterator secara
otomatis hanya dengan menggunakan kata kunci yield
 */
//menggunakan iterator
function getGenap(int $max): iterator{
    $array = [];
    for($i = 1; $i <= $max; $i++){
        if($i % 2 == 0){
            $array[] = $i;
        }
    }

     return new ArrayIterator($array);
}

foreach (getGenap(100) as $value){
    echo "Genap : $value" . PHP_EOL;
}

//menggunakan generator
function getGanjil(int $max): iterator{
    for($i = 1; $i <= $max; $i++){
        if($i % 2 == 1){
            yield $i;
        }
    }
}

foreach (getGanjil(100) as $value){
    echo "Ganjil : $value" . PHP_EOL;
}
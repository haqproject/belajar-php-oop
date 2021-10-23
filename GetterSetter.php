<?php 

/*
    ● Encapsulation artinya memastikan data sensitif sebuah object tersembunyi dari akses luar
    ● Hal ini bertujuan agar kita bisa menjaga agar data sebuah object tetap baik dan valid
    ● Untuk mencapai ini, biasanya kita akan membuat semua properties menggunakan access modifier
    private, sehingga tidak bisa diakses atau diubah dari luar

    Di PHP, proses encapsulation sudah dibuat standarisasinya, dimana kita bisa menggunakan Getter
    dan Setter method.
    ● Getter adalah function yang dibuat untuk mengambil data field
    ● Setter ada function untuk mengubah data field

*/

require_once "data/Category.php";

$category = new Category();
$category->setName("Iphone 12");
$category->setExpensive(true);

echo "Category Name: {$category->getName()}" . PHP_EOL;
echo "Category Expensive: {$category->isExpensive()}" . PHP_EOL;
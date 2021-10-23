<?php

$dateTime = new DateTime();
$dateTime->setDate(1998, 06, 26);
$dateTime->setTime(6, 6, 6, 0);
//menambah interval waktu
$dateTime->add(new DateInterval("P1Y"));
//menurangi jumlah wakltu dengan invert
$minusMonth = new DateInterval("P1M");
$minusMonth->invert = true;
$dateTime->add($minusMonth);
var_dump($dateTime);

//mengubah zona waktu
$now = new DateTime();
var_dump($now);

$now->setTimezone(new DateTimeZone("Asia/Tokyo"));
var_dump($now); 

//Mengubah format waktu
$string = $now->format("Y-m-d H:i:s");
echo "Tanggal: $string" . PHP_EOL;

//Parsing data waktu dari user
$date = DateTime::createFromFormat("Y-m-d H:i:s", "2021-10-9 09:27:59", new DateTimeZone("Asia/Jakarta"));
//mengecek apakah format
if($date){
    var_dump($date);
}else{
    echo "Format Salah" . PHP_EOL;
}


<?php

require_once 'exception/ValidationException.php';
require_once 'data/LoginRequest.php';
require_once 'helper/Validation.php';

$loginRequest = new LoginRequest();
$loginRequest->username = "    ";
$loginRequest->password = "    ";

try{
    validateLoginRequest($loginRequest);
}catch(ValidationException | Exception $exception){
    echo "Error : {$exception->getMessage()}" . PHP_EOL; 

    //debug info dengan fn getTrace;
    var_dump($exception->getTrace());

    //debug info berbentuk string dengan getTraceasString
    echo $exception->getTraceAsString() . PHP_EOL;

}finally{
    echo "Error gak error, tetap dipanggil" . PHP_EOL;
}
// Jika ingin menampilkan pesan error yang berbeda silahkan gunakan catch kembali
// catch(Exception $exception){
//     echo "Error : {$exception->getMessage()}" . PHP_EOL; 
// }


echo "Valid" . PHP_EOL;

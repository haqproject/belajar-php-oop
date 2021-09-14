<?php

/**
 * Selain class, kita juga menggunakan function dan constant di namespace
 * Dan jika kita ingin menggunakan function atau constant tersebut, kita bisa menggunakannya
 * dengan diawali dengan nama namespace nya
 */

namespace Helper {
    function helpMe(){
        echo "Help Me\n";
    }

    const APP_VERSION = "10.0 Haq Project \n";
}
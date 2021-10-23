<?php

namespace Data;

interface HasBrand {
    function getBrand(): string;
}

interface IsMantenance {
    function isMaintenance(): bool;
}

interface Car extends HasBrand {

    function drive(): void;
    
    function getTire(): int;
}

class Mini implements Car, IsMantenance{
    public function drive(): void
    {
        echo "Drive Mini Cooper Clubman" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "Mini";
    }

    public function isMaintenance(): bool
    {
        return true;
    }
}

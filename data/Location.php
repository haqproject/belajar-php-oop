<?php

namespace Data;

//Abstract class artinya, class tersebut tidak bisa dibuat sebagai object secara langsung, hanya bisa diturunkan

abstract class Location {
    public string $name;
}

class City extends Location{

}

class Province extends Location{

}
<?php

namespace Data;

class Shape {
    public function getCorner(){
        return 0;
    }
}

class Rectangle extends Shape{
    public function getCorner()
    {
        return 4;
    }

    public function getParentCorner(){
        //parent keyword = mengambil function dari class parent dgn keyword parent
        return parent::getCorner();
    }
}
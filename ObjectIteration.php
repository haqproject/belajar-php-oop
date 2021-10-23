<?php

class Data implements IteratorAggregate {
    var string $first = "first";
    public string $second = "Second";
    private string $third = "Thrid";
    protected string $forth = "Forth";

    //menggunakan iterator
    // public function getIterator()
    // {
    //     $array = array(
    //         "first" => $this->first,
    //         "second" => $this->second,
    //         "third" => $this->third,
    //         "forth" => $this->forth
    //     );

    //     $iterator = new ArrayIterator($array);
    //     return $iterator;
    // }

    //menggunakan generator
     public function getIterator()
    {
            yield "first" => $this->first;
            yield "second" => $this->second;
            yield "third" => $this->third;
            yield "forth" => $this->forth;
    }

}

$data = new Data();
//object iteration
foreach($data as $key => $value){
    echo "$key : $value" . PHP_EOL;
}

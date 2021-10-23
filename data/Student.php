<?php

class Student {
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample): void{
        $this->sample = $sample;
    }

    //function clone membatasi data agar tidak ada di cloningan
    public function __clone()
    {
        unset($this->sample);
    }
    // magic function to string membuat object menjadi sebuah string
    public function __toString(): string
    {
        return "Student Id: $this->id, Name: $this->name, Value: $this->value"; 
    }

    //function __invoke() merupakan function yang dieksekusi ketika object 
    //yang kita buat dianggap sebagai function

    public function __invoke(...$argumens): void
    {
        $join = join(", ", $argumens);
        echo "Invoke Student Join With Arguments $join" . PHP_EOL;
    }
    /*
      Sebelumnya kita sering melakukan debug variable menggunakan function var_dump()
        Function var_dump() sebenarnya memanggil function __debugInfo()
        Jika kita ingin mengubah isi dari debug info, kita bisa membuat function __debugInfo()
     */

     public function __debugInfo()
     {
         return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "Naufal",
            "version" => "1.0"
         ];
     }
}
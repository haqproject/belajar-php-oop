<?php

/**
 * Final class adalah class yang tidak bisa diturunkan lagi
 * jadi class yang tidak memiliki child
 * jika memaksa membuat turunanny maka akan error
 */

 class SocialMedia {
     public string $name;
     final public function login(string $username, string $password): bool{ //contoh final function
        return true;
    }
}
    

final class Facebook extends SocialMedia{ //contoh final class
    public function login(string $username, string $password): bool{
        return true;
    }
 }

 class Quora extends Facebook{ //ini akan error

 }
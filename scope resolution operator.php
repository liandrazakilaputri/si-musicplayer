<?php

class Mahasiswa {

    public static function setNama(string $nama) {

        return $nama;
    }
}

//Instatiation with Scope resolution operator
//Paamayim Nekudotayim

echo Mahasiswa::setNama('Faiza');
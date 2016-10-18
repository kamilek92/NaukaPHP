<?php

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

class Deanery extends Students {
    
    public function getStudentAlbumNameFn() {
        
        return "Nazwa albumu studenta to ".parent::getStudentAlbum();
        
    }
    
    public function getStudentAlbumNameVar() {
        
        return "Nazwa albumu studenta to ".$this->albumNumber;
        
    }
    
}

class Students {
    
    public $albumNumber;
    private $studentName;
    protected $peselNumber;

    public function getStudentName() {
        return $this->studentName;
    }

    public function getStudentPesel() {
        return $this->peselNumber;
    }

    public function getStudentAlbum() {
        return $this->albumNumber;
    }
    
    public function setStudentPesel($pesel) {
        $this->peselNumber = $pesel;
    }
    
}

$obiekt = new Deanery;
$obiekt->albumNumber = 12345;

echo "Wartość odczytana z funkcji klasy rozszerzającej: ".$obiekt->getStudentAlbumNameFn()."<br />";
echo "Wartość odczytana ze zmiennej klasy rozszerzającej: ".$obiekt->getStudentAlbumNameVar();


?>
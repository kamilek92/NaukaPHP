<?php

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

class Students {
    
    //  Implementacja zmiennych środowiskowych
    
    public $albumNumber;
    public $studentName;
    public $peselNumber;
    
    //  Implementacja metod

    public function getStudentName() {
        return $this->studentName;
    }

    public function getStudentPesel() {
        return $this->peselNumber;
    }

    public function getStudentAlbum() {
        return $this->albumNumber;
    }
    
}

?>
<?php

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

/**
 * KLASA Students
 * 
 * @package Students
 * @author Eduweb
 * @copyright 2011
 * @access public
 */
class Students {
    
    //  Implementacja zmiennych środowiskowych
    
    public $albumNumber;
    private $studentName;
    protected $peselNumber;
    
    //  Implementacja metod
    
    /**
     * Students::getStudentName()
     * 
     * @return  studentName  string
     * @param Imię i nazwisko studenta
     */
    public function getStudentName() {
        return $this->studentName;
    }
    
    /**
     * Students::getStudentPesel()
     * 
     * @return  peselNumber  Number
     * @param Numer PESEL studenta
     */
    public function getStudentPesel() {
        return $this->peselNumber;
    }
    
    /**
     * Students::getStudentAlbum()
     * 
     * @return  albumNumber  Number
     * @param Numer indeksu studenta
     */
    public function getStudentAlbum() {
        return $this->albumNumber;
    }
    
    public function setStudentPesel($pesel) {
        
        $this->peselNumber = $pesel;
        
    }
    
}

$obiekt = new Students;
$obiekt->albumNumber = 123456789;
echo $obiekt->getStudentAlbum();
echo "<br />";
$obiekt->setStudentPesel(987654);
echo $obiekt->getStudentPesel();

?>
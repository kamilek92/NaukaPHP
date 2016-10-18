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
    
    //  Implementacja zmiennych środowiskowych (członkowskich)
    static public $studentAge;
    static $studentGroup;
    
    //  Implementacja metod
    public function getStudentAge() {
        return self::$studentAge;
    }
    
    //  Implementacja metod statycznych
    static public function setStudentAgeStatic($age) {
        self::$studentAge = $age;
    }
    
}

//  SPOSOBY UZYSKANIA WIEKU STUDENTA
//  SPOSÓB I - Ustawienie statycznej zmiennej a następnie statycznej metody
echo "SPOSÓB I:<br />";
Students::$studentAge = 24;
echo "Wiek studenta = <b>".Students::$studentAge."</b> lata <br /><br />";

//  SPOSÓB II - Ustawienie statycznej zmiennej, utworzenie nowej instacji klasy Students oraz odwołanie 
//              do publicznej metody getStudentAge()
echo "SPOSÓB II:<br />";
Students::$studentAge = 15;
$obiekt = new Students;
echo "Wiek studenta = <b>".$obiekt->getStudentAge()."</b> lata <br /><br />";


//  SPOSÓB III - Wykonanie statycznej metody setStudentAgeStatic() oraz odwołanie się do statycznej 
//               zmiennej i jej wyświetlenie w przeglądarce
echo "SPOSÓB III:<br />";
Students::setStudentAgeStatic(38);
echo "Wiek studenta = <b>".Students::$studentAge."</b> lata";

?>
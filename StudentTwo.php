<?php

/**
 * Created by PhpStorm.
 * User: kamilciesielski
 * Date: 17.10.2016
 * Time: 16:32
 */
class StudentTwo
{

    static public $studetAge;
    static $studentGroup;


    public function getStudentAge(){
        return self::$studetAge;
    }

    static public function setStudentAgeStatic($age){
        self::$studetAge = $age;
    }


}


echo "Sposó 1 <br/>";
StudentTwo::$studetAge = 24;
echo "Wiek:".StudentTwo::$studetAge;

echo  "Sposób 2 <br/>";
StudentTwo::$studetAge = 15;
$obiekt = new StudentTwo;
echo "Wiek studenta ".$obiekt->getStudentAge();


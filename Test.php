<?php

/**
 * Class Students
 *
 *
 */

class Deanaery extends Students {


    public function getStudentNameNameFn()
    {
        return parent::getStudentName();
    }


    public function getStudentAlbum()
    {
        return parent::getStudentAlbum(); // TODO: Change the autogenerated stub
    }
}




class Students{





    public $studentName;
    private $studentPesel;

    /**
     * @param mixed $studentName
     */
    public function setStudentName($studentName)
    {
        $this->studentName = $studentName;
    }

    /**
     * @param mixed $studentPesel
     */
    public function setStudentPesel($studentPesel)
    {
        $this->studentPesel = $studentPesel;
    }

    /**
     * @param mixed $studentAlbum
     */
    public function setStudentAlbum($studentAlbum)
    {
        $this->studentAlbum = $studentAlbum;
    }
    protected $studentAlbum;

    /**
     * @return mixed
     */
    public function getStudentPesel()
    {
        return $this->studentPesel;
    }

    /**
     * @return mixed
     */
    public function getStudentAlbum()
    {
        return $this->studentAlbum;
    }

    public function getStudentName(){
        return $this->studentName;
    }


}




//
//$obiekt = new Students();
//$obiekt->studentName="Kamil";
//echo $obiekt->getStudentName();
//
//
//
//$obiekt2 = new Deanaery;
//$obiekt2->
//


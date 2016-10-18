<?php

/**
 * Created by PhpStorm.
 * User: kamilciesielski
 * Date: 18.10.2016
 * Time: 17:50
 */
class Pies extends Zwierzeta {


    static public $nazwa;
    public function glos(){
        return "Hał hasł";
    }


    public function getCos(){
        return self::glos();
    }


    public function __get($name) {
        echo "<div style=\"border:1px solid green; padding:3px; margin:2px; color:green; background-color:#eeeeee;\">
        
                Wykryto odczyt zmiennej członkowskiej <i>{$name}</i>...
        
             </div>";
    }


}

abstract class Zwierzeta
{



    public $gatunek;

    /**
     * Zwierzeta constructor.
     * @param $gatunek
     */
    public function __construct($gatunek)
    {
        $this->gatunek = $gatunek;
    }


    abstract public function  glos();
}



Pies::$nazwa="Kamil";
echo Pies::$nazwa;
$objet = new Pies("Pies");
echo $objet->gatunk."1<br/>";
echo $objet->glos()."2<br/>";
echo $objet->getCos()."3<br/>";
echo 'test4';



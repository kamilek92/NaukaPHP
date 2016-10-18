<?php

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

class Components {
    
    public $compName;
    public $compHash;
    public $compAuthor;
    public $exampleString = "EXAMPLE STRING";
    
    public function __destruct() {
        unset($this->compName);
        unset($this->compHash);
        unset($this->compAuthor);
    }
    
    public function regNewComponent($compName, $compAuthor) {
        
        try {
            
            $this->compName = $compName;
            $this->compHash = sha1($compName);
            $this->compAuthor = $compAuthor;
            
        } catch(Exception $ERR) {
            echo 'Wystąpił błąd podczas rejestrowania komponentu - '.$ERR->getMessage();
        }
        
    }
    
    public function renameComponent($newName) {
        
        try {
            
            $this->compName = $newName;
            $this->compHash = sha1($newName);
            
        } catch(Exception $ERR) {
            echo 'Wystąpił błąd podczas zmiany nazwy komponentu - '.$ERR->getMessage();
        }
        
    }
    
    public function unregComponent() {
        
        self::__destruct();
        
    }
    
    public function getCompName() {
        return (isset($this->compName)) ? $this->compName : "Zmienna członkowska <i>\"compName\"</i> nie istnieje!";
    }
    
    public function getCompHash() {
        return (isset($this->compHash)) ? $this->compHash : "Zmienna członkowska <i>\"compHash\"</i> nie istnieje!";
    }
    
    public function getCompAuthor() {
        return (isset($this->compAuthor)) ? $this->compAuthor : "Zmienna członkowska <i>\"compAuthor\"</i> nie istnieje!";
    }
    
    // Definicja metod magicznych
    public function __set($name, $value) {
        echo "<div style=\"border:1px solid green; padding:3px; margin:2px; color:green; background-color:#eeeeee;\">
        
                Wykryto ustawienie zmiennej członkowskiej <i>{$name}</i> na wartość <i>{$value}</i>
        
             </div>";
    }
    
    public function __get($name) {
        echo "<div style=\"border:1px solid green; padding:3px; margin:2px; color:green; background-color:#eeeeee;\">
        
                Wykryto odczyt zmiennej członkowskiej <i>{$name}</i>...
        
             </div>";
    }
    
    // Od PHP 5.1.0 
    public function __isset($name) {
        echo "<div style=\"border:1px solid orange; padding:3px; margin:2px; color:orange; background-color:#eeeeee;\">
        
                Wykryto sprawdzenie istnienia zmiennej członkowskiej <i>{$name}</i>...
        
             </div>";
    }



    // Od PHP 5.1.0
    public function __unset($name) {
        echo "<div style=\"border:1px solid red; padding:3px; margin:2px; color:red; background-color:#eeeeee;\">
        
                Wykryto niszczenie zmiennej członkowskiej <i>{$name}</i>...
        
             </div>";
    }
    
    public function __toString() {
        return $this->exampleString;
    }
    
}


echo "<div style=\"border:1px;\"> aaa </div> <a href='fdsf'></a>";
$comp = new Components();

echo "<u>Rejestrowanie nowego komponentu...</u><br />\n";
$comp->regNewComponent("Menu Główne", "Mateusz Manaj");

echo "<b>Zarejestrowano nowy komponent!</b> \n<br /> Nazwa: ".$comp->compName."\n<br />Hash-code: ".$comp->compHash.
     "\n<br />Autor: ".$comp->compAuthor."<hr />";
     
echo "<u>Zmiana nazwy komponentu \"".$comp->compName."\"...</u>\n<br />";
$comp->renameComponent("Menu boczne");

echo "<b>Zmieniono nazwę komponentu!</b> \n<br /> Nowa nazwa: ".$comp->compName."\n<br />Hash-code: ".$comp->compHash.
     "\n<br />Autor: ".$comp->compAuthor."<hr />";
     
echo "<u>Usuwanie komponentu \"".$comp->compName."\"...</u>\n<br />";
$comp->unregComponent();
echo "<hr /><h3>Sprawdzenie poprawnego usunięcia zmiennych członkowskich przez próbę wyświetlenia na ekranie (echo):</h3><br />";
echo $comp->compName;
echo $comp->compHash;
echo $comp->compAuthor;

echo "<hr /><h3>Sprawdzenie j.w. lecz z odniesieniem do metod sprawdzających istnienie (getComp[Name|Hash|Author]):</h3><br />";
echo $comp->getCompName()."<br />";
echo $comp->getCompHash()."<br />";
echo $comp->getCompAuthor();

echo "<hr /><h3>Test ustawiania/odczytu zmiennych członkowskich poprzez obiekt \$comp->...</h3><br />";
$comp->compName = "Lorem ipsum...";
$zm = $comp->compName;
echo $comp;


?>
<?php

require_once('config.php');

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

$compObject = new Components();
$myComp = new MyNewComp;

if($compObject->regNewComponent($myComp)) {
   
   echo $compObject->compName;
    
} else {
    
    die("Klasa ".get_class($myComp)." nie implementuje interfejsu iComponent i nie może być użyta!");
    
}

?>
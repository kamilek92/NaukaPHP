<?php
session_start();
require_once("config.php");

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */


if(!(isset($_GET['page']))) {
    
    header("Location: ".SERVER_ADDRESS."start");
    
} else {
    
    $mp = new MainPage($_GET['page']);
    
}

?>
<?php

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

if(isset($_POST['login']) && isset($_POST['password'])) {
    
    $um = new UserManager;
    
    if($um->LogIn($_POST['login'], $_POST['password'])) {
        
        header("Location: ".$_SERVER['HTTP_REFERER']);
        
    } else {
        
        die("Przekierowanie na stronę błędu...");
        
    }
    
} else {
    
    die("DOSTĘP DO TEJ STRONY ZOSTAŁ ZABLOKOWANY PRZEZ ADMINISTRATORA!");
    
}

?>
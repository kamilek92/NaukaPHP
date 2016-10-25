<?php

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

if(isset($_POST['name'])) {
    
    $um = new UserManager;
    
    $res = $um->CreateUser($_POST);
    
    if($res) {
        echo "Użytkownik utworzony!";
    } else {
        
        die("Utworzenie użytkownika nie było możliwe!");
        
    }
    
} else {
    die("DOSTĘP DO TEJ STRONY ZOSTAŁ ZABLOKOWANY PRZEZ ADMINISTRATORA!");
}

?>
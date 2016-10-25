<?php

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

if(isset($_POST['rating'])) {
    
    $arr = $_POST;
    unset($arr['rating']);
    $artId = array_flip($arr);
    $artId = end($artId);
    $artId = substr($artId, stripos($artId, "-") + 1);
    
    $v = new Voter;
    
    if($v->SetVote(end($arr), $_SESSION['login'], $artId) === true) {
        echo "Dziękujemy za oddanie głosu!\nTwoja ocena to ".end($arr);
    } else {
        echo "Przepraszamy, ale wystąpił błąd podczas zapisu Twojego głosu!";
    }
    
} else {
    die("DOSTĘP DO TEJ STRONY ZOSTAŁ ZABLOKOWANY PRZEZ ADMINISTRATORA!");
}

?>
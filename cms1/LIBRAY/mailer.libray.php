<?php

require_once("class.phpmailer.php");

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

if(isset($_POST['name'])) {
    
    $body = "Witam!\nOsoba o e-mailu {$_POST['mail']} prosiła o kontakt oraz wysłała następującą treść: \n\n";
    //$result = mail('mateusz@eduweb.pl', $_POST['subject'], $body);
    
    $mail = new PHPMailer();
    
    $mail->IsSMTP();
    $mail->Host = 'host.com';
    $mail->Port = 25;
    $mail->SMTPAuth = true;
    $mail->Username = "example@example.com";
    $mail->Password = "tajne_haslo";
    
    $mail->FromName = "Użytkownik serwisu SuperCMS";
    $mail->From = $_POST['mail'];
    $mail->AddAddress('mateusz@eduweb.pl', 'Mateusz');
    $mail->Subject = $_POST['subject'];
    $mail->Body = $body;
    
    $result = $mail->Send();
    
    if($result) {
        echo "Mail został wysłany!";
    } else {
        echo "Mail nie został wysłany poprawnie!";
    }
    
} else {
    die("DOSTĘP DO TEJ STRONY ZOSTAŁ ZABLOKOWANY PRZEZ ADMINISTRATORA!");
}

?>
<?php



//// STAŁE DLA BAZY DANYCH
//define('DB_SERVER', 'localhost:8889');
//define('DB_USERNAME', 'root2');
//define('DB_PW', 'root');
//define('DB_DB', 'supercms');
//
//// STAŁA DLA ADRESU I LOKALIZACJI APLIKACJI
//define('SERVER_ADDRESS', $NewURL);
//
//// STAŁA DLA LOKALIZACJI KATALOGÓW I PLIKÓW
//define('DS', "/", true);
//define('ClassFolder', 'CLASS'.DS, true);
//define('ManagerFolder', 'CLASS'.DS.'Managers'.DS, true);
//define('LogFolder', 'LOG'.DS, true);
//
//// Magiczna funkcja automatycznie ładująca klasy wg. zapotrzebowania
//function __autoload($className) {
//    @include_once(ClassFolder.$className.".class.php");
//    @include_once(ManagerFolder.$className.".class.php");
//
//}




define("Slesz", "/", true);
define("ClassFolder", "Class".Slesz, true);

function __autoload($naza){
    include_once (ClassFolder.$naza."class.php");
}

?>
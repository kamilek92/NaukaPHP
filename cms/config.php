<?php
ob_start();

// OKREŚLENIE POŁOŻENIA STRONY W SERWISIE - DEFINICJA <BASE ... />
$AbsoluteURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
$dirCat = dirname($_SERVER['PHP_SELF']);
$AbsoluteURL .= $_SERVER['HTTP_HOST'];
$AbsoluteURL .= $dirCat != '\\' ? $dirCat : "";
$slash = substr($AbsoluteURL, -1);

$NewURL = $slash != '/' ? $AbsoluteURL.'/' : $AbsoluteURL;


// STAŁE DLA BAZY DANYCH
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'eduweb');
define('DB_PW', 'eduweb2011');
define('DB_DB', 'supercms');

// STAŁA DLA ADRESU I LOKALIZACJI APLIKACJI
define('SERVER_ADDRESS', $NewURL);

// STAŁA DLA LOKALIZACJI KATALOGÓW I PLIKÓW
define('LogFolder', 'LOG', true);

set_include_path(get_include_path(). PATH_SEPARATOR . "CLASS");
set_include_path(get_include_path(). PATH_SEPARATOR . "CLASS/Managers");
set_include_path(get_include_path(). PATH_SEPARATOR . "LIBRAY");

// Magiczna funkcja automatycznie ładująca klasy wg. zapotrzebowania

function __autoload($className) {
    
    @include_once($className.".class.php");
    
}

?>

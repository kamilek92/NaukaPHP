<?php
ob_start();
// OKREŚLENIE POŁOŻENIA STRONY W SERWISIE - DEFINICJA <BASE ... />
$AbsoluteURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
$dirCat = dirname($_SERVER['PHP_SELF']);
$AbsoluteURL .= $_SERVER['HTTP_HOST'];
$AbsoluteURL .= $dirCat != '\\' ? $dirCat : "";
$slash = substr($AbsoluteURL, -1);
$NewURL = $slash != '/' ? $AbsoluteURL.'/' : $AbsoluteURL;
define('SERVER_ADDRESS', $NewURL);





// STAŁE DLA BAZY DANYCH
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PW', 'root');
define('DB_DB', 'supercms');

// STAŁA DLA ADRESU I LOKALIZACJI APLIKACJI


//// STAŁA DLA LOKALIZACJI KATALOGÓW I PLIKÓW
//define('LogFolder', 'LOG', true);

set_include_path(get_include_path(). PATH_SEPARATOR . "MODEL");
set_include_path(get_include_path(). PATH_SEPARATOR . "WIDOK");

function __autoload($classname){
    include_once ($classname.".class.php");
}
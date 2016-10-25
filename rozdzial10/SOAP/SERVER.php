<?php

require_once("module.php");

/**
 * @author Mateusz Manaj
 * @company Firma Softgraf 2010 ©
 * @copyright 17:29, 3/10/2010
 * @email mateusz_manaj@softgraf.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("SuperCMS.wsdl"); // GDZIE JEST TEN PLIK
$server->setClass('SuperCMS'); //NAZWA KLASY
$server->handle();  //ROZPORZĄDZ

class SuperCMS {
    
    protected $appName = "SuperCMS 2011";
    
   public function getArticleList() {
        
        return 3;
        
   }
   
   public function getAppName() {
    
        return module::$test;
    
   }
    
}

?>
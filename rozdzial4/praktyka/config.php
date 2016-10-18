<?php

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

define("DS", "/");
define("ClassPath", "CLASS");
define("InterfacePath", "CLASS".DS."INTERFACE");

function __autoload($className) {
    @include_once(ClassPath.DS.$className.".class.php");
    @include_once(InterfacePath.DS.$className.".interface.php");
}

?>
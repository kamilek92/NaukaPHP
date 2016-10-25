<?php

/**
 * @author Mateusz Manaj
 * @company Firma Softgraf 2010 ©
 * @copyright 17:40, 3/10/2010
 * @email mateusz_manaj@softgraf.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

$client = new SoapClient("SuperCMS.wsdl");
print_r($client->getAppName());

?>
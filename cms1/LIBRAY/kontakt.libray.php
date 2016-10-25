<?php

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

$meta = new MetaTags($_GET['page'], FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, 
                     FALSE, FALSE, FALSE, FALSE, FALSE, "screen", "icon", 
                     "jQuery-1.6.0-min,jquery.validate");
                     
echo<<<PL

<body>

PL;

    AddonLoader::load("Kontakt");

echo<<<PL

<div id="header">
    
PL;

    ModuleLoader::load("LoginForm");

    ModuleLoader::load("Menu");

echo '</div>';

    ModuleLoader::load("SloganProdukty");
    
echo<<<PL

    <div id="main">
    	<div class="content">

PL;

    ModuleLoader::load("Kontakt");

echo<<<PL

        </div>
    </div>
    
PL;

    ModuleLoader::load("FooterProdukty");

echo<<<PL
     
</body>
</html>

PL;

?>
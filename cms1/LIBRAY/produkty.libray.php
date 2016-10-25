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
                     "jQuery,script");
                     
echo<<<PL

<body>

PL;

    AddonLoader::load("Start");

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
        	<div class="column">
PL;

    ModuleLoader::load("BoxProduktyOpis");
    
echo '</div>';
    
    ModuleLoader::load("BoxProduktyRight");

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
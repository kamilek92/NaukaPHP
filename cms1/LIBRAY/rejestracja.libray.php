<?php
ModuleLoader::load("IFMODULE::RESTRICT_ACCESS_TO_LOGGED_USER");

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
                     "jQuery,jquery.validate,jquery.MetaData");
                     
echo<<<PL

<body>

PL;

    AddonLoader::load("Rejestracja");

echo<<<PL

<div id="header">
    
PL;

    ModuleLoader::load("LoginForm");

    ModuleLoader::load("Menu");

echo '</div>';

    ModuleLoader::load("SloganRejestracja");
    
echo<<<PL

    <div id="main">
    	<div class="content">

PL;

    ModuleLoader::load("Rejestracja");
    
echo<<<PL

        </div>
    </div>
    
PL;

    ModuleLoader::load("Footer");

echo<<<PL
     
</body>
</html>

PL;

?>
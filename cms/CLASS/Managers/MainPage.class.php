﻿<?php

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

class MainPage {
    
    private $active_page;
    
    public function __construct($ACTIVE_PAGE) {
        
        $this->active_page = $ACTIVE_PAGE;
        
        switch($this->active_page) {
            
            case 'start':
            require_once $this->active_page.".libray.php";
            break;
            
            case 'artykuly':
            require_once $this->active_page.".libray.php";
            break;
            
        }
        
    }
    
}

?>
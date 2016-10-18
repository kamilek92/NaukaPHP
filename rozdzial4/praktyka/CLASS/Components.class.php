<?php

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

class Components {
    
    public $compObject;
    public $compName;
    
    public function regNewComponent($compObject) {
            
            if($compObject instanceof iComponent) {
                $this->compObject = $compObject;
                $zm = new MyNewComp();
                $this->compName = $zm->myCompName;
                return true;
            } else {
                return false;
            }
        
    }
    
}

?>
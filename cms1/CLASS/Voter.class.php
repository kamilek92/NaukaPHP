<?php

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

/**
 * KLASA Voter
 * 
 * @package CLASS.Voter
 * @author Eduweb 2011® Mateusz Manaj
 * @copyright 2011
 * @version $Id$
 * @access public
 * @param OPIS KLASY:
 * @param Klasa stosowana do operacji na tabeli artykułów, a konkretniej do zarządzania ich oceną.
 */
class Voter {
    
    protected $connection_init;
    
    /**
     * Voter::MakeDBCall()
     * 
     * @return null
     */
    private function MakeDBCall() {
        $this->connection_init = DatabaseManager::getConnection();
    }
    
    /**
     * Voter::__construct()
     * 
     * @return null
     */
    public function __construct() {

        self::MakeDBCall();
        $this->MakeDBCall();
    }
    
    /**
     * Voter::RatingGenerator()
     * 
     * @param mixed $ARTID
     * @param integer $MIN
     * @param integer $STEP
     * @return string $output
     */
    public function RatingGenerator($ARTID, $MIN = 0, $STEP = 10) {
                                                                                                
        $LABELS = array("Najgorszy jaki czytałem/łam!", "W sumie, nie taki zły :)", "Można w nim znaleźć ciekawe informacje", "No, no... :)", "Super-hiper-ekstra artykuł!", "Epicki...");
        
        $output = "";
        $i = $MIN;
        $x = 0;
        
        $ocena = $this->GetAVGVoteArtId($ARTID);
        $SELECTED = is_int($ocena) ? $ocena : false;
        
        if(isset($_SESSION['login'])) {
            
            $disabled = (is_int($ocena) && $ocena != 0) ? "ratingEditDisabled" : "";
            
        } else {
            
            $disabled = "ratingEditDisabled";
            
        }
        
        $output .= '<form method="POST" action="voter/">
        <div class="rating form-'.$ARTID.' '.$disabled.'">';
        
        if($SELECTED >= 10 && $SELECTED < 15) {
            $SELECTED = 10;
        } else if($SELECTED >= 15 && $SELECTED < 20) {
            $SELECTED = 20;
        } else if($SELECTED >= 20 && $SELECTED < 25) {
            $SELECTED = 20;
        } else if($SELECTED >= 25 && $SELECTED < 30) {
            $SELECTED = 30;
        } else if($SELECTED >= 30 && $SELECTED < 35) {
            $SELECTED = 30;
        } else if($SELECTED >= 35 && $SELECTED < 40) {
            $SELECTED = 40;
        } else if($SELECTED >= 40 && $SELECTED < 45) {
            $SELECTED = 40;
        } else if($SELECTED >= 45 && $SELECTED < 50) {
            $SELECTED = 50;
        } else if($SELECTED >= 50 && $SELECTED < 55) {
            $SELECTED = 50;
        } else if($SELECTED >= 55 && $SELECTED < 60) {
            $SELECTED = 60;
        }
        
        foreach($LABELS as $label) {
            
            $i += $STEP;
            $x++;
            
            if($SELECTED) {
                
                if($SELECTED == $i) {
                    $output .= '<label for="artId-'.$ARTID.'-'.$x.'">'.$label.'</label>'."\n".'<input type="radio" name="artId-'.$ARTID.'" value="'.$i.'" id="artId-'.$ARTID.'-'.$x.'" checked="checked">'."\n";
                } else {
                    $output .= '<label for="artId-'.$ARTID.'-'.$x.'">'.$label.'</label>'."\n".'<input type="radio" name="artId-'.$ARTID.'" value="'.$i.'" id="artId-'.$ARTID.'-'.$x.'">'."\n";
                }
                
            } else {
            
                $output .= '<label for="artId-'.$ARTID.'-'.$x.'">'.$label.'</label>'."\n".'<input type="radio" name="artId-'.$ARTID.'" value="'.$i.'" id="artId-'.$ARTID.'-'.$x.'">'."\n";
                
            }
            
        }
        
        $output .= '</div>
        </form>';
        
        return $output;
        
    }
    
    public function GetVoteForUserArtId($USERNAME, $ARTID) {
        
        if(is_int($USERNAME)) {
            $userId = $USERNAME;
        } else {
            $userId = $this->GetUserIdByName($USERNAME);
        }
        
        $vote = DatabaseManager::selectBySQL("SELECT ocena FROM votes WHERE id_user = '{$userId}' AND id_artykul = '{$ARTID}'");
        return (int)$vote[0]['ocena'];
        
    }
    
    public function GetAVGVoteArtId($ARTID) {
        
        $vote = DatabaseManager::selectBySQL("SELECT ROUND(AVG(ocena)) AS ocena FROM votes WHERE id_artykul = '{$ARTID}'");
        return (int)$vote[0]['ocena'];
        
    }
    
    protected function GetUserIdByName($USERNAME) {
        
        $userId = $this->GetAllUsersByName($USERNAME);
        return (int)$userId['id'];
        
    }
    
    protected function GetAllUsersByName($USERNAME) {
        
        $userId = DatabaseManager::selectBySQL("SELECT * FROM users WHERE username = '{$USERNAME}'");
        return $userId[0];
        
    }
    
    public function SetVote($VOTE, $USERNAME, $ARTID) {
        
        if(is_int($USERNAME)) {
            $userId = $USERNAME;
        } else {
            $userId = $this->GetUserIdByName($USERNAME);
        }
        
        $ocena = $this->GetVoteForUserArtId($_SESSION['login'], $ARTID);
        
        if(is_int($ocena) && $ocena != 0) {
            
            $result = DatabaseManager::updateTable("votes", array("id_artykul" => $ARTID, "id_user" => $userId, "ocena" => $VOTE), array("id_artykul" => $ARTID, "id_user" => $userId));
            
        } else {
            
            $result = DatabaseManager::insertInto("votes", array("id_artykul" => $ARTID, "id_user" => $userId, "ocena" => $VOTE));
            
        }
        
        return $result;
        
    }        
    
}

?>
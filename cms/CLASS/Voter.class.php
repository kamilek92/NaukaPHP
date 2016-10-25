<?php

require_once(ManagerFolder."DatabaseManager.class.php");

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
        $this->connection_init = DataBase::getStaticConnection();
    }
    
    /**
     * Voter::__construct()
     * 
     * @return null
     */
    public function __construct() {
        $this->MakeDBCall();
    }
    
    /**
     * Voter::GetAllVotesForArtId()
     * 
     * @param string $opt
     * @param mixed $ID
     * @return Array $arr
     */
    public function GetAllVotesForArtId($opt="normal", $ID) {
        
        $query_str = "SELECT vote FROM articles WHERE id = '{$ID}'";
		$wynik = $this->connection_init->query($query_str);
			if (!($wynik)) {
				echo 'Wystapił błąd podczas odczytu danych z bazy!';
			} else {
                    
                while (($db_data = $wynik -> fetch_assoc()) !== null) {
                    
                    switch($opt) {
                
                        case "normal":
                        default:
                            return $db_data["vote"];
                        break;
                        
                        case "extended":
                            
                            $arr = Array();
                            $votes = explode(";", $db_data["vote"]);
                            
                            foreach($votes as $vote) {
                                
                                $split = explode(",", $vote);
                                
                                $name = $this->GetAllUsersById($split[0]);
                                $arr[$name['username']] = $split[1];

                            }
                            
                            return $arr;
                            
                        break;
                        
                    }
						
                }
				
			}
            
            
			
		mysqli_close($this->connection_init);
        
    }
    
    /**
     * Voter::GetAllUsersById()
     * 
     * @param mixed $ID
     * @return Array $db_data
     */
    protected function GetAllUsersById($ID) {
        
        $query_str = "SELECT * FROM users WHERE id = '{$ID}'";
		$wynik = $this->connection_init->query($query_str);
			if (!($wynik)) {
				echo 'Wystapił błąd podczas odczytu danych z bazy!';
			} else {
                    
                while (($db_data = $wynik -> fetch_assoc()) !== null) {
							
                    return $db_data;
						
                }
				
			}
        
    }
    
    /**
     * Voter::GetAllUsersByName()
     * 
     * @param mixed $NAME
     * @return Array $db_data
     */
    protected function GetAllUsersByName($NAME) {
        
        $query_str = "SELECT * FROM users WHERE username = '{$NAME}'";
		$wynik = $this->connection_init->query($query_str);
			if (!($wynik)) {
				echo 'Wystapił błąd podczas odczytu danych z bazy!';
			} else {
                    
                while (($db_data = $wynik -> fetch_assoc()) !== null) {
							
                    return $db_data;
						
                }
				
			}
            
            mysqli_close($this->connection_init);
        
    }
    
    /**
     * Voter::GetOverallStatsByArtId()
     * 
     * @param mixed $ArtId
     * @param integer $RoundPrecision
     * @return float
     */
    public function GetOverallStatsByArtId($ArtId, $RoundPrecision=2) {
        
        $query_str = "SELECT * FROM articles WHERE id = '{$ArtId}'";
		$wynik = $this->connection_init->query($query_str);
			if (!($wynik)) {
				echo 'Wystapił błąd podczas odczytu danych z bazy!';
			} else {
            
                $i=0;
                while (($db_data = $wynik -> fetch_assoc()) !== null) {
                    
                    $votes = explode(";", $db_data["vote"]);
							
                    foreach($votes as $vote) {
                                
                        $split = explode(",", $vote);
                        $arr[$i++] = $split[1];

                    }
						
                }
                
                return round((array_sum($arr)/count($arr)),$RoundPrecision);
				
			}
            
            mysqli_close($this->connection_init);
        
    }
    
    /**
     * Voter::SetVote()
     * 
     * @param mixed $VOTE
     * @param mixed $USER
     * @param mixed $SUBJECT
     * @return boolean
     */
    public function SetVote($VOTE, $USER, $SUBJECT) {
        
        if(is_int($USER)) {
            $id = $USER;
        } else {
            $id = $this->GetAllUsersByName($USER);
            $id = $id['id'];
        }
        
        $getAllVotes = $this->GetAllVotesForArtId("normal", $SUBJECT);
        $Votes = $getAllVotes.";".$id.",".$VOTE;

        $query_str = "UPDATE articles SET vote = '{$Votes}' WHERE id = '{$SUBJECT}'";
		$wynik = $this->connection_init->query($query_str);
			if (!($wynik)) {
                return false;
			} else {   
                return true;	
			}
            
        mysqli_close($this->connection_init);
    }
    
    /**
     * Voter::RemoveVote()
     * 
     * @param mixed $USER
     * @param mixed $SUBJECT
     * @return boolean
     */
    public function RemoveVote($USER, $SUBJECT) {
        
        if(is_int($USER)) {
            $id = $USER;
        } else {
            $id = $this->GetAllUsersByName($USER);
            $id = $id['id'];
        }
        
        $getAllVotes = $this->GetAllVotesForArtId("normal", $SUBJECT);
        $VoteToRemove = substr($getAllVotes, stripos($getAllVotes, $USER.",")-1, 5);
        $Votes = str_replace($VoteToRemove, "", $getAllVotes);

        $query_str = "UPDATE articles SET vote = '{$Votes}' WHERE id = '{$SUBJECT}'";
		$wynik = $this->connection_init->query($query_str);
			if (!($wynik)) {
                return false;
			} else {   
                return true;	
			}
            
        mysqli_close($this->connection_init);
    }
    
}

?>
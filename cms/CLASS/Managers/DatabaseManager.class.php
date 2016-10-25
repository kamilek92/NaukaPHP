<?php

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

class DatabaseManager {
            
    static public function getConnection() {
        
        $conn = @new mysqli(DB_SERVER, DB_USERNAME, DB_PW, DB_DB);
        
        if(mysqli_connect_errno()) {
            $conn_errno = mysqli_connect_errno();
            $conn_error = mysqli_connect_error();
            
            // W przypadku wystąpienia problemów z połączeniem, zapisz informację w pliku LOG i zakończ działanie skryptu
           LogFile::AddLog("Nastapił błąd połączenia numer [ $conn_errno ] z bazą danych:  o treści: [ $conn_error ]", __LINE__, __FILE__);
           exit();
            
        } else {
            
            $conn->query("SET NAMES 'utf8'");
            return $conn;
            
        }
        
    }
    
    static public function selectBySQL($SQL) {
        
        $conn = self::getConnection();
        //$SQL = $conn->real_escape_string($SQL);
        $result = $conn->query($SQL);
        
        if(!$result) {
            
            LogFile::AddLog("Wystąpił błąd połączenia z bazą danych!", __LINE__, __FILE__);
            return false;
            
        } else {
            
            $resultArray = Array();
                
                while(($row = $result->fetch_array(MYSQLI_ASSOC)) !== NULL) {
                
                    $resultArray[] = $row;
                }
            
        }
        
        if(count($resultArray) > 0) {
                return $resultArray;
            } else {
                LogFile::AddLog("Zapytanie bazodanowe zwróciło pusty wynik!", __LINE__, __FILE__);
                return false;
            }
        
        mysqli_close($conn);
        
    }
    
    static public function selectData($TABLE, $COLUMNS = Array("*"), $WHERE = Array(), $LOGIC_OPER = "=", $OPER = "AND") {
        
        $conn = self::getConnection();
        
        $SQL = "SELECT ";
        
        if(count($COLUMNS) == 1) {
            $SQL .= $COLUMNS[0];
        } else {
            foreach($COLUMNS as $column) {
                $SQL .= $column.",";
            }
        }
        
        $SQL = rtrim($SQL, ',');
        
        $SQL .= " FROM {$TABLE}";
        
        if(count($WHERE) > 0) {
            
            $SQL .= " WHERE ";
            
            foreach($WHERE as $key => $val) {
                $SQL .= $key.$LOGIC_OPER."'".$val."' ".$OPER." ";
            }
            
            $SQL = substr($SQL, 0, strlen($SQL)-(strlen($OPER)+2));
            
        }
        
        $result = $conn->query($SQL);
        
        if(!$result) {
            
            LogFile::AddLog("Wystąpił błąd połączenia z bazą danych!", __LINE__, __FILE__);
            return false;
            
        } else {
            
            $resultArray = Array();
                
                while(($row = $result->fetch_array(MYSQLI_ASSOC)) !== NULL) {
                
                    $resultArray[] = $row;
                }
            
        }
        
        if(count($resultArray) > 0) {
                return $resultArray;
            } else {
                LogFile::AddLog("Zapytanie bazodanowe zwróciło pusty wynik!", __LINE__, __FILE__);
                return false;
            }
        
        mysqli_close($conn);
        
    }
    
    static public function updateTable($TABLE, $SET, $WHERE = Array(), $OPER = "AND") {
        
        $conn = self::getConnection();
        
        $SQL = "UPDATE {$TABLE} SET ";
        
        foreach($SET as $key => $val) {
            $SQL .= $key."='".$val."',";
        }
        
        $SQL = rtrim($SQL, ',');
        
        if(count($WHERE) > 0) {
            
            $SQL .= " WHERE ";
            
            foreach($WHERE as $key => $val) {
                $SQL .= $key."='".$val."' ".$OPER." ";
            }
            
            $SQL = substr($SQL, 0, strlen($SQL)-(strlen($OPER)+2));
            
        }
        
        $result = $conn->query($SQL);
        
        if($result) {
                return true;
            } else {
                LogFile::AddLog("Zapytanie bazodanowe UPDATE nie wykonało się poprawnie!", __LINE__, __FILE__);
                return false;
            }
        
        mysqli_close($conn);
        
    }
    
    static public function deleteFrom($TABLE, $WHERE = Array(), $OPER = "AND") {
    
        $conn = self::getConnection();
        
        $SQL = "DELETE FROM {$TABLE}";
        
        if(count($WHERE) > 0) {
            
            $SQL .= " WHERE ";
            
            foreach($WHERE as $key => $val) {
                
                $SQL .= $key."='".$val."' ".$OPER." ";
                
            }
            
            $SQL = substr($SQL, 0, strlen($SQL) - (strlen($OPER)+2));
            
        }
        
        $result = $conn->query($SQL);
        if(!($result)) {
            LogFile::AddLog("Usunięcie elementu bazy danych było nie możliwe do zrealizowania.", __LINE__, __FILE__);
            return false;
        } else {
            return true;
        }
        
        mysqli_close($conn);
        
    }
    
    static public function insertInto($TABLE, $DATA) {
    
        $conn = self::getConnection();
        
        $SQL = "INSERT INTO {$TABLE}";
        $SQL .= " (";
        
        foreach($DATA as $key => $val) {
            $SQL .= $key.",";
        }
        
        $SQL = rtrim($SQL, ",");
        $SQL .= ") ";
        $SQL .= "VALUES";
        $SQL .= " (";
        
        foreach($DATA as $val) {
            $SQL .= "'".$val."',";
        }
        
        $SQL = rtrim($SQL, ',');
        $SQL .= ")";
        
        $result = $conn->query($SQL);
        if(!($result)) {
            LogFile::AddLog("Wstawienie nowego elementu do bazy danych zakończyło się niepowodzeniem.", __LINE__, __FILE__);
            return false;
        } else {
            return true;
        }
        
        mysqli_close($conn);
        
    }
	
}

?>
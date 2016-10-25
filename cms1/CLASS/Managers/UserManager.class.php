<?php

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

class UserManager {
    
    protected $login;
    protected $password;
	protected $mail;
    
    public function LogIn($LOGIN, $PASSWORD) {
        
        $this->login = $LOGIN;
        $this->password = md5($PASSWORD);
        
        if(self::isExist() && count(self::isExist()) > 0) {
            
            self::log_in();
            return $this->login;
            
        } else {
            
            return false;
            
        }
        
    }
    
    protected function isExist() {
        
        $arr = DatabaseManager::selectBySQL("SELECT * FROM users WHERE username = '{$this->login}' AND password = '{$this->password}' LIMIT 1");
        return $arr;
        
    }
    
    protected function log_in() {
        
        $_SESSION['login'] = $this->login;
        $_SESSION['logged'] = true;
        
    }
    
    public function LogOut() {
        
        $_SESSION['login'] = false;
        $_SESSION['logged'] = false;
        
        session_destroy();
        
    }
    
    public function CreateUser($POST) {
        
        if(isset($POST) && is_array($POST)) {
            
            $fullname = $POST['name'].' '.$POST['surname'];
            $birth = $POST['year'].'-'.$POST['month'].'-'.$POST['day'];
            
            $res = DatabaseManager::insertInto("users", array("fullname"=>$fullname, "username"=>addslashes($POST['nick']),
                                               "password"=>md5($POST['pass2']), "mail"=>$POST['mail'], "birthdate"=>$birth));
                                               
            if($res) {
                return true;
            } else {
                return false;
            }
            
        } else {
            
            return false;
            
        }
        
    }
    
    public function LostPassword($LOGIN, $MAIL) {
        
        $this->login = $LOGIN;
        $this->mail = $MAIL;
        
        if(self::isExistByLoginMail() && count(self::isExistByLoginMail()) > 0) {
            
            return true;
            
        } else {
            
            return false;
            
        }
        
    }
    
    protected function isExistByLoginMail() {
        
        $arr = DatabaseManager::selectBySQL("SELECT * FROM users WHERE username = '{$this->login}' AND mail = '{$this->mail}' LIMIT 1");
        return $arr;
        
    }
    
    public function updateUserPasswd($LOGIN, $newPw) {
        
        $pwd = DatabaseManager::updateTable("users", array("password"=>$newPw), array("username"=>$LOGIN));
        return $pwd;
        
    }
    
}

?>
<?php

/**
 * Created by PhpStorm.
 * User: kamilciesielski
 * Date: 19.10.2016
 * Time: 19:13
 */



class DatabaseSQL extends DatabaseManager
{
    static public function SelectUsers($id){
        return parent::selectBySQL("Select * from users where id={$id}");
    }


}

?>


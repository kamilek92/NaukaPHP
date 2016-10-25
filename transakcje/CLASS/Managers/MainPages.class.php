<?php

/**
 * Created by PhpStorm.
 * User: kamilciesielski
 * Date: 20.10.2016
 * Time: 15:41
 */
class MainPages {


    private $active_page;

    /**
     * MainPages constructor.
     * @param $active_page
     */
    public function __construct($active_page)
    {
        $this->active_page = $active_page;


        switch ($this->active_page){

            case 'start':
                require_once LIBSFolder.$this->active_page."lib.php";
                break;
            case 'artykuly':
                require_once LIBSFolder.$this->active_page."lib.php";
                break;
        }
    }
}
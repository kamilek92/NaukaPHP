<?php

/**
 * Created by PhpStorm.
 * User: kamilciesielski
 * Date: 21.10.2016
 * Time: 12:22
 */
class MainLoad
{

    private $active_page;

    public function __construct($ACTIVE_PAGE) {

        $this->active_page = $ACTIVE_PAGE;

        switch($this->active_page) {

            case 'start':
                require_once $this->active_page.".widok.php";
                break;

            case 'rejestracja':
                require_once $this->active_page.".widok.php";
                break;

        }

    }



}
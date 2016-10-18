<?php

/**
 * Created by PhpStorm.
 * User: kamilciesielski
 * Date: 17.10.2016
 * Time: 20:39
 */

interface  iURL {
    public function __construct($url);
    public function getProtocol();
    public  function getHost();
    public  function  getPath();

}
class Url implements iURL
{


    protected  $url;
    private  $protocol;
    private $host;

    /**
     * Url constructor.
     * @param $url
     */

    public function __construct($url)
    {


        parent::__construct($url);

        sefl::prarseUrl();
    }

    private function prarseUrl(){



    }

    public function getProtocol()
    {
        // TODO: Implement getProtocol() method.
    }

    public function getHost()
    {
        // TODO: Implement getHost() method.
    }

    public function getPath()
    {
        // TODO: Implement getPath() method.
    }
}
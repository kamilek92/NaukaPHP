<?php

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

interface iURL {
    
    public function __construct($url);
    public function getProtocol();
    public function getHost();
    public function getPath();
    
}

class Url implements iURL {
    
    protected $url;
    private $protocol;
    private $host;
    private $path;
    
    public function __construct($url) {
        
        $this->url = $url;
        self::parseUrl();
        
    }
    
    private function parseUrl() {
        
        // Funkcja parsująca URL
        $pUrl = parse_url($this->url);
        
        // Ustawienie zmiennych członkowskich
        $this->protocol = (!empty($pUrl['scheme'])) ? $pUrl['scheme'] : '- Brak protokołu -';
        $this->host = (!empty($pUrl['host'])) ? $pUrl['host'] : '- Brak hosta -';
        $this->path = (!empty($pUrl['path'])) ? $pUrl['path'] : '- Brak scieżki -';
        
    }
    
    public function getProtocol() {
        return $this->protocol;
    }
    
    public function getHost() {
        return $this->host;
    }
    
    public function getPath() {
        return $this->path;
    }
    
}

$obj = new Url("https://www.eduweb.pl/test/index.php");
echo $obj->getProtocol()."<br />";
echo $obj->getHost()."<br />";
echo $obj->getPath()."<br />";

?>
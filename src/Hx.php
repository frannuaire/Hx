<?php
namespace kfhx;

class Hx{
    protected $doc;
    
    /**
     * Instanciate a HTML Dom document
     * @param string $url
     */
    public function __construct($url){       
        $this->doc = new \DOMDocument();
        $this->doc->loadHTML(file_get_contents($url));
    }
    
    /**
     * return H1 website
     * @return string
     */
    public function getH1(): string{
        return $this->doc->getElementsByTagName('h1')->item(0)->nodeValue;  
    }
}
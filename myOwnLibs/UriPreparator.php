<?php

namespace Ostepan\Lib;


class UriPreparator 
{
    private $uri;
    private $queryString;

    public function __construct()
    {
        $this->uri = $_SERVER["REQUEST_URI"];
        $this->queryString = $_SERVER["QUERY_STRING"];
    }

    
    public function prepareUri(): array
    {
                   $uri = $this->deleteSlashes($this->uri);
                   $uri = $this->uriToLowercase($uri);
                   $uri = $this->deleteArguments($uri);
           $uriSegments = $this->getUriSegments($uri);
        $uriSegments[0] = $this->isDashes($uriSegments[0]) ? 
                            $this->deleteDashes($uriSegments[0]) : $uriSegments[0];
        return $uriSegments;
        
    }
    
    /**
     * string to lowercase
     *
     * @param  mixed $string
     * @return string
     */
    private function uriToLowercase(string $string): string
    {
        return strtolower($string);
    }
    
    /**
     * delete Slashes at both sides of a string
     *
     * @param  mixed $string
     * @return string
     */
    private function deleteSlashes(string $string): string
    {
        return trim($string, "/");
    }
    
    /**
     * delete Arguments, of course if they exist
     *
     * @param  mixed $string
     * @return string
     */
    private function deleteArguments(string $string): string
    {
        return str_replace("?" . $this->queryString, "", $string); 
    }
        
    /**
     * delete Dashes and first letter after dash transforms in uppercase
     *
     * @param  mixed $string
     * @return string
     */
    private function deleteDashes(string $string): string
    {
        $strWithoutDashes = "";
        $segments = explode("-", $string);
        foreach ($segments as $segment) {
            $strWithoutDashes .= ucfirst($segment);
        }
        return $strWithoutDashes;
    }

        
    /**
     * checks is dashes exsist inside a string
     *
     * @param  mixed $string
     * @return bool
     * * вернет true если тире стоит на 2ой[1] или более позиции
     * * в случае если "-" находится на певом месте, то strpos вернет 0
     * * а при проверке if($some), 0 == false, а т.к на первом месте слеш не может быть
     * * то нас это устраивает
     */
    private function isDashes(string $string): bool
    {
        return strpos($string, "-") ? true : false;
    }
    
    /**
     * returns devided(/) string, one/two/three = [0 => "one", 1 => "two", 2 => "three"]
     *
     * @param  mixed $uri
     * @return array
     */
    private function getUriSegments(string $uri): array
    {
        return explode("/", $uri);
    }

    /**
     * Get the value of $uri
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Get the value of $queryString
     */
    public function getQueryString()
    {
        return $this->queryString;
    }
}
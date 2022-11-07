<?php

namespace App;

class API
{
    private $URL;
    private $CURL;
    private $HEADER;
    private $SSL;

    function __construct($URL) {
        $this->URL    = $URL;
        $this->CURL   = curl_init();
        $this->HEADER = array(
            "content-type: application/json"
        );
        $this->SSL    = false;
    }

    public function read($object){

        curl_setopt_array($this->CURL, [
            CURLOPT_URL            => $object->getURL(),
            CURLOPT_HTTPHEADER     => $this->HEADER,
            CURLOPT_SSL_VERIFYPEER => $this->SSL,
            CURLOPT_RETURNTRANSFER => 1
        ]);

        return curl_exec($this->CURL);
        curl_close($this->CURL);

    }

    function getURL() {
        return $this->URL;
    }

    function setURL($URL) {
        $this->URL = $URL;
    }

}
<?php

namespace App\Http\Controllers;
use App\Http\Helpers\Curl;

class ContactController
{
    public function create()
    {
        $url = "contacts";
        $curl = new Curl;
        $name = "contact";
        $contacts = $curl->curl($url, $name);
        $contacts = json_decode($contacts);
        return [
            "id" => $contacts->_embedded->contacts[0]->id,
            "text" => "Контакты",
        ];
    }
}


<?php

namespace App\Http\Controllers;
use App\Http\Helpers\Curl;

class CompaniesController
{
    public function create()
    {
        $url = "companies";
        $curl = new Curl;
        $name = "companies";
        $companies = $curl->curl($url, $name);
        $companies = json_decode($companies);
        return [
            "id" => $companies->_embedded->companies[0]->id,
            "text" => "Компания",
        ];
    }
}

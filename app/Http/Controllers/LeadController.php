<?php

namespace App\Http\Controllers;
use App\Http\Helpers\Curl;

class LeadController
{
    public function create()
    {
        $url = "leads";
        $curl = new Curl;
        $name = "leads";
        $lead = $curl->curl($url, $name);
        $lead = json_decode($lead);
        return [
            "id" => $lead->_embedded->leads[0]->id,
            "text" => "Сделка",
        ];
    }
}

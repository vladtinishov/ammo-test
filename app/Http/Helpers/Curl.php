<?php

namespace App\Http\Helpers;

use Exception;

class Curl
{
    private $url = "https://". "<base_domain>" . "/api/v4/";
    private $token = "<access_token>";

    public function curl($url, $name)
    {
        $data = ["name" => [$name]];
        header('Content-Type: application/json');
        $ch = \curl_init($this->url . $url);
        $post = json_encode($data);
        $authorization = "Authorization: Bearer " . $this->token;
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization )); // Inject the token into the header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}
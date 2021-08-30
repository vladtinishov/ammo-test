<?php

namespace App\Http\Helpers;

use Exception;

class Curl
{
    private $url = "https://d6757be6f1c9.amocrm.ru/api/v4/";
    private $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImNiMjNlODM0MjhmNzY0MmViMGVlNjc5ZjViOGRiNzFiMTA0OWQ4MzFlYWYxYzcwMmM0YWU0OTI4MmEwZDFlZmQxNmIxOWQxNjVjNTQ5ZDJkIn0.eyJhdWQiOiJmNmZmMWY2OC0wZDQ1LTRlZGMtOGQwZS0xZDI5ZmRjMTRjMDAiLCJqdGkiOiJjYjIzZTgzNDI4Zjc2NDJlYjBlZTY3OWY1YjhkYjcxYjEwNDlkODMxZWFmMWM3MDJjNGFlNDkyODJhMGQxZWZkMTZiMTlkMTY1YzU0OWQyZCIsImlhdCI6MTYzMDMwMjYyNCwibmJmIjoxNjMwMzAyNjI0LCJleHAiOjE2MzAzODkwMjQsInN1YiI6IjczODA4ODMiLCJhY2NvdW50X2lkIjoyOTY2OTM3MSwic2NvcGVzIjpbImNybSJdfQ.jhuBUlhmGUPz_QFygc9zkRjnYnPYBP6Ip8B16lLwwSEg5fcPrwldH0_MhprYaDJbFD_v5CzlvrEL1xJjV6ad4vz_uljFQ0P-ZciOl8a0G6gKhlG_RONJWTTHf1SQ7uUX1p6axSllAVqGwQq-ZiYpG6ypmiv1IjIISM4AcFcG4H2S_En7-bpbCGRcja1Hq5BTbmxYAZoyvgpwfVCX2lwA6gQ0ozouT8k5yYNRsMHjodv56B1V_UjIl7BYX2UnkUe64MfPeuely2b4N7cO71T9ebbbPY5DiSbItLeMLXL7Ur4F75AAxI4J5FleOtYus1e2xiW34y5SNco4WJhGQQayTg";

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
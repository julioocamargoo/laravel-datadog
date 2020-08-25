<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller {

    public function ping()
    {
        $client = new \GuzzleHttp\Client(['base_uri' => 'http://169.254.169.254']);

        $response = $client->request('GET', '/latest/meta-data/local-ipv4');

        return $response->getBody();
    }

}

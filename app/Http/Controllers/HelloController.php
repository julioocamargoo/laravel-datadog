<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HelloController extends Controller {

    public function hello()
    {
        return getenv('DD_AGENT_HOST');
    }

}

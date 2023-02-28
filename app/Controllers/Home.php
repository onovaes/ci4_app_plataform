<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $options = [
            'max-age'  => 10
        ];
        $this->response->setCache($options);
        
        return view('welcome_message');
    }

    public function phpinfo()
    {
        phpinfo();
    }
}

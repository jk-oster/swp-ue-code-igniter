<?php

namespace App\Controllers;

class Site extends BaseController
{
    public function index()
    {
        echo view('view_site', ['data'=>'Hello World Jakob']);
        // return view('welcome_message');
    }
}

<?php

namespace App\Controllers;

class Site extends BaseController
{
    public function index()
    {
        // Check if logged in
        if($this->isLoggedIn()){
            return view('view_success', ['user' => $this->session->get('currentUser'), 'headline' => 'Welcome home']);
        }
        else {
            return view('view_login', ['headline' => 'Home']);
        }
    }

}

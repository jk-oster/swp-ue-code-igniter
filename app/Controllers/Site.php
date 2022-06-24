<?php

namespace App\Controllers;

class Site extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);

        $session = session();

        // Check if logged in
        $currentUser = $session->get('currentUser');
        if(!empty($currentUser)){
            return view('view_success', ['user' => $currentUser, 'headline' => 'Home']);
        }
        else {
            return view('view_login', ['headline' => 'Home']);
        }
    }

}

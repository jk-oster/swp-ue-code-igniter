<?php


namespace App\Controllers;

class Logout extends BaseController
{
    public function getIndex()
    {
        // Log out by deleting user session data
        $this->session->remove('currentUser');
        return view('view_logout');
    }
}

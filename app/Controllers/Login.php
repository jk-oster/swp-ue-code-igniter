<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);

        $validation = [
            'username' => 'required|min_length[3]',
            'password' => 'required|min_length[10]',
        ];

        if (! $this->validate($validation) || ! $this->loginDataOkay()) {
            return view('view_login', [
                'validation' => $this->validator,
            ]);
        }

        return view('view_success');
    }

    public function loginDataOkay():bool
    {
        return true;
    }

    public function postIndex()
    {
        return $this->index();
    }

    public function getIndex()
    {
        return $this->index();
    }
}
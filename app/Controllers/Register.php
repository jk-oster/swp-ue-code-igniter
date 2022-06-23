<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);

        $validation = [
            'username' => 'required|min_length[3]',
            'password' => 'required|min_length[10]',
            'passconf' => 'required|matches[password]',
            'email' => 'required|valid_email',
        ];

        if (! $this->validate($validation)) {
            return view('view_register', [
                'validation' => $this->validator,
            ]);
        }

        return view('view_success');
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
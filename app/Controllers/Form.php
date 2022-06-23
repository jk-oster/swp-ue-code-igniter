<?php

namespace App\Controllers;

class Form extends BaseController
{
    public function postIndex()
    {
        helper(['form', 'url']);

        $validation = [
            'username' => 'required|min_length[3]',
            'password' => 'required|min_length[10]',
            'passconf' => 'required|matches[password]',
            'email' => 'required|valid_email',
        ];

        if (! $this->validate($validation)) {
            return view('view_form', [
                'validation' => $this->validator,
            ]);
        }

        return view('view_success');
    }

    public function getIndex()
    {
        helper(['form', 'url']);

        $validation = [
            'username' => 'required|min_length[3]',
            'password' => 'required|min_length[10]',
            'passconf' => 'required|matches[password]',
            'email' => 'required|valid_email',
        ];

        if (! $this->validate($validation)) {
            return view('view_form', [
                'validation' => $this->validator,
            ]);
        }

        return view('view_success');
    }
}
<?php


namespace App\Controllers;

class Login extends BaseController
{
    public function getIndex()
    {
        helper(['form', 'url']);

        return view('view_login');
    }

    public function postIndex()
    {
        helper(['form', 'url']);

        $model = model(User::class);
        $username = $this->request->getPost("username");
        $password = $this->request->getPost("password");
        $user = $model->where('username', $username)->first();
        $loginOkay = $user && password_verify($password, $user['pw']);

        $validation = [
            'username' => 'required|min_length[3]',
            'password' => 'required|min_length[8]',
        ];

        if (!$this->validate($validation) || !$loginOkay) {
            return view('view_login', [
                'validation' => $this->validator,
                'loginOkay' => $loginOkay,
                'username' => $username ?? '',
            ]);
        }

        $session = session();
        $session->set([
            'currentUser' => $user
        ]);
        return redirect()->to('/');
    }
}

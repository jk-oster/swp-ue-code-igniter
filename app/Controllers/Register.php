<?php


namespace App\Controllers;

class Register extends BaseController
{
    public function getIndex()
    {
        helper(['form', 'url']);
        return view('view_register');
    }

    public function postIndex()
    {
        helper(['form', 'url']);

        $model = model(User::class);
        $username = $this->request->getPost("username");
        $user = $model->where('username', $username)->first();
        $nameAvailable = empty($user);

        $validation = [
            'firstname' => 'required|min_length[3]',
            'lastname' => 'required|min_length[3]',
            'username' => 'required|min_length[3]',
            'password' => 'required|min_length[8]',
            'passconf' => 'required|matches[password]',
            'email' => 'required|valid_email',
        ];

        if (!$this->validate($validation) || !$nameAvailable) {
            return view('view_register', [
                'validation' => $this->validator,
                'nameAvailable' => $nameAvailable,
                'username' => $username ?? '',
                'lastname' => $this->request->getPost("lastname") ?? '',
                'firstname' => $this->request->getPost("firstname") ?? '',
                'email' => $this->request->getPost("email") ?? '',
            ]);
        }

        $userData = [
            'username' => $username,
            'firstname' => $this->request->getPost("firstname") ?? '',
            'lastname' => $this->request->getVar("lastname") ?? '',
            'pw' => password_hash($this->request->getPost("password"), PASSWORD_DEFAULT) ?? '',
            'email' => $this->request->getPost("email") ?? '',
            'role' => 1,
        ];
        $model->insert($userData);
        $user = $model->where('username', $username)->first();

        $session = session();
        $session->set([
            'currentUser' => $user
        ]);
        return redirect()->to('/');
    }
}

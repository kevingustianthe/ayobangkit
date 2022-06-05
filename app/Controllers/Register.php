<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        return view('/register');
    }

    public function process()
    {
        $users = new UserModel();
        $users->insert([
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT)
        ]);
        return redirect()->to('/login');
    }
}

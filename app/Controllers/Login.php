<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        if (session()->get('logged_in')) {
            return redirect()->to(base_url('home'));
        }

        return view('/login');
    }

    public function process()
    {
        $users = new UserModel();

        $email = $this->request->getVar('email');
        // $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where(['email' => $email])->first();

        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'user_id' => $dataUser->user_id,
                    'username' => $dataUser->username,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('home'));
            } else {
                session()->setFlashdata('pesan', 'Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('pesan', 'Email tidak ditemukan');
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}

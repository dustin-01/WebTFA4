<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        if (session()->get('user_id')) {
            return redirect()->to('/users');
        }

        return view('auth/login', ['title' => 'login', 'error' => '']);
    }

    public function attempt()
    {
        $username = trim((string) $this->request->getPost('username'));
        $password = (string) $this->request->getPost('password');
        $user = (new UserModel())->where('username', $username)->first();

        if (! $user || ! password_verify($password, $user['password'])) {
            return view('auth/login', ['title' => 'login', 'error' => 'wrong username or password']);
        }

        session()->regenerate(true);
        session()->set(['user_id' => $user['id'], 'username' => $user['username']]);

        return redirect()->to('/users');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}

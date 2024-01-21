<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\LoginModel;



class LoginController extends Controller
{

    public function show()
    {
        return view('login.php');
    }

    public function dashboard()
    {
        return view('dashboard.php');
    }

    public function user_form()
    {
        return view('add_business.php');
    }




    public function loginSave()
    {
        $request = \Config\Services::request();
        $session = session();

        $email = trim($request->getVar('email'));
        $password = trim($request->getVar('password'));
        echo "Email: $email<br>";
        echo "Password: $password<br>";
        // die();

        $loginModel = new LoginModel();
        $user = $loginModel->getUserByEmail($email);

        if ($user) {
            if ($password === $user['Password']) {
                $userData = [
                    'fName' => $user['fName'],
                    'lName' => $user['lName'],
                    'email' => $user['email'],
                ];

                $session->set($userData);

                return redirect()->to(base_url("/dashboard"));
            } else {
                $session->setFlashdata('error', 'Invalid email or password.');
            }
        } else {
            $session->setFlashdata('error', 'User with this email does not exist.');
        }
        return redirect()->to(base_url("/login"));
    }


    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to(base_url("/login"));
    }

    

}

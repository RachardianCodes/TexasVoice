<?php

namespace App\Controllers;

use App\Models\PenggunaModel;
use CodeIgniter\I18n\Time;
use Error;
use PhpParser\Node\Expr\BinaryOp\Equal;

class Login extends BaseController
{
    function __construct()
    {
        helper("form");

        $this->pengguna = new PenggunaModel();
    }

    public function index()
    {
        $data = [
            'tittle' => "Texas Voice | Login"

        ];

        echo view('v_login', $data);
    }

    public function login()
    {
        // if ($this->request->getMethod() == 'post') {
        //     # code...
        //     $rules = [
        //         'username' => 'required|min_length[5]|max_length[50]',
        //         'password' => 'required|min_length[5]|max_length[250]'
        //     ];
        //     $errors = [
        //         'username' => [
        //             'required' => "Username Anda Salah!",
        //         ],
        //         'password' => [
        //             'required' => "Password Anda Salah!",
        //         ],
        //     ];

        //     if (!$this->validate($rules, $errors)) {
        //         # code...
        //         return view(
        //             'v_login',
        //             ["validation" => $this->validator]
        //         );
        //     } else {
        //         # code...
        //         $username = $this->request->getVar('username');

        //         $user = $this->pengguna->where('nama', $username)->first();

        //         $this->setUserSession($user);

        //         if ($user['role'] == "admin") {
        //             return redirect()->to(base_url('admin/dashboard'));
        //         } elseif ($user['role'] == "voters") {
        //             return redirect()->to(base_url('voters/vote'));
        //         }
        //     }
        // }

        // return view('v_login');
        $session = session();
        date_default_timezone_set('Asia/Jakarta');
        $currentDateTime = date('Y-m-d H:i:s');
        $this->model = new PenggunaModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $this->model->where('username', $username)->first();
        if ($data) {
            $status = $data['status'];
            $max = $data['max_time'];
            $pass = $data['password'];
            if ($password == $pass) {
                if ($status == "Belum Vote") {
                    # code...
                    if ($currentDateTime < $max) {
                        # code...
                        $ses_data = [
                            'id_akun' => $data['id_akun'],
                            'nis' => $data['nis'],
                            'nama' => $data['nama'],
                            'tingkat' => $data['tingkat'],
                            'kelas' => $data['kelas'],
                            'username' => $data['username'],
                            'password' => $data['password'],
                            'status' => $data['status'],
                            'max_time' => $data['max_time'],
                            'role' => $data['role'],
                            'isLoggedIn' => true,
                        ];
                        $session->set($ses_data);
                        // return view('admin/v_dashboard');
                        if ($data['role'] == "admin") {
                            return redirect()->to(base_url('admin/dashboard'));
                        } elseif ($data['role'] == "voter") {
                            return redirect()->to(base_url('voters/vote'));
                        }
                    } elseif ($currentDateTime > $max) {
                        # code...
                        echo '<script>
                    alert("Waktu Habis!!!");
                    setTimeout(function() {
                        window.location.href = "' . base_url('/') . '"; // Redirect setelah penundaan
                    }, 1);
                    </script>';
                    }
                } elseif ($status == "Sudah Vote") {
                    # code...
                    echo '<script>
                    alert("Anda Sudah Melakukan Vote!!!");
                    setTimeout(function() {
                        window.location.href = "' . base_url('/') . '"; // Redirect setelah penundaan
                    }, 1);
                    </script>';
                }
            } else {
                // return view('voters/v_vote');
                echo '<script>
            alert("Username atau Password!!!");
            setTimeout(function() {
                window.location.href = "' . base_url('/') . '"; // Redirect setelah penundaan
            }, 1);
            </script>';
            }
        } else {
            echo '<script>
            alert("Username atau Password!!!");
            setTimeout(function() {
                window.location.href = "' . base_url('/') . '"; // Redirect setelah penundaan
            }, 1);
            </script>';
        }
    }

    // private function setUserSession($user)
    // {
    //     $data = [
    //         'id_akun' => $user['id_akun'],
    //         'nis' => $user['nis'],
    //         'nama' => $user['nama'],
    //         'tingkat' => $user['tingkat'],
    //         'kelas' => $user['kelas'],
    //         'username' => $user['username'],
    //         'password' => $user['password'],
    //         'status' => $user['status'],
    //         'max_time' => $user['max_time'],
    //         'role' => $user['role'],
    //         'isLoggedIn' => true,
    //     ];

    //     session()->set($data);
    //     return true;
    // }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}

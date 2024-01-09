<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    function __construct()
    {
        // $this->pengguna = new PenggunaModel();
        // $this->kandidat = new KandidatModel();
        if (session()->get('role') != "admin") {
            echo '<script>
            alert("Access Denied!");
            </script>';
            exit;
        }
    }

    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $currentDateTime = date('Y-m-d H:i:s');
        if ($currentDateTime > session()->get('max_time')) {
            # code...
            echo view('v_habis');
        } else {
            $data = [
                'title' => "Admin Dashboard | TexasVoice",
                'header' => "Dashboard",
            ];

            $data['page'] = view('admin/v_dashboard', $data);

            echo view("admin/v_homepage", $data);
        }
    }
}

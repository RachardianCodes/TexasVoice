<?php

namespace App\Controllers\voters;

use App\Controllers\BaseController;
use App\Models\KandidatModel;
use App\Models\PenggunaModel;
use App\Models\VoteModel;

class Vote extends BaseController
{
    function __construct()
    {
        $this->kandidat = new KandidatModel();
        $this->Vote = new VoteModel();
        $this->PenggunaModel = new PenggunaModel();
        if (session()->get('role') != "voter") {
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
            $data = ['title' => "Ini Vote"];

            $data['kandidat'] = $this->kandidat->getKandidat()->getResult();

            echo view("voters/v_vote", $data);
        }
    }

    // public function save($kandidat_id)
    // {
    //     $id_user = session()->get('id_akun');
    //     $data = array(
    //         'id_user' => $id_user,
    //         'id_kandidat' => $kandidat_id,
    //         'value' => 1,
    //     );
    //     $this->Vote->saveVote($data);
    //     session()->setFlashdata('title', 'Great!');
    //     return redirect()->back()
    //         ->with('text', 'New Data Vote was Saved!');
    // }

    public function save($id_kandidat)
    {
        // Mendapatkan user ID yang sedang masuk (sesuaikan dengan metode otentikasi Anda)
        $id_akun = session()->get('id_akun'); // Gantilah dengan cara yang sesuai

        $this->Vote->saveVote($id_kandidat, $id_akun);
        echo '<script>
        alert("Vote Success!!!");
        setTimeout(function() {
            window.location.href = "' . base_url('/') . '"; // Redirect setelah penundaan
        }, 20); // Tunda selama 2 detik (misalnya)
        </script>';

        $nis = session()->get('nis');

        $data = array(
            'status' => "Sudah Vote"
        );

        $this->PenggunaModel->updatePengguna($data, $nis);
        // session()->destroy();
        // return redirect()->to(base_url('/'));
        // session()->setFlashdata('title', 'Great!');
        // return redirect()->back()
        //     ->with('text', 'New Data Pengguna was Saved!');

        // Redirect atau tampilkan pesan sukses
        session()->destroy();
    }
}

<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;

class Pengguna extends BaseController
{
    function __construct()
    {
        $this->pengguna = new PenggunaModel();
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
                'title' => "Admin Pengguna | TexasVoice",
                'header' => "Data Pengguna",
                'cardtitle' => "Tabel Pengguna",
                'inputtitle' => "Form Input Data Pengguna",
                'updatetitle' => "Form Update Data Pengguna",
                'deletetitle' => "Delete Data Pengguna",
            ];

            $data['pengguna'] = $this->pengguna->getAkun()->getResult();

            $data['penggunacount'] = $this->pengguna->countAll();

            $data['page'] = view('admin/v_pengguna', $data);

            echo view("admin/v_homepage", $data);
        }
    }
    public function save()
    {
        $tanggal = $this->request->getPost('tanggal');
        $time = $this->request->getPost('time');
        $data = array(
            'nis' => $this->request->getPost('nis'),
            'nama' => $this->request->getPost('nama'),
            'tingkat' => $this->request->getPost('tingkat'),
            'kelas' => $this->request->getPost('kelas'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            //'password' => password_hash($this->request->getVar('username'), PASSWORD_DEFAULT),
            'status' => 'Belum Vote',
            'max_time' => "{$tanggal} {$time}",
            'role' => $this->request->getPost('role'),
        );
        $this->pengguna->savePengguna($data);
        session()->setFlashdata('title', 'Great!');
        return redirect()->back()
            ->with('text', 'New Data Pengguna was Saved!');
    }
    public function update()
    {
        $nis = $this->request->getPost('nis');
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'tingkat' => $this->request->getPost('tingkat'),
            'kelas' => $this->request->getPost('kelas'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            //'password' => password_hash($this->request->getVar('username'), PASSWORD_DEFAULT),
            'status' => 'Belum Vote',
            // 'max_time' => "{$tanggal} {$time}",
            'max_time' => $this->request->getPost('max_time'),
            'role' => $this->request->getPost('role'),
        );
        $this->pengguna->updatePengguna($data, $nis);
        session()->setFlashdata('title', 'Great!');
        return redirect()->back()
            ->with('text', 'New Data Pengguna was Update!');
    }
    public function delete()
    {
        $nis = $this->request->getPost('nis');
        $this->pengguna->deletePengguna($nis);
        session()->setFlashdata('title', 'Great!');
        return redirect()->back()
            ->with('text', 'New Data Pengguna was Deleted!');
    }
}

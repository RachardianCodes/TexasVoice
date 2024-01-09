<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\KandidatModel;

class Kandidat extends BaseController
{
    function __construct()
    {
        $this->kandidat = new KandidatModel();
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
                'title' => "Admin Kandidat | TexasVoice",
                'header' => "Data Kandidat",
                'cardtitle' => "Tabel Kandidat",
                'inputtitle' => "Form Input Data Kandidat",
                'updatetitle' => "Form Update Data Kandidat",
                'deletetitle' => "Delete Data Kandidat",
            ];

            $data['kandidat'] = $this->kandidat->getKandidat()->getResult();

            $data['kandidatcount'] = $this->kandidat->countAll();

            $data['page'] = view('admin/v_kandidat', $data);

            echo view("admin/v_homepage", $data);
        }
    }

    //input foto

    public function save()
    {
        $data = [
            'title' => "Admin Kandidat | TexasVoice",
            'header' => "Data Kandidat",
            'cardtitle' => "Tabel Kandidat",
            'inputtitle' => "Form Input Data Kandidat",
            'updatetitle' => "Form Update Data Kandidat",
            'deletetitle' => "Delete Data Kandidat",
        ];

        $fileGambar = $this->request->getFile('upload_file');

        $nmaa_sampul = $fileGambar->getRandomName();
        $fileGambar->move('img/', $nmaa_sampul);

        $data = array(
            'nis' => $this->request->getPost('nis'),
            'nama' => $this->request->getPost('nama_kandidat'),
            'visi' => $this->request->getPost('visi'),
            'misi' => $this->request->getPost('misi'),
            'foto' => $nmaa_sampul,
        );
        $this->kandidat->saveKandidat($data);
        session()->setFlashdata('title', 'Great!');
        return redirect()->back()
            ->with('text', 'New Data Pengguna was Saved!');
    }

    public function delete()
    {
        $foto = $this->request->getPost('foto');
        $id = $this->request->getPost('id_kandidat');

        unlink(FCPATH . 'img/' . $foto);

        $this->kandidat->deleteKandidat($id);
        session()->setFlashdata('title', 'Great!');
        return redirect()->back()
            ->with('text', 'New Data Kandidat was Deleted!');
    }

    public function update()
    {
        $fileGambar = $this->request->getFile('upload_file_update');
        if ($fileGambar == "") {
            # code...
            $id_kandidat = $this->request->getPost('id_kandidat');
            $data = array(
                'nis' => $this->request->getPost('nis'),
                'nama' => $this->request->getPost('nama_kandidat'),
                'visi' => $this->request->getPost('visi'),
                'misi' => $this->request->getPost('misi'),
                // 'foto' => $nmaa_sampul
            );
            $this->kandidat->updateKandidat($data, $id_kandidat);
            session()->setFlashdata('title', 'Great!');
            return redirect()->back()
                ->with('text', 'New Data Pengguna was Update!');
        } else {
            $foto = $this->request->getPost('foto');
            unlink(FCPATH . 'img/' . $foto);

            $nmaa_sampul = $fileGambar->getRandomName();
            $fileGambar->move('img/', $nmaa_sampul);

            $id_kandidat = $this->request->getPost('id_kandidat');
            $data = array(
                'nis' => $this->request->getPost('nis'),
                'nama' => $this->request->getPost('nama_kandidat'),
                'visi' => $this->request->getPost('visi'),
                'misi' => $this->request->getPost('misi'),
                'foto' => $nmaa_sampul
            );
            $this->kandidat->updateKandidat($data, $id_kandidat);
            session()->setFlashdata('title', 'Great!');
            return redirect()->back()
                ->with('text', 'New Data Pengguna was Update!');
        }
    }
}

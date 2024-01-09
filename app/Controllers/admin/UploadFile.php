<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class UploadFile extends BaseController
{
    function __construct()
    {
        // parent::__construct();
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
            // $data = [
            //     'title' => "Admin Upload File | TexasVoice",
            //     'header' => "Upload Data Pengguna",
            //     'cardtitle' => "Upload File Data User",
            //     'inputtitle' => "Form Input Data Kandidat",
            //     'updatetitle' => "Form Update Data Kandidat",
            //     'deletetitle' => "Delete Data Kandidat",
            // ];

            // $data['page'] = view('admin/v_uploadfile', $data);

            // echo view("admin/v_homepage", $data);

            // view tidak ada fitur
            $data = [
                'title' => "Admin Upload File | TexasVoice",
                'header' => "Upload Data Siswa",
                'cardtitle' => "Upload Data Siswa",

            ];

            $data['page'] = view('admin/v_uploadfile', $data);

            echo view("admin/v_homepage", $data);
        }
    }

    public function upload()
    {
        $file = $this->request->getFile('xlsx_file');
        $extension = $file->getClientExtension();

        if ($extension == 'xlsx') {
            // code...
            $reader = new Xlsx();

            $spreadsheet = $reader->load($file);
            $contacts = $spreadsheet->getActiveSheet()->toArray();
            foreach ($contacts as $key => $value) {
                // code...
                if ($key == 0) {
                    // code...
                    continue;
                }
                $data = [
                    'nis' => $value[0],
                    'nama' => $value[1],
                    'kelas' => $value[3],
                    'tingkat' => $value[2],
                    'username' => $value[4],
                    'password' => $value[5],
                    'status' => $value[6],
                    'max_time' => $value[7],
                    'role' => $value[8],
                    'id_akun' => 0,
                ];
                $this->pengguna->savePengguna($data);

               
            }
                
                return redirect()->to(base_url('admin/uploadfile'));
                echo '<script>
            alert("Data Berhasil Di Upload!");
            </script>';

        }else{
            echo '<script>
            alert("Format File Tidak Sesuai!");
            </script>';
        }
    }
}

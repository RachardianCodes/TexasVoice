<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\VoteModel;
use App\Models\PenggunaModel;

class HasilVote extends BaseController
{
    function __construct()
    {
        $this->VoteModel = new VoteModel();
        $this->PenggunaModel = new PenggunaModel();
    }

    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $currentDateTime = date('Y-m-d H:i:s');
        if ($currentDateTime > session()->get('max_time')) {
            # code...
            echo view('v_habis');
        } else {
            $model = new VoteModel();
            
            $data1['hasil'] = $this->VoteModel->getVoteResults();
            $data1['belumvote'] = $this->PenggunaModel->getBelumVote()->getResult();
            // $data1['penggunacount'] = $this->PenggunaModel->countAll();
            $data = [
                'title' => "Admin Hasil Vote | TexasVoice",
                'header' => "Hasil Vote",
                'cardtitle' => "Statistik Hasil Vote",
            
            ];
            

            $data['page'] = view('admin/v_hasilvote', $data1, $data);

            echo view("admin/v_homepage", $data);
        }
    }
}

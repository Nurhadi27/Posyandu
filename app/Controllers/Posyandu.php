<?php

namespace App\Controllers;

use App\Models\PosyanduModel;
use App\Models\PRiwayatModel;
use App\Models\RiwayatModel;

class Posyandu extends BaseController
{
    protected $PosyanduModel;
    protected $RiwayatModel;
    public function __construct()
    {
        $this->PosyanduModel = new PosyanduModel();
        $this->RiwayatModel = new RiwayatModel();
    }

    public function index()
    {
        return view('html/index');
    }

    public function button()
    {
        $data = [
            'pasien' => $this->PosyanduModel->getPasien()
        ];

        return view('html/isi', $data);
    }

    public function detail($call)
    {
        $data = [
            'pasien' => $this->PosyanduModel->getPasien($call)
        ];

        if (empty($data['pasien'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul komik ' . $call . ' tidak ditemukan');
        }

        return view('html/detail', $data);
    }

    public function cek($id_pasien)
    {
        $data = [
            'pasien' => $this->RiwayatModel->getPasieni($id_pasien)
        ];

        if (empty($data['pasien'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul kpas ' . $id_pasien . ' tidak ditemukan');
        }

        return view('html/cek', $data);
    }
}

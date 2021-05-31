<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SiswaModel;

class SiswaController extends Controller
{
    public function __construct()
    {
    	$this->SiswaModel = new SiswaModel();
    }

    public function index()
    {
    	$semuaSiswa = $this->SiswaModel->tampilkanSemuaData();
    	return view('siswa.index', ['semuaSiswa' => $semuaSiswa]);
    }

    public function detail($id)
    {
        $detailSiswa = $this->SiswaModel->detailSiswa($id);
        return view('siswa.detail', ['detailSiswa' => $detailSiswa]);
    }
}

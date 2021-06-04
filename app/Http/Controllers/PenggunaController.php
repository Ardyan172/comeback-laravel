<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PenggunaModel;

class PenggunaController extends Controller
{
    public function __construct()
    {
        $this->PenggunaModel = new PenggunaModel;
    }

    public function index()
    {
        $semuaPengguna = $this->PenggunaModel->allData();
        return view('pengguna.index', ['semuaPengguna' => $semuaPengguna]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GuruModel;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->GuruModel = new GuruModel;
        // instansiasi class GuruModel
    }

    public function index()
    {
        $semuaGuru = $this->GuruModel->allData();
        return view('guru.index', ['semuaGuru' => $semuaGuru]);
    }
}

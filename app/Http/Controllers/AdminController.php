<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AdminModel;

class AdminController extends Controller
{
	public function __construct()
	{
		$this->AdminModel = new AdminModel();
	}

    public function index()
    {
    	$admin = $this->AdminModel->semuaData();
    	return view('admin.index', ['semuaAdmin' => $admin]);
    }

    public function halamanTambah()
    {
    	return view("admin.halamanTambah");
    }

    public function tambahAdmin()
    {
        // validasi ya bos ya
        $validated = Request()->validate([
            'nama' => ['required', 'unique:admin', 'min:4', 'max:15'],
            'jabatan' => ['required', 'min:4', 'max:15'],
            'fotoAdmin' => ['required'],
        ], 
        [
            'nama.required' => 'Masukkan nama terlebih dahulu',
            'jabatan.required' => 'Masukkan jabatan terlebih dahulu',
            'fotoAdmin.required' => 'Masukkan foto admin terlebih dahulu',
        ]);

    	$namaAdmin = Request()->nama;
    	$fotoLama = Request()->fotoAdmin;
    	$namaFotoBaru = $namaAdmin . '.' . $fotoLama->extension();
    	$fotoLama->move(public_path('foto_admin'), $namaFotoBaru);

    	$data = [
    		'nama' => Request()->nama,
    		'jabatan' => Request()->jabatan,
    		'foto' => $namaFotoBaru,
            // nama index harus sama dengan nama kolom di database
    	];

    	$this->AdminModel->tambahAdmin($data);
    	return redirect()->route('admin');
    }

    public function hapusAdmin($id)
    {
        $admin = $this->AdminModel->halamanDetail($id);
        if ($admin->foto <> '')
        {
            // jika ada foto maka
            $this->AdminModel->hapusAdmin($id);
            unlink(public_path('foto_admin/' . $admin->foto));
            // hapus foto
            return redirect()->route('admin');
        }
    }

    public function halamanDetail($id)
    {
        $admin = $this->AdminModel->halamanDetail($id);
        return view('admin.halamanDetail', ['detailAdmin' => $admin]);
    }
}

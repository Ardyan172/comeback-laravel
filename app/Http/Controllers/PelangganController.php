<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PelangganModel;

class PelangganController extends Controller
{
	public function __construct() 
	{
		$this->PelangganModel = new PelangganModel;
	}

    public function semuaPelanggan()
    {
    	$semuaData = $this->PelangganModel->semuaData();
    	return view('pelanggan', ['semuaData' => $semuaData]);
    }

    public function tambahPelanggan()
    {
        Request()->validate([
            'nama' => 'required|min:3',
            'barang' => 'required|min:2',
            'harga' => 'required|min:4',
        ]);

        $data = [
            'nama' => Request()->nama,
            'barang' => Request()->barang,
            'harga' => Request()->harga
        ];
        $pelangganBaru = $this->PelangganModel->tambahPelanggan($data);
        return redirect()->route('pelanggan');
    }

    public function hapusPelanggan($id)
    {
        $this->PelangganModel->hapusPelanggan($id);
        return redirect()->route('pelanggan');
    }

    public function halamanUbah($id)
    {
        $data = [
            'detailPelanggan' => $this->PelangganModel->halamanUbah($id)
        ];
        return view('halamanUbahPelanggan', $data);
    }

    public function ubahPelanggan($id)
    {
        Request()->validate([
            'nama' => ['required', 'min:3', 'unique:pelanggan', 'max:15'],
            'barang' => ['required', 'min:2', 'max:15'],
            'harga' => ['required', 'min:4', 'max:15'],
        ], [
            'nama.required' => 'Nama wajib diisi',
            'nama.min' => 'Minimal nama adalah 3 huruf',
            'nama.unique' => 'Nama ini sudah dipakai',
            'nama.max' => 'Maksimal nama adalah 15 huruf',
            'barang.required' => 'Barang wajib diisi',
            'barang.min' => 'Minimal barang adalah 2 huruf',
            'barang.max' => 'Maksimal barang adalah 15 huruf',
            'harga.required' => 'Harga wajib diisi',
            'harga.min' => 'Minimal harga adalah 4 angka',
            'harga.max' => 'Maksimal harga adalah 15 angka',
        ]);

        $this->PelangganModel->ubahPelanggan($id);
        return redirect()->route('pelanggan');
    }
}

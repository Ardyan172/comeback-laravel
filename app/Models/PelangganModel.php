<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PelangganModel extends Model
{
    public function semuaData()
    {
    	return DB::table('pelanggan')->get();
    }

    public function tambahPelanggan($data)
    {
    	return DB::table('pelanggan')->insert($data);
    }

    public function hapusPelanggan($id)
    {
    	return DB::table('pelanggan')->where('id', '=', $id)->delete();
    }

    public function halamanUbah($id)
    {
        return DB::table('pelanggan')->find($id);
    }

    public function ubahPelanggan($id)
    {
        return DB::table('pelanggan')->where('id', $id)
              ->update([
                'nama' => Request()->nama,
                'barang' => Request()->barang,
                'harga' => Request()->harga
            ]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SiswaModel extends Model
{
    public function tampilkanSemuaData()
    {
    	return DB::table('siswa')->get();
  
    }

    public function detailSiswa($id)
    {
        return DB::table('siswa')->find($id);
    }
}

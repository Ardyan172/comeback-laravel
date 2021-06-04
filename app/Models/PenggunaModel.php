<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PenggunaModel extends Model
{
    public function allData()
    {
        return DB::table('pengguna')
            ->leftJoin('kota', 'pengguna.id_kota', '=', 'kota.id_kota')
            ->get();
    }
}

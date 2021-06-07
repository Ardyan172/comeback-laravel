<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GuruModel extends Model
{
    public function allData()
    {
        return DB::table('guru')
            ->leftJoin('kelasguru', 'guru.id_kelas', '=', 'kelasguru.id_kelas')
            ->leftJoin('mapelguru', 'guru.id_mapel', '=', 'mapelguru.id_mapel')
            ->get();
    }
}

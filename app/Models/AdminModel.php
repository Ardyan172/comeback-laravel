<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
	public function semuaData() 
	{
		return DB::table('admin')->get();
	}

	public function tambahAdmin($data)
	{
		return DB::table('admin')->insert($data);
	}

	public function hapusAdmin($id)
	{
		return DB::table('admin')->where('id', '=', $id)->delete();
	}

	public function halamanDetail($id)
	{
		$detail = DB::table('admin')->find($id);
		return $detail;
	}
}

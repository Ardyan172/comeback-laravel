<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DashboardModel extends Model
{
	public function semuaData()
	{
		return DB::table('dashboard')->get();
	}
}

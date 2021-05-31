<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DashboardModel;

class DashboardController extends Controller
{
	public function __construct()
	{
		$this->DashboardModel = new DashboardModel();
	}

    public function index()
    {
    	$dashboard = $this->DashboardModel->semuaData();
    	return view('dashboard', ['dashboard' => $dashboard]);
    }
}

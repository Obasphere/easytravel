<?php

namespace Easytravel\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Easytravel\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }
}

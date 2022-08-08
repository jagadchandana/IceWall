<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ParentController;
use Illuminate\Http\Request;

class DashboardController extends ParentController
{
    public function index(){
        return view('pages.dashbord.dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view("admin.home.home");
    }

    
}

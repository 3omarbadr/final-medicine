<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $admins = Admin::all();
        return view('dashboard.admins.index', compact('admins'));
    }
}

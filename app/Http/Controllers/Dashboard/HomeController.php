<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\News;
use App\Models\User;
use App\Models\Admin;
use App\Models\Illness;
use Illuminate\Http\Request;
use App\Models\MedicineService;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $usersCount = User::count();
        $newsCount = News::count();
        $illnessesCount = Illness::count();
        $medicinesCount = MedicineService::count();
        return view('dashboard.home.index', compact('usersCount', 'newsCount', 'illnessesCount', 'medicinesCount'));
    }
}

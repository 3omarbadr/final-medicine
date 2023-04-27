<?php

namespace App\Http\Controllers;

use App\Models\MedicineService;
use Illuminate\Http\Request;

class MedicineServiceController extends Controller
{
    public function index()
    {
        $medicines = MedicineService::all();

        return view('web.medicine', compact('medicines'));
    }
}

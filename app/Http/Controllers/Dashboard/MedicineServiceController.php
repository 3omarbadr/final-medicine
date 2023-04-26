<?php

namespace App\Http\Controllers\Dashboard;


use App\Models\Illness;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Services\MedicineServiceService;
use App\Http\Requests\Dashboard\MedicineServiceRequest;

class MedicineServiceController extends Controller
{
    public function __construct(protected MedicineServiceService $medicineService)
    {
    }

    public function index()
    {
        $medicineServices = $this->medicineService->getAllMedicineServices();
        return view('dashboard.medicineServices.index', compact('medicineServices'));
    }

    public function create()
    {
        $illnesses = Illness::all();
        return view('dashboard.medicineServices.create', compact('illnesses'));
    }

    public function show($id)
    {
        $medicineService = $this->medicineService->getMedicineServiceById($id);
        return view('dashboard.medicineServices.show', compact('medicineService'));
    }

    public function store(MedicineServiceRequest $request)
    {
        $attributes = $request->validated();

        if ($request->img) {
            $attributes['img'] = $request->img->store('medicineServices');
        }
        $this->medicineService->createMedicineService($attributes);
        return redirect()->route('medicineServices.index')->with('success', 'Medicine Services created successfully');
    }

    public function edit($id)
    {
        $medicineService = $this->medicineService->getMedicineServiceById($id);
        $illnesses = Illness::all();
        return view('dashboard.medicineServices.edit', compact('medicineService', 'illnesses'));
    }

    public function update(MedicineServiceRequest $request, $id)
    {
        $attributes = $request->validated();
        if ($request->img) {
            Storage::delete($this->medicineService->getMedicineServiceById($id)->img);
            $attributes['img'] = $request->img->store('medicineServices');
        };
        $this->medicineService->updateMedicineService($id, $attributes);
        return redirect()->route('medicineServices.index')->with('success', 'Medicine Services updated successfully');
    }

    public function destroy($id)
    {
        Storage::delete($this->medicineService->getMedicineServiceById($id)->img);
        $this->medicineService->deleteMedicineService($id);
        return redirect()->route('news.index')->with('success', 'Medicine Services deleted successfully');
    }
}

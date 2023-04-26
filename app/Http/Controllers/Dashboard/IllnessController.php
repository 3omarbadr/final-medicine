<?php

namespace App\Http\Controllers\Dashboard;

use App\Services\IllnessService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Dashboard\IllnessRequest;

class IllnessController extends Controller
{
    public function __construct(protected IllnessService $illnessService)
    {
    }

    public function index()
    {
        $illnesses = $this->illnessService->getAllIllnesses();
        return view('dashboard.illnesses.index', compact('illnesses'));
    }

    public function create()
    {
        return view('dashboard.illnesses.create');
    }

    public function show($id)
    {
        $illness = $this->illnessService->getIllnessById($id);
        return view('dashboard.illnesses.show', compact('illness'));
    }

    public function store(IllnessRequest $request)
    {
        $attributes = $request->validated();

        if ($request->img) {
            $attributes['img'] = $request->img->store('illnesses');
        }
        $this->illnessService->createIllness($attributes);
        return redirect()->route('illnesses.index')->with('success', 'Illness created successfully');
    }

    public function edit($id)
    {
        $illness = $this->illnessService->getIllnessById($id);
        return view('dashboard.illnesses.edit', compact('illness'));
    }

    public function update(IllnessRequest $request, $id)
    {
        $attributes = $request->validated();
        if ($request->img) {
            Storage::delete($this->illnessService->getIllnessById($id)->img);
            $attributes['img'] = $request->img->store('illnesses');
        };
        $this->illnessService->updateIllness($id, $attributes);
        return redirect()->route('illnesses.index')->with('success', 'Illness updated successfully');
    }

    public function destroy($id)
    {
        Storage::delete($this->illnessService->getIllnessById($id)->img);
        $this->illnessService->deleteIllness($id);
        return redirect()->route('illnesses.index')->with('success', 'Illness deleted successfully');
    }
}

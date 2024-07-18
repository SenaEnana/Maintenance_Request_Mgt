<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        $requests = MaintenanceRequest::with(['employee', 'technician'])->get();
        return view('requests.index', compact('requests'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'type' => 'required|string',
            'status' => 'required|string',
        ]);

        MaintenanceRequest::create($validated);
        return redirect()->back();
    }

    public function update(Request $request, MaintenanceRequest $maintenanceRequest)
    {
        $validated = $request->validate([
            'technician_id' => 'nullable|exists:technicians,id',
            'status' => 'required|string',
        ]);

        $request->update($validated);
        return redirect()->back();
    }
}



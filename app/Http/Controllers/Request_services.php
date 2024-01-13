<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Da_equipment;

class Request_services extends Controller
{
    //
    public function request_equipment(){
        $equipments = Da_equipment::with('brand')->get();
        $equipmentsArray = $equipments->toArray();
        foreach ($equipmentsArray as $equipment);

    return view('user.v_request_equipment', compact('equipmentsArray'));

    }

    // public function show($id)
    // {
    //     $repairRequest = Da_insert_repair_request_equipment::with('brand', 'user', 'equipment')->find($id);
    //     return view('repair_request.show', compact('repairRequest'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $repairRequest = Da_insert_repair_request_equipment::with('brand', 'user', 'equipment')->find($id);
    //     $repairRequest->status = $request->status;
    //     $repairRequest->equipment->status = $request->status;
    //     $repairRequest->save();
    //     $repairRequest->equipment->save();*

    //     return redirect()->route('repair_request.show', $id);
    // }
}

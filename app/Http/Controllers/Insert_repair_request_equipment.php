<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Da_insert_repair_request_equipment;

class Insert_repair_request_equipment extends Controller
{
    //

    public function show($id)
    {
        $repairRequest = Da_insert_repair_request_equipment::with('brand', 'user', 'equipment')->find($id);
        return view('', compact('repairRequest'));
    }

    public function update(Request $request, $id)
    {
        $repairRequest = Da_insert_repair_request_equipment::with('brand', 'user', 'equipment')->find($id);
        $repairRequest->status = $request->status;
        $repairRequest->equipment->status = $request->status;
        $repairRequest->save();
        $repairRequest->equipment->save();

        return redirect()->route('', $id);
    }
}

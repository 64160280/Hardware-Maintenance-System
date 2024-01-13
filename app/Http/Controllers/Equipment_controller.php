<?php

namespace App\Http\Controllers;

use App\Models\Da_equipment;
use App\Models\Da_brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class Equipment_controller extends Controller
{
    public function add(Request $request)
    {
        //นำข้อมูลจาก Database มาแสดง
        $databases_peoples = [
            [
                'name' => $request->name_item,
                'nameband' => $request->name_band,
                'namemodel' => $request->name_model,
                'details' => $request->detail_item
            ]
        ];
        return view('IT.v_insert_equipment', compact('databases_peoples'));
    }

    public function insert_equipment(Request $request)
    {
        //ตรวจสอบความถูกต้องเมื่อผู้ใช้กรอกเข้ามา
        $new_object = $request->validate([
            'serial_number' => 'required',
            'type_item' => 'required',
            'name_item' => 'required',
            'name_band' => 'required',
            'name_model' => 'required',
            'detail_item' => 'required',
            'image_item' => 'required|mimes:jpg,jpeg,png',
        ]);

        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        $image_name = time() . '.' . $request->image_item->extension();

        $request->image->move(public_path('images'), $image_name);

        $equipment = new Da_equipment;
        if($equipment->insert_equipment_stock($new_object))
        {
           return redirect()->route('add')
            ->with('success', 'You have successfully upload image.')
            ->with('image', $image_name); 
        }
        
    }
}
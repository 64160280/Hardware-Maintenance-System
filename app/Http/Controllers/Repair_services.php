<?php

namespace App\Http\Controllers;

/*
* Repair_services
* ควบคุมการทำงานเกี่ยวกับการแจ้งซ่อมของพนักงานทั้งหมด
* @author : Phachara Aunkitti 64160280
* @created at : 2023-03-21
*/

use App\Models\Da_equipment;
use App\Models\Da_insert_repair_request_equipment;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Repair_services extends Controller
{
    public function repair()
    {
        /*
        * repair()
        * แสดง Drop dowm ชื่ออุปกรณ์ของแต่ละ user
        * @input : id,name
        * @output : list รายการอุปกรณ์ของ user นั้นๆ
        * @author : Sutthapat Boontan 64160290
        * @Create Date : 2023-04-06
        */
        $equipments = Da_equipment::select('id', 'name')->get();
        return view('user.v_user_repair', compact('equipments'));
    }


    public function save_repair(Request $request)
    {
        /*
        * save_repair(Request $request)
        * บันทึกข้อมูลให้ตรงตามตัวแปรที่ต้องกรอก เมื่อยืนยันจะ save เข้า database
        * @input : equipment_type,equipment_name,issue,details,picture_path
        * @output : แสดงข้อมุลที่กรอกในตาราง database
        * @author : Sutthapat Boontan 64160290
        * @Create Date : 2023-04-06
        */
        $repair_request_equipments = $request->validate([
            'id' => '882',
            'equipment_id' => '885221',
            'it_id' => '64160281',
            'admin_id' => '64160280',
            'user_id' => '64160282',
            'issue' => 'required',
            'details' => 'required',
            'picture' => 'required'
        ]);
        $task = new Da_insert_repair_request_equipment;
        $task->insert_repair_equipment($repair_request_equipments);
        return redirect()->route('repair')->with('success', 'Save data successfully.');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Da_repair_request_equipments extends Model
{
    use HasFactory;

    protected $table = 'repair_request_equipments';
    protected $fillable = [
        'id', 'level_issue', 'admin_id', 'date_announce', 'status', 'it_id', 'picture_path',
        'amount_request', 'issue', 'details', 'cause_issue', 'reason_not_approve', 'it_point', 'equipement_id', 'user_id', 'repair_request_equipmentscol'
    ];

    public function insert_repair_equipment($data)
    {
        $obj_data = json_decode(json_encode($data), false); //convert array to object
        $task = new Da_repair_request_equipments;

        if (isset($obj_data->id)) {
            $task->id = $obj_data->id;
        }
        if (isset($obj_data->equipment_id)) {
            $task->equipement_id = $obj_data->id;
        }
        if (isset($obj_data->it_id)) {
            $task->it_id = $obj_data->it_id;
        }
        if (isset($obj_data->admin_id)) {
            $task->admin_id = $obj_data->admin_id;
        }
        if (isset($obj_data->user_id)) {
            $task->user_id = $obj_data->user_id;
        }
        if (isset($obj_data->issue)) {
            $task->issue = $obj_data->issue;
        }
        if (isset($obj_data->details)) {
            $task->details = $obj_data->details;
        }
        if (isset($obj_data->picture_path)) {
            $task->picture_path = $obj_data->picture;
        }

        $task->save();
    }
}

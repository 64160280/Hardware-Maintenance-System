<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Da_equipment extends Model
{
    use HasFactory;

    protected $table = 'equipments';
    protected $fillable = [
        'id', 'name', 'detail', 'picture', 'equipment_status', 'brand_id', 'device_type_id', 'user_id',
    ];

    public function brand()
    {
        return $this->belongsTo(Da_brand::class);
    }

    public function insert_equipment_stock($equipment)
    {

        $equipment_add = json_decode(json_encode($equipment), false); // convert array to object
        $equipment_database = new Da_equipment;

        $brand = new Da_brand;
        $brand_id = $brand->get_brand($equipment->name_band, $equipment->name_model);

        if (isset($equipment_add->serial_number)) {
            $equipment_database->id = $equipment->serial_number;
        }
        if (isset($equipment->type_item)) {
            $equipment_database->device_type_id = $equipment->type_item;
        }
        if (isset($equipment->name_item)) {
            $equipment_database->name = $equipment->name_item;
        }
        if (isset($brand_id)) {
            $equipment_database->brand_id = $brand_id;
        }
        $equipment_database->equipment_status = "พร้อมใช้งาน";
        if (isset($equipment->detail_item)) {
            $equipment_database->detail = $equipment->detail_item;
        }
        if (isset($equipment->image_item)) {
            $equipment_database->picture = $equipment->image_item;
        }
        $equipment_database->save();
        return true;
    }
}

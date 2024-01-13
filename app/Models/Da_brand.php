<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Da_brand extends Model
{
    use HasFactory;
    protected $table = 'brands';
    protected $fillable = [
        'id', 'name', 'model',
    ];


    public function insert_data()
    {
        //
    }

    public function get_brand($name, $model)
    {
        $brand = DB::where('name', $name)->where('model_name', $model)->first();
        $brand_id = $brand->id;
        return $brand_id;
    }
}

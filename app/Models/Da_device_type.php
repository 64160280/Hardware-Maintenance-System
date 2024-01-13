<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Da_device_type extends Model
{
    use HasFactory;

    protected $table = 'brands';
    protected $fillable = [
        'id', 'name', 'model',
    ];
}

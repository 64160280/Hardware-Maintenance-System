<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_admin_approve extends Model
{
    use HasFactory;
    protected $table = 'history_approves';
    protected $fillable = [
        'id', 'date_approve', 'repair_request_equipment_id',
    ];
}

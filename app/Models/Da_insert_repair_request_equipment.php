<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Da_insert_repair_request_equipment extends Model
{
    use HasFactory;

    protected $table = 'repair_request_equipments';
    protected $fillable = [
        'id', 'level_issue', 'admin_id', 'date_announce', 'status', 'it_id', 'picture_path', 'amount_request', 'issue', 'details',
        'cause_issue', 'reason_not_approve', 'it_point', 'equipment_id', 'user_id',
    ];

    public function brand()
    {
        return $this->belongsTo(Da_brand::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function equipment()
    {
        return $this->belongsTo(Da_equipment::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monitoring extends Model
{
    use HasFactory;
    protected $table = 'monitorings';
    protected $primaryKey = 'id';
    protected $fillable = [
        'no_container',
        'set_temp',
        'sup_temp',
        'ret_temp',
        'remark',
        'time_monitoring',
        'alarm',
        'photo',
        'shift',
        'monitor'
    ];
    public $timestamps = false;
    public function plugging()
    {
        return $this->belongsTo(plugging::class);
    }
}

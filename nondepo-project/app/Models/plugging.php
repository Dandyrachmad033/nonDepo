<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plugging extends Model
{
    use HasFactory;
    protected $table = 'pluggings';
    protected $primaryKey = 'plug_id';
    protected $fillable = [
        'no_container',
        'set_temp',
        'sup_temp',
        'ret_temp',
        'remark',
        'time',
        'status',
        'sup_end_temp',
        'ret_end_temp',
        'end_remark',
        'time_end',
        'alarm',
        'photo',
        'photo_end',
        'shift',
        'monitor'
    ];
    public $timestamps = false;

    public function monitoring()
    {
        return $this->hasMany(monitoring::class, 'plug_id', 'plug_id');
    }
}

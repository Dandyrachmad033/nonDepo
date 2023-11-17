<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tally_stufstrip extends Model
{
    use HasFactory;
    protected $table = 'stufstrip_tally';
    protected $fillable = [
        'idstufstrip_tally',
        'desc',
        'dimension',
        'unit',
        'value',
        'id_job_order_tally',
        'created_at',
        'updated_at',
        'group_id',
        'is_complete'

    ];
    public $timestamps = true;
}

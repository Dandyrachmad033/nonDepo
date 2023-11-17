<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class release_stufstrip extends Model
{
    use HasFactory;
    protected $table = 'stufstrip_release';
    protected $fillable = [
        'idstufstrip_release',
        'desc',
        'dimension',
        'unit',
        'value',
        'id_job_order_release',
        'created_at',
        'updated_at',
        'group_id',
        'is_complete'

    ];
    public $timestamps = true;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receiving_stufstrip extends Model
{
    use HasFactory;
    protected $table = 'stufstrip_receiving';
    protected $fillable = [
        'idstufstrip_receiving',
        'desc',
        'dimension',
        'unit',
        'value',
        'id_job_order_receiving',
        'created_at',
        'updated_at',
        'group_id',
        'is_complete'

    ];
    public $timestamps = true;
}

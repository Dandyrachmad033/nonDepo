<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stufstrip extends Model
{
    use HasFactory;
    protected $table = 'stuffingstripping';
    protected $fillable = ['strip_container_no', 'strip_seal_no', 'stuf_container_no', 'stuf_seal_no', 'is_complete', 'Cfs_id_job_order', 'created_at', 'updated_at', 'status_order'];
    public $timestamps = true;
}

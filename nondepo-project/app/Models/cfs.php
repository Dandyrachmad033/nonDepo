<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cfs extends Model
{
    use HasFactory;
    protected $table = 'cfs';
    protected $fillable = ['id_job_order', 'activity_date', 'principal', 'forwarder', 'shipper', 'cargo', 'party', 'clossing_date', 'remark', 'no_order', 'updated_at', 'created_at', 'form_type'];
    public $timestamps = true;
}

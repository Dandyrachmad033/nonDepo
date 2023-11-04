<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actions extends Model
{
    use HasFactory;
    protected $table = 'actions';
    protected $fillable = ['id', 'name_actions', 'principal', 'activity_date', 'username', 'value', 'activity_type', 'name_id'];
    public $timestamps = false;
}

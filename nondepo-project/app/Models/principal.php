<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class principal extends Model
{
    use HasFactory;
    protected $table = 'principal';
    protected $fillable = ['id', 'container', 'data'];
    public $timestamps = false;
}

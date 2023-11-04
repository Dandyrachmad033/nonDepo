<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_actions extends Model
{
    use HasFactory;
    protected $table = 'users_has_actions';
    protected $fillable = ['id', 'users_id', 'actions_id', 'action_status'];
    public $timestamps = false;
}

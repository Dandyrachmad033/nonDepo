<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class m_module extends Model
{
    use HasFactory;
    protected $table = 'm_modules';
    protected $primaryKey = 'module_id';
    protected $fillable = [
        'module_id',
        'module_name',
        'module_desc',
        'module_path',
        'module_script',
        'module_parent',
        'module_order',
        'module_icon',
        'module_status'
    ];
    public $timestamps = false;

    public function sub_m_module()
    {
        return $this->hasMany(m_sub_module::class, 'parent_id', 'module_id');
    }
}

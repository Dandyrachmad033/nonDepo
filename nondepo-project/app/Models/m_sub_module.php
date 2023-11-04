<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_sub_module extends Model
{
    use HasFactory;
    protected $table = 'm_sub_modules';
    protected $primaryKey = 'id_submenu';
    protected $fillable = [
        'module_name',
        'module_desc',
        'module_path',
        'module_script',
        'module_parent',
        'module_order',
        'module_icon',
        'module_status',
        'parent_id',
        'module_link'
    ];
    public $timestamps = false;

    public function m_module()
    {
        return $this->belongsTo(m_module::class);
    }
}

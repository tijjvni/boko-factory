<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function productions()
    {
        return $this->hasMany(ProductionMaterial::class, 'material_id');
    }  

    public function type()
    {
        return $this->belongsTo(MaterialType::class, 'material_id');
    }  
}

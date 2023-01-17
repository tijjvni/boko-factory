<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionMaterial extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function production()
    {
        return $this->belongsTo(Production::class, 'production_id');
    }  

    public function material()
    {
        return $this->belongsTo(Material::class, 'material_id');
    }  
}

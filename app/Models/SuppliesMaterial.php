<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuppliesMaterial extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function supplies()
    {
        return $this->belongsTo(Supplies::class, 'supplies_id');
    }

    public function material()
    {
        return $this->belongsTo(Material::class, 'material_id');
    }    
}

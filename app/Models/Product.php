<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function orders()
    {
        return $this->hasMany(OrderProduct::class, 'product_id');
    }

    public function type()
    {
        return $this->belongsTo(MaterialType::class, 'material_id');
    }   

    public function requests()
    {
        return $this->hasMany(ProductionRequest::class, 'product_id');
    }     
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function materials()
    {
        return $this->hasMany(ProductionMaterial::class, 'production_id');
    } 

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }    
}

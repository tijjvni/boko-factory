<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialType extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function material()
    {
        return $this->hasMany(MaterialType::class, 'material_id');
    } 

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }  
}

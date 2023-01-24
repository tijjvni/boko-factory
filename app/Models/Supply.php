<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'supplies';

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

    public function materials()
    {
        return $this->hasMany(SuppliesMaterial::class, 'supply_id');
    }


}


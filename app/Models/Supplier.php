<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function supplies()
    {
        return $this->hasMany(Supplies::class, 'supplier_id');
    }

    public function person()
    {
        return $this->morphOne(Person::class, 'personable');
    }
}

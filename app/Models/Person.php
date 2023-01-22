<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'people';
    protected $guarded = ['id'];


    public function personable()
    {
        return $this->morphTo();
    }

    public function contact()
    {
        return $this->hasMany(Contact::class, 'person_id');
    } 
}

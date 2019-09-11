<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];
    
    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function expenses(){
        return $this->hasMany(Expenses::class);
    }
}
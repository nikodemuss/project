<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use Searchable;
    protected $guarded = [];
    
    public function user()
    {
        return $this->hasMany('App\User');
    }

    // public static function userById($id)
    // {
    //     return $this->hasMany(User::findOrFail($id));
    // }

    public function expenses(){
        return $this->hasMany(Expenses::class);
    }

    public function searchableAs()
    {
        return 'name';
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //

    protected $fillable =['name'];

    public function role(){
         return $this->hasMany('App\Role');
    }
}

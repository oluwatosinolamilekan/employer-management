<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function employer()
    {
        return $this->hasMany('App\Employer');
    }
}

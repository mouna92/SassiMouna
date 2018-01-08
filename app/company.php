<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $fillable = [
        'name','address',
    ];
    public function joboffers(){
        return $this->hasMany('App\joboffer');
    }
}

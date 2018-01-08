<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class joboffer extends Model
{
    protected $fillable = [
        'title','description','date','skills','company_id',
    ];
    public function companies(){
        return $this->belongsTo('App\company','company_id');

    }
    public function users(){
        return $this->belongsToMany('App\User');// product_user is the join table
    }
}

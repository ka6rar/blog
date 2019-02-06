<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function User() {

        return $this->belongsTo('App\User');
    }


    protected $fillable = [
        'user_id', 'avatar', 'facebook', 'twitter' ,'github' , 'abouy'
    ];

}




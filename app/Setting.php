<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
   protected $fillable  = ['blog_name', 'phone_number' , 'blog_emsil' , 'address'];
}


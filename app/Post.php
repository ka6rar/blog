<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    public function tags() {

        return $this->belongsToMany('App\Tag');
    }

    public function getPhotos($featrued){ //جلب الصور

        require asset($featrued);
    }

    protected $data = ['daleted_at'];

    use SoftDeletes;
    protected $fillable = ['title','content' , 'category_id' , 'featrued' , 'slug' ];

    public function category() {

        return $this->belongsTo('App/Category');
    }
}

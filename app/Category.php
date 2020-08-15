<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $guarded = [];


     public function path(){

        return url("category/{$this->id}-{$this->slug}");
    }

     public function posts(){

    	return $this->belongsToMany('App\Post','category_posts');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

use Illuminate\Support\Facades\Storage;


class Post extends Model
{   
    
   protected $guarded = [];

  public function path(){

        return url("post/{$this->id}-{$this->slug}");
    }

 


    public function tags(){

    	return $this->belongsToMany('App\Tag','post_tags');
    }

     public function categories(){

    	return $this->belongsToMany('App\Category','category_posts');
    }
    
    public function paragraphs(){

    	return $this->hasMany('App\Paragraph','post_id','id');
    }

    public function user(){

        return $this->belongsTo('App\User','user_id');
    }
}

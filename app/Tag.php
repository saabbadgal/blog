<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     public function posts(){

    	return $this->belongsToMany('App\Post','post_tags');
    }
    
    public function path(){

        return url("tag/{$this->id}-{$this->slug}");
    }

}

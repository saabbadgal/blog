<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;

class Paragraph extends Model
{

	protected $guarded = [];

	protected $table = 'post_paragraph';

    protected static function boot()
    {
        parent::boot();
     
        // Order by name ASC
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('sort', 'asc');
        });
    }


    public function post(){

    	return $this->belongsTo('App\Post','post_id','id');
    }
}

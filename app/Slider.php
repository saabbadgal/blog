<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
      protected $table = 'slider';

      protected $guarded = [];

      /**
       * Indicates if the model should be timestamped.
       *
       * @var boolean
       */
      public $timestamps = false;
}

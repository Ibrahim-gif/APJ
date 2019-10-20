<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{

      protected $table = 'results';
      protected $fillable = [
          'Subject','Internals1','Internals2','Internals3','Finals'
      ];

}

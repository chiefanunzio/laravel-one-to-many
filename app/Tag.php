<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\POst;
class Tag extends Model
{
    protected $fillable=[

        'name',
        'description'   
      
    ];

    public function posts() {

        return $this -> hasMany(post::class);   
    }
}

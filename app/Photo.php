<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['path'];//mass assignment
    public function imageable(){
       return $this->morphTo();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $fillable=['name','web'];

    public function products(){

        return $this->hasMany(Product::class);
    }
}

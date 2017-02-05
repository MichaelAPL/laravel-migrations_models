<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'description'];

    public function reviews(){
      return $this->hasMany(Review::class);
    }

    public function salesman(){
      return $this->belongsTo(Salesman::class);
    }

    public function tags(){
      return $this->belongsToMany(Tag::class, 'products_tags');
    }
}

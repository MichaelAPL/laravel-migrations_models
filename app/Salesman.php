<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salesman extends Model
{
    protected $fillable = ['name', 'last_name'];

    public function products(){
      return $this->hasMany(Product::class);
    }

    public function direction(){
      return $this->hasOne(Direction::class);
    }
}

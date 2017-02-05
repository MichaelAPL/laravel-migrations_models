<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    protected $fillable = ['adress', 'city', 'region', 'country', 'postal_code'];

    public function salesman(){
      $this->belongsTo(Salesman::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['author', 'title', 'content', 'date'];

    public function product () {
        return $this->belongsTo(Product::class);
    }
}

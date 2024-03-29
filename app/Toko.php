<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

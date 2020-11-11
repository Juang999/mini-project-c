<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function products()
    {
        $this->hasMany(Product::class);
    }
}

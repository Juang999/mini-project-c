<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function pesanan_details()
    {
        return $this->hasMany(PesananDetail::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function toko()
    {
        return $this->belongsTo(Toko::class);
    }
}

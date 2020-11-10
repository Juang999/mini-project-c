<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function pesanan_details()
    {
        return $this->hasMany(PesananDetail::class, 'product_id', 'id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

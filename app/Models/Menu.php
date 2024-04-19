<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'id',
        'nama',
        'deskripsi',
        'harga',
        'image',
        'kategori',
        'rating',
    ];

    protected $casts = [
        'harga' => 'integer',
        'rating' => 'double',
    ];

    public function opsiMenu()
    {
        return $this->hasMany(OpsiMenu::class);
    }

    public function favorite()
    {
        return $this->hasMany(Favorite::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function orderItem()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function penjualan()
    {
        return $this->hasMany(Penjualan::class);
    }
}

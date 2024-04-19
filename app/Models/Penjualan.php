<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'id',
        'menu_id',
        'total',
    ];

    protected $casts = [
        'total' => 'integer',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}

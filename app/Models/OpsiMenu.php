<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpsiMenu extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'id',
        'menu_id',
        'opsi',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}

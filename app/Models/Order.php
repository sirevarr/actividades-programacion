<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_orden',
        'user_id',
        'total',
        'estado'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

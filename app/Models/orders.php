<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    protected $table='orders';

    protected $fillable = [
        'order_number',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}

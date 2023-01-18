<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Student extends Model
{
    use HasFactory;
    protected $table = 'student';

    protected $fillable = [
        'name',
        'phone',
        'address',
        'image',
        'message'
    ];


    protected $casts=[
        'image' => 'array'
    ];

    public function thumbnails(): Attribute{
        return Attribute::make(get: fn($value,$attribute)=> json_decode($attribute['image'],true)[0]);
    }

    public function scopeName($query,$value){
        $query->whereName($value);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function scopeShift($query,$Value,$values){
       return $query->whereShift($Value)
                ->orwhere('name', $values);
    }

//    public function scopeEmail($query,$value){
//            return $query->WhereEmail($value);
//    }

    public function scopeName($query,$value){
            return $query->whereName($value);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    const CREATED_AT = 'Time_Of_Creation';
    const UPDATED_AT = 'Time_Of_Update';
}

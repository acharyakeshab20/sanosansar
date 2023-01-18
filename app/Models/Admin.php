<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $table='admins';
    protected $guard='admin';

    protected $fillable=[
        'name',
        'email',
        'password',
        'phone',
        'address',
        'DOB',
        'images',
        'status',
        'roles'
    ];

    protected $hidden=[
        'password',
        'remember_token',
    ];

    protected $casts=[
        'email_verified_at' => 'datetime',
    ];

}

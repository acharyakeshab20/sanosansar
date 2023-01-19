<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table='orderdetails';
    protected $fillable=[
        'product_id',
        'order_id',
        'user_id',
        'address_id',
    ];

    public function products(){
        return $this->belongsTo(product::class,'product_id');
    }

    public function orders(){
        return $this->belongsTo(orders::class,'order_id');
    }

//    public function scopeTable($query){
//            $query->join('products','orderdetails.product_id','=','products.id')
//                    ->join('orders','orderdetails.order_id','=','orders.id')
//                    ->join('users','orderdetails.user_id','=','users.id')
//                    ->join('address','orderdetails.address_id','=','address.id');
//    }
//
    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
//
//    public function address(){
//        return $this->belongsTo(Address::class,'address_id');
//    }
}

<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderDetailss extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $OrderDetails = DB::table('orderdetails')->get();
//        $OrderDetails = OrderDetail::all();
//        $OrderDetails = OrderDetail::with(['products','orders'])->get();
        $OrderDetails = DB::table('orderdetails')
                            ->join('products','orderdetails.product_id','=','products.id')
                            ->join('orders','orderdetails.order_id','=','orders.id')
                            ->join('users','orderdetails.user_id','=','users.id')
                            ->join('address','orderdetails.address_id','=','address.id')
                            ->select('products.sku','products.name','users.name as Buyer','users.email'
                            ,'orders.order_number','orders.created_at','address.city','address.state','address.home_address')
                            ->where('sku','=','1011')
                            ->orWhere(function($query){
                                $query->where('sku','=','1022')
                                        ->orwhere('sku','=','16058');
                            })
                            ->get();
////        dd($OrderDetails);
        return view('orderD.index',compact('OrderDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

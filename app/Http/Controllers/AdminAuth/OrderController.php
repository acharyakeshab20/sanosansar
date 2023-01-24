<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use App\Models\orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $orders = orders::latest()->get();


//        $orders= orders::with('user')->get();


//        $orders= orders::with('user')
//                        ->where(function($query){
//                            $query->where('order_number','=','102')
//                                ->orwhere('order_number','=','103');
//                        })
//                        ->Where('order_number','=','101')
////                        ->where('order_number','>','102')
//                        ->toSql();


//        $orders= DB::table('orders')
//                    ->join('users','orders.user_id', '=', 'users.id')
//                    ->select('users.name','orders.*','users.email')
//                    ->get();


//        $orders = orders::with('user')
//                ->whereYear('created_at','2022')
//                ->get();

//        $orders = orders::with('user')
//                            ->whereBetween('user_id',[20,23])
//                            ->get();



//        $orders = orders::with('user')
//                            ->whereIn('user_id',[23,24])->get();
//        dd($orders);

//            $orders = orders::where('status','delivered')
//                                ->whereExists(function ($query){
//                                $query->from('users')
//                                        ->whereRaw('users.id = orders.user_id')
//                                        ->where('status','Active')
//                                        ->where('gender','female');
//                            })
        $orders = orders::with('user')
                                ->where('status','delivered')
                                ->orwhereExists(function ($query){
                                $query->from('users')
                                        ->whereColumn('users.id','orders.user_id')
//                                        ->whereRaw('users.id = orders.user_id')
                                        ->where('status','Active')
                                        ->where('gender','female');
                            })
//        $orders = orders::with('user')
//                        ->where('status','pending')
//                        ->toSql();
                            ->orderBy('created_at', 'desc')
                            // ->offset(2)
                            ->limit(3)
//        $orders = orders::with('user')
//                       ->whereColumn('created_at','updated_at')
////                        ->where('created_at','=','updated_at')
                      ->get();
//        dd($orders);

//        $orders = orders::with('user')
//            ->where('created_at',' > ', now()->subYears(10))
//            ->get();
//        dd($orders);
//        echo $orders; die();

        return view('order.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('order.get');
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

<?php

namespace App\Http\Controllers;
use App\Models\Review; 
use App\Models\Comment;
use App\Models\Order;
use App\Models\OrderProductt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.user.index');
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

    public function reviews() {
                               
        $comments= Comment::where('user_id','=',Auth::id())->get();

        return view('home.user.reviews', [
            'comments'=> $comments
        ]);
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

    public function orderdetail($id)
    {

        $order= Order::find($id);
        
        $orderproducts= OrderProductt::where('order_id','=',$id)->get();
 
        return view('home.user.orderdetail', [
            'order'=> $order,
            'orderproducts'=> $orderproducts,

        ]);
    }
    public function orders() {
                               
        $data= Order::where('user_id','=',Auth::id())->get();

        return view('home.user.orders', [
            'data'=> $data
        ]);
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
    public function commentdestroy($id)
    {
        $data=Comment::find($id);
        $data->delete();
        return redirect('/userpanel/reviews');
    }
}

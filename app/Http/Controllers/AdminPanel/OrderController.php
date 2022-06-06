<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\OrderProductt;
use Illuminate\Http\Request;

class Ordercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        
        $data = Order::where('status',$slug)->get();
        
        return view('admin.order.index', [
            'data' => $data
        ]);
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
        $data=Order::find($id)->get();
        $datalist= OrderProductt::where('order_id',$id)->get();

        return view('admin.order.show',[
            'data' => $data,
            'datalist' => $datalist,
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
      
    }

    public function aprove($id)
    {
      $data =Order::find($id);
     $data->status = 'aprove';
     $data->save();
     return redirect('adminpanel/order/new');
    }

    public function cancel($id)
    {
      $data =Order::find($id);
     $data->status = 'cancel';
     $data->save();
     return redirect('adminpanel/order/new');
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
        $data=Order::find($id);
        
        if($request->status=="aprove") {
            $data->status ='aprove';
            $data->save();

        }

        else if($request->status=="cancel") {
            $data->status ='cancel';
            $data->save();
        }

        else if($request->status=="wait") {
            $data->status ='wait';
            $data->save();
        }
       // dd($data);
       // $data->status =$request->status;
    
    
        return redirect('adminpanel');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Product;
use App\Models\Message;
use Illuminate\Support\Facades\POST;


class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $product = Product::orderBy('created_at','DESC')->take(8)->get();
        return view('shop.page.dashboard', ['product'=>$product]);
    }

    public function view_aboutus()
    {
        return view('shop.page.aboutus');
    }

    public function view_contuctus()
    {
        return view('shop.page.contuctus');
    }

    
    public function view_cart()
    {
        return view('shop.page.cart');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeMessage(Request $request)
    {
        $message = new Message([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'contact' => $request->get('contact'),
            'msg'=> $request->get('msg'),
        ]);

        $message->save();
        return redirect()->route('shop.dashboard.contuctus')->with(['message' => 'Message Hash Been ']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tableMessage()
    {
        $message = Message::all();
        return view('admin.page.komplain', ['message'=>$message]);
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

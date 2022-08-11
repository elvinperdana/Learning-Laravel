<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\POST;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $product = Product::all();
        return view('admin.page.product_index', ['product'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.page.product_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $product = new Product([
            'title' => $request->get('title'),
            'author' => $request->get('author'),
            'publish' => $request->get('publish'),
            'quantity'=> $request->get('quantity'),
            'price'=> $request->get('price')
        ]);
        
        if($request->hasfile('product_image'))
        {
            $file = $request->file('product_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/product_image/', $filename);
            $product->product_image = 'uploads/product_image/'.$filename;
        }

        
        $product->save();
        return redirect()->route('admin.product.index',compact('product'))->with(['message' => 'Data Has Been Added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Product $product)
    {
        return view('admin.product.dashboard', ['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request, $id)
    {
        $product = Product::find($id);
	    return view('admin.page.product_edit', ['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Product $id)
    {
        $product = Product::find($request->get('id'));
        $product->title = $request->get('title');
        $product->author = $request->get('author');
        $product->publish = $request->get('publish');
        $product->quantity = $request->get('quantity');
        $product->price = $request->get('price');

        if($request->hasfile('product_image'))
        {
            $old_img = $product->product_image;
            if(File::exists($old_img)) 
            {
                File::delete($old_img);
            }
            $file = $request->file('product_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/product_image/', $filename);
            $product->product_image = 'uploads/product_image/'.$filename;
        }
        $product->update();
        return redirect()->route('admin.product.index')->with(['message' => 'Data Has Been Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        $product = Product::find($id)->delete();
        return $product;
    }

    public function dashboard()
    {
        $product = Product::all();
        return view ('admin.page.dashboard',['product'=>$product]);
    }
}

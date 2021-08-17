<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=Product::get();
        return view('admin.product.index',compact('products'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
        $categories=Product::whereNotNull('product_id')->get();
        return view('admin.product.add',compact('categories'));
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
          $request->validate([
            'name'=>'required',
            'product_id'=>'required',
            'price'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png',
            'quantity'=>'required',
             'expirydate'=>'required'
        ]);
        $data=array(
            'name' => $request->name,
            'product_id' =>$request->product_id,
            'price' =>$request->price,
             'quantity' => $request->quantity,
            'expirydate' =>$request->expirydate
            
        );
        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $fileName=date('dmY').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path("/uploads"),$fileName);
            $data['image']=$fileName;   
        }
        $create=Product::create($data);

        return redirect()->route('admin.product.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
  
      public function edit(Product $product,Request $request)
    {
        //
        $id = $request->id;
        $products=Product::whereNull('product_id')->get();
        $product=Product::find($id);
        return view('admin.product.edit',compact('products','product'));
    }

     
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, Product $product)
    {
        //
         $request->validate([
            'name'=>'required',
            'product_id'=>'required',
            'price'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png',
            'quantity'=>'required',
             'expirydate'=>'required'
        ]);
        $id=$request->id;
          $data=array(
            'name' => $request->name,
            'product_id' =>$request->product_id,
            'price' =>$request->price,
             'quantity' => $request->quantity,
            'expirydate' =>$request->expirydate
            
        );
        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $fileName=date('dmY').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path("/uploads"),$fileName);
            $data['image']=$fileName;   
        }
        $create=Product::where('id',$id)->update($data);
        return redirect()->route('admin.product.list');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Product $product)
    {
        //
        $id=$request->id;
        $product=Product::find($id);
        $product->delete();
        return response()->json('success');
    }

    function status_update($id)
    {
        $product=Product::select('status')->where('id',$id)->first();
        if($product->status == '1')
        {
            $status = '0';
        }
        else
        {
            $status='1';
        }
        $data=array('status' =>$status);
        // Product::where('id',$id)->update($values);
        $create=Product::where('id',$id)->update($data);
        return redirect()->route('admin.product.list');

    }
    function search($name)
    {
        return Product::where('name',$name)->get();
    }
}

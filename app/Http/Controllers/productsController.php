<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::all();
        // return view('yeisons.index')->with('productos',$products);
        return view('crud.index')->with('productos',$products);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $product = new product();
        $product->name = $request['name'];
        $product->price = $request['price'];
        $product->description = $request['description'];
        if($request['activo'] == 'on'){

            $product->activo= 1;

        }else{
            $product->activo= 0;

        }

        $product->save();


        $products = product::all();
        return view('crud.index')->with('productos',$products);
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //$pro = product::find($id);
        $pro->name = $request['name'];
        $pro->description = $request['description'];
        return $pro;
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = product::find($id);
        return view('crud.edit')->with('producto',$product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pro = product::find($id);
        $pro->name = $request['name'];
        $pro->description = $request['description'];
        $pro->save();
        return redirect('/products');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        product::destroy($id);
       return redirect ('/products');
    }
}

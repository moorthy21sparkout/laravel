<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\models\product;
use Symfony\Contracts\Service\Attribute\Required;

class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $data=Product::all();
     return view("product.index",["data"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("product.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $data=$request->validate([
                 'name'=>'Required|string',
                 'price'=>'Required',
                 
             ]);
        product::create($request->all());
        return redirect("product")->with("success","successfully store the data ");
    }catch(Exception $e){
        return redirect('product')->with('error',$e->getMessage());
    }
}

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        return view('product.show',['data'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        return view('product.edit',['data'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //check the error condition
       try{
       $data=$request->validate([
            'name'=>'Required|string',
            'price'=>'Required',
            
        ]);
        product::create($request->all());
        return redirect("product")->with("success","update successfully");
    }catch(Exception $e){
        return redirect("product")->with('error',$e->getMessage());
    }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();
        return redirect("product")->with("success","data successfully deleted");
    }
}

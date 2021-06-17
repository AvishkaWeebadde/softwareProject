<?php

namespace App\Http\Controllers;

use App\Models\AD;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = auth()->id();
        $products = Products::latest()->paginate(5);

        $p = DB::table('products')->where('user_id',$userId)->get();

        //$products = Products::take(20)->get();
        //return view('home',['allProducts'=> $products]);

        return view('ads.profile')->with('product', $p);//, compact('products'))->with('i',(request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ads.createAd');
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
            'image'=>'required|image'
        ],[
            'image.required' => 'You have not choose any file',
            'image.image'=>'Only Image is allowed',
            'name' => 'required',
            'category' => 'required',
            'phone_no' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);

            $name = date("d-m-Y")."-".time().'.'.$request->image->extension();
            $request->image->move(public_path().'/upload/adImages', $name);

            DB::table('products')->insert([
                'name' => $request->name,
                'description' => $request->description,
                'category' => $request->category,
                'quantity' => $request->quantity,
                'phone_no' => $request->phone_no,
                'price' => $request->price,
                'cover_img' => $name,
                'user_id' => auth()->id(),
            ]);



            return redirect()->route('home')->withMessage('Ad created successfully!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AD  $aD
     * @return \Illuminate\Http\Response
     */
    public function show(AD $aD)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AD  $aD
     * @return \Illuminate\Http\Response
     */
    public function edit(AD $aD)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AD  $aD
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

        DB::table('products')->where('id', $request->id)->update([

            'price' => $request->newPrice,
            'quantity'=> $request->newQuantity,
        ]);

        return redirect()->back()->withMessage("Advertisement Updated");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AD  $aD
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('products')->where('id', $id)->delete();
        return redirect()->back()->withMessage("Advertisement deleted");

    }


}

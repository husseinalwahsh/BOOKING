<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\country;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Hotels = Hotel::all();
        return view('Hotel/index',compact('Hotels'));
    }


    public function search(Request $request) {

            $country = $request->country;

            $get_country = country::where('name','like',$country)->first();
       
            $Hotels = Hotel::where('countrie_id',$get_country->id)->get();
            return view('Hotel/index',compact('Hotels'));


    }
    
    
    public function getHotelsByCountry(Request $request)
    {
        $country = $request->country;

        $get_country = country::where('name', 'like', '%' . $country )->first();
    
       
            $Hotels  = Hotel::where('countrie_id', $get_country->id)->get();
            return view('Hotel.index', compact('Hotels'));
       
          
       
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $countrys = country::pluck('name','id');
        return view('admin.auth.create' , compact('countrys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'name'=>'required|max:255',
        'distance'=>'required|max:255',
        'price'=>'required|max:255',
        'desc'=>'required|max:255',
        'rating'=>'required|max:255',
        'image'=>'required|mimes:jpg,jpeg,png|max:2048'
       ]);

      $image=$request->file('image'); //
      
      $file_ex= $image->getClientOriginalExtension();
      $file_name=time().'.'. $file_ex;
      $image->move(public_path('uploads'),$file_name);
      Hotel::create(array_merge($request->all(),['image'=>$file_name]));

        return redirect()->back()->with('success','Hotle created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

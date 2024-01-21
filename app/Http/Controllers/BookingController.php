<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $bookings=Booking::all();
       return view('admin.auth.index',compact('bookings'));
    }

    public function showBookingsForUser($username)
    {
        // Assuming the 'name' field is in the 'users' table
        $bookings = Booking::whereHas('user', function ($query) use ($username) {
            $query->where('name', $username);
        })->get();
    
        return view('user.index', compact('bookings'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $booking=Booking::find($id);
        return view('user.Booking',compact('id'));
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {

      $request->validate([
            'name'=>'required|max:255',
            'checkin'=>'required|max:255',
            'checkout'=>'required|max:255',
            'rooms_num'=>'required|max:255',
            'persons_num'=>'required|max:255',
            'price'=>'required|max:255'
           ]);
           Booking::create(array_merge(['hotel_id'=>$id],$request->all()));
           return redirect()->back()->with('success','You are waiting
Your request will be answered within half an hour');


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
        
       $booking=Booking::find($id);
        return view('admin.auth.edit',compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'checkin' => 'required|max:255',
            'checkout' => 'required|max:255',
            'rooms_num' => 'required|max:255',
            'persons_num' => 'required|max:255',
            'price' => 'required|max:255'
        ]);
    
        $booking = Booking::find($id);
    
        // Update the attributes of the model instance
        $booking->update(array_merge(['hotel_id' => $id], $request->all()));
    
        return redirect()->back()->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->back()->with('success', 'Success');
    }


}

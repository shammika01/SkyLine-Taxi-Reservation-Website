<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\booking;
use App\Models\vehicle;
use App\Models\User;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Optional;


class FrontendBookingController extends Controller
{

    public function index()
    {
        $bookings = booking::all();
        return view('booking.view', compact('bookings'));
    }
    public function stepOne(Request $request)
    {
        $vehicles = vehicle::all();
        $booking = $request->session()->get('booking');
        $min_date = Carbon::today();
        $max_date = Carbon::now()->addDay();
        return view('booking.one', compact('vehicles', 'booking', 'min_date', 'max_date'));
    }

    public function storeStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'pickup' => 'required',
            'dropoff' => 'required',
            'passengers' => 'required|numeric|min:1|max:4',
            'vehicle_id' => 'required',
            'dateTime' => 'required',
        ]);

        // Create a new Booking instance and assign the form values
        $booking = new booking();
        $booking->name = $request->input('name');
        $booking->mobile = $request->input('mobile');
        $booking->pickup = $request->input('pickup');
        $booking->dropoff = $request->input('dropoff');
        $booking->passengers = $request->input('passengers');
        $booking->vehicle_id = $request->input('vehicle_id');
        $booking->dateTime = $request->input('dateTime');
        $booking->save();

        // Optionally, you can redirect the user to a success page or perform additional actions

        return redirect()->back()->with('success', 'Booking created successfully!');
    }

    public function stepTwo()
    {
        return view('booking.two');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function yourbookings()
    {
        $bookings = booking::where('name', auth()->user()->name)->get();
        return view('booking.view', compact('bookings'));
    }

    public function destroy($id)
    {
        $booking = booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('booking.view')->with('success', 'Booking deleted successfully.');
    }
}

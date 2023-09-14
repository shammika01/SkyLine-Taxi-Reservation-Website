<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = vehicle::all();
        return view('admin.vehicles.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        // Check if a file was uploaded
        if ($request->hasFile('image')) {
            // Validate the uploaded file
            $request->validate([
                'image' => 'required|image|max:2048', // validate that image file is required and is an image file with max size of 2 MB
            ]);

            // Get the uploaded file from the request
            $image = $request->file('image');

            // Check if the file is valid
            if ($image->isValid()) {
                // Generate a unique file name for the image
                $filename = uniqid() . '.' . $image->getClientOriginalExtension();

                // Store the image in the storage/app/public directory
                $image->storeAs('public', $filename);

                // Save the vehicle details to the database
                vehicle::create([
                    'brand' => $request->brand,
                    'model' => $request->model,
                    'registration_no' => $request->registration_no,
                    'insurance_no' => $request->insurance_no,
                    'image' => $filename // save the file name to the image column
                ]);
            } else {
                // Handle the case where the file is not valid
                // Return an error message or redirect back to the form with an error message
            }
        }





        return to_route('admin.vehicles.index')->with('success', 'Vehicle added successfully.');
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
    public function edit(vehicle $vehicle)
    {
        return view('admin.vehicles.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vehicle $vehicle)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'insurance_no' => 'required',
            'registration_no' => 'required'


        ]);
        $image = $vehicle->image;
        if ($request->hasFile('image')) {
            Storage::delete($vehicle->image);
            $image = $request->file('image')->store('public/storage');
        }

        $vehicle->update([
            'brand' => $request->brand,
            'model' => $request->model,
            'registration_no' => $request->registration_no,
            'insurance_no' => $request->insurance_no,
            'image' => $image
        ]);
        return to_route('admin.vehicles.index')->with('success', 'Vehicle updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vehicle $vehicle)
    {
        Storage::delete($vehicle->image);
        $vehicle->delete();
        return to_route('admin.vehicles.index')->with('success', 'Vehicle Deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all plants from the database
        $plants = Plant::all();
        
        // Return the view with the list of plants
        return view('plants.index', compact('plants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view for creating a new plant
        return view('plants.create');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Find the plant by its ID
        $plant = Plant::find($id);
        
        // Return the view with the plant details
        return view('plants.show')->with('plant', $plant);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the plant by its ID
        $plant = Plant::find($id);
        
        // Return the view for editing the plant
        return view('plants.edit')->with('plant', $plant);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plant $plant)
    {
        // Validate the request data
        $request->validate([
            'scientific_name' => 'required',
            'common_name' => 'required',
            'family' => 'required',
            'description' => 'required',
            'care' => 'required',
            'height' => 'required',
            'plant_image' => 'required|image',
            'supplier' => 'required',
        ]);

        // Handle plant image upload
        if ($request->hasFile('plant_image')) {
            $image = $request->file('plant_image');
            $imageName = time() . '.' . $image->extension();
            $image->storeAs('public/plants', $imageName);
            $plant_image_name = 'storage/plants/' . $imageName;
        }

        // Update the plant with the new data
        $plant->update([
            'scientific_name' => $request->scientific_name,
            'common_name' => $request->common_name,
            'family' => $request->family,
            'description' => $request->description,
            'care' => $request->care,
            'height' => $request->height,
            'plant_image' => $plant_image_name,
            'supplier' => $request->supplier,
        ]);

        // Redirect to the plant's show page with a success message
        return redirect()->route('plants.show', $plant)->with('success', 'Plant updated successfully');
    }
}

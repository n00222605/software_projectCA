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
        $plants = Plant::all();
        return view('plants.index', compact('plants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plants.create');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $plant = Plant::find($id);
        return view('plants.show')->with('plant', $plant);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $plant = Plant::find($id);
        return view('plants.edit')->with('plant', $plant);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plant $plant)
    {
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

        if ($request->hasFile('plant_image')) {
            $image = $request->file('plant_image');
            $imageName = time() . '.' . $image->extension();
            $image->storeAs('public/plants', $imageName);
            $plant_image_name = 'storage/plants/' . $imageName;
        }

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

        return to_route('plants.show', $plant)->with('success', 'Plant updated successfully');
    }
}

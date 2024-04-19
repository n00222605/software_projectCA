<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUploadRequest;
use App\Http\Requests\UpdateUploadRequest;
use App\Models\Upload;
use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $uploads = Upload::all();
        return view('uploads.index', compact('uploads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('uploads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'location' => 'required',
            // 'user_id' => 'required',
            // 'plant_id' => 'required',
            'upload_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('upload_image')) {
            $image = $request->file('upload_image');
            $image_name = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/uploads', $image_name);
            $upload_image_name = 'storage/uploads/' . $image_name;
        } else {
            $image_name = null;
        }
        
        // Create a new upload record
        Upload::create([
            'location' => $request->location,
            'user_id' => Auth::user()->name,
            'plant_id' => Plant::inRandomOrder()->value('id'),
            'upload_image' => $upload_image_name, 
        ]);

        return redirect()->route('uploads.index'); // Corrected method to redirect to index route
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $upload = Upload::find($id);
        return view('uploads.show')->with('upload', $upload);
    }
}

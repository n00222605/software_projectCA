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
        // Retrieve all uploads from the database
        $uploads = Upload::all();
        
        // Return the view with the list of uploads
        return view('uploads.index', compact('uploads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view for creating a new upload
        return view('uploads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'location' => 'required',
            'upload_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('upload_image')) {
            $image = $request->file('upload_image');
            $image_name = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/uploads', $image_name);
            $upload_image_name = 'storage/uploads/' . $image_name;
        } else {
            $upload_image_name = null;
        }
        
        // Create a new upload record
        Upload::create([
            'location' => $request->location,
            'user_id' => Auth::user()->id, // Corrected user ID retrieval
            'plant_id' => Plant::inRandomOrder()->value('id'),
            'upload_image' => $upload_image_name, 
        ]);

        // Redirect to the index route after successful upload
        return redirect()->route('uploads.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Find the upload by its ID
        $upload = Upload::find($id);
        
        // Return the view with the upload details
        return view('uploads.show')->with('upload', $upload);
    }
}

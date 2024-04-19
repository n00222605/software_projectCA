<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use App\Models\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all suppliers from the database
        $suppliers = Supplier::all();
        
        // Return the view with the list of suppliers
        return view('suppliers.index', compact('suppliers'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Find the supplier by its ID
        $supplier = Supplier::find($id);
        
        // Return the view with the supplier details
        return view('suppliers.show')->with('supplier', $supplier);
    }
}

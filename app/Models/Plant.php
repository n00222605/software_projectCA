<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;

    // Define the fillable fields that can be mass-assigned
    protected $fillable = [
        'scientific_name',
        'common_name',
        'family',
        'description',
        'care',
        'height',
        'plant_image',
        'supplier',
    ];

    // Define the relationship with the Supplier model
    public function suppliers() {
        // A plant can belong to multiple suppliers
        return $this->belongsToMany(Supplier::class)->withTimestamps();
    }

    // Define the relationship with the Upload model
    public function uploads(){
        // A plant can have multiple uploads
        return $this->hasMany(Upload::class);
    }
}

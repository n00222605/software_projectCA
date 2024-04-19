<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;

    // Define the fillable fields that can be mass-assigned
    protected $fillable = [
        'location',
        'user_id',
        'plant_id',
        'upload_image',
    ];

    // Define the relationship with the Plant model
    public function plant(){
        // An upload belongs to a plant
        return $this->belongsTo(Plant::class);
    }
}

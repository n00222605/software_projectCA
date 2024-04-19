<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    // Define the fillable fields that can be mass-assigned
    protected $fillable = [
        'name',
        'address',
        'email',
    ];

    // Define the relationship with the Plant model
    public function plants(){
        // A supplier can supply multiple plants
        return $this->belongsToMany(Plant::class)->withTimestamps();
    }
}

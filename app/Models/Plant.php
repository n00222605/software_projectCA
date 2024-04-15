<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;

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

    public function suppliers() {
        return $this->belongsToMany(Supplier::class)->withTimestamps();
    }

    public function uploads(){
        return $this->hasMany(Upload::class);
    }
}

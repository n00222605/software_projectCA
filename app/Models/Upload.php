<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;

    protected $fillable = [
        'location',
        'user_id',
        'plant_id',
        'upload_image',
    ];

    public function plant(){
        return $this->belongsTo(Plant::class);
    }
}

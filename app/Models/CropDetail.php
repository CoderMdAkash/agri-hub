<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CropDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'scientific_name',
        'category',
        'varieties',
        'soil_type',
        'climate',
        'harvest_days',
        'nutritional_value',
        'image',
        'order',
    ];
}

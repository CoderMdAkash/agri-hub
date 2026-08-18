<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PestControlStrategy extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'target_crops',
        'type',
        'identification',
        'prevention',
        'biological_control',
        'organic_remedy',
        'image',
        'order',
    ];
}

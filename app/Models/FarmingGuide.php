<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmingGuide extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'season',
        'summary',
        'step1_title',
        'step1_detail',
        'step2_title',
        'step2_detail',
        'step3_title',
        'step3_detail',
        'image',
        'order',
    ];
}

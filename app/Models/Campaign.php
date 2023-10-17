<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    // model berfungsi untuk menghubungkan antara database dengan controller dan juga merepresentasikan
    use HasFactory;

    protected $fillable = [
        'thumbnail',
        'title',
        'slug',
        'story',
        'target',
        'end_date'
    ];
}

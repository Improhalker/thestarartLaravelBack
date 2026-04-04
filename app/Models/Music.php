<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Music extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'youtube_id',
        'description',
        'day_of_week',
        'is_active'
    ];
}
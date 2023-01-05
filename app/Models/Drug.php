<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;

    protected $casts = [
        'availability' => 'boolean',
    ];

    protected $dates = ['updated_at'];

    protected $fillable = ['group', 'subgroup', 'scientificname', 'tradename', 'price', 'se', 'availability', 'note', 'is_published'];
}

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

    

    protected $fillable = ['group', 'subGroup', 'genericName', 'brandName', 'dosageForm', 'price', 'sideEffects', 'availability', 'note', 'cautions', 'pregnancy', 'breastfeeding', 'msi','hams', 'soundLook','highConc', 'storage', 'reference', 'is_published'];
}

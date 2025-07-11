<?php

namespace App\Models;

use App\Enums\VendorCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'address',
        'postal_code',
        'city',
        'phone',
        'email',
        'website',
        'category'
    ];

    /**
     * @var \class-string[]
     */
    protected $casts = [
        'category' => VendorCategory::class
    ];
}

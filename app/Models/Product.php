<?php

namespace App\Models;

use App\Enums\CategoryEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category', 'options'];

    protected $casts = [
        'options' => 'json',
        'category' => CategoryEnum::class,
    ];
}

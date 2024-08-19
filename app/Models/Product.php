<?php

namespace App\Models;

use App\Enums\CategoryEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'category', 'options', 'tds_file', 'tex_doc_file'];

    protected $casts = [
        'category' => CategoryEnum::class,
        'options' => 'json',
    ];
}

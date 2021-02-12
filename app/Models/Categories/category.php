<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'status',
        'parent_id',
        'user_id',
        
    ];
}

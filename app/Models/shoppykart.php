<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shoppykart extends Model
{
    use HasFactory;

    // Allow mass assignment for these fields
    protected $fillable = ['image', 'sale', 'heading', 'description'];
}
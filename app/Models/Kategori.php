<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\App\Models;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori',
        
    ];
}

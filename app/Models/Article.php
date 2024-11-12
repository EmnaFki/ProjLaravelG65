<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'designation',
        'reference',
        'description',
        'prix',
        'qte_stock',
        'slug'
    ];
}

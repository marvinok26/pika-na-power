<?php

namespace App\Models\content;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Benefit extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];
}

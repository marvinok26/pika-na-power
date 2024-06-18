<?php

namespace App\Models\content;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stats extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'value',
        'sub_title',
    ];
}

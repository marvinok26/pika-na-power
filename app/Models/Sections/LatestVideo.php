<?php

namespace App\Models\Sections;

use App\Models\Pages\PageSection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LatestVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'button_text',
        'button_url',
        'page_section_id',
    ];

    public function page_section()
    {
        return $this->belongsTo(PageSection::class, 'page_section_id');
    }
}

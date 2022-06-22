<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_at',
        'name',
        'image_folder_name',
        'seo_title',
        'seo_description',
        'content',
        'color1',
        'color2',
        'color3',
        'color4',
        'oblozgka',
        'page_prev'
    ];

    public function portfolio_post_images() {
        return $this->hasMany(PortfolioPostImage::Class, "post_name");
    }
}

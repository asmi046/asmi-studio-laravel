<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioPostImage extends Model
{
    use HasFactory;

    protected $fillable = [
        "created_at",
        "post_name",
        "razdel_name",
        "img",
        "img_title",
        "img_alt"
    ];

}

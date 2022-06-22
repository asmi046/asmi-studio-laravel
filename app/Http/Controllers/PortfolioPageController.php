<?php

namespace App\Http\Controllers;
use App\Models\PortfolioPost;

use Illuminate\Http\Request;

class PortfolioPageController extends Controller
{
    public function portfolioportfolio_page($pagename) {

        $portfolio = PortfolioPost::where('image_folder_name', $pagename)->take(1)->get();
        return view('portfoliopage', ["info" => $portfolio]);
    }
}

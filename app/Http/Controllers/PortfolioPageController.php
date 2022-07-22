<?php

namespace App\Http\Controllers;
use App\Models\PortfolioPost;

use Illuminate\Http\Request;

class PortfolioPageController extends Controller
{
    public function portfolioportfolio_page($pagename) {

        $portfolio = PortfolioPost::where('image_folder_name', $pagename)->take(1)->get();

        if($portfolio->isEmpty()) abort('404');

        $images = PortfolioPost::where('image_folder_name', $pagename)->first()->portfolio_post_images;
        $next = PortfolioPost::where('order', $portfolio[0]->order + 1)->take(1)->get();
        $prev = PortfolioPost::where('order', $portfolio[0]->order - 1)->take(1)->get();
        
        $img_array = [];

        foreach ($images as $el) {
            $img_array[$el->razdel_name][] = $el;
        }
        return view('portfoliopage', ["info" => $portfolio, "img" => $img_array]);
    }
}

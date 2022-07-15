<?php

namespace App\Http\Controllers;
use App\Models\PortfolioPost;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index () {

        $portfolio = PortfolioPost::inRandomOrder()->limit(6)->get();
        // dd($portfolio);
        return view('index',["portfolio" => $portfolio]);
    }
}

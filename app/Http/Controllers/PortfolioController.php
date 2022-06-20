<?php

namespace App\Http\Controllers;

use App\Models\PortfolioPost;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio() {
        $portfolio = PortfolioPost::all();
        return view('portfolio', ["portfolio" => $portfolio]);
    }
}

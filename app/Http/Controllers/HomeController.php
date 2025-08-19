<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use League\Uri\Components\Port;

class HomeController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();

        return view('welcome', compact('portfolios'));
    }
}

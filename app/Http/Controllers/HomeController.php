<?php

namespace App\Http\Controllers;

use App\Models\Tweets;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $tweets = Tweets::all();
        return view('home.index', compact('tweets'));

    }
}

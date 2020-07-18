<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\Banner;
use App\Profile;
use App\About;
use App\Content;
use App\Promotion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $promotions = Promotion::all();
        $feeds = Portfolio::with(['display'])
               ->where('category_id', 2)
               ->orderBy('id', 'desc')
               ->take(3)
               ->get();

        $photos = Portfolio::with(['display'])
               ->where('category_id', 1)
               ->orderBy('id', 'desc')
               ->take(6)
               ->get();

        $about = About::first();
        $content = Content::first();       
        $profile = Profile::first();
        
        return view('pages.home', [
            'photos' => $photos,
            'feeds' => $feeds,
            'banners' => $banners,
            'promotions' => $promotions,
            'about' => $about,
            'content' => $content,
            'profile' => $profile,
        ]);
    }
}

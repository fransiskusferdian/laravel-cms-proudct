<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Portfolio;
use App\Profile;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {   
        $portfolio = Portfolio::where('slug', $slug)->first();
        $directory = $portfolio->directory;
        $profile = Profile::first();
        $items = Gallery::where('directory', $directory)->get();

        if($portfolio->category_id == 2){
                    return view('pages.gallery1',[
                    'profile' => $profile,
                    'portfolio' => $portfolio,
                    'items' => $items
            ]);
        } else {
            return view('pages.gallery',[
                    'profile' => $profile,
                    'portfolio' => $portfolio,
                    'items' => $items
            ]);
        }

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Celular;
use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $celulares = Celular::orderBy('created_at', 'desc')->take(5)->get();;
        $banners = Banner::all();
        $blogs = Blog::orderBy('created_at', 'desc')->take(2)->get();
        return view('welcome', [
            'banners' => $banners,
            'celulares' => $celulares,
            'blogs' => $blogs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $banners = Banner::all();
        return view ('home', [
            'banners' => $banners
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('arquivo')->store('imagens', 's3');
        try{
            Storage::disk('s3')->setVisibility($path, 'public');
        } catch(Exception $e ){
            echo $e->getMessage();
        }
        
        $banner = new Banner();
        $banner->filename = $path;
        $banner->url = Storage::disk('s3')->url($path);
        $banner->save();
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        Storage::disk('s3')->delete($banner->filename);
        $banner->delete();

        return redirect('/home');
    }
}

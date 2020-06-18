<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::paginate(1);
        return view ('blog',[
            'blogs'=> $blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogs = Blog::all();
        return view ('postarblog', [
            'blogs' => $blogs
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
        Storage::disk('s3')->setVisibility($path, 'public');


        $blog = new Blog();
        $blog->titulo = $request->titulo;
        $blog->subtitulo = $request->subtitulo;
        $blog->criador = 'Equipe Kitcell';
        $blog->filename = $path;
        $blog->url = Storage::disk('s3')->url($path);
        $blog->conteudo = $request->conteudo;
        $blog->save();
        return redirect(route('blogcreate'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view ('blogedit',[
            'blog' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        if (isset($request->arquivo)){
            Storage::disk('s3')->delete($blog->filename);
            $path = $request->file('arquivo')->store('imagens', 's3');
            Storage::disk('s3')->setVisibility($path, 'public');

            $blog->url = Storage::disk('s3')->url($path);
            $blog->filename = $path;

        }

        $blog->titulo = $request->titulo;
        $blog->criador = 'Equipe Kitcell';
        $blog->conteudo = $request->conteudo;
        $blog->save();
        return redirect(route('blogindex'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        Storage::disk('s3')->delete($blog->filename);
        $blog->delete();
        return redirect(route('blogindex'));
    }
}

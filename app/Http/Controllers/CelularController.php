<?php

namespace App\Http\Controllers;

use App\Celular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CelularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $celulares = Celular::all();
        return view ('celularindex', [
            'celulares' => $celulares
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $celulares = Celular::all();
        return view('celularcreate',[
            'celulares'=>$celulares
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

        $celular = new Celular();
        $celular->nome = $request->nome;
        $celular->preco = $request->preco;
        $celular->descricao = $request->descricao;
        $celular->filename = $path;
        $celular->url = Storage::disk('s3')->url($path);
        $celular->save();
        return redirect(route('celularcreate'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Celular  $celular
     * @return \Illuminate\Http\Response
     */
    public function show(Celular $celular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Celular  $celular
     * @return \Illuminate\Http\Response
     */
    public function edit(Celular $celular)
    {
        return view ('celularedit', [
            'celular' => $celular
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Celular  $celular
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Celular $celular)
    {
        if (isset($request->arquivo)){
            Storage::disk('s3')->delete($celular->filename);
            $path = $request->file('arquivo')->store('imagens', 's3');
            Storage::disk('s3')->setVisibility($path, 'public');
            $celular->filename = $path;
            $celular->url = Storage::disk('s3')->url($path);
        }

        $celular->nome = $request->nome;
        $celular->preco = $request->preco;
        $celular->descricao = $request->descricao;
        $celular->save();
        return redirect(route('celularindex'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Celular  $celular
     * @return \Illuminate\Http\Response
     */
    public function destroy(Celular $celular)
    {
        Storage::disk('s3')->delete($celular->filename);
        $celular->delete();
        return redirect(route('celularcreate'));
    }
}

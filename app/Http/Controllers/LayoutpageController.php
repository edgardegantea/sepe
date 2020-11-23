<?php

namespace App\Http\Controllers;

use App\Models\Layoutpage;
use Illuminate\Http\Request;

class LayoutpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layoutpages.create');
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
        $data = $request -> validate([
            'codigo' => 'required',
            'criterio' => 'required',
            'valor' => 'required',
            'relevancia' => 'required',
            'comentario' => 'required'
        ]);

        auth()->user()->relacionUserLayoutPage()->create([
            'codigo' => $data['codigo'],
            'criterio' => $data['criterio'],
            'valor' => $data['valor'],
            'relevancia' => $data['relevancia'],
            'comentario' => $data['comentario']
        ]);

        return redirect()->route('layoutpages.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layoutpage  $layoutpage
     * @return \Illuminate\Http\Response
     */
    public function show(Layoutpage $layoutpage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layoutpage  $layoutpage
     * @return \Illuminate\Http\Response
     */
    public function edit(Layoutpage $layoutpage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layoutpage  $layoutpage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layoutpage $layoutpage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layoutpage  $layoutpage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layoutpage $layoutpage)
    {
        //
    }
}

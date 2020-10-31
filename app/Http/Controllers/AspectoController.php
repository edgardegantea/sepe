<?php

namespace App\Http\Controllers;

use App\Models\Aspecto;
use Illuminate\Http\Request;

class AspectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aspectos = Aspecto::all();
        return view('aspectos.index', compact('aspectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aspectos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Aspecto::create($request->all());
        return redirect()->route('aspectos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aspecto  $aspecto
     * @return \Illuminate\Http\Response
     */
    public function show(Aspecto $aspecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aspecto  $aspecto
     * @return \Illuminate\Http\Response
     */
    public function edit(Aspecto $aspecto)
    {
        return view('aspectos.edit', compact('aspecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aspecto  $aspecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aspecto $aspecto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aspecto  $aspecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aspecto $aspecto)
    {
        //
    }
}

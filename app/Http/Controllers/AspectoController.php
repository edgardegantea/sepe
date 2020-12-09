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
        //validación
        $data = $request->validate([
            'codigo' => 'required',
            'criterio' => 'required',
            'valor' => 'required',
            'relevancia' => 'required',
            'comentario' => ''
        ]);

        //Se insertan los valores a nuestra base de datos.
        for ($i = 0; $i < count($data['codigo']); $i++) {
            $registro = new Aspecto();
            $registro->codigo = $data['codigo'][$i];
            $registro->criterio = $data['criterio'][$i];
            $registro->valor = $data['valor'][$i];
            $registro->relevancia = $data['relevancia'][$i];
            $registro->comentario = $data['comentario'][$i];

            $registro->save();
        }

        return redirect()->route('identitys.create');


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

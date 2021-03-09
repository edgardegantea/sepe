<?php

namespace App\Http\Controllers;

use App\Models\Rotulado;
use Illuminate\Http\Request;

class RotuladoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:rotulados.index');
    }
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
        return view('rotulados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'codigo' => 'required',
            'criterio' => 'required',
            'valor' => 'required',
            'relevancia' => 'required',
            'comentario' => ''
        ]);

        //Se insertan los valores a nuestra base de datos.
        for ($i = 0; $i < count($data['codigo']); $i++) {
            $registro = new Rotulado();
            $registro->codigo = $data['codigo'][$i];
            $registro->criterio = $data['criterio'][$i];
            $registro->valor = $data['valor'][$i];
            $registro->relevancia = $data['relevancia'][$i];
            $registro->comentario = $data['comentario'][$i];

            $registro->save();
        }

        return redirect()->route('layoutpages.create');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Rotulado $rotulado
     * @return \Illuminate\Http\Response
     */
    public function show(Rotulado $rotulado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Rotulado $rotulado
     * @return \Illuminate\Http\Response
     */
    public function edit(Rotulado $rotulado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Rotulado $rotulado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rotulado $rotulado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Rotulado $rotulado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rotulado $rotulado)
    {
        //
    }
}

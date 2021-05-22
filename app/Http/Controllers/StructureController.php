<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Structure;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:structures.index');
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
    public function create($id)
    {
        $projects = Project::find($id)->id;
        return view('structures.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validación
        $data = $request->validate([
            'codigo' => 'required',
            'criterio' => 'required',
            'valor' => 'required',
            'relevancia' => '',
            'comentario' => '',
            'project_id' => 'required'
        ]);

        //Se insertan los valores a nuestra base de datos.
        for ($i = 0; $i < count($data['codigo']); $i++) {
            $registro = new Structure();
            $registro->codigo = $data['codigo'][$i];
            $registro->criterio = $data['criterio'][$i];
            $registro->valor = $data['valor'][$i];
            $registro->relevancia = $data['relevancia'][$i];
            $registro->comentario = $data['comentario'][$i];
            $registro->project_id = $data['project_id'];
            $registro->save();
        }

        return redirect()->route('projects.show', $request->project_id);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Structure $structure
     * @return \Illuminate\Http\Response
     */
    public function show(Structure $structure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Structure $structure
     * @return \Illuminate\Http\Response
     */
    public function edit(Structure $structure)
    {
        $evaluacion = Structure::where('project_id', $structure->project_id)->get();
        return view('structures.edit', compact('structure', 'evaluacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Structure $structure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $project_id)
    {
        $id = $request->get('id');
        $codigo = $request->get('codigo');
        $criterio = $request->get('criterio');
        $valor = $request->get('valor');
        $relevancia = $request->get('relevancia');
        $comentario = $request->get('comentario');

        $objetos = count($id);
        for ($i = 0; $i < $objetos; $i++) {
            $evaluacion = Structure::find($id[$i]);
            $evaluacion->update([
                'codigo' => $codigo[$i],
                'criterio' => $criterio[$i],
                'valor' => $valor[$i],
                'relevancia' => $relevancia[$i],
                'comentario' => $comentario[$i],
            ]);
        }
        return redirect()->route('projects.show', $project_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Structure $structure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Structure $structure)
    {
        //
    }
}

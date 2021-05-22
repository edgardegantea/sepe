<?php

namespace App\Http\Controllers;

use App\Models\Element;
use App\Models\Project;
use Illuminate\Http\Request;

class ElementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:elements.index');
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
        return view('elements.create', compact('projects'));
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
            $registro = new Element();
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
     * @param \App\Models\Element $element
     * @return \Illuminate\Http\Response
     */
    public function show(Element $element)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Element $element
     * @return \Illuminate\Http\Response
     */
    public function edit(Element $element)
    {
        $evaluacion = Element::where('project_id', $element->project_id)->get();
        return view('elements.edit', compact('element', 'evaluacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Element $element
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
            $evaluacion = Element::find($id[$i]);
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
     * @param \App\Models\Element $element
     * @return \Illuminate\Http\Response
     */
    public function destroy(Element $element)
    {
        //
    }
}

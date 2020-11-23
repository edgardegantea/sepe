<?php

namespace App\Http\Controllers;

use App\Models\Aspecto;
use App\Models\Evaluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EvaluationController extends Controller
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
        $aspectos = Aspecto::all(['id', 'codigo', 'criterio']);

        return view('evaluations.create')->with('aspectos', $aspectos);
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
            'valor' => 'required',
            'relevancia' => 'required',
            'comentario' => 'required',
            'evaluacion_heuristica' => 'required'
        ]);

        auth()->user()->relacionUserEvaluation()->create([
            'valor' => $data['valor'],
            'relevancia' => $data['relevancia'],
            'comentario' => $data['comentario'],
            'evaluacion_heuristica' => 'evaluacion_heuristica'
        ]);

        return redirect()->route('evaluations.create');
    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\Evaluation $evaluation
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluation $evaluation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Evaluation $evaluation
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluation $evaluation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Evaluation $evaluation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluation $evaluation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Evaluation $evaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluation $evaluation)
    {
        //
    }
}

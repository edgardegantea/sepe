<?php

namespace App\Http\Controllers;

use App\Models\EvaluatorsModel;
use App\Models\ProjectsModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade;


class EvaluatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $evaluators = EvaluatorsModel::select('*');


        $limit = (isset($request->limit)) ? $request->limit : 10;

        if (isset($request->serarch)) {
            $evaluators = $evaluators->where('firstname', 'like', '%' . $request->search . '%')
                ->orWhere('lastname', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%')
                ->orWhere('idEvaluator', 'like', '%' . $request->search . '%');
        }
        $evaluators = $evaluators->paginate($limit)->appends($request->all());
        return view('evaluators.index', compact('evaluators', 'limit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $evaluators = EvaluatorsModel::select('*')->get();
        return view('evaluators.create', compact('evaluators'));
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
        $evaluator = new EvaluatorsModel();
        $evaluator = $this->createUpdateevaluator($request, $evaluator);

        return redirect()
            ->route('evaluators.index')
            ->with('message', 'Registro creado satisfactoriamente');

    }

    public function createUpdateevaluator(Request $request, $evaluator)
    {
        //$evaluator->idEvaluator = $request->idEvaluator;
        $evaluator->firstname = $request->firstname;
        $evaluator->lastname = $request->lastname;
        $evaluator->email = $request->email;
        $evaluator->idProject = $request->idProject;
        $evaluator->save();
        return $evaluator;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($evaluator)
    {
        //
        $evaluator = EvaluatorsModel::where('idEvaluator', $evaluator)->firstOrFail();
        return view('evaluators.show', compact('evaluator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($evaluator)
    {
        //
        $evaluators = EvaluatorsModel::select('*')->get();
        $evaluator = EvaluatorsModel::where('idEvaluator', $evaluator)->firstOrFail();
        return view('evaluators.edit', compact('evaluator', 'evaluators'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $evaluator)
    {
        //
        $evaluator = EvaluatorsModel::where('idEvaluator', $evaluator)->firstOrFail();
        $evaluator = $this->createUpdateevaluator($request, $evaluator);
        return redirect()
            ->route('evaluators.show', $evaluator)
            ->with('message', 'Actualización correcta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($evaluator)
    {
        //
        $evaluator = EvaluatorsModel::findOrFail($evaluator);
        $evaluator->delete();
        return redirect()
            ->route('evaluators.index')
            ->with('message', 'Registro eliminado satisfactoriamente');
    }
}

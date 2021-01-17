<?php

namespace App\Http\Controllers;

use App\Models\Evaluator;
use Illuminate\Http\Request;

class  EvaluatorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $evaluators = Evaluator::all();
        return view('evaluators.index', compact('evaluators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('evaluators.create');
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
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required'
        ]);

        Evaluator::create($request->all());
        return redirect()->route('evaluators.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Evaluator $evaluator
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluator $evaluator)
    {
        //
        return view('evaluators.show', compact('evaluator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Evaluator $evaluator
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluator $evaluator)
    {
        //
        return view('evaluators.edit', compact('evaluator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Evaluator $evaluator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluator $evaluator)
    {
        //
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required'
        ]);

        $evaluator->update($request->all());
        return redirect()->route('evaluators.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Evaluator $evaluator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluator $evaluator)
    {
        //
        $evaluator->delete();
        return redirect()->route('evaluators.index');
    }
}

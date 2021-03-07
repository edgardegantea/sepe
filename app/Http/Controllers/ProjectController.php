<?php

namespace App\Http\Controllers;

use App\Models\Engineer;
use App\Models\Project;
use App\Models\Subject;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //se puede agregar en las rutas, para proteger nuestras urls.
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
        $projects = auth()->user()->projects;
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $materias = Subject::all(['id', 'name']);


        return view('projects.create',compact('materias'));
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
            'name' => 'required',
            'description' => 'required',
            'semester' => 'required',
            'subject_id' => 'required',
        ]);

        auth()->user()->projects()->create([
            'name' => $data['name'],
            'description' => $data['description'],
            'semester' => $data['semester'],
            'subject_id' => $data['subject_id'],
        ]);

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        $materias = Subject::all(['id', 'name']);

        return view('projects.edit', compact('project', 'materias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //Hacemos la validación
        $request->validate([
            'name' => 'required',
            'semester' => 'required',
            'description' => 'required'
        ]);
        //actualizamos los datos
        $project->update($request->all());

        return redirect()->route('projects.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
        $project->delete();
        return redirect()->route('projects.index');
    }
}

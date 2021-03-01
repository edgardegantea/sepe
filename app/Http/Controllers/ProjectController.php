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
        //
        $projects = auth()->user()->projects;
        return view('projects.index')->with('projects', $projects);
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
        $carreras = Engineer::all(['id', 'name']);


        return view('projects.create',compact('materias', 'carreras'));
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
            'engineer_id' => 'required',
            'subject_id' => 'required',
        ]);

        auth()->user()->projects()->create([
            'name' => $data['name'],
            'description' => $data['description'],
            'semester' => $data['semester'],
            'engineer_id' => $data['engineer_id'],
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
        return view('projects.edit', compact('project'));
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

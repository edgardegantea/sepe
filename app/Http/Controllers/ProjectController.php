<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Subject;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

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
        //$projects = auth()->user()->projects;
        $projects = Project::all();
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
        //$projects = Project::with('team')->get();

        $team = Team::find(11)->id;

        $materias = Subject::all(['id', 'name']);

        return view('projects.create', compact('materias', 'team'));
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
            'logo' => 'required|image',
            'status' => 'required',
            'subject_id' => 'required',
            'team_id' => 'required'
        ]);

        //Obteniendo ruta de la imagen del logo
        $ruta_imagen = $request['logo']->store('upload-projects', 'public');

        //Creando nuevo tamaño para el logo
        $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(400, 400);
        $img->save();


        Project::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'semester' => $data['semester'],
            'logo' => $ruta_imagen,
            'status' => $data['status'],
            'subject_id' => $data['subject_id'],
            'team_id' => $data['team_id']
        ]);

        return redirect()->route('teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {

        //Obtenemos el id del team al que pertenece este proyecto.
        $project->team->id;

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
        $subjects = Subject::all(['id', 'name']);

        return view('projects.edit', compact('project', 'subjects'));
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
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'semester' => 'required',
            'subject_id' => 'required',
        ]);

        //actualizamos los datos
        $project->name = $data['name'];
        $project->description = $data['description'];
        $project->semester = $data['semester'];
        $project->subject_id = $data['subject_id'];


        if (request('logo')) {
            //Obteniendo ruta de la imagen del logo
            $ruta_imagen = $request['logo']->store('upload-projects', 'public');

            //Redimencionando la imagen
            $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(400, 400);
            $img->save();

            $project->logo = $ruta_imagen;
        }

        $project->save();

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


        $project->delete();

        return redirect()->route('projects.index');
    }
}

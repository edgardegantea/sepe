<?php

namespace App\Http\Controllers;

use App\Models\Aspecto;
use App\Models\Ayuda;
use App\Models\Control;
use App\Models\Element;
use App\Models\Identity;
use App\Models\Interaction;
use App\Models\Layoutpage;
use App\Models\Project;
use App\Models\Rotulado;
use App\Models\Search;
use App\Models\Structure;
use App\Models\Subject;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    public function create($id)
    {
        $team = Team::find($id)->id;

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
            'name' => 'required|unique:projects',
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
        $team = $project->team->id;

        $evaluacion = 0;
        $ev_segunda = false;
        $ev_tercera = false;
        $ev_cuarta = false;
        $ev_quinto = false;
        $ev_sexto = false;
        $ev_septimo = false;
        $ev_octavo = false;
        $ev_noveno = false;
        $ev_decimo = false;
        $ev_ultimo = false;

        $primero = Aspecto::where('project_id', $project->id)->get();
        $segundo = Identity::where('project_id', $project->id)->get();
        $tercero = Structure::where('project_id', $project->id)->get();
        $cuarto = Rotulado::where('project_id', $project->id)->get();
        $quinto = Layoutpage::where('project_id', $project->id)->get();
        $sexto = Interaction::where('project_id', $project->id)->get();
        $septimo = Control::where('project_id', $project->id)->get();
        $octavo = Element::where('project_id', $project->id)->get();
        $noveno = Search::where('project_id', $project->id)->get();
        $decimo = Ayuda::where('project_id', $project->id)->get();

        if (count($primero) > 0) {
            $evaluacion = $evaluacion + 1;
            $ev_segunda = true;
        }

        if (count($segundo) > 0) {
            $evaluacion = $evaluacion + 1;
            $ev_tercera = true;
        }

        if (count($tercero) > 0) {
            $evaluacion = $evaluacion + 1;
            $ev_cuarta = true;
        }

        if (count($cuarto) > 0) {
            $evaluacion = $evaluacion + 1;
            $ev_quinto = true;
        }

        if (count($quinto) > 0) {
            $evaluacion = $evaluacion + 1;
            $ev_sexto = true;
        }

        if (count($sexto) > 0) {
            $evaluacion = $evaluacion + 1;
            $ev_septimo = true;
        }

        if (count($septimo) > 0) {
            $evaluacion = $evaluacion + 1;
            $ev_octavo = true;
        }

        if (count($octavo) > 0) {
            $evaluacion = $evaluacion + 1;
            $ev_noveno = true;
        }

        if (count($noveno) > 0) {
            $evaluacion = $evaluacion + 1;
            $ev_decimo = true;
        }

        if (count($decimo) > 0) {
            $evaluacion = $evaluacion + 1;
            $ev_ultimo = true;
        }

        //GRAFICANDO LOS DATOS
        $cod = $project->id;




        $aspectos = DB::select('select * from aspectos where project_id = :project_id', ['project_id' => $cod]);
        $contadorAs = count($aspectos);

        $identidad = DB::select('select * from identities where project_id = :project_id', ['project_id' => $cod]);
        $estructura = DB::select('select * from structures where project_id = :project_id', ['project_id' => $cod]);
        $rotulado = DB::select('select * from rotulados where project_id = :project_id', ['project_id' => $cod]);
        $layoutPage = DB::select('select * from layoutpages where project_id = :project_id', ['project_id' => $cod]);
        $interacion = DB::select('select * from interactions where project_id = :project_id', ['project_id' => $cod]);
        $control = DB::select('select * from controls where project_id = :project_id', ['project_id' => $cod]);
        $elementos = DB::select('select * from elements where project_id = :project_id', ['project_id' => $cod]);
        $busqueda = DB::select('select * from searches where project_id = :project_id', ['project_id' => $cod]);
        $ayuda = DB::select('select * from ayudas where project_id = :project_id', ['project_id' => $cod]);


        // return $evaluacion;
        return view('projects.show', compact('project',
            'aspectos', 'identidad', 'estructura', 'rotulado', 'layoutPage', 'interacion', 'control', 'elementos', 'busqueda', 'ayuda',
            'evaluacion', 'ev_segunda', 'ev_tercera', 'ev_cuarta', 'ev_quinto', 'ev_sexto', 'ev_septimo', 'ev_octavo', 'ev_noveno', 'ev_decimo', 'ev_ultimo', 'team'
        ));
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

        $evaluators = User::role('Teacher')->get();

        return view('projects.edit', compact('project', 'subjects', 'evaluators'));
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

        //guarda los datos
        $project->save();

        //hace una sincronizacion de lo que habia y lo que trajo del request
        $project->users()->sync($request->users);

        $team = $project->team->id;
        $nuevo = $project->id;

        return redirect()->route('projects.show', $nuevo);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        /**
         * $project->delete();
         * return redirect()->route('projects.index');
         */
    }
}

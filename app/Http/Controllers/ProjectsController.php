<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade;
use App\Entities\ProjectsModel;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $projects = ProjectsModel::select('*');


        $limit = (isset($request->limit)) ? $request->limit : 10;

        if (isset($request->serarch)) {
            $projects = $projects->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('dateRegistration', 'like', '%' . $request->search . '%')
                ->orWhere('semester', 'like', '%' . $request->search . '%');
        }
        $projects = $projects->paginate($limit)->appends($request->all());
        return view('projects.index', compact('projects', 'limit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $projects = ProjectsModel::select('*')->get();
        return view('projects.create', compact('projects'));
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
        $project = new ProjectsModel();
        $project = $this->createUpdateProject($request, $project);

        return redirect()
            ->route('projects.index')
            ->with('message', 'Registro creado satisfactoriamente');

    }

    public function createUpdateProject(Request $request, $project)
    {
        //$project->idProject = $request->idProject;
        $project->name = $request->name;
        $project->dateRegistration = $request->dateRegistration;
        $project->semester = $request->semester;
        $project->save();
        return $project;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($project)
    {
        //
        $project = ProjectsModel::where('idProject', $project)->firstOrFail();
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($project)
    {
        //
        $projects = ProjectsModel::select('*')->get();
        $project = ProjectsModel::where('idProject', $project)->firstOrFail();
        return view('projects.edit', compact('project', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $project)
    {
        //
        $project = ProjectsModel::where('idProject', $project)->firstOrFail();
        $project = $this->createUpdateProject($request, $project);
        return redirect()
            ->route('projects.show', $project)
            ->with('message', 'Actualización correcta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($project)
    {
        //
        $project = ProjectsModel::findOrFail($project);
        $project->delete();
        return redirect()
            ->route('projects.index')
            ->with('message', 'Registro eliminado satisfactoriamente');
    }
}

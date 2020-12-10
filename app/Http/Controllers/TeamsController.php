<?php

namespace App\Http\Controllers;

use App\Entities\TeamsModel;
use App\Entities\StudentsModel;
use App\Entities\ProjectsModel;
use App\Entities\EvaluatorsModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade;
use Illuminate\Support\Facades\DB;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $teams = TeamsModel::select('*');
        $students = StudentsModel::select('*')->get();
        $projects = ProjectsModel::select('*')->get();
        $evaluators = EvaluatorsModel::select('*')->get();
        $teamsview = DB::select("select * from teamsView");

        $limit = (isset($request->limit)) ? $request->limit : 10;

        if (isset($request->serarch)) {
            $teams = $teams->where('engineering', 'like', '%' . $request->search . '%')
                ->orWhere('semester', 'like', '%' . $request->search . '%')
                ->orWhere('idProject', 'like', '%' . $request->search . '%')
                ->orWhere('idStudent', 'like', '%' . $request->search . '%')
                ->orWhere('idEvaluator', 'like', '%' . $request->search . '%');
        }
        $teams = $teams->paginate($limit)->appends($request->all());
        return view('teams.index', compact('teams', 'limit', 'teamsview'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $teams = TeamsModel::select('*')->get();
        return view('teams.create', compact('teams'));
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
        $team = new TeamsModel();
        $team = $this->createUpdateteam($request, $team);

        return redirect()
            ->route('teams.index')
            ->with('message', 'Registro creado satisfactoriamente');

    }

    public function createUpdateteam(Request $request, $team)
    {
        //$team->idTeam = $request->idTeam;
        $team->engineering = $request->engineering;
        $team->semester = $request->semester;
        $team->idProject = $request->idProject;
        $team->idStudent = $request->idStudent;
        $team->idEvaluator = $request->idEvaluator;
        $team->save();
        return $team;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($team)
    {
        //
        $team = TeamsModel::where('idTeam', $team)->firstOrFail();
        return view('teams.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($team)
    {
        //
        $teams = TeamsModel::select('*')->get();
        $team = TeamsModel::where('idTeam', $team)->firstOrFail();
        return view('teams.edit', compact('team', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $team)
    {
        //
        $team = TeamsModel::where('idTeam', $team)->firstOrFail();
        $team = $this->createUpdateteam($request, $team);
        return redirect()
            ->route('teams.show', $team)
            ->with('message', 'Actualización correcta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($team)
    {
        //
        $team = TeamsModel::findOrFail($team);
        $team->delete();
        return redirect()
            ->route('teams.index')
            ->with('message', 'Registro eliminado satisfactoriamente');
    }
}

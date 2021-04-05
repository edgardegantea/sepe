<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\String\s;
use function Symfony\Component\Translation\t;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:teams.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = auth()->user();

        //$teams = DB::select( 'SELECT * FROM `team_user` WHERE user_id = ?', [$user]);

        //$teams = DB::table('team_user')->pluck('team_id');

        $teams = Team::all();

        //contar el numero de proyectos que existen
        //SSTeam::withCount('projects')->get();

        return view('teams.index', compact('user', 'teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('teams.create');
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
            'name' => 'required'
        ]);

        $team = Team::create($request->all());

        //obteniendo el usuario autenticado
        $user = auth()->user();

        //agrego el usuario al equipo recien creado
        $user->teams()->attach($team);

        return redirect()->route('teams.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
        $projects = Project::all();

        return view('teams.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //ver usuarios con rol de Student
        //$students = User::role('Student')->get();

        $students = User::all();


        return view('teams.edit', compact('team', 'students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
        $request->validate([
            'name' => 'required'
        ]);

        $team->update($request->all());

        $team->users()->sync($request->users);


        return redirect()->route('teams.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
        $team->delete();
        return redirect()->route('teams.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Entities\TeachersModel;
use App\Entities\ProjectsModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade;
use Illuminate\Support\Facades\DB;


class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $teachers = TeachersModel::select('*');


        $limit = (isset($request->limit)) ? $request->limit : 10;

        if (isset($request->serarch)) {
            $teachers = $teachers->where('firstname', 'like', '%' . $request->search . '%')
                ->orWhere('lastname', 'like', '%' . $request->search . '%')
                ->orWhere('controlNumber', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%')
                ->orWhere('idProject', 'like', '%' . $request->search . '%');
        }
        $teachers = $teachers->paginate($limit)->appends($request->all());
        $teachers = DB::table('teachers')
            ->join('projects', 'projects.idProject', '=', 'projects.idProject');
        return view('teachers.index', compact('teachers', 'limit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $teachers = TeachersModel::select('*')->get();
        return view('teachers.create', compact('teachers'));
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
        $teacher = new TeachersModel();
        $teacher = $this->createUpdateteacher($request, $teacher);

        return redirect()
            ->route('teachers.index')
            ->with('message', 'Registro creado satisfactoriamente');

    }

    public function createUpdateteacher(Request $request, $teacher)
    {
        //$teacher->idTeacher = $request->idTeacher;
        $teacher->firstname = $request->firstname;
        $teacher->lastname = $request->lastname;
        $teacher->controlNumber = $request->controlNumber;
        $teacher->email = $request->email;
        $teacher->idProject = $request->idProject;
        $teacher->save();
        return $teacher;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($teacher)
    {
        //
        $teacher = TeachersModel::where('idTeacher', $teacher)->firstOrFail();
        return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($teacher)
    {
        //
        /*
        $teachers = TeachersModel::select('*')->get();  // aquí obtienes todos los registros
        $teacher = TeachersModel::where('idTeacher', $teacher)->firstOrFail();  //
        return view('teachers.edit', compact('teachers1','teachers'));
        */

        // $teachers = TeachersModel::select('*')->get();
        // $teachers = DB::table('projects')->join('teachers', 'teachers.idProject', '=', 'projects.idProject');

        $teachers = DB::table('teachers')
            ->join('projects', 'projects.idProject', '=', 'teachers.idProject');
        return view('teachers.edit', compact('teachers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $teacher)
    {
        //
        $teacher = TeachersModel::where('idTeacher', $teacher)->firstOrFail();
        $teacher = $this->createUpdateteacher($request, $teacher);
        return redirect()
            ->route('teachers.show', $teacher)
            ->with('message', 'Actualización correcta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($teacher)
    {
        //
        $teacher = TeachersModel::findOrFail($teacher);
        $teacher->delete();
        return redirect()
            ->route('teachers.index')
            ->with('message', 'Registro eliminado satisfactoriamente');
    }
}

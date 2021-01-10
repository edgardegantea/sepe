<?php

namespace App\Http\Controllers;

use App\Models\StudentsModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $students = StudentsModel::select('*');


        $limit = (isset($request->limit)) ? $request->limit : 10;

        if (isset($request->serarch)) {
            $students = $students->where('firstName', 'like', '%' . $request->search . '%')
                ->orWhere('lastName', 'like', '%' . $request->search . '%')
                ->orWhere('semester', 'like', '%' . $request->search . '%')
                ->orWhere('engineering', 'like', '%' . $request->search . '%')
                ->orWhere('controlNumber', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%');
        }
        $students = $students->paginate($limit)->appends($request->all());
        return view('students.index', compact('students', 'limit'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $students = StudentsModel::select('*')->get();
        return view('students.create', compact('students'));
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
        $student = new StudentsModel();
        $student = $this->createUpdatestudent($request, $student);

        return redirect()
            ->route('students.index')
            ->with('message', 'Registro creado satisfactoriamente');

    }

    public function createUpdatestudent(Request $request, $student)
    {
        //$student->idStudent = $request->idStudent;
        $student->firstName = $request->firstName;
        $student->lastName = $request->lastName;
        $student->semester = $request->semester;
        $student->engineering = $request->engineering;
        $student->controlNumber = $request->controlNumber;
        $student->email = $request->email;
        $student->save();
        return $student;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($student)
    {
        //
        $student = StudentsModel::where('id', $student)->firstOrFail();
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($student)
    {
        //
        //$students = StudentsModel::where('id', $student)->firstOrFail();
        $student = StudentsModel::where('id', $student)->firstOrFail();
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $student)
    {
        //
        $student = StudentsModel::where('id', $student)->firstOrFail();
        $student = $this->createUpdatestudent($request, $student);
        return redirect()
            ->route('students.show', $student)
            ->with('message', 'Actualización correcta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($student)
    {
        //
        $student = StudentsModel::findOrFail($student);
        $student->delete();
        return redirect()
            ->route('students.index')
            ->with('message', 'Registro eliminado satisfactoriamente');
    }
}

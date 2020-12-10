<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\SubjectsModel;
use Barryvdh\DomPDF\Facade;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $subjects = SubjectsModel::select('*');


        $limit = (isset($request->limit)) ? $request->limit : 10;

        if (isset($request->serarch)) {
            $subjects = $subjects->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('teacher', 'like', '%' . $request->search . '%');
        }
        $subjects = $subjects->paginate($limit)->appends($request->all());
        return view('subjects.index', compact('subjects', 'limit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $subjects = SubjectsModel::select('*')->get();
        return view('subjects.create', compact('subjects'));
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
        $subject = new SubjectsModel();
        $subject = $this->createUpdatesubject($request, $subject);

        return redirect()
            ->route('subjects.index')
            ->with('message', 'Registro creado satisfactoriamente');

    }

    public function createUpdatesubject(Request $request, $subject)
    {
        //$subject->idSubject = $request->idSubject;
        $subject->name = $request->name;
        $subject->teacher = $request->teacher;
        $subject->save();
        return $subject;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($subject)
    {
        //
        $subject = SubjectsModel::where('idSubject', $subject)->firstOrFail();
        return view('subjects.show', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($subject)
    {
        //
        $subjects = SubjectsModel::select('*')->get();
        $subject = SubjectsModel::where('idSubject', $subject)->firstOrFail();
        return view('subjects.edit', compact('subject', 'subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $subject)
    {
        //
        $subject = SubjectsModel::where('idSubject', $subject)->firstOrFail();
        $subject = $this->createUpdatesubject($request, $subject);
        return redirect()
            ->route('subjects.show', $subject)
            ->with('message', 'Actualización correcta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($subject)
    {
        //
        $subject = SubjectsModel::findOrFail($subject);
        $subject->delete();
        return redirect()
            ->route('subjects.index')
            ->with('message', 'Registro eliminado satisfactoriamente');
    }
}

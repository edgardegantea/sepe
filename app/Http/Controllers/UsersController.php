<?php

namespace App\Http\Controllers;

use App\Entities\UsersModel;
use App\Entities\ProfilesModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $profiles = ProfilesModel::select('*')->get();
        $users = UsersModel::select('*');


        $limit = (isset($request->limit)) ? $request->limit : 10;

        if (isset($request->serarch)) {
            $users = $users->where('firstname', 'like', '%' . $request->search . '%')
                ->orWhere('lastname', 'like', '%' . $request->search . '%');
        }
        $users = $users->paginate($limit)->appends($request->all());
        return view('users.index', compact('users', 'limit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = UsersModel::select('*')->get();
        return view('users.create', compact('users'));
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
        $user = new UsersModel();
        $user = $this->createUpdateUser($request, $user);

        return redirect()
            ->route('users.index')
            ->with('message', 'Registro creado satisfactoriamente');

    }

    public function createUpdateUser(Request $request, $user)
    {
        $user->id_Users = $request->id_Users;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->save();
        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        //
        $user = UsersModel::where('id_Users', $user)->firstOrFail();
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        //
        $profiles = ProfilesModel::select('*')->get();
        $users = UsersModel::where('id_Users', $user)->firstOrFail();
        return view('users.edit', compact('user', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
        //
        $user = UsersModel::where('id_Users', $user)->firstOrFail();
        $user = $this->createUpdateUser($request, $user);
        return redirect()
            ->route('users.show', $user)
            ->with('message', 'Actualización correcta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        //
        $user = UsersModel::findOrFail($user);
        $user->delete();
        return redirect()
            ->route('users.index')
            ->with('message', 'Registro eliminado satisfactoriamente');
    }
}

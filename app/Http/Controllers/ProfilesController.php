<?php

namespace App\Http\Controllers;

use App\Entities\ProfilesModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $profiles = ProfilesModel::select('*');


        $limit = (isset($request->limit)) ? $request->limit : 10;

        if (isset($request->serarch)) {
            $profiles = $profiles->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%')
                ->orWhere('permissions', 'like', '%' . $request->search . '%');
        }
        $profiles = $profiles->paginate($limit)->appends($request->all());
        return view('profiles.index', compact('profiles', 'limit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $profiles = ProfilesModel::select('*')->get();
        return view('profiles.create', compact('profiles'));
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
        $profile = new ProfilesModel();
        $profile = $this->createUpdateprofile($request, $profile);

        return redirect()
            ->route('profiles.index')
            ->with('message', 'Registro creado satisfactoriamente');

    }

    public function createUpdateprofile(Request $request, $profile)
    {
        $profile->id_Profiles = $request->id_Profiles;
        $profile->name = $request->name;
        $profile->description = $request->description;
        $profile->permissions = $request->permissions;
        $profile->save();
        return $profile;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($profile)
    {
        //
        $profile = ProfilesModel::where('id_Profiles', $profile)->firstOrFail();
        return view('profiles.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($profile)
    {
        //
        $profiles = ProfilesModel::select('*')->get();
        $profile = ProfilesModel::where('id_Profiles', $profile)->firstOrFail();
        return view('profiles.edit', compact('profile', 'profiles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $profile)
    {
        //
        $profile = ProfilesModel::where('id_Profiles', $profile)->firstOrFail();
        $profile = $this->createUpdateprofile($request, $profile);
        return redirect()
            ->route('profiles.show', $profile)
            ->with('message', 'Actualización correcta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($profile)
    {
        //
        $profile = ProfilesModel::findOrFail($profile);
        $profile->delete();
        return redirect()
            ->route('profiles.index')
            ->with('message', 'Registro eliminado satisfactoriamente');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Model\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userLogin = Auth::user();
        if (is_null($userLogin->profile)) {
            $user = $userLogin->email;
        }else{
            $user = $userLogin->profile->nama;
        }
        $roles = Role::all();
        $rolesLevel = array();
        foreach ($roles as $key => $role) {
            array_push($rolesLevel, $role->level);
        }
        $level = ['1','2','3','4','5','6','7','8','9','10'];

        return view('admin.role.index', [
                'user' => $user,
                'userLogged' => $userLogin,
                'roles' => $roles,
                'rolesLevel' => $rolesLevel,
                'level' => $level
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userLogin = Auth::user();
        if (is_null($userLogin->profile)) {
            $user = $userLogin->email;
        }else{
            $user = $userLogin->profile->nama;
        }

        return view('admin.role.create',[
                'user' => $user,
                'userLogged' => $userLogin,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (is_null($request->role) && is_null($request->level)) {
            return back()->with('error', 'Nama role dan Level Harap diisi');
        }elseif (is_null($request->role)) {
            return back()->with('error', 'Nama role Harap diisi');
        }elseif (is_null($request->level)) {
            return back()->with('error', 'Level Harap diisi');
        }
        $roles = Role::all(['level'])->toArray();
        $rolesLevel = array();
        foreach ($roles as $key => $role) {
            array_push($rolesLevel, $role['level']);
        }
        if (in_array($request->level,$rolesLevel)) {
            return back()->with('error', 'Maaf Level Role sudah digunakan');
        }

        $roleSave = Role::Create($request->all());
        if ($roleSave) {
            return redirect()->route('roles.index')->with('success', 'Role berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        $role = Role::find($role)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(Request $request)
    {
        if($request->has('txtBuscar')){
            $roles = Rol::WHERE('name', 'like', '%'.$request->txtBuscar.'%')->get();
        }else{
            $roles = Rol::all();
        }
         return response()->json(['res' => true, 'roles' => $roles], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'nombre' => 'required|min:3|string',
            'tipo' => 'required',
            'roles' => 'required',
            'productos' => 'required',
            'autorizar' => 'required',
            'categorias' => 'required',
            'banner' => 'required',
            'usuarios' => 'required',
        ]);
        $input = $request->all();
        Rol::create($input);
        return response()->json(['res' => true, 'message' => 'Insert Rol OK', 'rol' => $input], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rol = Rol::findOrFail($id);
        return response()->json(['res' => true, 'rol' => $rol], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->validate([
            'name' => 'required|min:3|string',
            'description' => 'string',
            'module' => 'required'
        ]);
        $input = $request->all();
        $rol = Rol::findOrFail($id);
        $rol->update($input);
        return response()->json(['res' => true, 'message' => 'Update Rol OK', 'rol' => $rol], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rol::destroy($id);
        return response()->json(['res' => true, 'message' => 'Delete OK'], 200);
    }
}

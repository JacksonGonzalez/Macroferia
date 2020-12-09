<?php

namespace App\Http\Controllers;

use App\Category;
use App\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    
    public function Autorizacion(){
        $idrol = Auth::user()->idRol;

        $permiso = Rol::Find($idrol);

        $permiso = $permiso['categorias'];

        return $permiso;
    }

    public function index(Request $request)
    {
        if($request->has('txtBuscar')){
            $categorias = Category::WHERE('nombre', 'like', '%'.$request->txtBuscar.'%')->orderBy('id', 'desc')->get();
        }else{
            $categorias = Category::orderBy('id', 'desc')->get();
        }
        if($this->Autorizacion() == 0){
            return response()->json(['res' => true, 'message' => 'no esta autorizado'], 200);
        }else{
            return response()->json(['res' => true, 'categorias' => $categorias], 200);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Category::create($input);
        return response()->json(['res' => true, 'message' => 'Insert OK', 'category' => $input], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category )
    {
        return $category;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $input = $request->validate([
            'name' => 'required|min:3|string',
            'description' => 'string',
            'state' => 'numeric'
        ]);
        // $input = $validatedData->all();
        $category->update($input);
        return response()->json(['res' => true, 'message' => 'Update OK', 'category' => $category], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return response()->json(['res' => true, 'message' => 'Delete OK'], 200);
    }

}

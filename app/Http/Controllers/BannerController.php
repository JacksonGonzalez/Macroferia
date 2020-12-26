<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{
    public function Autorizacion(){
        $idrol = Auth::user()->idRol;

        $permiso = Rol::Find($idrol);

        $permiso = $permiso['banner'];

        return $permiso;
    }

    public function index(Request $request)
    {
        if($request->has('txtBuscar')){
            $banners = Banner::WHERE('nombre', 'like', '%'.$request->txtBuscar.'%')->orderBy('id', 'desc')->get();
        }else{
            $banners = Banner::orderBy('id', 'desc')->get();
        }
        if($this->Autorizacion() == 0){
            return response()->json(['res' => true, 'message' => 'no esta autorizado'], 200);
        }else{
            return response()->json(['res' => true, 'banners' => $banners], 200);
        }
    }


    public function store(Request $request)
    {
        $validator = $request->validate([ 
            'nombre' => 'required|string|min:3', 
            'url' => 'required|string|min:3', 
            'imagen' => 'required|image|mimes:jpg,jpeg,png,svg|max:2500',
            ]);
            // dd($request);
            $imagen = $request->file('imagen');
            $nombre = time().'.'.$imagen->getClientOriginalExtension();
            $destino = public_path('img/banners');
            $request->imagen->move($destino, $nombre);
            
            // dd('si se subio');

            $input = $request->all();
            $input['imagen'] = $nombre;
            $category = Banner::create($input); 
            $success['category'] =  $category;

            if($this->Autorizacion() == 0){
                return response()->json(['res' => true, 'message' => 'no esta autorizado'], 200);
            }else{
                return response()->json(['success'=>$success], 200); 
            }     

    }


    public function destroy($id)
    {
        $banner = Banner::FindOrFail($id);
        $ruta = public_path('img/banners/'.$banner['imagen']);
        // dd($banner);
        // ELIMINAR LA ANTERIOR IMG
        unlink($ruta);
        // dd($ruta);
        
       
        $banner->delete();
        return response()->json(['res' => true, 'message' => 'Delete OK'], 200);
    }
}

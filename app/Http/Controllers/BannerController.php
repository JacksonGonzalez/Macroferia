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
}

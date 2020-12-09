<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Rol;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   

    public function Autorizacion(){
        $idrol = Auth::user()->idRol;

        $permiso = Rol::Find($idrol);

        $permiso = $permiso['usuarios'];

        return $permiso;
    }

    public function index(Request $request)
    {
        if($request->has('txtBuscar')){
            $users = User::WHERE('name', 'like', '%'.$request->txtBuscar.'%')
                    ->orWhere('document_number', 'like', '%'.$request->txtBuscar.'%')->get();
        }else{
            $users = User::all();
        }

        if($this->Autorizacion() == 0){
            return response()->json(['res' => true, 'message' => 'no esta autorizado'], 200);
        }else{
            return response()->json(['res' => true, 'users' => $users], 200);
        }
    }


    public function store(Request $request)
    {
        $validator = $request->validate([ 
            'nombre' => 'required|string|min:3', 
            'usuario' => 'required|String|min:3',
            'idRol' => 'required|Numeric',
            'email' => 'required|email|unique:users', 
            'password' => 'required', 
            'c_password' => 'required|same:password',
            'telefono' => 'required|Numeric',
            'pais' => 'required|String',
            'departamento' => 'required|String',
            'ciudad' => 'required|String',
            'direccion' => 'String',
            ]);
    
    
            $input = $request->all(); 
            $input['password'] = bcrypt($input['password']); 
            $user = User::create($input); 
            $success['user'] =  $user;

            if($this->Autorizacion() == 0){
                return response()->json(['res' => true, 'message' => 'no esta autorizado'], 200);
            }else{
                return response()->json(['success'=>$success], 200); 
            }
            

    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([ 
            'name' => 'required|string|min:3', 
            'last_name' => 'required|String|min:3',
            'email' => 'required|email', 
            'idRol' => 'required|String',
            'document_type' => 'required|String|max:3',
            'document_number' => 'required|Numeric|min:7',
            'address' => 'String',
            'phone' => 'Numeric',
            'email' => 'required|string',
            'avatar' => 'String',
            ]);
    
    
            $input = $request->all();
            $user = User::findOrFail($id);
            $user->update($input);
            return response()->json(['res' => true, 'message' => 'Update user OK', 'user' => $user], 200);
    }

    public function destroy($id)
    {
        User::destroy($id);
        return response()->json(['res' => true, 'message' => 'User Delete OK'], 200);
    }
}

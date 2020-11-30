<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Validator;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator as ValidationValidator;

class AuthController extends Controller
{

    public $successStatus = 200;
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }


    public function login(){ 
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('web')-> accessToken; 
            return response()->json(['success' => $success, 'messages' => 'Welcome', 'user' => $user], $this-> successStatus); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }


    public function logout(){ 
        
        $user = Auth::user()->token();
        $user->delete();

        return response()->json(['success'=> True,'message' => 'Sesion Finalizada Exitosamente'], 200);
    }

    public function checkToken(){
        return response()->json(['success' => true, 'user' => Auth::user()], 200);
    }

    public function register(Request $request)
    {
        $validator = $request->validate([ 
            'nombre' => 'required|string|min:3', 
            'usuario' => 'required|String|min:3',
            'idRol' => 'required|String',
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
            $success['token'] =  $user->createToken('web')-> accessToken; 
            return response()->json(['success' => $success, 'messages' => 'Welcome', 'user' => $user], $this-> successStatus);

    }

}

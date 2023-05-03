<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |

    public function register_cliente(Request $request){
        $user = new User():
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect(route('inicio_session'));
    }
    */
    
    public function login_usuario(Request $request){
        $credentiales = [
            "usuario" => $request->name,
            "password" => $request->password,
            "role" => "administrador",
        ];
        if(Auth::attempt($credentiales)){
            $request->session()->regenerate();
            return redirect(route('principal'));
        }else{
            $credentiales1 = [
                "usuario" => $request->name,
                "password" => $request->password,
                "role" => "user_interno",
            ];
            if(Auth::attempt($credentiales1)){
                $request->session()->regenerate();
                $mess="Sesion Iniciada Usuario Interno";
                //return view('/pagina_principal/documentos',compact('mess'));
                return redirect()->route('documentos');
            }else{
                $credentiales2 = [
                    "usuario" => $request->name,
                    "password" => $request->password,
                    "role" => "user_externo                    ",
                ];
                if(Auth::attempt($credentiales2)){
                    $request->session()->regenerate();
                    $mess="Sesion Iniciada Usuario Externo";
                    //return view('/pagina_principal/documentos',compact('mess'));
                    return redirect()->route('documentos');
                }else{
                    $mess="Datos incorrectos";
                    //return view('/pagina_principal/inicio_sesion',compact('mess'));
                    return redirect()->route('inicio_sesion')->withErrors(['mesg' => $mess]);
                }
            }
        }
        
    }

    public function logout_usuario(Request $request){
        if(Auth::check()){
            $user = Auth::user();
            //Busca todos los token del usuario en la base de datos y los eliminamos;
            $user->tokens->each(function($token){
            $token->delete();
            });
            $mess="Sesion finalizada";
            Auth::logout();
            return view('/pagina_principal/inicio_sesion',compact('mess'));
        }
        
        /*
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $mess="Sesion finalizada";
        return view('/pagina_principal/inicio_sesion',compact('mess'));*/
    }
    /*
    public function login(Request $request){
        $credentiales = [
            "name" => $request->name,
            "password" => $request->password,
        ];
        $mess="Sesion iniciada";
        return view('/pagina_principal/documentos',compact('mess'));
    }

    public function logout_u(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $mess="Sesion finalizada";
        return view('/pagina_principal/inicio_sesion',compact('mess'));
    }
    */
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

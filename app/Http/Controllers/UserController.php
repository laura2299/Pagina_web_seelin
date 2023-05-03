<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::orderBy('name','asc')->paginate(8);
        return view('dashboard/users/index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/users/create');
    }

    public function cambio_contra(Request $request){
        $id = auth()->user()->id;
        $miusuario=User::findOrFail($id);
        $pass=Hash::make($request['nueva_contraseña']);
        $miusuario->password=$pass;
        $miusuario->save();
        $mess="Contraseña Cambiada";
        return view('/pagina_principal/cambio_contraseña',compact('mess'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'nombre'=>'required',
            'lastname'=>'required',
            'password'=> 'required|min:8',
            'tipo'=>'required'
        ],
        );
        $usuario=$request->only('nombre','lastname','usuario','password','tipo');
        $usuario['password']=Hash::make($request['password']);
        $user= new User();
        $user->name = $usuario['nombre'];
        $user->lastName = $usuario['lastname'];

        $nom = substr($request->nombre, 0, 1);
        $ap =$request->lastname;
        $ap =str_replace(' ', '', $ap);
        $concatenated = $nom.$ap;


        $user->usuario = $concatenated;
        $user->password = $usuario['password'];
        $user->role = $usuario['tipo'];
        $user->save();

        if ($request->tipo == 'user_interno') {
            $user->assignRole('user_interno');
        }
        if ($request->tipo == 'user_externo') {
            $user->assignRole('user_externo');
        }
        $user2=User::findOrFail($user->id);
        $user2->usuario= $concatenated.$user->id;
        $user2->save();
        return redirect()->route('admin.users.index')->with('mensaje', 'Se ha creado un nuevo usuario');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        
        return redirect()->route('admin.users.index')->with('mensaje', 'El usuario ha sido eliminado correctamente');

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $input['password'] = Hash::make($request->password);

        User::create($input);

        return response()->json([
            'res' => true,
            'message' => 'Usuario creado correctamente'
        ], 200);
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
        //
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device' => 'required',
        ]);

        $user = User::whereEmail($request->email)->first();
        $rol = Rol::where('user_id',$user->id)->first();
        if(!is_null($user) && Hash::check($request->password, $user->password)){
            $token = $user->createToken($request->device)->plainTextToken;
            return response()->json([
                'token' => $token,
                'user' => $user,
                'rol' => $rol,
                'ok' => true
            ], 200);
        } else {
            return response()->json([
                'ok' => false,
                'mensaje' => 'Cuenta y/o contraseña incorrectas.'
            ], 200);
        }
    }

    public function logout(Request $request){
        $request->user()->tokens()->delete();
            return response()->json([
                'ok' => true
            ], 200);
    }
}

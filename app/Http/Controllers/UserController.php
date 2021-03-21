<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
        $user = User::whereEmail($request->email)->first();
        if(!is_null($user) && Hash::check($request->password, $user->password)){
            $token = $user->createToken('fmk-lvl-token')->plainTextToken;
            return response()->json([
                'res' => true,
                'token' => $token,
                'message' => 'Bienvenido al sistema.'
            ], 200);
        } else {
            return response()->json([
                'res' => false,
                'message' => 'Cuenta o password incorrectos.'
            ], 200);
        }
    }

    public function logout(Request $request){
        $user = User::whereEmail($request->email)->first();
        if(!is_null($user) && Hash::check($request->password, $user->password)){
            $user->tokens()->delete();
            return response()->json([
                'res' => true,
                'message' => 'logout correcto.'
            ], 200);
        }
    }
}

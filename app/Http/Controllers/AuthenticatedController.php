<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Services\ResponseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AuthenticatedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        try {
            if (Auth::attempt($credentials)) {
                $user = User::where('email', $request->email)->first();
                Auth::login($user);
                $datosSession = session()->all();
                $user->setAttribute('session_data', $datosSession);
                return ResponseService::success('Inicio de sesión exitoso', $user,200);
            } else {
                return ResponseService::error('Las credenciales proporcionadas son incorrectas.',[], 401);
            }
        } catch (\Exception $e) {
            return ResponseService::error('Se produjo un error durante el inicio de sesión.', $e->getMessage(), 500);
        }
    }
    public function createUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            'usernick' => 'required|string|max:50',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'num_id' => 'required|string|max:20',
            'tipo_usuario' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'usernick' => $request->usernick,
            'num_id' => $request->num_id,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'tipo_cliente' => $request->tipo_cliente,
            'tipo_usuario' => $request->tipo_usuario,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        $datosSession = session()->all();
        $user->setAttribute('session_data', $datosSession);

        return ResponseService::success('Usuario creado exitosamente', $user,  201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

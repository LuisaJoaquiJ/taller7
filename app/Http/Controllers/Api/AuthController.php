<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'api_token' => Str::random(60),
        ]);

        return response()->json([
            'message' => 'Usuario registrado correctamente',
            'user' => $user
        ], 201);
    }

    // Inicio de sesión
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Credenciales incorrectas'], 401);
        }

        // Generar y guardar nuevo token
        $user->api_token = Str::random(60);
        $user->save();

        return response()->json([
            'message' => 'Inicio de sesión exitoso',
            'token' => $user->api_token
        ], 200);
    }
    public function __construct()
{
    $this->middleware('auth:api');  // Asegura que las rutas estén protegidas
}

public function index()
{
    $user = JWTAuth::user();  // Obtener el usuario autenticado
    // Realiza la lógica para mostrar las categorías

    return response()->json([
        'user' => $user,
        'categories' => ['Category 1', 'Category 2', 'Category 3'],
    ]);
}
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validación de datos de entrada
        $validator = Validator::make($request->all(), [
            "email" => "required|email",
            "password" => "required"
        ]);

        // Si falla la validación
        if ($validator->fails()) {
            return response()->json([
                "status" => 0,
                "message" => "Error en la validación de datos.",
                "errors" => $validator->errors()
            ], 422);
        }

        // Intentar autenticación del usuario
        if (!Auth::attempt($request->only("email", "password"))) {
            return response()->json([
                "status" => 0,
                "message" => "Credenciales incorrectas."
            ], 401);
        }

        // Obtener el usuario autenticado
        $user = Auth::user();

        // Generar token con Sanctum
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            "status" => 1,
            "message" => "Inicio de sesión exitoso.",
            "token" => $token,
            "user" => $user
        ], 200);
    }
}

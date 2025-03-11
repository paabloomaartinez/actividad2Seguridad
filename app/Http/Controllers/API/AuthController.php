<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function login(Request $request)
    {

        //Validación datos de entrada
        $validator = Validator::make(
            $request->all(),
            [
                "email" => "required|email",
                "password" => "required"
            ]
        );

        //Si falla la validación
        if ($validator->fails()) {
            return response()->json([
                "status" => 0,
                "message" => "Error en la validación de datos.",
                "data" => $validator->errors()->all()
            ]);
        }
    }
}

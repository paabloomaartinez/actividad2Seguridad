<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Muestra todos los productos.
     */
    public function index()
    {
        $products = Product::all();

        return response()->json([
            'status' => 1,
            'message' => 'Lista de productos obtenida con éxito.',
            'products' => $products
        ]);
    }
}

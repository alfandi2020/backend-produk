<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\JWTAuth;
class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }
    public function GetProduk()
    {
        $db = Product::all();
        
        // if (response()->json(auth()->user()) == false) {
            return response()->json([
                'data' => $db
            ]);
        // }
        return response()->json([
            'data' => "anda belum login"
        ]);
    }
   
}

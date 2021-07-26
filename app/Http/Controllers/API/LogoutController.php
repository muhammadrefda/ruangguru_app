<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index()
    {
        auth()->logout();
        return response()->json([
            'success'    => true
        ]);
    }
}

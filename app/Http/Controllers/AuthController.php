<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }

    public function show($id)
    {
        $user = User::find($id);

        return response()->json($user);
    }

    public function store(Request $request)
    {
        return $request->all();
    }
}

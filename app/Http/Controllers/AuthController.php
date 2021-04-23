<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->select('id', 'name')->get();

        return response()->json($users);
    }

    public function show($id)
    {
        $users = DB::table('users')->where('id',$id)->first();

        return response()->json($users);
    }
}

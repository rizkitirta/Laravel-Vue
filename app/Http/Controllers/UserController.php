<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function upload($id, Request $request)
    {
        $user = User::find($id);

        $imageName = time() . '.' . $request->photo->extension();

        $path = public_path('images');

        if (!empty($user->photo) && file_exists($path. '/' . $user->photo)) {
            unlink($path. '/' . $user->photo);
        }

        $user->photo = $imageName;
        $user->save();

        $request->photo->move(public_path('images'), $imageName);

        return response()->json([
            'status' => true,
            'message' => 'Data Berhasil Diupload'
        ]);
    }
}

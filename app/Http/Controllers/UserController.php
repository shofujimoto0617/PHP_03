<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // User
    public function show(Request $request, $id)
    {
        $user = User::findOrFail($id);

        return view('users.show',['user'=>$user]);
    }
}

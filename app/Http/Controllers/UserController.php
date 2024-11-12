<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function profile($id) {
        if (Auth::id() != $id) {
            abort(403); // Forbidden if trying to access another company's profile
        }
        $user = User::findOrFail($id);

        return view('profileHacker');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function profile($id) {
        $user = User::findOrFail($id);

        return view('profileHacker');
    }
}

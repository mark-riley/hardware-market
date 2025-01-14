<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    function index () {
        return DB::select("select * from test");
    }

    function getMyProfile(){
        $user = User::where('id', Auth::id())->get();
        return view('my-profile', compact('user'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = user::all();
        return view('user', compact('users'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PaginationController extends Controller
{
    public function allUser(){
        $users = User::paginate(10);
        return view('users', compact('users'));
    }
}

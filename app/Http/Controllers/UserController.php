<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $name = "Faysal";
        $users = [
            "name" => "Abu Saleh Faysal",
            "email" => "asfaysal.bracu@gmail.com",
            "contact"=> "01500000000",
        ];
        return view('user', compact('name', 'users'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function create(){

        return view('posts.create');
    }
public function insert(Request $request)
{
    DB::table('users')->insert([

        'Name'=>$request->Name,
        'Age' => $request->Age,
        'Weight' => $request->Weight,
        'height' => $request->height,
        'phone' => $request->phone,
        'email' => $request->email,
        'password' => $request->password
    ]);
    return response('Successfully register');
}
}

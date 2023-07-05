<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

public function insert(Request $request){


    DB::table('users')->insert([
            'name'=>$request->name,
        'Age'=>$request->Age,
        'Weight'=>$request->Weight,
        'height'=>$request->height,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'password'=>$request->password,
        ]);

return response('data has been stored successfully');



    }

}

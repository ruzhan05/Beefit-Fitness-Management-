<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ShowAppointments extends Controller
{
    //auth (not done)


    //index method for all class on database
    public function index(){
        $appnts = DB::table('appoints') -> get();
        return view ('appoints.index',compact('appnts'));
    }
    //create appointments page

    public function create(){
        return view('appointment');
    }
    public function store(Request $request){
        
        //validation
        $request -> validate([
            'email' => 'required',
        ]);
        $data = array(
            'name' => $request -> name,
            'number' => $request -> phone,
            'email' => $request -> email,
            'topic'=> $request -> topic,
            'app_date' => $request -> app_date,
            'app_time' => $request -> app_time,
        );
        DB::table('appoints') ->insert($data);
        return redirect() -> back() -> with ('success' , 'successfully inserted!');

    }
    //delete method
    public function delete($id){
        DB::table('appoints') -> where ('id', $id) -> delete();
        return redirect() -> back() -> with ('success' , 'successfully deleted!');
    }
}

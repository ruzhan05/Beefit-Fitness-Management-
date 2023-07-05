DB::table('users')->insert([

'Name'=>$request->Name
'Age'=>$request->Age
'Weight'=>$request->Weight
'height'=>$request->height
'phone'=>$request->phone
'email'=>$request->email
]);


Route::get('/', function () {
return view('welcome');
});

Route::get('/about', function () {
return view('about');
});
Route::get('/login', function () {
return view(view: 'login');
});

Route::get('registration',function (){

return view('registration');
});


Route::get('FAQ',function (){

return view('FAQ');
});

Route::get('post/create',[UsersController::class,'create']);

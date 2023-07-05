<?php


use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
Route::get('appointment',function (){

    return view('appointment');
});
Route::get('plans',function (){

    return view('plans');
});
Route::get('w1',function (){

    return view('w1');
});
Route::get('w2',function (){

    return view('w2');
});
Route::get('bmi',function (){

    return view('bmi');
});


Route::get('appnts',[App\Http\Controllers\Admin\ShowAppointments::class, 'index']) -> name ('appnts.index');

Route::get('create/appnts',[App\Http\Controllers\Admin\ShowAppointments::class, 'create']) -> name ('create.appnts');
Route::post('store/appnts',[App\Http\Controllers\Admin\ShowAppointments::class, 'store']) -> name ('store.appnts');
Route::get('appnts/delete{id}',[App\Http\Controllers\Admin\ShowAppointments::class, 'delete']) -> name ('appnts.delete');

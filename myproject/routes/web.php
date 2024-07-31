<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\traitementform;


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

Route::post('traitementform', [traitementform::class,'getdata']); //hadi gha route btari9a akhra lli 3dha 3ala9a blpost wkatgulih ila tposta 3dk traitementform dkhul liya lclass smitha traitementform wwhd lfunction smitha
// Route::post('shnu aytposta wkhso ykun b7al l action dyal lformulaire lli saybna 7tash huwa lli ghadi ytposta',[smit lclass::class,'smit lfunction bla a9wass'])



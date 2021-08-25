<?php

use App\Mail\clientFeedback;

use Illuminate\Support\Facades\Mail;
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
    return redirect('/feedback');
});

Route::get('/feedback', function(){
    return view('feedbackPage');
});

Route::post('/feedback', function(){
    $data= request(['name','email','subject','rating','message']);
    
    Mail::to('vinobeeee0@gmail.com')
    ->send(new clientFeedback($data));

    return redirect('/feedback')
    ->with('success','Feedback Send Successfully');
});
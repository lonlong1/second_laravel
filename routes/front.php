<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontController;
// Route::get('/front',function(){
//     return view('front_home');
// });

Route::get('/',[frontController::class,'index'])->name(name:'front.home');
Route::get('/about',[frontController::class,'about'])->name(name:'front.about');
Route::get('/service',[frontController::class,'service'])->name(name:'front.service');
Route::get('/feature',[frontController::class,'feature'])->name(name:'front.feature');
Route::get('/team',[frontController::class,'team'])->name(name:'front.team');
Route::get('/appointment',[frontController::class,'appointment'])->name(name:'front.tappointmenteam');
Route::get('/testimonial',[frontController::class,'testimonial'])->name(name:'front.testimonial');
Route::get('/error',[frontController::class,'error'])->name(name:'front.error');
Route::get('/contact',[frontController::class,'contact'])->name(name:'front.contact');
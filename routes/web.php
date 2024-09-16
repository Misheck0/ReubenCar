<?php

use App\Http\Controllers\CarPartController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
//Define the route for home page
Route::get('/',[CarPartController::class,'index'])->name('homepage');
Route::get('/about',function(){
    return view("homepage.about.html");
})->name("about");
Route::get('/Contact',function(){
    return view("homepage.contact");
})->name("contact");

Route::get('/login',function(){
    return view("homepage.login");
})->name("login");
//Test function
//Route::get("/test",[UserController::class,'TestData']);
Route::post("/user/Login",[UserController::class,'login'])->name("User.login");
Route::get('/Dashboard',[UserController::class,'index'])->name('Dashboard')->middleware('auth');
Route::get('/cars',[CarPartController::class,'cars'])->name("cars.all");
Route::get('/cars/Description/{id}',[CarPartController::class,"CarDetails"])->name("car.detail");
Route::get('/add-item',function(){
    return view("Dashboard.add");
})->name("add")->middleware('auth');

Route::get('/edit/{id}', [CarPartController::class, 'edit'])->name("part.edit");
Route::post('/add',[CarPartController::class,'add'])->name("add-item");
Route::post("/upadate",[CarPartController::class,'update'])->name("part.update");

//Testing logout

Route::get("/logout",[UserController::class,'logout'])->name("logout");


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeMailController;


Route::get("reg ister",[WelcomeMailController::class,'register']);
Route::get("pdfDownload",[WelcomeMailController::class,'pdfDownload'])->name("pdfDownload");
Route::post("do-register",[WelcomeMailController::class,'doRegister'])->name('do.register');


Route::prefix("post")->group(function(){
    Route::name("post.")->group(function(){
        Route::get("list",[PostController::class,'list'])->name("list");
        Route::get("delete",[PostController::class,'delete'])->name("delete");
        Route::get("edit",[PostController::class,'edit'])->name("edit");
        Route::post("up-date",[PostController::class,'update'])->name("update");
    });
});

Route::prefix("user")->group(function(){
    Route::name("user.")->group(function(){
        Route::get("list", [UserController::class, 'list'])->name("list");
        Route::get("post/{id}", [UserController::class, 'post'])->name('post');
        Route::get("login",[UserController::class,'login'])->name("login");
        Route::post("do-login",[UserController::class,'doLogin'])->name("do.login");
        Route::get("register",[UserController::class,'register'])->name("register");
        Route::post("do-register",[UserController::class,'doRegister'])->name("do.register");

        Route::middleware(['is_user'])->group(function(){
            Route::get("welcome",[UserController::class,'welcome'])->name("welcome");
            Route::prefix("posts")->group(function(){
                Route::name("post.")->group(function(){
                    Route::get("add",[PostController::class,'add'])->name("add");
                    Route::post("create",[PostController::class,'create'])->name("create");
                });
            });
        });


    });
});
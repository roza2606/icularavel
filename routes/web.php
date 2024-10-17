<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Route::get('/auth/signin', function () {
//     return view('pages.auth.signin');
// });

Route::get('/feeds', function () {
    return view('pages.feed.index');
});

// // param route - for multi param
// Route::get('/user/{name}/{age}', function ($name, $age) {
//     return 'User ->'.$name. 'Age Is '.$age;
// });

// param route
Route::get('/home/{name}', function ($name) {
    return view('home',['name' => $name]);
});

//named route
Route::get('/user/profile', function () {
    return 'Pengguna Profiles Baru';
})->name('user.profile');

// param route
Route::get('/user/{name}', function ($name) {
    return 'User ->'.$name;
});

//named route - alias of a route.profile
Route::get('/redirect-to-profile', function () {
    return redirect()->route('user.profile');
});

// route group
Route::prefix('food')->group(function () {

    Route::get('/details', function () {
        return 'Food details are following';
    });

    Route::get('/home', function () {
        return 'Food home page';
    });
    
});

// route group - combination  of all 
Route::name('job')->prefix('job')->group(function () {

    Route::get('home', function () {
        return 'Job home page';
    })->name('.home');

    Route::get('details', function () {
        return 'Job details are following';
    })->name('.description');
});
Route::middleware('guest')->group(function () {
    Route::get('/auth/signup', [AuthController::class, 'signUp'])->name('auth.signup');
    Route::get('/auth/signin', [AuthController::class, 'signIn'])->name('auth.signin');
    Route::post('/auth/store', [AuthController::class, 'storeUser'])->name('auth.store');
    Route::post('/auth/authenticate', [AuthController::class, 'authenticate'])->name('auth.authenticate');
});
Route::get('/auth/signout', [AuthController::class, 'signOut'])->name('auth.signout');
require __DIR__.'/feed/web.php';






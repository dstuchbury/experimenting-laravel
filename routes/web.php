<?php

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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::middleware('auth')->group(function() {

    Route::get('users', 'WelcomeController@index')->name('users.index');

    // Redirecting to a named route.
    Route::get('/redirect', function() {
        return redirect()->route('users.index');
    });

});


/*
Option 1 and Option 2 below achieve similar results, in that they protect the routes.
However Option 1 "does it better" and is obviously easier to implement.

Option 1 returns 401 Invalid Signature
Option 2 returns 401 Unauthorised
*/

// Option 1
Route::get('users/{user}', 'WelcomeController@show')
    ->where('user', '[1-9]+')
    ->name('users.show')
    ->middleware('signed');

// Option 1
//Route::get('users/{id}', function (\Illuminate\Http\Request $request) {
//        if (! $request->hasValidSignature()) {
//            abort(401);
//        }
//
//        $app = app();
//        $controller = $app->make(\App\Http\Controllers\WelcomeController::class);
//        return $controller->show(request('id'));
//})->where('id', '[1-9]+')->name('users.show');


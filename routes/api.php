<?php

use App\Models\ModelHasPermission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/user', function () {
    /** @var User $user */
    $user = app(User::class);
    $user = $user->find(1);
//    dd(User::role('manager')->get());
//    $user->assignRole('emitter');
//    dd($user->can('edit articles'));
//    dd($user->hasRole('emitter', 'api'));
//    dd($user->hasPermissionTo('edit articles'));
    return $user->roles()->get()->toArray();
});

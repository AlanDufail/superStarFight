<?php

use App\Http\Controllers\AttaqueController;
use App\Http\Controllers\Admin\IndexAdminController;
use App\Http\Controllers\Player\IndexPlayerController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/characterCreation',
    'App\Http\Controllers\CharacterController@createUserForm'
)->middleware(['auth'])->name('form-inscription');
Route::post('/characterCreation', 'App\Http\Controllers\CharacterController@store');




Route::get('/attaqueCreation',
    'App\Http\Controllers\AttaqueController@createUserForm'
)->middleware(['auth'])->name('form-attaque');
Route::post('/form-attaque', 'App\Http\Controllers\AttaqueController@store');



Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /**
     * Route landing page
     */
    Route::get('/', function () {
        return view('welcome');
    });

    Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {
        Route::get('/', [IndexAdminController::class, 'index'])->name('index');
        Route::resource('/roles', RoleController::class);
        Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
        Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
        Route::resource('/permissions', PermissionController::class);
        Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
        Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
        Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
        Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
        Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
        Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');
    });


    Route::middleware(['auth', 'role:player'])->name('player.')->prefix('player')->group(function () {
        Route::get('/', [IndexPlayerController::class, 'index'])->name('index');
    });

});

require __DIR__ . '/auth.php';

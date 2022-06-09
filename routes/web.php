<?php

use App\Http\Controllers\Admin\IndexAdminController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Personnage\PersonnageController;
use App\Http\Controllers\Selection\SelectionController;
use App\Http\Controllers\Arene\AreneController;
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

Route::get('/arena/{id}', [AreneController::class, 'arena']);

Route::get('/attaque/{idCombat}/{idAttaque}/{idAttaquant}', [AreneController::class, 'attaque'])->name('attaque');

Route::get('/ajout-personnage', 'App\Http\Controllers\Personnage\PersonnageController@createUserForm');
Route::post('/ajout-personnage', 'App\Http\Controllers\Personnage\PersonnageController@userForm');
Route::get('/ajout-attaque', 'App\Http\Controllers\Attaque\AttaqueController@createUserForm');
Route::post('/ajout-attaque', 'App\Http\Controllers\Attaque\AttaqueController@userForm');
Route::get('/ajout-type', 'App\Http\Controllers\Type\TypeController@createUserForm');
Route::post('/ajout-type', 'App\Http\Controllers\Type\TypeController@userForm');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('selection',[SelectionController::class,'selectionPerso'])->name('selection');
Route::get('/selection/{id}',[SelectionController::class,'sendPerso'])->name('send');
Route::get('selection2',[SelectionController::class,'selectionPerso2'])->name('selection2');
Route::get('/selection2/{id}',[SelectionController::class,'sendPerso2'])->name('send2');

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

    Route::resource('/personnages', PersonnageController::class);
    Route::get('/personnages',[PersonnageController::class, 'index'])->name('personnages.index');
    // Route::get('/personnages/{personnage}', [PersonnageController::class, 'show'])->name('users.show');

});


// Route::middleware(['auth', 'role:player'])->name('player.')->prefix('player')->group(function () {
//     Route::get('/', [IndexPlayerController::class, 'index'])->name('index');
// });



require __DIR__ . '/auth.php';

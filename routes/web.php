<?php

use App\Http\Controllers\Admin\IndexAdminController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Personnage\PersonnageController;
use App\Http\Controllers\Selection\SelectionController;
use App\Http\Controllers\Arene\AreneController;
use App\Http\Controllers\Attaque\AttaqueController;
use App\Http\Controllers\Type\TypeController;

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

Route::get('/arena/{id}', [AreneController::class, 'arena'])->name('arena');

Route::get('/attaque/{idCombat}/{idAttaque}/{idAttaquant}', [AreneController::class, 'attaque'])->name('attaque');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');


Route::get('/play', function () {
    return view('play');
})->middleware('auth')->name('play');

Route::get('/selection',[SelectionController::class,'selectionPersonnages'])->name('selectionPersonnages');
Route::get('/selection/{id}/{combatPersonnageId}',[SelectionController::class,'sendPerso'])->name('send');
Route::get('/selection/{id}/',[SelectionController::class,'sendPerso'])->name('send_p');
Route::get('/bataille/{id}/{combatPersonnageId}',[SelectionController::class,'bataille'])->name('bataille');


// ROUTES IF THE USER IS THE ADMIMN
Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [IndexAdminController::class, 'index'])->name('index');


    //Routes roles managment
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
});


Route::middleware(['auth','role:player'])->name('player.')->group(function () {

    Route::get('/ajout-personnage', [PersonnageController::class ,'createUserForm'])->middleware('auth')->name('player.createUserForm');
    Route::post('/ajout-personnage', [PersonnageController::class ,'userForm'])->middleware('auth')->name('userForm');

    Route::get('/ajout-attaque', [AttaqueController::class ,'createUserForm'])->middleware('auth')->name('createUserForm');
    Route::post('/ajout-attaque', [AttaqueController::class ,'userForm'])->middleware('auth')->name('userForm');

    Route::get('/ajout-type', [TypeController::class ,'createUserForm'])->middleware('auth')->name('createUserForm');
    Route::post('/ajout-type', [TypeController::class ,'userForm'])->middleware('auth')->name('userForm');
});

require __DIR__ . '/auth.php';

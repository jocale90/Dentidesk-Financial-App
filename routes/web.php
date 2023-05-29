<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;


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


//Rutas Login
Route::get('login',          [LoginController::class, 'index'])->name('login');
Route::post('validatelogin', [LoginController::class, 'validatelogin'])->name('validatelogin');
Route::get('logout',         [LoginController::class, 'logout'])->name('logout');

//Rutas Dashboard
Route::get('dashboard',      [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');
Route::get('create',         [DashboardController::class, 'create'])->name('dashboard.create')->middleware('auth');
Route::get('edit/{id}',      [DashboardController::class, 'edit'])->name('dashboard.edit')->middleware('auth');
Route::get('delete/{id}',    [DashboardController::class, 'delete'])->name('dashboard.delete')->middleware('auth');
Route::get('update',         [DashboardController::class, 'update'])->name('dashboard.update')->middleware('auth');
Route::post('processcreate', [DashboardController::class, 'processcreate'])->name('dashboard.processcreate')->middleware('auth');
Route::post('procesarupdate',[DashboardController::class, 'procesarupdate'])->name('dashboard.procesarupdate')->middleware('auth');
Route::get('calculo',        [DashboardController::class, 'calculo'])->name('dashboard.calculo')->middleware('auth');


//Ruta ejemple creacion de usuario
Route::get('createuser', function () {
   
    $user = User::create
        ([
            'name' => 'administrador',
            'email' => 'admin@dentidesk.cl',
            'password' => bcrypt('Admin2023'),
            'created_at' => date("Y-m-d"),
        ]);

});

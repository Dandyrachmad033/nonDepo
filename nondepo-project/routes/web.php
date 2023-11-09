<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ModulesController;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\userController;
use App\Http\Controllers\reeferserviceController;
use App\Http\Controllers\staffingstrippingController;
use App\Http\Controllers\AnalisisController;
use App\Http\Controllers\Bongkar;
use Illuminate\Support\Facades\Route;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->group(function () {
    // Route to Controller Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    //Route to Controller menu reefer service
    Route::get('/reefer_pti', [reeferserviceController::class, 'pti'])->name('pti');
    Route::get('/reefer_monitoring', [reeferserviceController::class, 'monitoring'])->name('monitoring');
    Route::get('/reefer_plugging', [reeferserviceController::class, 'plugging'])->name('reefer_plugging');
    Route::post('/start_plugging', [reeferserviceController::class, 'start_plugging']);
    Route::put('/end_plugging', [reeferserviceController::class, 'end_plugging']);
    Route::put('/monitorings', [reeferserviceController::class, 'monitoring_plug']);


    //Route to Controller menu stuffing stripping
    Route::get('/stuffing-stripping', [staffingstrippingController::class, 'index'])->name('index');
    Route::get('/details', [staffingstrippingController::class, 'detail'])->name('details');
    Route::get('/cfs_view', [staffingstrippingController::class, 'cfs_view'])->name('cfs');

    //Route To Analisis Data
    Route::get('/analisis', [AnalisisController::class, 'index'])->name('analisis');

    //Route to Bongkar
    Route::get('/bongkar', [Bongkar::class, 'bongkar'])->name('bongkar');
    Route::post('/bongkar_principal', [Bongkar::class, 'bongkar_principal'])->name('bongkar_principal');
    Route::get('/bongkar_data', [Bongkar::class, 'bongkar_data'])->name('bongkar_data');
    Route::post('/bongkar_update', [Bongkar::class, 'bongkar_update'])->name('bongkar_update');
});

// Route to Controller User access Applications
Route::get('/', [UsersController::class, 'index']);
Route::post('/login', [UsersController::class, 'authenticatelogin']);
Route::get('/regis', [RegisController::class, 'index']);
Route::post('/register', [RegisController::class, 'user_regis']);
Route::get('/logout', [UsersController::class, 'authenticatelogout']);
Route::post('/logout_bongkar', [UsersController::class, 'authenticatelogout_bongkar']);

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/module_management', [ModulesController::class, 'index'])->name('module_management');
    Route::get('/add_module_view', [ModulesController::class, 'view_add_module_data'])->name('add_module_view');
    Route::get('/edit_module/{id}', [ModulesController::class, 'edit_module_data'])->name('edit_module');
    Route::post('/add_module', [ModulesController::class, 'add_module_data']);
    Route::put('/update_module/{id}', [ModulesController::class, 'update_module_data'])->name('update_module');
    Route::get('/remove_module/{id}', [ModulesController::class, 'remove_module'])->name('remove_module');

    // Route to Controller Access management
    Route::get('/access_management', [AccessController::class, 'index']);
    Route::get('/edit_access_management', [AccessController::class, 'editaccess']);

    // Route to Controller User management
    Route::get('/user_management', [userController::class, 'index']);
    Route::get('/edit_user_management', [userController::class, 'edituser']);

    // Route to admin Monitoring
    Route::get('/not_monitoring', [reeferserviceController::class, 'not_monitoring'])->name('not_monitoring');
});
// Route to Controller Module management

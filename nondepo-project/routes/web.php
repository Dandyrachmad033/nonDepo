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
use App\Http\Controllers\jobOrderController;
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
    Route::get('/dashboard', [AnalisisController::class, 'index']);

    //Route to Controller menu reefer service
    Route::get('/reefer_pti', [reeferserviceController::class, 'pti'])->name('pti');
    Route::get('/reefer_monitoring', [reeferserviceController::class, 'monitoring'])->name('monitoring');
    Route::get('/reefer_plugging', [reeferserviceController::class, 'plugging'])->name('reefer_plugging');
    Route::post('/start_plugging', [reeferserviceController::class, 'start_plugging'])->name('start_plugging');
    Route::put('/end_plugging', [reeferserviceController::class, 'end_plugging']);
    Route::put('/monitorings', [reeferserviceController::class, 'monitoring_plug']);
    Route::get('/history', [reeferserviceController::class, 'history'])->name('history');
    Route::get('/view_history/{id_plug}', [reeferserviceController::class, 'view_history'])->name('view_history');



    //Route to Controller menu stuffing stripping
    Route::get('/stuffing-stripping', [staffingstrippingController::class, 'index'])->name('stuffing-stripping');
    Route::get('/form_cfs', [staffingstrippingController::class, 'index_form'])->name('form_cfs');
    Route::get('/finish_stufstrip', [staffingstrippingController::class, 'index_finish'])->name('finish_stufstrip');
    Route::get('/details/{id}', [staffingstrippingController::class, 'detail'])->name('details');
    Route::get('/details_tally/{id}', [staffingstrippingController::class, 'detail_tally'])->name('details_tally');
    Route::get('/details_release/{id}', [staffingstrippingController::class, 'detail_release'])->name('details_release');
    Route::get('/details_receiving/{id}', [staffingstrippingController::class, 'detail_receiving'])->name('details_receiving');
    Route::get('/cfs_view', [staffingstrippingController::class, 'cfs_view'])->name('cfs');
    Route::post('/cfs_form', [staffingstrippingController::class, 'cfs_form'])->name('cfs_form');
    Route::post('/form_tally', [staffingstrippingController::class, 'form_tally'])->name('form_tally');
    Route::post('/form_release', [staffingstrippingController::class, 'form_release'])->name('form_release');
    Route::post('/form_receiving', [staffingstrippingController::class, 'form_receiving'])->name('form_receiving');
    Route::get('/cfs_tally', [staffingstrippingController::class, 'cfs_tally'])->name('cfs_tally');
    Route::get('/cargo_release', [staffingstrippingController::class, 'cargo_release'])->name('cargo_release');
    Route::get('/cargo_receiving', [staffingstrippingController::class, 'cargo_receiving'])->name('cargo_receiving');
    Route::get('/resume_cfs/{id}', [staffingstrippingController::class, 'resume_cfs'])->name('resume_cfs');
    Route::get('/resume_cfs_tally/{id}', [staffingstrippingController::class, 'resume_cfs_tally'])->name('resume_cfs_tally');
    Route::get('/resume_cfs_release/{id}', [staffingstrippingController::class, 'resume_cfs_release'])->name('resume_cfs_release');
    Route::get('/resume_cfs_receiving/{id}', [staffingstrippingController::class, 'resume_cfs_receiving'])->name('resume_cfs_receiving');
    Route::post('/resume_worksheet', [staffingstrippingController::class, 'resume_worksheet'])->name('resume_worksheet');
    Route::post('/resume_tally', [staffingstrippingController::class, 'resume_tally'])->name('resume_tally');
    Route::post('/resume_release', [staffingstrippingController::class, 'resume_release'])->name('resume_release');
    Route::post('/resume_receiving', [staffingstrippingController::class, 'resume_receiving'])->name('resume_receiving');
    Route::post('/finish_form_worksheet', [staffingstrippingController::class, 'finish_form_worksheet'])->name('finish_form_worksheet');
    Route::post('/finish_form_tally', [staffingstrippingController::class, 'finish_form_tally'])->name('finish_form_tallyt');
    Route::post('/finish_form_release', [staffingstrippingController::class, 'finish_form_release'])->name('finish_form_release');
    Route::post('/finish_form_receiving', [staffingstrippingController::class, 'finish_form_receiving'])->name('finish_form_receiving');
    Route::post('/finish_resume_worksheet', [staffingstrippingController::class, 'finish_resume_worksheet'])->name('finish_resume_worksheet');
    Route::post('/finish_resume_tally', [staffingstrippingController::class, 'finish_resume_tally'])->name('finish_resume_tally');
    Route::post('/finish_resume_release', [staffingstrippingController::class, 'finish_resume_release'])->name('finish_resume_release');
    Route::post('/finish_resume_receiving', [staffingstrippingController::class, 'finish_resume_receiving'])->name('finish_resume_receiving');


    //Route To Analisis Data
    Route::get('/analisis', [AnalisisController::class, 'index'])->name('analisis');

    //Route to Bongkar
    Route::get('/bongkar', [Bongkar::class, 'bongkar'])->name('bongkar');
    Route::post('/bongkar_principal', [Bongkar::class, 'bongkar_principal'])->name('bongkar_principal');
    Route::get('/bongkar_data', [Bongkar::class, 'bongkar_data'])->name('bongkar_data');
    Route::post('/bongkar_update', [Bongkar::class, 'bongkar_update'])->name('bongkar_update');

    //Route to Create JO
    Route::get('/create_jo', [jobOrderController::class, 'index'])->name('create_jo');
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
    Route::get('/access_management', [AccessController::class, 'index'])->name('access_managament');
    Route::get('/edit_access_management', [AccessController::class, 'editaccess']);
    Route::post('/disable', [AccessController::class, 'disable_access'])->name('disable');
    Route::post('/enable', [AccessController::class, 'enable_access'])->name('enable');

    // Route to Controller User management
    Route::get('/user_management', [userController::class, 'index'])->name('user_management');
    Route::get('/edit_user_management/{id_user}', [userController::class, 'edituser'])->name('edit_user_management');
    Route::post('/change_password', [userController::class, 'change_password']);
    Route::post('/disable_user', [userController::class, 'disable_user'])->name('disable_user');
    Route::post('/enable_user', [userController::class, 'enable_user'])->name('enable_user');

    // Route to admin Monitoring
    Route::get('/not_monitoring', [reeferserviceController::class, 'not_monitoring'])->name('not_monitoring');
});
// Route to Controller Module management

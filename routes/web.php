<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Admin\UserManage\Settings;
use App\Http\Livewire\Admin\Categories\Index;
use App\Http\Controllers\User\ReportController;
use App\Http\Controllers\Admin\ReportsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\Admin\RegulationsController;
use App\Http\Livewire\Admin\System\SystemSettings;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

    //Rules And Regulations
    Route::get('regulations', [RegulationsController::class, 'index']);
    Route::get('regulations/create', [RegulationsController::class, 'create']);
    Route::post('regulations/store', [RegulationsController::class, 'store']);
    Route::get('/regulations/{regulations}', [RegulationsController::class, 'show']);
    Route::put('regulations/{regulations}', [RegulationsController::class, 'update']);
    //Livewire
    // Route::get('/categories', Index::class);
    //Report
    Route::get('/reports', [ReportsController::class, 'index']);
    //Livewire User Settings
    Route::get('/usermanage', Settings::class);
        //Livewire User Settings
    Route::get('/system', SystemSettings::class);



});


Route::prefix('user')->middleware(['auth'])->group(function () {

Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('report', [ReportController::class, 'index']);
//Reports
Route::post('reports/create', [ReportController::class, 'store']);


});

Route::get('/', [DashboardController::class, 'index']);
Route::get('/index', [ReportController::class, 'index1']);



<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectsinglepageController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TickethistoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactformController;
use App\Http\Controllers\BasicticketController;

use App\Http\Controllers\Auth\AuthenticatedSessionController;

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



Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('index');

Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'verified', 'role:admin'])->name('admin.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/adminlte', function () {
    return view('adminlte');
});

Route::group(['middleware' => ['auth', 'verified', 'role:admin']], function () {

    // Route::resource('tickets', TicketController::class);
    // Route::post('/tickethistory_store', [TickethistoryController::class, 'store'])->name('tickethistory_store');

});

Route::resource('tickets', TicketController::class);
Route::post('/tickethistory_store', [TickethistoryController::class, 'store'])->name('tickethistory_store');

Route::get('/myticket', [TicketController::class, 'myticket'])->name('myticket');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\{AccountsController, GoodsController, HomeController, PaymentsController, ProfileController, StocksController};
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function(){
    //Home page
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    //Accounts page
    Route::get('/accounts', [AccountsController::class, 'index'])->name('accounts.index');

    //Goods page
    Route::get('/goods', [GoodsController::class, 'index'])->name('goods.index');

    //Payments page
    Route::get('/payments', [PaymentsController::class, 'index'])->name('payments.index');

    //Stocks page
    Route::get('/stocks', [StocksController::class, 'index'])->name('stocks.index');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

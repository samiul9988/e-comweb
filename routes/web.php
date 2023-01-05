<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
// Route::get('product/edit', [ProductController::class, 'edit'])->name('product.edit');
// Route::get('product/index', [ProductController::class, 'index'])->name('product.index');
// Route::get('product/show', [ProductController::class, 'show'])->name('product.show');
// Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
// Route::delete('product/delete', [ProductController::class, 'delete'])->name('product.delete');
// Route::patch('product/update', [ProductController::class, 'update'])->name('product.update');

Route::controller(ProductController::class)->prefix('products/')->name('products.')->group(function(){
    Route::get('create',  'create')->name('create');
Route::get('edit/{id}',  'edit')->name('edit');
Route::get('/',  'index')->name('index');
Route::get('show/{id}',  'show')->name('show');
Route::post('store',  'store')->name('store');
Route::delete('delete/{id}',  'destroy')->name('delete');
Route::patch('update/{id}',  'update')->name('update');
});

// Route::controller(ProductController::class)->prefix('products/')->name('product.')->group(function(){
//     Route::get('create',  'create')->name('create');
// Route::get('edit',  'edit')->name('edit');
// Route::get('index',  'index')->name('index');
// Route::get('show',  'show')->name('show');
// Route::post('store',  'store')->name('store');
// Route::delete('delete',  'delete')->name('delete');
// Route::patch('update',  'update')->name('update');
// });

// // Route::resource("/produc", ProductController::class);
// Route::get('product', [ProductController::class, 'index']);
// Route::get('product/create', [ProductController::class, 'create']);


require __DIR__.'/auth.php';

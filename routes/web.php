<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SayHelloController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home', ['name' => 'Fatih']);
});

// Route::get('/product', function () {
//     $products = [
//         [
//             'name' => 'Product A',
//             'price' => 2000
//         ],
//         [
//             'name' => 'Product B',
//             'price' => 3000
//         ]
//     ];

//     return view('pages.product', compact('products'));
// });

// Route::get('/category', function () {
//     return view('pages.category');
// });

Route::get('say-hello', function () {
    return 'hello world';
});

Route::get('say-hello/{name}', [SayHelloController::class, 'sayHello']);
Route::get('hello/{name}', [SayHelloController::class, 'hello']);





// route untuk crud category
Route::get('category', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('category', [CategoryController::class, 'store'])->name('category.store');
Route::get('category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('category/{id}/update', [CategoryController::class, 'update'])->name('category.update');
Route::delete('category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

// route untuk product, menggunakan resource
Route::resource('product', ProductController::class);

// route untuk transaction
Route::get('transaction', [TransactionController::class, 'index'])->name('transaction.index');
Route::get('transaction/cart', [TransactionController::class, 'create'])->name('transaction.create');
Route::post('transaction/cart/add', [TransactionController::class, 'addToCart'])->name('transaction.cart.add');
Route::post('transaction/update', [TransactionController::class, 'updateCart'])->name('transaction.cart.update');
Route::get('transaction/cancel/{id}', [TransactionController::class, 'removeFromCart'])->name('transaction.cart.remove');
Route::get('transaction/cancel', [TransactionController::class, 'cancel'])->name('transaction.cancel');
Route::post('transaction/checkout', [TransactionController::class, 'checkout'])->name('transaction.checkout');


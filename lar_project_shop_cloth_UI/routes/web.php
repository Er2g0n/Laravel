<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProductController as ClientProductController;
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
Route::name('client.')->group(function () {
    Route::get('/',[HomeController::class, 'index'])->name('index');
    Route::get('/the-loai/{id}', [ClientProductController::class, 'category'])->name('category');
    Route::get('/chi-tiet-san-pham/{id}', [ClientProductController::class, 'detail'])->name('detail');
    Route::get('/gio-hang', [CartController::class, 'cart'])->name('cart');
    Route::get('/thanh-toan', [CartController::class, 'checkout'])->name('checkout');


});




Route::get('auth/login',[LoginController::class,'showLogin'])->name('showLogin'); /* Hiện giao diện */
Route::post('auth/login',[LoginController::class,'login'])->name('login'); /* Hiện form login */
Route::get('auth/logout', Logout::class)->name('logout'); /* Hiện giao diện */

/* sau khi tạo check_login bên kernel thì gọi ra trong hàm route, bọc hết lại các route bên dưới */
Route::prefix('admin')->name('admin.')->middleware('check_login')->group(function () {
    Route::prefix('category')->name('category.')->controller(CategoryController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('product')->name('product.')->controller(ProductController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');

        Route::post('upload-file/{id}', 'uploadFile')->name('uploadFile');
        Route::get('delete-file/{id}', 'deleteFile')->name('deleteFile');

    });

    Route::prefix('user')->name('user.')->controller(UserController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    //Slider
    // Route::prefix('slider')->name('slider.')->controller(SliderController::class)->group(function () {
    //     Route::get('list', 'list')->name('list');

    //     Route::get('create', 'create')->name('create');
    //     Route::post('store', 'store')->name('store');

    //     Route::get('{edit/id}', 'edit')->name('edit');
    //     Route::post('update/{id}', 'update')->name('update');

    //     Route::get('destroy/{id}', 'destroy')->name('destroy');
    // });
});

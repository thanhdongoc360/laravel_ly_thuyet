<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;

//Client routes

Route::prefix('categories')->group(function () {
    //Danh sách chuyên mục
    Route::get('/', [CategoriesController::class, 'index'])->name('categories.list');

    //Lấy chi tiết 1 chuyên mục (Áp dụng show form sửa chuyên mục)
    Route::get('/edit/{id}', [CategoriesController::class, 'getCategory'])->name('categories.edit');

    //Xử lý update chuyên mục
    Route::post('/edit/{id}', [CategoriesController::class, 'updateCategory'])->name('categories.update');

    //Hiển thị form thêm chuyên mục
    Route::get('/add', [CategoriesController::class, 'addCategory'])->name('categories.add');

    //Xử lý thêm chuyên mục
    Route::post('/add', [CategoriesController::class, 'handleAddCategory'])->name('categories.store');

    //Xóa chuyên mục
    Route::delete('delete/{id}', [CategoriesController::class, 'deleteCategory'])->name('categories.delete');
});

Route::prefix('admin')->group(function () {

    Route::resource('products', ProductsController::class);
});

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::prefix('admin')->group(function () {

    Route::get('/unicode/{slug}-{id}.html', function ($id, $slug) {
        $content = 'Phương thức get của path /unicode với tham số: ';
        $content .= 'id = ' .$id;
        return $content;
    });

    Route::get('/show-form', function () {
        return view('form');
    });

    Route::prefix('products')->group(function () {
        Route::get('/', function () {
            return 'Danh sách sản phẩm';
        });

        Route::get('/add', function () {
            return 'Thêm sản phẩm';
        });

        Route::get('/edit', function () {
            return 'Chỉnh sửa sản phẩm';
        });

        Route::get('/delete', function () {
            return 'Xóa sản phẩm';
        });
        
    });

});
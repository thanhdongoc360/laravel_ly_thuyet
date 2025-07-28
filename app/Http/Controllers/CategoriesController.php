<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __construct(){

    }

    //Hiển thị danh sách theo chuyên mục (Phương thức GET)
    public function index(){
        return view('clients/categories/list');
    }

    //Lấy ra 1 chuyên mục theo id (Phương thức get)
    public function getCategory($id){
        return view('clients/categories/edit');
    }

    //Sửa 1 chuyên mục (Phương thức post)
    public function updateCategory($id){
        return 'Submit sửa chuyên mục:' . $id;
    }

    //Show form thêm dữ liệu (Phương thức get)
    public function addCategory(){
        return view('clients/categories/add');
    }

    //Thêm dữ liệu vào chuyên mục (Phương thức post)
    public function handleAddCategory(){
        return redirect(route('categories.add'));
        // return 'Submit thêm chuyên mục';
    }

    //Xóa dữ liệu(Phương thức delete)
    public function deleteCategory($id){
        return 'Submit xóa chuyên mục:' . $id;
    }
}

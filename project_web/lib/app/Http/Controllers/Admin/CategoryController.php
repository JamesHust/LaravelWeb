<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;

class CategoryController extends Controller
{
    
    public function getCate(){
    	$data['catelist']= Category::all();
    	return view('backend.category',$data);
    }
    public function postCate(AddCateRequest $requests){
    	$category= new Category;
    	$category->cate_name=$requests->name;
    	$category->cate_slug=str_slug($requests->name);
    	$category->save();
    	return back();
    }
    public function getEditCate($id){
        $data['cate']=Category::find($id);
    	return view('backend.editcategory',$data);
    }
    public function postEditCate(EditCateRequest $requests,$id){
        $category= Category::find($id);
        $category->cate_name=$requests->name;
        $category->cate_slug=str_slug($requests->name);
        $category->save();
        return redirect('admin/category/');
    }

    public function getDeleteCate($id){
    	Category::destroy($id);
        return back();
    }
}

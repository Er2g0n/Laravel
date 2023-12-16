<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();
        /* Thằng nào mới tạo thì hiện thị giảm dần */
        return view('admin.modules.category.index',[
            'categories' => $categories             /* Truyền dữ liệu qua view, nhiều nên để thêm s */
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id','name','parent_id')->get();
        
        return view('admin.modules.category.create',[
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;/* name đầu trỏ đến tên cột trong database, name kia là gọi đến name trong input form  */
        $category->status = $request->status;/* status đầu trỏ đến tên cột trong database, status kia là gọi đến status trong input form  */
        
        $category->save();

        return redirect()->route('admin.category.index')->with('success','Created category succesfully'); /* chuyển trang */
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) 
    {
        return view('admin.modules.category.edit');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)/* Nếu là số phải chuyển qua int */
    {
        $category = Category::findOrFail($id);

        $categories = Category::select('id','name','parent_id')->get();

        return view('admin.modules.category.edit',[
            'id'=>$id,
            'category' => $category,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
        $category = Category::findOrFail($id);

        $category->name = $request->name;
        $category->status = $request->status;

        $category->save();

        return redirect()->route('admin.category.index')->with('success','Updated category succesfully'); /* chuyển trang */

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $category = Category::findOrFail($id);
 
        $category->delete();
        return redirect()->route('admin.category.index')->with('success','Deleted category succesfully');
    }
}

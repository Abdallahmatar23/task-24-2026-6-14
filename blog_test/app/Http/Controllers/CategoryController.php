<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('client.pages.fashion', ['categories' => $categories]);
    }

    public function admin()
    {
        $categories = Category::all();
        return view('admin.pages.categories', ['categories' => $categories]);
    }

    public function create()
    {
        return view('admin.pages.add-category');
    }

    public function store(Request $request)
    {

        // (new Category())->store($request->title,$request->desc)
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Category::create($request->only('title', 'description'));
        return redirect()->route('categories.admin')->with('success', 'Category Created Successfully');
    }

    public function edit(int $id)
    {
        // $oldData = new Category()->find($id);
        $category = Category::findOrFail($id);
        return view('admin.pages.edit-category', ['category' => $category]);
    }

    public function update(Request $request, int $id)
    {

        // (new Category())->update(trim($request->title),trim($request->desc));

        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $category = Category::findOrFail($id);
        $category->update($request->only('title', 'description'));
        return redirect()->route('categories.admin')->with('success', 'Category Updated Successfully');
    }

    public function destroy(int $id)
    {
        Category::findOrFail($id)->delete();

        return redirect()->route('categories.admin')->with('success', 'Category Deleted Successfully');
    }
}

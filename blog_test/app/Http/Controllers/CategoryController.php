<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = [];
        return view('admin.pages.categories', ['categories' => $categories]);
    }

    public function create()
    {
        return view('admin.pages.add-category');
    }

    public function store(Request $request)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // $data= [
            //     'title' => $request->title,
            //     'desc' => $request->desc
            // ];

            // (new Category())->store($request->title,$request->desc)
            return view($this->index());
        }
        return view($this->create());
    }

    public function edit()
    {
        return view('admin.pages.edit-category');
    }

    public function update(Request $request)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // $data= [
            //     'title' => $request->title,
            //     'desc' => $request->desc
            // ];

            // (new Category())->store(trim($request->title),trim($request->desc))
            return view($this->index());
        }
        return view($this->edit());
    }
}

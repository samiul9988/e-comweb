<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        return view('create');
    }
    public function edit(){

    }
    public function index(){

    }
    public function show(){

    }
    public function store(Request $request){
        $request->validate([
            'name'    => 'required',
            'description'    => 'required',
            'category_id'    => 'required',
            'image'    => 'required'
        ]);

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);
    }
    public function delete(){

    }
    public function update(){

    }
}
